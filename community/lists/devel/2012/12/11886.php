<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 24 13:43:41 2012" -->
<!-- isoreceived="20121224184341" -->
<!-- sent="Mon, 24 Dec 2012 10:43:34 -0800" -->
<!-- isosent="20121224184334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="2C1F42AB-6146-4317-A51F-C6A469AA361F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B115B2C2-497F-432E-A399-96311D445C17_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-24 13:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="11885.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="11885.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I have installed a temporary patch that allows the trunk to run by no longer finalizing OPAL. Once the param system has been repaired, this will be removed. Meantime, at least you can run the trunk.
<br>
<p>On Dec 24, 2012, at 10:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a heads-up to all: It appears a recent commit has broken the trunk - I think it relates to something done to the MCA parameter system. When running across multiple nodes, the daemons segfault on finalize with a stacktrace of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x0000003dc4477e92 in _int_free () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f18a163f756 in param_destructor (p=0x118d940) at mca_base_param.c:1982
</span><br>
<span class="quotelev1">&gt; #2  0x00007f18a163ab41 in opal_obj_run_destructors (object=0x118d940) at ../../../opal/class/opal_object.h:448
</span><br>
<span class="quotelev1">&gt; #3  0x00007f18a163cb94 in mca_base_param_finalize () at mca_base_param.c:853
</span><br>
<span class="quotelev1">&gt; #4  0x00007f18a1609c06 in opal_finalize_util () at runtime/opal_finalize.c:69
</span><br>
<span class="quotelev1">&gt; #5  0x00007f18a1609cbc in opal_finalize () at runtime/opal_finalize.c:155
</span><br>
<span class="quotelev1">&gt; #6  0x00007f18a18e366b in orte_finalize () at runtime/orte_finalize.c:107
</span><br>
<span class="quotelev1">&gt; #7  0x00007f18a1911313 in orte_daemon (argc=35, argv=0x7ffffd7ea8b8) at orted/orted_main.c:834
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040091a in main (argc=35, argv=0x7ffffd7ea8b8) at orted.c:62
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00007f18a163f756 in param_destructor (p=0x118d940) at mca_base_param.c:1982
</span><br>
<span class="quotelev1">&gt; 1982	        free(p-&gt;mbp_env_var_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb) print array[i]
</span><br>
<span class="quotelev1">&gt; $2 = {mbp_super = {obj_magic_id = 0, obj_class = 0x7f18a18c6460, obj_reference_count = 1, cls_init_file_name = 0x7f18a169d04e &quot;mca_base_param.c&quot;, 
</span><br>
<span class="quotelev1">&gt;    cls_init_lineno = 1154}, mbp_type = MCA_BASE_PARAM_TYPE_STRING, mbp_type_name = 0x1185110 &quot;\300O\030\001&quot;, mbp_component_name = 0x0, 
</span><br>
<span class="quotelev1">&gt;  mbp_param_name = 0x1185130 &quot;&quot;, mbp_full_name = 0x1185150 &quot;orte_debugger_test_daemon&quot;, mbp_synonyms = 0x0, mbp_internal = false, 
</span><br>
<span class="quotelev1">&gt;  mbp_read_only = false, mbp_deprecated = false, mbp_deprecated_warning_shown = true, 
</span><br>
<span class="quotelev1">&gt;  mbp_help_msg = 0x11850a0 &quot;Name of the executable to be used to simulate a debugger colaunch (relative or absolute path)&quot;, 
</span><br>
<span class="quotelev1">&gt;  mbp_env_var_name = 0x1185180 &quot;\020P\030\001&quot;, mbp_default_value = {intval = 0, stringval = 0x0}, mbp_file_value_set = false, mbp_file_value = {
</span><br>
<span class="quotelev1">&gt;    intval = 0, stringval = 0x0}, mbp_source_file = 0x0, mbp_override_value_set = false, mbp_override_value = {intval = 0, stringval = 0x0}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, the problem is that the mbp_env_var_name field is trash, so the destructor's attempt to free that field crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe it was Nathan that last touched this area, so perhaps he could take a gander and see what happened? Meantime, I'm afraid the trunk is down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="11885.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="11885.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="11887.php">Ralph Castain: "Re: [OMPI devel] Trunk is broken"</a>
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
