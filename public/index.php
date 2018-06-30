<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="google" value="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> NEMU</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/prettify.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body onload="start()">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">NEMU - Visual Programming Environment</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Menu
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Playground</a>
                            </li>
                            <li>
                                <a href="#">Sign In</a>
                            </li>
                            <li>
                                <a href="#">Sign Up</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div id="main-wrapper" class="row">
            <div class="col-xs-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Workspace</h3>
                    </div>
                    <div id="blocklyDiv" class="panel-body"></div>
                </div>
            </div>
            <xml id="toolbox">
                <category name="Variables">
                    <category name="Variable">
                        <block type="variables_declare"></block>
                        <block type="variables_get"></block>
                        <block type="variables_set"></block>
                    </category>
                    <category name="Pointer">
                        <block type="variables_pointer_declare"></block>
                        <block type="variables_pointer_get"></block>
                        <block type="variables_pointer_set">
                            <value name="VAR">
                                <block type="variables_pointer_get">
                                </block>
                            </value>
                        </block>
                        <block type="variables_pointer_&"></block>
                        <block type="variables_pointer_*"></block>
                    </category>
                    <category name="Array">
                        <block type="variables_array_declare"></block>
                        <block type="variables_array_get"></block>
                        <block type="variables_array_set"></block>
                    </category>
                </category>
                <category name="Arithmetics">
                    <block type="math_number"></block>
                    <block type="math_arithmetic"></block>
                    <block type="math_modulo"></block>
                </category>
                <category name="Loops">
                    <block type="controls_whileUntil"></block>
                    <block type="controls_doWhile"></block>
                    <block type="controls_for"></block>
                    <block type="controls_flow_statements"></block>
                </category>
                <category name="Logic">
                    <block type="controls_if"></block>
                    <block type="controls_switch"></block>
                    <block type="controls_switch_break"></block>
                    <block type="logic_compare"></block>
                    <block type="logic_operation"></block>
                    <block type="logic_negate"></block>
                    <block type="logic_boolean"></block>
                    <block type="logic_null"></block>
                    <block type="logic_ternary"></block>
                </category>
                <category name="Functions" custom="PROCEDURE">
                    <block type="procedures_defnoreturn"></block>
                    <block type="procedures_defreturn"></block>
                    <block type="procedures_ifreturn"></block>
                </category>
                </category>
                <category name="Structure" custom="STRUCTURE">
                    <block type="structure_define"></block>
                    <block type="structure_declare"></block>
                </category>
                <category name="Library">
                    <category name="Stdio">
                        <block type="library_stdio_printf"></block>
                        <block type="library_stdio_text"></block>
                        <block type='library_stdio_newLine'></block>
                        <block type="library_stdio_scanf"></block>
                    </category>
                    <category name="Stdlib">
                        <block type="library_stdlib_convert"></block>
                        <block type="library_stdlib_rand">
                            <value name="VAR">
                                <block type="library_stdlib_rand_scope">
                                    <value name="A">
                                        <block type="library_stdlib_number_forRandScope1"></block>
                                    </value>
                                    <value name="B">
                                        <block type="library_stdlib_number_forRandScope100"></block>
                                    </value>
                                </block>
                            </value>
                        </block>
                        <block type="library_stdlib_malloc">
                            <value name="VAR">
                                <block type="library_stdlib_arithmetic_forMalloc">
                                    <value name="A">
                                        <block type="library_stdlib_sizeof_forMalloc"></block>
                                    </value>
                                    <value name="B">
                                        <block type="library_stdlib_number_forMalloc"></block>
                                    </value>
                                </block>
                            </value>
                        </block>
                        <block type="library_stdlib_arithmetic_forMalloc">
                            <value name="A">
                                <block type="library_stdlib_sizeof_forMalloc"></block>
                            </value>
                            <value name="B">
                                <block type="library_stdlib_number_forMalloc"></block>
                            </value>
                        </block>
                        <block type="library_stdlib_free"></block>
                        <block type="library_stdlib_exit"></block>
                    </category>
                    <category name="String">
                        <block type="library_string_strlen"></block>
                        <block type="library_string_strcat"></block>
                        <block type="library_string_strcpy"></block>
                        <block type="library_string_strcmp"></block>
                    </category>
                    <category name="Math">
                        <block type="library_math_abs"></block>
                        <block type="library_math_trig"></block>
                        <block type="library_math_logs"></block>
                        <block type="library_math_pow"></block>
                        <block type="library_math_exp"></block>
                        <block type="library_math_sqrt"></block>
                        <block type="library_math_round"></block>
                        <block type="library_math_numcheck"></block>
                        <block type="library_math_numcompare"></block>
                    </category>
                    <category name="Time">
                        <block type="library_time_current"></block>
                        <block type="library_time_requiredTime"></block>
                    </category>
                </category>
                <category name="Others">
                    <block type='comment'>
                        <value name="VAR0">
                            <block type="library_stdio_text"></block>
                        </value>
                    </block>
                    <block type="library_stdio_text"></block>
                    <block type="math_number"></block>
                    <block type="define_declare"></block>
                    <block type="define_get"></block>
                </category>
            </xml>
            <div class="col-xs-5">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Code</a>
                    </li>
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terminal</a>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        File <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation">
                                <a onclick="saveToServer()" href="#downloadToServer" aria-controls="downloadToServer" role="tab" data-toggle="tab">Save to Server</a>
                            </li>
                            <li role="presentation">
                                <a href="javascript:void(0)" id="dlbtn" onclick="saveToClient('main.cpp', 'text/plain')">
                                    Save to Client
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="col-xs-4 side-bar">
                            <div id="code-wrapper" class="panel panel-default">
                                <pre id="code" class="panel-body pre-scrollable"></pre>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="col-xs-4 side-bar">
                             <embed src="./webconsole/webconsole.php" frameborder="0" width="100%" height="100%"></embed>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer id="footer" role="contentinfo">
    </footer>
    <script type="text/javascript" src="blockly_compressed.js"></script>
    <script type="text/javascript" src="blocks_compressed.js"></script>
    <script type="text/javascript" src="cake_compressed.js"></script>
    <script type="text/javascript" src="msg/js/en.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/prettify.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
</body>

</html>