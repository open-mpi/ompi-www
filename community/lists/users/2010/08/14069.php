<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 12:08:44 2010" -->
<!-- isoreceived="20100818160844" -->
<!-- sent="Wed, 18 Aug 2010 12:08:40 -0400" -->
<!-- isosent="20100818160840" -->
<!-- name="Alberto Canestrelli" -->
<!-- email="canestrelli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="4C6C0588.7030702_at_idra.unipd.it" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C6C0296.6070109_at_idra.unipd.it" -->
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
<strong>From:</strong> Alberto Canestrelli (<em>canestrelli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 12:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
<li><strong>Maybe in reply to:</strong> <a href="13887.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At: Richard Treumann . You said &quot;The Forum has decided the send buffer 
<br>
rule is to restrictive. &quot; Do you mean that you are planning to change 
<br>
the rule?
<br>
At: Terry Frankcombe. If they are going to change the rule everything 
<br>
will be fine. Do you know why I don't you want to be standard-compliant? 
<br>
Since it is a pain to double all the variables that I send just because 
<br>
I am reading them later on! I have to change most of my MPI code.
<br>
thanks
<br>
alberto
<br>
<p>Il 18/08/2010 11.56, Alberto Canestrelli ha scritto:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2010-08-02 at 11:36 -0400, Alberto Canestrelli wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; ok that is not my problem I never read a data from the posted receive
</span><br>
<span class="quotelev2">&gt; &gt; before the correspondent WAIT. Now the last question is: what could
</span><br>
<span class="quotelev2">&gt; &gt; happen if I am reading the data from the posted send? I do it plenty of
</span><br>
<span class="quotelev2">&gt; &gt; times! possible consequences?Can you guarantee me that this approach is
</span><br>
<span class="quotelev2">&gt; &gt; safe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, it seems from what you've posted that the standard says you should
</span><br>
<span class="quotelev1">&gt; not assume it's safe. Don't you want to be standard-compliant?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Il 02/08/2010 11.29, Alberto Canestrelli ha scritto:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In the posted irecv case if you are reading from the posted receive
</span><br>
<span class="quotelev3">&gt; &gt; &gt; buffer the problem is you may get one of three values:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. pre irecv value
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. value received from the irecv in progress
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3. possibly garbage if you are unlucky enough to access memory that is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; at the same time being updated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --td
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Alberto Canestrelli wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; it was late in the night yesterday and i highlighted STORES but I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; meanted to highlight LOADS! I know that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; stores are not allowed when you are doing non blocking send-recv. But
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I was impressed about LOADS case. I always do some loads of the data
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; between all my ISEND-IRECVs and my WAITs. Could you please confirm me
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that OMPI can handle the LOAD case? And if it cannot handle it, which
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; could be the consequence? What could happen in the worst of the case
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; when there is a data race in reading a data?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; alberto
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Il 02/08/2010 9.32, Alberto Canestrelli ha scritto:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; I believe it is definitely a no-no to STORE (write) into a send 
</span><br>
<span class="quotelev1">&gt; buffer
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; while a send is posted. I know there have been debate in the 
</span><br>
<span class="quotelev1">&gt; forum to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; relax LOADS (reads) from a send buffer. I think OMPI can handle the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; latter case (LOADS). On the posted receive side you open 
</span><br>
<span class="quotelev1">&gt; yourself up
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; for some race conditions and overwrites if you do STORES or LOADS
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from a
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; posted receive buffer.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; --td
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt; &gt; Alberto Canestrelli wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I have a problem with a fortran code that I have parallelized with
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; MPI. I state in advance that I read the whole ebook &quot;Mit Press -
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Mpi -
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; The Complete Reference, Volume 1&quot; and I took different MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; classes, so
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I have a discrete MPI knowledge. I was able to solve by myself all
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; errors I bumped into but now I am not able to find the bug of 
</span><br>
<span class="quotelev1">&gt; my code
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; that provides erroneous results. Without entering in the details
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; of my
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; code, I think that the cause of the problem could be reletad to 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; following aspect highlighted in the above ebook (in the follow 
</span><br>
<span class="quotelev1">&gt; I copy
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; and paste from the e-book):
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; A nonblocking post-send call indicates that the system may start
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; copying data
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; out of the send buffer. The sender must not access any part of the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; send buffer
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; (neither for loads nor for STORES) after a nonblocking send 
</span><br>
<span class="quotelev1">&gt; operation
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; is posted until
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; the complete send returns.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; A nonblocking post-receive indicates that the system may start
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; writing
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; data into
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; the receive buffer. The receiver must not access any part of the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; receive buffer after
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; a nonblocking receive operation is posted, until the 
</span><br>
<span class="quotelev1">&gt; complete-receive
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; returns.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Rationale. We prohibit read accesses to a send buffer while it is
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; being used, even
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; though the send operation is not supposed to alter the content of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; buffer. This
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; may seem more stringent than necessary, but the additional
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; restriction
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; causes little
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; loss of functionality and allows better performance on some 
</span><br>
<span class="quotelev1">&gt; systems-
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; consider
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; the case where data transfer is done by a DMA engine that is not
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; cache-coherent
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; with the main processor.End of rationale.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; I use plenty of nonblocking post-send in my code. Is it really 
</span><br>
<span class="quotelev1">&gt; true
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; that the sender must not access any part of the send buffer not 
</span><br>
<span class="quotelev1">&gt; even
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; for STORES? Or was it a MPI 1.0 issue?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt; &gt;&gt; alberto
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ******************************************************
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Alberto Canestrelli
</span><br>
<span class="quotelev2">&gt; &gt; Universit&#195;  degli Studi di Padova,
</span><br>
<span class="quotelev2">&gt; &gt; Dipartimento di Ingegneria Idraulica, Marittima,
</span><br>
<span class="quotelev2">&gt; &gt; Ambientale e Geotecnica,
</span><br>
<span class="quotelev2">&gt; &gt; via Loredan 20, 35131 PADOVA (ITALY)
</span><br>
<span class="quotelev2">&gt; &gt; phone: +39 0498275438 begin_of_the_skype_highlighting   +39 
</span><br>
<span class="quotelev1">&gt; 0498275438 end_of_the_skype_highlighting
</span><br>
<span class="quotelev2">&gt; &gt; fax: +39 0498275446
</span><br>
<span class="quotelev2">&gt; &gt; mail: canestrelli_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *******************************************************
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<p><pre>
-- 
******************************************************
Ing. Alberto Canestrelli
Universit&#224; degli Studi di Padova,
Dipartimento di Ingegneria Idraulica, Marittima,
Ambientale e Geotecnica,
via Loredan 20, 35131 PADOVA (ITALY)
phone: +39 0498275438
fax:  +39 0498275446
mail:  canestrelli_at_[hidden]
*******************************************************
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="14068.php">Shiqing Fan: "Re: [OMPI users] Building OpenMPI with DevStudio 2010"</a>
<li><strong>Maybe in reply to:</strong> <a href="13887.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
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
