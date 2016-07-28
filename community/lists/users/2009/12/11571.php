<?
$subject_val = "Re: [OMPI users] About openmpi-mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 09:29:20 2009" -->
<!-- isoreceived="20091217142920" -->
<!-- sent="Thu, 17 Dec 2009 09:29:15 -0500" -->
<!-- isosent="20091217142915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About openmpi-mpirun" -->
<!-- id="AB45E2D9-92E5-4D63-AE2B-167B9A065487_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="64102FE81CF56640B4AE9EEF9B0026F5818BDD_at_kl-exc-001.res.lan" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 09:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11570.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11570.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2009, at 9:15 AM, Min Zhu wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your reply. Yes, your mpirun command works for me. But I need to use bsub job scheduler. I wonder why
</span><br>
<span class="quotelev1">&gt; bsub -e ERR -o OUT -n 16 openmpi-mpirun &quot;/bin/sh -c ulimit -s unlimited; ./wrf.exe&quot; doesn't work.
</span><br>
<p>Try with different quoting...?  I don't know the details of the openmpi-mpirun script, but perhaps it's trying to exec the whole quoted string as a single executable (which doesn't exist).  Perhaps:
<br>
<p>bsub -e ERR -o OUT -n 16 openmpi-mpirun /bin/sh -c &quot;ulimit -s unlimited; ./wrf.exe&quot;
<br>
<p>That's a (somewhat educated) guess...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Previous message:</strong> <a href="11570.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>In reply to:</strong> <a href="11570.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
<li><strong>Reply:</strong> <a href="11572.php">Min Zhu: "Re: [OMPI users] About openmpi-mpirun"</a>
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
