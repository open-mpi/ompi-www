<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 02:22:38 2014" -->
<!-- isoreceived="20140731062238" -->
<!-- sent="Wed, 30 Jul 2014 23:22:37 -0700" -->
<!-- isosent="20140731062237" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA17M4F_wBhoZu=cZNNoHu6YA=Wqko1bx+85go1zs3a++5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA167668hgVd2oWX0e5mt=-4bKYT+sM7Jn6svN-xV5y0FZQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 02:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15386.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15386.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 30, 2014 at 8:53 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<p><span class="quotelev1">&gt; I have a clear answer to *what* is different (below) and am next looking
</span><br>
<span class="quotelev1">&gt; into the why/how now.
</span><br>
<span class="quotelev1">&gt; It seems that 1.8.1 has included all dependencies into libmpi_usempif08
</span><br>
<span class="quotelev1">&gt; while 1.8.2rc2 does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;[...]
<br>
<p>The difference appears to stem from the following difference in
<br>
ompi/mpi/fortran/use-mpi-f08/Makefile.am:
<br>
<p>1.8.1:
<br>
libmpi_usempif08_la_LIBADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(module_sentinel_file) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(OMPI_MPIEXT_USEMPIF08_LIBS) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la
<br>
<p>1.8.2rc2:
<br>
libmpi_usempif08_la_LIBADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(OMPI_MPIEXT_USEMPIF08_LIBS) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la
<br>
libmpi_usempif08_la_DEPENDENCIES = $(module_sentinel_file)
<br>
<p>Where in both cases one has:
<br>
<p>module_sentinel_file = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libforce_usempif08_internal_modules_to_be_built.la
<br>
<p>which contains all of the symbols which my previous testing found had
<br>
&quot;disappeared&quot; from libmpi_usempif08.so between 1.8.1 and 1.8.2rc2.
<br>
<p>I don't have recent enough autotools to attempt the change the Makefile.am,
<br>
but instead restored the removed item from libmpi_usempif08_la_LIBADD
<br>
directly in Makefile.in.  However, rather than fixing the problem, that
<br>
resulted in multiple definitions of a bunch of _eq and _ne functions
<br>
(e.g. mpi_f08_types_ompi_request_op_ne_).  So, I am uncertain how to
<br>
proceed.
<br>
<p>Use svn blame points at a &quot;bulk&quot; CMR of many fortran related changes,
<br>
including one related to the eq/ne operators.  So, I am turning over this
<br>
investigation to Jeff and/or Ralph to figure out what actually is required
<br>
to fix this without loss of whatever benefits were in that CMR.  I am still
<br>
available to test the proposed fixes.  Happy hunting...
<br>
<p>Somebody owes me a virtual beer (or nihonshu) ;-)
<br>
-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15387/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15386.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15386.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15388.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
