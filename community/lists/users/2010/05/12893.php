<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 22:06:40 2010" -->
<!-- isoreceived="20100505020640" -->
<!-- sent="Tue, 4 May 2010 21:06:32 -0500" -->
<!-- isosent="20100505020632" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?" -->
<!-- id="10B2585F-576A-4B18-A83E-E8E16582329C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE0CB62.7080300_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 22:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="12892.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd actually be a little surprised if HT was the problem.  I run with HT enabled on my nehalem boxen all the time.  It's pretty surprising that Open MPI is causing a hard lockup of your system; user-level processes shouldn't be able to do that.
<br>
<p>Notes:
<br>
<p>1. With HT enabled, as you noted, Linux will just see 2x as many cores as you actually have.  Depending on your desired workload, this may or may not help you.  But that shouldn't affect the correctness of running your MPI application.
<br>
<p>2. To confirm: yes, TCP will be quite a bit slower than sm (but again, that depends on how much MPI traffic you're sending).  
<br>
<p>3. Yes, you can disable the 2nd thread on each core via Linux, but you need root-level access to do it.
<br>
<p>Some questions:
<br>
<p>- is the /tmp directory on your local disk?
<br>
- are there any revealing messages in /var/log/messages (or equivalent) about failures when the machine hangs?
<br>
<p><p><p>On May 4, 2010, at 8:35 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Douglas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, very helpful indeed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine here is a two-way quad-core, and /proc/cpuinfo shows 16
</span><br>
<span class="quotelev1">&gt; processors, twice as much as the physical cores,
</span><br>
<span class="quotelev1">&gt; just like you see on yours.
</span><br>
<span class="quotelev1">&gt; So, HT is turned on for sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The security guard opened the office door for me,
</span><br>
<span class="quotelev1">&gt; and I could reboot that machine.
</span><br>
<span class="quotelev1">&gt; It's called Spinoza.  Maybe that's why it is locked.
</span><br>
<span class="quotelev1">&gt; Now the door is locked again, so I will have to wait until tomorrow
</span><br>
<span class="quotelev1">&gt; to play around with the BIOS settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will remember the BIOS double negative that you pointed out:
</span><br>
<span class="quotelev1">&gt; &quot;When Disabled only one thread per core is enabled&quot;
</span><br>
<span class="quotelev1">&gt; Ain't that English funny?
</span><br>
<span class="quotelev1">&gt; So far, I can't get no satisfaction.
</span><br>
<span class="quotelev1">&gt; Hence, let's see if Ralph's suggestion works.
</span><br>
<span class="quotelev1">&gt; Never get no hyperthreading turned on,
</span><br>
<span class="quotelev1">&gt; and you ain't have no problems with Open MPI.  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev1">&gt; Have a great Halifax Spring time!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Douglas Guptill wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 04, 2010 at 05:34:40PM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; One possibility is that the sm btl might not like that you have hyperthreading enabled.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in the previous incarnation of this problem/thread/discussion on &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't really administer that machine,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I may try that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe it can be turned off via an admin-level cmd, but I'm not certain about it
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The challenge was too great to resist, so I yielded, and rebooted my
</span><br>
<span class="quotelev2">&gt; &gt; Nehalem (Core i7 920 @ 2.67 GHz) to confirm my thoughts on the issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Entering the BIOS setup by pressing &quot;DEL&quot;, and &quot;right-arrowing&quot; over
</span><br>
<span class="quotelev2">&gt; &gt; to &quot;Advanced&quot;, then &quot;down arrow&quot; to &quot;CPU configuration&quot;, I found a
</span><br>
<span class="quotelev2">&gt; &gt; setting called &quot;Intel (R) HT Technology&quot;.  The help dialogue says
</span><br>
<span class="quotelev2">&gt; &gt; &quot;When Disabled only one thread per core is enabled&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mine is &quot;Enabled&quot;, and I see 8 cpus.  The Core i7, to my
</span><br>
<span class="quotelev2">&gt; &gt; understanding, is a 4 core chip.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that helps,
</span><br>
<span class="quotelev2">&gt; &gt; Douglas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12894.php">Ralph Castain: "Re: [OMPI users] Run time error of openmpi 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="12892.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12891.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
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
