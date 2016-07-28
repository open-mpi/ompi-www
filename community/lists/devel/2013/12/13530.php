<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 15:00:56 2013" -->
<!-- isoreceived="20131220200056" -->
<!-- sent="Fri, 20 Dec 2013 12:00:53 -0800" -->
<!-- isosent="20131220200053" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)" -->
<!-- id="CAAvDA17+Z1xF55YXZbbd_vn_NBP1tpUtqvW4nbD3QeRKZfZHkw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37D87E29-BC6D-4646-BD99-4310C53DE0F2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-12-20 15:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13529.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13529.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and Jeff,
<br>
<p>Thanks for all the rapid fixes.
<br>
I'll send openmpi-1.7.4rc2r30031 for a spin while I go wait in line at the
<br>
Post Office.
<br>
<p>-Paul
<br>
<p><p>On Fri, Dec 20, 2013 at 11:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The binding stuff was in there, but the limit protection code just went in
</span><br>
<span class="quotelev1">&gt; today. Jeff has since regenerated the tarball for the web site, so the one
</span><br>
<span class="quotelev1">&gt; up there should have most (if not all) of these problems fixed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a great holiday!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2013, at 11:40 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the same behavior w/ last night's 1.7 tarball
</span><br>
<span class="quotelev1">&gt; (openmpi-1.7.4rc2r30002).
</span><br>
<span class="quotelev1">&gt; The very next commit, r30003, is your addition (on trunk) of guards for
</span><br>
<span class="quotelev1">&gt; RLIMIT_AS, etc..
</span><br>
<span class="quotelev1">&gt; So, I DON'T think any fix for this behavior is in the 1.7 branch as you
</span><br>
<span class="quotelev1">&gt; thought (maybe just CMR'ed?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if there is additional information about the platform or error
</span><br>
<span class="quotelev1">&gt; which I should collect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.
</span><br>
<span class="quotelev1">&gt; You may see my email vacation auto-responder message.
</span><br>
<span class="quotelev1">&gt; My vacation has started (no *paid* work) but I am still reading email
</span><br>
<span class="quotelev1">&gt; today.
</span><br>
<span class="quotelev1">&gt; I plan to re-test tonight's 1.7 tarball on all the systems where I
</span><br>
<span class="quotelev1">&gt; reported issues on Thu night.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 19, 2013 at 7:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe this one has already been fixed and is in the nightly
</span><br>
<span class="quotelev2">&gt;&gt; (1.7.4rc2) - for now, you can just set &quot;--bind-to none&quot; on the cmd line to
</span><br>
<span class="quotelev2">&gt;&gt; get past it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 19, 2013, at 6:42 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Testing with Solaris 10 on SPARC, I was expecting to encounter the bus
</span><br>
<span class="quotelev2">&gt;&gt; error reported previously by Siegman Gross.  Instead I see the following
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-related abort:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ env
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;  LD_LIBRARY_PATH_64=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/lib:$LD_LIBRARY_PATH_64
</span><br>
<span class="quotelev2">&gt;&gt;  OMPI_MCA_shmem_mmap_enable_nfs_warning=0
</span><br>
<span class="quotelev2">&gt;&gt;  /home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev2">&gt;&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev2">&gt;&gt; will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:        niagara1
</span><br>
<span class="quotelev2">&gt;&gt;   Application name:  examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt;   Error message:     hwloc indicates cpu binding cannot be enforced
</span><br>
<span class="quotelev2">&gt;&gt;   Location:
</span><br>
<span class="quotelev2">&gt;&gt;  /home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc1/orte/mca/odls/default/odls_default_module.c:478
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 2 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming I just need some magic pixie dust to disable cpu binding.
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate some corresponding instructions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if this is NOT an expected/desired/known behavior please let me
</span><br>
<span class="quotelev2">&gt;&gt; know what I can/should do to help determine the root cause.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13531.php">Adrian Reber: "Re: [OMPI devel] [PATCH v3 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13529.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>In reply to:</strong> <a href="13529.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
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
