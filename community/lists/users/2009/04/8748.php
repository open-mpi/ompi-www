<?
$subject_val = "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 15:33:44 2009" -->
<!-- isoreceived="20090402193344" -->
<!-- sent="Fri, 03 Apr 2009 03:33:33 +0800" -->
<!-- isosent="20090402193333" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)" -->
<!-- id="49D5130D.706_at_mailsnare.net" -->
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
<strong>Date:</strong> 2009-04-02 15:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Again !
<br>
<p>Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; 
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
<p>The above submission works the same on my clusters.
<br>
But in fact, my issue involve interconnection between the nodes of the clusters:
<br>
in the above examples involve no connection between nodes.
<br>
<p>My cluster is a cluster of quadcore computers:
<br>
if in the sbatch script
<br>
<p>#SBATCH --nodes=7
<br>
#SBATCH --ntasks=15
<br>
<p>is replaced by
<br>
<p>#SBATCH --nodes=1
<br>
#SBATCH --ntasks=4
<br>
<p>everything is fine as no interconnection is involved.
<br>
<p>Can you test the inconnection part of the story ?
<br>
<p><p><span class="quotelev1">&gt; | I have set no MCA parameter, and the firewalls are off, and the kernels (2.6.16) were built with no Security feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try simplifying further: no default hosts beside localhost etc.  Try orterun
</span><br>
<span class="quotelev1">&gt; before you try salloc.  Simplicity first.
</span><br>
<p>I try to keep thing simple (and secure):
<br>
I will double check my set up.
<br>
<p>Thanks,
<br>
Jerome
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8747.php">Jerome BENOIT: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>In reply to:</strong> <a href="8746.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Reply:</strong> <a href="8749.php">Dirk Eddelbuettel: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
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
