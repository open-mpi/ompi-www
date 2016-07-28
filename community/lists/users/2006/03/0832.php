<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 11:57:46 2006" -->
<!-- isoreceived="20060312165746" -->
<!-- sent="Sun, 12 Mar 2006 11:57:40 -0500" -->
<!-- isosent="20060312165740" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] svn r9191 build failure on ppc32-linux" -->
<!-- id="CCBFCB11-2F96-4763-8DD1-75A9888F0EB3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200603121224.32896.julian_at_valgrind.org" -->
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
<strong>Date:</strong> 2006-03-12 11:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>In reply to:</strong> <a href="0829.php">Julian Seward: "[OMPI users] svn r9191 build failure on ppc32-linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Julian -
<br>
<p>Can you send me the top-level config.log file?  The code you're  
<br>
running into problems with shouldn't be compiled on a G4-based  
<br>
machine.  It exists for Mac OS X 10.3 on the G5, which could emit a  
<br>
strange mixed mode assembly that supported 64 bit operations in a 32  
<br>
bit application.  Since you're on a 32 bit platform, it definitely  
<br>
won't do what we want.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Mar 12, 2006, at 7:24 AM, Julian Seward wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r9191 (approximately Fri 3 March 06) does not build on ppc32-linux
</span><br>
<span class="quotelev1">&gt; due to use of register names of the form &quot;r9&quot; etc in
</span><br>
<span class="quotelev1">&gt; opal/include/opal/sys/powerpc/atomic.h, in opal_atomic_cmpset_64().
</span><br>
<span class="quotelev1">&gt; You must use either names of the form &quot;%%r9&quot; or just plain &quot;9&quot;,
</span><br>
<span class="quotelev1">&gt; or give gcc the flag -mregnames (iirc).  The plain-digit convention
</span><br>
<span class="quotelev1">&gt; is what the rest of the assembly fragments in that file use.
</span><br>
<span class="quotelev1">&gt; My inelegant fix is below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with SuSE 10.0 running on a Mac Mini.  (glibc 2.3.5, gcc  
</span><br>
<span class="quotelev1">&gt; 4.0.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config args were --with-memory-manager=none --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; J
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/include/opal/sys/powerpc/atomic.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/include/opal/sys/powerpc/atomic.h      (revision 9191)
</span><br>
<span class="quotelev1">&gt; +++ opal/include/opal/sys/powerpc/atomic.h      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -259,17 +259,17 @@
</span><br>
<span class="quotelev1">&gt;       * is very similar to the pure 64 bit version.
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;     __asm__ __volatile__ (
</span><br>
<span class="quotelev1">&gt; -                         &quot;ld r4,%2         \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;ld r5,%3        \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;1: ldarx   r9, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;   cmpd    0, r9, r4  \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;ld %%r4,%2         \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;ld %%r5,%3        \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;1: ldarx   %%r9, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;   cmpd    0, %%r9, %%r4  \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;   bne-    2f         \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;   stdcx.  r5, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;   stdcx.  %%r5, 0, %1  \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;   bne-    1b         \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           &quot;2:                    \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;xor r5,r4,r9          \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;subfic r9,r5,0        \n\t&quot;
</span><br>
<span class="quotelev1">&gt; -                         &quot;adde %0,r9,r5         \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;xor %%r5,%%r4,%%r9          \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;subfic %%r9,%%r5,0        \n\t&quot;
</span><br>
<span class="quotelev1">&gt; +                         &quot;adde %0,%%r9,%%r5         \n\t&quot;
</span><br>
<span class="quotelev1">&gt;                           : &quot;=&amp;r&quot; (ret)
</span><br>
<span class="quotelev1">&gt;                           : &quot;r&quot;(addr),
</span><br>
<span class="quotelev1">&gt;                             &quot;m&quot;(oldval), &quot;m&quot;(newval)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>In reply to:</strong> <a href="0829.php">Julian Seward: "[OMPI users] svn r9191 build failure on ppc32-linux"</a>
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
