<?
$subject_val = "Re: [OMPI users] qsub/SGE and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 17:58:23 2010" -->
<!-- isoreceived="20100325215823" -->
<!-- sent="Thu, 25 Mar 2010 22:58:10 +0100" -->
<!-- isosent="20100325215810" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub/SGE and OpenMPI" -->
<!-- id="6655E0AB-02CF-47C4-A47C-B88ED2948E55_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="76aeda4a1003251434v6e7dd1e5w221064d1245147a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub/SGE and OpenMPI<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 17:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 25.03.2010 um 22:34 schrieb Matthew MacManes:
<br>
<p><span class="quotelev1">&gt; I am having an OpenMPI issue that seems to be relted to job  
</span><br>
<span class="quotelev1">&gt; scheduling- on TACC, one of the TeraGrid resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program I am trying to run, ABySS, seems to run fine without  
</span><br>
<span class="quotelev1">&gt; scheduling- i.e. when I run it on the login nodes without scheduling  
</span><br>
<span class="quotelev1">&gt; through qsub... but, using that same commande, but scheduling it  
</span><br>
<span class="quotelev1">&gt; through qsub, the job fails..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the qsub script, fyi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !/bin/bash	
</span><br>
<span class="quotelev1">&gt; #$ -N homo47
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -o homo47
</span><br>
<span class="quotelev1">&gt; #$ -pe 16way 128
</span><br>
<span class="quotelev1">&gt; #$ -q normal	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=00:30:00	
</span><br>
<span class="quotelev1">&gt; #$ -M	macmanes_at_[hidden]
</span><br>
<span class="quotelev1">&gt; #$ -m be
</span><br>
<span class="quotelev1">&gt; cd /work/01301/mmacmane/abyss-1.1.2/bin
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
most likely one of the two above lines would sufficient, -cwd would  
<br>
also make a `cd` two the current working directory.
<br>
<p><span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; ibrun ./abyss-pe k=19 in='/work/01301/mmacmane/homo/*.fastq'  
</span><br>
<span class="quotelev1">&gt; name='homo_47' n=5 s=200 c=13
</span><br>
What is `ibrun` doing in detail? Is this something you have to use to  
<br>
run a job in the Grid?
<br>
<p><span class="quotelev1">&gt; I get an error message:
</span><br>
<span class="quotelev1">&gt; TACC: Done.
</span><br>
<span class="quotelev1">&gt; TACC: Starting up job 1299149
</span><br>
<span class="quotelev1">&gt; TACC: Setting up parallel environment for OpenMPI mpirun.
</span><br>
<span class="quotelev1">&gt; TACC: Setup complete. Running job script.
</span><br>
<span class="quotelev1">&gt; TACC: starting parallel tasks...
</span><br>
<span class="quotelev1">&gt; /opt/apps/pgi7_2/openmpi/1.3/bin/mpirun -np 64 ABYSS-P
</span><br>
You application was also compiled with Open MPI  1.3, i.e. you use the  
<br>
same mpirun when you start it on the command line?
<br>
<p><span class="quotelev1">&gt;  -k19 -c13  --coverage-hist=coverage.hist -s bubbles.fa  -o  
</span><br>
<span class="quotelev1">&gt; homo_61-1.fa /work/01301/mmacmane/homo/SRR001665_1.fastq /work/01301/ 
</span><br>
<span class="quotelev1">&gt; mmacmane/homo/SRR001665_2.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002271_1.fastq /work/01301/mmacmane/homo/SRR002271_2.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR002273_1.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002273_2.fastq /work/01301/mmacmane/homo/SRR002274_1.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR002274_2.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002275_1.fastq /work/01301/mmacmane/homo/SRR002275_2.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR002276_1.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002276_2.fastq /work/01301/mmacmane/homo/SRR002291_1.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR002291_2.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002295_1.fastq /work/01301/mmacmane/homo/SRR002295_2.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR002297_1.fastq /work/01301/mmacmane/homo/ 
</span><br>
<span class="quotelev1">&gt; SRR002297_2.fastq /work/01301/mmacmane/homo/SRR029337_1.fastq /work/ 
</span><br>
<span class="quotelev1">&gt; 01301/mmacmane/homo/SRR029337_2.fastq
</span><br>
This comes from the expansion of the *, do you want to give the  
<br>
expression including the * to your application (in this case the  
<br>
expansion by the `ibrun` must be avoided)?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; ...many many lines of this...
</span><br>
<span class="quotelev1">&gt; [i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process  
</span><br>
<span class="quotelev1">&gt; whose contact information is unknown in file rml_oob_send.c at line  
</span><br>
<span class="quotelev1">&gt; 105
</span><br>
<span class="quotelev1">&gt; [i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19] could not get  
</span><br>
<span class="quotelev1">&gt; route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process  
</span><br>
<span class="quotelev1">&gt; whose contact information is unknown in file base/plm_base_proxy.c  
</span><br>
<span class="quotelev1">&gt; at line 85
</span><br>
<span class="quotelev1">&gt; [i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; A message is attempting to be sent to a process whose contact  
</span><br>
<span class="quotelev1">&gt; information is unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] could not get  
</span><br>
<span class="quotelev1">&gt; route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev1">&gt; A message is attempting to be sent to a process whose contact  
</span><br>
<span class="quotelev1">&gt; information is unknown in file base/plm_base_proxy.c at line 85
</span><br>
<span class="quotelev1">&gt; [i178-302.ranger.tacc.utexas.edu:28325] [[5795,1],18]  
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process  
</span><br>
<span class="quotelev1">&gt; whose contact information is unknown in file rml_oob_send.c at line  
</span><br>
<span class="quotelev1">&gt; 105
</span><br>
<span class="quotelev1">&gt; [i178-302.ranger.tacc.utexas.edu:28325] [[5795,1],18] could not get  
</span><br>
<span class="quotelev1">&gt; route to [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...many many lines of this...
</span><br>
<span class="quotelev1">&gt;  TACC: Cleaning up after job: 1299149
</span><br>
<span class="quotelev1">&gt; TACC: Done.
</span><br>
<span class="quotelev1">&gt; The TACC systems administrators don't seem to have a great solution,  
</span><br>
<span class="quotelev1">&gt; and the authors of the program say its MPI-related...
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
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
