<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 now released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 07:13:13 2012" -->
<!-- isoreceived="20120120121313" -->
<!-- sent="Fri, 20 Jan 2012 07:13:05 -0500" -->
<!-- isosent="20120120121305" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 now released" -->
<!-- id="4F195A51.4040300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F1897BD.1020904_at_lbl.gov" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 07:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>In reply to:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/19/2012 5:22 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Minor documentation nit, which might apply to the 1.5 branch as well 
</span><br>
<span class="quotelev1">&gt; (didn't check).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; README says:
</span><br>
<span class="quotelev2">&gt;&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev2">&gt;&gt;   default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev2">&gt;&gt;   targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev2">&gt;&gt;   done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev2">&gt;&gt;   -xarch=v8plus for the Sun compilers, -mcpu=v9 for GCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, following that instruction w/ Sun Studio 12 Update 2 yields:
</span><br>
<span class="quotelev2">&gt;&gt; cc: Warning: -xarch=v8plus is deprecated, use -m32 -xarch=sparc instead
</span><br>
<span class="quotelev1">&gt; for every single compilation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I vaguely recall noting this once before, perhaps 2 years or so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, it appears that the &quot;Sun&quot; example is for the 32-bit ABI 
</span><br>
<span class="quotelev1">&gt; and the &quot;GCC&quot; example for the 64-bit ABI.
</span><br>
Actually I think the whole comment is incorrect (at least from Solaris 
<br>
Studio 12u2 on) in that the default is no longer SPARC v8 target and 
<br>
that one can actually specify just -m32 and -m64 without the -xarch 
<br>
option.  So I wonder if we should just strike that whole block of text 
<br>
from the README.
<br>
<p>Oracle
<br>
Terry D. Dontje | Principal Software Engineer
<br>
Developer Tools Engineering | +1.781.442.2631
<br>
Oracle *- Performance Technologies*
<br>
95 Network Drive, Burlington, MA 01803
<br>
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
<br>
<p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10236/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10237.php">Ralph Castain: "Re: [OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>Previous message:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
<li><strong>In reply to:</strong> <a href="10231.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10232.php">Christopher Samuel: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
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
