<?
$subject_val = "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:55:30 2010" -->
<!-- isoreceived="20100426185530" -->
<!-- sent="Mon, 26 Apr 2010 12:55:17 -0600" -->
<!-- isosent="20100426185517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using new OMPI1.4.1 vie SGE" -->
<!-- id="463D5767-0E57-478F-B2FE-5886F664685B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Previous message:</strong> <a href="12805.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My question about version wasn't &quot;why can't you use 1.3?&quot;. It was &quot;why do you believe the problems you are seeing are caused by not finding the correct version?&quot;.
<br>
<p>It looks to me like everything is working correctly, but that communications are blocked for some reason. That doesn't sound like a version mismatch, but rather like there is some reason why the nodes cannot communicate to each other.
<br>
<p>Note that OMPI isn't complaining about mis-matched messages - it is complaining that it cannot open a socket between various nodes. That has nothing to do with version, and all to do with network permissions/connectivity.
<br>
<p>Have you tried running this with -mca btl ^tcp ? Perhaps the issue is with the use of TCP for your interconnect.
<br>
<p>On Apr 26, 2010, at 12:48 PM, Matthew MacManes wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Its a no-go with the --enable-mpirun-prefix-by-default.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Version issue:  The program I am trying to run (RAY: <a href="http://sourceforge.net/apps/mediawiki/denovoassembler/index.php?title=Main_Page#Installation">http://sourceforge.net/apps/mediawiki/denovoassembler/index.php?title=Main_Page#Installation</a>) will not work with earlier versions of OpenMPI- this is confirmed both by the author and by my observations.. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 26, 2010 at 08:48, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; When configuring OMPI. Your configure should look like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;wherever&gt; --enable-mpirun-prefix-by-default .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious: what convinces you that you have a version mismatch? Connectivity failures can occur for a variety of reasons - this looks more like you have some kind of network access issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2010, at 9:39 AM, Matthew MacManes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks! Do you mean to pass '--enable-mpirun-prefix-by-default' when configuring OpenMPI, or when configuring the program I am trying to use. Sorry if this should be obvious! 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 26, 2010 at 08:13, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; First, is the directory where you installed OMPI 1.4.1 visible to all the nodes? If not, then this won't work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it is, then try configuring with --enable-mpirun-prefix-by-default, and be sure you specify a prefix that points to your installation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2010, at 9:08 AM, Matthew MacManes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using SGE to submit jobs to one of the TeraGrid sites, specifically TACC-RANGER. The problem, is, that I am using a program that requires OpenMPI version 1.4.1, and the latest install on RANGER is 1.3.1. I was told that I could install OpenMPI in my home directory, and run jobs using my newer version.. However, I am having problems doing this, getting the error message seen below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Its seems that the compute nodes are not accessing all the sufficient libraries for the newer version of OpenMPI. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody tell me what I can do to get the jobs running using the newer version of OpenMPI. Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TACC: Setting memory limits for job 1349843 to 3984588 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TACC: Dumping job script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------ --------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export TMPDIR=$SCRATCH/abyss_tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/work/01301/mmacmane/openmpi-1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd /work/01301/mmacmane/Ray-0.0.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module load openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -N testing_MRNA2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o /work/01301/mmacmane/Ray-0.0.6/testing_MRNA2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe 8way 128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -q normal    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -l h_rt=2:00:00    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -M    macmanes_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -m be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -V
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /work/01301/mmacmane/bin/mpirun Ray /work/01301/mmacmane/Ray-0.0.6/Ray_snp.txt--------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TACC: Done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Module mvapich superceded
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ray Copyright (C) 2010  S&#233;bastien Boisvert, Jacques Corbeil, Fran&#231;ois Laviolette
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://denovoassembler.sf.net/">http://denovoassembler.sf.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This program comes with ABSOLUTELY NO WARRANTY.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software, and you are welcome to redistribute it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under certain conditions; see &quot;gpl-3.0.txt&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],114][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],119][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],123][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],17][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],42][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i128-412.ranger.tacc.utexas.edu][[29053,1],44][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],13][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],9][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],104][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],106][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],102][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],45][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],83][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],84][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],92][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],66][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],70][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],52][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],60][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],58][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],72][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],23][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],29][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],31][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],35][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],43][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],73][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i105-104.ranger.tacc.utexas.edu][[29053,1],77][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],75][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],99][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i156-212.ranger.tacc.utexas.edu][[29053,1],109][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],103][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],51][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],55][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],57][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],113][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],116][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],115][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],19][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],21][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],27][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],37][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],47][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],33][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],8][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],97][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],101][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],107][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],82][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],85][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],90][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],79][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],65][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],67][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],61][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],53][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],59][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],127][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],121][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],124][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],18][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],25][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],28][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],39][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],34][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],38][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],105][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],108][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],111][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],91][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],80][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],87][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],69][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],68][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],71][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],63][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i116-312.ranger.tacc.utexas.edu][[29053,1],48][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],49][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],16][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],24][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],26][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],125][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],122][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],126][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],40][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],41][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],46][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],15][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],11][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],100][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],110][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],96][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],88][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],89][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],94][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],76][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],64][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],78][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],62][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],50][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i116-312.ranger.tacc.utexas.edu][[29053,1],56][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],20][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu][[29053,1],22][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i161-311.ranger.tacc.utexas.edu][[29053,1],30][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect() to 192.168.5.170 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],118][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],112][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],117][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],32][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i128-412.ranger.tacc.utexas.edu][[29053,1],36][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu][[29053,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu][[29053,1],98][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],86][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],95][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],93][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i105-104.ranger.tacc.utexas.edu][[29053,1],74][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i116-312.ranger.tacc.utexas.edu][[29053,1],54][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu][[29053,1],120][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: Connection timed out (110)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i170-204.ranger.tacc.utexas.edu][[29053,1],81][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: Connection timed out (110)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 24537) died unexpectedly with status 137 while attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------ --------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i120-302.ranger.tacc.utexas.edu:24530] [[29053,0],0]-[[29053,0],4] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     i128-412.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     i105-104.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     i170-204.ranger.tacc.utexas.edu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i161-311.ranger.tacc.utexas.edu:28177] [[29053,0],1] routed:binomial: Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i156-212.ranger.tacc.utexas.edu:16331] [[29053,0],6] routed:binomial: Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [i180-212.ranger.tacc.utexas.edu:09688] [[29053,0],7] routed:binomial: Connection to lifeline [[29053,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TACC: Cleaning up after job: 1349843
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TACC: Done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthew MacManes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of California- Berkeley
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Museum of Vertebrate Zoology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: 510-495-5833
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Previous message:</strong> <a href="12805.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
<li><strong>Reply:</strong> <a href="12807.php">Pooja Varshneya: "[OMPI users] [OMP users]: OpenMP1.4 tuning for sending large messages"</a>
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
