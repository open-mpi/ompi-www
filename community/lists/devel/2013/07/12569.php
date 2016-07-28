<?
$subject_val = "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 08:24:31 2013" -->
<!-- isoreceived="20130709122431" -->
<!-- sent="Tue, 09 Jul 2013 14:24:22 +0200" -->
<!-- isosent="20130709122422" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries" -->
<!-- id="51DC00F6.5090109_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHYyVz7DkQHMii+Qt9-w080noduMQjnAMXFDckFju8O1n6Bv6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 08:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12568.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 7/9/2013 2:01 PM, Vasiliy ha scritto:
<br>
<span class="quotelev1">&gt; Hi, Marco,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a looong string of characters, times as yours, and I'm actually
</span><br>
<span class="quotelev1">&gt; making a DSO build with everything included. Yes, it is the
</span><br>
<span class="quotelev1">&gt; bleeding-edge, however, patched Open MPI version 1.9a1 sources, on
</span><br>
<span class="quotelev1">&gt; Cygwin 64-bit version 1.7.21-6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have updated dozens of Cygwin packages to their 'bleeding-edge'
</span><br>
<span class="quotelev1">&gt; revisions, and successfully tested and compiled many of those,
</span><br>
<span class="quotelev1">&gt; flexible enough, further with -Ofast and &quot;plus&quot; optimization for my
</span><br>
<span class="quotelev1">&gt; projects. This has resulted in a tremendous speed increase, full
</span><br>
<span class="quotelev1">&gt; multithreading, and hot deliverables due to faster execution time.
</span><br>
<p>already building first openmpi package some months ago was bleeding edge 
<br>
;-)
<br>
<p>You are welcome to the party and let me know how proceed with dso;
<br>
on my build it is disabled on purpose as I was not able to build it also
<br>
on 32bit due to the unclear dependency tree.
<br>
<p>the undefined warning is usually releated to some type of
<br>
<p>&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,-no-undefined&quot;
<br>
<p>variants needed.
<br>
Unfortunately latest gcc does not ignore any more the &quot;-no-undefined&quot;
<br>
as unknown word and passing it to libtool is becoming a bit harder
<br>
that was in the past.
<br>
<p>Please remind that Cygwin 64 is also bleeding-edge; it is a good beta
<br>
but still a beta.
<br>
<p><span class="quotelev1">&gt; While I don't represent any organization view it's still an amateur
</span><br>
<span class="quotelev1">&gt; work done to the detriment of time for job hunting. I probably need to
</span><br>
<span class="quotelev1">&gt; pay more attention to the latter, so, to find out if I could complete
</span><br>
<span class="quotelev1">&gt; a DSO build before the hunting season starts. There is a well-funded
</span><br>
<span class="quotelev1">&gt; hope, though.
</span><br>
<p>I can not help here. Writing software is not my main activity, just a
<br>
side hobby.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Vasiliy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12570.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12568.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12566.php">Vasiliy: "Re: [OMPI devel] a bogus warning: undefined symbols not allowed in x86_64-pc-cygwin shared libraries"</a>
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
