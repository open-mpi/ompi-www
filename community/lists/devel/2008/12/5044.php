<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:32:07 2008" -->
<!-- isoreceived="20081211213207" -->
<!-- sent="Thu, 11 Dec 2008 16:31:58 -0500" -->
<!-- isosent="20081211213158" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes" -->
<!-- id="7B14AA15-E9E7-4031-A939-B6F04017F4CC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F2ABC18F-114D-4765-8A2F-28D580F54538_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 16:31:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>You're right, the datatype is being too cautious with the boundaries  
<br>
when detecting the overlap. There is no good solution to detect the  
<br>
overlap except parsing the whole memory layout to check the status of  
<br>
every predefined type. As one can imagine this is a very expensive  
<br>
operation. This is reason I preferred to use the true extent and the  
<br>
size of the data to try to detect the overlap. This approach is a lot  
<br>
faster, but has a poor accuracy.
<br>
<p>The best solution I can think of in short term is to remove completely  
<br>
the overlap check. This will have absolutely no impact on the way we  
<br>
pack the data, but can lead to unexpected results when we unpack and  
<br>
the data overlap. But I guess this can be considered as a user error,  
<br>
as the MPI standard clearly state that the result of such an operation  
<br>
is ... unexpected.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 10, 2008, at 22:20 , Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked into this, and it appears to be datatype related.  If the  
</span><br>
<span class="quotelev1">&gt; displacements are set t o 3, 2, 1, 0, there the datatype will fail  
</span><br>
<span class="quotelev1">&gt; the type checks for one-sided because is_overlapped() returns 1 for  
</span><br>
<span class="quotelev1">&gt; the datatype.  My reading of the standard seems to indicate this  
</span><br>
<span class="quotelev1">&gt; should not be.  I haven't looked into the problems with displacement  
</span><br>
<span class="quotelev1">&gt; set to 0, 1, 2, 3, but I'm guessing it has something to do with the  
</span><br>
<span class="quotelev1">&gt; reverse problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like a datatype issue, so it's out of my realm of  
</span><br>
<span class="quotelev1">&gt; expertise.  Can someone else take a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: December 10, 2008 4:07:55 PM MST
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a MPI program which uses one sided communication with derived
</span><br>
<span class="quotelev2">&gt;&gt; datatypes (MPI_Type_create_indexed_block). I developed the code with
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm facing
</span><br>
<span class="quotelev2">&gt;&gt; some problems. On the most machines I get an SIGSEGV in  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Win_fence,
</span><br>
<span class="quotelev2">&gt;&gt; sometimes an invalid datatype shows up. I ran the program in Valgrind
</span><br>
<span class="quotelev2">&gt;&gt; and didn't get anything valuable. Since I can't see a reason for this
</span><br>
<span class="quotelev2">&gt;&gt; problem (at least if I understand the standard correctly), I wrote  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; attached testprogram.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here are my experiences:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * If I compile without ONESIDED defined, everything works and V1  
</span><br>
<span class="quotelev2">&gt;&gt; and V2
</span><br>
<span class="quotelev2">&gt;&gt; give the same results
</span><br>
<span class="quotelev2">&gt;&gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous)  
</span><br>
<span class="quotelev2">&gt;&gt; it works.
</span><br>
<span class="quotelev2">&gt;&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am  
</span><br>
<span class="quotelev2">&gt;&gt; I in
</span><br>
<span class="quotelev2">&gt;&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev2">&gt;&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev2">&gt;&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev2">&gt;&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev2">&gt;&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev2">&gt;&gt; ompitest.cc
</span><br>
<span class="quotelev2">&gt;&gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev2">&gt;&gt; communication and (some) derived datatypes, so that it is probably  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; of problem in my code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev2">&gt;&gt; behaviour
</span><br>
<span class="quotelev2">&gt;&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please correct me if ompitest.cc contains errors. Otherwise I would  
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; glad to hear how I should report these problems to the develepors (if
</span><br>
<span class="quotelev2">&gt;&gt; they don't read this).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks + best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dorian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompitest.tar.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5043.php">Jeff Squyres: "Re: [OMPI devel] Forwarding SIGTSTP and SIGCONT"</a>
<li><strong>In reply to:</strong> <a href="5036.php">Brian Barrett: "[OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
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
