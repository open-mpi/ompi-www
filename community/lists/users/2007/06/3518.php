<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 13:59:22 2007" -->
<!-- isoreceived="20070620175922" -->
<!-- sent="Wed, 20 Jun 2007 12:59:18 -0500" -->
<!-- isosent="20070620175918" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI / SLURM Job Issues" -->
<!-- id="46796AF6.8090700_at_uark.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 13:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3519.php">Tim Mattox: "[OMPI users] Open MPI v1.2.3 released"</a>
<li><strong>Previous message:</strong> <a href="3517.php">Mostyn Lewis: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just started working with OpenMPI / SLURM combo this morning. I can 
<br>
successfully launch this job from the command line and it runs to 
<br>
completion, but when launching from SLURM they hang.
<br>
<p>They appear to just sit with no load apparent on the compute nodes even 
<br>
though SLURM indicates they are running...
<br>
<p>[jpummil_at_trillion ~]$ sinfo -l
<br>
Wed Jun 20 12:32:29 2007
<br>
PARTITION AVAIL  TIMELIMIT   JOB_SIZE ROOT SHARE     GROUPS  NODES       
<br>
STATE NODELIST
<br>
debug*       up   infinite 1-infinite   no    no        all      8   
<br>
allocated compute-1-[1-8]
<br>
debug*       up   infinite 1-infinite   no    no        all      
<br>
1        idle compute-1-0
<br>
<p>[jpummil_at_trillion ~]$ squeue -l
<br>
Wed Jun 20 12:32:20 2007
<br>
&nbsp;&nbsp;JOBID PARTITION     NAME     USER    STATE       TIME TIMELIMIT  NODES 
<br>
NODELIST(REASON)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;79     debug   mpirun  jpummil  RUNNING       5:27 UNLIMITED      2 
<br>
compute-1-[1-2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;78     debug   mpirun  jpummil  RUNNING       5:58 UNLIMITED      2 
<br>
compute-1-[3-4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;77     debug   mpirun  jpummil  RUNNING       7:00 UNLIMITED      2 
<br>
compute-1-[5-6]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;74     debug   mpirun  jpummil  RUNNING      11:39 UNLIMITED      2 
<br>
compute-1-[7-8]
<br>
<p>Are there any known issues of this nature involving OpenMPI and SLURM?
<br>
<p>Thanks!
<br>
<p>Jeff F. Pummill
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3519.php">Tim Mattox: "[OMPI users] Open MPI v1.2.3 released"</a>
<li><strong>Previous message:</strong> <a href="3517.php">Mostyn Lewis: "Re: [OMPI users] error -- libtool unsupported hardcode properties"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Reply:</strong> <a href="3526.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
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
