<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 06:26:32 2012" -->
<!-- isoreceived="20120510102632" -->
<!-- sent="Thu, 10 May 2012 06:26:27 -0400" -->
<!-- isosent="20120510102627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use plain &amp;quot;inline&amp;quot; in C++" -->
<!-- id="8F32AE60-485D-428D-BF50-4AC100BF3F05_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHwLALNdG9dFGvwrF4vFUrpmcSzY4XFAPL=BjVWca62ZjWZsqQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 06:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3081.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4477)"</a>
<li><strong>Previous message:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All these responses are good enough for me.  Thanks everyone!
<br>
<p>On May 10, 2012, at 12:19 AM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; MySQL also uses the &quot;inline&quot; keyword, and MySQL is built with many
</span><br>
<span class="quotelev1">&gt; different C++ compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reference - warning, GPL code owned by Oracle :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://bazaar.launchpad.net/~mysql/mysql-server/trunk/view/head:/include/my_sys.h">http://bazaar.launchpad.net/~mysql/mysql-server/trunk/view/head:/include/my_sys.h</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And Wikipedia also has a few things related to Visual Studio's __forceinline:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://en.wikipedia.org/wiki/Inline_function#Microsoft_Visual_C.2B.2B_specific">http://en.wikipedia.org/wiki/Inline_function#Microsoft_Visual_C.2B.2B_specific</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, I think &quot;inline&quot; is supported on pretty much every platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler / Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 10, 2012 at 12:11 AM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW:
</span><br>
<span class="quotelev2">&gt;&gt; GASNet makes the assumption that every C++ compiler groks &quot;inline&quot; and has
</span><br>
<span class="quotelev2">&gt;&gt; never encountered any counter-examples.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/9/2012 8:54 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/05/12 07:40, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Huh -- really?  I always thought that the C++ language itself
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; included the keyword &quot;inline&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I asked via Twitter and got these responses..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Inline was part of C++98 - the first c++ standard, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # the inline kwd is in the cfront 1.0 ('86) source. So
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # functionally, yes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...and...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This may be a different question than &quot;have all C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # compilers always accepted inline?&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I note that autoconf has an inline test for C:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.gnu.org/software/autoconf/manual/autoconf-2.67/html_node/C-Compiler.html">http://www.gnu.org/software/autoconf/manual/autoconf-2.67/html_node/C-Compiler.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But not for C++:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.gnu.org/savannah-checkouts/gnu/autoconf/manual/autoconf-2.69/html_node/C_002b_002b-Compiler.html">http://www.gnu.org/savannah-checkouts/gnu/autoconf/manual/autoconf-2.69/html_node/C_002b_002b-Compiler.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So perhaps the fact that they've never needed to implement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such a test is in itself a good guide ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - --      Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
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
<span class="quotelev3">&gt;&gt;&gt; iEYEARECAAYFAk+rPAoACgkQO2KABBYQAh+fqwCfbsCOjeK5y+WEZnWQ1e+pQmQg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DhQAoJdN6S7IJpUZ51IlXbE0QJOI1jjI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =dWPv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3081.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4477)"</a>
<li><strong>Previous message:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<li><strong>In reply to:</strong> <a href="3079.php">Rayson Ho: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3076.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use plain &quot;inline&quot; in C++"</a>
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
