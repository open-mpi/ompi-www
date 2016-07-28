<?
$subject_val = "[OMPI users] Uninterruptible processes on 2*4 multicore";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 05:34:39 2010" -->
<!-- isoreceived="20100202103439" -->
<!-- sent="Tue, 2 Feb 2010 11:34:28 +0100" -->
<!-- isosent="20100202103428" -->
<!-- name="Lionel Chailan" -->
<!-- email="lchailan_at_[hidden]" -->
<!-- subject="[OMPI users] Uninterruptible processes on 2*4 multicore" -->
<!-- id="ea6e74d96f4a02f7e339c9beb74a7906_at_mailnew.assystem.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Lionel Chailan (<em>lchailan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 05:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11952.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11950.php">Timothy G Thompson: "[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe reply:</strong> <a href="11953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe reply:</strong> <a href="11981.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I experience some stange behaviour on multi-core node of our cluster that I
<br>
presume is linked to openmpi.
<br>
<p>When running for a long time, and several pseudo-nodes of a single multicore
<br>
node are concerned, one process freezes in a uninterrutible mode (D status)
<br>
and the others seem to wait for a long time (S status).
<br>
<p>Concurrent processes over the the other pseudo-nodes are also frozen in D
<br>
mode.
<br>
<p>When forcing the sleeping processes to sleep (kill -STOP), normal activity
<br>
of other processes is recovered.
<br>
<p>When interrupting blocked process at wakeup, it seems to be blocked in
<br>
poll_dispatch method, and I guess that comment about multithread must be
<br>
concerned.
<br>
<p>Do you know more about this behaviour ?
<br>
<p>&nbsp;
<br>
<p>Thank a lot,
<br>
<p>&nbsp;
<br>
<p>Lionel 
<br>
<p>&nbsp;
<br>
<p>Nb : I'm using openmpi v1.3 on Linux debian etch distribution
<br>
<p>nodes are as following (/proc/cpuinfo):
<br>
<p>rocessor : 0
<br>
vendor_id : GenuineIntel
<br>
cpu family : 6
<br>
model : 23
<br>
model name : Intel(R) Xeon(R) CPU E5440 @ 2.83GHz
<br>
stepping : 10
<br>
cpu MHz : 2833.422
<br>
cache size : 6144 KB
<br>
physical id : 0
<br>
siblings : 4
<br>
core id : 0
<br>
cpu cores : 4
<br>
apicid : 0
<br>
initial apicid : 0
<br>
fpu : yes
<br>
fpu_exception : yes
<br>
cpuid level : 13
<br>
wp : yes
<br>
flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat
<br>
pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm
<br>
constant_tsc arch_perfm
<br>
on pebs bts rep_good nopl pni monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr dca
<br>
sse4_1 lahf_lm
<br>
bogomips : 5666.84
<br>
clflush size : 64
<br>
cache_alignment : 64
<br>
address sizes : 38 bits physical, 48 bits virtual
<br>
power management:
<br>
....
<br>
<pre>
-- 
Lionel CHAILAN
ASSYSTEM
Manager Technique Groupe Calcul Scientifique de PERTUIS
lchailan_at_[hidden] // 06.73.08.85.69
</pre>
<p>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11951/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11952.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11950.php">Timothy G Thompson: "[OMPI users] crashing on MPI_SEND -- program exited with code 021, when ~1200 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe reply:</strong> <a href="11953.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Maybe reply:</strong> <a href="11981.php">Lionel Chailan: "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
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
