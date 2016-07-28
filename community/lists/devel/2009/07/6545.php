<?
$subject_val = "Re: [OMPI devel] Allgather failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 12:35:47 2009" -->
<!-- isoreceived="20090729163547" -->
<!-- sent="Wed, 29 Jul 2009 09:35:39 -0700" -->
<!-- isosent="20090729163539" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Allgather failures?" -->
<!-- id="4A707A5B.7010205_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1248883218.4051.0.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Allgather failures?<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 12:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Tue, 2009-07-28 at 19:06 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; In other words, a divide-by-zero floating point exception on a  
</span><br>
<span class="quotelev2">&gt;&gt; collective test.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To throw another question into the mix why are the collective tests
</span><br>
<span class="quotelev1">&gt; using floating point calculations in the first place?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I believe this is a case of INTEGER division by zero raising SIGFPE:
<br>
<span class="quotelev1">&gt; [odin001:31038] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [odin001:31038] Failing at address: 0x804c8c9 
</span><br>
-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6546.php">Mouhamed Gueye: "[OMPI devel] Device failover on ob1"</a>
<li><strong>Previous message:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
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
