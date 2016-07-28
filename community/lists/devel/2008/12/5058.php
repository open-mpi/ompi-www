<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 20:17:28 2008" -->
<!-- isoreceived="20081213011728" -->
<!-- sent="Fri, 12 Dec 2008 20:17:22 -0500" -->
<!-- isosent="20081213011722" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes" -->
<!-- id="05CBA02C-5E7C-4C28-9CA3-E23D4004CCF2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A2AB4E3F-8ED9-4C3E-8506-B1C6BDDDB718_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-12-12 20:17:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Previous message:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>There seems to be a real problem in the one sided implementation.  
<br>
Using the block indexed type from the test application the following  
<br>
call succeed:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Put(mem, 1, mpit, 1, 0, 4, mpi_double3, win);
<br>
<p>However, the call:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Put(mem, 4, mpi_double3, 1, 0, 1, mpit, win);
<br>
fails.
<br>
<p>I tried different combinations and the common part is that as soon as  
<br>
the remote type is the block indexed one the data in the remote memory  
<br>
is not correctly updated (or not updated at all).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 11, 2008, at 19:14 , Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I think that's a reasonable solution.  However, the words &quot;not it&quot;  
</span><br>
<span class="quotelev1">&gt; come to mind.  Sorry, but I have way too much on my plate this  
</span><br>
<span class="quotelev1">&gt; month.  By the way, in case no one noticed, I had e-mailed my  
</span><br>
<span class="quotelev1">&gt; findings to devel.  Someone might want to reply to Dorian's e-mail  
</span><br>
<span class="quotelev1">&gt; on users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2008, at 2:31 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're right, the datatype is being too cautious with the  
</span><br>
<span class="quotelev2">&gt;&gt; boundaries when detecting the overlap. There is no good solution to  
</span><br>
<span class="quotelev2">&gt;&gt; detect the overlap except parsing the whole memory layout to check  
</span><br>
<span class="quotelev2">&gt;&gt; the status of every predefined type. As one can imagine this is a  
</span><br>
<span class="quotelev2">&gt;&gt; very expensive operation. This is reason I preferred to use the  
</span><br>
<span class="quotelev2">&gt;&gt; true extent and the size of the data to try to detect the overlap.  
</span><br>
<span class="quotelev2">&gt;&gt; This approach is a lot faster, but has a poor accuracy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The best solution I can think of in short term is to remove  
</span><br>
<span class="quotelev2">&gt;&gt; completely the overlap check. This will have absolutely no impact  
</span><br>
<span class="quotelev2">&gt;&gt; on the way we pack the data, but can lead to unexpected results  
</span><br>
<span class="quotelev2">&gt;&gt; when we unpack and the data overlap. But I guess this can be  
</span><br>
<span class="quotelev2">&gt;&gt; considered as a user error, as the MPI standard clearly state that  
</span><br>
<span class="quotelev2">&gt;&gt; the result of such an operation is ... unexpected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 10, 2008, at 22:20 , Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked into this, and it appears to be datatype related.  If the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displacements are set t o 3, 2, 1, 0, there the datatype will fail  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the type checks for one-sided because is_overlapped() returns 1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the datatype.  My reading of the standard seems to indicate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this should not be.  I haven't looked into the problems with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displacement set to 0, 1, 2, 3, but I'm guessing it has something  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do with the reverse problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like a datatype issue, so it's out of my realm of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expertise.  Can someone else take a look?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: December 10, 2008 4:07:55 PM MST
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a MPI program which uses one sided communication with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; derived
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatypes (MPI_Type_create_indexed_block). I developed the code  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; facing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some problems. On the most machines I get an SIGSEGV in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Win_fence,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sometimes an invalid datatype shows up. I ran the program in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Valgrind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and didn't get anything valuable. Since I can't see a reason for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem (at least if I understand the standard correctly), I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attached testprogram.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are my experiences:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * If I compile without ONESIDED defined, everything works and V1  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and V2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; give the same results
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Am I in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompitest.cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication and (some) derived datatypes, so that it is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; probably not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of problem in my code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; behaviour
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please correct me if ompitest.cc contains errors. Otherwise I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; glad to hear how I should report these problems to the develepors  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they don't read this).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks + best regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompitest.tar.gz&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>Previous message:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="5045.php">Brian Barrett: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
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
