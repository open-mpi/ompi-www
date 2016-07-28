<?
$subject_val = "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 22:20:20 2008" -->
<!-- isoreceived="20081211032020" -->
<!-- sent="Wed, 10 Dec 2008 20:20:13 -0700" -->
<!-- isosent="20081211032013" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes" -->
<!-- id="F2ABC18F-114D-4765-8A2F-28D580F54538_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49404BCB.4000704_at_web.de" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 22:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>Previous message:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I looked into this, and it appears to be datatype related.  If the  
<br>
displacements are set t o 3, 2, 1, 0, there the datatype will fail the  
<br>
type checks for one-sided because is_overlapped() returns 1 for the  
<br>
datatype.  My reading of the standard seems to indicate this should  
<br>
not be.  I haven't looked into the problems with displacement set to  
<br>
0, 1, 2, 3, but I'm guessing it has something to do with the reverse  
<br>
problem.
<br>
<p>This looks like a datatype issue, so it's out of my realm of  
<br>
expertise.  Can someone else take a look?
<br>
<p>Brian
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: December 10, 2008 4:07:55 PM MST
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi List,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a MPI program which uses one sided communication with derived
</span><br>
<span class="quotelev1">&gt; datatypes (MPI_Type_create_indexed_block). I developed the code with
</span><br>
<span class="quotelev1">&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev1">&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm facing
</span><br>
<span class="quotelev1">&gt; some problems. On the most machines I get an SIGSEGV in MPI_Win_fence,
</span><br>
<span class="quotelev1">&gt; sometimes an invalid datatype shows up. I ran the program in Valgrind
</span><br>
<span class="quotelev1">&gt; and didn't get anything valuable. Since I can't see a reason for this
</span><br>
<span class="quotelev1">&gt; problem (at least if I understand the standard correctly), I wrote the
</span><br>
<span class="quotelev1">&gt; attached testprogram.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my experiences:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * If I compile without ONESIDED defined, everything works and V1 and  
</span><br>
<span class="quotelev1">&gt; V2
</span><br>
<span class="quotelev1">&gt; give the same results
</span><br>
<span class="quotelev1">&gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous) it  
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev1">&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am I  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev1">&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev1">&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev1">&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev1">&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev1">&gt; ompitest.cc
</span><br>
<span class="quotelev1">&gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev1">&gt; communication and (some) derived datatypes, so that it is probably not
</span><br>
<span class="quotelev1">&gt; of problem in my code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev1">&gt; behaviour
</span><br>
<span class="quotelev1">&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please correct me if ompitest.cc contains errors. Otherwise I would be
</span><br>
<span class="quotelev1">&gt; glad to hear how I should report these problems to the develepors (if
</span><br>
<span class="quotelev1">&gt; they don't read this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks + best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><p>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5036/ompitest.tar.gz">ompitest.tar.gz</a>
</ul>
<!-- attachment="ompitest.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5037.php">Jeff Squyres: "Re: [OMPI devel] 1.3 staging area?"</a>
<li><strong>Previous message:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
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
