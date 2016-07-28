<?
$subject_val = "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 07:10:59 2012" -->
<!-- isoreceived="20120924111059" -->
<!-- sent="Mon, 24 Sep 2012 07:10:47 -0400" -->
<!-- isosent="20120924111047" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc" -->
<!-- id="50603FB7.3030304_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="003401cd9a11$c422a9e0$4c67fda0$_at_comcast.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 07:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20270.php">Siegmar Gross: "[OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/24/2012 1:02 AM, Roy Hogan wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to build version 1.6.1 on Cygwin (1.7), using the gcc 4.5.3 
</span><br>
<span class="quotelev1">&gt; compilers. I need to use the Cygwin linux environment specifically so 
</span><br>
<span class="quotelev1">&gt; I&#146;m not interested in the cmake option on the windows side. I&#146;ve 
</span><br>
<span class="quotelev1">&gt; searched the archives, but don&#146;t find much on the Cygwin build option 
</span><br>
<span class="quotelev1">&gt; over the last couple of years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve attached the logs for my &#147;configure&#148; and &#147;make all&#148; steps. Our 
</span><br>
<span class="quotelev1">&gt; email filter will not allow me to send zipped files, so I&#146;ve attached 
</span><br>
<span class="quotelev1">&gt; the two log files. I&#146;d appreciate any advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Perhaps you mean cygwin posix environment.
<br>
Evidently, your Microsoft-specific macros required in windows.c aren't 
<br>
handled by configury under cygwin, at least not if you don't specify 
<br>
that you want them. As you hinted, cygwin supports a more linux-like 
<br>
environment, although many of those macros should be handled by #include 
<br>
&quot;windows.h&quot;.
<br>
Do you have a reason for withholding information such as which Windows 
<br>
version you want to support, and your configure commands?
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20272.php">Siegmar Gross: "[OMPI users] problem with 32-bit mpiJava on openmpi-1.9a1r27361"</a>
<li><strong>Previous message:</strong> <a href="20270.php">Siegmar Gross: "[OMPI users] 64-bit mpiJava in a heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="20268.php">Roy Hogan: "[OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20273.php">marco atzeri: "Re: [OMPI users] Compiling 1.6.1 with cygwin 1.7 and gcc"</a>
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
