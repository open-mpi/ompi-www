<?
$subject_val = "Re: [OMPI devel] Info about ORTE structure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 08:06:16 2015" -->
<!-- isoreceived="20150326120616" -->
<!-- sent="Thu, 26 Mar 2015 18:06:15 +0600" -->
<!-- isosent="20150326120615" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Info about ORTE structure" -->
<!-- id="CAJ2Qj5pCzcU7NjJ12kj-+j00z-2YpmhLFR4VPPZJrAUz1UJQ2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAP1=D+wrteW_5LMSTvzqo3f5fw1PF3Qr_BYO9ZkrAjCe3i-vwQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Artem Polyakov (<em>artpol84_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 08:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-03-26 17:58 GMT+06:00 Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; I'm an italian M.Sc. student in Computer Engineering at Politecnico di
</span><br>
<span class="quotelev1">&gt; Milano.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My team and I are trying to integrate OpenMPI with a real time resource
</span><br>
<span class="quotelev1">&gt; manager written by a group of students named BBQ (
</span><br>
<span class="quotelev1">&gt; <a href="http://bosp.dei.polimi.it/">http://bosp.dei.polimi.it/</a> ). We are encountering some troubles, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our main issue is to understand how ORTE interacts with the resource
</span><br>
<span class="quotelev1">&gt; manager, which parts of the code (if any) are executed on the &quot;slave&quot; nodes
</span><br>
<span class="quotelev1">&gt; and which ones on the &quot;master&quot;.
</span><br>
<span class="quotelev1">&gt; We spent some time looking at the source code but we still have many
</span><br>
<span class="quotelev1">&gt; doubts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello,
<br>
check orte/mca/plm and orte/mca/ras
<br>
PLM - process lifecycle manager
<br>
RAS - resource allocation subsystem.
<br>
<p>In RAS mpirun detects under which RM it works and gets the allocation.
<br>
in PLM spawn of remote processes is done.
<br>
mpirun spawns orted daemons on the slave nodes and all the rest is done
<br>
without RM intervention (IMHO).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17157.php">http://www.open-mpi.org/community/lists/devel/2015/03/17157.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
&#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
Best regards, Artem Y. Polyakov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Previous message:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17157.php">Gianmario Pozzi: "[OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>Reply:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
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
