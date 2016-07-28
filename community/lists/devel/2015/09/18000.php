<?
$subject_val = "Re: [OMPI devel] New master warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 22:02:42 2015" -->
<!-- isoreceived="20150911020242" -->
<!-- sent="Fri, 11 Sep 2015 02:02:37 +0000" -->
<!-- isosent="20150911020237" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New master warnings" -->
<!-- id="1441936956973.87012_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="55F214AF.4050206_at_rist.or.jp" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 22:02:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17999.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="17999.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
?Awesome, thanks for fixing this.
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
Sent: Thursday, September 10, 2015 7:39 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] New master warnings
<br>
<p>Pasha,
<br>
<p>i fixed that in <a href="https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150">https://github.com/open-mpi/ompi/commit/c404e98dced4104cd3abe7485846368325c3d150</a>
<br>
but forgot to post it to the ML ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/11/2015 7:31 AM, Shamis, Pavel wrote:
<br>
Ralph,
<br>
<p>I don't see these warnings on my fedora box with gcc 5.1.1.
<br>
I will try to fix it, but it would be helpful to understand how to reproduce these warnings.
<br>
<p>Thanks,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Sep 6, 2015, at 7:20 PM, Ralph Castain &lt;&lt;mailto:rhc_at_[hidden]&gt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
Just saw these this afternoon:
coll_ml_hier_algorithms.c: In function 'ml_coll_schedule_setup':
coll_ml_hier_algorithms.c:180:13: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
             );
             ^
In file included from ../../../../ompi/request/request.h:35:0,
                 from ../../../../ompi/mca/coll/coll.h:72,
                 from ../../../../ompi/mca/coll/ml/coll_ml.h:27,
                 from coll_ml_hier_algorithms.c:15:
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
 OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
                   ^
coll_ml_module.c: In function 'init_lists':
coll_ml_module.c:2622:31: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
                               init_ml_message_desc, ml_module);
                               ^
In file included from ../../../../ompi/communicator/comm_request.h:16:0,
                 from ../../../../ompi/communicator/communicator.h:35,
                 from coll_ml_module.c:32:
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
 OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
                   ^
coll_ml_module.c:2640:32: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
                                init_ml_fragment_desc, ml_module);
                                ^
In file included from ../../../../ompi/communicator/comm_request.h:16:0,
                 from ../../../../ompi/communicator/communicator.h:35,
                 from coll_ml_module.c:32:
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
 OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17977.php">http://www.open-mpi.org/community/lists/devel/2015/09/17977.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17998.php">http://www.open-mpi.org/community/lists/devel/2015/09/17998.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Previous message:</strong> <a href="17999.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<li><strong>In reply to:</strong> <a href="17999.php">Gilles Gouaillardet: "Re: [OMPI devel] New master warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI devel] New master warnings"</a>
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
