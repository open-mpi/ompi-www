<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 06:52:11 2010" -->
<!-- isoreceived="20100802105211" -->
<!-- sent="Mon, 02 Aug 2010 06:52:20 -0400" -->
<!-- isosent="20100802105220" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="4C56A364.10408_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C565213.80607_at_idra.unipd.it" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 06:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13883.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13881.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe it is definitely a no-no to STORE (write) into a send buffer 
<br>
while a send is posted.  I know there have been debate in the forum to 
<br>
relax LOADS (reads) from a send buffer.  I think OMPI can handle the 
<br>
latter case (LOADS).  On the posted receive side you open yourself up 
<br>
for some race conditions and overwrites if you do STORES or LOADS from a 
<br>
posted receive buffer.
<br>
<p>--td
<br>
<p>Alberto Canestrelli wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a problem with a fortran code that I have parallelized with 
</span><br>
<span class="quotelev1">&gt; MPI. I state in advance that I read the whole ebook &quot;Mit Press - Mpi - 
</span><br>
<span class="quotelev1">&gt; The Complete Reference, Volume 1&quot; and I took different MPI classes, so 
</span><br>
<span class="quotelev1">&gt; I have a discrete MPI knowledge. I was able to solve by myself all the 
</span><br>
<span class="quotelev1">&gt; errors I bumped into but now I am not able to find the bug of my code 
</span><br>
<span class="quotelev1">&gt; that provides erroneous results. Without entering in the details of my 
</span><br>
<span class="quotelev1">&gt; code, I think that the cause of the problem could be reletad to the 
</span><br>
<span class="quotelev1">&gt; following aspect highlighted in the above ebook (in the follow I copy 
</span><br>
<span class="quotelev1">&gt; and paste from the e-book):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A nonblocking post-send call indicates that the system may start 
</span><br>
<span class="quotelev1">&gt; copying data
</span><br>
<span class="quotelev1">&gt; out of the send buffer. The sender must not access any part of the 
</span><br>
<span class="quotelev1">&gt; send buffer
</span><br>
<span class="quotelev1">&gt; (neither for loads nor for STORES) after a nonblocking send operation 
</span><br>
<span class="quotelev1">&gt; is posted until
</span><br>
<span class="quotelev1">&gt; the complete send returns.
</span><br>
<span class="quotelev1">&gt; A nonblocking post-receive indicates that the system may start writing 
</span><br>
<span class="quotelev1">&gt; data into
</span><br>
<span class="quotelev1">&gt; the receive buffer. The receiver must not access any part of the 
</span><br>
<span class="quotelev1">&gt; receive buffer after
</span><br>
<span class="quotelev1">&gt; a nonblocking receive operation is posted, until the complete-receive 
</span><br>
<span class="quotelev1">&gt; returns.
</span><br>
<span class="quotelev1">&gt; Rationale. We prohibit read accesses to a send buffer while it is 
</span><br>
<span class="quotelev1">&gt; being used, even
</span><br>
<span class="quotelev1">&gt; though the send operation is not supposed to alter the content of this 
</span><br>
<span class="quotelev1">&gt; buffer. This
</span><br>
<span class="quotelev1">&gt; may seem more stringent than necessary, but the additional restriction 
</span><br>
<span class="quotelev1">&gt; causes little
</span><br>
<span class="quotelev1">&gt; loss of functionality and allows better performance on some systems- 
</span><br>
<span class="quotelev1">&gt; consider
</span><br>
<span class="quotelev1">&gt; the case where data transfer is done by a DMA engine that is not 
</span><br>
<span class="quotelev1">&gt; cache-coherent
</span><br>
<span class="quotelev1">&gt; with the main processor.End of rationale.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use plenty of nonblocking post-send in my code. Is it really true 
</span><br>
<span class="quotelev1">&gt; that the sender must not access any part of the send buffer not even 
</span><br>
<span class="quotelev1">&gt; for STORES?  Or was it a MPI 1.0 issue?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; alberto
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-13882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-13882/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13883.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13881.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13883.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
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
