<link rel="stylesheet" type="text/css" href="../css/prettify.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style type="text/css">
    .tabs .indicator {
        background-color: #01579b;
    }
</style>
<div class="row">
    <div class="col m7">
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
                <block type="variables_array_declare">
                    <value name="LENGTH_1">
                        <block type="math_number">
                            <field name="NUM">1</field>
                        </block>
                    </value>
                </block>
                <block type="variables_array_get">
                    <value name="LENGTH_1">
                        <block type="math_number">
                            <field name="NUM">1</field>
                        </block>
                    </value>
                </block>
                <block type="variables_array_set">
                    <value name="LENGTH_1">
                        <block type="math_number">
                            <field name="NUM">1</field>
                        </block>
                    </value>
                </block>
            </category>
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
        <category name="Print">
            <block type="library_stdio_printf">
                <value name="VAR0">
                    <block type="library_stdio_text"></block>
                </value>
            </block>
            <block type="library_stdio_scanf"></block>
            <block type="library_stdio_text"></block>
            <block type='library_stdio_newLine'></block>
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
    <div class="col m5">
        <div class="row" style="margin-bottom: 0;">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active blue-text" href="#tabCode">Code</a></li>
                    <li class="tab col s3"><a class="blue-text" href="#tabTerminal">Terminal</a></li>
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
        <div class="row">
            <div class="col s6">
                <a class="waves-effect waves-light btn" style="width:100%;" onclick="saveToServerPrompt()" aria-controls="downloadToServer">Save to Server</a>
            </div>
            <div class="col s6">
                <a class="waves-effect waves-light btn" style="width:100%;" href="javascript:void(0)" id="dlbtn" onclick="saveToClient('main.cpp', 'text/plain')">Save to Client</a>
            </div>
        </div>
    </div>
</div>

<div id="saveToServerModal" class="modal bottom-sheet">
    <div class="modal-content" align="center">
        <div class="row">
            <h6>Are you sure to update your code on the server?</h6>
        </div>
        <div class="row">
            <div class="col m6">
                <a href="#downloadToServer" onclick="saveToServer()" class="waves-effect waves-green btn right">Yes</a>
            </div>
            <div class="col m6">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat left">No</a>
            </div>
        </div>
    </div>
</div>