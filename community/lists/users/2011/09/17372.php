<?
$subject_val = "[OMPI users] Question about compilng with fPIC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 11:44:27 2011" -->
<!-- isoreceived="20110921154427" -->
<!-- sent="Wed, 21 Sep 2011 09:44:15 -0600" -->
<!-- isosent="20110921154415" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question about compilng with fPIC" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FC365A8_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FB9DB0C_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about compilng with fPIC<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 11:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17362.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Follow-up to a mislabeled thread:  &quot;How could OpenMPI (or MVAPICH) affect floating-point results?&quot;
<br>
<p>I have found a solution to my problem, but I would like to understand the underlying issue better.
<br>
<p>To rehash: An Intel-compiled executable linked with MVAPICH runs fine; linked with OpenMPI fails.  The earliest symptom I could see was some strange difference in numerical values of quantities that should be unaffected by MPI calls.  Tim's advice guided me to assume memory corruption. Eugene's advice guided me to explore the detailed differences in compilation.  
<br>
<p>I observed that the MVAPICH mpif90 wrapper adds -fPIC.
<br>
<p>I tried adding -fPIC and -mcmodel=medium to the compilation of the OpenMPI-linked executable.  Now it works fine. I haven't tried without -mcmodel=medium, but my guess is -fPIC did the trick.
<br>
<p>Does anyone know why compiling with -fPIC has helped?  Does it suggest an application problem or an OpenMPI problem?
<br>
<p>To note: This is an Infiniband-based cluster.  The application does pretty basic MPI-1 operations: send, recv, bcast, reduce, allreduce, gather, gather, isend, irecv, waitall.  There is one task that uses iprobe with MPI_ANY_TAG, but this task is only involved in certain cases (including this one). Conversely, cases that do not call iprobe have not yet been observed to crash.  I am deducing that this function is the problem.
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Blosch, Edwin L
<br>
Sent: Tuesday, September 20, 2011 11:46 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?
<br>
<p>Thank you for this explanation.  I will assume that my problem here is some kind of memory corruption.
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17362.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17373.php">Tim Prince: "Re: [OMPI users] Question about compilng with fPIC"</a>
<li><strong>Reply:</strong> <a href="17376.php">Blosch, Edwin L: "Re: [OMPI users] Question about compilng with fPIC"</a>
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
