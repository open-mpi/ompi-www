<?
$subject_val = "Re: [OMPI users] new hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 12:48:09 2015" -->
<!-- isoreceived="20150429164809" -->
<!-- sent="Wed, 29 Apr 2015 18:47:49 +0200" -->
<!-- isosent="20150429164749" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new hwloc error" -->
<!-- id="55410B35.5080005_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="49AB4AD4-7366-4566-BB68-0C0D63EE3AD2_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] new hwloc error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-29 12:47:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2015 14:53, Noam Bernstein a &#233;crit :
<br>
<p><span class="quotelev1">&gt; They&#146;re dual 8-core processor, so the 16 cores are physical ones.  lstopo output looks identical on nodes where this does happen, and nodes where it never does.  My next step is to see if I can reproduce the behavior at will - I&#146;m still not quite sure if it&#146;s consistent.  There are clearly nodes where it never happens (most of them), but even on the nodes where it does happen, I don&#146;t know if it happens every time.
</span><br>
<p>Thanks. It's indeed normal that OMPI failed to bind to cpuset 0,16 since
<br>
16 doesn't exist at all.
<br>
Can you run &quot;lstopo foo.xml&quot; on one node where it failed, and send the
<br>
foo.xml that got generated? Just want to make sure we don't have invalid
<br>
cpusets in there.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26810.php">Rolf vandeVaart: "Re: [OMPI users] getting OpenMPI 1.8.4 w/ CUDA to look for absolute path to libcuda.so.1"</a>
<li><strong>In reply to:</strong> <a href="26808.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Reply:</strong> <a href="26812.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
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
