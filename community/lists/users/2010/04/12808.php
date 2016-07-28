<?
$subject_val = "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 16:26:25 2010" -->
<!-- isoreceived="20100426202625" -->
<!-- sent="Mon, 26 Apr 2010 16:26:20 -0400" -->
<!-- isosent="20100426202620" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using new OMPI1.4.1 vie SGE" -->
<!-- id="4BD5F6EC.7080708_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="i2h76aeda4a1004261148i79713901s66a417223c3916bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem using new OMPI1.4.1 vie SGE<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 16:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Apr 26, 2010, at 9:08 AM, Matthew MacManes wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I am using SGE to submit jobs to one of the TeraGrid sites,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         specifically TACC-RANGER. The problem, is, that I am using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         program that requires OpenMPI version 1.4.1, and the latest
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         install on RANGER is 1.3.1. I was told that I could install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OpenMPI in my home directory, and run jobs using my newer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         version.. However, I am having problems doing this, getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the error message seen below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Its seems that the compute nodes are not accessing all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sufficient libraries for the newer version of OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Can anybody tell me what I can do to get the jobs running
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         using the newer version of OpenMPI. Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TACC: Setting memory limits for job 1349843 to 3984588 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TACC: Dumping job script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         export TMPDIR=$SCRATCH/abyss_tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/openmpi-1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cd /work/01301/mmacmane/Ray-0.0.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         module load openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -N testing_MRNA2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -j y
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -o /work/01301/mmacmane/Ray-0.0.6/testing_MRNA2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -pe 8way 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -q normal   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -l h_rt=2:00:00   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -M    macmanes_at_[hidden] &lt;mailto:macmanes_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -m be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #$ -V
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /work/01301/mmacmane/bin/mpirun Ray
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /work/01301/mmacmane/Ray-0.0.6/Ray_snp.txt--------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         TACC: Done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Module mvapich superceded
</span><br>
<p>Your job script is incorrect. Specifically, define your LD_LIBRARY_PATH
<br>
6 different times, with each one overwriting the previous definition:
<br>
<p>LD_LIBRARY_PATH=/work/01301/mmacmane
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane/bin
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane/include
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane/etc
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane/lib
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane/openmpi-1.4.1
<br>
<p>After these lines, your LD_LIBRARY_PATH is set to
<br>
<p>/work/01301/mmacmane/openmpi-1.4.1
<br>
<p>This directory pointless to have in your LD_LIBRARY_PATH, too since that
<br>
directory itself won't contain any library files.
<br>
<p>The correct syntax to define your LD_LIBRARY_PATH with the above
<br>
directories would be this:
<br>
<p>LD_LIBRARY_PATH=/work/01301/mmacmane:/work/01301/mmacmane/bin:/work/01301/mmacmane/include:/work/01301/mmacmane/etc:/work/01301/mmacmane/openmpi-1.4.1
<br>
<p>But that can be simplified significantly, only one of these files
<br>
actually contains library files, /work/01301/mmacmane/lib, so you should
<br>
only need this:
<br>
<p>LD_LIBRARY_PATH=/work/01301/mmacmane/lib
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
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
