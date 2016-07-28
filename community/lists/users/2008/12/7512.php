<?
$subject_val = "Re: [OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 19:33:02 2008" -->
<!-- isoreceived="20081212003302" -->
<!-- sent="Thu, 11 Dec 2008 19:32:56 -0500" -->
<!-- isosent="20081212003256" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Onesided + derived datatypes" -->
<!-- id="EE4B1ED9-D1D9-4EDE-8ED6-058E4969F1B9_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 19:32:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7513.php">Catrina Nguyen: "[OMPI users] bug of openmpi-1.3b3r20000"</a>
<li><strong>Previous message:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dorian,
<br>
<p>You are right, the datatype generated using the block_index function  
<br>
is a legal data-type. We wrongly determined some overlapping regions  
<br>
in the description [which is illegal based on the MPI standard]. The  
<br>
detection of such overlapping regions being a very expensive process  
<br>
if we don't want any false positives (such as your datatype), I prefer  
<br>
to remove it completely.
<br>
<p>To keep it short I just committed a patch (r20120) in the trunk, and  
<br>
I'll take care to move it in the 1.3 and the 1.2.9.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks for your help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 10, 2008, at 18:07 , doriankrause wrote:
<br>
<p><span class="quotelev1">&gt; Hi List,
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
<span class="quotelev1">&gt; &lt;ompitest.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7513.php">Catrina Nguyen: "[OMPI users] bug of openmpi-1.3b3r20000"</a>
<li><strong>Previous message:</strong> <a href="7511.php">Marcus G. Daniels: "[OMPI users] Axon BTL for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="7502.php">doriankrause: "[OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
