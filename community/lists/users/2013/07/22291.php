<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 17:29:54 2013" -->
<!-- isoreceived="20130708212954" -->
<!-- sent="Mon, 8 Jul 2013 16:29:50 -0500" -->
<!-- isosent="20130708212950" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="CA+OO3AX-VJ+jONpKzM+6zmOOsg_Ler=S=w52TMu1tfV4bsviAQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F382C_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on handling of memory for communications<br>
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 17:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22292.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
| Remember that the point of IB and other operating-system bypass devices
<br>
is that the driver is not involved in the fast path of sending /
<br>
| receiving.  One of the side-effects of that design point is that
<br>
userspace does all the allocation of send / receive buffers.
<br>
<p>That's a good point. It was not clear to me who and with what logic was
<br>
allocating memory. But definitely for IB it makes sense that the user
<br>
provides pointers to their memory.
<br>
<p>thanks
<br>
Michael
<br>
<p><p><p><p>On Mon, Jul 8, 2013 at 1:07 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 8, 2013, at 2:01 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The driver doesn't allocate much memory here. Maybe some small control
</span><br>
<span class="quotelev1">&gt; buffers, but nothing significantly involved in large message transfer
</span><br>
<span class="quotelev1">&gt; performance. Everything critical here is allocated by user-space (either
</span><br>
<span class="quotelev1">&gt; MPI lib or application), so we just have to make sure we bind the process
</span><br>
<span class="quotelev1">&gt; memory properly. I used hwloc-bind to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember that the point of IB and other operating-system bypass devices is
</span><br>
<span class="quotelev1">&gt; that the driver is not involved in the fast path of sending / receiving.
</span><br>
<span class="quotelev1">&gt;  One of the side-effects of that design point is that userspace does all
</span><br>
<span class="quotelev1">&gt; the allocation of send / receive buffers.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22292.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22290.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
