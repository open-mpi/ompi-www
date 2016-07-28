<?
$subject_val = "[OMPI devel] 1.7.0rc5 - build failure w/ gcc-3.4.6/x86-64 (regression)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 23:53:38 2012" -->
<!-- isoreceived="20121031035338" -->
<!-- sent="Tue, 30 Oct 2012 20:53:33 -0700" -->
<!-- isosent="20121031035333" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.0rc5 - build failure w/ gcc-3.4.6/x86-64 (regression)" -->
<!-- id="CAAvDA15J8rx_mR9pbZ_QZ_tu17S5v3YQkWqerQPdO8+oPG=9PQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.0rc5 - build failure w/ gcc-3.4.6/x86-64 (regression)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 23:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="11694.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have access to a Linux/x86-64 machine running &quot;Red Hat Enterprise Linux
<br>
AS release 4&quot;
<br>
It has a pretty old gcc:
<br>
<p>$ gcc --version | head -1
<br>
gcc (GCC) 3.4.6 20060404 (Red Hat 3.4.6-3)
<br>
<p>As shown below, this gcc is rejecting some portion of the atomics.
<br>
I am certain I've tested ompi-1.5 and 1.6 on this machine w/o any problems,
<br>
as well as the trunk (probably sometime in late Feb 2012).  So, this
<br>
appears to be a REGRESSION.
<br>
<p>-Paul
<br>
<p>make[2]: Entering directory
<br>
`/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/BLD/orte/mca/oob/tcp'
<br>
&nbsp;&nbsp;CC       oob_tcp.lo
<br>
/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/openmpi-1.7rc5/orte/mca/oob/tcp/oob_tcp.c:
<br>
In function `mca_oob_tcp_listen_thread':
<br>
/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/openmpi-1.7rc5/opal/include/opal/sys/amd64/atomic.h:85:
<br>
error: inconsistent operand constraints in an `asm'
<br>
/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/openmpi-1.7rc5/opal/include/opal/sys/amd64/atomic.h:85:
<br>
error: inconsistent operand constraints in an `asm'
<br>
/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/openmpi-1.7rc5/opal/include/opal/sys/amd64/atomic.h:85:
<br>
error: inconsistent operand constraints in an `asm'
<br>
make[2]: *** [oob_tcp.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/BLD/orte/mca/oob/tcp'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/phhargrove/OMPI/openmpi-1.7rc5-linux-x86_64-psm/BLD/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>On Tue, Oct 30, 2012 at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have posted the next release candidate (rc5) for the 1.7.0 release in
</span><br>
<span class="quotelev1">&gt; the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please put it thru the wringer to help us validate it prior to release
</span><br>
<span class="quotelev1">&gt; later this month. We think this looks pretty complete, pending someone
</span><br>
<span class="quotelev1">&gt; finding a problem.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11695/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="11694.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}"</a>
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
