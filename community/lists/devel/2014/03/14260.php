<?
$subject_val = "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 19:21:46 2014" -->
<!-- isoreceived="20140303002146" -->
<!-- sent="Sun, 2 Mar 2014 16:21:44 -0800" -->
<!-- isosent="20140303002144" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()" -->
<!-- id="CAAvDA17wvh2O2+aKDmHgPeZxKdkbs9Av1_vVayVEs2uWZNcWnw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17+YYZ8vqZ9heGy5biVYS53GoHOO6Vn1xtNX1rZmBTvcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 19:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>In reply to:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I predicted, this is leading to failures on Linux w/ the PGI compilers.
<br>
<p>-Paul
<br>
<p><p>On Sun, Mar 2, 2014 at 4:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With many testers still running at this time, the first to complete is a
</span><br>
<span class="quotelev1">&gt; failure report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From a FreBSD-6/amd64 platform:
</span><br>
<span class="quotelev1">&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm
</span><br>
<span class="quotelev1">&gt; _passive_target.o)(.text+0x18b): In function `lk_fetch32':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/:51:
</span><br>
<span class="quotelev1">&gt; undefined reference to `__sync_synchronize'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that with 99% certainty this has NOTHING to do with VT.  It
</span><br>
<span class="quotelev1">&gt; just happens thatotfmerge-mpi is the first executable linked with libmpi.
</span><br>
<span class="quotelev1">&gt;  Rather the fault lies with the __sync_synchronize call in
</span><br>
<span class="quotelev1">&gt; osc_sm_passive_target.c.  The __sync_synchronize() call is not only
</span><br>
<span class="quotelev1">&gt; gcc-specific, but didn't exist prior to about gcc-4.1.  Surely there must
</span><br>
<span class="quotelev1">&gt; be a opal call that should be used here instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no reason to think this is specific to FreeBSD-6, but rather the
</span><br>
<span class="quotelev1">&gt; use of a gcc older than the addition of __sync_syncronize() seems the most
</span><br>
<span class="quotelev1">&gt; likely key to exposing the problem.  I suspect that as my non-gcc testers
</span><br>
<span class="quotelev1">&gt; complete (esp. PGI and Sun) this same issue will arise there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Mar 1, 2014 at 6:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please subject this to your best tests as we hope to roll this (plus bug
</span><br>
<span class="quotelev2">&gt;&gt; fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM
</span><br>
<span class="quotelev2">&gt;&gt; support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14261.php">Orion Poplawski: "Re: [OMPI devel] v1.7.5rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>In reply to:</strong> <a href="14258.php">Paul Hargrove: "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
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
