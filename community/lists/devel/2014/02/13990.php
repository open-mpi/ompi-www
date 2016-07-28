<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: additional solaris warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 20:40:58 2014" -->
<!-- isoreceived="20140204014058" -->
<!-- sent="Mon, 3 Feb 2014 17:40:05 -0800" -->
<!-- isosent="20140204014005" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: additional solaris warnings" -->
<!-- id="E498E2B9-EBA6-463A-BF9C-032B0FF3E482_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17C2Hmi4KGLDaGiU4jcKQVMHw223kzw9viix_241zTupg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: additional solaris warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 20:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13991.php">Ralph Castain: "[OMPI devel] 1.7.4: last call"</a>
<li><strong>Previous message:</strong> <a href="13989.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13988.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: additional solaris warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed the two in ORTE and moved them to 1.7.4 - I suspect the others may be left for 1.7.5
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Feb 3, 2014, at 3:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The warnings below come from the Solaris Studio 12.3 compilers when testing r30538 on the v1.7 branch (to confirm the undefined MB problem has been resolved).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are in addition to the shmem/{posix,svsv} ones reported yesterday.
</span><br>
<span class="quotelev1">&gt; I am NOT saying that any/all of these are new, just that I didn't report them yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/opal/mca/base/mca_base_param.c&quot;, line 583: warning: enum type mismatch: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line 433: warning: initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85: warning: initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152: warning: initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/orte/mca/rmaps/base/rmaps_base_binding.c&quot;, line 975: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/orte/mca/odls/default/odls_default_module.c&quot;, line 512: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/ompi/datatype/ompi_datatype_args.c&quot;, line 515: warning: improper pointer/integer combination: op &quot;=&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 315: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 143: warning: assignment type mismatch:
</span><br>
<span class="quotelev1">&gt;         pointer to struct sm_offset {struct  {..} mutex, long long offset} &quot;=&quot; pointer to char
</span><br>
<span class="quotelev1">&gt; &quot;[SRCDIR]/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c&quot;, line 216: warning: argument #1 is incompatible with prototype:
</span><br>
<span class="quotelev1">&gt;         prototype: pointer to char : &quot;/usr/include/sys/mman.h&quot;, line 165
</span><br>
<span class="quotelev1">&gt;         argument : pointer to struct sm_offset {struct  {..} mutex, long long offset}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13991.php">Ralph Castain: "[OMPI devel] 1.7.4: last call"</a>
<li><strong>Previous message:</strong> <a href="13989.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc3 static link failure on Solaris"</a>
<li><strong>In reply to:</strong> <a href="13988.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: additional solaris warnings"</a>
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
