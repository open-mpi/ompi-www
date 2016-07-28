<?
$subject_val = "Re: [OMPI devel] Introducing memkind + Adding component in mpool framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 11:49:37 2014" -->
<!-- isoreceived="20141202164937" -->
<!-- sent="Tue, 2 Dec 2014 08:49:32 -0800" -->
<!-- isosent="20141202164932" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Introducing memkind + Adding component in mpool framework" -->
<!-- id="BE030E0E-85A4-4970-A9F2-EAEDC5543CBC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Introducing memkind + Adding component in mpool framework<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 11:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Previous message:</strong> <a href="16406.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">Vishwanath Venkatesan: "[OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vish
<br>
<p>We talked about this on today&#226;&#128;&#153;s telecon and people are generally supportive of the concept. However, the feeling was that this will take some thought and fair amount of work to modify mpool and the allocators properly to do this the &#226;&#128;&#156;right way&#226;&#128;&#157;.
<br>
<p>So people asked if you could come to the Jan devel meeting in Dallas where we could hammer out the right way to integrate this, and maybe parcel out the work?
<br>
<p>The meeting is detailed here:
<br>
<p><a href="https://github.com/open-mpi/ompi/wiki">https://github.com/open-mpi/ompi/wiki</a> &lt;<a href="https://github.com/open-mpi/ompi/wiki">https://github.com/open-mpi/ompi/wiki</a>&gt;
<br>
<p>Hope you can come! Hope the wedding went well!
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Nov 18, 2014, at 4:38 PM, Vishwanath Venkatesan &lt;vvenkates_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been working on an implementation for supporting the use of MPI_Alloc_mem with our new allocator library called memkind (<a href="https://github.com/memkind/">https://github.com/memkind/</a> &lt;<a href="https://github.com/memkind/">https://github.com/memkind/</a>&gt;). The memkind library allows to allocate from different kinds of memory where, kinds implemented within the library enable the control of NUMA and page size features.  This could be leveraged conveniently with MPI_Alloc_mem. 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16407/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>Previous message:</strong> <a href="16406.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16320.php">Vishwanath Venkatesan: "[OMPI devel] Introducing memkind + Adding component in mpool framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16408.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
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
