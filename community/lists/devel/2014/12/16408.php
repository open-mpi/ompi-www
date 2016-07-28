<?
$subject_val = "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 11:57:10 2014" -->
<!-- isoreceived="20141202165710" -->
<!-- sent="Tue, 2 Dec 2014 16:57:08 +0000" -->
<!-- isosent="20141202165708" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework" -->
<!-- id="B2734BD9-FF12-4ED8-8AE5-478F37AA01B5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANCxNttVfec12-rg-RfGogwTOi7aXE0YW_aDkWxr2=OsL6oWbg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-02 11:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">Vishwanath Venkatesan: "[OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vish --
<br>
<p>In general, this sounds like a great idea.
<br>
<p>We talked about this on the call today, and it looks like it's going to take a bit of thought into how to integrate this into OMPI.  I.e., we might have to adjust the mpool and/or allocator frameworks a bit first.
<br>
<p>Is there any chance that you can attend the OMPI face-to-face dev meeting in late January?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01</a>
<br>
<p><p>On Nov 18, 2014, at 7:38 PM, Vishwanath Venkatesan &lt;vvenkates_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been working on an implementation for supporting the use of MPI_Alloc_mem with our new allocator library called memkind (<a href="https://github.com/memkind/">https://github.com/memkind/</a>). The memkind library allows to allocate from different kinds of memory where, kinds implemented within the library enable the control of NUMA and page size features.  This could be leveraged conveniently with MPI_Alloc_mem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was hoping to trigger the use of the memkind component by using either an info object or an mca parameter (mpirun -np x --mca mpool memkind ).
</span><br>
<span class="quotelev1">&gt; The modules of the mpool framework are loaded from components in the btl framework and not in the base of mpool. But in the case of my implementation, the component can remain independent from the btl framework. Is there a way to introduce priority for mpool component selection? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, with the use of info objects in mpool_base_alloc.c, it looks like the same code path is taken irrespective of whether the info is null or not, as the branch conditions seem to be commented out. Could this be un-commented or will there be a different patch for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please let me know,
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vish
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">http://www.open-mpi.org/community/lists/devel/2014/11/16320.php</a>
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
<li><strong>Next message:</strong> <a href="16409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>Previous message:</strong> <a href="16407.php">Ralph Castain: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">Vishwanath Venkatesan: "[OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<li><strong>Reply:</strong> <a href="16509.php">Vishwanath Venkatesan: "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
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
