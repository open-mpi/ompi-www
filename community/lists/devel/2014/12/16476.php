<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 10:59:24 2014" -->
<!-- isoreceived="20141209155924" -->
<!-- sent="Tue, 9 Dec 2014 08:59:22 -0700" -->
<!-- isosent="20141209155922" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="20141209155922.GC2163_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0595B4A3-42AF-4847-8F93-304A55440665_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 10:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>Previous message:</strong> <a href="16475.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>In reply to:</strong> <a href="16474.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just hadn't gotten around to it yet :). Still working on free list and
<br>
lifo stuff.
<br>
<p>-Nathan
<br>
<p>On Tue, Dec 09, 2014 at 07:56:04AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Kewl - I wonder why it wasn&#226;&#128;&#153;t fixed in trunk then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 9, 2014, at 7:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph, I corrected this as part of the thread multiple pull request in
</span><br>
<span class="quotelev2">&gt; &gt; 1.8.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/rhc54/ompi-release/commit/52823d592c3759c53ed63ed1f63fe200d2491220#diff-3673b21a7f42dc0665ea4470b3171df1R510">https://github.com/rhc54/ompi-release/commit/52823d592c3759c53ed63ed1f63fe200d2491220#diff-3673b21a7f42dc0665ea4470b3171df1R510</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Dec 09, 2014 at 12:31:55AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Hi Pascal
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Is this in the trunk or in the 1.8 series (or both)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     In case where MPI is compiled with --enable-mpi-thread-multiple, a call
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     to opal_using_threads() always returns 0 in the routine
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     btl_xxx_component_init() of the BTLs, event if the application calls
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI_Init_thread() with MPI_THREAD_MULTIPLE.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     This is because opal_set_using_threads(true) in
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     ompi/runtime/ompi_mpi_init.c is called to late.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     I propose the following patch that solves the problem for me:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     index 35509cf..c2370fc 100644
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     --- a/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +++ b/ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     @@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     requested, int *provided)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     #endif
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +       them. */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +        opal_set_using_threads(true);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          /* initialize datatypes. This step should be done early as it will
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           * create the local convertor and local arch used in the proc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           * init.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     @@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     requested, int *provided)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             goto error;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -    /* If thread support was enabled, then setup OPAL to allow for
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -       them. */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -        (*provided != MPI_THREAD_SINGLE)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -        opal_set_using_threads(true);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -    }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          /* start PML/BTL's */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          ret = MCA_PML_CALL(enable(true));
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          if( OMPI_SUCCESS != ret ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Link to this
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16461.php">http://www.open-mpi.org/community/lists/devel/2014/12/16461.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16473.php">http://www.open-mpi.org/community/lists/devel/2014/12/16473.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16474.php">http://www.open-mpi.org/community/lists/devel/2014/12/16474.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16476/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>Previous message:</strong> <a href="16475.php">Howard Pritchard: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>In reply to:</strong> <a href="16474.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
