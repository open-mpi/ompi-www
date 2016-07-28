<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory	directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 10:10:44 2011" -->
<!-- isoreceived="20110414141044" -->
<!-- sent="Thu, 14 Apr 2011 10:10:31 -0400" -->
<!-- isosent="20110414141031" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory	directly" -->
<!-- id="316B456F-3C45-471F-B2CF-AB99EBE2C994_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30188D4E40B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory	directly<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 10:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Rolf,
<br>
<p>CUDA support is always welcome. 
<br>
Please see my comments bellow
<br>
<p>+#if OMPI_CUDA_SUPPORT
<br>
+    fl-&gt;fl_frag_block_alignment = 0;
<br>
+    fl-&gt;fl_flags = 0;
<br>
+#endif
<br>
<p>[pasha] It seem that the &quot;fl_flags&quot; is a hack that allow you to do the second (cuda) registration in
<br>
&nbsp;mpool_rdma:
<br>
<p>+#if OMPI_CUDA_SUPPORT
<br>
+    if ((flags &amp; MCA_MPOOL_FLAGS_CUDA_MEM) &amp;&amp; mca_common_cuda_registered_memory) {
<br>
+        mca_common_cuda_register(addr, size,
<br>
+                                 mpool-&gt;mpool_component-&gt;mpool_version.mca_component_name);
<br>
+   }
<br>
+#endif
<br>
<p>[pasha] It is really _hack_ way to enable multiple device registration.  
<br>
I would prefer see new mpool component, that has support multiple device registration in contrast to single device registration in mpool_rdma.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fl-&gt;fl_payload_buffer_size=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fl-&gt;fl_payload_buffer_alignment=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fl-&gt;fl_frag_class = OBJ_CLASS(ompi_free_list_item_t);
<br>
@@ -190,7 +194,19 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alloc_size = num_elements * head_size + sizeof(ompi_free_list_memory_t) +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flist-&gt;fl_frag_alignment;
<br>
<p>+#if OMPI_CUDA_SUPPORT
<br>
+    /* Hack for TCP since there is no memory pool. */
<br>
+    if (flist-&gt;fl_frag_block_alignment) {
<br>
+        alloc_size = OPAL_ALIGN(alloc_size, 4096, size_t);
<br>
+        if((errno = posix_memalign((void *)&amp;alloc_ptr, 4096, alloc_size)) != 0) {
<br>
+            alloc_ptr = NULL;
<br>
+        }
<br>
+    } else {
<br>
+        alloc_ptr = (ompi_free_list_memory_t*)malloc(alloc_size);
<br>
+    }
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alloc_ptr = (ompi_free_list_memory_t*)malloc(alloc_size);
<br>
+#endif
<br>
<p>[pasha] I would prefer not to _hack_ ompi_free_list  in order to work around BTL related issues. Such kinda of problem should be handled by tcp btl. If you think, that it is not enough flexibility in free list or mpool interface, we may discuss the inderface update or modification. IMHO it is much better that hack.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Apr 13, 2011, at 12:47 PM, Rolf vandeVaart wrote:
&gt; WHAT: Add support to send data directly from CUDA device memory via MPI calls.
&gt;  
&gt; TIMEOUT: April 25, 2011
&gt;  
&gt; DETAILS: When programming in a mixed MPI and CUDA environment, one cannot currently send data directly from CUDA device memory.  The programmer first has to move the data into host memory, and then send it.  On the receiving side, it has to first be received into host memory, and then copied into CUDA device memory.
&gt;  
&gt; This RFC adds the ability to send and receive CUDA device memory directly.
&gt;  
&gt; There are three basic changes being made to add the support.  First, when it is detected that a buffer is CUDA device memory, the protocols that can be used are restricted to the ones that first copy data into internal buffers.  This means that we will not be using the PUT and RGET protocols, just the send and receive ones.  Secondly, rather than using memcpy to move the data into and out of the host buffers, the library has to use a special CUDA copy routine called cuMemcpy.  Lastly, to improve performance, the internal host buffers have to also be registered with the CUDA environment (although currently it is unclear how helpful that is)
&gt;  
&gt; By default, the code is disable and has to be configured into the library.
&gt;   --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
&gt;                                              DIR/lib, and DIR/lib64
&gt;   --with-cuda-libdir=DIR  Search for cuda libraries in DIR
&gt;  
&gt; An initial implementation can be viewed at:
&gt; <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-3">https://bitbucket.org/rolfv/ompi-trunk-cuda-3</a>
&gt;  
&gt; Here is a list of the files being modified so one can see the scope of the impact.
&gt;  
&gt; $ svn status
&gt; M       VERSION
&gt; M       opal/datatype/opal_convertor.h
&gt; M       opal/datatype/opal_datatype_unpack.c
&gt; M       opal/datatype/opal_datatype_pack.h
&gt; M       opal/datatype/opal_convertor.c
&gt; M       opal/datatype/opal_datatype_unpack.h
&gt; M       configure.ac
&gt; M       ompi/mca/btl/sm/btl_sm.c
&gt; M       ompi/mca/btl/sm/Makefile.am
&gt; M       ompi/mca/btl/tcp/btl_tcp_component.c
&gt; M       ompi/mca/btl/tcp/btl_tcp.c
&gt; M       ompi/mca/btl/tcp/Makefile.am
&gt; M       ompi/mca/btl/openib/btl_openib_component.c
&gt; M       ompi/mca/btl/openib/btl_openib_endpoint.c
&gt; M       ompi/mca/btl/openib/btl_openib_mca.c
&gt; M       ompi/mca/mpool/sm/Makefile.am
&gt; M       ompi/mca/mpool/sm/mpool_sm_module.c
&gt; M       ompi/mca/mpool/rdma/mpool_rdma_module.c
&gt; M       ompi/mca/mpool/rdma/Makefile.am
&gt; M       ompi/mca/mpool/mpool.h
&gt; A       ompi/mca/common/cuda
&gt; A       ompi/mca/common/cuda/configure.m4
&gt; A       ompi/mca/common/cuda/common_cuda.c
&gt; A       ompi/mca/common/cuda/help-mpi-common-cuda.txt
&gt; A       ompi/mca/common/cuda/Makefile.am
&gt; A       ompi/mca/common/cuda/common_cuda.h
&gt; M       ompi/mca/pml/ob1/pml_ob1_component.c
&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
&gt; M       ompi/mca/pml/ob1/Makefile.am
&gt; M       ompi/mca/pml/base/pml_base_sendreq.h
&gt; M       ompi/class/ompi_free_list.c
&gt; M       ompi/class/ompi_free_list.h
&gt;  
&gt;  
&gt; rvandevaart_at_[hidden]
&gt; 781-275-5358
&gt;  
&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9182.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
