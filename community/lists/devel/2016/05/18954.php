<?
$subject_val = "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 15:48:42 2016" -->
<!-- isoreceived="20160510194842" -->
<!-- sent="Tue, 10 May 2016 12:48:35 -0700" -->
<!-- isosent="20160510194835" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?" -->
<!-- id="CAAvDA15uV2aiYcJcKBcEATAjcRow29KDr0SJGh10aq=iM4oYjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWWfxufAR9FUptiJb9y2vpAvaYoC0h6bR1QRzQB6cgCgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 15:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>In reply to:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Reply:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I believe that the 64-bit atomics support detection issue that you are
<br>
suspecting is already covered by Nathan's PR1659 on master, and will be
<br>
PRed/CMRed for v2.x after that is merged.
<br>
<p>Regardless of that, however, since the field is declared as &quot;volatile
<br>
int32_t&quot; the opal_list code does need to be fixed to use 32-bit operations
<br>
unconditionally, right?
<br>
<p>-Paul
<br>
<p>On Tue, May 10, 2016 at 12:36 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the ref_count should always be manipulated with atomic operations,
</span><br>
<span class="quotelev1">&gt; otherwise we can't use them for internal, thread-safe, purposes. That being
</span><br>
<span class="quotelev1">&gt; said the issue at hand seems a little different. The difference in the
</span><br>
<span class="quotelev1">&gt; generated code between the opal_atomic_add and the OPAL_THREAD_ADD32, is
</span><br>
<span class="quotelev1">&gt; that the macro is explicitly calling opal_atomic_add32, while the generic
</span><br>
<span class="quotelev1">&gt; atomic_add has a switch inside (to select between atomics operations on
</span><br>
<span class="quotelev1">&gt; different type). For the error you mention to happen our configure script
</span><br>
<span class="quotelev1">&gt; must have detected that there is support for 8bytes atomic operations, thus
</span><br>
<span class="quotelev1">&gt; setting OPAL_HAVE_ATOMIC_ADD_64 to 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you take a look at the 64 bits atomic detection in the config.log and
</span><br>
<span class="quotelev1">&gt; post here the corresponding output ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 10, 2016 at 1:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am currently working with the v2.x branch, rather than tarballs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While attempting to build on AIX (which is ILP32 by default), I
</span><br>
<span class="quotelev2">&gt;&gt; encountered an unexpected undefined reference to __sync_add_and_fetch_8()
</span><br>
<span class="quotelev2">&gt;&gt; from opal/class/opal_list.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found that when debugging is enabled (as in almost every build I try)
</span><br>
<span class="quotelev2">&gt;&gt; there is the following code:
</span><br>
<span class="quotelev2">&gt;&gt; #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt;         /* Spot check: ensure this item is only on the list that we
</span><br>
<span class="quotelev2">&gt;&gt;            just insertted it into */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         (void)opal_atomic_add( &amp;(item-&gt;opal_list_item_refcount), 1 );
</span><br>
<span class="quotelev2">&gt;&gt;         assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev2">&gt;&gt;         item-&gt;opal_list_item_belong_to = list;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure why (and it may be an AIX-specific issue), but that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;opal_atomic_add()&quot; is attempting a 64-bit add.
</span><br>
<span class="quotelev2">&gt;&gt; That is a problem, given that 'opal_list_item_refcount' is 32-bits!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Noting that all other accesses to this field are OPAL_THREAD_ADD32(), I
</span><br>
<span class="quotelev2">&gt;&gt; suggest the following (with a bonus spell-check at no additional charge):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- opal/class/opal_list.c~     2016-05-10 10:20:19.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; +++ opal/class/opal_list.c      2016-05-10 10:29:14.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; @@ -142,9 +142,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   #if OPAL_ENABLE_DEBUG
</span><br>
<span class="quotelev2">&gt;&gt;           /* Spot check: ensure this item is only on the list that we
</span><br>
<span class="quotelev2">&gt;&gt; -            just insertted it into */
</span><br>
<span class="quotelev2">&gt;&gt; +            just inserted it into */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -         (void)opal_atomic_add( &amp;(item-&gt;opal_list_item_refcount), 1 );
</span><br>
<span class="quotelev2">&gt;&gt; +         (void)OPAL_THREAD_ADD32( &amp;(item-&gt;opal_list_item_refcount), 1 );
</span><br>
<span class="quotelev2">&gt;&gt;           assert(1 == item-&gt;opal_list_item_refcount);
</span><br>
<span class="quotelev2">&gt;&gt;           item-&gt;opal_list_item_belong_to = list;
</span><br>
<span class="quotelev2">&gt;&gt;   #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Source inspection shows the same mixing or opal_atomic_add() vs
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_THREAD_ADD32() in master.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18952.php">http://www.open-mpi.org/community/lists/devel/2016/05/18952.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18953.php">http://www.open-mpi.org/community/lists/devel/2016/05/18953.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>In reply to:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Reply:</strong> <a href="18955.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
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
