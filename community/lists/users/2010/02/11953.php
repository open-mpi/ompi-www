<?
$subject_val = "Re: [OMPI users] Uninterruptible processes on 2*4 multicore";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 06:34:57 2010" -->
<!-- isoreceived="20100202113457" -->
<!-- sent="Tue, 2 Feb 2010 05:34:51 -0600" -->
<!-- isosent="20100202113451" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uninterruptible processes on 2*4 multicore" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA170566D2_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Uninterruptible processes on 2*4 multicore" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 06:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11954.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="11952.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="11951.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11981.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed on the getting help page on the ompi web site? Also, information about your application would be helpful. 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt; 
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt; 
<br>
Sent: Tue Feb 02 05:34:28 2010
<br>
Subject: [OMPI users] Uninterruptible processes on 2*4 multicore 
<br>

<br>

<br>

<br>
Hi,
<br>

<br>
&nbsp;
<br>

<br>
I experience some stange behaviour on multi-core node of our cluster that I presume is linked to openmpi.
<br>

<br>
When running for a long time, and several pseudo-nodes of a single multicore node are concerned, one process freezes in a uninterrutible mode (D status) and the others seem to wait for a long time (S status).
<br>

<br>
Concurrent processes over the the other pseudo-nodes are also frozen in D mode.
<br>

<br>
When forcing the sleeping processes to sleep (kill -STOP), normal activity of other processes is recovered.
<br>

<br>
When interrupting blocked process at wakeup, it seems to be blocked in poll_dispatch method, and I guess that comment about multithread must be concerned.
<br>

<br>
Do you know more about this behaviour ?
<br>

<br>
&nbsp;
<br>

<br>
Thank a lot,
<br>

<br>
&nbsp;
<br>

<br>
Lionel 
<br>

<br>
&nbsp;
<br>

<br>
Nb : I'm using openmpi v1.3 on Linux debian etch distribution
<br>

<br>
nodes are as following (/proc/cpuinfo):
<br>

<br>
rocessor       : 0
<br>
vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 23
<br>
model name      : Intel(R) Xeon(R) CPU           E5440  @ 2.83GHz
<br>
stepping        : 10
<br>
cpu MHz         : 2833.422
<br>
cache size      : 6144 KB
<br>
physical id     : 0
<br>
siblings        : 4
<br>
core id         : 0
<br>
cpu cores       : 4
<br>
apicid          : 0
<br>
initial apicid  : 0
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 13
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc arch_perfm
<br>
on pebs bts rep_good nopl pni monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr dca sse4_1 lahf_lm
<br>
bogomips        : 5666.84
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 38 bits physical, 48 bits virtual
<br>
power management:
<br>
....
<br>

<br>
________________________________
<br>

<br>
Lionel CHAILAN
<br>

<br>
ASSYSTEM
<br>

<br>
Manager Technique Groupe Calcul Scientifique de PERTUIS
<br>

<br>
lchailan_at_[hidden] // 06.73.08.85.69
<br>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11954.php">Terry Dontje: "Re: [OMPI users] totalview and message queue, empty windows"</a>
<li><strong>Previous message:</strong> <a href="11952.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="11951.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11981.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
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
