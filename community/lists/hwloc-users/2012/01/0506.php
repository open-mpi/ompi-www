<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 17:36:02 2012" -->
<!-- isoreceived="20120112223602" -->
<!-- sent="Thu, 12 Jan 2012 23:35:56 +0100" -->
<!-- isosent="20120112223556" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="20120112223556.GV4233_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="280193076.357411.1326405146585.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2012-01-12 17:35:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew Helwer, le Thu 12 Jan 2012 22:52:26 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; C:\hwloc-1.3.1\src&gt;dolib.exe lib.exe X86 .libs/libhwloc.def libhwloc- .libs/libhwloc.lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This creates a .lib file, but when I use the VS compiler to compile and link against it, it asks for a dll at runtime.
</span><br>
<p>In mingw terms, .lib is meant for dynamic linking, not static linking.
<br>
the .a file is meant for static linking.
<br>
<p><span class="quotelev1">&gt; * VS does not know what __inline__ means
</span><br>
<p>And Solaris does not know what __inline means... Ok, I have put
<br>
compile-time #defines.
<br>
<p><span class="quotelev1">&gt; * VS spouts out a whole bunch of errors relating to the definition of __attribute__ and __deprecated__
</span><br>
<p>Ah, damn, configure replaces our specially-crafted values... I have
<br>
patched them.
<br>
<p><span class="quotelev1">&gt; COMPILING HWLOC ON WINDOWS WITH VS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; VS apparently has problems when functions are declared as static inline when using its C compiler. A way around this I've found is to explicitly pass it the /TP flag, which makes it use its C++ compiler. A bunch of errors about the identifier '__attribute__' being a syntax error then pop up, however, and I haven't found a way around those yet.
</span><br>
<p>These should go away with the next nightly snapshot.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="0498.php">Andrew Helwer: "[hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Reply:</strong> <a href="0507.php">Andrew Helwer: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
