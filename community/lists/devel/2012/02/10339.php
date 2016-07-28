<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 06:25:32 2012" -->
<!-- isoreceived="20120208112532" -->
<!-- sent="Wed, 08 Feb 2012 06:25:24 -0500" -->
<!-- isosent="20120208112524" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F325BA4.9080402_at_oracle.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 06:25:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10338.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/2012 4:25 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/7/2012 8:59 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This fixes all known issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, not quite...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've SUCCESSFULLY retested 44 out of the 55 cpu/os/compiler/abi 
</span><br>
<span class="quotelev1">&gt; combinations currently on my list.
</span><br>
<span class="quotelev1">&gt; I expect 9 more by the end of the day (the older/slower hosts), but 
</span><br>
<span class="quotelev1">&gt; two of my test hosts are down.
</span><br>
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
Can the LD_LIBRARY_PATH be substituted with a rpath change in LDFLAGS of 
<br>
the build?
<br>
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
I thought I responded to the above issue.  I think this may be a OS 
<br>
distribution (Solaris Studio assumption) issue.  On my RH system /lib 
<br>
contains the 32 libraries and /lib64 has the 64 bit libs.  I assume your 
<br>
system may have it the other way around (/lib = 64 bit libs and /lib32 
<br>
has 32 bit).  Can you confirm that your /lib contains 64 bit libs.  Also 
<br>
can you do a &quot;cc -### -m32&quot; compile and link of a simple program and 
<br>
confirm that the compiler is pulling in /lib (I am 99% certain it is).  
<br>
Also, is this /lib is 64 bit libraries a common thing, none of my Linux 
<br>
systems are set up this way.
<br>
<p>Anyways, I think maybe a note in the README is in store for such setups.
<br>
<pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10340.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10338.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10341.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
