<?
$subject_val = "Re: [OMPI users] Possible memory error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 07:34:29 2012" -->
<!-- isoreceived="20121215123429" -->
<!-- sent="Sat, 15 Dec 2012 07:34:23 -0500" -->
<!-- isosent="20121215123423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible memory error" -->
<!-- id="01EECFE3-C13B-48C4-9ECD-EB584439EA2C_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5B7E19405479894CB319783A4F404E4802B522494F_at_RNUMSEM722.nala.roche.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible memory error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-15 07:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20956.php">Handerson, Steven: "[OMPI users] Possible memory error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2012, at 4:31 PM, Handerson, Steven wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m trying to track down an instance of openMPI writing to a freed block of memory.
</span><br>
<span class="quotelev1">&gt; This occurs with the most recent release (1.6.3) as well as 1.6, on a 64 bit intel architecture, fedora 14.
</span><br>
<span class="quotelev1">&gt; It occurs with a very simple reduction (allreduce minimum), over a single int value.
</span><br>
<p>Can you send a reproducer program?  The simpler, the better.
<br>
<p><span class="quotelev1">&gt; I&#146;m wondering if the openMPI developers use power tools such as valgrind / dmalloc / etc
</span><br>
<span class="quotelev1">&gt; on the releases to try to catch these things via exhaustive testing &#150;
</span><br>
<span class="quotelev1">&gt; but I understand memory problems in C are of the nature that anyone making a mistake can propogate,
</span><br>
<span class="quotelev1">&gt; so I haven&#146;t ruled out problems in our own code.
</span><br>
<span class="quotelev1">&gt; Also, I&#146;m wondering if anyone has suggestions on how to track this down further.
</span><br>
<p>Yes, we do use such tools.
<br>
<p>Can you cite the specific file/line where the problem is occurring?  The all reduce algorithms are fairly self-contained; it should be (relatively) straightforward to examine that code and see if there's a problem with the memory allocation there.
<br>
<p><span class="quotelev1">&gt; I&#146;m using allinea DDT and their builtin dmalloc, which catches the error, which appears in
</span><br>
<span class="quotelev1">&gt; the second memcpy in  opal_convertor_pack(), but I don&#146;t have more details than that at the moment.
</span><br>
<span class="quotelev1">&gt; All I know so far is that one of those values has been freed.
</span><br>
<span class="quotelev1">&gt; Obviously, I haven&#146;t seen anything in earlier parts of the code which might have triggered memory corruption,
</span><br>
<span class="quotelev1">&gt; although both openMPI and intel IPP do things with uninitialized values before this (according to Valgrind).
</span><br>
<p>There's a number of issues that can lead to false positives for using uninitialized values.  Here's two of the most common cases:
<br>
<p>1. When using TCP, one of our data headers has a padding hole in it, but we write the whole struct down a TCP socket file descriptor anyway.  Hence, it will generate a &quot;read from uninit&quot; warning.
<br>
<p>2. When using OpenFabrics-based networks, tool like valgrind don't see the OS-bypass initialization of the memory (Which frequently comes directly from the hardware), and it generates a lot of false &quot;read from uninit&quot; positives.
<br>
<p>One thing you can try is to compile Open MPI --with-valgrind.  This adds a little performance penalty, but we take extra steps to eliminate most false positives.  It could help separate the wheat from the chaff, in your case.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20964.php">Jeff Squyres: "Re: [OMPI users] question to scattering an object in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20962.php">Jeff Squyres: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<li><strong>In reply to:</strong> <a href="20956.php">Handerson, Steven: "[OMPI users] Possible memory error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
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
