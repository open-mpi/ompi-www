<?
$subject_val = "[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 09:03:46 2015" -->
<!-- isoreceived="20150916130346" -->
<!-- sent="Wed, 16 Sep 2015 16:03:44 +0300" -->
<!-- isosent="20150916130344" -->
<!-- name="&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133;" -->
<!-- email="avryzhikh_at_[hidden]" -->
<!-- subject="[OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()" -->
<!-- id="1b69bcf3e14811f65642cabb5030db42_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()<br>
<strong>From:</strong> &#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#181;&#208;&#185; &#208;&#160;&#209;&#139;&#208;&#182;&#208;&#184;&#209;&#133; (<em>avryzhikh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 09:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18040.php">Edgar Gabriel: "[OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We experimented with MPI+OpenMP hybrid application (MPI_THREAD_MULTIPLE
<br>
support level)  where several threads submits a lot of MPI_Irecv() requests
<br>
simultaneously and encountered an intermittent bug
<br>
OMPI_ERR_TEMP_OUT_OF_RESOURCE after MCA_PML_OB1_RECV_REQUEST_ALLOC()
<br>
because  OMPI_FREE_LIST_GET_MT()  returned NULL.  Investigating this bug we
<br>
found that sometimes the thread calling ompi_free_list_grow()  don&#226;&#128;&#153;t have
<br>
any free items in LIFO list at exit because other threads  retrieved  all
<br>
new items at opal_atomic_lifo_pop()
<br>
<p>So we suggest to change OMPI_FREE_LIST_GET_MT() as below:
<br>
<p><p><p>#define OMPI_FREE_LIST_GET_MT(fl, item)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = (ompi_free_list_item_t*)
<br>
opal_atomic_lifo_pop(&amp;((fl)-&gt;super));             \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY(NULL == item) )
<br>
{                                               \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(opal_using_threads())
<br>
{                                                    \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p><p>opal_mutex_lock(&amp;((fl)-&gt;fl_lock));                                        \
<br>
<p><p>do                                                                        \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ompi_free_list_grow((fl),
<br>
(fl)-&gt;fl_num_per_alloc);               \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OPAL_UNLIKELY(rc != OMPI_SUCCESS))
<br>
break;                         \
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = (ompi_free_list_item_t*)
<br>
opal_atomic_lifo_pop(&amp;((fl)-&gt;super)); \
<br>
<p><p>\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while
<br>
(!item);                                                          \
<br>
<p><p>opal_mutex_unlock(&amp;((fl)-&gt;fl_lock));                                      \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_grow((fl),
<br>
(fl)-&gt;fl_num_per_alloc);                        \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = (ompi_free_list_item_t*)
<br>
opal_atomic_lifo_pop(&amp;((fl)-&gt;super));     \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} /* opal_using_threads() */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} /* NULL == item
<br>
*/                                                              \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p><p><p>Another workaround is to increase the value of  pml_ob1_free_list_inc
<br>
parameter.
<br>
<p><p><p>Regards,
<br>
<p>Alexey
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18040.php">Edgar Gabriel: "[OMPI devel] inter vs. intra communicator problem on master"</a>
<li><strong>Previous message:</strong> <a href="18038.php">Kay Khandan (Hamed): "[OMPI devel] Interaction between orterun and user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18041.php">Nathan Hjelm: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Reply:</strong> <a href="18045.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
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
