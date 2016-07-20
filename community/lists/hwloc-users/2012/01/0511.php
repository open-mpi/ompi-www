<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 19:52:47 2012" -->
<!-- isoreceived="20120113005247" -->
<!-- sent="Thu, 12 Jan 2012 17:52:40 -0700" -->
<!-- isosent="20120113005240" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808D9FB_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120113004345.GH4233_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-01-12 19:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0512.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand. Can you link to .a files with VS?
<br>
<p>I tried linking to the .lib file in the 64-bit release. I get only unresolved external symbol errors.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-
</span><br>
<span class="quotelev1">&gt; bounces_at_[hidden]] On Behalf Of Samuel Thibault
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 12, 2012 5:44 PM
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Compiling hwloc into a static library on
</span><br>
<span class="quotelev1">&gt; Windows and Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Helwer, le Fri 13 Jan 2012 01:35:27 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; It fails with the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Warning: linker path does not have real file for library -lgdi32.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, that's a dark bug in libtool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gcc -I/cygdrive/c/hwloc-asdf/include -I/cygdrive/c/hwloc-asdf/include
</span><br>
<span class="quotelev1">&gt; -I/cygdriv
</span><br>
<span class="quotelev2">&gt; &gt; e/c/hwloc-asdf/include    dolib.c   -o dolib
</span><br>
<span class="quotelev2">&gt; &gt; ./dolib &quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio
</span><br>
<span class="quotelev2">&gt; &gt; 10.0/VC/bin/lib &quot; X86 .libs/libhwloc.def libhwloc- .libs/libhwloc.lib
</span><br>
<span class="quotelev2">&gt; &gt; The system cannot find the path specified.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;/cygdrive/c/Program Files (x86)/Microsoft Visual Studio
</span><br>
<span class="quotelev2">&gt; &gt; 10.0/VC/bin/lib&quot; /machi
</span><br>
<span class="quotelev2">&gt; &gt; ne:X86 /def:.libs/libhwloc.def /name:libhwloc-
</span><br>
<span class="quotelev1">&gt; /out:.libs/libhwloc.lib
</span><br>
<span class="quotelev2">&gt; &gt; failed
</span><br>
<span class="quotelev2">&gt; &gt; Makefile:758: recipe for target `.libs/libhwloc.lib' failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, AIUI, you don't actually need the shared version, so you can as
</span><br>
<span class="quotelev1">&gt; well pass --disable-shared to ./configure to just get rid of this bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, isn't the just-uploaded-to-hwloc-website win64 build enough
</span><br>
<span class="quotelev1">&gt; for you?  It contains the libhwloc.a static build in lib/
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
<li><strong>Next message:</strong> <a href="0512.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
