<?
$subject_val = "Re: [OMPI devel] Info about ORTE structure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 10:54:38 2015" -->
<!-- isoreceived="20150410145438" -->
<!-- sent="Fri, 10 Apr 2015 14:54:32 +0000" -->
<!-- isosent="20150410145432" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Info about ORTE structure" -->
<!-- id="CADf4hJ+B9mHWtp1papBZwJJYCMMo_6ngh5n9nRftyHADuRhgZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI devel] Info about ORTE structure" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Info about ORTE structure<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 10:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The RM can ask for deallocation of some nodes?
<br>
<p>For example, mpirun asks to the RM which resources are available (let
<br>
node1, node2, node3) and spawns orted in the nodes. After some time during
<br>
the elaboration, can the RM ask to deassign node3 or  reassign jobs on
<br>
node3 to node4?
<br>
<p>Cheers,
<br>
Federico Reghenzani
<br>
<p>2015-03-26 18:09:22 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<p>P.S. also check ESS (orte/mca/ess) for environment setup.
<br>
2015-03-26 18:06 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-03-26 17:58 GMT+06:00 Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; I'm an italian M.Sc. student in Computer Engineering at Politecnico di
</span><br>
<span class="quotelev2">&gt;&gt; Milano.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My team and I are trying to integrate OpenMPI with a real time resource
</span><br>
<span class="quotelev2">&gt;&gt; manager written by a group of students named BBQ (
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a> ). We are encountering some troubles, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our main issue is to understand how ORTE interacts with the resource
</span><br>
<span class="quotelev2">&gt;&gt; manager, which parts of the code (if any) are executed on the &quot;slave&quot;
</span><br>
nodes
<br>
<span class="quotelev2">&gt;&gt; and which ones on the &quot;master&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; We spent some time looking at the source code but we still have many
</span><br>
<span class="quotelev2">&gt;&gt; doubts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; check orte/mca/plm and orte/mca/ras
</span><br>
<span class="quotelev1">&gt; PLM - process lifecycle manager
</span><br>
<span class="quotelev1">&gt; RAS - resource allocation subsystem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In RAS mpirun detects under which RM it works and gets the allocation.
</span><br>
<span class="quotelev1">&gt; in PLM spawn of remote processes is done.
</span><br>
<span class="quotelev1">&gt; mpirun spawns orted daemons on the slave nodes and all the rest is done
</span><br>
<span class="quotelev1">&gt; without RM intervention (IMHO).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">http://www.open-mpi.org/community/lists/devel/2015/03/17157.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>&nbsp;--
<br>
<span class="quotelev1">&gt; &#195;&#144;&#194;&#161; &#195;&#144;&#194;&#163;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#176;&#195;&#144;&#194;&#182;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#189;&#195;&#144;&#194;&#184;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188;, &#195;&#144;&#197;&#184;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#187;&#195;&#145; &#195;&#144;&#194;&#186;&#195;&#144;&#194;&#190;&#195;&#144;&#194;&#178; &#195;&#144; &#195;&#145;&#226;&#130;&#172;&#195;&#145;&#226;&#128;&#154;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#188; &#195;&#144;&#194;&#174;&#195;&#145;&#226;&#130;&#172;&#195;&#145;&#197;&#146;&#195;&#144;&#194;&#181;&#195;&#144;&#194;&#178;&#195;&#144;&#194;&#184;&#195;&#145;&#226;&#128;&#161;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17209.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17211.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
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
