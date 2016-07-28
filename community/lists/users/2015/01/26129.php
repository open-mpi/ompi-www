<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 13:44:13 2015" -->
<!-- isoreceived="20150108184413" -->
<!-- sent="Thu, 8 Jan 2015 19:44:12 +0100" -->
<!-- isosent="20150108184412" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="CAG8o1y4xnJMyKfkqp3FWQqQpbre0GJ0ki6h5P3FZJujzvM-+cA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y591PW5+3Ff_Xmku2RPvL6sns=PoL3On1YAUXOT09aZfQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 13:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26128.php">Diego Avesani: "[OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26128.php">Diego Avesani: "[OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I found the error.
<br>
There is a  Ndata2send(iCPU) instead of Ndata2recv(iCPU).
<br>
In the attachment there is the correct version of the program.
<br>
<p>Only one thing, could do you check if the use of MPI_WAITALL
<br>
and MPI_BARRIER is correct?
<br>
<p>Thanks again
<br>
<p><p><p>Diego
<br>
<p><p>On 8 January 2015 at 18:48, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; thanks thank a lot, I am learning a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written a simple program that send vectors of integers from a CPU
</span><br>
<span class="quotelev1">&gt; to another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is written (at least for now) for 4 CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is quite simple:
</span><br>
<span class="quotelev1">&gt; Each CPU knows how many data has to send to the other CPUs. This info is
</span><br>
<span class="quotelev1">&gt; than send to the other CPUS. In this way each CPU knows how may data has to
</span><br>
<span class="quotelev1">&gt; receive from other CPUs.
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
<span class="quotelev1">&gt; In the second part, each processor sends a vector of integer to the other
</span><br>
<span class="quotelev1">&gt; processor. The size is given and each CPU knows the size of the incoming
</span><br>
<span class="quotelev1">&gt; vector form the first part of the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this second part the program fails and I do not know why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attachment you can find the program. Could you please help me.
</span><br>
<span class="quotelev1">&gt; Problably I didn't understand properly the ISEND and IRECV subroutine.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26128.php">Diego Avesani: "[OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26128.php">Diego Avesani: "[OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
