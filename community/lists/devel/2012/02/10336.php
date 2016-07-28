<?
$subject_val = "Re: [OMPI devel] 1.4.5rc5 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 22:55:02 2012" -->
<!-- isoreceived="20120208035502" -->
<!-- sent="Tue, 07 Feb 2012 19:54:40 -0800" -->
<!-- isosent="20120208035440" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc5 has been released" -->
<!-- id="4F31F200.7080004_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-07 22:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10338.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/7/2012 1:25 PM, Paul H. Hargrove wrote:
<br>
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
<p>My testing is complete for this rc:
<br>
+ 54 of my 55 configs have been tested, one host is down
<br>
<p>Of those 54:
<br>
+ 47 require nothing &quot;extra&quot; (just --prefix, CC &amp; friends, and CFLAGS &amp; 
<br>
friends for non-default ABIs)
<br>
+ 2 configs using Solaris Studio compilers on Linux x86-64 w/ -m32 
<br>
require setting LD_LIBRARY_PATH
<br>
+ 2 OpenBSD configs require --disable-io-romio (as documented)
<br>
+ 2 configs using gccfss FAILs &quot;make check&quot; as described previously
<br>
+ 1 config using PGI compilers on MacOS Lion failed &quot;make all&quot;
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
<li><strong>Next message:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10335.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>In reply to:</strong> <a href="10333.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10337.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Reply:</strong> <a href="10338.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc5 has been released"</a>
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
