<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 09:40:12 2005" -->
<!-- isoreceived="20051027144012" -->
<!-- sent="Thu, 27 Oct 2005 09:40:04 -0500" -->
<!-- isosent="20051027144004" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin" -->
<!-- id="DC0E35BF-FE44-4400-AC10-0F2308C67908_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1130419350.6264.6.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 09:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Previous message:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2005, at 8:22 AM, Eugen Wintersberger wrote:
<br>
<p><span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels...
</span><br>
<span class="quotelev1">&gt; checking for BSD-compatible nm... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking prefix for lsym labels... $
</span><br>
<span class="quotelev1">&gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt; checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt; checking if .align directive takes logarithmic value... yes
</span><br>
<span class="quotelev1">&gt; checking for fgrep... grep -F
</span><br>
<span class="quotelev1">&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for
</span><br>
<span class="quotelev1">&gt; alphaev56-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone of you an idea what I can do with this. Is the alpha  
</span><br>
<span class="quotelev1">&gt; platform
</span><br>
<span class="quotelev1">&gt; supported by openmpi?
</span><br>
<p>Not at this time, no.  I believe we have a half implemented, untested  
<br>
set of primitives for Alpha, so it would not take much effort to add  
<br>
them.  If someone out in OMPI land has a machine they could give me  
<br>
access to, I can add this to the todo list.
<br>
<p><span class="quotelev1">&gt; Second we have an SGI Origin at our university. After unpacking, the
</span><br>
<span class="quotelev1">&gt; configure command runs without any problems. But a subsequent make  
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../opal/asm/generated/atomic-mips-irix.s&quot; atomic-asm.s
</span><br>
<span class="quotelev1">&gt;         /bin/sh ../../libtool --mode=compile gcc   -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -c -o atomic-asm.lo atomic-asm.s
</span><br>
<span class="quotelev1">&gt;  gcc -O3 -DNDEBUG -fno-strict-aliasing -c atomic-asm.s  -DPIC - 
</span><br>
<span class="quotelev1">&gt; o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; as: Error: /atomic-asm.s, line 146: Not all branch-label symbols  
</span><br>
<span class="quotelev1">&gt; were defined
</span><br>
<span class="quotelev1">&gt; as: Error: /atomic-asm.s, line 41: Label referenced but not  
</span><br>
<span class="quotelev1">&gt; defined: Lretry1
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<p>That shouldn't happen.  I think I have access to a couple SGI boxes  
<br>
around here - I'll give that a whirl this afternoon.  What version of  
<br>
IRIX was this on?
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<li><strong>Previous message:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
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
