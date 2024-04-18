<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html>
<head>
    <title>WHALE HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        // Función para mostrar información de la ballena seleccionada
        function showWhaleInfo() {
            var selectElement = document.getElementById('whale-info');
            var whaleInfo = selectElement.options[selectElement.selectedIndex].dataset.info;
            document.getElementById('whale-details').innerText = whaleInfo;
        }
    </script>
</head>
<body>
<h1>Hi, <?php echo $_SESSION['name']; ?>!</h1>
    
    <!-- Lista desplegable con información de ballenas -->
    <label for="whale-info">Choose a whale species:</label>
    <select id="whale-info" name="whale-info" onchange="showWhaleInfo()">
        <option data-info="The blue whale is the largest animal known to have ever existed. It can grow up to 30 meters long and weigh over 170 tons." value="blue-whale">Blue Whale</option>
        <option data-info="The humpback whale is known for its distinctive song and acrobatic behavior. It can grow up to 18 meters long." value="humpback-whale">Humpback Whale</option>
        <option data-info="The sperm whale is the largest toothed predator on Earth. Males can grow up to 18 meters long." value="sperm-whale">Sperm Whale</option>
        <option data-info="The beluga whale is known for its white coloration and expressive vocalizations. It can grow up to 6 meters long." value="beluga-whale">Beluga Whale</option>
        <option data-info="Orcas, also known as killer whales, are highly intelligent and social. They can grow up to 9 meters long." value="orca">Orca</option>
    </select>

    <!-- Espacio para mostrar información de la ballena seleccionada -->
    <p id="whale-details">Select a whale species to see more information.</p>

    <a href="logout.php">EXIT</a>
</body>
</html>

<?php 
} else {
    header("Location: index.php");
    exit();
}
?>