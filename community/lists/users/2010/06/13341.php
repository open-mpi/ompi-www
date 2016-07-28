<?
$subject_val = "Re: [OMPI users] Threading models with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 18 10:47:38 2010" -->
<!-- isoreceived="20100618144738" -->
<!-- sent="Fri, 18 Jun 2010 09:47:33 -0500" -->
<!-- isosent="20100618144733" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Threading models with openib" -->
<!-- id="AANLkTiljRc1UTopYYda7TVR6TTSVKJ8CQbl7kg1j80nX_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="73321989-1539-4B52-96B9-81FDA45B5F5C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Threading models with openib<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-18 10:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13271.php">Jeff Squyres: "Re: [OMPI users] Threading models with openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jun 9, 2010 at 7:58 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 8, 2010, at 12:33 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please verify:  if using openib BTL, the only threading model is
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Up to MPI_THREAD_SERIALIZED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a timeline for full support of MPI_THREAD_MULTIPLE in Open MPI's
</span><br>
<span class="quotelev1">&gt; openib BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IBM has been making some good strides in this direction recently, but I
</span><br>
<span class="quotelev1">&gt; don't know what their specific timeframe is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes,  we (mainly Chris Yeoh) have been making improvements with
<br>
MPI_THREAD_MULTIPLE support for the openib BTL.
<br>
<p>&nbsp;Here is how things currently stand:
<br>
&nbsp;- the trunk and 1.5rc1 have threading modifications that improve the use of
<br>
MPI_THREAD_MULTIPLE with the openib BTL
<br>
&nbsp;- It is currently functional, but with some restrictions and is still a
<br>
work in progress.  Consequently, the default behavior for the openib BTL is
<br>
still to not support MPI_THREAD_MULTIPLE.  However, this can be overridden
<br>
with a command line parameter.
<br>
<p>In order to use MPI_THREAD_MULTIPLE with the openib BTL:
<br>
&nbsp;&nbsp;- set the MCA parameter &quot;btl_base_thread_multiple_override&quot; to 1
<br>
&nbsp;&nbsp;- set the MCA parameter &quot;mca mpi_leave_pinned&quot; to 0
<br>
<p>The latter is needed because there are still some known issues with
<br>
threading and the memory registration cache.
<br>
<p>As for timelines, we are already moving some of these fixes into the 1.4.x
<br>
branch as well.  However, certain changes such as a thread-safe memory
<br>
registration cache are targeted for the 1.5/1.6 series.  Our goal is to have
<br>
a stable implementation of the openib BTL that fully supports
<br>
MPI_THREAD_MULTIPLE by the time that the 1.5 feature branch transitions to
<br>
the 1.6 super-stable branch.
<br>
<p>If you have threaded applications that you can run today over the openib
<br>
BTL, please give it a try and let us know of any problems that you
<br>
encounter.
<br>
<p>Thanks,
<br>
--Brad
<br>
<p>Brad Benton
<br>
brad.benton_at_[hidden]
<br>
<p><p><p><span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13342.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13271.php">Jeff Squyres: "Re: [OMPI users] Threading models with openib"</a>
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
