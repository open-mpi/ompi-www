<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 09:57:33 2012" -->
<!-- isoreceived="20120208145733" -->
<!-- sent="Wed, 08 Feb 2012 09:57:25 -0500" -->
<!-- isosent="20120208145725" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F328D55.6060902_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F31E47C.4050204_at_lbl.gov" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 09:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10339.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/2012 9:57 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/7/2012 2:37 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + &quot;make check&quot; fails atomics tests using GCCFSS-4.0.4 compilers on 
</span><br>
<span class="quotelev2">&gt;&gt; Solaris10/SPARC
</span><br>
<span class="quotelev2">&gt;&gt; Originally reported in: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10234.php">http://www.open-mpi.org/community/lists/devel/2012/01/10234.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; This is a matter of the Sun/Oracle fork of GCC (known as GCC For 
</span><br>
<span class="quotelev2">&gt;&gt; SPARC Systems, or GCCFSS) being buggy with respect to GNU inline asm.
</span><br>
<span class="quotelev2">&gt;&gt; The original failures were with gccfss-4.0.4, but am now retested 
</span><br>
<span class="quotelev2">&gt;&gt; with gccfss-4.3.3.
</span><br>
<span class="quotelev2">&gt;&gt; I'll report on those results later. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use of gccfss-4.3.3 is not an improvement.
</span><br>
<span class="quotelev1">&gt; Instead of failing the atomic_cmpset test, the compiler HANGS when 
</span><br>
<span class="quotelev1">&gt; compiling atomic_cmpset.c.
</span><br>
<span class="quotelev1">&gt; I allowed the compiler just over 4 hours accumulated CPU time before 
</span><br>
<span class="quotelev1">&gt; being convinced it was hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'd like to request documenting &quot;gccfss&quot; as unusable in README.
</span><br>
<span class="quotelev1">&gt; This is important because this broken compiler is installed as 
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc on some Solaris systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ugh.  Isn't there a configure option to not use inline asm (looks like 
<br>
no to me)?  I'll have to see if Oracle has a bug on this but I think 
<br>
Paul is right that this should be documented in the README.  I'll do it 
<br>
in conjunction with the 64 bit /lib issue once Paul confirms my suspicions.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10340/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10339.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
