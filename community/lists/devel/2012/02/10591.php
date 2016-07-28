<?
$subject_val = "Re: [OMPI devel] 1.5.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 23:24:43 2012" -->
<!-- isoreceived="20120224042443" -->
<!-- sent="Thu, 23 Feb 2012 20:24:26 -0800" -->
<!-- isosent="20120224042426" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc2" -->
<!-- id="4F4710FA.9030304_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F470F5C.1040201_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc2<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 23:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10592.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10590.php">Christopher Samuel: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10590.php">Christopher Samuel: "Re: [OMPI devel] 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is consistent with my findings w/ XLC (mostly on BG/L and BG/P 
<br>
front end nodes).
<br>
None of the 7.0,  8.0, 9.0 or 11.1 versions of XLC I tested could 
<br>
generate correct atomics.
<br>
They either failed at build time, or failed the tests in test/asm/.
<br>
<p>-Paul
<br>
<p><p>On 2/23/2012 8:17 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24/02/12 15:12, Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect this is irrelevant, but I got a build failure trying to
</span><br>
<span class="quotelev2">&gt;&gt; compile it on our BG/P front end node (login node) with the IBM XL
</span><br>
<span class="quotelev2">&gt;&gt; compilers.
</span><br>
<span class="quotelev1">&gt; Oops, forgot how I built it..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; PATH=/opt/ibmcmp/vac/bg/9.0/bin/:/opt/ibmcmp/vacpp/bg/9.0/bin:/opt/ibmcmp/xlf/bg/11.1/bin:$PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=xlc CXX=xlC F77=xlf ./configure&amp;&amp;  make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt;      Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;   VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAk9HD1wACgkQO2KABBYQAh9EZgCcCz9x2i6KuE7/UpPzr194jHQD
</span><br>
<span class="quotelev1">&gt; rdcAni+dfEMhlqMzYMILn8jeS9yWlInu
</span><br>
<span class="quotelev1">&gt; =+rA4
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10592.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Previous message:</strong> <a href="10590.php">Christopher Samuel: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>In reply to:</strong> <a href="10590.php">Christopher Samuel: "Re: [OMPI devel] 1.5.5rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10597.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc2"</a>
<li><strong>Reply:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
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
