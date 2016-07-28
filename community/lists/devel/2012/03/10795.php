<?
$subject_val = "Re: [OMPI devel] New MOSIX components draft";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 31 19:29:02 2012" -->
<!-- isoreceived="20120331232902" -->
<!-- sent="Sun, 01 Apr 2012 02:28:50 +0300" -->
<!-- isosent="20120331232850" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New MOSIX components draft" -->
<!-- id="4F779332.8050701_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F772AFC.8050301_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New MOSIX components draft<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-31 19:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've added some documentation and made a few other changes in the hope 
<br>
of making the code more readable (the attached diff replaces the 
<br>
previous one), though the BTL is still giving me that error. There are 
<br>
some TODOs in the code where I was unsure about the code (it should 
<br>
still work - I'm not aware of any code missing), and I'll appreciate any 
<br>
comments...
<br>
<p>Here's an example: Suppose I have a TCP and a UDP channel in parallel. 
<br>
This is not critical for the first version (I'm not using UDP before I 
<br>
make TCP work), but I an curious as to how I can make the upper layers 
<br>
make use of both according to the task at hand. It would seem that TCP 
<br>
requires less code overhead, but requires more resources then UDP, but I 
<br>
ran a few tests and it seems TCP can beat UDP in performance is some 
<br>
scenarios... It sounds odd to me, but this may be the result of 
<br>
intensive kernel optimizations on the TCP side. Still, UDP may perform 
<br>
better with fire-and-forget scenarios.
<br>
<p>Thanks a lot (and sorry for the hassle),
<br>
Alex
<br>
<p><p>On 03/31/2012 07:04 PM, Alex Margolin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think i'm close to finishing an initial version of the MOSIX support 
</span><br>
<span class="quotelev1">&gt; for open-mpi. A perliminary draft is attached.
</span><br>
<span class="quotelev1">&gt; The support consists of two modules: ODLS module for launching 
</span><br>
<span class="quotelev1">&gt; processes under MOSIX, and BTL module for efficient communication 
</span><br>
<span class="quotelev1">&gt; between processes.
</span><br>
<span class="quotelev1">&gt; I'm not quite there yet - I'm sure the BTL module needs more work... 
</span><br>
<span class="quotelev1">&gt; first because it fails (see error output below) and second because I'm 
</span><br>
<span class="quotelev1">&gt; not sure I got all the function output right. I've written some 
</span><br>
<span class="quotelev1">&gt; documentation inside the code, which is pretty short at the moment. 
</span><br>
<span class="quotelev1">&gt; The ODLS component is working fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10795/mosix_components.diff">mosix_components.diff</a>
</ul>
<!-- attachment="mosix_components.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>Previous message:</strong> <a href="10794.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
<li><strong>In reply to:</strong> <a href="10792.php">Alex Margolin: "[OMPI devel] New MOSIX components draft"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/04/10796.php">Alex Margolin: "Re: [OMPI devel] New MOSIX components draft"</a>
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
