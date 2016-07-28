<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 19:59:21 2007" -->
<!-- isoreceived="20070714235921" -->
<!-- sent="Sat, 14 Jul 2007 16:59:14 -0700" -->
<!-- isosent="20070714235914" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="46996352.7040402_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C494F611-7402-400A-ABA1-5C86F37C8128_at_lanl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 19:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jul 14, 2007, at 8:26 AM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let us (ie Debian's openmpi maintainers) how else we can  
</span><br>
<span class="quotelev2">&gt;&gt; help.  I am
</span><br>
<span class="quotelev2">&gt;&gt; ccing the porters lists (for hppa, m68k, mips) too to invite them  
</span><br>
<span class="quotelev2">&gt;&gt; to help. I
</span><br>
<span class="quotelev2">&gt;&gt; hope that doesn't get the spam filters going...  I may contact the  
</span><br>
<span class="quotelev2">&gt;&gt; 'arm'
</span><br>
<span class="quotelev2">&gt;&gt; porters once we have a failure; s390 and sparc activity are not as  
</span><br>
<span class="quotelev2">&gt;&gt; big these
</span><br>
<span class="quotelev2">&gt;&gt; days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI uses some assembly for things like atomic locks, atomic  
</span><br>
<span class="quotelev1">&gt; compare and swap, memory barriers, and the like.  We currently have  
</span><br>
<span class="quotelev1">&gt; support for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * x86 (32 bit)
</span><br>
<span class="quotelev1">&gt;    * x86_64 / amd64 (32 or 64 bit)
</span><br>
<span class="quotelev1">&gt;    * UltraSparc (v8plus and v9* targets)
</span><br>
<span class="quotelev1">&gt;    * IA64
</span><br>
<span class="quotelev1">&gt;    * PowerPC (32 or 64 bit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We also have code for:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    * Alpha
</span><br>
<span class="quotelev1">&gt;    * MIPS (32 bit NEW ABI &amp; 64 bit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This support isn't well tested in a while and it sounds like it  
</span><br>
<span class="quotelev1">&gt; doesn't work for MIPS.  At one time, we supported the sparc v8  
</span><br>
<span class="quotelev1">&gt; target, but that The other platforms (hppa, mipsel (how is this  
</span><br>
<span class="quotelev1">&gt; different than MIPS?), s390, m68k) aren't at all supported by Open  
</span><br>
<span class="quotelev1">&gt; MPI.  If you can get the real error messages, I can help on the MIPS  
</span><br>
<span class="quotelev1">&gt; issue, although it'll have to be a low priority.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>As maintainer of the atomics code for two projects unrelated to OpenMPI,
<br>
I thought I'd pass on some of my insight.  I'll not post any code here
<br>
to avoid any accidental license questions.
<br>
<p>HPPA lacks an atomic compare-and-swap and is therefore probably a lost
<br>
cause.  The Linux kernel uses HPPA's only atomic instruction,
<br>
load-and-clear, to implement a spinlock and a hashed table of spinlocks
<br>
to implement atomic operations.  This works because the atomic_read and
<br>
atomic_set macros honor the spinlocks.  This is not the case with ompi's
<br>
atomics, is it?  OpenMPI appears to contain fragments of such an
<br>
array-of-spinlocks implementation for SPARCv8, but Brian's comments
<br>
suggest to me that this may no longer work.
<br>
<p>ARM before v6 needs no memory barriers, but lacks atomic instructions
<br>
other than unconditional swap (though very few multi-processor systems
<br>
were built with earlier chips).   However, on the libc-ports mailing
<br>
list (<a href="http://sourceware.org/ml/libc-ports/2005-10/msg00016.html">http://sourceware.org/ml/libc-ports/2005-10/msg00016.html</a>) says of
<br>
the code used in glibc
<br>
&lt;Quote&gt;
<br>
/* Atomic compare and exchange.  These sequences are not actually Atomic;
<br>
&nbsp;&nbsp;&nbsp;there is a race if *MEM != OLDVAL and we are preempted between the two
<br>
&nbsp;&nbsp;&nbsp;swaps.  However, they are very close to atomic, and are the best that a
<br>
&nbsp;&nbsp;&nbsp;pre-ARMv6 implementation can do without operating system support.
<br>
&nbsp;&nbsp;&nbsp;LinuxThreads has been using these sequences for many years.  */
<br>
&lt;/Quote&gt;
<br>
So, ompi might try getting away with the same logic if an ARM port is
<br>
high priority for somebody.  Alternatively, if one is on a new enough
<br>
Linux kernel (&gt;= 2.6.12 IIRC) you get kernel support for CAS by calling
<br>
to a function in a &quot;highpage&quot; (like the VDSO on x86) that is implemented
<br>
natively on &gt;=ARMv6 and traps to the kernel otherwise (the kernel
<br>
disables interrupts and then uses the not-quite-atomic sequence).
<br>
<p>For ARMv6 you get a load-exclusive and store-exclusive pair, and you get
<br>
real memory barriers as well.
<br>
<p>M68K has a CAS instruction and memory barriers are no-ops.  This should
<br>
be an easy one to implement from the instruction set reference docs.
<br>
<p>s390 is one I don't have any first-hand experience with but know from
<br>
peeking at the Linux kernel source that it has the eieio memory-barrier
<br>
instruction of early PPCs and a CAS instruction.  Again, should be easy
<br>
from the ISA docs.
<br>
<p>MIPS is supposed to work w/ ompi on IRIX, but there is no
<br>
atomic-mips-linux.s on OpenMPI 1.2.3.  I was going to try to build 1.2.3
<br>
on an O2K (IRIX64 6.5 and gcc 3.3) today, but found that configure dies with
<br>
&nbsp;&nbsp;configure: error: Could not determine global symbol label prefix
<br>
So, I'll not be pursuing that.
<br>
<p><p>-Paul
<br>
<p><span class="quotelev1">&gt; We don't currently have support for a non-assembly code path.  We  
</span><br>
<span class="quotelev1">&gt; originally planned on having one, but the team went away from that  
</span><br>
<span class="quotelev1">&gt; route over time and there's no way to build Open MPI without assembly  
</span><br>
<span class="quotelev1">&gt; support right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1882.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
