<?
$subject_val = "[OMPI users] qsub/SGE and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 17:35:17 2010" -->
<!-- isoreceived="20100325213517" -->
<!-- sent="Thu, 25 Mar 2010 14:34:44 -0700" -->
<!-- isosent="20100325213444" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="[OMPI users] qsub/SGE and OpenMPI" -->
<!-- id="76aeda4a1003251434v6e7dd1e5w221064d1245147a4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] qsub/SGE and OpenMPI<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 17:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I am having an OpenMPI issue that seems to be relted to job scheduling- on
<br>
TACC, one of the TeraGrid resources.
<br>
<p>The program I am trying to run, ABySS, seems to run fine without scheduling-
<br>
i.e. when I run it on the login nodes without scheduling through qsub...
<br>
but, using that same commande, but scheduling it through qsub, the job
<br>
fails..
<br>
<p>Here is the qsub script, fyi:
<br>
<p>!/bin/bash	
<br>
#$ -N homo47
<br>
#$ -j y
<br>
#$ -o homo47
<br>
#$ -pe 16way 128
<br>
#$ -q normal	
<br>
<p>#$ -l h_rt=00:30:00	
<br>
#$ -M	macmanes_at_[hidden]
<br>
#$ -m be
<br>
cd /work/01301/mmacmane/abyss-1.1.2/bin
<br>
#$ -cwd
<br>
#$ -V
<br>
ibrun ./abyss-pe k=19 in='/work/01301/mmacmane/homo/*.fastq'
<br>
name='homo_47' n=5 s=200 c=13
<br>
<p><p>I get an error message:
<br>
<p>TACC: Done.
<br>
TACC: Starting up job 1299149
<br>
TACC: Setting up parallel environment for OpenMPI mpirun.
<br>
TACC: Setup complete. Running job script.
<br>
TACC: starting parallel tasks...
<br>
/opt/apps/pgi7_2/openmpi/1.3/bin/mpirun -np 64 ABYSS-P -k19 -c13
<br>
--coverage-hist=coverage.hist -s bubbles.fa  -o homo_61-1.fa
<br>
/work/01301/mmacmane/homo/SRR001665_1.fastq
<br>
/work/01301/mmacmane/homo/SRR001665_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002271_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002271_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002273_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002273_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002274_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002274_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002275_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002275_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002276_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002276_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002291_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002291_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002295_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002295_2.fastq
<br>
/work/01301/mmacmane/homo/SRR002297_1.fastq
<br>
/work/01301/mmacmane/homo/SRR002297_2.fastq
<br>
/work/01301/mmacmane/homo/SRR029337_1.fastq
<br>
/work/01301/mmacmane/homo/SRR029337_2.fastq
<br>
<p>...many many lines of this...
<br>
<p>[i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19] ORTE_ERROR_LOG:
<br>
A message is attempting to be sent to a process whose contact
<br>
information is unknown in file rml_oob_send.c at line 105
<br>
[i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19] could not get
<br>
route to [[INVALID],INVALID]
<br>
[i178-302.ranger.tacc.utexas.edu:28340] [[5795,1],19] ORTE_ERROR_LOG:
<br>
A message is attempting to be sent to a process whose contact
<br>
information is unknown in file base/plm_base_proxy.c at line 85
<br>
[i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] ORTE_ERROR_LOG: A
<br>
message is attempting to be sent to a process whose contact
<br>
information is unknown in file rml_oob_send.c at line 105
<br>
[i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] could not get
<br>
route to [[INVALID],INVALID]
<br>
[i176-303.ranger.tacc.utexas.edu:05045] [[5795,1],1] ORTE_ERROR_LOG: A
<br>
message is attempting to be sent to a process whose contact
<br>
information is unknown in file base/plm_base_proxy.c at line 85
<br>
[i178-302.ranger.tacc.utexas.edu:28325] [[5795,1],18] ORTE_ERROR_LOG:
<br>
A message is attempting to be sent to a process whose contact
<br>
information is unknown in file rml_oob_send.c at line 105
<br>
[i178-302.ranger.tacc.utexas.edu:28325] [[5795,1],18] could not get
<br>
route to [[INVALID],INVALID]
<br>
<p>...many many lines of this...
<br>
<p>TACC: Cleaning up after job: 1299149
<br>
TACC: Done.
<br>
<p>The TACC systems administrators don't seem to have a great solution, and the
<br>
authors of the program say its MPI-related...
<br>
<p>_________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
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
