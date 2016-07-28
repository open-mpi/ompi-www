<?
$subject_val = "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 08:27:07 2009" -->
<!-- isoreceived="20090504122707" -->
<!-- sent="Mon, 4 May 2009 08:27:02 -0400" -->
<!-- isosent="20090504122702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers" -->
<!-- id="522A60AB-2D0A-48FE-86BF-9D885DB6499B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F0C33B.8040902_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 08:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5860.php">doriankrause: "[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the mailing lists -- Dorian found a bug here: our one-sided code  
<br>
assumes that the datatype will be &quot;small&quot; (i.e., a packed version of  
<br>
the datatype will fit within the eager limit fragment size in OMPI).   
<br>
Dorian's datatype is much larger than that, leading to an amorphous  
<br>
failure.  I've failed a bug about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1905">https://svn.open-mpi.org/trac/ompi/ticket/1905</a>
<br>
<p><p>On Apr 23, 2009, at 3:36 PM, doriankrause wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently looking at this bug:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/12/7611.php">http://www.open-mpi.org/community/lists/users/2008/12/7611.php</a>
</span><br>
<span class="quotelev1">&gt; I'm using the 1.3.2 tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Valgrind tells me that there is an invalid write (of size 1) in
</span><br>
<span class="quotelev1">&gt; osc_pt2pt_data_move.c at line 229 which is the
</span><br>
<span class="quotelev1">&gt; statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     memcpy((unsigned char*) buffer-&gt;payload + written_data,
</span><br>
<span class="quotelev1">&gt;            packed_ddt, packed_ddt_len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the function ompi_osc_pt2pt_sendreq_send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p packed_ddt_len
</span><br>
<span class="quotelev1">&gt; $2 = 44852
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p written_data
</span><br>
<span class="quotelev1">&gt; $3 = 36
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I can't figure out what the actual size of buffer-&gt;payload is. I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) p *buffer
</span><br>
<span class="quotelev1">&gt; $6 = {mpireq = {super = {super = {super = {
</span><br>
<span class="quotelev1">&gt;           obj_magic_id = 16046253926196952813, obj_class = 0x4f5240,
</span><br>
<span class="quotelev1">&gt;           obj_reference_count = 1,
</span><br>
<span class="quotelev1">&gt;           cls_init_file_name = 0x2efe0b &quot;class/opal_free_list.c&quot;,
</span><br>
<span class="quotelev1">&gt;           cls_init_lineno = 114}, opal_list_next = 0x0,  
</span><br>
<span class="quotelev1">&gt; opal_list_prev =
</span><br>
<span class="quotelev1">&gt; 0x0,
</span><br>
<span class="quotelev1">&gt;         item_free = 1, opal_list_item_refcount = 0,
</span><br>
<span class="quotelev1">&gt;         opal_list_item_belong_to = 0x0}}, request = 0x5a35, status = {
</span><br>
<span class="quotelev1">&gt;       MPI_SOURCE = 23094, MPI_TAG = 23095, MPI_ERROR = 23096, _count =
</span><br>
<span class="quotelev1">&gt; 23097,
</span><br>
<span class="quotelev1">&gt;       _cancelled = 23098}, cbfunc = 0x4e6cc5
</span><br>
<span class="quotelev1">&gt; &lt;ompi_osc_pt2pt_sendreq_send_cb&gt;,
</span><br>
<span class="quotelev1">&gt;     cbdata = 0x8681080}, payload = 0x86bc0d8, len = 23102}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is len the size of payload?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In osc_pt2pt_component.c I found the statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* adjust size to be multiple of ompi_ptr_t to avoid alignment  
</span><br>
<span class="quotelev1">&gt; issues*/
</span><br>
<span class="quotelev1">&gt;     aligned_size = sizeof(ompi_osc_pt2pt_buffer_t) +
</span><br>
<span class="quotelev1">&gt;         (sizeof(ompi_osc_pt2pt_buffer_t) % sizeof(ompi_ptr_t)) +
</span><br>
<span class="quotelev1">&gt;         mca_osc_pt2pt_component.p2p_c_eager_size;
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;mca_osc_pt2pt_component.p2p_c_buffers,  
</span><br>
<span class="quotelev1">&gt; opal_free_list_t);
</span><br>
<span class="quotelev1">&gt;     opal_free_list_init(&amp;mca_osc_pt2pt_component.p2p_c_buffers,
</span><br>
<span class="quotelev1">&gt;                         aligned_size,
</span><br>
<span class="quotelev1">&gt;                         OBJ_CLASS(ompi_osc_pt2pt_buffer_t),
</span><br>
<span class="quotelev1">&gt;                         1, -1, 1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this doesn't help me to understand ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you help with this? Where can I find the allocation routine for  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; buffer?
</span><br>
<span class="quotelev1">&gt; Or do you know why there could be an invalid write?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks + Best regards,
</span><br>
<span class="quotelev1">&gt; Dorian
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5860.php">doriankrause: "[OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
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
