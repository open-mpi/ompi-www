<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 15:05:27 2009" -->
<!-- isoreceived="20090402190527" -->
<!-- sent="Thu, 2 Apr 2009 14:05:22 -0500" -->
<!-- isosent="20090402190522" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="18901.3186.286515.965448_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49D506E5.7000804_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 15:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ It is considered bad form to publically reply to a private message. What I
<br>
had sent you earlier was a private mail. ]
<br>
<p>On 3 April 2009 at 02:41, Jerome BENOIT wrote:
<br>
| 
<br>
| -------- Original Message --------
<br>
| Subject: Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)
<br>
| Date: Fri, 03 Apr 2009 02:41:01 +0800
<br>
| From: Jerome BENOIT &lt;ml.jgmbenoit_at_[hidden]&gt;
<br>
| Reply-To: ml.jgmbenoit_at_[hidden]
<br>
| To: Dirk Eddelbuettel &lt;edd_at_[hidden]&gt;
<br>
| CC: ml.jgmbenoit_at_[hidden]
<br>
| References: &lt;49CE5244.2000607_at_[hidden]&gt;	&lt;CF5D8E90-17CA-4B60-AE85-2BC2EE318AED_at_[hidden]&gt;	&lt;49D4EF88.6060506_at_[hidden]&gt; &lt;18901.114.820349.347227_at_ron.nulle.part&gt;
<br>
| 
<br>
| Hello List,
<br>
| 
<br>
| so let me precise:
<br>
| 
<br>
| I submitted on a SLURM box the attached C source phello.c via sbatch with the attached script phello.sh
<br>
| 
<br>
| mpicc -o phello phello.c
<br>
| sbatch phello.sh
<br>
<p>Works for me (though I prefer salloc), suggesting that you did something to
<br>
your network topology or Open MPI configuration:
<br>
<p>:~$ cat /tmp/jerome_hw.c
<br>
// mpicc -o phello phello.c
<br>
// mpirun -np 5 phello
<br>
<p>#include &lt;unistd.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int narg, char *args[]){
<br>
&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char ProcessorName[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ProcessorNameLength;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;narg,&amp;args);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(ProcessorName,&amp;ProcessorNameLength);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(11);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Hello world! I am %d of %d and my name is `%s'\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank,size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ProcessorName);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0; }
<br>
<p>//
<br>
// End of file `phello.c'.
<br>
<p>:~$ mpicc.openmpi -o /tmp/jerome_hw /tmp/jerome_hw.c
<br>
:~$ orterun -np 2 /tmp/jerome_hw
<br>
Hello world! I am 1 of 2 and my name is `xyz-1'
<br>
Hello world! I am 0 of 2 and my name is `xyz-1'
<br>
:~$ salloc orterun -np 2 /tmp/jerome_hw
<br>
salloc: Granted job allocation 421
<br>
Hello world! I am 0 of 2 and my name is `xyz-1'
<br>
Hello world! I am 1 of 2 and my name is `xyz-1'
<br>
salloc: Relinquishing job allocation 421
<br>
:~$
<br>
<p>| I have set no MCA parameter, and the firewalls are off, and the kernels (2.6.16) were built with no Security feature.
<br>
<p>Try simplifying further: no default hosts beside localhost etc.  Try orterun
<br>
before you try salloc.  Simplicity first.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8744.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
