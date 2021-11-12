<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo "<p>Please log in first to see this page <a href='login.php'>LOGIN</a> </p>";
} else { 

    $_SESSION["id"] = "1";

    echo "<h2 style='text-align:center'>WELCOME! " . ucfirst($_SESSION['name']) . "</h2>";
    echo "<h5 style='text-align:right'>If you need to <a href='logout.php'>LOGOUT</a> , please log out here </h5>";

 ?>

  <html>

  <head>
    <title>Efkon Signup Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
    <script language="JavaScript" src="seasons.js"></script>
    <script language="JavaScript" src="table.js"></script>
    <script language="JavaScript" src="data.js"></script>
  </head>

  <body>
    <div class="container">
      <br />
      <h3 align="center">Efkon Signup Data</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-md-6">
              <h3 class="panel-title">Efkon Signup Data</h3>
            </div>
            <div class="col-md-6" align="right">
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <span id="form_response"></span>
            <table id="user_data" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <td>Name</td>
                  <td>Surname</td>
                  <td>Gender</td>
                  <td>Email</td>
                  <td>Contact Number</td>
                  <td>Password</td>
                  <td>Edit</td>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>


  <body onload="OK='OMED';currentYear();computeSeasons(
document.form.Jahr.options[document.form.Jahr.selectedIndex].value);readData();"
    style="background-color: rgb(255, 255, 255);">
    <center>
    
      <form action="" method="post" name="form">
        <center>
          <table bgcolor="#268714" border="1" cellpadding="5"
            cellspacing="0" width="450">
            <tbody>
              <tr>
                <td>
                  <center><font color="#ffffff" face="verdana, arial,
                      helvetica, sans-serif" size="+1">Equinoxes</font>&nbsp; &nbsp;
                    <p>
                      <table bgcolor="#5ce07f" border="1"
                        bordercolor="#c76040" cellpadding="0"
                        cellspacing="0" width="400">
                        <tbody>
                          <tr>
                            <td rowspan="4" width="125">
                              <center><font face="verdana, arial,
                                  helvetica, sans-serif">Year:</font>
                                <p>
                                  <select name="Jahr"
                                    onchange="computeSeasons(
                                    document.form.Jahr.options[document.form.Jahr.selectedIndex].value)">
                                    <option value="1990">1990 </option>
                                    <option value="1991">1991 </option>
                                    <option value="1992">1992 </option>
                                    <option value="1993">1993 </option>
                                    <option value="1994">1994 </option>
                                    <option value="1995">1995 </option>
                                    <option value="1996">1996 </option>
                                    <option value="1997">1997 </option>
                                    <option value="1998">1998 </option>
                                    <option value="1999">1999 </option>
                                    <option value="2000">2000 </option>
                                    <option value="2001">2001 </option>
                                    <option value="2002">2002 </option>
                                    <option value="2003">2003 </option>
                                    <option value="2004">2004 </option>
                                    <option value="2005">2005 </option>
                                    <option value="2006">2006 </option>
                                    <option value="2007">2007 </option>
                                    <option value="2008">2008 </option>
                                    <option value="2009">2009 </option>
                                    <option value="2010">2010 </option>
                                    <option value="2011">2011 </option>
                                    <option value="2012">2012 </option>
                                    <option value="2013">2013 </option>
                                    <option value="2014">2014 </option>
                                    <option value="2015">2015 </option>
                                    <option value="2016">2016 </option>
                                    <option value="2017">2017 </option>
                                    <option value="2018">2018 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2020">2020 </option>
                                    <option value="2021">2021 </option>
                                    <option value="2022">2022 </option>
                                    <option value="2023">2023 </option>
                                    <option value="2024">2024 </option>
                                    <option value="2025">2025 </option>
                                    <option value="2026">2026 </option>
                                    <option value="2027">2027 </option>
                                    <option value="2028">2028 </option>
                                    <option value="2029">2029 </option>
                                    <option value="2030">2030 </option>
                                    <option value="2031">2031 </option>
                                  </select>
                                </p>
                              </center>
                            </td>
                            <td width="125">
                              <p align="right"><font face="verdana,
                                  arial, helvetica, sans-serif">Autumn:
                                </font> </p>
                            </td>
                            <td width="150">
                              <p><font face="verdana, arial, helvetica,
                                  sans-serif"><input name="autumnText"
                                    value="" size="30" type="text"></font>
                              </p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </p>

                </td>
              </tr>
            </tbody>
          </table>
        </center>
      </form>
    </center>
  </body>
  </html>

  <script type="text/javascript" language="javascript">
    $(document).ready(function() {

      var dataTable = $('#user_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "fetch.php",
          type: "POST"
        },
        "columnDefs": [{
          "targets": [4, 5, 6],
          "orderable": false,
        }, ],

      });

      $(document).on('click', '.view', function() {
        var id = $(this).attr('id');
        var options = {
          ajaxPrefix: '',
          ajaxData: {
            id: id
          },
          ajaxComplete: function() {
            this.buttons([{
              type: Dialogify.BUTTON_PRIMARY
            }]);
          }
        };
        new Dialogify('fetch_single_data.php', options)
          .title('View Signup Details')
          .showModal();
      });

      $(document).on('click', '.update', function() {
        var id = $(this).attr('id');
        $.ajax({
          url: "fetch_single_data.php",
          method: "POST",
          data: {
            id: id
          },
          dataType: 'json',
          success: function(data) {
            localStorage.setItem('name', data[0].name);
            localStorage.setItem('surname', data[0].surname);
            localStorage.setItem('gender', data[0].gender);
            localStorage.setItem('email', data[0].email);
            localStorage.setItem('contact_number', data[0].contact_number);

            var options = {
              ajaxPrefix: ''
            };
            new Dialogify('edit_data_form.php', options)
              .title('Edit Signup Data')
              .buttons([{
                  text: 'Cancel',
                  click: function(e) {
                    this.close();
                  }
                },
                {
                  text: 'Edit',
                  type: Dialogify.BUTTON_PRIMARY,
                  click: function(e) {
                    var form_data = new FormData();
                    form_data.append('name', $('#name').val());
                    form_data.append('surname', $('#surname').val());
                    form_data.append('gender', $('#gender').val());
                    form_data.append('email', $('#email').val());
                    form_data.append('contact_number', $('#contact_number').val());
                    form_data.append('id', data[0].id);
                    $.ajax({
                      method: "POST",
                      url: 'update_data.php',
                      data: form_data,
                      dataType: 'json',
                      contentType: false,
                      cache: false,
                      processData: false,
                      success: function(data) {
                        if (data.error != '') {
                          $('#form_response').html('<div class="alert alert-danger">' + data.error + '</div>');
                        } else {
                          $('#form_response').html('<div class="alert alert-success">' + data.success + '</div>');
                          dataTable.ajax.reload();
                        }
                      }
                    });
                  }
                }
              ]).showModal();
          }
        })
      });
    });
  </script>
<?php
} 
  


?>

