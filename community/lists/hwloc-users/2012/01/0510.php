<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 19:43:51 2012" -->
<!-- isoreceived="20120113004351" -->
<!-- sent="Fri, 13 Jan 2012 01:43:45 +0100" -->
<!-- isosent="20120113004345" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="20120113004345.GH4233_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="130976496.357943.1326414927463.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 19:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew Helwer, le Fri 13 Jan 2012 01:35:27 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; It fails with the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Warning: linker path does not have real file for library -lgdi32.
</span><br>
<p>Ah, that's a dark bug in libtool.
<br>
<p><span class="quotelev1">&gt; gcc -I/cygdrive/c/hwloc-asdf/include -I/cygdrive/c/hwloc-asdf/include -I/cygdriv
</span><br>
<span class="quotelev1">&gt; e/c/hwloc-asdf/include    dolib.c   -o dolib
</span><br>
<span class="quotelev1">&gt; ./dolib &quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio 10.0/VC/bin/lib
</span><br>
<span class="quotelev1">&gt; &quot; X86 .libs/libhwloc.def libhwloc- .libs/libhwloc.lib
</span><br>
<span class="quotelev1">&gt; The system cannot find the path specified.
</span><br>
<span class="quotelev1">&gt; &quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio 10.0/VC/bin/lib&quot; /machi
</span><br>
<span class="quotelev1">&gt; ne:X86 /def:.libs/libhwloc.def /name:libhwloc- /out:.libs/libhwloc.lib failed
</span><br>
<span class="quotelev1">&gt; Makefile:758: recipe for target `.libs/libhwloc.lib' failed
</span><br>
<p>Well, AIUI, you don't actually need the shared version, so you can as
<br>
well pass --disable-shared to ./configure to just get rid of this bug.
<br>
<p>That said, isn't the just-uploaded-to-hwloc-website win64 build enough
<br>
for you?  It contains the libhwloc.a static build in lib/
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0511.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
