<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 17:38:01 2012" -->
<!-- isoreceived="20120207223801" -->
<!-- sent="Tue, 07 Feb 2012 14:37:40 -0800" -->
<!-- isosent="20120207223740" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F31A7B4.20002_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3196C7.7040407_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-07 17:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/2012 1:25 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far I see only two problems that remain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + I can't build w/ the PGI compilers on MacOS Lion.
</span><br>
<span class="quotelev1">&gt; This was previously reported in 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10258.php">http://www.open-mpi.org/community/lists/devel/2012/01/10258.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Building w/ Solaris Studio 12.2 or 12.3 on Linux x86-64, with &quot;-m32&quot; 
</span><br>
<span class="quotelev1">&gt; required setting LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; This is could either be Oracle's bug in the compiler, or a libtool 
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; My report was: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10272.php">http://www.open-mpi.org/community/lists/devel/2012/01/10272.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>With more of my results back, I can add the following to the 
<br>
known-but-not-resolved list:
<br>
<p>+ &quot;make check&quot; fails atomics tests using GCCFSS-4.0.4 compilers on 
<br>
Solaris10/SPARC
<br>
Originally reported in: 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10234.php">http://www.open-mpi.org/community/lists/devel/2012/01/10234.php</a>
<br>
This is a matter of the Sun/Oracle fork of GCC (known as GCC For SPARC 
<br>
Systems, or GCCFSS) being buggy with respect to GNU inline asm.
<br>
The original failures were with gccfss-4.0.4, but am now retested with 
<br>
gccfss-4.3.3.
<br>
I'll report on those results later.
<br>
<p>BTW:
<br>
Due to a scripting error, all these tests are actually against the 
<br>
openmpi-1.4.5rc5r25855 tarball rather than the genuine 1.4.5rc5.
<br>
I doubt there is any meaningful difference, but figured full disclosure 
<br>
is best :-).
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
<li><strong>Next message:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
