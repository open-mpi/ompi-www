<?
$subject_val = "Re: [OMPI users] Uninterruptible processes on 2*4 multicore";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  3 08:44:13 2010" -->
<!-- isoreceived="20100203134413" -->
<!-- sent="Wed, 3 Feb 2010 14:44:08 +0100" -->
<!-- isosent="20100203134408" -->
<!-- name="Lionel Chailan" -->
<!-- email="lchailan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uninterruptible processes on 2*4 multicore" -->
<!-- id="d2fb325c1de5fc9647c56b2ed9590350_at_mailnew.assystem.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.17.1265130012.11890.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Uninterruptible processes on 2*4 multicore<br>
<strong>From:</strong> Lionel Chailan (<em>lchailan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-03 08:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="11958.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
&nbsp;Hi,
<br>
<p>As requested, follow some details about blocked job.
<br>
<p>This job includes 7 processes running on the same 8 cores.
<br>
When blocked, a process is waiting for write on disk and is stated D :
<br>
<p>=========================================================================
<br>
0x561df44e in write () from /lib32/libc.so.6
<br>
(gdb) where
<br>
#0 0x561df44e in write () from /lib32/libc.so.6
<br>
#1 0x560e2bd9 in std::__basic_file::sys_open ()
<br>
&nbsp;from /usr/lib32/libstdc++.so.6
<br>
#2 0x56089eab in std::basic_filebuf &gt;::_M_convert_to_external () from
<br>
/usr/lib32/libstdc++.so.6
<br>
#3 0x5608b0b3 in std::basic_filebuf &gt;::overflow
<br>
&nbsp;() from /usr/lib32/libstdc++.so.6
<br>
#4 0x560899d7 in std::basic_filebuf &gt;::sync ()
<br>
&nbsp;from /usr/lib32/libstdc++.so.6
<br>
#5 0x560b3c92 in std::ostream::flush () from /usr/lib32/libstdc++.so.6
<br>
#6 0x560b3d2d in std::flush &gt; ()
<br>
&nbsp;from /usr/lib32/libstdc++.so.6
<br>
#7 0x560b56b9 in std::endl &gt; ()
<br>
&nbsp;from /usr/lib32/libstdc++.so.6
<br>
...
<br>
=========================================================================
<br>
<p>The others seem to wait in poll system :
<br>
<p><p>=========================================================================
<br>
0x561e4408 in poll () from /lib32/libc.so.6
<br>
(gdb) where
<br>
#0 0x561e4408 in poll () from /lib32/libc.so.6
<br>
#1 0x57203917 in poll_dispatch ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#2 0x57202a3a in opal_event_base_loop ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#3 0x57202d47 in opal_event_loop ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#4 0x571f6d28 in opal_progress ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#5 0x56e89415 in ompi_request_default_wait_all ()
<br>
&nbsp;from /home/semar/pelican/ExternalPackages/etch/openmpi/lib/libmpi.so.0
<br>
#6 0x5743284f in ompi_coll_tuned_allreduce_intra_recursivedoubling ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#7 0x5742fdac in ompi_coll_tuned_allreduce_intra_dec_fixed ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/openmpi/mca_coll_tuned.so
<br>
#8 0x56e9d247 in PMPI_Allreduce ()
<br>
...
<br>
=========================================================================
<br>
<p><p>Another :
<br>
=========================================================================
<br>
#0 0x561e4408 in poll () from /lib32/libc.so.6
<br>
#1 0x57203917 in poll_dispatch ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#2 0x57202a3a in opal_event_base_loop ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#3 0x57202d47 in opal_event_loop ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#4 0x571f6d28 in opal_progress ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/libopen-pal.so.0
<br>
#5 0x5736b735 in mca_pml_ob1_recv ()
<br>
&nbsp;from /TMPCALCUL/lmpc/pelican/etch/openmpi/lib/openmpi/mca_pml_ob1.so
<br>
#6 0x56eac1f9 in PMPI_Recv ()
<br>
&nbsp;from /home/semar/pelican/ExternalPackages/etch/openmpi/lib/libmpi.so.0
<br>
#7 0x55c6a7ba in EXT_MPIcommunicator::receive ()
<br>
...
<br>
=========================================================================
<br>
<p>The more strange is that when stopping a precise process (here the second
<br>
one ans only this one), all the others restart normally.
<br>
It seems in fact that poll request of this process block system file and
<br>
prevents first process (writing file) to join the others.
<br>
It should be noticed that it happens aleatory for a long time and it repairs
<br>
itself after some time (several mn of timeout).
<br>
<p><p><span class="quotelev1">&gt; Can you send all the information listed on the getting help page on the
</span><br>
ompi web 
<br>
<span class="quotelev1">&gt; site? Also, information about your application would be helpful. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I experience some stange behaviour on multi-core node of our cluster that
</span><br>
I 
<br>
<span class="quotelev1">&gt; presume is linked to openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running for a long time, and several pseudo-nodes of a single
</span><br>
multicore node 
<br>
<span class="quotelev1">&gt; are concerned, one process freezes in a uninterrutible mode (D status) and
</span><br>
the 
<br>
<span class="quotelev1">&gt; others seem to wait for a long time (S status).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Concurrent processes over the the other pseudo-nodes are also frozen in D
</span><br>
mode.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When forcing the sleeping processes to sleep (kill -STOP), normal activity
</span><br>
of 
<br>
<span class="quotelev1">&gt; other processes is recovered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When interrupting blocked process at wakeup, it seems to be blocked in 
</span><br>
<span class="quotelev1">&gt; poll_dispatch method, and I guess that comment about multithread must be 
</span><br>
<span class="quotelev1">&gt; concerned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know more about this behaviour ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank a lot,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lionel 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nb : I'm using openmpi v1.3 on Linux debian etch distribution
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nodes are as following (/proc/cpuinfo):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rocessor : 0
</span><br>
<span class="quotelev1">&gt; vendor_id : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family : 6
</span><br>
<span class="quotelev1">&gt; model : 23
</span><br>
<span class="quotelev1">&gt; model name : Intel(R) Xeon(R) CPU E5440 @ 2.83GHz
</span><br>
<span class="quotelev1">&gt; stepping : 10
</span><br>
<span class="quotelev1">&gt; cpu MHz : 2833.422
</span><br>
<span class="quotelev1">&gt; cache size : 6144 KB
</span><br>
<span class="quotelev1">&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt; core id : 0
</span><br>
<span class="quotelev1">&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt; apicid : 0
</span><br>
<span class="quotelev1">&gt; initial apicid : 0
</span><br>
<span class="quotelev1">&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt; cpuid level : 13
</span><br>
<span class="quotelev1">&gt; wp : yes
</span><br>
<span class="quotelev1">&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat
</span><br>
pse36 clflush 
<br>
<span class="quotelev1">&gt; dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc
</span><br>
arch_perfm
<br>
<span class="quotelev1">&gt; on pebs bts rep_good nopl pni monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr
</span><br>
dca sse4_1 
<br>
<span class="quotelev1">&gt; lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips : 5666.84
</span><br>
<span class="quotelev1">&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes : 38 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lionel CHAILAN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ASSYSTEM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manager Technique Groupe Calcul Scientifique de PERTUIS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lchailan_at_[hidden] // 06.73.08.85.69
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Lionel CHAILAN
ASSYSTEM
Manager Technique Groupe Calcul Scientifique de PERTUIS
lchailan_at_[hidden] // 06.73.08.85.69
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Previous message:</strong> <a href="11987.php">Damien Hocking: "Re: [OMPI users] OpenMPI 1.4.2a snapshots on Windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="11958.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
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
