<?
$subject_val = "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 09:07:46 2013" -->
<!-- isoreceived="20130821130746" -->
<!-- sent="Wed, 21 Aug 2013 09:07:44 -0400" -->
<!-- isosent="20130821130744" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8" -->
<!-- id="1377090464.7099.12423077.5760A055_at_webmail.messagingengine.com" -->
<!-- inreplyto="CAKPyHN0Hp6P+XfhM2jqDbrmJes4HYX6F6_6vk6iQ3CGwtWotEQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-21 09:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies; I just realized that I was compiling with the LLVM
<br>
dragonegg 3.4 GCC plugin, which apparently does not support all of GCC
<br>
yet.  Hopefully this will be of some help to someone in the future!
<br>
<p><pre>
-- 
  Hugo Gagnon
On Wed, Aug 21, 2013, at 7:07, Bert Wesarg wrote:
&gt; Hugo,
&gt; 
&gt; On Tue, Aug 20, 2013 at 6:09 PM, Hugo Gagnon
&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
&gt; &gt; Hi,
&gt; &gt;
&gt; &gt; I'm encountering this error during &quot;make all&quot;:
&gt; &gt;
&gt; &gt; Undefined symbols for architecture x86_64:
&gt; &gt;   &quot;___atomic_fetch_add_4&quot;, referenced from:
&gt; &gt;       std::locale::locale&lt;SpaceSeparator&gt;(std::locale const&amp;,
&gt; &gt;       SpaceSeparator*) in otfprofile-create_latex.o
&gt; &gt;
&gt; &gt; See attached for the complete output.
&gt; 
&gt; while I'm not a Mac use at all, but I have colleques which developed
&gt; this code in question on there Mac system and do not have this error.
&gt; I can only guess that the used MacPorts GCC is somehow is broken. If
&gt; at all this reference to the function comes from inside the C++ STL
&gt; headers, not from the to be compiled code. Thus maybe the wrong C++
&gt; STL headers are used. Could you provide the preprocessed output of the
&gt; otfprofile-create_latex.o target. Than we could check from where the
&gt; STL headers are taken.
&gt; 
&gt; HTH,
&gt; Bert
&gt; 
&gt; &gt;
&gt; &gt; Thanks,
&gt; &gt; --
&gt; &gt;   Hugo Gagnon
&gt; &gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22534.php">Eloi Gaudry: "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22532.php">Bert Wesarg: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
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
