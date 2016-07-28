<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 10:14:43 2010" -->
<!-- isoreceived="20100507141443" -->
<!-- sent="Fri, 07 May 2010 10:14:34 -0400" -->
<!-- isosent="20100507141434" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?" -->
<!-- id="4BE4204A.9080100_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92E91402-CCD3-4EF2-B601-3D08A7622D8B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 10:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12968.php">Miguel Ángel Vázquez: "[OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12966.php">Jeff Squyres: "Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>In reply to:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, John, Tim
<br>
<p>I had asked the same question that John and Tim did,
<br>
but it got lost 100 emails ago on this thread.
<br>
Here I've been disabling/enabling HT on the BIOS,
<br>
as per Douglas Guptill's suggestion.
<br>
<p>Jeff:  Thank you very much for the wizardry details.
<br>
Very helpful for the list subscriber community, I'd guess.
<br>
Another reason to install hwloc.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 7, 2010, at 1:30 AM, John Hearns wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed.  I have seen some people have HT enabled in the bios just so that they can have the software option of turning them off via linux -- then you can run with HT and without it and see what it does to your specific codes.
</span><br>
<span class="quotelev2">&gt;&gt; I may have missed this on the thread, but how do you do that?
</span><br>
<span class="quotelev2">&gt;&gt; The Nehalem systems I have came delivered with HT enabled in the BIOS
</span><br>
<span class="quotelev2">&gt;&gt; - I know it is not a real pain to reboot and configure, but it would
</span><br>
<span class="quotelev2">&gt;&gt; be a lot easir to leave it on and switch off in software - also if you
</span><br>
<span class="quotelev2">&gt;&gt; wanted to do back-to-back testing of performance with/without HT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What we have done is disable one of the 2 hardware threads as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - download and install hwloc (it's very small/simple to install).  
</span><br>
<span class="quotelev1">&gt; 1.0rc5 is the current release, but it's *very* near release; 
</span><br>
<span class="quotelev1">&gt; it's very stable.
</span><br>
<span class="quotelev1">&gt; - run lstopo and look at the physical numbering of the 
</span><br>
<span class="quotelev1">&gt; hardware threads in each core.  
</span><br>
<span class="quotelev1">&gt; - here's an example output from v1.0rc5 lstopo 
</span><br>
<span class="quotelev1">&gt; (this is not from a Nehalem machine, but the same things apply):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; # lstopo
</span><br>
<span class="quotelev1">&gt; Machine (3945MB)
</span><br>
<span class="quotelev1">&gt;   Socket #0
</span><br>
<span class="quotelev1">&gt;     L2 #0 (2048KB) + L1 #0 (16KB) + Core #0
</span><br>
<span class="quotelev1">&gt;       PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;       PU #1 (phys=4)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (2048KB) + L1 #1 (16KB) + Core #1
</span><br>
<span class="quotelev1">&gt;       PU #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;       PU #3 (phys=6)
</span><br>
<span class="quotelev1">&gt;   Socket #1
</span><br>
<span class="quotelev1">&gt;     L2 #2 (2048KB) + L1 #2 (16KB) + Core #2
</span><br>
<span class="quotelev1">&gt;       PU #4 (phys=1)
</span><br>
<span class="quotelev1">&gt;       PU #5 (phys=5)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (2048KB) + L1 #3 (16KB) + Core #3
</span><br>
<span class="quotelev1">&gt;       PU #6 (phys=3)
</span><br>
<span class="quotelev1">&gt;       PU #7 (phys=7)
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you want to disable the 2nd PU (processing unit) -- i.e., hardware thread -- on each core.  
</span><br>
<span class="quotelev1">&gt; - Do this by echoing 0 to /sys/devices/system/cpu/cpuX/online, where X is each *phys* value.  
</span><br>
<span class="quotelev1">&gt; - For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; # echo 0 &gt; /sys/devices/system/cpu/cpu4/online 
</span><br>
<span class="quotelev1">&gt; # echo 0 &gt; /sys/devices/system/cpu/cpu5/online 
</span><br>
<span class="quotelev1">&gt; # echo 0 &gt; /sys/devices/system/cpu/cpu6/online 
</span><br>
<span class="quotelev1">&gt; # echo 0 &gt; /sys/devices/system/cpu/cpu7/online 
</span><br>
<span class="quotelev1">&gt; # lstopo 
</span><br>
<span class="quotelev1">&gt; Machine (3945MB)
</span><br>
<span class="quotelev1">&gt;   Socket #0
</span><br>
<span class="quotelev1">&gt;     L2 #0 (2048KB) + L1 #0 (16KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (2048KB) + L1 #1 (16KB) + Core #1 + PU #1 (phys=2)
</span><br>
<span class="quotelev1">&gt;   Socket #1
</span><br>
<span class="quotelev1">&gt;     L2 #2 (2048KB) + L1 #2 (16KB) + Core #2 + PU #2 (phys=1)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (2048KB) + L1 #3 (16KB) + Core #3 + PU #3 (phys=3)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Granted; this doesn't actually disable hyperthreading.  But it does disable Linux from using the 2nd hardware thread on each core, which is pretty much the same thing for the purposes of this conversation.    
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12968.php">Miguel Ángel Vázquez: "[OMPI users] Dynamic libraries in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12966.php">Jeff Squyres: "Re: [OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>In reply to:</strong> <a href="12961.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12925.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
