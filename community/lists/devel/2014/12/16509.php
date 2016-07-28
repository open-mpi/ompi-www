<?
$subject_val = "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 14:58:34 2014" -->
<!-- isoreceived="20141211195834" -->
<!-- sent="Fri, 12 Dec 2014 01:28:34 +0530" -->
<!-- isosent="20141211195834" -->
<!-- name="Vishwanath Venkatesan" -->
<!-- email="vvenkates_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Introducing memkind + Adding component in mpool framework" -->
<!-- id="CANCxNtujnsf87cm11mCL1CXfxRyiEtv3x+hGFpWWgeyn+cnACA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B2734BD9-FF12-4ED8-8AE5-478F37AA01B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Introducing memkind + Adding component in mpool framework<br>
<strong>From:</strong> Vishwanath Venkatesan (<em>vvenkates_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 14:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Previous message:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Reply:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; Ralph,
<br>
<p>Thanks for the response, and sorry for the delay in my reply. Attending the
<br>
developers meeting sounds like a good idea, But I will be back from my
<br>
vacation only on the 15th. So I will not be able to close in on my
<br>
possibilities to attend the developers meeting before that. I will keep you
<br>
posted on this.
<br>
<p>@Ralph: The wedding went really well! Thanks for asking :)
<br>
<p><p>Best,
<br>
Vish
<br>
<p>On Tue, Dec 2, 2014 at 10:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Vish --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, this sounds like a great idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We talked about this on the call today, and it looks like it's going to
</span><br>
<span class="quotelev1">&gt; take a bit of thought into how to integrate this into OMPI.  I.e., we might
</span><br>
<span class="quotelev1">&gt; have to adjust the mpool and/or allocator frameworks a bit first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any chance that you can attend the OMPI face-to-face dev meeting
</span><br>
<span class="quotelev1">&gt; in late January?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2014, at 7:38 PM, Vishwanath Venkatesan &lt;vvenkates_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been working on an implementation for supporting the use of
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem with our new allocator library called memkind (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/memkind/">https://github.com/memkind/</a>). The memkind library allows to allocate from
</span><br>
<span class="quotelev1">&gt; different kinds of memory where, kinds implemented within the library
</span><br>
<span class="quotelev1">&gt; enable the control of NUMA and page size features.  This could be leveraged
</span><br>
<span class="quotelev1">&gt; conveniently with MPI_Alloc_mem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was hoping to trigger the use of the memkind component by using either
</span><br>
<span class="quotelev1">&gt; an info object or an mca parameter (mpirun -np x --mca mpool memkind ).
</span><br>
<span class="quotelev2">&gt; &gt; The modules of the mpool framework are loaded from components in the btl
</span><br>
<span class="quotelev1">&gt; framework and not in the base of mpool. But in the case of my
</span><br>
<span class="quotelev1">&gt; implementation, the component can remain independent from the btl
</span><br>
<span class="quotelev1">&gt; framework. Is there a way to introduce priority for mpool component
</span><br>
<span class="quotelev1">&gt; selection?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, with the use of info objects in mpool_base_alloc.c, it looks like
</span><br>
<span class="quotelev1">&gt; the same code path is taken irrespective of whether the info is null or
</span><br>
<span class="quotelev1">&gt; not, as the branch conditions seem to be commented out. Could this be
</span><br>
<span class="quotelev1">&gt; un-commented or will there be a different patch for this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Vish
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">http://www.open-mpi.org/community/lists/devel/2014/11/16320.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16408.php">http://www.open-mpi.org/community/lists/devel/2014/12/16408.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Previous message:</strong> <a href="16508.php">Paul Kapinos: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Reply:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
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
