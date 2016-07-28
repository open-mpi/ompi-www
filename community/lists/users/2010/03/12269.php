<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  7 07:06:58 2010" -->
<!-- isoreceived="20100307120658" -->
<!-- sent="Sun, 7 Mar 2010 13:06:51 +0100" -->
<!-- isosent="20100307120651" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="B3926B14-618A-4193-AC3F-AE9D25ACF603_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4C9BFE.5070100_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI problem on Fedora Core 12<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-07 07:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2010, at 16:57 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would be very strange for nanosleep to cause a problem for Open MPI -- it shouldn't interfere with any of Open MPI's mechanisms.  Double check that your my_barrier() function is actually working properly -- removing the nanosleep() shouldn't affect the correctness of your barrier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I read Gijsbert's e-mail differently.  Apparently, the issue is not MPI/OMPI at all, but a hang inside nanosleep.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 31, 2009, at 1:15 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I only recently learned about the OMPI_MCA_mpi_yield_when_idle variable, I still have to test if that is an alternative to my workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle does not free the CPU up very much.  It still polls fairly aggressively, and the yield() call doesn't really free the CPU up that much.  It's a weak and probably ungratifying solution for your problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meanwhile I seem to have found the cause of problem ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... rather than OpenMPI being the problem, nanosleep is the culprit because the call to it seems to hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; So, &quot;we&quot; (OMPI community) are off the hook?  Problem is in nanosleep?  &quot;We&quot; are relieved (or confused about what you're reporting)!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Just to confirm: the problem is indeed not with OpenMPI (so the OMPI community is off the hook) but with nanosleep() on Fedora Core 12 (and has not been fixed yet in the current kernel/glibc).
<br>
Using MPI_Barrier with OMPI_MCA_mpi_yield_when_idle helps somewhat, but is not ideal, as it still uses a lot of CPU.  
<br>
<p>Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12268.php">Reuti: "Re: [OMPI users] Questions on /tmp/openmpi-sessions-userid directory"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11742.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
