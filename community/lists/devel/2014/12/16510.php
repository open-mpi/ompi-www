<?
$subject_val = "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 15:14:11 2014" -->
<!-- isoreceived="20141211201411" -->
<!-- sent="Thu, 11 Dec 2014 20:14:05 +0000" -->
<!-- isosent="20141211201405" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework" -->
<!-- id="1DA6A16D-C190-4AAA-8941-70E2597F6929_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANCxNtujnsf87cm11mCL1CXfxRyiEtv3x+hGFpWWgeyn+cnACA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 15:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>In reply to:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  Howard asked me about this in person this week at the MPI Forum.  I think we all agree that this sounds like an interesting prospect; we just need to make some adjustments in the OMPI infrastructure to make it happen.  That will take some discussion.
<br>
<p><p>On Dec 11, 2014, at 11:58 AM, Vishwanath Venkatesan &lt;vvenkates_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff &amp; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the response, and sorry for the delay in my reply. Attending the developers meeting sounds like a good idea, But I will be back from my vacation only on the 15th. So I will not be able to close in on my possibilities to attend the developers meeting before that. I will keep you posted on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Ralph: The wedding went really well! Thanks for asking :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Vish
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 2, 2014 at 10:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Vish --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, this sounds like a great idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We talked about this on the call today, and it looks like it's going to take a bit of thought into how to integrate this into OMPI.  I.e., we might have to adjust the mpool and/or allocator frameworks a bit first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any chance that you can attend the OMPI face-to-face dev meeting in late January?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2014, at 7:38 PM, Vishwanath Venkatesan &lt;vvenkates_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been working on an implementation for supporting the use of MPI_Alloc_mem with our new allocator library called memkind (<a href="https://github.com/memkind/">https://github.com/memkind/</a>). The memkind library allows to allocate from different kinds of memory where, kinds implemented within the library enable the control of NUMA and page size features.  This could be leveraged conveniently with MPI_Alloc_mem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was hoping to trigger the use of the memkind component by using either an info object or an mca parameter (mpirun -np x --mca mpool memkind ).
</span><br>
<span class="quotelev2">&gt; &gt; The modules of the mpool framework are loaded from components in the btl framework and not in the base of mpool. But in the case of my implementation, the component can remain independent from the btl framework. Is there a way to introduce priority for mpool component selection?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, with the use of info objects in mpool_base_alloc.c, it looks like the same code path is taken irrespective of whether the info is null or not, as the branch conditions seem to be commented out. Could this be un-commented or will there be a different patch for this?
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">http://www.open-mpi.org/community/lists/devel/2014/11/16320.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16408.php">http://www.open-mpi.org/community/lists/devel/2014/12/16408.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16509.php">http://www.open-mpi.org/community/lists/devel/2014/12/16509.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>In reply to:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
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
