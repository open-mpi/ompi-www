<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 11:38:47 2009" -->
<!-- isoreceived="20091217163847" -->
<!-- sent="Thu, 17 Dec 2009 16:38:39 +0000" -->
<!-- isosent="20091217163839" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="1261067919.15655.2.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="64102FE81CF56640B4AE9EEF9B0026F5818C00_at_kl-exc-001.res.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] About openmpi-mpirun<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 11:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11582.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11580.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11583.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11583.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-12-17 at 14:40 +0000, Min Zhu wrote:
<br>
<p><span class="quotelev1">&gt; Here is the content of openmpi-mpirun file, so maybe something needs to
</span><br>
<span class="quotelev1">&gt; be changed?
</span><br>
<span class="quotelev1">&gt; if [ x&quot;${LSB_JOBFILENAME}&quot; = x -o x&quot;${LSB_HOSTS}&quot; = x ]; then
</span><br>
<span class="quotelev1">&gt;     usage
</span><br>
<span class="quotelev1">&gt;     exit -1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MYARGS=$*
</span><br>
<p>Shouldn't this be MYARGS=$@  It'll change the way quoted args are
<br>
forwarded to the parallel job.
<br>
<p>Ashley,
<br>
<p><p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11582.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11580.php">Jeroen Kleijer: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11583.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11583.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
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
