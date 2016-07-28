<?
$subject_val = "Re: [OMPI users] OpenMPI problem on Fedora Core 12";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 10:56:31 2010" -->
<!-- isoreceived="20100112155631" -->
<!-- sent="Tue, 12 Jan 2010 07:57:50 -0800" -->
<!-- isosent="20100112155750" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI problem on Fedora Core 12" -->
<!-- id="4B4C9BFE.5070100_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAA542C1-4597-44D3-A31D-38BBDB0CEFA7_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 10:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Previous message:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>In reply to:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;It would be very strange for nanosleep to cause a problem for Open MPI -- it shouldn't interfere with any of Open MPI's mechanisms.  Double check that your my_barrier() function is actually working properly -- removing the nanosleep() shouldn't affect the correctness of your barrier.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I read Gijsbert's e-mail differently.  Apparently, the issue is not 
<br>
MPI/OMPI at all, but a hang inside nanosleep.
<br>
<p><span class="quotelev1">&gt;On Dec 31, 2009, at 1:15 PM, Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I only recently learned about the OMPI_MCA_mpi_yield_when_idle variable, I still have to test if that is an alternative to my workaround.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
mpi_yield_when_idle does not free the CPU up very much.  It still polls 
<br>
fairly aggressively, and the yield() call doesn't really free the CPU up 
<br>
that much.  It's a weak and probably ungratifying solution for your problem.
<br>
<p><span class="quotelev2">&gt;&gt;Meanwhile I seem to have found the cause of problem ...
</span><br>
<span class="quotelev2">&gt;&gt;... rather than OpenMPI being the problem, nanosleep is the culprit because the call to it seems to hang.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
So, &quot;we&quot; (OMPI community) are off the hook?  Problem is in nanosleep?  
<br>
&quot;We&quot; are relieved (or confused about what you're reporting)!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11743.php">chan_at_[hidden]: "Re: [OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>Previous message:</strong> <a href="11741.php">Pawan Acharya: "[OMPI users] Compilig CG.W.8 benchmark"</a>
<li><strong>In reply to:</strong> <a href="11740.php">Jeff Squyres: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12269.php">Gijsbert Wiesenekker: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
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
