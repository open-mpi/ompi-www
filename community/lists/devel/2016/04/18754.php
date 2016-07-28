<?
$subject_val = "Re: [OMPI devel] query on atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 10 02:51:22 2016" -->
<!-- isoreceived="20160410065122" -->
<!-- sent="Sun, 10 Apr 2016 08:50:48 +0200" -->
<!-- isosent="20160410065048" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] query on atomic operations" -->
<!-- id="5709F7C8.8080207_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20160401155106.GA78292_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] query on atomic operations<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-10 02:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18755.php">David Froger: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>Previous message:</strong> <a href="18753.php">Gilles Gouaillardet: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>In reply to:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/04/2016 17:51, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is done to provide the functionality when the compiler doesn't
</span><br>
<span class="quotelev1">&gt; support inline asm. I do not know how testing is done with the atomics
</span><br>
<span class="quotelev1">&gt; in  opal/asm/base atomics so its possible some of them are incorrect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I should say that the testing is inaccurate.
<br>
<p>I finally looked at why opal_atomic_cmpset_32 was segfaulting
<br>
on cygwin 64 bit tests and the reason is very simple,
<br>
the calling convention on AMD64 for windows is different
<br>
than on Linux.
<br>
<p><a href="https://msdn.microsoft.com/en-us/library/ms235286.aspx">https://msdn.microsoft.com/en-us/library/ms235286.aspx</a>
<br>
<a href="https://en.wikipedia.org/wiki/X86_calling_conventions">https://en.wikipedia.org/wiki/X86_calling_conventions</a>
<br>
<p>I wonder how testing of any ASM function is passing at all.
<br>
<p>Adding the &quot;--enable-builtin-atomics&quot; of which I was unaware,
<br>
finally solved the failures.
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18755.php">David Froger: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>Previous message:</strong> <a href="18753.php">Gilles Gouaillardet: "Re: [OMPI devel] pal_installdirs_base_framework declaration"</a>
<li><strong>In reply to:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
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
