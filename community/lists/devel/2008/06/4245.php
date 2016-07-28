<?
$subject_val = "[OMPI devel] CARTO slot definition";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 29 09:45:05 2008" -->
<!-- isoreceived="20080629134505" -->
<!-- sent="Sun, 29 Jun 2008 16:44:58 +0300" -->
<!-- isosent="20080629134458" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] CARTO slot definition" -->
<!-- id="453d39990806290644n56e9f36bra040fefbe8ac92c7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] CARTO slot definition<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-29 09:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<li><strong>Previous message:</strong> <a href="4244.php">Lenny Verkhovsky: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<li><strong>Reply:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
We have ambiquite definitions of &quot;slot&quot; in rankfile, hostfile and carto
<br>
components.
<br>
Since &quot;slot&quot; is well defined as a processor in the hostfile and rankfile (
<br>
&quot;slot&quot; is defined as processing unit which can be processor number or
<br>
socket:core pair ).
<br>
I propose to change carto file syntax and make it more graph oriented. This
<br>
won't have any effect on the code.
<br>
<p>In new carto syntax
<br>
<p>NODE will be changed to EDGE
<br>
CONNECTION will be changed to BRANCH
<br>
SLOT will be changed to SOCKET.
<br>
<p>Any comments are welcome.
<br>
few words about carto can be found at
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
<br>
<p>&nbsp;&nbsp;Index: opal/mca/carto/file/help-opal-carto-file.txt
<br>
===================================================================
<br>
--- opal/mca/carto/file/help-opal-carto-file.txt    (revision 18772)
<br>
+++ opal/mca/carto/file/help-opal-carto-file.txt    (working copy)
<br>
@@ -27,27 +27,27 @@
<br>
&nbsp;#
<br>
&nbsp;[expected node type]
<br>
-File: %s line: %d expected node type (free string). received %s
<br>
+File: %s line: %d expected Edge type (free string). received %s
<br>
&nbsp;#
<br>
&nbsp;[expected node name]
<br>
-File: %s line: %d expected Node name (free string). received %s
<br>
+File: %s line: %d expected Edge name (free string). received %s
<br>
&nbsp;#
<br>
&nbsp;[expected Connection]
<br>
-File: %s line: %d expected Node connection (node name:weight). received %s
<br>
+File: %s line: %d expected Edge branch (edge name:weight). received %s
<br>
&nbsp;#
<br>
&nbsp;[expected deceleration]
<br>
-File: %s line: %d expected Node deceleration (NODE) or connection
<br>
deceleration (CONNECTION). received %s
<br>
+File: %s line: %d expected Edge declaration (EDGE) or branch declaration
<br>
(BRANCH). received %s
<br>
&nbsp;#
<br>
&nbsp;[incorrect connection]
<br>
-File: %s line: %d - %s - incorrect connection
<br>
+File: %s line: %d - %s - incorrect branch
<br>
&nbsp;#
<br>
&nbsp;[vertex not found]
<br>
-File: %s line: %d - Node %s is not in the graph
<br>
+File: %s line: %d - Edge %s is not in the graph
<br>
&nbsp;#
<br>
&nbsp;[unknown token]
<br>
Index: opal/mca/carto/file/carto_file_lex.l
<br>
===================================================================
<br>
--- opal/mca/carto/file/carto_file_lex.l    (revision 18772)
<br>
+++ opal/mca/carto/file/carto_file_lex.l    (working copy)
<br>
@@ -80,13 +80,13 @@
<br>
<p>-NODE               { carto_file_value.sval = yytext;
<br>
+EDGE               { carto_file_value.sval = yytext;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_CARTO_FILE_NODE_DECELERATION; }
<br>
-CONNECTION         { carto_file_value.sval = yytext;
<br>
+BRANCH             { carto_file_value.sval = yytext;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_CARTO_FILE_CONNECTION_DECELERATION; }
<br>
-CON_BI_DIR         { carto_file_value.sval = yytext;
<br>
+BRANCH_BI_DIR         { carto_file_value.sval = yytext;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_CARTO_FILE_BIDIRECTION_CONNECTION; }
<br>
&nbsp;[0-9]              { carto_file_value.ival = atol(yytext);
<br>
Index: opal/mca/carto/file/carto_file.h
<br>
===================================================================
<br>
--- opal/mca/carto/file/carto_file.h    (revision 18772)
<br>
+++ opal/mca/carto/file/carto_file.h    (working copy)
<br>
@@ -21,49 +21,49 @@
<br>
&nbsp;/**
<br>
&nbsp;&nbsp;* @file#this is a comment
<br>
&nbsp;# Node declaration   Node type (Free string)   Node name (Free string)
<br>
-# (Reserve word)     (slot is a reserve word   (free string)
<br>
-#                     for CPU slot)
<br>
+# (Reserve word)     (socket is a reserve word   (free string)
<br>
+#                     for CPU socket)
<br>
&nbsp;#=======================================================================
<br>
-  NODE               Memory                    mem0
<br>
-  NODE               Memory                    mem1
<br>
-  NODE               Memory                    mem2
<br>
-  NODE               Memory                    mem3
<br>
+  EDGE               Memory                    mem0
<br>
+  EDGE               Memory                    mem1
<br>
+  EDGE               Memory                    mem2
<br>
+  EDGE               Memory                    mem3
<br>
&nbsp;#
<br>
-  NODE               slot                      slot0
<br>
-  NODE               slot                      slot1
<br>
-  NODE               slot                      slot2
<br>
-  NODE               slot                      slot3
<br>
+  EDGE               socket                      socket0
<br>
+  EDGE               socket                      socket1
<br>
+  EDGE               socket                      socket2
<br>
+  EDGE               socket                      socket3
<br>
&nbsp;#
<br>
-  NODE               Infiniband                mthca0
<br>
-  NODE               Infiniband                mthca1
<br>
+  EDGE               Infiniband                mthca0
<br>
+  EDGE               Infiniband                mthca1
<br>
&nbsp;#
<br>
-  NODE               Ethernet                  eth0
<br>
-  NODE               Ethernet                  eth1
<br>
+  EDGE               Ethernet                  eth0
<br>
+  EDGE               Ethernet                  eth1
<br>
&nbsp;#
<br>
&nbsp;#
<br>
&nbsp;# Connection decleration  From node   To node:weight   To node:weight
<br>
......
<br>
&nbsp;# (Reserve word)          (declered   (declered        (declered
<br>
&nbsp;#                          above)      above)           above)
<br>
&nbsp;#===============================================================================================
<br>
-  CONNECTION              mem0        slot0:0
<br>
-  CONNECTION              mem3        slot3:0
<br>
+  BRANCH              mem0        socket0:0
<br>
+  BRANCH              mem3        socket3:0
<br>
&nbsp;#
<br>
-  CONNECTION              slot0       mem0:0           slot1:1
<br>
slot2:1 mthca0:1 eth0:1
<br>
-  CONNECTION              slot1       slot0:1          slot3:1
<br>
-  CONNECTION              slot2       slot1:1          slot3:1
<br>
-  CONNECTION              slot3       mem3:0           slot1:1
<br>
slot2:1 mthca1:1 eth1:1
<br>
+  BRANCH              socket0       mem0:0           socket1:1
<br>
socket2:1 mthca0:1 eth0:1
<br>
+  BRANCH              socket1       socket0:1        socket3:1
<br>
+  BRANCH              socket2       socket1:1        socket3:1
<br>
+  BRANCH              socket3       mem3:0           socket1:1
<br>
socket2:1 mthca1:1 eth1:1
<br>
&nbsp;#
<br>
&nbsp;#
<br>
-  CONNECTION              mthca0      slot0:1
<br>
-  CONNECTION              mthca1      slot3:1
<br>
+  BRANCH              mthca0      socket0:1
<br>
+  BRANCH              mthca1      socket3:1
<br>
&nbsp;#
<br>
-  CONNECTION              eth0        slot0:1
<br>
-  CONNECTION              eth1        slot3:1
<br>
+  BRANCH              eth0        socket0:1
<br>
+  BRANCH              eth1        socket3:1
<br>
&nbsp;#Bi-Directional connection
<br>
&nbsp;#
<br>
-  CON_BI_DIR              slot1       mem1:0
<br>
-  CON_BI_DIR              slot2       mem2:0
<br>
+  BRANCH_BI_DIR              socket1       mem1:0
<br>
+  BRANCH_BI_DIR              socket2       mem2:0
<br>
&nbsp;#
<br>
&nbsp;# end of carto file.
<br>
Index: opal/mca/carto/file/carto_file_module.c
<br>
===================================================================
<br>
--- opal/mca/carto/file/carto_file_module.c (revision 18772)
<br>
+++ opal/mca/carto/file/carto_file_module.c (working copy)
<br>
@@ -171,7 +171,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case OPAL_CARTO_FILE_NAME:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node = (opal_carto_base_node_t
<br>
*)malloc(sizeof(opal_carto_base_node_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;node_type = strdup(carto_file_value.sval);
<br>
-                    if (0 == strcmp(&quot;slot&quot;,node-&gt;node_type)) {
<br>
+                    if (0 == strcmp(&quot;socket&quot;,node-&gt;node_type)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;is_cpu = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4245/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<li><strong>Previous message:</strong> <a href="4244.php">Lenny Verkhovsky: "Re: [OMPI devel] PML selection logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<li><strong>Reply:</strong> <a href="4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
