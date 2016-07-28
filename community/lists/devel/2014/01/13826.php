<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 11:48:47 2014" -->
<!-- isoreceived="20140121164847" -->
<!-- sent="Tue, 21 Jan 2014 08:48:13 -0800" -->
<!-- isosent="20140121164813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail" -->
<!-- id="5A05491E-CCE2-473E-982B-E722EE412F4E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16gpFYQ8rjs0WWnAKD4ub9pVYMz=-QhEG4S=J1_jPJVJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 11:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13827.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13825.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13822.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Reply:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I dug back and found that your trunk patch still applies, so I committed it and moved it to 1.7.4. So if you wouldn't mind verifying it once the nightly tarball is available, I'd appreciate it.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Jan 20, 2014, at 9:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building a recent (1.7.4rc2r30303) v1.7 tarball on a (QEMU-emulated) MIPS64 system I find that the opal atomics test fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applying the &quot;for trunk&quot; patch I attached to ticket #3039 roughly 1 year ago resolves the problems for me.  I suppose it would be great if at least one person with real MIPS h/w could verify.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I am concerned there is no &quot;pressure&quot; to push this into 1.7.4 if time is tight.  I am just (re)testing this platform and reporting the results for completeness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13827.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13825.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13822.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Reply:</strong> <a href="13842.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
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
