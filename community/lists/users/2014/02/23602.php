<?
$subject_val = "Re: [OMPI users] Does sendrecv guarantee order?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 22:59:27 2014" -->
<!-- isoreceived="20140214035927" -->
<!-- sent="Thu, 13 Feb 2014 22:59:27 -0500" -->
<!-- isosent="20140214035927" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does sendrecv guarantee order?" -->
<!-- id="CA+ssbKWDm5VcbQR2hBuZZf+JiE6+pjc7_1jmeYuFaD0xFgLSCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69265800-0622-46B0-8EDE-AB682B927888_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does sendrecv guarantee order?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 22:59:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thank you for your prompt reply, but my apologies for missing it and it's
<br>
been quite a while.
<br>
<p>Anyway, to answer your question I was trying to do sendrecv in a chain
<br>
where &quot;toSend&quot; and &quot;receiveFrom&quot; ranks are not the same. I was using a
<br>
single buffer, which resulted in cases where the buffer content got
<br>
replaced with received values before being able to send its original
<br>
content. I think it was an error on my side to use a single buffer in a
<br>
pipeline sendrecev. I fixed it by having two buffers.
<br>
<p>I guess still with MPI_IN_PLACE this could happen. Please correct me here
<br>
if I am wrong.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Wed, Nov 27, 2013 at 6:00 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why do you need an order? If you plan to send and receive on the same
</span><br>
<span class="quotelev1">&gt; buffer, you should use the MPI constructs for that, namely MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2013, at 07:20 , Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just want to verify if sendrecv provides any guarantees as to which
</span><br>
<span class="quotelev1">&gt; operation (send or receive) happens first. I think it is not, is it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23603.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23601.php">tmishima_at_[hidden]: "Re: [OMPI users] one more finding in openmpi-1.7.5a1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Reply:</strong> <a href="23612.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does sendrecv guarantee order?"</a>
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
