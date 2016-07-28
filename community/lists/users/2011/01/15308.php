<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 09:50:03 2011" -->
<!-- isoreceived="20110107145003" -->
<!-- sent="Fri, 7 Jan 2011 09:49:41 -0500" -->
<!-- isosent="20110107144941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance" -->
<!-- id="A13372E5-2117-4BF4-9FFE-298067E7833C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikVNNTTHPZ136yAcC79QQ+XOTLUCOG++1Cs-Hxi_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 09:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2011, at 5:27 AM, John Hearns wrote:
<br>
<p><span class="quotelev1">&gt; Actually, the topic of hyperthreading is interesting, and we should
</span><br>
<span class="quotelev1">&gt; discuss it please.
</span><br>
<span class="quotelev1">&gt; Hyperthreading is supposedly implemented better and 'properly' on
</span><br>
<span class="quotelev1">&gt; Nehalem - I would be interested to see some genuine
</span><br>
<span class="quotelev1">&gt; performance measurements with hyperthreading on/off on your machine Gilbert.
</span><br>
<p>FWIW, from what I've seen, and from the recommendations I've heard from Intel, using hyperthreading is still a hit-or-miss proposition with HPC apps.  It's true that Nehalem (and later) hyperthreading is much better than it was before.  But hyperthreading is still designed to support apps that stall frequently (so the other hyperthread(s) can take over and do useful work while one is stalled).  Good HPC apps don't stall much, so hyperthreading still isn't a huge win.
<br>
<p>Nehalem (and later) hyperthreading has been discussed on this list at least once or twice before; google through the archives to see if you can dig up the conversations.  I have dim recollections of people sending at least some performance numbers...?  (I could be wrong here, though)
<br>
<p><span class="quotelev1">&gt; Also you don;t need to reboot and change BIOS settings - there was a
</span><br>
<span class="quotelev1">&gt; rather niofty technique on this list I think,
</span><br>
<span class="quotelev1">&gt; where you disable every second CPU in Linux - which has the same
</span><br>
<span class="quotelev1">&gt; effect as switching off hyperthreading.
</span><br>
<p>Yes, you can disable all but one hyperthread on a processor in Linux by:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# echo 0 &gt; /sys/devices/system/cpu/cpuX/online
<br>
<p>where X is an integer from the set listed in hwloc's lstopo output from the P# numbers (i.e., the OS index values, as opposed to the logical index values).  Repeat for the 2nd P# value on each core in your machine.  You can run lstopo again to verify that they went offline.  You can &quot;echo 1&quot; to the same file to bring it back online.
<br>
<p>Note that you can't offline X=0.
<br>
<p>Note that this technique technically doesn't disable each hyperthread; it just causes Linux to avoid scheduling on it.  Disabling hyperthreading in the BIOS is slightly different; you are actually physically disabling all but one thread per core.
<br>
<p>The difference is in how resources in a core are split between hyperthreads.  When you disable hyperthreading in the BIOS, all the resources in the core are given to the first hyperthread and the 2nd is deactivated (i.e., the OS doesn't even see it at all).  When hyperthreading is enabled in the BIOS, the core resources are split between all hyperthreads.  
<br>
<p>Specifically: causing the OS to simply not schedule on all but the first hyperthread doesn't give those resources back to the first hyperthread; it just effectively ignores all but the first hyperthread.
<br>
<p>My understanding is that hyperthreading can only be activated/deactivated at boot time -- once the core resources are allocated to hyperthreads, they can't be changed while running.
<br>
<p>Whether disabling the hyperthreads or simply telling Linux not to schedule on them makes a difference performance-wise remains to be seen.  I've never had the time to do a little benchmarking to quantify the difference.  If someone could rustle up a few cycles (get it?) to test out what the real-world performance difference is between disabling hyperthreading in the BIOS vs. telling Linux to ignore the hyperthreads, that would be awesome.  I'd love to see such results.  
<br>
<p>My personal guess is that the difference is in the noise.  But that's a guess.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="15309.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15307.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15313.php">Tim Prince: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
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
