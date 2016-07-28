<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 12:45:51 2011" -->
<!-- isoreceived="20110920164551" -->
<!-- sent="Tue, 20 Sep 2011 10:45:39 -0600" -->
<!-- isosent="20110920164539" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FB9DB0C_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E78B2FB.80707_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 12:45:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17363.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17361.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17361.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for this explanation.  I will assume that my problem here is some kind of memory corruption.
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Tim Prince
<br>
Sent: Tuesday, September 20, 2011 10:36 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?
<br>
<p>On 9/20/2011 10:50 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; It appears to be a side effect of linkage that is able to change a compute-only routine's answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have assumed that max/sqrt/tiny/abs might be replaced, but some other kind of corruption may be going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Those intrinsics have direct instruction set translations which 
<br>
shouldn't vary from -O1 on up nor with linkage options nor be affected 
<br>
by MPI or insertion of WRITEs.
<br>
<p><pre>
-- 
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17363.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17361.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17361.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
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
