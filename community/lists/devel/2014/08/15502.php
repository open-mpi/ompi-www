<?
$subject_val = "[OMPI devel] oshmem enabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 17:41:33 2014" -->
<!-- isoreceived="20140804214133" -->
<!-- sent="Mon, 4 Aug 2014 14:41:31 -0700" -->
<!-- isosent="20140804214131" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem enabled by default" -->
<!-- id="CAAvDA17uZ+j4ZJVfihAO+TyO5yScLMBmRU9k6HaGCmALEUHAaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem enabled by default<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 17:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15503.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In both trunk and 1.8.2rc3 the behavior is to enable oshmem by default.
<br>
<p>In the 1.8.2rc3 tarball the configure help output matches the behavior.
<br>
HOWEVER, in the trunk the configure help output still says oshmem is
<br>
DISabled by default.
<br>
<p>{~/OMPI/ompi-trunk}$ svn info | grep &quot;Revision&quot;
<br>
Revision: 32422
<br>
{~/OMPI/ompi-trunk}$ ./configure --help | grep -A1 'enable-oshmem '
<br>
&nbsp;&nbsp;--enable-oshmem         Enable building the OpenSHMEM interface (disabled
<br>
by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default)
<br>
<p>-Paul
<br>
<p><p>On Thu, Jul 24, 2014 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, it already is set correctly - the help message was out of date,
</span><br>
<span class="quotelev1">&gt; so I corrected that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2014, at 10:58 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 24/07/2014 15:52, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oshmem should be enabled by default now
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok,
</span><br>
<span class="quotelev2">&gt; &gt; so please reverse the configure switch
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-oshmem         Enable building the OpenSHMEM interface
</span><br>
<span class="quotelev1">&gt; (disabled by default)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will test enabling it in the meantime.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Marco
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15254.php">http://www.open-mpi.org/community/lists/devel/2014/07/15254.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15261.php">http://www.open-mpi.org/community/lists/devel/2014/07/15261.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15503.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<li><strong>Previous message:</strong> <a href="15501.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
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
