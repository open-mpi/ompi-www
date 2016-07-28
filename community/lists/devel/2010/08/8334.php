<?
$subject_val = "[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 22:06:26 2010" -->
<!-- isoreceived="20100825020626" -->
<!-- sent="Tue, 24 Aug 2010 19:06:08 -0700" -->
<!-- isosent="20100825020608" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C747A90.3050507_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] README nit pick (both 1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 22:06:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8335.php">Paul H. Hargrove: "[OMPI devel] Success on FreeBSD-8.0 (both 1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the following in the Compiler Notes of the Open MPI README (both 
<br>
1.5rc5 and 1.4.3rc1)
<br>
<span class="quotelev1">&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev1">&gt;   default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev1">&gt;   targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev1">&gt;   done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev1">&gt;   -xarch=v8plus for the Sun compilers, -mv8plus for GCC.
</span><br>
<p>However, this leads to the following warning on every file compiled with 
<br>
the 5.10 (aka Studio 12) compilers:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc: Warning: -xarch=v8plus is deprecated, use -m32 -xarch=sparc instead
<br>
<p>So, the README could use an alternate recommendation for the more recent 
<br>
Sun C compilers.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8335.php">Paul H. Hargrove: "[OMPI devel] Success on FreeBSD-8.0 (both 1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.3rc1 out"</a>
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
