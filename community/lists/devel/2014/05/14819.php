<?
$subject_val = "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 13:44:00 2014" -->
<!-- isoreceived="20140516174400" -->
<!-- sent="Fri, 16 May 2014 13:43:59 -0400 (EDT)" -->
<!-- isosent="20140516174359" -->
<!-- name="Thomas Naughton" -->
<!-- email="naughtont_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self" -->
<!-- id="alpine.OSX.2.01.1405161000070.49013_at_tigger.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5375987F.2040605_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self<br>
<strong>From:</strong> Thomas Naughton (<em>naughtont_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 13:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Reply:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm also seeing some sporadic failures with recent commits to trunk.
<br>
My tests are using slightly different build/configuration, and use
<br>
a different rte, but the errors are coming from the OMPI ob1 layer.
<br>
<p>&nbsp;&nbsp;works: r31777   (I did not test r31778..r31783)
<br>
&nbsp;&nbsp;fails: r31784M  (plus manually applied patch from r31786)
<br>
<p>My test was something simple:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd examples/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc -g hello_c.c -o hello_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 10 hello_c
<br>
<p>Again it is sporadic, I was able to reproduce the failure with different
<br>
values of '-np' &gt; 1; sometimes np=3, other times np=11.
<br>
<p>Here's some backtrace / debug info...
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
[New process 7242]
<br>
[New process 7255]
<br>
#0  0xb7a7569f in mca_bml_base_btl_array_remove (array=0x81049ec,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl=0xb7a721c0) at ../../../../ompi/mca/bml/bml.h:139
<br>
139         if( array-&gt;bml_btls[i].btl == btl ) {
<br>
(gdb) bt
<br>
#0  0xb7a7569f in mca_bml_base_btl_array_remove (array=0x81049ec,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl=0xb7a721c0) at ../../../../ompi/mca/bml/bml.h:139
<br>
#1  0xb7a7539f in mca_bml_r2_del_proc_btl (proc=0x80debe8, btl=0xb7a721c0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at bml_r2.c:551
<br>
#2  0xb7a757d8 in mca_bml_r2_finalize () at bml_r2.c:648
<br>
#3  0xb70c50b8 in mca_pml_ob1_component_fini () at pml_ob1_component.c:290
<br>
#4  0xb7f5a755 in mca_pml_v_component_parasite_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at pml_v_component.c:161
<br>
#5  0xb7f58c63 in mca_pml_base_finalize () at base/pml_base_frame.c:120
<br>
#6  0xb7ec81e1 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:291
<br>
#7  0xb7ef1042 in PMPI_Finalize () at pfinalize.c:46
<br>
#8  0x0804874d in main (argc=2, argv=0xbfc8d394) at hello_c.c:24
<br>
<p>(gdb) p array-&gt;bml_btls
<br>
$1 = (mca_bml_base_btl_t *) 0x0
<br>
(gdb) p btl
<br>
$2 = (struct mca_btl_base_module_t *) 0xb7a721c0
<br>
(gdb) p *btl
<br>
$3 = {btl_component = 0xb7a72240, btl_eager_limit = 131072,
<br>
&nbsp;&nbsp;&nbsp;btl_rndv_eager_limit = 131072, btl_max_send_size = 262144,
<br>
&nbsp;&nbsp;&nbsp;btl_rdma_pipeline_send_length = 2147483647,
<br>
&nbsp;&nbsp;&nbsp;btl_rdma_pipeline_frag_size = 2147483647,
<br>
&nbsp;&nbsp;&nbsp;btl_min_rdma_pipeline_size = 2147614719, btl_exclusivity = 65536,
<br>
&nbsp;&nbsp;&nbsp;btl_latency = 0, btl_bandwidth = 100, btl_flags = 10, btl_seg_size = 16,
<br>
&nbsp;&nbsp;&nbsp;btl_add_procs = 0xb7a6fd9c &lt;mca_btl_self_add_procs&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_del_procs = 0xb7a6fdf9 &lt;mca_btl_self_del_procs&gt;, btl_register = 0,
<br>
&nbsp;&nbsp;&nbsp;btl_finalize = 0xb7a6fe03 &lt;mca_btl_self_finalize&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_alloc = 0xb7a6fe0d &lt;mca_btl_self_alloc&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_free = 0xb7a70074 &lt;mca_btl_self_free&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_prepare_src = 0xb7a70329 &lt;mca_btl_self_prepare_src&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_prepare_dst = 0xb7a70702 &lt;mca_btl_self_prepare_dst&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_send = 0xb7a70831 &lt;mca_btl_self_send&gt;, btl_sendi = 0,
<br>
&nbsp;&nbsp;&nbsp;btl_put = 0xb7a70910 &lt;mca_btl_self_rdma&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_get = 0xb7a70910 &lt;mca_btl_self_rdma&gt;,
<br>
&nbsp;&nbsp;&nbsp;btl_dump = 0xb7f35b57 &lt;mca_btl_base_dump&gt;, btl_mpool = 0x0,
<br>
&nbsp;&nbsp;&nbsp;btl_register_error = 0, btl_ft_event = 0xb7a70b00
<br>
&lt;mca_btl_self_ft_event&gt;}
<br>
(gdb) l
<br>
134                                                   struct
<br>
mca_btl_base_module_t* btl )
<br>
135 { 
<br>
136     size_t i = 0;
<br>
137     /* find the btl */
<br>
138     for( i = 0; i &lt; array-&gt;arr_size; i++ ) {
<br>
139         if( array-&gt;bml_btls[i].btl == btl ) {
<br>
140             /* make sure not to go out of bounds */
<br>
141             for( ; i &lt; array-&gt;arr_size-1; i++ ) {
<br>
142                 /* move all btl's back by 1, so the found 
<br>
143                    btl is &quot;removed&quot; */
<br>
(gdb) p array-&gt;arr_size
<br>
$4 = 69
<br>
(gdb) p array-&gt;bml_btls
<br>
$5 = (mca_bml_base_btl_t *) 0x0
<br>
<p>Anyone else seeing problems?
<br>
--tjn
<br>
<p>&nbsp;&nbsp;_________________________________________________________________________
<br>
&nbsp;&nbsp;&nbsp;Thomas Naughton                                      naughtont_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;Research Associate                                   (865) 576-4184
<br>
<p><p>On Fri, 16 May 2014, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a simple
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -host localhost --mca btl,tcp mpi_helloworld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; crashes after some of yesterday's commits (i would blame r31778 and/or
</span><br>
<span class="quotelev1">&gt; r31782,
</span><br>
<span class="quotelev1">&gt; but i am not 100% sure)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* a list receives a negative value, so the program takes some time
</span><br>
<span class="quotelev1">&gt; before crashing,
</span><br>
<span class="quotelev1">&gt; symptom may vary from one system to an other */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i digged into this, and found what looks like an old bug/typo in
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_del_procs().
</span><br>
<span class="quotelev1">&gt; the bug has *not* been introduced by yesterday commits.
</span><br>
<span class="quotelev1">&gt; i believe this path was not executed since yesterday, that is why we
</span><br>
<span class="quotelev1">&gt; (only) now hit the bug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i fixed this in r31786
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14814.php">http://www.open-mpi.org/community/lists/devel/2014/05/14814.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>In reply to:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Reply:</strong> <a href="14820.php">Hjelm, Nathan T: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
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
