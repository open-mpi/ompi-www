<?
$subject_val = "Re: [OMPI devel] New master warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 19:39:35 2015" -->
<!-- isoreceived="20150910233935" -->
<!-- sent="Fri, 11 Sep 2015 08:39:27 +0900" -->
<!-- isosent="20150910233927" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New master warnings" -->
<!-- id="55F214AF.4050206_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1DEDA32E-1519-45DA-B9D4-AA286B551952_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New master warnings<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 19:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>i fixed that in 
<br>
<a href="https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150">https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150</a>
<br>
but forgot to post it to the ML ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/11/2015 7:31 AM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see these warnings on my fedora box with gcc 5.1.1.
</span><br>
<span class="quotelev1">&gt; I will try to fix it, but it would be helpful to understand how to 
</span><br>
<span class="quotelev1">&gt; reproduce these warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 6, 2015, at 7:20 PM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just saw these this afternoon:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *coll_ml_hier_algorithms.c:* In function '*ml_coll_schedule_setup*':
</span><br>
<span class="quotelev2">&gt;&gt; *coll_ml_hier_algorithms.c:180:13:* *warning: *passing argument 13 of 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_init*' from incompatible pointer type [enabled by 
</span><br>
<span class="quotelev2">&gt;&gt; default]
</span><br>
<span class="quotelev2">&gt;&gt;              );
</span><br>
<span class="quotelev2">&gt;&gt; *             ^*
</span><br>
<span class="quotelev2">&gt;&gt; In file included from *../../../../ompi/request/request.h:35:0*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *../../../../ompi/mca/coll/coll.h:72*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *../../../../ompi/mca/coll/ml/coll_ml.h:27*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *coll_ml_hier_algorithms.c:15*:
</span><br>
<span class="quotelev2">&gt;&gt; *../../../../opal/class/opal_free_list.h:127:19:* *note: *expected 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_item_init_fn_t*' but argument is of type '*void 
</span><br>
<span class="quotelev2">&gt;&gt; (*)(struct opal_free_list_item_t *, void *)*'
</span><br>
<span class="quotelev2">&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev2">&gt;&gt; *                   ^*
</span><br>
<span class="quotelev2">&gt;&gt; *coll_ml_module.c:* In function '*init_lists*':
</span><br>
<span class="quotelev2">&gt;&gt; *coll_ml_module.c:2622:31:* *warning: *passing argument 13 of 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_init*' from incompatible pointer type [enabled by 
</span><br>
<span class="quotelev2">&gt;&gt; default]
</span><br>
<span class="quotelev2">&gt;&gt;                                init_ml_message_desc, ml_module);
</span><br>
<span class="quotelev2">&gt;&gt; *                               ^*
</span><br>
<span class="quotelev2">&gt;&gt; In file included from 
</span><br>
<span class="quotelev2">&gt;&gt; *../../../../ompi/communicator/comm_request.h:16:0*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *../../../../ompi/communicator/communicator.h:35*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *coll_ml_module.c:32*:
</span><br>
<span class="quotelev2">&gt;&gt; *../../../../opal/class/opal_free_list.h:127:19:* *note: *expected 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_item_init_fn_t*' but argument is of type '*void 
</span><br>
<span class="quotelev2">&gt;&gt; (*)(struct opal_free_list_item_t *, void *)*'
</span><br>
<span class="quotelev2">&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev2">&gt;&gt; *                   ^*
</span><br>
<span class="quotelev2">&gt;&gt; *coll_ml_module.c:2640:32:* *warning: *passing argument 13 of 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_init*' from incompatible pointer type [enabled by 
</span><br>
<span class="quotelev2">&gt;&gt; default]
</span><br>
<span class="quotelev2">&gt;&gt; init_ml_fragment_desc, ml_module);
</span><br>
<span class="quotelev2">&gt;&gt; *                                ^*
</span><br>
<span class="quotelev2">&gt;&gt; In file included from 
</span><br>
<span class="quotelev2">&gt;&gt; *../../../../ompi/communicator/comm_request.h:16:0*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *../../../../ompi/communicator/communicator.h:35*,
</span><br>
<span class="quotelev2">&gt;&gt;                  from *coll_ml_module.c:32*:
</span><br>
<span class="quotelev2">&gt;&gt; *../../../../opal/class/opal_free_list.h:127:19:* *note: *expected 
</span><br>
<span class="quotelev2">&gt;&gt; '*opal_free_list_item_init_fn_t*' but argument is of type '*void 
</span><br>
<span class="quotelev2">&gt;&gt; (*)(struct opal_free_list_item_t *, void *)*'
</span><br>
<span class="quotelev2">&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17977.php">http://www.open-mpi.org/community/lists/devel/2015/09/17977.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17998.php">http://www.open-mpi.org/community/lists/devel/2015/09/17998.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17999/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
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
