<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 09:50:29 2007" -->
<!-- isoreceived="20071218145029" -->
<!-- sent="Tue, 18 Dec 2007 07:50:18 -0700" -->
<!-- isosent="20071218145018" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="C38D2C3A.B9FC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AA57C47ACCD04E46B79317EA2CEEBE880C574C_at_fjldmail.fugro-jason.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 09:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4698.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/18/07 7:35 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot! Now it works!
</span><br>
<span class="quotelev1">&gt; The solution is to use mpirun -n 1 -hostfile my.hosts *.exe and pass MPI_Info
</span><br>
<span class="quotelev1">&gt; Key to the Spawn function!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more question: is it necessary to start my &quot;master&quot; program with
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe ?
</span><br>
<p>No, it isn't necessary - assuming that my_master_host is the first host
<br>
listed in your hostfile! If you are only executing one my_master.exe (i.e.,
<br>
you gave -n 1 to mpirun), then we will automatically map that process onto
<br>
the first host in your hostfile.
<br>
<p>If you want my_master.exe to go on someone other than the first host in the
<br>
file, then you have to give us the -host option.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there other possibilities for easy start?
</span><br>
<span class="quotelev1">&gt; I would say just to run ./my_master.exe , but then the master process doesn't
</span><br>
<span class="quotelev1">&gt; know about the available in the network hosts.
</span><br>
<p>You can set the hostfile parameter in your environment instead of on the
<br>
command line. Just set OMPI_MCA_rds_hostfile_path = my.hosts.
<br>
<p>You can then just run ./my_master.exe on the host where you want the master
<br>
to reside - everything should work the same.
<br>
<p>Just as an FYI: the name of that environmental variable is going to change
<br>
in the 1.3 release, but everything will still work the same.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks and regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 17, 2007 5:49 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;; Elena Zhebel
</span><br>
<span class="quotelev1">&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/17/07 8:19 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.2.3. , compiler glibc232, Linux Suse 10.0.
</span><br>
<span class="quotelev2">&gt;&gt; My &quot;master&quot; executable runs only on the one local host, then it spawns
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slaves&quot; (with MPI::Intracomm::Spawn).
</span><br>
<span class="quotelev2">&gt;&gt; My question was: how to determine the hosts where these &quot;slaves&quot; will be
</span><br>
<span class="quotelev2">&gt;&gt; spawned?
</span><br>
<span class="quotelev2">&gt;&gt; You said: &quot;You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev2">&gt;&gt; your job
</span><br>
<span class="quotelev2">&gt;&gt; in the original hostfile&quot;. How can I specify the host file? I can not
</span><br>
<span class="quotelev2">&gt;&gt; find it
</span><br>
<span class="quotelev2">&gt;&gt; in the documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...sorry about the lack of documentation. I always assumed that the MPI
</span><br>
<span class="quotelev1">&gt; folks in the project would document such things since it has little to do
</span><br>
<span class="quotelev1">&gt; with the underlying run-time, but I guess that fell through the cracks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two parts to your question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. how to specify the hosts to be used for the entire job. I believe that is
</span><br>
<span class="quotelev1">&gt; somewhat covered here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That FAQ tells you what a hostfile should look like, though you may already
</span><br>
<span class="quotelev1">&gt; know that. Basically, we require that you list -all- of the nodes that both
</span><br>
<span class="quotelev1">&gt; your master and slave programs will use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. how to specify which nodes are available for the master, and which for
</span><br>
<span class="quotelev1">&gt; the slave.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You would specify the host for your master on the mpirun command line with
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This directs Open MPI to map that specified executable on the specified host
</span><br>
<span class="quotelev1">&gt; - note that my_master_host must have been in my_hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a value
</span><br>
<span class="quotelev1">&gt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want
</span><br>
<span class="quotelev1">&gt; your slave to execute upon. Those hosts must have been included in
</span><br>
<span class="quotelev1">&gt; my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't currently support providing a hostfile for the slaves (as opposed
</span><br>
<span class="quotelev1">&gt; to the host-at-a-time string above). This may become available in a future
</span><br>
<span class="quotelev1">&gt; release - TBD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 17, 2007 3:31 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster
</span><br>
<span class="quotelev2">&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/12/07 5:46 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working on a MPI application where I'm using OpenMPI instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
<span class="quotelev2">&gt;&gt; spawns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
<span class="quotelev2">&gt;&gt; processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network as expected. But now I need to spawn processes over the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network
</span><br>
<span class="quotelev2">&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure from your description exactly what you are trying to do,
</span><br>
<span class="quotelev2">&gt;&gt; nor in
</span><br>
<span class="quotelev2">&gt;&gt; what environment this is all operating within or what version of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; you are using. Setting aside the environment and version issue, I'm
</span><br>
<span class="quotelev2">&gt;&gt; guessing
</span><br>
<span class="quotelev2">&gt;&gt; that you are running your executable over some specified set of hosts,
</span><br>
<span class="quotelev2">&gt;&gt; but
</span><br>
<span class="quotelev2">&gt;&gt; want to provide a different hostfile that specifies the hosts to be
</span><br>
<span class="quotelev2">&gt;&gt; used for
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;slave&quot; processes. Correct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If that is correct, then I'm afraid you can't do that in any version
</span><br>
<span class="quotelev2">&gt;&gt; of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI today. You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev2">&gt;&gt; your job
</span><br>
<span class="quotelev2">&gt;&gt; in the original hostfile. You can then specify a subset of those hosts
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; used by your original &quot;master&quot; program, and then specify a different
</span><br>
<span class="quotelev2">&gt;&gt; subset
</span><br>
<span class="quotelev2">&gt;&gt; to be used by the &quot;slaves&quot; when calling Spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But the system requires that you tell it -all- of the hosts that are
</span><br>
<span class="quotelev2">&gt;&gt; going
</span><br>
<span class="quotelev2">&gt;&gt; to be used at the beginning of the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, there is no plan to remove that requirement, though
</span><br>
<span class="quotelev2">&gt;&gt; there has
</span><br>
<span class="quotelev2">&gt;&gt; been occasional discussion about doing so at some point in the future.
</span><br>
<span class="quotelev2">&gt;&gt; No
</span><br>
<span class="quotelev2">&gt;&gt; promises that it will happen, though - managed environments, in
</span><br>
<span class="quotelev2">&gt;&gt; particular,
</span><br>
<span class="quotelev2">&gt;&gt; currently object to the idea of changing the allocation on-the-fly. We
</span><br>
<span class="quotelev2">&gt;&gt; may,
</span><br>
<span class="quotelev2">&gt;&gt; though, make a provision for purely hostfile-based environments (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; unmanaged) at some time in the future.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Elena
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="4700.php">pat.o'bryant_at_[hidden]: "[OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4698.php">Allan Menezes: "Re: [OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4782.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
