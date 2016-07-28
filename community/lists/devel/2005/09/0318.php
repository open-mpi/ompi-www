<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  6 08:56:42 2005" -->
<!-- isoreceived="20050906135642" -->
<!-- sent="Tue, 06 Sep 2005 14:56:36 +0100" -->
<!-- isosent="20050906135636" -->
<!-- name="John Ryan" -->
<!-- email="john.p.ryan_at_[hidden]" -->
<!-- subject="error in ompi/mca/rcache/rb/rcache_rb_mru.c" -->
<!-- id="431DA014.1040204_at_cs.tcd.ie" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> John Ryan (<em>john.p.ryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-06 08:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>trivial errors to report in the current trunk (7191)
<br>
<p>file:	ompi-trunk/ompi/mca/rcache/rb/rcache_rb_mru.c
<br>
lines: 	75 &amp; 85, arguments to the lock/unlock functions were incorrect
<br>
(i.e. each missing a '&amp;' to the lock argument)
<br>
<p>Congratulations on the fine work done by all!
<br>
<p>Thanks,
<br>
John
<br>
<p><p>&nbsp;&nbsp;&nbsp;67  /*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;68   * touch an item in the mru list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;69   */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;70  int mca_rcache_base_mru_touch(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;71                                mca_rcache_rb_module_t* rcache,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;72                                mca_mpool_base_registration_t* reg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;73                                ){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;74      int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;75      OPAL_THREAD_LOCK(&amp;rcache-&gt;rb_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;76      if(NULL == opal_list_remove_item(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;77                                       &amp;rcache-&gt;mru_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;78                                       (opal_list_item_t*) reg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;79                                       )) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;80         rc =  OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;81      } else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;82          opal_list_append(&amp;rcache-&gt;mru_list, (opal_list_item_t*)
<br>
reg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;83          rc = OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;84      }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;85      OPAL_THREAD_UNLOCK(&amp;rcache-&gt;rb_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;86      return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;87  }
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
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
