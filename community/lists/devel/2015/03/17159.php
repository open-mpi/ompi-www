<?
$subject_val = "Re: [OMPI devel] Info about ORTE structure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 08:09:24 2015" -->
<!-- isoreceived="20150326120924" -->
<!-- sent="Thu, 26 Mar 2015 18:09:22 +0600" -->
<!-- isosent="20150326120922" -->
<!-- name="Artem Polyakov" -->
<!-- email="artpol84_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Info about ORTE structure" -->
<!-- id="CAJ2Qj5p4Xn9ek9hYbQuHqTDUik_18gt4z3NRzzRqeGwyknSY2g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAJ2Qj5pCzcU7NjJ12kj-+j00z-2YpmhLFR4VPPZJrAUz1UJQ2w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-26 08:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17158.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17158.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17210.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
P.S. also check ESS (orte/mca/ess) for environment setup.
<br>
<p>2015-03-26 18:06 GMT+06:00 Artem Polyakov &lt;artpol84_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; manager, which parts of the code (if any) are executed on the &quot;slave&quot; nodes
</span><br>
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
<span class="quotelev1">&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev1">&gt; Best regards, Artem Y. Polyakov
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17160.php">Nathan Hjelm: "[OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17158.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<li><strong>In reply to:</strong> <a href="17158.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17210.php">Federico Reghenzani: "Re: [OMPI devel] Info about ORTE structure"</a>
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
