<?
$subject_val = "Re: [OMPI devel] Please test: v1.10.1rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 00:04:40 2015" -->
<!-- isoreceived="20151030040440" -->
<!-- sent="Thu, 29 Oct 2015 21:04:35 -0700" -->
<!-- isosent="20151030040435" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please test: v1.10.1rc3" -->
<!-- id="CAAvDA14sJSKkw+Cmp1tsa=3NWUfJFfjY03213GMbSWnjYN4odQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16K-2ynVB7u7zHDcMHC2s9Vjb69_5=DSBa_Mi8xG_BBEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Please test: v1.10.1rc3<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 00:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18320.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18318.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>In reply to:</strong> <a href="18313.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct 29, 2015 at 5:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
[...]
<br>
<p><span class="quotelev1">&gt; For the first time I was also able to (attempt to) test SPARC64 via QEMU.
</span><br>
<span class="quotelev1">&gt; I have a &quot;very odd&quot; failure on this system in which &quot;@SET_MAKE@&quot; appears
</span><br>
<span class="quotelev1">&gt; un-expanded in several generated Makefiles.
</span><br>
<span class="quotelev1">&gt; For that reason the testing on this platform did not finish.
</span><br>
<span class="quotelev1">&gt; I am still investigating, but currently am assuming this is some issue
</span><br>
<span class="quotelev1">&gt; like sed crashing (due to bad emulation?) rather than anything in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
[...]
<br>
<p>Each time I run config.status in the build directory, a *different* set of
<br>
random Makefiles end up with unexpanded instances of &quot;@SET_MAKE@&quot;.
<br>
I don't know what other configure substitutions might be passing through
<br>
unexpanded.
<br>
Anyway, I cannot conceive of any way in which this behavior could be Open
<br>
MPI's fault.
<br>
So I am going to discard the emulated SPARC64 system as grossly unreliable.
<br>
<p>-Paul
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18320.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18318.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>In reply to:</strong> <a href="18313.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
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
