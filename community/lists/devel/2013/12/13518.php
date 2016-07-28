<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 22:39:58 2013" -->
<!-- isoreceived="20131220033958" -->
<!-- sent="Thu, 19 Dec 2013 19:39:57 -0800" -->
<!-- isosent="20131220033957" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)" -->
<!-- id="CAAvDA15sCzqv3mmOyAK1q=M9Du_pTsSa-x46QDxRq8R2Gsm5Mw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CBFA4B45-554E-4C2A-BB1C-26FE344260B5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 22:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13528.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I can confirm &quot;--bind-to none&quot; worked to eliminate the error, but the test
<br>
now appears to hang :-(
<br>
<p>Since you say the binding probably fixed for rc2, I'll see if the latest
<br>
nightly tarball works better by default.
<br>
<p>-Paul
<br>
<p><p>On Thu, Dec 19, 2013 at 7:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I believe this one has already been fixed and is in the nightly (1.7.4rc2)
</span><br>
<span class="quotelev1">&gt; - for now, you can just set &quot;--bind-to none&quot; on the cmd line to get past it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2013, at 6:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Testing with Solaris 10 on SPARC, I was expecting to encounter the bus
</span><br>
<span class="quotelev1">&gt; error reported previously by Siegman Gross.  Instead I see the following
</span><br>
<span class="quotelev1">&gt; hwloc-related abort:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ env
</span><br>
<span class="quotelev1">&gt; PATH=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin:$PATH
</span><br>
<span class="quotelev1">&gt;  LD_LIBRARY_PATH_64=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/lib:$LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev1">&gt;  OMPI_MCA_shmem_mmap_enable_nfs_warning=0
</span><br>
<span class="quotelev1">&gt;  /home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:        niagara1
</span><br>
<span class="quotelev1">&gt;   Application name:  examples/ring_c
</span><br>
<span class="quotelev1">&gt;   Error message:     hwloc indicates cpu binding cannot be enforced
</span><br>
<span class="quotelev1">&gt;   Location:
</span><br>
<span class="quotelev1">&gt;  /home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc1/orte/mca/odls/default/odls_default_module.c:478
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am assuming I just need some magic pixie dust to disable cpu binding.
</span><br>
<span class="quotelev1">&gt; I'd appreciate some corresponding instructions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if this is NOT an expected/desired/known behavior please let me
</span><br>
<span class="quotelev1">&gt; know what I can/should do to help determine the root cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13519.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 autogen error: NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13528.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
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
