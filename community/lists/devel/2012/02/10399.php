<?
$subject_val = "[OMPI devel] 1.5.5rc2r25906 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 12 01:12:44 2012" -->
<!-- isoreceived="20120212061244" -->
<!-- sent="Sat, 11 Feb 2012 22:12:34 -0800" -->
<!-- isosent="20120212061234" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc2r25906 test results" -->
<!-- id="4F375852.70801_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8096497F-5381-4B26-AC69-71925AC64DD2_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc2r25906 test results<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-12 01:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Previous message:</strong> <a href="10398.php">Paul H. Hargrove: "Re: [OMPI devel] v1.4.5rc6 released"</a>
<li><strong>In reply to:</strong> <a href="10396.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Reply:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2012 6:04 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2012, at 8:57 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.5rc2 coming soon.
</span><br>
<span class="quotelev1">&gt; I should qualify that statement: many things have been resolved, but there's a few more things to go.  A new rc will come when they have been resolved:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/report/15">https://svn.open-mpi.org/trac/ompi/report/15</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I just tried tonight's nightly tarball for the 1.5 branch (1.5.5rc2r25906).
<br>
I found the following issues, which I wad previously reported against 
<br>
1.5.5rc1, for which I did NOT find a corresponding ticket in 
<br>
&quot;report/15&quot;.  My apologies is I've missed a ticket, or if any of these 
<br>
were deferred to 1.6.x (as was Lion+PGI, for instance).
<br>
<p>+ GNU Make required for &quot;make clean&quot; due to use of non-standard $(RM)
<br>
Reported in <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10184.php">http://www.open-mpi.org/community/lists/devel/2011/12/10184.php</a>
<br>
<p>+ MacOS 10.4 on ppc fails linking libvt-mpi.la (multiply defined symbols)
<br>
Reported in <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10090.php">http://www.open-mpi.org/community/lists/devel/2011/12/10090.php</a>
<br>
My MacOS 10.4/x86 machine is down, but I don't believe it had this 
<br>
problem w/ rc1.
<br>
<p>+ ROMIO uses explicit MAKE=make, causing problems if one builds ompi w/ 
<br>
gmake
<br>
Reported in <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Previous message:</strong> <a href="10398.php">Paul H. Hargrove: "Re: [OMPI devel] v1.4.5rc6 released"</a>
<li><strong>In reply to:</strong> <a href="10396.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<li><strong>Reply:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
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
