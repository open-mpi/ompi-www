<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 now released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 17:23:03 2012" -->
<!-- isoreceived="20120119222303" -->
<!-- sent="Thu, 19 Jan 2012 14:22:53 -0800" -->
<!-- isosent="20120119222253" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 now released" -->
<!-- id="4F1897BD.1020904_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95BA01C2-D3A1-4EDA-AD55-06542CBAF83E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 now released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 17:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Reply:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Minor documentation nit, which might apply to the 1.5 branch as well 
<br>
(didn't check).
<br>
<p>README says:
<br>
<span class="quotelev1">&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev1">&gt;   default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev1">&gt;   targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev1">&gt;   done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev1">&gt;   -xarch=v8plus for the Sun compilers, -mcpu=v9 for GCC.
</span><br>
<p>However, following that instruction w/ Sun Studio 12 Update 2 yields:
<br>
<span class="quotelev1">&gt; cc: Warning: -xarch=v8plus is deprecated, use -m32 -xarch=sparc instead
</span><br>
for every single compilation.
<br>
<p>I vaguely recall noting this once before, perhaps 2 years or so.
<br>
<p>Additionally, it appears that the &quot;Sun&quot; example is for the 32-bit ABI 
<br>
and the &quot;GCC&quot; example for the 64-bit ABI.
<br>
This is potentially a bit confusing.
<br>
<p>-Paul
<br>
<p><p>On 1/19/2012 9:55 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Please test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Previous message:</strong> <a href="10230.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 test results"</a>
<li><strong>In reply to:</strong> <a href="10225.php">Jeff Squyres: "[OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>Reply:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
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
