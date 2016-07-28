<?
$subject_val = "[OMPI devel] cpu stride and offset for processor binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 19:01:38 2008" -->
<!-- isoreceived="20080206000138" -->
<!-- sent="Tue, 05 Feb 2008 19:01:25 -0500" -->
<!-- isosent="20080206000125" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="[OMPI devel] cpu stride and offset for processor binding" -->
<!-- id="47A8F8D5.50007_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] cpu stride and offset for processor binding<br>
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 19:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3130.php">Ralph H Castain: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Reply:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Maybe reply:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am trying to implement something in the paffinity:solaris that would 
<br>
allow me to specify the cpu id with striding (aka in a sequence) when 
<br>
selecting which cpu ids to bind. e.g. For a cpu set that looks like 
<br>
this: { 0 1 2 3 4 5 6 7 }, and stride is to 2, and offset is to 1 (which 
<br>
means start at pos 1), then ranks will bind to the cpus in the following 
<br>
order: { 1 3 5 7 2 4 6 0 }. The obvious intent is to take advantage of 
<br>
the perf by allocating the ranks in a certain order on multi-core systems.
<br>
<p>But then we realized this may be implemented elsewhere outside the 
<br>
solaris paffinity code. I see something in trac #1023 that may allow me 
<br>
to specify a cpuid or cores in a range but it doesn't seem to allow me 
<br>
specify the cpu id to bind in strides. And with that, rank specification 
<br>
may seem to be doable, but I may end up entering a long list of cpu ids 
<br>
in strides manually, if the machine happens to have many cpus. Plus 
<br>
another down side is that Solaris doesn't seem to have stable interface 
<br>
for me to extract out the core/socket information from the kernel. So 
<br>
striding might be the only way for me to go for now.
<br>
<p>Is there some unspoken feature that's coming down the pipe that may 
<br>
allow me to specify cpuids in a sequence, or we already have some 
<br>
feature like that that I didn't know about? I look around but I don't 
<br>
see anything like this.
<br>
<p>Thanks in advance for any comments.
<br>
<p><pre>
-- 
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3130.php">Ralph H Castain: "Re: [OMPI devel] VT in trunk + how to disable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Reply:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Maybe reply:</strong> <a href="3133.php">Lenny Verkhovsky: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
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
