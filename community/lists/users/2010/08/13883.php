<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 09:42:31 2010" -->
<!-- isoreceived="20100802134231" -->
<!-- sent="Mon, 02 Aug 2010 09:42:28 -0400" -->
<!-- isosent="20100802134228" -->
<!-- name="Alberto Canestrelli" -->
<!-- email="canestrelli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="4C56CB44.4090702_at_idra.unipd.it" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C56C8ED.60601_at_idra.unipd.it" -->
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
<strong>From:</strong> Alberto Canestrelli (<em>canestrelli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 09:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13882.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe in reply to:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
it was late in the night yesterday and i highlighted STORES but I 
<br>
meanted to highlight LOADS! I know that
<br>
stores are not allowed when you are doing non blocking send-recv. But I 
<br>
was impressed about LOADS case. I always do some loads of the data
<br>
between all my ISEND-IRECVs and my WAITs. Could  you please confirm me 
<br>
that OMPI can handle the LOAD case? And if it cannot handle it, which 
<br>
could be the consequence? What could happen in the worst of the case 
<br>
when there is a data race in reading a data?
<br>
thanks
<br>
alberto
<br>
<p>Il 02/08/2010 9.32, Alberto Canestrelli ha scritto:
<br>
<span class="quotelev1">&gt; I believe it is definitely a no-no to STORE (write) into a send buffer
</span><br>
<span class="quotelev1">&gt; while a send is posted. I know there have been debate in the forum to
</span><br>
<span class="quotelev1">&gt; relax LOADS (reads) from a send buffer. I think OMPI can handle the
</span><br>
<span class="quotelev1">&gt; latter case (LOADS). On the posted receive side you open yourself up
</span><br>
<span class="quotelev1">&gt; for some race conditions and overwrites if you do STORES or LOADS from a
</span><br>
<span class="quotelev1">&gt; posted receive buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alberto Canestrelli wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;  I have a problem with a fortran code that I have parallelized with
</span><br>
<span class="quotelev2">&gt;&gt;  MPI. I state in advance that I read the whole ebook &quot;Mit Press - Mpi -
</span><br>
<span class="quotelev2">&gt;&gt;  The Complete Reference, Volume 1&quot; and I took different MPI classes, so
</span><br>
<span class="quotelev2">&gt;&gt;  I have a discrete MPI knowledge. I was able to solve by myself all the
</span><br>
<span class="quotelev2">&gt;&gt;  errors I bumped into but now I am not able to find the bug of my code
</span><br>
<span class="quotelev2">&gt;&gt;  that provides erroneous results. Without entering in the details of my
</span><br>
<span class="quotelev2">&gt;&gt;  code, I think that the cause of the problem could be reletad to the
</span><br>
<span class="quotelev2">&gt;&gt;  following aspect highlighted in the above ebook (in the follow I copy
</span><br>
<span class="quotelev2">&gt;&gt;  and paste from the e-book):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  A nonblocking post-send call indicates that the system may start
</span><br>
<span class="quotelev2">&gt;&gt;  copying data
</span><br>
<span class="quotelev2">&gt;&gt;  out of the send buffer. The sender must not access any part of the
</span><br>
<span class="quotelev2">&gt;&gt;  send buffer
</span><br>
<span class="quotelev2">&gt;&gt;  (neither for loads nor for STORES) after a nonblocking send operation
</span><br>
<span class="quotelev2">&gt;&gt;  is posted until
</span><br>
<span class="quotelev2">&gt;&gt;  the complete send returns.
</span><br>
<span class="quotelev2">&gt;&gt;  A nonblocking post-receive indicates that the system may start writing
</span><br>
<span class="quotelev2">&gt;&gt;  data into
</span><br>
<span class="quotelev2">&gt;&gt;  the receive buffer. The receiver must not access any part of the
</span><br>
<span class="quotelev2">&gt;&gt;  receive buffer after
</span><br>
<span class="quotelev2">&gt;&gt;  a nonblocking receive operation is posted, until the complete-receive
</span><br>
<span class="quotelev2">&gt;&gt;  returns.
</span><br>
<span class="quotelev2">&gt;&gt;  Rationale. We prohibit read accesses to a send buffer while it is
</span><br>
<span class="quotelev2">&gt;&gt;  being used, even
</span><br>
<span class="quotelev2">&gt;&gt;  though the send operation is not supposed to alter the content of this
</span><br>
<span class="quotelev2">&gt;&gt;  buffer. This
</span><br>
<span class="quotelev2">&gt;&gt;  may seem more stringent than necessary, but the additional restriction
</span><br>
<span class="quotelev2">&gt;&gt;  causes little
</span><br>
<span class="quotelev2">&gt;&gt;  loss of functionality and allows better performance on some systems-
</span><br>
<span class="quotelev2">&gt;&gt;  consider
</span><br>
<span class="quotelev2">&gt;&gt;  the case where data transfer is done by a DMA engine that is not
</span><br>
<span class="quotelev2">&gt;&gt;  cache-coherent
</span><br>
<span class="quotelev2">&gt;&gt;  with the main processor.End of rationale.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I use plenty of nonblocking post-send in my code. Is it really true
</span><br>
<span class="quotelev2">&gt;&gt;  that the sender must not access any part of the send buffer not even
</span><br>
<span class="quotelev2">&gt;&gt;  for STORES? Or was it a MPI 1.0 issue?
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;  alberto
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13882.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Maybe in reply to:</strong> <a href="13880.php">Alberto Canestrelli: "[OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Reply:</strong> <a href="13884.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
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
