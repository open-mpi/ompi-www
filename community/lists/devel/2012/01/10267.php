<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 14:46:35 2012" -->
<!-- isoreceived="20120127194635" -->
<!-- sent="Fri, 27 Jan 2012 11:46:30 -0800" -->
<!-- isosent="20120127194630" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue" -->
<!-- id="CAAvDA14mh2_E8pqLdk+EtE7THRB7zNPRdtXGPV=Ef0ZWcagcFQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F4D2E003-0880-4BEE-B7C5-3E9850FBF8E9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 14:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 27, 2012 at 5:34 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure how that can happen -- orte_odls appears to be
</span><br>
<span class="quotelev1">&gt; prototyped properly in orte/mca/odls/odls.h (i.e., it has ORTE_DECLSPEC,
</span><br>
<span class="quotelev1">&gt; for visibility), and is properly instantiated in
</span><br>
<span class="quotelev1">&gt; orte/mca/odls/base/odls_base_open.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul: can you run some nm's and see how the orte_odls symbol appears in
</span><br>
<span class="quotelev1">&gt; libopen-rte.a?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>In the PGI build directory:
<br>
<p><span class="quotelev1">&gt; $ find . -name '*.a' | while read lib; do
</span><br>
<span class="quotelev1">&gt;       out=`nm $lib 2&gt;/dev/null | grep -w _orte_odls`;
</span><br>
<span class="quotelev1">&gt;       test -n &quot;$out&quot; &amp;&amp; echo -e &quot;${lib}:\n${out}&quot;;
</span><br>
<span class="quotelev1">&gt;    done
</span><br>
<span class="quotelev1">&gt; ./orte/.libs/libopen-rte.a:
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; 0000000000000038 C _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; ./orte/mca/errmgr/.libs/libmca_errmgr.a:
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; ./orte/mca/odls/.libs/libmca_odls.a:
</span><br>
<span class="quotelev1">&gt; 0000000000000038 C _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; ./orte/mca/plm/.libs/libmca_plm.a:
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<p><p>Meanwhile in the GCC build directory the same shell command yields
<br>
something quite different:
<br>
<p><span class="quotelev1">&gt; ./orte/mca/errmgr/.libs/libmca_errmgr.a:
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; ./orte/mca/odls/.libs/libmca_odls.a:
</span><br>
<span class="quotelev1">&gt; 00000000000011c0 S _orte_odls
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<span class="quotelev1">&gt; ./orte/mca/plm/.libs/libmca_plm.a:
</span><br>
<span class="quotelev1">&gt;                  U _orte_odls
</span><br>
<p><p>So the difference boils down to &quot;C&quot; vs &quot;S&quot;.
<br>
According to &quot;man nm&quot; on this system
<br>
&nbsp;&nbsp;&quot;C&quot; is &quot;common&quot;
<br>
&nbsp;&nbsp;&quot;S&quot; is &quot;other section not listed above&quot;
<br>
<p>I don't know much about visibility attributes and so can't follow the path
<br>
any further without some instructions to follow.  (Though I will read the
<br>
PGI manpages for anything related to common vs noncommon symbols).
<br>
<p>Hopefully those are the droids you're looking for,
<br>
-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10267/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10268.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]"</a>
<li><strong>Previous message:</strong> <a href="10266.php">nadia.derbey: "[OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10261.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
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
