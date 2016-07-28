<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 11:04:38 2013" -->
<!-- isoreceived="20130819150438" -->
<!-- sent="Mon, 19 Aug 2013 11:04:38 -0400 (EDT)" -->
<!-- isosent="20130819150438" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="alpine.LRH.2.03.1308191103330.25115_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="alpine.LRH.2.03.1308191052350.25115_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 11:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 18 Aug 2013, Richard Haney wrote:
<br>
<p><span class="quotelev1">&gt; Sorry about the last, attempted message being too large. &#160;I did not know 
</span><br>
<span class="quotelev1">&gt; that there was such a size limit. &#160;I am re-sending the last attempted 
</span><br>
<span class="quotelev1">&gt; message with the attachments removed. &#160;The relevant attachments were 
</span><br>
<span class="quotelev1">&gt; included with the original message with subject &quot;Assembler instruction 
</span><br>
<span class="quotelev1">&gt; errors for push and pop during make&quot;. &#160;I would appreciate any help anyone 
</span><br>
<span class="quotelev1">&gt; can provide.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At present I am trying to brush up on assembly &amp; machine coding concepts 
</span><br>
<span class="quotelev1">&gt; and to study the differences between 32-bit and 64-bit processing. 
</span><br>
<span class="quotelev1">&gt; &#160;Hopefully, that will allow me to create a fix for the problem. &#160;One hope 
</span><br>
<span class="quotelev1">&gt; is that, for the assembly programs in question, it does not matter whether 
</span><br>
<span class="quotelev1">&gt; they are assembled as 32-bit code &quot;as is&quot; with only an explicit invocation 
</span><br>
<span class="quotelev1">&gt; of the gnu assembler and a --32 flag adjustment or as 64-bit code with code 
</span><br>
<span class="quotelev1">&gt; adjustments. &#160;But at present that is just wishful thinking.
</span><br>
<p>I'm not familiar in detail with that flag, but I doubt that it would work. 
<br>
There are instructions (and encodings of instructions) that are valid in 
<br>
32-bit code and not in 64-bit code, plus, if the code is pushing things 
<br>
onto the stack, you need to use 64-bit pushes (and 64-bit registers when 
<br>
storing pointers) to interoperate with other 64-bit code.
<br>
<p>Are you sure that the code is building with the right assembly file? 
<br>
AMD64.asm looks to be using pushq, which is the right form to use for 
<br>
64-bit code.  I suspect that this is a configure issue (detecting your 
<br>
architecture as IA-32 and not x86-64), not a problem in the assembly files 
<br>
themselves.
<br>
<p>&nbsp;&nbsp;-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Maybe in reply to:</strong> <a href="22517.php">Richard Haney: "[OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22524.php">Richard Haney: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
