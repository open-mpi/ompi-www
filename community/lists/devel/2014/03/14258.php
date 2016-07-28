<?
$subject_val = "[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  2 19:12:11 2014" -->
<!-- isoreceived="20140303001211" -->
<!-- sent="Sun, 2 Mar 2014 16:12:10 -0800" -->
<!-- isosent="20140303001210" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()" -->
<!-- id="CAAvDA17+YYZ8vqZ9heGy5biVYS53GoHOO6Vn1xtNX1rZmBTvcA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-02 19:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Previous message:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Reply:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Reply:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With many testers still running at this time, the first to complete is a
<br>
failure report.
<br>
<p><span class="quotelev1">&gt;From a FreBSD-6/amd64 platform:
</span><br>
&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/BLD/ompi/contrib/vt/vt/../../../.libs/libmpi.a(osc_sm
<br>
_passive_target.o)(.text+0x18b): In function `lk_fetch32':
<br>
/data/home/hargrove/OMPI/openmpi-1.7.5rc1-freebsd6-amd64/openmpi-1.7.5rc1/ompi/mca/osc/sm/:51:
<br>
undefined reference to `__sync_synchronize'
<br>
<p>Keep in mind that with 99% certainty this has NOTHING to do with VT.  It
<br>
just happens thatotfmerge-mpi is the first executable linked with libmpi.
<br>
&nbsp;Rather the fault lies with the __sync_synchronize call in
<br>
osc_sm_passive_target.c.  The __sync_synchronize() call is not only
<br>
gcc-specific, but didn't exist prior to about gcc-4.1.  Surely there must
<br>
be a opal call that should be used here instead?
<br>
<p>There is no reason to think this is specific to FreeBSD-6, but rather the
<br>
use of a gcc older than the addition of __sync_syncronize() seems the most
<br>
likely key to exposing the problem.  I suspect that as my non-gcc testers
<br>
complete (esp. PGI and Sun) this same issue will arise there.
<br>
<p><p>On Sat, Mar 1, 2014 at 6:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please subject this to your best tests as we hope to roll this (plus bug
</span><br>
<span class="quotelev1">&gt; fixes) to 1.8.0 at the end of the month. This includes the new OSHMEM
</span><br>
<span class="quotelev1">&gt; support, plus a completely updated MPI-3 compliant one-sided implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scheduled release date: Mar 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14258/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14259.php">Paul Hargrove: "[OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Previous message:</strong> <a href="14257.php">Ralph Castain: "[OMPI devel] v1.7.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Reply:</strong> <a href="14260.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
<li><strong>Reply:</strong> <a href="14276.php">Hjelm, Nathan T: "Re: [OMPI devel] v1.7.5rc1 build failure: unresolved __sync_syncronize()"</a>
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
