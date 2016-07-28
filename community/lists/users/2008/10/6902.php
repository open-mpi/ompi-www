<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 10:58:17 2008" -->
<!-- isoreceived="20081008145817" -->
<!-- sent="Wed, 08 Oct 2008 15:58:12 +0100" -->
<!-- isosent="20081008145812" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="1223477892.11054.3.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="AC31D180-4B83-440B-B321-84902AC2CCFC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 10:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-10-08 at 09:46 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; - Have you tried compiling Open MPI with something other than GCC?   
</span><br>
<span class="quotelev1">&gt; Just this week, we've gotten some reports from an OMPI member that  
</span><br>
<span class="quotelev1">&gt; they are sometimes seeing *huge* performance differences with OMPI  
</span><br>
<span class="quotelev1">&gt; compiled with GCC vs. any other compiler (Intel, PGI, Pathscale).
</span><br>
<span class="quotelev1">&gt; We  
</span><br>
<span class="quotelev1">&gt; are working to figure out why; no root cause has been identified yet.
</span><br>
<p>Jeff,
<br>
<p>You probably already know this but the obvious candidate here is the
<br>
memcpy() function, icc sticks in it's own which in some cases is much
<br>
better than the libc one.  It's unusual for compilers to have *huge*
<br>
differences from code optimisations alone.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6895.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6903.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
