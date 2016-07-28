<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 11:35:05 2005" -->
<!-- isoreceived="20051021163505" -->
<!-- sent="Fri, 21 Oct 2005 11:35:03 -0500" -->
<!-- isosent="20051021163503" -->
<!-- name="Troy Benjegerdes" -->
<!-- email="hozer_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051021163503.GC30127_at_kalmia.hozed.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B1B6EBA-D6FE-4F4D-BBBD-30D0774CD669_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Benjegerdes (<em>hozer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 11:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>Previous message:</strong> <a href="0461.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0461.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; fall apart.. I tried a build on my debian-ppc desktop with gcc-4.0.2,
</span><br>
<span class="quotelev2">&gt; &gt; and it died with bogus assembler messages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What systems/distros/compilers are people using for development? Is
</span><br>
<span class="quotelev2">&gt; &gt; anyone using gcc-4.X ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We mainly use x84/x86_64 Linux and OS X (PPC) for development.  I  
</span><br>
<span class="quotelev1">&gt; believe one of the developers (Josh) is testing on a fairly regular  
</span><br>
<span class="quotelev1">&gt; basis with Yellow Dog Linux, but can't give any specifics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send the assembler message?  It's possible I screwed  
</span><br>
<span class="quotelev1">&gt; something up again (wouldn't be the first time).
</span><br>
<p>Ah.. looking at the generated .s file.. It looks like this is a 32/64
<br>
bit mixup... 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.file 4 &quot;../../opal/include/sys/powerpc/atomic.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.loc 4 245 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stwu 1,-48(1)
<br>
.LCFI35:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 31,40(1)
<br>
.LCFI36:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mr 31,1
<br>
.LCFI37:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 3,8(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 5,16(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 6,20(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 7,24(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stw 8,28(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.loc 4 259 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lwz 0,8(31)
<br>
#APP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ld r4,16(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ld r5,24(31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1: ldarx   r9, 0, 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cmpd    0, r9, r4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bne-    2f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stdcx.  r5, 0, 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bne-    1b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xor r5,r4,r9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subfic r9,r5,0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adde 11,r9,r5
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
<li><strong>Previous message:</strong> <a href="0461.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0461.php">Brian Barrett: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
