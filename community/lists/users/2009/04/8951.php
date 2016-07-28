<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and oreted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 10:45:02 2009" -->
<!-- isoreceived="20090416144502" -->
<!-- sent="Thu, 16 Apr 2009 08:44:53 -0600" -->
<!-- isosent="20090416144453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and oreted" -->
<!-- id="02BA8C26-6613-4300-9613-D0BE635B75A4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E7024B.2040509_at_mailsnare.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 10:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The orteds don't pass anything from MPI_Info to srun during a  
<br>
comm_spawn. What the orteds do is to chdir to the specified wdir  
<br>
before spawning the child process to ensure that the child has the  
<br>
correct working directory, then the orted changes back to its default  
<br>
working directory.
<br>
<p>The orted working directory is set by the base environment. So your  
<br>
slurm arguments cause *all* orteds to use the specified directory as  
<br>
their &quot;home base&quot;. They will then use any given wdir keyval when they  
<br>
launch their respective child processes, as described above.
<br>
<p>As a side note, it isn't clear to me why you care about the orted's  
<br>
working directory. The orteds don't write anything there, or do  
<br>
anything with respect to their &quot;home base&quot; - so why would this matter?  
<br>
Or are you trying to specify the executable's path relative to where  
<br>
the orted is sitting?
<br>
<p><p>On Apr 16, 2009, at 4:02 AM, Jerome BENOIT wrote:
<br>
<p><span class="quotelev1">&gt; Hi !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; finally I got it:
</span><br>
<span class="quotelev1">&gt; passing the mca key/value `&quot;plm_slurm_args&quot;/&quot;--chdir /local/folder&quot;'  
</span><br>
<span class="quotelev1">&gt; does the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a matter of fact, my code pass the MPI_Info key/value `&quot;wdir&quot;/&quot;/ 
</span><br>
<span class="quotelev1">&gt; local/folder&quot;'
</span><br>
<span class="quotelev1">&gt; to MPI_Comm_spawn as well: the working directories on the nodes of  
</span><br>
<span class="quotelev1">&gt; the spawned programs
</span><br>
<span class="quotelev1">&gt; are `nodes:/local/folder' as expected, but the working directory of  
</span><br>
<span class="quotelev1">&gt; the oreted_s
</span><br>
<span class="quotelev1">&gt; is the working directory of the parent program. My guess is that the  
</span><br>
<span class="quotelev1">&gt; MPI_Info key/vale
</span><br>
<span class="quotelev1">&gt; may also be passed to `srun'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hth,
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Again,
</span><br>
<span class="quotelev2">&gt;&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello List,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have just noticed that, when MPI_Comm_spawn is used to launch  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs around,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oreted working directory on the nodes is the working directory of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the spawnning program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can we ask to oreted to use an another directory ?
</span><br>
<span class="quotelev2">&gt;&gt; Changing the working the directory via chdir before spawning with  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; changes nothing: the oreted working directory on the nodes seems to  
</span><br>
<span class="quotelev2">&gt;&gt; be imposed
</span><br>
<span class="quotelev2">&gt;&gt; by something else. As run OMPI on top of SLURM, I guess this is  
</span><br>
<span class="quotelev2">&gt;&gt; related to SLURM.
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jerome _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Previous message:</strong> <a href="8950.php">Ralph Castain: "Re: [OMPI users] default current working directory of started application"</a>
<li><strong>In reply to:</strong> <a href="8944.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>Reply:</strong> <a href="8952.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
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
