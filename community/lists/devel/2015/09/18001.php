<?
$subject_val = "Re: [OMPI devel] New master warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 23:47:16 2015" -->
<!-- isoreceived="20150911034716" -->
<!-- sent="Thu, 10 Sep 2015 20:47:12 -0700" -->
<!-- isosent="20150911034712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New master warnings" -->
<!-- id="51FD4C99-50A0-49C2-8287-5F448A5B12F1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1441936956973.87012_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 23:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I&#226;&#128;&#153;m still seeing these on CentOS7 using gcc 4.8.3 in a debug build:
<br>
<p>coll_ml_allocation.c:20:13: warning: 'memory_buffer_index' defined but not used [-Wunused-variable]
<br>
&nbsp;static long memory_buffer_index;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c: In function 'init_coll_func_pointers':
<br>
coll_ml_module.c:2529:35: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_allgather = mca_coll_ml_allgather;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2530:36: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_iallgather = mca_coll_ml_allgather_nb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2537:39: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_allreduce = mca_coll_ml_allreduce_dispatch;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2538:40: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_iallreduce = mca_coll_ml_allreduce_dispatch_nb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2540:39: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_allreduce = mca_coll_ml_allreduce;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2541:40: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_iallreduce = mca_coll_ml_allreduce_nb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2578:36: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_reduce     = mca_coll_ml_reduce;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2597:33: warning: assignment from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll_base-&gt;coll_ireduce     = mca_coll_ml_reduce_nb;
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 10, 2015, at 7:02 PM, Shamis, Pavel &lt;shamisp_at_[hidden] &lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;Awesome, thanks for fixing this.
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, September 10, 2015 7:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] New master warnings
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i fixed that in <a href="https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150">https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150</a> &lt;<a href="https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150">https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150</a>&gt;
</span><br>
<span class="quotelev1">&gt; but forgot to post it to the ML ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/11/2015 7:31 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see these warnings on my fedora box with gcc 5.1.1.
</span><br>
<span class="quotelev2">&gt;&gt; I will try to fix it, but it would be helpful to understand how to reproduce these warnings.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 6, 2015, at 7:20 PM, Ralph Castain &lt; &lt;mailto:rhc_at_[hidden]&gt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just saw these this afternoon:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_ml_hier_algorithms.c: In function 'ml_coll_schedule_setup':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_ml_hier_algorithms.c:180:13: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from ../../../../ompi/request/request.h:35:0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from ../../../../ompi/mca/coll/coll.h:72,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from ../../../../ompi/mca/coll/ml/coll_ml.h:27,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from coll_ml_hier_algorithms.c:15:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_ml_module.c: In function 'init_lists':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_ml_module.c:2622:31: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                init_ml_message_desc, ml_module);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from ../../../../ompi/communicator/comm_request.h:16:0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from ../../../../ompi/communicator/communicator.h:35,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from coll_ml_module.c:32:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coll_ml_module.c:2640:32: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 init_ml_fragment_desc, ml_module);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In file included from ../../../../ompi/communicator/comm_request.h:16:0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from ../../../../ompi/communicator/communicator.h:35,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  from coll_ml_module.c:32:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17977.php">http://www.open-mpi.org/community/lists/devel/2015/09/17977.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17977.php">http://www.open-mpi.org/community/lists/devel/2015/09/17977.php</a>&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17998.php">http://www.open-mpi.org/community/lists/devel/2015/09/17998.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17998.php">http://www.open-mpi.org/community/lists/devel/2015/09/17998.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18000.php">http://www.open-mpi.org/community/lists/devel/2015/09/18000.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/18000.php">http://www.open-mpi.org/community/lists/devel/2015/09/18000.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="18000.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18002.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
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
