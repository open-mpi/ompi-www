<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 00:11:35 2012" -->
<!-- isoreceived="20120510041135" -->
<!-- sent="Wed, 09 May 2012 21:11:12 -0700" -->
<!-- isosent="20120510041112" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="4FAB3FE0.6020704_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FAB3C0A.6040901_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 00:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW:
<br>
GASNet makes the assumption that every C++ compiler groks &quot;inline&quot; and 
<br>
has never encountered any counter-examples.
<br>
<p>-Paul
<br>
<p>On 5/9/2012 8:54 PM, Christopher Samuel wrote:
<br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/05/12 07:40, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Huh -- really?  I always thought that the C++ language itself
</span><br>
<span class="quotelev2">&gt;&gt; included the keyword &quot;inline&quot;.
</span><br>
<span class="quotelev1">&gt; I asked via Twitter and got these responses..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Inline was part of C++98 - the first c++ standard, and
</span><br>
<span class="quotelev1">&gt; # the inline kwd is in the cfront 1.0 ('86) source. So
</span><br>
<span class="quotelev1">&gt; # functionally, yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # This may be a different question than &quot;have all C++
</span><br>
<span class="quotelev1">&gt; # compilers always accepted inline?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that autoconf has an inline test for C:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/software/autoconf/manual/autoconf-2.67/html_node/C-Compiler.html">http://www.gnu.org/software/autoconf/manual/autoconf-2.67/html_node/C-Compiler.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But not for C++:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gnu.org/savannah-checkouts/gnu/autoconf/manual/autoconf-2.69/html_node/C_002b_002b-Compiler.html">http://www.gnu.org/savannah-checkouts/gnu/autoconf/manual/autoconf-2.69/html_node/C_002b_002b-Compiler.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So perhaps the fact that they've never needed to implement
</span><br>
<span class="quotelev1">&gt; such a test is in itself a good guide ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
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
<span class="quotelev1">&gt; iEYEARECAAYFAk+rPAoACgkQO2KABBYQAh+fqwCfbsCOjeK5y+WEZnWQ1e+pQmQg
</span><br>
<span class="quotelev1">&gt; DhQAoJdN6S7IJpUZ51IlXbE0QJOI1jjI
</span><br>
<span class="quotelev1">&gt; =dWPv
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Previous message:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3077.php">Christopher Samuel: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>Reply:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
