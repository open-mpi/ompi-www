<?
$subject_val = "Re: [OMPI users] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 13:57:07 2008" -->
<!-- isoreceived="20081106185707" -->
<!-- sent="Thu, 6 Nov 2008 13:57:01 -0500" -->
<!-- isosent="20081106185701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress of the asynchronous messages" -->
<!-- id="C4E50282-5AA1-4D44-B00D-8A0121EFD58F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49132EDC.9030303_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress of the asynchronous messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 13:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have a look at the FAQ; we discuss quite a few of these kinds of issues:
<br>
<p>- <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
<br>
- <a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p>More specifically, what Eugene is saying is correct -- OMPI has made  
<br>
tradeoffs for various, complicated reasons.  One of the things that we  
<br>
sacrificed in the common case was communication/computation overlap on  
<br>
OpenFabrics networks (in the common case).
<br>
<p>If you want good overlap, set the MCA parameter mpi_leave_pinned to 1  
<br>
(on OpenFabrics networks).  This will effectively move the bulk of the  
<br>
message passing progress (but not all of it) down to the hardware.   
<br>
Hence, when you sleep/do real computations while looping over  
<br>
MPI_TEST, the message is probably actually being progressed in the  
<br>
background.  You won't see this kind of overlap with other transports  
<br>
such as shared memory or TCP because we don't have hardware assist in  
<br>
these cases.
<br>
<p><p>On Nov 6, 2008, at 12:52 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; vladimir marjanovic wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In order to overlap communication and computation I don't want to  
</span><br>
<span class="quotelev2">&gt;&gt; use MPI_Wait.
</span><br>
<span class="quotelev1">&gt; Right.  One thing to keep in mind is that there are two ways of  
</span><br>
<span class="quotelev1">&gt; overlapping communication and computation.  One is you start a send  
</span><br>
<span class="quotelev1">&gt; (MPI_Isend), you do a bunch of computation while the message is  
</span><br>
<span class="quotelev1">&gt; being sent, and then after the message has been sent you call  
</span><br>
<span class="quotelev1">&gt; MPI_Wait just to clean up.  This assumes that the MPI implementation  
</span><br>
<span class="quotelev1">&gt; can send a message while control of the program has been returned to  
</span><br>
<span class="quotelev1">&gt; you.  The experts can give you the fine print, but my simple  
</span><br>
<span class="quotelev1">&gt; assertion is, &quot;This doesn't usually happen.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rather, the MPI implementation typically will send data only when  
</span><br>
<span class="quotelev1">&gt; your code is in some MPI call.  That's why you have to call MPI_Test  
</span><br>
<span class="quotelev1">&gt; periodically... or some other MPI function.
</span><br>
<span class="quotelev2">&gt;&gt; For sure the message is being decomposed into chucks and the size  
</span><br>
<span class="quotelev2">&gt;&gt; of chuck is probably defined by environment variable.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe do you know how can I control size of chuck?
</span><br>
<span class="quotelev1">&gt; I don't.  Try running &quot;ompi_info -a&quot; and looking through the  
</span><br>
<span class="quotelev1">&gt; parameters.  For the shared-memory BTL, it's  
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_max_frag_size.  I also see something like  
</span><br>
<span class="quotelev1">&gt; coll_sm_fragment_size.  Maybe look at the parameters that have  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_max&quot; in their names.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7228.php">Jeff Squyres: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="7226.php">George Bosilca: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<li><strong>In reply to:</strong> <a href="7225.php">Eugene Loh: "Re: [OMPI users] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
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
