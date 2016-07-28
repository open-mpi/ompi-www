<?
$subject_val = "Re: [OMPI devel] CARTO slot definition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 03:57:24 2008" -->
<!-- isoreceived="20080702075724" -->
<!-- sent="Wed, 2 Jul 2008 10:57:17 +0300" -->
<!-- isosent="20080702075717" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CARTO slot definition" -->
<!-- id="453d39990807020057x3f3057eby5f8589fcdd90044c_at_mail.gmail.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C48D3CED.55FB%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CARTO slot definition<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-02 03:57:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4260.php">Don Kerr: "[OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4258.php">Ralph Castain: "Re: [OMPI devel] Trunk broken with linear, direct routing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all,
<br>
since there are no objections I will commit the patch to trunk and 1.3
<br>
branch.
<br>
see also comments below.
<br>
<p><p>2008/6/29 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I believe this would help reduce the confusion a great deal. While the
</span><br>
<span class="quotelev1">&gt; current carto syntax is the expected for a mathematician, computer users and
</span><br>
<span class="quotelev1">&gt; developers have a well-established definition for the term &quot;node&quot; that
</span><br>
<span class="quotelev1">&gt; conflicts with that used in carto.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some thoughts to add:  in carto, do you want to create a definition for
</span><br>
<span class="quotelev1">&gt; CORE as well as SOCKET? That way, someone could provide info down to either
</span><br>
<span class="quotelev1">&gt; level of granularity. In our subsequent frameworks, we could assume that all
</span><br>
<span class="quotelev1">&gt; cores in a socket have the same graph analysis unless the core was described
</span><br>
<span class="quotelev1">&gt; separately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For my best knowledge all cores on the same socket have same distance on the
<br>
graph, so I dont see any need to add more code and definitions for now.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Likewise, you may want to support a NODE that describes connectivity
</span><br>
<span class="quotelev1">&gt; between computing nodes. Again, one could assume that all sockets on the
</span><br>
<span class="quotelev1">&gt; node share the same graph unless the socket was described separately &#150; or
</span><br>
<span class="quotelev1">&gt; perhaps allow someone to describe the graph for the socket to get to the
</span><br>
<span class="quotelev1">&gt; edge of the node, and then let the node description handle comm between
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Interesting idea, I suppose it can be implemented in the future.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Up to you &#150; I'm just trying to think of ways we could bring this closer to
</span><br>
<span class="quotelev1">&gt; the topo description required in other modules elsewhere in the code to
</span><br>
<span class="quotelev1">&gt; avoid having multiple files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/29/08 7:44 AM, &quot;Lenny Verkhovsky&quot; &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi all,
</span><br>
<span class="quotelev1">&gt; We have ambiquite definitions of &quot;slot&quot; in rankfile, hostfile and carto
</span><br>
<span class="quotelev1">&gt; components.
</span><br>
<span class="quotelev1">&gt; Since &quot;slot&quot; is well defined as a processor in the hostfile and rankfile (
</span><br>
<span class="quotelev1">&gt; &quot;slot&quot; is defined as processing unit which can be processor number or
</span><br>
<span class="quotelev1">&gt; socket:core pair ).
</span><br>
<span class="quotelev1">&gt; I propose to change carto file syntax and make it more graph oriented. This
</span><br>
<span class="quotelev1">&gt; won't have any effect on the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In new carto syntax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NODE will be changed to EDGE
</span><br>
<span class="quotelev1">&gt; CONNECTION will be changed to BRANCH
</span><br>
<span class="quotelev1">&gt; SLOT will be changed to SOCKET.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comments are welcome.
</span><br>
<span class="quotelev1">&gt; few words about carto can be found at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription">https://svn.open-mpi.org/trac/ompi/wiki/OnHostTopologyDescription</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Index: opal/mca/carto/file/help-opal-carto-file.txt
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/carto/file/help-opal-carto-file.txt    (revision 18772)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/carto/file/help-opal-carto-file.txt    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -27,27 +27,27 @@
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [expected node type]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d expected node type (free string). received %s
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d expected Edge type (free string). received %s
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [expected node name]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d expected Node name (free string). received %s
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d expected Edge name (free string). received %s
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [expected Connection]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d expected Node connection (node name:weight). received %s
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d expected Edge branch (edge name:weight). received %s
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [expected deceleration]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d expected Node deceleration (NODE) or connection
</span><br>
<span class="quotelev1">&gt; deceleration (CONNECTION). received %s
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d expected Edge declaration (EDGE) or branch declaration
</span><br>
<span class="quotelev1">&gt; (BRANCH). received %s
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [incorrect connection]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d - %s - incorrect connection
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d - %s - incorrect branch
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [vertex not found]
</span><br>
<span class="quotelev1">&gt; -File: %s line: %d - Node %s is not in the graph
</span><br>
<span class="quotelev1">&gt; +File: %s line: %d - Edge %s is not in the graph
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  [unknown token]
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/carto/file/carto_file_lex.l
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/carto/file/carto_file_lex.l    (revision 18772)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/carto/file/carto_file_lex.l    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -80,13 +80,13 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -NODE               { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt; +EDGE               { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt;                       return OPAL_CARTO_FILE_NODE_DECELERATION; }
</span><br>
<span class="quotelev1">&gt; -CONNECTION         { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt; +BRANCH             { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt;                       return OPAL_CARTO_FILE_CONNECTION_DECELERATION; }
</span><br>
<span class="quotelev1">&gt; -CON_BI_DIR         { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt; +BRANCH_BI_DIR         { carto_file_value.sval = yytext;
</span><br>
<span class="quotelev1">&gt;                       return OPAL_CARTO_FILE_BIDIRECTION_CONNECTION; }
</span><br>
<span class="quotelev1">&gt;  [0-9]              { carto_file_value.ival = atol(yytext);
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/carto/file/carto_file.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/carto/file/carto_file.h    (revision 18772)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/carto/file/carto_file.h    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -21,49 +21,49 @@
</span><br>
<span class="quotelev1">&gt;  /**
</span><br>
<span class="quotelev1">&gt;   * @file#this is a comment
</span><br>
<span class="quotelev1">&gt;  # Node declaration   Node type (Free string)   Node name (Free string)
</span><br>
<span class="quotelev1">&gt; -# (Reserve word)     (slot is a reserve word   (free string)
</span><br>
<span class="quotelev1">&gt; -#                     for CPU slot)
</span><br>
<span class="quotelev1">&gt; +# (Reserve word)     (socket is a reserve word   (free string)
</span><br>
<span class="quotelev1">&gt; +#                     for CPU socket)
</span><br>
<span class="quotelev1">&gt;  #=======================================================================
</span><br>
<span class="quotelev1">&gt; -  NODE               Memory                    mem0
</span><br>
<span class="quotelev1">&gt; -  NODE               Memory                    mem1
</span><br>
<span class="quotelev1">&gt; -  NODE               Memory                    mem2
</span><br>
<span class="quotelev1">&gt; -  NODE               Memory                    mem3
</span><br>
<span class="quotelev1">&gt; +  EDGE               Memory                    mem0
</span><br>
<span class="quotelev1">&gt; +  EDGE               Memory                    mem1
</span><br>
<span class="quotelev1">&gt; +  EDGE               Memory                    mem2
</span><br>
<span class="quotelev1">&gt; +  EDGE               Memory                    mem3
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  NODE               slot                      slot0
</span><br>
<span class="quotelev1">&gt; -  NODE               slot                      slot1
</span><br>
<span class="quotelev1">&gt; -  NODE               slot                      slot2
</span><br>
<span class="quotelev1">&gt; -  NODE               slot                      slot3
</span><br>
<span class="quotelev1">&gt; +  EDGE               socket                      socket0
</span><br>
<span class="quotelev1">&gt; +  EDGE               socket                      socket1
</span><br>
<span class="quotelev1">&gt; +  EDGE               socket                      socket2
</span><br>
<span class="quotelev1">&gt; +  EDGE               socket                      socket3
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  NODE               Infiniband                mthca0
</span><br>
<span class="quotelev1">&gt; -  NODE               Infiniband                mthca1
</span><br>
<span class="quotelev1">&gt; +  EDGE               Infiniband                mthca0
</span><br>
<span class="quotelev1">&gt; +  EDGE               Infiniband                mthca1
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  NODE               Ethernet                  eth0
</span><br>
<span class="quotelev1">&gt; -  NODE               Ethernet                  eth1
</span><br>
<span class="quotelev1">&gt; +  EDGE               Ethernet                  eth0
</span><br>
<span class="quotelev1">&gt; +  EDGE               Ethernet                  eth1
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # Connection decleration  From node   To node:weight   To node:weight
</span><br>
<span class="quotelev1">&gt;   ......
</span><br>
<span class="quotelev1">&gt;  # (Reserve word)          (declered   (declered        (declered
</span><br>
<span class="quotelev1">&gt;  #                          above)      above)           above)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #===============================================================================================
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              mem0        slot0:0
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              mem3        slot3:0
</span><br>
<span class="quotelev1">&gt; +  BRANCH              mem0        socket0:0
</span><br>
<span class="quotelev1">&gt; +  BRANCH              mem3        socket3:0
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              slot0       mem0:0           slot1:1
</span><br>
<span class="quotelev1">&gt;           slot2:1 mthca0:1 eth0:1
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              slot1       slot0:1          slot3:1
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              slot2       slot1:1          slot3:1
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              slot3       mem3:0           slot1:1
</span><br>
<span class="quotelev1">&gt;           slot2:1 mthca1:1 eth1:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              socket0       mem0:0           socket1:1
</span><br>
<span class="quotelev1">&gt;           socket2:1 mthca0:1 eth0:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              socket1       socket0:1        socket3:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              socket2       socket1:1        socket3:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              socket3       mem3:0           socket1:1
</span><br>
<span class="quotelev1">&gt;           socket2:1 mthca1:1 eth1:1
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              mthca0      slot0:1
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              mthca1      slot3:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              mthca0      socket0:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              mthca1      socket3:1
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              eth0        slot0:1
</span><br>
<span class="quotelev1">&gt; -  CONNECTION              eth1        slot3:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              eth0        socket0:1
</span><br>
<span class="quotelev1">&gt; +  BRANCH              eth1        socket3:1
</span><br>
<span class="quotelev1">&gt;  #Bi-Directional connection
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; -  CON_BI_DIR              slot1       mem1:0
</span><br>
<span class="quotelev1">&gt; -  CON_BI_DIR              slot2       mem2:0
</span><br>
<span class="quotelev1">&gt; +  BRANCH_BI_DIR              socket1       mem1:0
</span><br>
<span class="quotelev1">&gt; +  BRANCH_BI_DIR              socket2       mem2:0
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  # end of carto file.
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/carto/file/carto_file_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/carto/file/carto_file_module.c (revision 18772)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/carto/file/carto_file_module.c (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -171,7 +171,7 @@
</span><br>
<span class="quotelev1">&gt;                  case OPAL_CARTO_FILE_NAME:
</span><br>
<span class="quotelev1">&gt;                      node = (opal_carto_base_node_t
</span><br>
<span class="quotelev1">&gt; *)malloc(sizeof(opal_carto_base_node_t));
</span><br>
<span class="quotelev1">&gt;                      node-&gt;node_type = strdup(carto_file_value.sval);
</span><br>
<span class="quotelev1">&gt; -                    if (0 == strcmp(&quot;slot&quot;,node-&gt;node_type)) {
</span><br>
<span class="quotelev1">&gt; +                    if (0 == strcmp(&quot;socket&quot;,node-&gt;node_type)) {
</span><br>
<span class="quotelev1">&gt;                          node-&gt;is_cpu = true;
</span><br>
<span class="quotelev1">&gt;                      }
</span><br>
<span class="quotelev1">&gt;                      else {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4259/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4260.php">Don Kerr: "[OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4258.php">Ralph Castain: "Re: [OMPI devel] Trunk broken with linear, direct routing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/06/4246.php">Ralph Castain: "Re: [OMPI devel] CARTO slot definition"</a>
<!-- nextthread="start" -->
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
