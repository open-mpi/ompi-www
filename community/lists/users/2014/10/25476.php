<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 12:00:54 2014" -->
<!-- isoreceived="20141007160054" -->
<!-- sent="Tue, 7 Oct 2014 18:00:53 +0200" -->
<!-- isosent="20141007160053" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y4F42HceFaKKQzCytVREbPF8618GO8aRkcv_JsuSkCuWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D6BDFE3C-D61F-4BBD-B6A1-EC978A84FC4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 12:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25477.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25475.php">Diego Avesani: "[OMPI users] metis in fortran looking for an example"</a>
<li><strong>In reply to:</strong> <a href="25461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
thanks a lot. I rewrote the code starting from the Nick's one.
<br>
It's work
<br>
<p>I have still to think about the &quot;-r8&quot; things, I belive that less er type
<br>
less we make error.
<br>
<p>Another questions about Nick's code:
<br>
<p>Why do I have to use MPIstatus(MPI_STATUS_SIZE) and not a simple MPI%ierror
<br>
<p>Thanks a lot
<br>
<p><p><p>Diego
<br>
<p><p>On 3 October 2014 21:55, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 3, 2014, at 3:50 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. I&#226;&#128;&#153;m not a Fortran expert but I think that real is not
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_RECISION but MPI_FLOAT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's actually MPI_REAL.  :-)  (MPI_FLOAT is for the C &quot;float&quot; type)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /me goes back in my Fortran hole...
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25461.php">http://www.open-mpi.org/community/lists/users/2014/10/25461.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25477.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25475.php">Diego Avesani: "[OMPI users] metis in fortran looking for an example"</a>
<li><strong>In reply to:</strong> <a href="25461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25478.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
