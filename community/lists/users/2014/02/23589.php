<?
$subject_val = "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 01:37:40 2014" -->
<!-- isoreceived="20140212063740" -->
<!-- sent="Wed, 12 Feb 2014 07:37:36 +0100" -->
<!-- isosent="20140212063736" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;bind-to l3chace&amp;quot; with r30643 in ticket #4240 dosen't work" -->
<!-- id="52FB16B0.5050909_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E24BC350-2406-4810-8045-6036075C969A_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 01:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23588.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket	#4240	dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Reply:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there anything we could do in hwloc to improve this? (I don't even
<br>
know the exact piece of code you are refering to)
<br>
Brice
<br>
<p><p>Le 12/02/2014 02:46, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Okay, I fixed it. Keep getting caught by a very, very unfortunate design flaw in hwloc that forces you to treat cache's as a special case that requires you to call a different function. So you have to constantly protect function calls into hwloc with &quot;if cache, call this one - else, call that one&quot;. REALLY irritating, and it caught us again here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should be fixed now in trunk now, set to go over to 1.7.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2014, at 4:47 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the ticket #4240 has been already set as fixed, I'm sending this
</span><br>
<span class="quotelev2">&gt;&gt; email to you. ( I don't konw I could add comments to the fixed ticket)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I tried to bind the process to l3chace, it didn't work like below:
</span><br>
<span class="quotelev2">&gt;&gt; (the host mangae has the normal topology - not inverted)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [mishima_at_manage openmpi-1.7.4]$ mpirun -np 2 -bind-to l3cache
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings ~/mis/openmpi/demos/myprog
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; No objects of the specified type were found on at least one node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Type: Cache
</span><br>
<span class="quotelev2">&gt;&gt;  Node: manage
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The map cannot be done as specified.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-bind-to l1cache/l2cahce&quot; doesn't work as well. At least, I confirmed that
</span><br>
<span class="quotelev2">&gt;&gt; the openmpi-1.7.4 works with &quot;-bind-to l3cache&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Previous message:</strong> <a href="23588.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket	#4240	dosen't work"</a>
<li><strong>In reply to:</strong> <a href="23585.php">Ralph Castain: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
<li><strong>Reply:</strong> <a href="23590.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;bind-to l3chace&quot; with r30643 in ticket #4240 dosen't work"</a>
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
