<?
$subject_val = "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 18:15:13 2015" -->
<!-- isoreceived="20150622221513" -->
<!-- sent="Tue, 23 Jun 2015 00:15:10 +0200" -->
<!-- isosent="20150622221510" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?" -->
<!-- id="558888EE.6000304_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0701MB8143DF554FF1F267BDF3F2ED9A10_at_SN2PR0701MB814.namprd07.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 18:15:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
Can you send more details about the incompatibility between hwloc old
<br>
and recent versions? Maybe there's a workaround there.
<br>
hwloc is supposed to maintain compatibility but we've seen cases where
<br>
XML export/import doesn't work because the old version exports buggy
<br>
XMLs that the recent version considers as invalid.
<br>
Do you get hwloc warnings or error messages?
<br>
Brice
<br>
<p><p><p>Le 23/06/2015 00:06, Belgin, Mehmet a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently upgraded the hwloc library used by the schedulers (along
</span><br>
<span class="quotelev1">&gt; with openmpi and all applications compiled with it), but apparently
</span><br>
<span class="quotelev1">&gt; Abaqus is using an internal MPI (PMPI) which still points to old hwloc
</span><br>
<span class="quotelev1">&gt; versions that are not compatible. As a result, Abaqus either crashes
</span><br>
<span class="quotelev1">&gt; or runs extremely slow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abaqus documentation suggests that it may be possible to run it using
</span><br>
<span class="quotelev1">&gt; an external MPI stack, and I am hoping to make it work with our stock
</span><br>
<span class="quotelev1">&gt; openmpi/1.8.4 that knows how to talk with the scheduler's hwloc.
</span><br>
<span class="quotelev1">&gt; Unfortunately, however, all of my attempts failed miserably so far (no
</span><br>
<span class="quotelev1">&gt; specific instructions for openmpi).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was wondering if anyone had success with getting Abaqus running with
</span><br>
<span class="quotelev1">&gt; openmpi. Even the information of whether it is possible or not will
</span><br>
<span class="quotelev1">&gt; help us a great deal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mehmet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I sent a similar question to the mvapich2 list as well. If they
</span><br>
<span class="quotelev1">&gt; respond with some information that can be applied to openmpi, I will
</span><br>
<span class="quotelev1">&gt; happily share them here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27172.php">http://www.open-mpi.org/community/lists/users/2015/06/27172.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27172.php">Belgin, Mehmet: "[OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
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
