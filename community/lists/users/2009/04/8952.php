<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and oreted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 10:57:27 2009" -->
<!-- isoreceived="20090416145727" -->
<!-- sent="Thu, 16 Apr 2009 22:57:20 +0800" -->
<!-- isosent="20090416145720" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and oreted" -->
<!-- id="49E74750.3040609_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02BA8C26-6613-4300-9613-D0BE635B75A4_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn and oreted<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 10:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thanks for the reply.
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The orteds don't pass anything from MPI_Info to srun during a 
</span><br>
<span class="quotelev1">&gt; comm_spawn. What the orteds do is to chdir to the specified wdir before 
</span><br>
<span class="quotelev1">&gt; spawning the child process to ensure that the child has the correct 
</span><br>
<span class="quotelev1">&gt; working directory, then the orted changes back to its default working 
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The orted working directory is set by the base environment. So your 
</span><br>
<span class="quotelev1">&gt; slurm arguments cause *all* orteds to use the specified directory as 
</span><br>
<span class="quotelev1">&gt; their &quot;home base&quot;. They will then use any given wdir keyval when they 
</span><br>
<span class="quotelev1">&gt; launch their respective child processes, as described above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a side note, it isn't clear to me why you care about the orted's 
</span><br>
<span class="quotelev1">&gt; working directory. The orteds don't write anything there, or do anything 
</span><br>
<span class="quotelev1">&gt; with respect to their &quot;home base&quot; - so why would this matter? Or are you 
</span><br>
<span class="quotelev1">&gt; trying to specify the executable's path relative to where the orted is 
</span><br>
<span class="quotelev1">&gt; sitting?
</span><br>
<p><p>Let be specific. My worker nodes are homeless: the /home directory is automounted
<br>
(when needed) from the master node: orteds dont write anything, but they keep it mounted !
<br>
The idea is to avoid this by specifying a local working directory.
<br>
<p>Jerome
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 4:02 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; finally I got it:
</span><br>
<span class="quotelev2">&gt;&gt; passing the mca key/value `&quot;plm_slurm_args&quot;/&quot;--chdir /local/folder&quot;' 
</span><br>
<span class="quotelev2">&gt;&gt; does the trick.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a matter of fact, my code pass the MPI_Info key/value 
</span><br>
<span class="quotelev2">&gt;&gt; `&quot;wdir&quot;/&quot;/local/folder&quot;'
</span><br>
<span class="quotelev2">&gt;&gt; to MPI_Comm_spawn as well: the working directories on the nodes of the 
</span><br>
<span class="quotelev2">&gt;&gt; spawned programs
</span><br>
<span class="quotelev2">&gt;&gt; are `nodes:/local/folder' as expected, but the working directory of 
</span><br>
<span class="quotelev2">&gt;&gt; the oreted_s
</span><br>
<span class="quotelev2">&gt;&gt; is the working directory of the parent program. My guess is that the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Info key/vale
</span><br>
<span class="quotelev2">&gt;&gt; may also be passed to `srun'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hth,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have just noticed that, when MPI_Comm_spawn is used to launch 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; programs around,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oreted working directory on the nodes is the working directory of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the spawnning program:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can we ask to oreted to use an another directory ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Changing the working the directory via chdir before spawning with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes nothing: the oreted working directory on the nodes seems to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be imposed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by something else. As run OMPI on top of SLURM, I guess this is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; related to SLURM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jerome _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8953.php">Jerome BENOIT: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>Previous message:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8951.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
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
