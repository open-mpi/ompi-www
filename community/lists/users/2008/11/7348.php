<?
$subject_val = "Re: [OMPI users] /dev/shm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 14:18:01 2008" -->
<!-- isoreceived="20081119191801" -->
<!-- sent="Wed, 19 Nov 2008 13:17:56 -0600" -->
<!-- isosent="20081119191756" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] /dev/shm" -->
<!-- id="49246664.1070608_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A46CAA3-847C-42CF-838A-F43337720190_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] /dev/shm<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 14:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are the jobs that leave files behind terminating normally or aborting? 
</span><br>
<span class="quotelev1">&gt; Are there any warnings/error messages out of mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just trying to determine if this is an abnormal termination issue or a 
</span><br>
<span class="quotelev1">&gt; bug in OMPI itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>As far as I know, they are from jobs that are terminating normally. I 
<br>
have had no notice from users of errors. We are still trying to get a 
<br>
handle on this.
<br>
<p>With 30 users and 280+ nodes, it is something we have not tracked down 
<br>
completely. We are just seeing the after effects of the stale files 
<br>
getting left behind. At some point, new jobs do not launch.
<br>
<p><p><pre>
-- 
  Ray Muno
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7349.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7343.php">Ralph Castain: "Re: [OMPI users] /dev/shm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7388.php">Jeff Squyres: "Re: [OMPI users] /dev/shm"</a>
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
