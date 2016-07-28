<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 03:01:37 2014" -->
<!-- isoreceived="20140731070137" -->
<!-- sent="Thu, 31 Jul 2014 16:00:33 +0900" -->
<!-- isosent="20140731070033" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="OF9BA83598.FBC0AE55-ON49257D26.0023B0C0-49257D26.00269A1C_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17M4F_wBhoZu=cZNNoHu6YA=Wqko1bx+85go1zs3a++5g_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with%20PGI-14.7%20causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-31 03:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>Thank you for your investigation. I'm sure it's very
<br>
close to fix the problem although I myself can't do
<br>
that. So I must owe you something...
<br>
<p>Please try Awamori, which is Okinawa's sake and very
<br>
good in such a hot day.
<br>
<p>Tetsuya
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 8:53 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; I have a clear answer to *what* is different (below) and am next looking
</span><br>
into the why/how now.
<br>
<span class="quotelev1">&gt; It seems that 1.8.1 has included all dependencies into libmpi_usempif08
</span><br>
while 1.8.2rc2 does not.
<br>
<span class="quotelev1">&gt; &#160;[...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference appears to stem from the following difference in
</span><br>
ompi/mpi/fortran/use-mpi-f08/Makefile.am:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.8.1:
</span><br>
<span class="quotelev1">&gt; libmpi_usempif08_la_LIBADD = \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; $(module_sentinel_file) \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; $(OMPI_MPIEXT_USEMPIF08_LIBS) \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; $(top_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.8.2rc2:
</span><br>
<span class="quotelev1">&gt; libmpi_usempif08_la_LIBADD = \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; $(OMPI_MPIEXT_USEMPIF08_LIBS) \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; $(top_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt; libmpi_usempif08_la_DEPENDENCIES = $(module_sentinel_file)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where in both cases one has:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module_sentinel_file = \
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; libforce_usempif08_internal_modules_to_be_built.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which contains all of the symbols which my previous testing found had
</span><br>
&quot;disappeared&quot; from libmpi_usempif08.so between 1.8.1 and 1.8.2rc2.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have recent enough autotools to attempt the change the
</span><br>
Makefile.am, but instead restored the removed item from
<br>
libmpi_usempif08_la_LIBADD directly in Makefile.in. &#160;However, rather than
<br>
fixing
<br>
<span class="quotelev1">&gt; the problem, that resulted in multiple definitions of a bunch of _eq and
</span><br>
_ne functions (e.g.&#160;mpi_f08_types_ompi_request_op_ne_). &#160;So, I am uncertain
<br>
how to proceed.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use svn blame points at a &quot;bulk&quot; CMR of many fortran related changes,
</span><br>
including one related to the eq/ne operators. &#160;So, I am turning over this
<br>
investigation to Jeff and/or Ralph to figure out what
<br>
<span class="quotelev1">&gt; actually is required to fix this without loss of whatever benefits were
</span><br>
in that CMR. &#160;I am still available to test the proposed fixes. &#160;Happy
<br>
hunting...
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somebody owes me a virtual beer (or&#160;nihonshu) ;-)
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department &#160; &#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory &#160; &#160; Fax: +1-510-486-6900
</span><br>
_______________________________________________
<br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15387.php">http://www.open-mpi.org/community/lists/devel/2014/07/15387.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15387.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15389.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
