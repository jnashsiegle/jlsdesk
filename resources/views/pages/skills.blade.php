<!--SKILLS DESCRIPTION -->
    <div id="skillswrap">
        <div class="container">
            <div class="row">
                    <div class="col-lg-2 col-lg-offset-1">
                        <h5>SKILLS</h5>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="html" height="130" width="130"></canvas>
                        <p>HTML | CSS | SASS</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 90,
                                        color: "#063CBF"
                                    },
                                    {
                                        value : 10,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("html").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="javascript" height="130" width="130"></canvas>
                        <p>JavaScript</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 50,
                                        color:"#063CBF"
                                    },
                                    {
                                        value : 50,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="laravel" height="130" width="130"></canvas>
                        <p>Laravel | PHP</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 80,
                                        color:"#063CBF"
                                    },
                                    {
                                        value : 20,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("laravel").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    
                    <div class="col-lg-3 col-lg-offset-3 centered">
                        <canvas id="mysql" height="130" width="130"></canvas>
                        <p>MySQL</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 70,
                                        color:"#063CBF"
                                    },
                                    {
                                        value : 30,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("mysql").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="ajax" height="130" width="130"></canvas>
                        <p>Ajax</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 40,
                                        color:"#063CBF"
                                    },
                                    {
                                        value : 60,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("ajax").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                    <div class="col-lg-3 centered">
                        <canvas id="illustrator" height="130" width="130"></canvas>
                        <p>Photoshop | Illustrator</p>
                        <br>
                        <script>
                            var doughnutData = [
                                    {
                                        value: 60,
                                        color:"#063CBF"
                                    },
                                    {
                                        value : 40,
                                        color : "#ecf0f1"
                                    }
                                ];
                                var myDoughnut = new Chart(document.getElementById("illustrator").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>

            </div><!--/.row -->
            <br>
        </div><!--/.container -->
    </div><!--/ #skillswrap -->
