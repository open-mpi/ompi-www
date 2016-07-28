<?
$subject_val = "Re: [OMPI devel] 1.5.5rc2r25906 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 12 04:52:42 2012" -->
<!-- isoreceived="20120212095242" -->
<!-- sent="Sun, 12 Feb 2012 01:52:17 -0800" -->
<!-- isosent="20120212095217" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc2r25906 test results" -->
<!-- id="CAAvDA17R4+sWn9RaeBY3oPFM+2tZMxA0V3tvL885pdLninUEuA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F375852.70801_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc2r25906 test results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-12 04:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10399.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>In reply to:</strong> <a href="10399.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Reply:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Feb 11, 2012 at 10:12 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/10/2012 6:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 10, 2012, at 8:57 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  1.5.5rc2 coming soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I should qualify that statement: many things have been resolved, but
</span><br>
<span class="quotelev2">&gt;&gt; there's a few more things to go.  A new rc will come when they have been
</span><br>
<span class="quotelev2">&gt;&gt; resolved:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/**ompi/report/15<https://svn.open-mpi.org/trac/ompi/report/15">https://svn.open-mpi.org/trac/**ompi/report/15<https://svn.open-mpi.org/trac/ompi/report/15</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried tonight's nightly tarball for the 1.5 branch (1.5.5rc2r25906).
</span><br>
<span class="quotelev1">&gt; I found the following issues, which I wad previously reported against
</span><br>
<span class="quotelev1">&gt; 1.5.5rc1, for which I did NOT find a corresponding ticket in &quot;report/15&quot;.
</span><br>
<span class="quotelev1">&gt;  My apologies is I've missed a ticket, or if any of these were deferred to
</span><br>
<span class="quotelev1">&gt; 1.6.x (as was Lion+PGI, for instance).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + GNU Make required for &quot;make clean&quot; due to use of non-standard $(RM)
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/**community/lists/devel/2011/12/">http://www.open-mpi.org/**community/lists/devel/2011/12/</a>**
</span><br>
<span class="quotelev1">&gt; 10184.php&lt;<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10184.php">http://www.open-mpi.org/community/lists/devel/2011/12/10184.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + MacOS 10.4 on ppc fails linking libvt-mpi.la (multiply defined symbols)
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/**community/lists/devel/2011/12/">http://www.open-mpi.org/**community/lists/devel/2011/12/</a>**
</span><br>
<span class="quotelev1">&gt; 10090.php&lt;<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10090.php">http://www.open-mpi.org/community/lists/devel/2011/12/10090.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; My MacOS 10.4/x86 machine is down, but I don't believe it had this problem
</span><br>
<span class="quotelev1">&gt; w/ rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + ROMIO uses explicit MAKE=make, causing problems if one builds ompi w/
</span><br>
<span class="quotelev1">&gt; gmake
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/**community/lists/devel/2012/01/">http://www.open-mpi.org/**community/lists/devel/2012/01/</a>**
</span><br>
<span class="quotelev1">&gt; 10300.php&lt;<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
One more for the list:
<br>
<p>The 1.5 branch needs the same fixes to the -fvisibility probe that Jeff and
<br>
I have been discussing off-list for hwloc-1.3.2.  Basically this comes down
<br>
to the fact that the 1.4 branch of OMPI has a &quot;stronger&quot; configure probe
<br>
for -fvisibility than the 1.5 branch or trunk, and thus known NOT to use
<br>
-fvisibility with broken icc compilers.  This may come down to a simple
<br>
CMR, if one could track down when the probe was strengthened.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10401.php">Matthias Jurenz: "[OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10399.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>In reply to:</strong> <a href="10399.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Reply:</strong> <a href="10406.php">Jeff Squyres: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
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
