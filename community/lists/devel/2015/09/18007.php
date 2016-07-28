<?
$subject_val = "Re: [OMPI devel] Master problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 05:05:46 2015" -->
<!-- isoreceived="20150911090546" -->
<!-- sent="Fri, 11 Sep 2015 02:05:43 -0700" -->
<!-- isosent="20150911090543" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master problem" -->
<!-- id="EE8CDFA8-786C-4881-95BD-B839BAFFD156_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B1FA0333-6A29-4D90-9771-FD9440EAAD31_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-11 05:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
<li><strong>Previous message:</strong> <a href="18006.php">Ralph Castain: "[OMPI devel] Master problem"</a>
<li><strong>In reply to:</strong> <a href="18006.php">Ralph Castain: "[OMPI devel] Master problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have determined that it is the sm btl that is hanging, and that it has something to do with locality. I&#226;&#128;&#153;ll have to dig deeper in the morning.
<br>
<p>For now, I have reverted the commit that seems to be causing the problem. Sorry for the trouble.
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Sep 11, 2015, at 1:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yo folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just discovered that something is borked in the master - we are hanging on multi-node startup. I&#226;&#128;&#153;m unsure where it crept into the system, but sometime in the last 24 hours, so I&#226;&#128;&#153;ll try to figure it out. Looks like it is something in PMIx, but I haven&#226;&#128;&#153;t confirmed it yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a heads-up
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18008.php">George Bosilca: "Re: [OMPI devel] issue with group sentinel values"</a>
<li><strong>Previous message:</strong> <a href="18006.php">Ralph Castain: "[OMPI devel] Master problem"</a>
<li><strong>In reply to:</strong> <a href="18006.php">Ralph Castain: "[OMPI devel] Master problem"</a>
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
