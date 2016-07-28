<?
$subject_val = "[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 23:13:05 2012" -->
<!-- isoreceived="20121031031305" -->
<!-- sent="Tue, 30 Oct 2012 20:13:00 -0700" -->
<!-- isosent="20121031031300" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64" -->
<!-- id="CAAvDA15o=9-AWfuLSvz1f3UNpf5Os-88HVALVLY0n0X=Mk+N0g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.0rc5 - make check failure on FreeBSD-6.3/amd64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 23:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11694.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}"</a>
<li><strong>Previous message:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On my FreeBSD-6.3/amd64 platform I see &quot;make check&quot; failing 3 tests under
<br>
test/datatype (see below). Of course &quot;make&quot; stops after that, making it
<br>
possible that additional tests might fail later.
<br>
<p>However, my records do show that the v1.5 branch was just fine on this
<br>
machine, as was the trunk on or about Feb 21, 2012.  So, unless the failing
<br>
tests are new THIS IS A REGRESSION.
<br>
<p>Newer FreeBSD-7.2/amd64, FreeBSD-8.2/amd64 and FreeBSD-9.0/amd64 are all OK.
<br>
<p><p>The failures:
<br>
<p>$ grep -B1 ^FAIL $HOME/OMPI/openmpi-1.7rc5-freebsd6-amd64/LOG/check.log
<br>
Segmentation fault (core dumped)
<br>
FAIL: position
<br>
<pre>
--
Segmentation fault (core dumped)
FAIL: ddt_test
Segmentation fault (core dumped)
FAIL: ddt_raw
Using gdb to get a backtrace from the generated core files shows a stack
over 1300 frames deep, which I suspect is either evidence of a corrupted
stack (buffer overflow?) or of infinite recursion.  There are no symbols
with the backtrace, just numeric addresses.
This is a rather old system
$ gcc --version | head -1
gcc (GCC) 3.4.6 [FreeBSD] 20060305
-Paul
On Tue, Oct 30, 2012 at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; Hi folks
&gt;
&gt; We have posted the next release candidate (rc5) for the 1.7.0 release in
&gt; the usual place:
&gt;
&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
&gt;
&gt; Please put it thru the wringer to help us validate it prior to release
&gt; later this month. We think this looks pretty complete, pending someone
&gt; finding a problem.
&gt;
&gt; Thanks
&gt; Ralph
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11694.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - make check failure on OpenBSD-5.1/{i386, amd64}"</a>
<li><strong>Previous message:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
