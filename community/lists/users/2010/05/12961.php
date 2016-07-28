<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 08:20:13 2010" -->
<!-- isoreceived="20100507122013" -->
<!-- sent="Fri, 7 May 2010 08:20:07 -0400" -->
<!-- isosent="20100507122007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?" -->
<!-- id="92E91402-CCD3-4EF2-B601-3D08A7622D8B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="g2u9f8092cc1005062230g26fee76ek19f5426a434d4921_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 08:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Reply:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2010, at 1:30 AM, John Hearns wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Indeed.  I have seen some people have HT enabled in the bios just so that they can have the software option of turning them off via linux -- then you can run with HT and without it and see what it does to your specific codes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I may have missed this on the thread, but how do you do that?
</span><br>
<span class="quotelev1">&gt; The Nehalem systems I have came delivered with HT enabled in the BIOS
</span><br>
<span class="quotelev1">&gt; - I know it is not a real pain to reboot and configure, but it would
</span><br>
<span class="quotelev1">&gt; be a lot easir to leave it on and switch off in software - also if you
</span><br>
<span class="quotelev1">&gt; wanted to do back-to-back testing of performance with/without HT.
</span><br>
<p>What we have done is disable one of the 2 hardware threads as follows:
<br>
<p>- download and install hwloc (it's very small/simple to install).  1.0rc5 is the current release, but it's *very* near release; it's very stable.
<br>
- run lstopo and look at the physical numbering of the hardware threads in each core.  
<br>
- here's an example output from v1.0rc5 lstopo (this is not from a Nehalem machine, but the same things apply):
<br>
<p>-----
<br>
# lstopo
<br>
Machine (3945MB)
<br>
&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (2048KB) + L1 #0 (16KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #1 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (2048KB) + L1 #1 (16KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #3 (phys=6)
<br>
&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (2048KB) + L1 #2 (16KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #4 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (2048KB) + L1 #3 (16KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #6 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #7 (phys=7)
<br>
# 
<br>
-----
<br>
<p>- you want to disable the 2nd PU (processing unit) -- i.e., hardware thread -- on each core.  
<br>
- Do this by echoing 0 to /sys/devices/system/cpu/cpuX/online, where X is each *phys* value.  
<br>
- For example:
<br>
<p>-----
<br>
# echo 0 &gt; /sys/devices/system/cpu/cpu4/online 
<br>
# echo 0 &gt; /sys/devices/system/cpu/cpu5/online 
<br>
# echo 0 &gt; /sys/devices/system/cpu/cpu6/online 
<br>
# echo 0 &gt; /sys/devices/system/cpu/cpu7/online 
<br>
# lstopo 
<br>
Machine (3945MB)
<br>
&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (2048KB) + L1 #0 (16KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (2048KB) + L1 #1 (16KB) + Core #1 + PU #1 (phys=2)
<br>
&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (2048KB) + L1 #2 (16KB) + Core #2 + PU #2 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (2048KB) + L1 #3 (16KB) + Core #3 + PU #3 (phys=3)
<br>
#
<br>
-----
<br>
<p>Granted; this doesn't actually disable hyperthreading.  But it does disable Linux from using the 2nd hardware thread on each core, which is pretty much the same thing for the purposes of this conversation.    
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
<li><strong>Next message:</strong> <a href="12962.php">Damien Hocking: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<li><strong>Previous message:</strong> <a href="12960.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Reply:</strong> <a href="12967.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
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
