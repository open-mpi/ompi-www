<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 21:21:53 2010" -->
<!-- isoreceived="20100803012153" -->
<!-- sent="Tue, 03 Aug 2010 11:21:41 +1000" -->
<!-- isosent="20100803012141" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="1280798501.6370.254.camel_at_rscpc28.anu.edu.au" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4C56E5E7.7050508_at_idra.unipd.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing to the send buffer<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 21:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>In reply to:</strong> <a href="13892.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2010-08-02 at 11:36 -0400, Alberto Canestrelli wrote:
<br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ok that is not my problem I never read a data from the posted receive 
</span><br>
<span class="quotelev1">&gt; before the correspondent WAIT. Now the last question is: what could 
</span><br>
<span class="quotelev1">&gt; happen if I  am reading the data from the posted send? I do it plenty of 
</span><br>
<span class="quotelev1">&gt; times! possible consequences?Can you guarantee me that this approach is 
</span><br>
<span class="quotelev1">&gt; safe?
</span><br>
<p>Well, it seems from what you've posted that the standard says you should
<br>
not assume it's safe.  Don't you want to be standard-compliant?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Il 02/08/2010 11.29, Alberto Canestrelli ha scritto:
</span><br>
<span class="quotelev2">&gt; &gt; In the posted irecv case if you are reading from the posted receive
</span><br>
<span class="quotelev2">&gt; &gt; buffer the problem is you may get one of three values:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. pre irecv value
</span><br>
<span class="quotelev2">&gt; &gt; 2. value received from the irecv in progress
</span><br>
<span class="quotelev2">&gt; &gt; 3. possibly garbage if you are unlucky enough to access memory that is
</span><br>
<span class="quotelev2">&gt; &gt; at the same time being updated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt; &gt; Alberto Canestrelli wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  it was late in the night yesterday and i highlighted STORES but I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  meanted to highlight LOADS! I know that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  stores are not allowed when you are doing non blocking send-recv. But
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  I was impressed about LOADS case. I always do some loads of the data
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  between all my ISEND-IRECVs and my WAITs. Could you please confirm me
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  that OMPI can handle the LOAD case? And if it cannot handle it, which
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  could be the consequence? What could happen in the worst of the case
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  when there is a data race in reading a data?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  alberto
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Il 02/08/2010 9.32, Alberto Canestrelli ha scritto:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I believe it is definitely a no-no to STORE (write) into a send buffer
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; while a send is posted. I know there have been debate in the forum to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; relax LOADS (reads) from a send buffer. I think OMPI can handle the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; latter case (LOADS). On the posted receive side you open yourself up
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; for some race conditions and overwrites if you do STORES or LOADS 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; posted receive buffer.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --td
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Alberto Canestrelli wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have a problem with a fortran code that I have parallelized with
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MPI. I state in advance that I read the whole ebook &quot;Mit Press - 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mpi -
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; The Complete Reference, Volume 1&quot; and I took different MPI 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; classes, so
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I have a discrete MPI knowledge. I was able to solve by myself all 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; errors I bumped into but now I am not able to find the bug of my code
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; that provides erroneous results. Without entering in the details 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of my
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; code, I think that the cause of the problem could be reletad to the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; following aspect highlighted in the above ebook (in the follow I copy
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; and paste from the e-book):
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; A nonblocking post-send call indicates that the system may start
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; copying data
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; out of the send buffer. The sender must not access any part of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; send buffer
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; (neither for loads nor for STORES) after a nonblocking send operation
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; is posted until
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; the complete send returns.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; A nonblocking post-receive indicates that the system may start 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; writing
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; data into
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; the receive buffer. The receiver must not access any part of the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; receive buffer after
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; a nonblocking receive operation is posted, until the complete-receive
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; returns.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Rationale. We prohibit read accesses to a send buffer while it is
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; being used, even
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; though the send operation is not supposed to alter the content of 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; buffer. This
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; may seem more stringent than necessary, but the additional 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; restriction
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; causes little
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; loss of functionality and allows better performance on some systems-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; consider
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; the case where data transfer is done by a DMA engine that is not
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; cache-coherent
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; with the main processor.End of rationale.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I use plenty of nonblocking post-send in my code. Is it really true
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; that the sender must not access any part of the send buffer not even
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; for STORES? Or was it a MPI 1.0 issue?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; alberto
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ******************************************************
</span><br>
<span class="quotelev1">&gt; Ing. Alberto Canestrelli
</span><br>
<span class="quotelev1">&gt; Universit&#195;&#160; degli Studi di Padova,
</span><br>
<span class="quotelev1">&gt; Dipartimento di Ingegneria Idraulica, Marittima,
</span><br>
<span class="quotelev1">&gt; Ambientale e Geotecnica,
</span><br>
<span class="quotelev1">&gt; via Loredan 20, 35131 PADOVA (ITALY)
</span><br>
<span class="quotelev1">&gt; phone: +39 0498275438
</span><br>
<span class="quotelev1">&gt; fax:  +39 0498275446
</span><br>
<span class="quotelev1">&gt; mail:  canestrelli_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *******************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="13898.php">Eugene Loh: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13896.php">Eugene Loh: "Re: [OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<li><strong>In reply to:</strong> <a href="13892.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14069.php">Alberto Canestrelli: "Re: [OMPI users] Accessing to the send buffer"</a>
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
