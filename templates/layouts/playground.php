<link rel="stylesheet" type="text/css" href="../css/prettify.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<div id="main-wrapper" class="row">
    <div class="col s7">
        <div id="blocklyDiv"></div>
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
    <div class="col s5">
        <div class="row">
            <div class="col s6">
                <a class="waves-effect waves-light btn" style="width:100%;" href="#downloadToServer" onclick="saveToServer()" aria-controls="downloadToServer">Save to Server</a>
            </div>
            <div class="col s6">
                <a class="waves-effect waves-light btn" style="width:100%;" href="javascript:void(0)" id="dlbtn" onclick="saveToClient('main.cpp', 'text/plain')">Save to Client</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#tabCode">Code</a></li>
                    <li class="tab col s3"><a href="#tabTerminal">Terminal</a></li>
                </ul>
            </div>
            <div id="tabCode" class="col s12">
                <div class="card-panel" style="overflow: scroll;height: 385px;">
                    <pre class="white-text" id="code">
                    </pre>
                </div>
            </div>
            <div id="tabTerminal" class="col s12">
                <embed src="../webconsole/webconsole.php" frameborder="0" width="100%" height="400px"></embed>
            </div>
        </div>
    </div>
</div>