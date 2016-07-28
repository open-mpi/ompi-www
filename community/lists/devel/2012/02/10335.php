<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 21:57:22 2012" -->
<!-- isoreceived="20120208025722" -->
<!-- sent="Tue, 07 Feb 2012 18:57:00 -0800" -->
<!-- isosent="20120208025700" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F31E47C.4050204_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F31A7B4.20002_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc5 has been released<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 21:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10334.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10334.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/2012 2:37 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + &quot;make check&quot; fails atomics tests using GCCFSS-4.0.4 compilers on 
</span><br>
<span class="quotelev1">&gt; Solaris10/SPARC
</span><br>
<span class="quotelev1">&gt; Originally reported in: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10234.php">http://www.open-mpi.org/community/lists/devel/2012/01/10234.php</a>
</span><br>
<span class="quotelev1">&gt; This is a matter of the Sun/Oracle fork of GCC (known as GCC For SPARC 
</span><br>
<span class="quotelev1">&gt; Systems, or GCCFSS) being buggy with respect to GNU inline asm.
</span><br>
<span class="quotelev1">&gt; The original failures were with gccfss-4.0.4, but am now retested with 
</span><br>
<span class="quotelev1">&gt; gccfss-4.3.3.
</span><br>
<span class="quotelev1">&gt; I'll report on those results later. 
</span><br>
<p>Use of gccfss-4.3.3 is not an improvement.
<br>
Instead of failing the atomic_cmpset test, the compiler HANGS when 
<br>
compiling atomic_cmpset.c.
<br>
I allowed the compiler just over 4 hours accumulated CPU time before 
<br>
being convinced it was hung.
<br>
<p>So, I'd like to request documenting &quot;gccfss&quot; as unusable in README.
<br>
This is important because this broken compiler is installed as 
<br>
/usr/bin/gcc on some Solaris systems.
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
<li><strong>Next message:</strong> <a href="10336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10334.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10334.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
