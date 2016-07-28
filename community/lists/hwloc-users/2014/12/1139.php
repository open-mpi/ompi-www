<?
$subject_val = "Re: [hwloc-users] HWLoc error mesg";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 13:29:47 2014" -->
<!-- isoreceived="20141220182947" -->
<!-- sent="Sat, 20 Dec 2014 19:29:45 +0100" -->
<!-- isosent="20141220182945" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLoc error mesg" -->
<!-- id="5495C019.10003_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DUB126-W357137001569C698933894E3680_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLoc error mesg<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 13:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1140.php">Robert Cheng: "[hwloc-users] error message when using fink update-all"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
<li><strong>In reply to:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>As explained in another mail, this yet another buggy AMD L3 cache
<br>
information reported by the hardware. The only way to *fix* this is to
<br>
tell your machine vendor to fix the L3 cache information.
<br>
<p>The only thing we can do is remove the hwloc warning (if you don't care
<br>
about cache or NUMA affinity for placing your MPI jobs) by setting
<br>
HWLOC_HIDE_ERRORS=1 in the environment, or tell hwloc/OMPI how to
<br>
workaround the BIOS issue (if you care about cache or NUMA affinity) by
<br>
generating a correct XML topology file.
<br>
<p>Brice
<br>
<p><p><p><p>Le 20/12/2014 19:15, Sergio Manzetti a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all, I have an AMD Opteron 24 core system which is not compatible
</span><br>
<span class="quotelev1">&gt; with hwloc, and gives repeated error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attachment shows this report, which indicates that hwloc is unable to count the correct number of CPUs, siblings etc. It identifies 21 instead of 24.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise, and is there an alternative to this which is free?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1138.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1138.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1140.php">Robert Cheng: "[hwloc-users] error message when using fink update-all"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
<li><strong>In reply to:</strong> <a href="1138.php">Sergio Manzetti: "[hwloc-users] HWLoc error mesg"</a>
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
