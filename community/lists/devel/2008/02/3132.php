<?
$subject_val = "Re: [OMPI devel] cpu stride and offset for processor binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 19:25:42 2008" -->
<!-- isoreceived="20080206002542" -->
<!-- sent="Tue, 05 Feb 2008 17:25:33 -0700" -->
<!-- isosent="20080206002533" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cpu stride and offset for processor binding" -->
<!-- id="C3CE4C8D.44F5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A8F8D5.50007_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cpu stride and offset for processor binding<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 19:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>In reply to:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would think that the syntax being implemented by Voltaire could be
<br>
extended to support this need, but I'll leave that up to them for comment.
<br>
<p><p><p>On 2/5/08 5:01 PM, &quot;Pak Lui&quot; &lt;Pak.Lui_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to implement something in the paffinity:solaris that would
</span><br>
<span class="quotelev1">&gt; allow me to specify the cpu id with striding (aka in a sequence) when
</span><br>
<span class="quotelev1">&gt; selecting which cpu ids to bind. e.g. For a cpu set that looks like
</span><br>
<span class="quotelev1">&gt; this: { 0 1 2 3 4 5 6 7 }, and stride is to 2, and offset is to 1 (which
</span><br>
<span class="quotelev1">&gt; means start at pos 1), then ranks will bind to the cpus in the following
</span><br>
<span class="quotelev1">&gt; order: { 1 3 5 7 2 4 6 0 }. The obvious intent is to take advantage of
</span><br>
<span class="quotelev1">&gt; the perf by allocating the ranks in a certain order on multi-core systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then we realized this may be implemented elsewhere outside the
</span><br>
<span class="quotelev1">&gt; solaris paffinity code. I see something in trac #1023 that may allow me
</span><br>
<span class="quotelev1">&gt; to specify a cpuid or cores in a range but it doesn't seem to allow me
</span><br>
<span class="quotelev1">&gt; specify the cpu id to bind in strides. And with that, rank specification
</span><br>
<span class="quotelev1">&gt; may seem to be doable, but I may end up entering a long list of cpu ids
</span><br>
<span class="quotelev1">&gt; in strides manually, if the machine happens to have many cpus. Plus
</span><br>
<span class="quotelev1">&gt; another down side is that Solaris doesn't seem to have stable interface
</span><br>
<span class="quotelev1">&gt; for me to extract out the core/socket information from the kernel. So
</span><br>
<span class="quotelev1">&gt; striding might be the only way for me to go for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some unspoken feature that's coming down the pipe that may
</span><br>
<span class="quotelev1">&gt; allow me to specify cpuids in a sequence, or we already have some
</span><br>
<span class="quotelev1">&gt; feature like that that I didn't know about? I look around but I don't
</span><br>
<span class="quotelev1">&gt; see anything like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any comments.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>In reply to:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
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
