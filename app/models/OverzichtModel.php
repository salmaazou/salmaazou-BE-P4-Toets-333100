<?php
// OverzichtModel.php (Model)

class OverzichtModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getExaminatoren()
    {
        $query = "SELECT Examinator.Id, Examinator.Voornaam, Examinator.Tussenvoegsel, Examinator.Achternaam, Examen.Datum, Examen.Rijbewijscategorie, Examen.Rijschool, Examen.Stad, Examen.Uitslag
                  FROM Examinator
                  INNER JOIN ExamenPerExaminator ON Examinator.Id = ExamenPerExaminator.ExaminatorId
                  INNER JOIN Examen ON ExamenPerExaminator.ExamenId = Examen.Id
                  ORDER BY Examen.Datum DESC";

        try {
            $this->db->query($query);
            return $this->db->resultSet();
        } catch (PDOException $e) {
            echo "Fout bij het ophalen van de gegevens: " . $e->getMessage();
            exit;
        }
    }
}

?>
