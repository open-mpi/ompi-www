<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 18:38:18 2012" -->
<!-- isoreceived="20120201233818" -->
<!-- sent="Wed, 01 Feb 2012 15:38:00 -0800" -->
<!-- isosent="20120201233800" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F29CCD8.3060604_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29C6EA.90204_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 18:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 3:12 PM, Paul H. Hargrove wrote:
<br>
[...]
<br>
<span class="quotelev1">&gt; This is WRONG.
</span><br>
<span class="quotelev1">&gt; The compiler has reported an error: &quot;(E) Missing argument(s)&quot; and yet 
</span><br>
<span class="quotelev1">&gt; exited with $? = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking at xlc docs to see if there is some compiler flag to be set.
</span><br>
<p>&nbsp;From &quot;man xlc&quot;:
<br>
<span class="quotelev1">&gt;          -qhalt=&lt;sev&gt;
</span><br>
<span class="quotelev1">&gt;                 Stops the compiler after the first phase if the 
</span><br>
<span class="quotelev1">&gt; severity level of errors detected
</span><br>
<span class="quotelev1">&gt;                 equals or exceeds the specified level, &lt;sev&gt;. The 
</span><br>
<span class="quotelev1">&gt; severity levels in increasing order
</span><br>
<span class="quotelev1">&gt;                 of severity are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 i = informational messages
</span><br>
<span class="quotelev1">&gt;                 w = warning messages
</span><br>
<span class="quotelev1">&gt;                 e = error messages (C only)
</span><br>
<span class="quotelev1">&gt;                 s = severe error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Default: -qhalt=s
</span><br>
<p>Which explains why an &quot;(E)&quot; message was non-fatal (both at configure 
<br>
time AND at build time).
<br>
<p>&lt;rant&gt;
<br>
Looking again at configure.ac I am not too surprised really.
<br>
In general my experience is that compilers don't consider too few or too 
<br>
many arguments to be fatal.
<br>
This is behavior is perhaps a hold-over from pre-ANSI days when 
<br>
prototype and/or stdargs were seldom used.
<br>
The result is that configure probes like the one for old-vs-new 
<br>
sched_setaffinity() are NOT reliable across compilers.
<br>
&lt;/rant&gt;
<br>
<p>With that out of the way, I am please to say that when configuring 
<br>
hwloc-1.3.1 with &quot;CFLAGS=-qhalt=e&quot; the correct variant of 
<br>
sched_setaffinity() is detected.  This gets rid of the messages 
<br>
regarding sched_setaffinity() at build time, and the related test 
<br>
failures w/ SIGSEGV.  (I still have my assetion failure in the 
<br>
linux-libnuma test, but we know that occurs w/ gcc as well).
<br>
<p>I am not sure if one should fix this by:
<br>
a) Document the need for CFLAGS=-qhalt=e
<br>
b) Force &quot;-qhalt=e&quot; at configure time when CC=xlc
<br>
c) Find some other way to fix the configure probe
<br>
<p>My vote is for &quot;(b)&quot;, but I don't know if that fits with the ompi/hwloc 
<br>
philosophy.
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
<li><strong>Next message:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2776.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
