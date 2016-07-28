<?
$subject_val = "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 19:14:28 2008" -->
<!-- isoreceived="20081212001428" -->
<!-- sent="Thu, 11 Dec 2008 17:14:23 -0700" -->
<!-- isosent="20081212001423" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes" -->
<!-- id="A2AB4E3F-8ED9-4C3E-8506-B1C6BDDDB718_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B14AA15-E9E7-4031-A939-B6F04017F4CC_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 19:14:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that's a reasonable solution.  However, the words &quot;not it&quot;  
<br>
come to mind.  Sorry, but I have way too much on my plate this month.   
<br>
By the way, in case no one noticed, I had e-mailed my findings to  
<br>
devel.  Someone might want to reply to Dorian's e-mail on users.
<br>
<p><p>Brian
<br>
<p>On Dec 11, 2008, at 2:31 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, the datatype is being too cautious with the boundaries  
</span><br>
<span class="quotelev1">&gt; when detecting the overlap. There is no good solution to detect the  
</span><br>
<span class="quotelev1">&gt; overlap except parsing the whole memory layout to check the status  
</span><br>
<span class="quotelev1">&gt; of every predefined type. As one can imagine this is a very  
</span><br>
<span class="quotelev1">&gt; expensive operation. This is reason I preferred to use the true  
</span><br>
<span class="quotelev1">&gt; extent and the size of the data to try to detect the overlap. This  
</span><br>
<span class="quotelev1">&gt; approach is a lot faster, but has a poor accuracy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The best solution I can think of in short term is to remove  
</span><br>
<span class="quotelev1">&gt; completely the overlap check. This will have absolutely no impact on  
</span><br>
<span class="quotelev1">&gt; the way we pack the data, but can lead to unexpected results when we  
</span><br>
<span class="quotelev1">&gt; unpack and the data overlap. But I guess this can be considered as a  
</span><br>
<span class="quotelev1">&gt; user error, as the MPI standard clearly state that the result of  
</span><br>
<span class="quotelev1">&gt; such an operation is ... unexpected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2008, at 22:20 , Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked into this, and it appears to be datatype related.  If the  
</span><br>
<span class="quotelev2">&gt;&gt; displacements are set t o 3, 2, 1, 0, there the datatype will fail  
</span><br>
<span class="quotelev2">&gt;&gt; the type checks for one-sided because is_overlapped() returns 1 for  
</span><br>
<span class="quotelev2">&gt;&gt; the datatype.  My reading of the standard seems to indicate this  
</span><br>
<span class="quotelev2">&gt;&gt; should not be.  I haven't looked into the problems with  
</span><br>
<span class="quotelev2">&gt;&gt; displacement set to 0, 1, 2, 3, but I'm guessing it has something  
</span><br>
<span class="quotelev2">&gt;&gt; to do with the reverse problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like a datatype issue, so it's out of my realm of  
</span><br>
<span class="quotelev2">&gt;&gt; expertise.  Can someone else take a look?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: doriankrause &lt;doriankrause_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: December 10, 2008 4:07:55 PM MST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Onesided + derived datatypes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi List,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a MPI program which uses one sided communication with derived
</span><br>
<span class="quotelev3">&gt;&gt;&gt; datatypes (MPI_Type_create_indexed_block). I developed the code with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2 and unfortunately didn't thought about trying it out with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; facing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some problems. On the most machines I get an SIGSEGV in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Win_fence,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes an invalid datatype shows up. I ran the program in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valgrind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and didn't get anything valuable. Since I can't see a reason for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem (at least if I understand the standard correctly), I wrote  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached testprogram.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are my experiences:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * If I compile without ONESIDED defined, everything works and V1  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and V2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give the same results
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * If I compile with ONESIDED and V2 defined (MPI_Type_contiguous)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming that V1+O2 and V2 should be equivalent?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * ONESIDED + V1 + O1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m02:03115] *** An error occurred in MPI_Put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m02:03115] *** on win
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m02:03115] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't get a segfault as in the &quot;real life example&quot; but if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompitest.cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is correct it means that OpenMPI is buggy when it comes to onesided
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication and (some) derived datatypes, so that it is probably  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of problem in my code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behaviour
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be be seen with gcc-3.3.1 and intel 10.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please correct me if ompitest.cc contains errors. Otherwise I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; glad to hear how I should report these problems to the develepors  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they don't read this).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks + best regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompitest.tar.gz&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5058.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
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
