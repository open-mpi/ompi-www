<?
$subject_val = "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 11:39:46 2010" -->
<!-- isoreceived="20100426153946" -->
<!-- sent="Mon, 26 Apr 2010 08:39:20 -0700" -->
<!-- isosent="20100426153920" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using new OMPI1.4.1 vie SGE" -->
<!-- id="r2s76aeda4a1004260839ke1523671w880994ab71f92018_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="24828D72-29C1-4EE4-A596-69BAB1B5DF7B_at_open-mpi.org" -->
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
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 11:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12783.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Reply:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks! Do you mean to pass '--enable-mpirun-prefix-by-default' when
<br>
configuring OpenMPI, or when configuring the program I am trying to use.
<br>
Sorry if this should be obvious!
<br>
<p>On Mon, Apr 26, 2010 at 08:13, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; First, is the directory where you installed OMPI 1.4.1 visible to all the
</span><br>
<span class="quotelev1">&gt; nodes? If not, then this won't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is, then try configuring with --enable-mpirun-prefix-by-default, and
</span><br>
<span class="quotelev1">&gt; be sure you specify a prefix that points to your installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2010, at 9:08 AM, Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using SGE to submit jobs to one of the TeraGrid sites, specifically
</span><br>
<span class="quotelev1">&gt; TACC-RANGER. The problem, is, that I am using a program that requires
</span><br>
<span class="quotelev1">&gt; OpenMPI version 1.4.1, and the latest install on RANGER is 1.3.1. I was told
</span><br>
<span class="quotelev1">&gt; that I could install OpenMPI in my home directory, and run jobs using my
</span><br>
<span class="quotelev1">&gt; newer version.. However, I am having problems doing this, getting the error
</span><br>
<span class="quotelev1">&gt; message seen below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its seems that the compute nodes are not accessing all the sufficient
</span><br>
<span class="quotelev1">&gt; libraries for the newer version of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody tell me what I can do to get the jobs running using the newer
</span><br>
<span class="quotelev1">&gt; version of OpenMPI. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TACC: Setting memory limits for job 1349843 to 3984588 KB
</span><br>
<span class="quotelev1">&gt; TACC: Dumping job script:
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; export TMPDIR=$SCRATCH/abyss_tmp/
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/include
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/etc
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/lib
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt; cd /work/01301/mmacmane/Ray-0.0.6
</span><br>
<span class="quotelev1">&gt; module load openmpi
</span><br>
<span class="quotelev1">&gt; #$ -N testing_MRNA2
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -o /work/01301/mmacmane/Ray-0.0.6/testing_MRNA2
</span><br>
<span class="quotelev1">&gt; #$ -pe 8way 128
</span><br>
<span class="quotelev1">&gt; #$ -q normal
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=2:00:00
</span><br>
<span class="quotelev1">&gt; #$ -M    macmanes_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #$ -m be
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; /work/01301/mmacmane/bin/mpirun Ray
</span><br>
<span class="quotelev1">&gt; /work/01301/mmacmane/Ray-0.0.6/Ray_snp.txt--------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; TACC: Done.
</span><br>
<span class="quotelev1">&gt;     Module mvapich superceded
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray Copyright (C) 2010  S&#233;bastien Boisvert, Jacques Corbeil, Fran&#231;ois
</span><br>
<span class="quotelev1">&gt; Laviolette
</span><br>
<span class="quotelev1">&gt; <a href="http://denovoassembler.sf.net/">http://denovoassembler.sf.net/</a>
</span><br>
<span class="quotelev1">&gt; This program comes with ABSOLUTELY NO WARRANTY.
</span><br>
<span class="quotelev1">&gt; This is free software, and you are welcome to redistribute it
</span><br>
<span class="quotelev1">&gt; under certain conditions; see &quot;gpl-3.0.txt&quot; for details.
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],114][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],119][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],123][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],17][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],42][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],44][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],13][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],9][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],104][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],106][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],102][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],45][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],83][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],84][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],92][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],66][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],70][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],52][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],60][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],58][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],72][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],23][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],29][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],31][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],35][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],43][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],73][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],77][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],75][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],99][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],109][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],103][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],51][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],55][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],57][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],113][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],116][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],115][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],19][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],21][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],27][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],37][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],47][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],33][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],8][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],97][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],101][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],107][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],82][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],85][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],90][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],79][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],65][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],67][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],61][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],53][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],59][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],127][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],121][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],124][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],18][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],25][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],28][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],39][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],34][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],38][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],105][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],108][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],111][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],91][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],80][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],87][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],69][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],68][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],71][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],63][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],48][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],49][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],16][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],24][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],26][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],125][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],122][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],126][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],40][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],41][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],46][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],15][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],11][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],100][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],110][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],96][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],88][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],89][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],94][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],76][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],64][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],78][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],62][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],50][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],56][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],20][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],22][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],30][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],118][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],112][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],117][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],32][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],36][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],98][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],86][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],95][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],93][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],74][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],54][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],120][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.12.104 failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],81][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt; connect() to 192.168.2.196 failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 24537) died unexpectedly with status 137 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [i120-302.ranger.tacc.utexas.edu:24530] [[29053,0],0]-[[29053,0],4]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     i128-412.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev1">&gt;     i105-104.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev1">&gt;     i170-204.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev1">&gt; [i161-311.ranger.tacc.utexas.edu:28177] [[29053,0],1] routed:binomial:
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev1">&gt; [i156-212.ranger.tacc.utexas.edu:16331] [[29053,0],6] routed:binomial:
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev1">&gt; [i180-212.ranger.tacc.utexas.edu:09688] [[29053,0],7] routed:binomial:
</span><br>
<span class="quotelev1">&gt; Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev1">&gt; TACC: Cleaning up after job: 1349843
</span><br>
<span class="quotelev1">&gt; TACC: Done.
</span><br>
<span class="quotelev1">&gt; _________________________________
</span><br>
<span class="quotelev1">&gt; Matthew MacManes
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; University of California- Berkeley
</span><br>
<span class="quotelev1">&gt; Museum of Vertebrate Zoology
</span><br>
<span class="quotelev1">&gt; Phone: 510-495-5833
</span><br>
<span class="quotelev1">&gt; Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev1">&gt; Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12787/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12783.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Reply:</strong> <a href="12788.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
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
