<?
$subject_val = "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 11:18:17 2010" -->
<!-- isoreceived="20100426151817" -->
<!-- sent="Mon, 26 Apr 2010 10:14:35 -0500" -->
<!-- isosent="20100426151435" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using new OMPI1.4.1 vie SGE" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640E5AB6A85D9_at_CRATUS.ttu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BD5AC5A.1030706_at_gmail.com" -->
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
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 11:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12785.php">long thai: "[OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<li><strong>Previous message:</strong> <a href="12783.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12782.php">Matthew MacManes: "[OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Reply:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Matthew,
<br>
<p>Not sure it it helps but I am guessing that
<br>
<p>module load openmpi  (in  bash script) is updating variables to RANGER openmpi installation. Try removing this line in your script file and resubmit your job, also
<br>
#$ -V in the submission script exports env variables from your current terminal. Check if you have the correct setting before your submit your job.
<br>
<p>Rangam
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Matthew MacManes [macmanes_at_[hidden]]
<br>
Sent: Monday, April 26, 2010 10:08 AM
<br>
To: Open Users
<br>
Subject: [OMPI users] problem using new OMPI1.4.1 vie SGE
<br>
<p>I am using SGE to submit jobs to one of the TeraGrid sites, specifically TACC-RANGER. The problem, is, that I am using a program that requires OpenMPI version 1.4.1, and the latest install on RANGER is 1.3.1. I was told that I could install OpenMPI in my home directory, and run jobs using my newer version.. However, I am having problems doing this, getting the error message seen below.
<br>
<p>Its seems that the compute nodes are not accessing all the sufficient libraries for the newer version of OpenMPI.
<br>
<p>Can anybody tell me what I can do to get the jobs running using the newer version of OpenMPI. Thanks!
<br>
<p>TACC: Setting memory limits for job 1349843 to 3984588 KB
<br>
TACC: Dumping job script:
<br>
--------------------------------------------------------------------------------
<br>
#!/bin/bash
<br>
export TMPDIR=$SCRATCH/abyss_tmp/
<br>
LD_LIBRARY_PATH=/work/01301/mmacmane
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
cd /work/01301/mmacmane/Ray-0.0.6
<br>
module load openmpi
<br>
#$ -N testing_MRNA2
<br>
#$ -j y
<br>
#$ -o /work/01301/mmacmane/Ray-0.0.6/testing_MRNA2
<br>
#$ -pe 8way 128
<br>
#$ -q normal
<br>
#$ -l h_rt=2:00:00
<br>
#$ -M    macmanes_at_[hidden]&lt;mailto:macmanes_at_[hidden]&gt;
<br>
#$ -m be
<br>
#$ -cwd
<br>
#$ -V
<br>
/work/01301/mmacmane/bin/mpirun Ray /work/01301/mmacmane/Ray-0.0.6/Ray_snp.txt--------------------------------------------------------------------------------
<br>
TACC: Done.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Module mvapich superceded
<br>
<p>Ray Copyright (C) 2010  S&#233;bastien Boisvert, Jacques Corbeil, Fran&#231;ois Laviolette
<br>
<a href="http://denovoassembler.sf.net/">http://denovoassembler.sf.net/</a>
<br>
This program comes with ABSOLUTELY NO WARRANTY.
<br>
This is free software, and you are welcome to redistribute it
<br>
under certain conditions; see &quot;gpl-3.0.txt&quot; for details.
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],114][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],119][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],123][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],17][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],42][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i128-412.ranger.tacc.utexas.edu][[29053,1],44][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],1][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],13][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],9][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],104][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],106][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],102][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],45][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],83][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],84][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],92][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],66][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],70][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],52][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],60][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],58][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],72][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],23][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],29][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],31][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],35][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],43][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],6][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],14][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],73][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i105-104.ranger.tacc.utexas.edu][[29053,1],77][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],75][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],99][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i156-212.ranger.tacc.utexas.edu][[29053,1],109][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],103][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],51][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],55][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],57][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],113][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],116][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],115][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],19][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],21][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],27][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],37][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],47][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],33][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],8][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],10][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],97][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],101][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],107][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],82][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],85][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],90][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],79][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],65][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],67][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],61][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],53][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],59][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],127][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],121][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],124][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],18][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],25][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],28][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],39][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],34][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],38][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],3][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],12][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],105][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],108][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],111][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],91][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],80][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],87][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],69][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],68][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],71][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],63][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i116-312.ranger.tacc.utexas.edu][[29053,1],48][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],49][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],16][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],24][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],26][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],125][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],122][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],126][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],40][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],41][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],46][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],15][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],7][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],11][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],100][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],110][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],96][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],88][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],89][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],94][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],76][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],64][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],78][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],62][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],50][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i116-312.ranger.tacc.utexas.edu][[29053,1],56][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],20][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i161-311.ranger.tacc.utexas.edu][[29053,1],22][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] [i161-311.ranger.tacc.utexas.edu][[29053,1],30][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.5.170 failed: No route to host (113)
<br>
connect() to 192.168.5.170 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],118][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],112][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],117][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],32][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i128-412.ranger.tacc.utexas.edu][[29053,1],36][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.4.244 failed: No route to host (113)
<br>
[i120-302.ranger.tacc.utexas.edu][[29053,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.13.99 failed: No route to host (113)
<br>
[i156-212.ranger.tacc.utexas.edu][[29053,1],98][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.16.232 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],86][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],95][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],93][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: No route to host (113)
<br>
[i105-104.ranger.tacc.utexas.edu][[29053,1],74][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.15.0 failed: No route to host (113)
<br>
[i116-312.ranger.tacc.utexas.edu][[29053,1],54][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.7.64 failed: No route to host (113)
<br>
[i180-212.ranger.tacc.utexas.edu][[29053,1],120][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.12.104 failed: Connection timed out (110)
<br>
[i170-204.ranger.tacc.utexas.edu][[29053,1],81][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.2.196 failed: Connection timed out (110)
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 24537) died unexpectedly with status 137 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[i120-302.ranger.tacc.utexas.edu:24530] [[29053,0],0]-[[29053,0],4] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i128-412.ranger.tacc.utexas.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i105-104.ranger.tacc.utexas.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i170-204.ranger.tacc.utexas.edu
<br>
[i161-311.ranger.tacc.utexas.edu:28177] [[29053,0],1] routed:binomial: Connection to lifeline [[29053,0],0] lost
<br>
[i156-212.ranger.tacc.utexas.edu:16331] [[29053,0],6] routed:binomial: Connection to lifeline [[29053,0],0] lost
<br>
[i180-212.ranger.tacc.utexas.edu:09688] [[29053,0],7] routed:binomial: Connection to lifeline [[29053,0],0] lost
<br>
TACC: Cleaning up after job: 1349843
<br>
TACC: Done.
<br>
_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12785.php">long thai: "[OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<li><strong>Previous message:</strong> <a href="12783.php">Ralph Castain: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12782.php">Matthew MacManes: "[OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Reply:</strong> <a href="12786.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
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
