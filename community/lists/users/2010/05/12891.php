<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 21:35:40 2010" -->
<!-- isoreceived="20100505013540" -->
<!-- sent="Tue, 04 May 2010 21:35:30 -0400" -->
<!-- isosent="20100505013530" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="4BE0CB62.7080300_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100505000248.GA23870_at_sopalepc" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 21:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12892.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Douglas
<br>
<p>Yes, very helpful indeed!
<br>
<p>The machine here is a two-way quad-core, and /proc/cpuinfo shows 16 
<br>
processors, twice as much as the physical cores,
<br>
just like you see on yours.
<br>
So, HT is turned on for sure.
<br>
<p>The security guard opened the office door for me,
<br>
and I could reboot that machine.
<br>
It's called Spinoza.  Maybe that's why it is locked.
<br>
Now the door is locked again, so I will have to wait until tomorrow
<br>
to play around with the BIOS settings.
<br>
<p>I will remember the BIOS double negative that you pointed out:
<br>
&quot;When Disabled only one thread per core is enabled&quot;
<br>
Ain't that English funny?
<br>
So far, I can't get no satisfaction.
<br>
Hence, let's see if Ralph's suggestion works.
<br>
Never get no hyperthreading turned on,
<br>
and you ain't have no problems with Open MPI.  :)
<br>
<p>Many thanks!
<br>
Have a great Halifax Spring time!
<br>
<p>Cheers,
<br>
Gus
<br>
<p>Douglas Guptill wrote:
<br>
<span class="quotelev1">&gt; On Tue, May 04, 2010 at 05:34:40PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; One possibility is that the sm btl might not like that you have hyperthreading enabled.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the previous incarnation of this problem/thread/discussion on &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't really administer that machine,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I may try that.
</span><br>
<span class="quotelev2">&gt;&gt; I believe it can be turned off via an admin-level cmd, but I'm not certain about it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The challenge was too great to resist, so I yielded, and rebooted my
</span><br>
<span class="quotelev1">&gt; Nehalem (Core i7 920 @ 2.67 GHz) to confirm my thoughts on the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Entering the BIOS setup by pressing &quot;DEL&quot;, and &quot;right-arrowing&quot; over
</span><br>
<span class="quotelev1">&gt; to &quot;Advanced&quot;, then &quot;down arrow&quot; to &quot;CPU configuration&quot;, I found a
</span><br>
<span class="quotelev1">&gt; setting called &quot;Intel (R) HT Technology&quot;.  The help dialogue says
</span><br>
<span class="quotelev1">&gt; &quot;When Disabled only one thread per core is enabled&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mine is &quot;Enabled&quot;, and I see 8 cpus.  The Core i7, to my
</span><br>
<span class="quotelev1">&gt; understanding, is a 4 core chip.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; Douglas.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12892.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12890.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12893.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
