<?
$subject_val = "[OMPI devel] New master warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  6 19:20:03 2015" -->
<!-- isoreceived="20150906232003" -->
<!-- sent="Sun, 6 Sep 2015 16:20:00 -0700" -->
<!-- isosent="20150906232000" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] New master warnings" -->
<!-- id="904DC8D0-6A48-460B-9272-0D30D0E1437E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] New master warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-06 19:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just saw these this afternoon:
<br>
<p>coll_ml_hier_algorithms.c: In function 'ml_coll_schedule_setup':
<br>
coll_ml_hier_algorithms.c:180:13: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from ../../../../ompi/request/request.h:35:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/mca/coll/coll.h:72,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/mca/coll/ml/coll_ml.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from coll_ml_hier_algorithms.c:15:
<br>
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
<br>
&nbsp;OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c: In function 'init_lists':
<br>
coll_ml_module.c:2622:31: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_ml_message_desc, ml_module);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from ../../../../ompi/communicator/comm_request.h:16:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/communicator/communicator.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from coll_ml_module.c:32:
<br>
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
<br>
&nbsp;OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
coll_ml_module.c:2640:32: warning: passing argument 13 of 'opal_free_list_init' from incompatible pointer type [enabled by default]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_ml_fragment_desc, ml_module);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from ../../../../ompi/communicator/comm_request.h:16:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/communicator/communicator.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from coll_ml_module.c:32:
<br>
../../../../opal/class/opal_free_list.h:127:19: note: expected 'opal_free_list_item_init_fn_t' but argument is of type 'void (*)(struct opal_free_list_item_t *, void *)'
<br>
&nbsp;OPAL_DECLSPEC int opal_free_list_init (opal_free_list_t *free_list,
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17977/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17978.php">Ralph Castain: "[OMPI devel] Cross-job disconnect is broken"</a>
<li><strong>Previous message:</strong> <a href="17976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Annual Open MPI membership review, and Git repo permissions review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
<li><strong>Reply:</strong> <a href="17998.php">Shamis, Pavel: "Re: [OMPI devel] New master warnings"</a>
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
