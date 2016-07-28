<?
$subject_val = "[OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 09:27:09 2008" -->
<!-- isoreceived="20080128142709" -->
<!-- sent="Mon, 28 Jan 2008 07:26:56 -0700" -->
<!-- isosent="20080128142656" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk borked" -->
<!-- id="C3C33440.BF49%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk borked<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 09:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3056.php">George Bosilca: "Re: [OMPI devel] [devel-core] carto (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We seem to have a problem on the trunk this morning. I am building on a
<br>
platform with the following configuration:
<br>
<p>with_threads=no
<br>
enable_dlopen=no
<br>
enable_pty_support=no
<br>
with_tm=/opt/PBS
<br>
LDFLAGS=-L/opt/PBS/lib64
<br>
with_openib=/opt/ofed
<br>
with_memory_manager=no
<br>
enable_mem_debug=yes
<br>
enable_mem_profile=no
<br>
enable_debug_symbols=yes
<br>
enable_binaries=yes
<br>
with_devel_headers=yes
<br>
enable_heterogeneous=no
<br>
enable_picky=yes
<br>
<p>The compile errors out in the OpenIB BTL with the following error:
<br>
<p>btl_openib_proc.c: In function `mca_btl_openib_proc_create':
<br>
btl_openib_proc.c:159: error: `i' undeclared (first use in this function)
<br>
btl_openib_proc.c:159: error: (Each undeclared identifier is reported only
<br>
once
<br>
btl_openib_proc.c:159: error: for each function it appears in.)
<br>
make[2]: *** [btl_openib_proc.lo] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>When I look at the code, the problem is the following #if:
<br>
<p>#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
#endif
<br>
<p>Yet the code will ALWAYS use that variable to unpack all the ports. I
<br>
removed the #if to clear the problem, but before committing the change, I
<br>
wanted to ask why someone thought this test needed to be in the code.
<br>
<p>Should the entire loop unpacking all the ports be similarly protected, or
<br>
was the protection around the variable declaration simply an error?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3056.php">George Bosilca: "Re: [OMPI devel] [devel-core] carto (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
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
