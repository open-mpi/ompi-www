<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 09:59:43 2012" -->
<!-- isoreceived="20120401135943" -->
<!-- sent="Sun, 1 Apr 2012 07:59:34 -0600" -->
<!-- isosent="20120401135934" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="54F0F9FB-9638-4767-9DA9-9F7A6146191B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F780AD9.9080301_at_mail.huji.ac.il" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-01 09:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect the problem is here:
<br>
<p>/**
<br>
+ * MOSIX BTL component.
<br>
+ */
<br>
+struct mca_btl_base_component_t {
<br>
+    mca_btl_base_component_2_0_0_t super;  /**&lt; base BTL component */
<br>
+    mca_btl_mosix_module_t mosix_module;   /**&lt; local module */
<br>
+};
<br>
+typedef struct mca_btl_base_component_t mca_btl_mosix_component_t;
<br>
+
<br>
+OMPI_MODULE_DECLSPEC extern mca_btl_mosix_component_t mca_btl_mosix_component;
<br>
+
<br>
<p><p>You redefined the mca_btl_base_component_t struct. What we usually do is define a new struct:
<br>
<p>struct mca_btl_mosix_component_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_base_component_t super;  /**&lt; base BTL component */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_mosix_module_t mosix_module;   /**&lt; local module */
<br>
};
<br>
typedef struct mca_btl_mosix_component_t mca_btl_mosix_component_t;
<br>
<p>You can then overload that component with your additional info, leaving the base component to contain the required minimal elements.
<br>
<p><p>On Apr 1, 2012, at 1:59 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I traced the problem to the BML component:
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/bml/r2/bml_r2.c    (revision 26191)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/bml/r2/bml_r2.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -105,6 +105,8 @@
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         if (NULL == btl_names_argv || NULL == btl_names_argv[i]) {
</span><br>
<span class="quotelev1">&gt; +            printf(&quot;\n\nR1: %p\n\n&quot;, btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt; +            printf(&quot;\n\nR2: %s\n\n&quot;, btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;             opal_argv_append_nosize(&amp;btl_names_argv,
</span><br>
<span class="quotelev1">&gt;                                     btl-&gt;btl_component-&gt;btl_version.mca_component_name);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I Get (white-spaces removed) for normal run:
</span><br>
<span class="quotelev1">&gt; R1: 0x7f820e3c31d8
</span><br>
<span class="quotelev1">&gt; R2: self
</span><br>
<span class="quotelev1">&gt; R1: 0x7f820e13c598
</span><br>
<span class="quotelev1">&gt; R2: tcp
</span><br>
<span class="quotelev1">&gt; ... and for my module:
</span><br>
<span class="quotelev1">&gt; R1: 0x38
</span><br>
<span class="quotelev1">&gt; - and then the segmentation fault.
</span><br>
<span class="quotelev1">&gt; I guess it has something to do with the way I initialize my component - I'll resume debugging after lunch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/31/2012 07:04 PM, Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. I get the following Error - I'm pretty sure my BTL is to blame here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl_base_verbose 100 -mca btl self,mosix hello
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: found loaded component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: component mosix register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: component mosix open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] select: initializing btl component mosix
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] select: init of component mosix returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] Failing at address: 0x30
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x36420) [0x7fa94a3cd420]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 1] /lib/x86_64-linux-gnu/libc.so.6(+0x84391) [0x7fa94a41b391]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 2] /lib/x86_64-linux-gnu/libc.so.6(__strdup+0x16) [0x7fa94a41b086]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 3] /usr/local/lib/libmpi.so.0(opal_argv_append_nosize+0xf7) [0x7fa94add66a4]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 4] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1cf5) [0x7fa946177cf5]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 5] /usr/local/lib/openmpi/mca_bml_r2.so(+0x1e50) [0x7fa946177e50]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 6] /usr/local/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x12f) [0x7fa946382b6d]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 7] /usr/local/lib/libmpi.so.0(ompi_mpi_init+0x909) [0x7fa94acd1549]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 8] /usr/local/lib/libmpi.so.0(MPI_Init+0x16c) [0x7fa94ad033ec]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [ 9] /home/alex/huji/benchmarks/simple/hello(_ZN3MPI4InitERiRPPc+0x23) [0x409e2d]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [10] /home/alex/huji/benchmarks/simple/hello(main+0x22) [0x408f66]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [11] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7fa94a3b830d]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] [12] /home/alex/huji/benchmarks/simple/hello() [0x408e89]
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10838] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 10838 on node singularity exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/benchmarks/simple$ mpirun -mca btl self,tcp hello
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10841] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_mpool_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [singularity:10841] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_coll_sm: libmca_common_sm.so.0: cannot open shared object file: No such file or directory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; Hello world!
</span><br>
<span class="quotelev2">&gt;&gt; alex_at_singularity:~/huji/benchmarks/simple$
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Reply:</strong> <a href="10798.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
