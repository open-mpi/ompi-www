<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 14:06:03 2015" -->
<!-- isoreceived="20150108190603" -->
<!-- sent="Thu, 8 Jan 2015 19:06:00 +0000" -->
<!-- isosent="20150108190600" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="6B7132BD-8B77-472E-BC50-B6D4C5551284_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4xnJMyKfkqp3FWQqQpbre0GJ0ki6h5P3FZJujzvM-+cA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive vectors + variable length<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 14:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What do you need the barriers for?
<br>
<p>On Jan 8, 2015, at 1:44 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I found the error. 
</span><br>
<span class="quotelev1">&gt; There is a  Ndata2send(iCPU) instead of Ndata2recv(iCPU).
</span><br>
<span class="quotelev1">&gt; In the attachment there is the correct version of the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only one thing, could do you check if the use of MPI_WAITALL and MPI_BARRIER is correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8 January 2015 at 18:48, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; thanks thank a lot, I am learning a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written a simple program that send vectors of integers from a CPU to another.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program is written (at least for now) for 4 CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program is quite simple:
</span><br>
<span class="quotelev1">&gt; Each CPU knows how many data has to send to the other CPUs. This info is than send to the other CPUS. In this way each CPU knows how may data has to receive from other CPUs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This part of the program works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is in the second part.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the second part, each processor sends a vector of integer to the other processor. The size is given and each CPU knows the size of the incoming vector form the first part of the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this second part the program fails and I do not know why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the attachment you can find the program. Could you please help me. Problably I didn't understand properly the ISEND and IRECV subroutine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26129.php">http://www.open-mpi.org/community/lists/users/2015/01/26129.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26129.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
