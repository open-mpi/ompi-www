<?
$subject_val = "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 19:27:20 2008" -->
<!-- isoreceived="20080829232720" -->
<!-- sent="Fri, 29 Aug 2008 16:27:15 -0700" -->
<!-- isosent="20080829232715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7" -->
<!-- id="3007E301-36E7-4BEA-AE91-F5F82FE748BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48B83684.3070803_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-29 19:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2008, at 10:48 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; In the file mpicxx.cc there is a declaration near the bottom that  
</span><br>
<span class="quotelev1">&gt; looks like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; const int LOCK_SHARED = MPI_LOCK_SHARED;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The preprocessor is going through that file and replacing  
</span><br>
<span class="quotelev1">&gt; LOCK_SHARED with 0x01.  Then when it tries to compile it you are  
</span><br>
<span class="quotelev1">&gt; trying to compile a line that looks like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; const int 0x01 = 2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is why you see the error.
</span><br>
<p>Hmm.  This hasn't changed in mpicxx.cc for a long time.  What made it  
<br>
get activated now?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6451.php">Anugraha Sankaranarayanan: "Re: [OMPI users] How to get started?"</a>
<li><strong>Previous message:</strong> <a href="6449.php">Jeff Squyres: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>In reply to:</strong> <a href="6447.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6456.php">Rolf Vandevaart: "Re: [OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
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
