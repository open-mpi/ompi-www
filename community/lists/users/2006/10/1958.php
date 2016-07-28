<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 14:48:24 2006" -->
<!-- isoreceived="20061010184824" -->
<!-- sent="Tue, 10 Oct 2006 13:55:42 -0400" -->
<!-- isosent="20061010175542" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="BB293320-65CA-42A4-BE59-D57609E82350_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C14B4E23.29CB2%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-10 13:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1959.php">Michael Kluskens: "[OMPI users]  BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1986.php">Åke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 6, 2006, at 12:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,
</span><br>
<span class="quotelev2">&gt;&gt; Intel ifort 9.0.32 all tests with 4 processors (comments below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.  Can you expand on what you mean by &quot;slowed down&quot;?
</span><br>
<p>Bad interaction between BLACS tester and OpenMPI 1.1.2rc3 (lesser so  
<br>
with OpenMPI 1.3a1r12069).
<br>
<p>The last thing the BLACS tester does is:
<br>
<p>The final auxiliary test is for BLACS_ABORT.
<br>
Immediately after this message, all processes should be killed.
<br>
If processes survive the call, your BLACS_ABORT is incorrect.
<br>
{0,2}, pnum=2, Contxt=0, killed other procs, exiting with error #-1.
<br>
<p>forrtl: error (78): process killed (SIGTERM)
<br>
forrtl: error (78): process killed (SIGTERM)
<br>
<p>This test leaves &quot;orted&quot; running only on the second node and using  
<br>
99% of the CPU.  In contrast with OpenMPI 1.3a1r12069 orted is left  
<br>
running on both nodes but not using cpu time -- this may be perfectly  
<br>
normal for BLACS_ABORT.
<br>
<p>Trying to run either the C or Fortran BLACS tester after the first  
<br>
run causes the BLACS tester to slow down and possibly freeze up.
<br>
<p>The final message with OpenMPI 1.3a1r12069 is:
<br>
<p>The final auxiliary test is for BLACS_ABORT.
<br>
Immediately after this message, all processes should be killed.
<br>
If processes survive the call, your BLACS_ABORT is incorrect.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1959.php">Michael Kluskens: "[OMPI users]  BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1986.php">Åke Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
