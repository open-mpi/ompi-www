<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 15:12:52 2009" -->
<!-- isoreceived="20090402191252" -->
<!-- sent="Fri, 03 Apr 2009 03:12:41 +0800" -->
<!-- isosent="20090402191241" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D50E29.5030903_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18901.3186.286515.965448_at_ron.nulle.part" -->
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
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 15:12:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am very sorry for may bad behaviour: I will try to be less confused the next time.
<br>
<p>Thanks a lot for the outputs and the hints,
<br>
Jerome
<br>
<p>Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; [ It is considered bad form to publically reply to a private message. What I
</span><br>
<span class="quotelev1">&gt; had sent you earlier was a private mail. ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 April 2009 at 02:41, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; | Subject: Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; | Date: Fri, 03 Apr 2009 02:41:01 +0800
</span><br>
<span class="quotelev1">&gt; | From: Jerome BENOIT &lt;ml.jgmbenoit_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; | Reply-To: ml.jgmbenoit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | To: Dirk Eddelbuettel &lt;edd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; | CC: ml.jgmbenoit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | References: &lt;49CE5244.2000607_at_[hidden]&gt;	&lt;CF5D8E90-17CA-4B60-AE85-2BC2EE318AED_at_[hidden]&gt;	&lt;49D4EF88.6060506_at_[hidden]&gt; &lt;18901.114.820349.347227_at_ron.nulle.part&gt;
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | Hello List,
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | so let me precise:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | I submitted on a SLURM box the attached C source phello.c via sbatch with the attached script phello.sh
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | mpicc -o phello phello.c
</span><br>
<span class="quotelev1">&gt; | sbatch phello.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works for me (though I prefer salloc), suggesting that you did something to
</span><br>
<span class="quotelev1">&gt; your network topology or Open MPI configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :~$ cat /tmp/jerome_hw.c
</span><br>
<span class="quotelev1">&gt; // mpicc -o phello phello.c
</span><br>
<span class="quotelev1">&gt; // mpirun -np 5 phello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int narg, char *args[]){
</span><br>
<span class="quotelev1">&gt;   int rank,size;
</span><br>
<span class="quotelev1">&gt;         char ProcessorName[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;         int ProcessorNameLength;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;narg,&amp;args);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         MPI_Get_processor_name(ProcessorName,&amp;ProcessorNameLength);
</span><br>
<span class="quotelev1">&gt;         sleep(11);
</span><br>
<span class="quotelev1">&gt;         fprintf(stdout,
</span><br>
<span class="quotelev1">&gt;                         &quot;Hello world! I am %d of %d and my name is `%s'\n&quot;,
</span><br>
<span class="quotelev1">&gt;                 rank,size,
</span><br>
<span class="quotelev1">&gt;                 ProcessorName);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   return 0; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; // End of file `phello.c'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :~$ mpicc.openmpi -o /tmp/jerome_hw /tmp/jerome_hw.c
</span><br>
<span class="quotelev1">&gt; :~$ orterun -np 2 /tmp/jerome_hw
</span><br>
<span class="quotelev1">&gt; Hello world! I am 1 of 2 and my name is `xyz-1'
</span><br>
<span class="quotelev1">&gt; Hello world! I am 0 of 2 and my name is `xyz-1'
</span><br>
<span class="quotelev1">&gt; :~$ salloc orterun -np 2 /tmp/jerome_hw
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 421
</span><br>
<span class="quotelev1">&gt; Hello world! I am 0 of 2 and my name is `xyz-1'
</span><br>
<span class="quotelev1">&gt; Hello world! I am 1 of 2 and my name is `xyz-1'
</span><br>
<span class="quotelev1">&gt; salloc: Relinquishing job allocation 421
</span><br>
<span class="quotelev1">&gt; :~$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; | I have set no MCA parameter, and the firewalls are off, and the kernels (2.6.16) were built with no Security feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try simplifying further: no default hosts beside localhost etc.  Try orterun
</span><br>
<span class="quotelev1">&gt; before you try salloc.  Simplicity first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8748.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
