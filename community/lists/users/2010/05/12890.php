<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 20:02:52 2010" -->
<!-- isoreceived="20100505000252" -->
<!-- sent="Tue, 4 May 2010 21:02:48 -0300" -->
<!-- isosent="20100505000248" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="20100505000248.GA23870_at_sopalepc" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9E390D9-FDA4-4C37-A575-6FCE65B62383_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 20:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12889.php">David Logan: "[OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="12888.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12904.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 04, 2010 at 05:34:40PM -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One possibility is that the sm btl might not like that you have hyperthreading enabled.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev2">&gt; &gt; in the previous incarnation of this problem/thread/discussion on &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't really administer that machine,
</span><br>
<span class="quotelev2">&gt; &gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev2">&gt; &gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev2">&gt; &gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev2">&gt; &gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev2">&gt; &gt; I may try that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe it can be turned off via an admin-level cmd, but I'm not certain about it
</span><br>
<p>The challenge was too great to resist, so I yielded, and rebooted my
<br>
Nehalem (Core i7 920 @ 2.67 GHz) to confirm my thoughts on the issue.
<br>
<p>Entering the BIOS setup by pressing &quot;DEL&quot;, and &quot;right-arrowing&quot; over
<br>
to &quot;Advanced&quot;, then &quot;down arrow&quot; to &quot;CPU configuration&quot;, I found a
<br>
setting called &quot;Intel (R) HT Technology&quot;.  The help dialogue says
<br>
&quot;When Disabled only one thread per core is enabled&quot;.
<br>
<p>Mine is &quot;Enabled&quot;, and I see 8 cpus.  The Core i7, to my
<br>
understanding, is a 4 core chip.
<br>
<p>Hope that helps,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       voice: 902-461-9749
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12889.php">David Logan: "[OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="12888.php">Ralph Castain: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12904.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
