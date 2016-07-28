<?
$subject_val = "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 15 12:03:45 2013" -->
<!-- isoreceived="20131215170345" -->
<!-- sent="Sun, 15 Dec 2013 12:03:24 -0500" -->
<!-- isosent="20131215170324" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Test suite of openMPI 1.7.3 fails" -->
<!-- id="9D98D8F3-05E2-4C17-B9CE-7D63E1B22FB1_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20131212183145.GE6335_at_paradies.suse.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Test suite of openMPI 1.7.3 fails<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-15 12:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13437.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13435.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>In reply to:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a subtle bug with the atomic selection. On Linux the CMA support is linked together with the OPAL_ASSEMBLY_ARCH. If the BUILTIN atomics are enabled, and we are on Linux and we need to define the CMA syscall# (OMPI_BTL_SM_CMA_NEED_SYSCALL_DEFS), the opal/include/opal/sys/cma.h file is unable to make a decision as the underlying architecture is unknown (BUILTIN not being a valid architecture).
<br>
<p>I think the solution is to have two versions of OPAL_ASSEMBLY_ARCH, one for knowing the architecture (excluding OMPI_SYNC_BUILTIN) and one for selecting the atomics (oncluding OMPI_SYNC_BUILTIN) we want to use. Fixing this however involves too much .m4 craftsmanship for my liking, so a volunteer will be needed&#133;
<br>
<p>Once fixed this should go into 1.7 together with 29915, 29916.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p>On Dec 12, 2013, at 13:31 , Philipp Thomas &lt;pth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * Jeff Squyres (jsquyres) (jsquyres_at_[hidden]) [20131211 21:01]:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the opal_config.h file from your build tree?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will help us look into what's going on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that it doesn't seem to be dependent on the build architecture as it
</span><br>
<span class="quotelev1">&gt; fails at the same spot for all Archs that openSUSE supports (i586, x86-64,
</span><br>
<span class="quotelev1">&gt; armv6l, armv7l ppc, ppc64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Philipp
</span><br>
<span class="quotelev1">&gt; &lt;opal_config.h&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13437.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29917 - trunk/ompi/mca/rte/orte"</a>
<li><strong>Previous message:</strong> <a href="13435.php">George Bosilca: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>In reply to:</strong> <a href="13421.php">Philipp Thomas: "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
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
