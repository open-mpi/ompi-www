<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 03:59:29 2012" -->
<!-- isoreceived="20120401075929" -->
<!-- sent="Sun, 01 Apr 2012 10:59:21 +0300" -->
<!-- isosent="20120401075921" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="4F780AD9.9080301_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F772AFC.8050301_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-01 03:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I traced the problem to the BML component:
<br>
Index: ompi/mca/bml/r2/bml_r2.c
<br>
===================================================================
<br>
--- ompi/mca/bml/r2/bml_r2.c    (revision 26191)
<br>
+++ ompi/mca/bml/r2/bml_r2.c    (working copy)
<br>
@@ -105,6 +105,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == btl_names_argv || NULL == btl_names_argv[i]) {
<br>
+            printf(&quot;\n\nR1: %p\n\n&quot;, 
<br>
btl-&gt;btl_component-&gt;btl_version.mca_component_name);
<br>
+            printf(&quot;\n\nR2: %s\n\n&quot;, 
<br>
btl-&gt;btl_component-&gt;btl_version.mca_component_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append_nosize(&amp;btl_names_argv,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
btl-&gt;btl_component-&gt;btl_version.mca_component_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I Get (white-spaces removed) for normal run:
<br>
R1: 0x7f820e3c31d8
<br>
R2: self
<br>
R1: 0x7f820e13c598
<br>
R2: tcp
<br>
... and for my module:
<br>
R1: 0x38
<br>
&nbsp;&nbsp;- and then the segmentation fault.
<br>
I guess it has something to do with the way I initialize my component - 
<br>
I'll resume debugging after lunch.
<br>
<p>Alex
<br>
<p>On 03/31/2012 07:04 PM, Alex Margolin wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. I get the following Error - I'm pretty sure my BTL is to blame here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca 
</span><br>
<span class="quotelev1">&gt; btl_base_verbose 100 -mca btl self,mosix hello
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot 
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: Looking for btl 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: found loaded component 
</span><br>
<span class="quotelev1">&gt; mosix
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component mosix 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component mosix open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: found loaded component 
</span><br>
<span class="quotelev1">&gt; self
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component self has no 
</span><br>
<span class="quotelev1">&gt; register function
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: components_open: component self open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [singularity:10838] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open 
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: initializing btl component mosix
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: init of component mosix returned success
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [singularity:10838] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [singularity:10838] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [singularity:10838] Failing at address: 0x30
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36420) 
</span><br>
<span class="quotelev1">&gt; [0x7fa94a3cd420]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 1] /lib/x86_64-linux-gnu/libc.so.6(+0x84391) 
</span><br>
<span class="quotelev1">&gt; [0x7fa94a41b391]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 2] 
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__strdup+0x16) [0x7fa94a41b086]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 3] 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.0(opal_argv_append_nosize+0xf7) [0x7fa94add66a4]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 4] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1cf5) 
</span><br>
<span class="quotelev1">&gt; [0x7fa946177cf5]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 5] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1e50) 
</span><br>
<span class="quotelev1">&gt; [0x7fa946177e50]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 6] 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x12f) 
</span><br>
<span class="quotelev1">&gt; [0x7fa946382b6d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 7] 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.0(ompi_mpi_init+0x909) [0x7fa94acd1549]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 8] /usr/local/lib/libmpi.so.0(MPI_Init+0x16c) 
</span><br>
<span class="quotelev1">&gt; [0x7fa94ad033ec]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [ 9] 
</span><br>
<span class="quotelev1">&gt; /home/alex/huji/benchmarks/simple/hello(_ZN3MPI4InitERiRPPc+0x23) 
</span><br>
<span class="quotelev1">&gt; [0x409e2d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [10] 
</span><br>
<span class="quotelev1">&gt; /home/alex/huji/benchmarks/simple/hello(main+0x22) [0x408f66]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [11] 
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa94a3b830d]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] [12] /home/alex/huji/benchmarks/simple/hello() 
</span><br>
<span class="quotelev1">&gt; [0x408e89]
</span><br>
<span class="quotelev1">&gt; [singularity:10838] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 10838 on node singularity 
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl self,tcp hello
</span><br>
<span class="quotelev1">&gt; [singularity:10841] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot 
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:10841] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open 
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev1">&gt; Hello world!
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10795.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10797.php">Ralph Castain: "Re: [OMPI devel] New MOSIX components draft"</a>
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
