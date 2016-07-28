<?
$subject_val = "[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 15:37:38 2009" -->
<!-- isoreceived="20090423193738" -->
<!-- sent="Thu, 23 Apr 2009 21:36:27 +0200" -->
<!-- isosent="20090423193627" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers" -->
<!-- id="49F0C33B.8040902_at_web.de" -->
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
<strong>Subject:</strong> [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 15:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently looking at this bug: 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/12/7611.php">http://www.open-mpi.org/community/lists/users/2008/12/7611.php</a>
<br>
I'm using the 1.3.2 tarball.
<br>
<p>Valgrind tells me that there is an invalid write (of size 1) in 
<br>
osc_pt2pt_data_move.c at line 229 which is the
<br>
statement
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;memcpy((unsigned char*) buffer-&gt;payload + written_data,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;packed_ddt, packed_ddt_len);
<br>
<p>in the function ompi_osc_pt2pt_sendreq_send.
<br>
<p>I have
<br>
<p>(gdb) p packed_ddt_len
<br>
$2 = 44852
<br>
<p>and
<br>
<p>(gdb) p written_data
<br>
$3 = 36
<br>
<p>but I can't figure out what the actual size of buffer-&gt;payload is. I have
<br>
<p>(gdb) p *buffer
<br>
$6 = {mpireq = {super = {super = {super = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_magic_id = 16046253926196952813, obj_class = 0x4f5240,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_reference_count = 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_file_name = 0x2efe0b &quot;class/opal_free_list.c&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cls_init_lineno = 114}, opal_list_next = 0x0, opal_list_prev = 
<br>
0x0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item_free = 1, opal_list_item_refcount = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_belong_to = 0x0}}, request = 0x5a35, status = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SOURCE = 23094, MPI_TAG = 23095, MPI_ERROR = 23096, _count = 
<br>
23097,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_cancelled = 23098}, cbfunc = 0x4e6cc5 
<br>
&lt;ompi_osc_pt2pt_sendreq_send_cb&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cbdata = 0x8681080}, payload = 0x86bc0d8, len = 23102}
<br>
<p>Is len the size of payload?
<br>
<p>In osc_pt2pt_component.c I found the statement
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* adjust size to be multiple of ompi_ptr_t to avoid alignment issues*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;aligned_size = sizeof(ompi_osc_pt2pt_buffer_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(sizeof(ompi_osc_pt2pt_buffer_t) % sizeof(ompi_ptr_t)) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_osc_pt2pt_component.p2p_c_eager_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;mca_osc_pt2pt_component.p2p_c_buffers, opal_free_list_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_free_list_init(&amp;mca_osc_pt2pt_component.p2p_c_buffers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aligned_size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS(ompi_osc_pt2pt_buffer_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1, -1, 1);
<br>
<p>but this doesn't help me to understand ...
<br>
<p><p>Can you help with this? Where can I find the allocation routine for the 
<br>
buffer?
<br>
Or do you know why there could be an invalid write?
<br>
<p>Thanks + Best regards,
<br>
Dorian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5859.php">Jeff Squyres: "Re: [OMPI devel] Patch to resolve valgrind warnings for 1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
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
