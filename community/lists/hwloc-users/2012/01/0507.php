<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 18:13:16 2012" -->
<!-- isoreceived="20120112231316" -->
<!-- sent="Thu, 12 Jan 2012 16:13:10 -0700" -->
<!-- isosent="20120112231310" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808D9E3_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120112223556.GV4233_at_type.famille.thibault.fr" -->
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
<strong>From:</strong> Andrew Helwer (<em>Andrew.Helwer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 18:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; In mingw terms, .lib is meant for dynamic linking, not static linking.
</span><br>
<span class="quotelev1">&gt; the .a file is meant for static linking.
</span><br>
<p>How can I get it to create a static windows lib?
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-
</span><br>
<span class="quotelev1">&gt; bounces_at_[hidden]] On Behalf Of Samuel Thibault
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 12, 2012 3:36 PM
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Compiling hwloc into a static library on
</span><br>
<span class="quotelev1">&gt; Windows and Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Helwer, le Thu 12 Jan 2012 22:52:26 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; C:\hwloc-1.3.1\src&gt;dolib.exe lib.exe X86 .libs/libhwloc.def libhwloc-
</span><br>
<span class="quotelev2">&gt; &gt; .libs/libhwloc.lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This creates a .lib file, but when I use the VS compiler to compile
</span><br>
<span class="quotelev1">&gt; and link against it, it asks for a dll at runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In mingw terms, .lib is meant for dynamic linking, not static linking.
</span><br>
<span class="quotelev1">&gt; the .a file is meant for static linking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * VS does not know what __inline__ means
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And Solaris does not know what __inline means... Ok, I have put
</span><br>
<span class="quotelev1">&gt; compile-time #defines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * VS spouts out a whole bunch of errors relating to the definition of
</span><br>
<span class="quotelev2">&gt; &gt; __attribute__ and __deprecated__
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, damn, configure replaces our specially-crafted values... I have
</span><br>
<span class="quotelev1">&gt; patched them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; COMPILING HWLOC ON WINDOWS WITH VS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; VS apparently has problems when functions are declared as static
</span><br>
<span class="quotelev1">&gt; inline when using its C compiler. A way around this I've found is to
</span><br>
<span class="quotelev1">&gt; explicitly pass it the /TP flag, which makes it use its C++ compiler. A
</span><br>
<span class="quotelev1">&gt; bunch of errors about the identifier '__attribute__' being a syntax
</span><br>
<span class="quotelev1">&gt; error then pop up, however, and I haven't found a way around those yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These should go away with the next nightly snapshot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0508.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
