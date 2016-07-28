<?
$subject_val = "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 20:47:00 2014" -->
<!-- isoreceived="20140212014700" -->
<!-- sent="Tue, 11 Feb 2014 17:46:56 -0800" -->
<!-- isosent="20140212014656" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket #4240 dosen't work" -->
<!-- id="E24BC350-2406-4810-8045-6036075C969A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF43DDD795.F72F978B-ON49257C7D.000295FD-49257C7D.00046F95_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 20:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I fixed it. Keep getting caught by a very, very unfortunate design flaw in hwloc that forces you to treat cache's as a special case that requires you to call a different function. So you have to constantly protect function calls into hwloc with &quot;if cache, call this one - else, call that one&quot;. REALLY irritating, and it caught us again here.
<br>
<p>Should be fixed now in trunk now, set to go over to 1.7.5
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 11, 2014, at 4:47 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since the ticket #4240 has been already set as fixed, I'm sending this
</span><br>
<span class="quotelev1">&gt; email to you. ( I don't konw I could add comments to the fixed ticket)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I tried to bind the process to l3chace, it didn't work like below:
</span><br>
<span class="quotelev1">&gt; (the host mangae has the normal topology - not inverted)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
</span><br>
<span class="quotelev1">&gt; -report-bindings ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No objects of the specified type were found on at least one node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Type: Cache
</span><br>
<span class="quotelev1">&gt;  Node: manage
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The map cannot be done as specified.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I confirmed that
</span><br>
<span class="quotelev1">&gt; the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23584.php">tmishima_at_[hidden]: "[OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23586.php">Tetsuya Mishima: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240	dosen't work"</a>
<li><strong>Reply:</strong> <a href="23589.php">Brice Goglin: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
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
