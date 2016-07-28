<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 18 08:51:49 2008" -->
<!-- isoreceived="20081018125149" -->
<!-- sent="Sat, 18 Oct 2008 08:51:43 -0400" -->
<!-- isosent="20081018125143" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE" -->
<!-- id="038145B1-99D0-403B-BCF6-3BC749A80BED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="75CA7655-AFC2-4D13-83FA-3CF5D6C4B51F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-18 08:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="7023.php">Nick Collier: "[OMPI users] MPI_ERR_TRUNCATE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 17, 2008, at 6:03 PM, Nick Collier wrote:
<br>
<p><span class="quotelev1">&gt; And under some conditions, I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [3] [belafonte.home:04938] *** An error occurred in MPI_Wait
</span><br>
<span class="quotelev1">&gt; [3] [belafonte.home:04938] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [3] [belafonte.home:04938] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [3] [belafonte.home:04938] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do get the error, tracking the send and receive counts shows  
</span><br>
<span class="quotelev1">&gt; them as equal. And what I don't understand is that the  
</span><br>
<span class="quotelev1">&gt; receive_complete function in the above executes and the recv Struct  
</span><br>
<span class="quotelev1">&gt; actually contains the data that was sent. So, I'm confused about the  
</span><br>
<span class="quotelev1">&gt; error and what its trying to tell me as it looks like everything  
</span><br>
<span class="quotelev1">&gt; worked OK.
</span><br>
<p><p>Perhaps it's a race condition?  Remember that MPI_Wait triggers OMPI's  
<br>
general progression engine -- so it may not be *this* receive that is  
<br>
the problem; it could be some other pending receive that has a  
<br>
mismatched send/receive length.
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
<li><strong>Next message:</strong> <a href="7030.php">Mostyn Lewis: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>Previous message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>In reply to:</strong> <a href="7023.php">Nick Collier: "[OMPI users] MPI_ERR_TRUNCATE"</a>
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
