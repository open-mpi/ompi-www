<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn and oreted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 13:31:43 2009" -->
<!-- isoreceived="20090416173143" -->
<!-- sent="Fri, 17 Apr 2009 01:31:31 +0800" -->
<!-- isosent="20090416173131" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn and oreted" -->
<!-- id="49E76B73.5040904_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3097F902-E6B2-4A40-8E1F-0EF6DFB68EE4_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-04-16 13:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8961.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8959.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the info.
<br>
<p>meanwhile I have set:
<br>
<p>mpi_param_check = 0
<br>
<p>in my system-wide configuation file on workers
<br>
<p>and 
<br>
<p>mpi_param_check = 1
<br>
<p>on the master.
<br>
<p>Jerome
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks! That does indeed help clarify.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should also then configure OMPI with 
</span><br>
<span class="quotelev1">&gt; --disable-per-user-config-files. MPI procs will automatically look at 
</span><br>
<span class="quotelev1">&gt; the default MCA parameter file, which is probably on your master node 
</span><br>
<span class="quotelev1">&gt; (wherever mpirun was executed). However, they also look at the user's 
</span><br>
<span class="quotelev1">&gt; home directory for any user default param file and/or binary modules. So 
</span><br>
<span class="quotelev1">&gt; the home directory will again be automounted, this time by the MPI procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We created that option specifically to address the problem you describe. 
</span><br>
<span class="quotelev1">&gt; Hope it helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2009, at 8:57 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The orteds don't pass anything from MPI_Info to srun during a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_spawn. What the orteds do is to chdir to the specified wdir 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before spawning the child process to ensure that the child has the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct working directory, then the orted changes back to its default 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The orted working directory is set by the base environment. So your 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm arguments cause *all* orteds to use the specified directory as 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their &quot;home base&quot;. They will then use any given wdir keyval when they 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch their respective child processes, as described above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As a side note, it isn't clear to me why you care about the orted's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working directory. The orteds don't write anything there, or do 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything with respect to their &quot;home base&quot; - so why would this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matter? Or are you trying to specify the executable's path relative 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to where the orted is sitting?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let be specific. My worker nodes are homeless: the /home directory is 
</span><br>
<span class="quotelev2">&gt;&gt; automounted
</span><br>
<span class="quotelev2">&gt;&gt; (when needed) from the master node: orteds dont write anything, but 
</span><br>
<span class="quotelev2">&gt;&gt; they keep it mounted !
</span><br>
<span class="quotelev2">&gt;&gt; The idea is to avoid this by specifying a local working directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 16, 2009, at 4:02 AM, Jerome BENOIT wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; finally I got it:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passing the mca key/value `&quot;plm_slurm_args&quot;/&quot;--chdir /local/folder&quot;' 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does the trick.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a matter of fact, my code pass the MPI_Info key/value 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `&quot;wdir&quot;/&quot;/local/folder&quot;'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to MPI_Comm_spawn as well: the working directories on the nodes of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the spawned programs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are `nodes:/local/folder' as expected, but the working directory of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the oreted_s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is the working directory of the parent program. My guess is that the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Info key/vale
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may also be passed to `srun'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hth,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Again,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jerome BENOIT wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello List,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have just noticed that, when MPI_Comm_spawn is used to launch 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; programs around,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; oreted working directory on the nodes is the working directory of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the spawnning program:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can we ask to oreted to use an another directory ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Changing the working the directory via chdir before spawning with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes nothing: the oreted working directory on the nodes seems to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be imposed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by something else. As run OMPI on top of SLURM, I guess this is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; related to SLURM.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jerome
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jerome _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8961.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8959.php">Francesco Pietra: "Re: [OMPI users] Intel compiler libraries (was: libnuma issue)"</a>
<li><strong>In reply to:</strong> <a href="8954.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
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
