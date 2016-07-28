<?
$subject_val = "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 02:27:39 2014" -->
<!-- isoreceived="20140212072739" -->
<!-- sent="Wed, 12 Feb 2014 16:27:17 +0900" -->
<!-- isosent="20140212072717" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket #4240 dosen't work" -->
<!-- id="OF6DA24800.067AFEAB-ON49257C7D.0028BBB9-49257C7D.002901A1_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FB16B0.5050909_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;bind-to%20l3chace&amp;amp;quot;%20with%20r30643%20in%20ticket%20#4240%20dosen't%20work"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-02-12 02:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23591.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<li><strong>Previous message:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. I myself have no request. Ralph might have something ...
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Is there anything we could do in hwloc to improve this? (I don't even
</span><br>
<span class="quotelev1">&gt; know the exact piece of code you are refering to)
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 12/02/2014 02:46, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Okay, I fixed it. Keep getting caught by a very, very unfortunate
</span><br>
design flaw in hwloc that forces you to treat cache's as a special case
<br>
that requires you to call a different function. So you have
<br>
<span class="quotelev1">&gt; to constantly protect function calls into hwloc with &quot;if cache, call this
</span><br>
one - else, call that one&quot;. REALLY irritating, and it caught us again here.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should be fixed now in trunk now, set to go over to 1.7.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 11, 2014, at 4:47 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since the ticket #4240 has been already set as fixed, I'm sending this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; email to you. ( I don't konw I could add comments to the fixed ticket)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I tried to bind the process to l3chace, it didn't work like
</span><br>
below:
<br>
<span class="quotelev3">&gt; &gt;&gt; (the host mangae has the normal topology - not inverted)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -report-bindings ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; No objects of the specified type were found on at least one node:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Type: Cache
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Node: manage
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The map cannot be done as specified.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I confirmed
</span><br>
that
<br>
<span class="quotelev3">&gt; &gt;&gt; the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23591.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<li><strong>Previous message:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
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
