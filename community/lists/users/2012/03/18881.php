<?
$subject_val = "Re: [OMPI users] Help with multicore AMD machine performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 08:17:13 2012" -->
<!-- isoreceived="20120330121713" -->
<!-- sent="Fri, 30 Mar 2012 16:17:08 +0400" -->
<!-- isosent="20120330121708" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with multicore AMD machine performance" -->
<!-- id="CAFamD4XBqZxwpnV6Ap-MU+Z7FBHodhve8LxOqgAPVZFH4Z6paw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B3C6FFE-53C9-455E-81AA-103ECE0C812B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with multicore AMD machine performance<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 08:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>In reply to:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can try running using this script:
<br>
#!/bin/bash
<br>
<p>s=$(($OMPI_COMM_WORLD_NODE_RANK))
<br>
<p>numactl --physcpubind=$((s)) --localalloc ./YOUR_PROG
<br>
<p>instead of 'mpirun ... ./YOUR_PROG' run 'mpirun ... ./SCRIPT
<br>
<p>I tried this with openmpi-1.5.4 and it helped.
<br>
<p>Best regards, Pavel Mezentsev
<br>
<p>P.S openmpi-1.5.5 bind processes correctly, so you can try it as well.
<br>
<p>2012/3/30 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I think you'd have much better luck using the developer's trunk as the
</span><br>
<span class="quotelev1">&gt; binding there is much better - e.g., you can bind to NUMA instead of just
</span><br>
<span class="quotelev1">&gt; cores. The 1.4 binding is pretty limited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2012, at 5:02 AM, Ricardo Fonseca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi guys
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm benchmarking our (well tested) parallel code on and AMD based
</span><br>
<span class="quotelev1">&gt; system, featuring 2x AMD Opteron(TM) Processor 6276, with 16 cores each for
</span><br>
<span class="quotelev1">&gt; a total of 32 cores. The system is running Scientific Linux 6.1 and OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.4.5.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I run a single core job the performance is as expected. However,
</span><br>
<span class="quotelev1">&gt; when I run with 32 processes the performance drops to about 60% (when
</span><br>
<span class="quotelev1">&gt; compared with other systems running the exact same problem, so this is not
</span><br>
<span class="quotelev1">&gt; a code scaling issue). I think this may have to do with core binding /
</span><br>
<span class="quotelev1">&gt; NUMA, but I haven't been able to get any improvement out of the bind-*
</span><br>
<span class="quotelev1">&gt; mpirun options.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt; Ricardo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S: Here's the output of lscpu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Architecture:          x86_64
</span><br>
<span class="quotelev2">&gt; &gt; CPU op-mode(s):        32-bit, 64-bit
</span><br>
<span class="quotelev2">&gt; &gt; Byte Order:            Little Endian
</span><br>
<span class="quotelev2">&gt; &gt; CPU(s):                32
</span><br>
<span class="quotelev2">&gt; &gt; On-line CPU(s) list:   0-31
</span><br>
<span class="quotelev2">&gt; &gt; Thread(s) per core:    2
</span><br>
<span class="quotelev2">&gt; &gt; Core(s) per socket:    8
</span><br>
<span class="quotelev2">&gt; &gt; CPU socket(s):         2
</span><br>
<span class="quotelev2">&gt; &gt; NUMA node(s):          4
</span><br>
<span class="quotelev2">&gt; &gt; Vendor ID:             AuthenticAMD
</span><br>
<span class="quotelev2">&gt; &gt; CPU family:            21
</span><br>
<span class="quotelev2">&gt; &gt; Model:                 1
</span><br>
<span class="quotelev2">&gt; &gt; Stepping:              2
</span><br>
<span class="quotelev2">&gt; &gt; CPU MHz:               2300.045
</span><br>
<span class="quotelev2">&gt; &gt; BogoMIPS:              4599.38
</span><br>
<span class="quotelev2">&gt; &gt; Virtualization:        AMD-V
</span><br>
<span class="quotelev2">&gt; &gt; L1d cache:             16K
</span><br>
<span class="quotelev2">&gt; &gt; L1i cache:             64K
</span><br>
<span class="quotelev2">&gt; &gt; L2 cache:              2048K
</span><br>
<span class="quotelev2">&gt; &gt; L3 cache:              6144K
</span><br>
<span class="quotelev2">&gt; &gt; NUMA node0 CPU(s):     0,2,4,6,8,10,12,14
</span><br>
<span class="quotelev2">&gt; &gt; NUMA node1 CPU(s):     16,18,20,22,24,26,28,30
</span><br>
<span class="quotelev2">&gt; &gt; NUMA node2 CPU(s):     1,3,5,7,9,11,13,15
</span><br>
<span class="quotelev2">&gt; &gt; NUMA node3 CPU(s):     17,19,21,23,25,27,29,31
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Ricardo Fonseca
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Associate Professor
</span><br>
<span class="quotelev2">&gt; &gt; GoLP - Grupo de Lasers e Plasmas
</span><br>
<span class="quotelev2">&gt; &gt; Instituto de Plasmas e Fus&#227;o Nuclear
</span><br>
<span class="quotelev2">&gt; &gt; Instituto Superior T&#233;cnico
</span><br>
<span class="quotelev2">&gt; &gt; Av. Rovisco Pais
</span><br>
<span class="quotelev2">&gt; &gt; 1049-001 Lisboa
</span><br>
<span class="quotelev2">&gt; &gt; Portugal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tel: +351 21 8419202
</span><br>
<span class="quotelev2">&gt; &gt; fax: +351 21 8464455
</span><br>
<span class="quotelev2">&gt; &gt; web: <a href="http://golp.ist.utl.pt/">http://golp.ist.utl.pt/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>In reply to:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="18882.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
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
