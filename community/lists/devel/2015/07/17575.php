<?
$subject_val = "[OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 04:02:19 2015" -->
<!-- isoreceived="20150701080219" -->
<!-- sent="Wed, 1 Jul 2015 01:02:14 -0700" -->
<!-- isosent="20150701080214" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Testing of &amp;quot;OMP_PROC_BIND value is invalid&amp;quot; errors" -->
<!-- id="CAAvDA16c9mPyvHqpEq8fmWp7tP_2PcmTxWbyJFQYr8HNrAXRmg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-01 04:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17577.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 1, 2015 at 12:05 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<p><span class="quotelev1">&gt; Now that we know there is an issue with one compiler, and it is isolated
</span><br>
<span class="quotelev1">&gt; to just that compiler, we can easily use configure.m4 to protect against
</span><br>
<span class="quotelev1">&gt; it. I'll add that protection here shortly.
</span><br>
<p>[...]
<br>
<p>Ralph,
<br>
<p>One cannot possibly know for certain that &quot;it is isolated to just that one
<br>
compiler&quot; unless one has tried *every* compiler.  So, I hope the
<br>
configure-based solution is &quot;stronger&quot; than black-listing PGI.
<br>
<p>Since we are told the PGI problem occurs at runtime, not compile time, I am
<br>
curious just what solution you have in mind for the PGI compilers targeting
<br>
Cray compute nodes (or cross-compilation in general) where you can't expect
<br>
to test the runtime behavior.
<br>
<p>When I have a moment in the next couple days, I can try master on many
<br>
versions of PGI, and some XLC, PathScale and Open64 compilers that are
<br>
probably not covered by MTT (though I've not looked) as well as Sun, Intel,
<br>
Gnu and Clang compilers.  Absent any other instructions, I am going to
<br>
assume, based on Howard's emails, that examples/ring_c.c is sufficient to
<br>
reproduce using pgi-12.9 on NERSC's Carver.  I would, however, appreciate
<br>
somebody first confirming for me that such testing is helpful in some way.
<br>
I am not going to bother if the data I collect is going to be discarded.
<br>
<p>-Paul
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Previous message:</strong> <a href="17574.php">Ralph Castain: "Re: [OMPI devel] OMPI_PROC_BIND value is invalid errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17576.php">Ralph Castain: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
<li><strong>Reply:</strong> <a href="17577.php">Joshua Ladd: "Re: [OMPI devel] Testing of &quot;OMP_PROC_BIND value is invalid&quot; errors"</a>
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
