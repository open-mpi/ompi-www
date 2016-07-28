<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:49:55 2016" -->
<!-- isoreceived="20160509144955" -->
<!-- sent="Mon, 9 May 2016 10:49:34 -0400" -->
<!-- isosent="20160509144934" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBSeAe9W9F9u9pj7X9xQwwbYo=1RcLHuy45CL8MKHm9k_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="13232E56-80AC-478D-AF75-DCF0D70A30DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Zhen Wang (<em>toddwz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 10:49:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the explanation. It's very clear.
<br>
<p>Best regards,
<br>
Zhen
<br>
<p>On Mon, May 9, 2016 at 10:19 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On May 9, 2016, at 8:23 AM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have another question. I thought MPI_Test is a local call, meaning it
</span><br>
<span class="quotelev1">&gt; doesn't send/receive message. Am I misunderstanding something? Thanks again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the user's perspective, MPI_TEST is a local call, in that it checks
</span><br>
<span class="quotelev1">&gt; to see if an MPI_Request has completed.  It is also defined to return
</span><br>
<span class="quotelev1">&gt; &quot;immediately&quot;, which most MPI implementations -- Open MPI included --
</span><br>
<span class="quotelev1">&gt; interpret to mean &quot;return in a short, finite time.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI's case, MPI_TEST (and friends) run through the internal
</span><br>
<span class="quotelev1">&gt; progression engine. I.e., it checks the status of ongoing MPI_Requests and
</span><br>
<span class="quotelev1">&gt; sees if it can advance them in a non-blocking manner.  For example, a
</span><br>
<span class="quotelev1">&gt; socket may have [partially] drained since the last time through the
</span><br>
<span class="quotelev1">&gt; progression engine, and therefore we can write new bytes down that socket
</span><br>
<span class="quotelev1">&gt; without blocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In your case, if you MPI_ISEND a very large message, and it uses the TCP
</span><br>
<span class="quotelev1">&gt; BTL as the transport, it'll likely try to send the first fragment of that
</span><br>
<span class="quotelev1">&gt; message to the peer.  When the peer ACKs that first fragment, that gives
</span><br>
<span class="quotelev1">&gt; the sender permission to send the remaining fragments (i.e., the receiver
</span><br>
<span class="quotelev1">&gt; is ready for the entire message).  Hence, each time through the progression
</span><br>
<span class="quotelev1">&gt; engine, the sender will write as many bytes as possible down the socket to
</span><br>
<span class="quotelev1">&gt; that peer until the entire message has been written.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29139.php">http://www.open-mpi.org/community/lists/users/2016/05/29139.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
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
