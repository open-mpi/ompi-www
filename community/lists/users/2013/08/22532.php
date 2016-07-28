<?
$subject_val = "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 07:07:31 2013" -->
<!-- isoreceived="20130821110731" -->
<!-- sent="Wed, 21 Aug 2013 13:07:30 +0200" -->
<!-- isosent="20130821110730" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8" -->
<!-- id="CAKPyHN0Hp6P+XfhM2jqDbrmJes4HYX6F6_6vk6iQ3CGwtWotEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1377014971.28353.12055717.33A8BB57_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-21 07:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Reply:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hugo,
<br>
<p>On Tue, Aug 20, 2013 at 6:09 PM, Hugo Gagnon
<br>
&lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm encountering this error during &quot;make all&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;___atomic_fetch_add_4&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       std::locale::locale&lt;SpaceSeparator&gt;(std::locale const&amp;,
</span><br>
<span class="quotelev1">&gt;       SpaceSeparator*) in otfprofile-create_latex.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See attached for the complete output.
</span><br>
<p>while I'm not a Mac use at all, but I have colleques which developed
<br>
this code in question on there Mac system and do not have this error.
<br>
I can only guess that the used MacPorts GCC is somehow is broken. If
<br>
at all this reference to the function comes from inside the C++ STL
<br>
headers, not from the to be compiled code. Thus maybe the wrong C++
<br>
STL headers are used. Could you provide the preprocessed output of the
<br>
otfprofile-create_latex.o target. Than we could check from where the
<br>
STL headers are taken.
<br>
<p>HTH,
<br>
Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Hugo Gagnon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Previous message:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>In reply to:</strong> <a href="22519.php">Hugo Gagnon: "[OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>Reply:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
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
