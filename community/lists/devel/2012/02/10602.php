<?
$subject_val = "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 20:47:15 2012" -->
<!-- isoreceived="20120225014715" -->
<!-- sent="Fri, 24 Feb 2012 17:46:57 -0800" -->
<!-- isosent="20120225014657" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9" -->
<!-- id="4F483D91.7020108_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F483728.5020905_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 20:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>Previous message:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>In reply to:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>Reply:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I was certain I knew what was wrong, but the tests still fail.
<br>
Nobody should hold their breath waiting for my patches, but I am still 
<br>
investigating.
<br>
<p>*IF* I can determine that I am right about the asm allowing gcc to 
<br>
generate bad code then I think this is important for 1.5.5.
<br>
Otherwise, I think this is a 1.6 issue.
<br>
<p>-Paul
<br>
<p>On 2/24/2012 5:19 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I see now why I get &quot;check&quot; failures from the opal atomics w/ XLC-9.0.
</span><br>
<span class="quotelev1">&gt; The inline asm is mildly incorrect and I am actually surprised gcc 
</span><br>
<span class="quotelev1">&gt; didn't produce bad code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patch(es) will be sent ASAP as I think this should be fixed for 1.5.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/23/2012 8:24 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is consistent with my findings w/ XLC (mostly on BG/L and BG/P 
</span><br>
<span class="quotelev2">&gt;&gt; front end nodes).
</span><br>
<span class="quotelev2">&gt;&gt; None of the 7.0,  8.0, 9.0 or 11.1 versions of XLC I tested could 
</span><br>
<span class="quotelev2">&gt;&gt; generate correct atomics.
</span><br>
<span class="quotelev2">&gt;&gt; They either failed at build time, or failed the tests in test/asm/.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/23/2012 8:17 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 24/02/12 15:12, Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suspect this is irrelevant, but I got a build failure trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compile it on our BG/P front end node (login node) with the IBM XL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oops, forgot how I built it..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PATH=/opt/ibmcmp/vac/bg/9.0/bin/:/opt/ibmcmp/vacpp/bg/9.0/bin:/opt/ibmcmp/xlf/bg/11.1/bin:$PATH 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=xlc CXX=xlC F77=xlf ./configure&amp;&amp;  make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - --      Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iEYEARECAAYFAk9HD1wACgkQO2KABBYQAh9EZgCcCz9x2i6KuE7/UpPzr194jHQD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rdcAni+dfEMhlqMzYMILn8jeS9yWlInu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =+rA4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>Previous message:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>In reply to:</strong> <a href="10601.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
<li><strong>Reply:</strong> <a href="10603.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc2 atomics fail w/ xlc-9"</a>
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
