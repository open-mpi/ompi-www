<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 11:49:01 2007" -->
<!-- isoreceived="20071217164901" -->
<!-- sent="Mon, 17 Dec 2007 09:48:46 -0700" -->
<!-- isosent="20071217164846" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="C38BF67E.B9D1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AA57C47ACCD04E46B79317EA2CEEBE880C574A_at_fjldmail.fugro-jason.local" -->
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
<strong>Date:</strong> 2007-12-17 11:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4688.php">Jeff Squyres: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/17/07 8:19 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.2.3. , compiler glibc232, Linux Suse 10.0.
</span><br>
<span class="quotelev1">&gt; My &quot;master&quot; executable runs only on the one local host, then it spawns
</span><br>
<span class="quotelev1">&gt; &quot;slaves&quot; (with MPI::Intracomm::Spawn).
</span><br>
<span class="quotelev1">&gt; My question was: how to determine the hosts where these &quot;slaves&quot; will be
</span><br>
<span class="quotelev1">&gt; spawned?
</span><br>
<span class="quotelev1">&gt; You said: &quot;You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev1">&gt; your job
</span><br>
<span class="quotelev1">&gt; in the original hostfile&quot;. How can I specify the host file? I can not
</span><br>
<span class="quotelev1">&gt; find it
</span><br>
<span class="quotelev1">&gt; in the documentation.
</span><br>
<p>Hmmm...sorry about the lack of documentation. I always assumed that the MPI
<br>
folks in the project would document such things since it has little to do
<br>
with the underlying run-time, but I guess that fell through the cracks.
<br>
<p>There are two parts to your question:
<br>
<p>1. how to specify the hosts to be used for the entire job. I believe that is
<br>
somewhat covered here:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
<br>
<p>That FAQ tells you what a hostfile should look like, though you may already
<br>
know that. Basically, we require that you list -all- of the nodes that both
<br>
your master and slave programs will use.
<br>
<p>2. how to specify which nodes are available for the master, and which for
<br>
the slave.
<br>
<p>You would specify the host for your master on the mpirun command line with
<br>
something like:
<br>
<p>mpirun -n 1 -hostfile my_hostfile -host my_master_host my_master.exe
<br>
<p>This directs Open MPI to map that specified executable on the specified host
<br>
- note that my_master_host must have been in my_hostfile.
<br>
<p>Inside your master, you would create an MPI_Info key &quot;host&quot; that has a value
<br>
consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want
<br>
your slave to execute upon. Those hosts must have been included in
<br>
my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
<br>
<p>We don't currently support providing a hostfile for the slaves (as opposed
<br>
to the host-at-a-time string above). This may become available in a future
<br>
release - TBD.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and regards,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 17, 2007 3:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI::Intracomm::Spawn and cluster
</span><br>
<span class="quotelev1">&gt; configuration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/12/07 5:46 AM, &quot;Elena Zhebel&quot; &lt;ezhebel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on a MPI application where I'm using OpenMPI instead of
</span><br>
<span class="quotelev2">&gt;&gt; MPICH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
<span class="quotelev1">&gt; spawns
</span><br>
<span class="quotelev2">&gt;&gt; &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev2">&gt;&gt; over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same
</span><br>
<span class="quotelev2">&gt;&gt; host.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn
</span><br>
<span class="quotelev2">&gt;&gt; over
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; network as expected. But now I need to spawn processes over the
</span><br>
<span class="quotelev2">&gt;&gt; network
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev2">&gt;&gt; my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure from your description exactly what you are trying to do,
</span><br>
<span class="quotelev1">&gt; nor in
</span><br>
<span class="quotelev1">&gt; what environment this is all operating within or what version of Open
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; you are using. Setting aside the environment and version issue, I'm
</span><br>
<span class="quotelev1">&gt; guessing
</span><br>
<span class="quotelev1">&gt; that you are running your executable over some specified set of hosts,
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev1">&gt; want to provide a different hostfile that specifies the hosts to be
</span><br>
<span class="quotelev1">&gt; used for
</span><br>
<span class="quotelev1">&gt; the &quot;slave&quot; processes. Correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that is correct, then I'm afraid you can't do that in any version
</span><br>
<span class="quotelev1">&gt; of Open
</span><br>
<span class="quotelev1">&gt; MPI today. You have to specify all of the hosts that can be used by
</span><br>
<span class="quotelev1">&gt; your job
</span><br>
<span class="quotelev1">&gt; in the original hostfile. You can then specify a subset of those hosts
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; used by your original &quot;master&quot; program, and then specify a different
</span><br>
<span class="quotelev1">&gt; subset
</span><br>
<span class="quotelev1">&gt; to be used by the &quot;slaves&quot; when calling Spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the system requires that you tell it -all- of the hosts that are
</span><br>
<span class="quotelev1">&gt; going
</span><br>
<span class="quotelev1">&gt; to be used at the beginning of the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the moment, there is no plan to remove that requirement, though
</span><br>
<span class="quotelev1">&gt; there has
</span><br>
<span class="quotelev1">&gt; been occasional discussion about doing so at some point in the future.
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev1">&gt; promises that it will happen, though - managed environments, in
</span><br>
<span class="quotelev1">&gt; particular,
</span><br>
<span class="quotelev1">&gt; currently object to the idea of changing the allocation on-the-fly. We
</span><br>
<span class="quotelev1">&gt; may,
</span><br>
<span class="quotelev1">&gt; though, make a provision for purely hostfile-based environments (i.e.,
</span><br>
<span class="quotelev1">&gt; unmanaged) at some time in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Elena
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4690.php">Jeff Squyres: "Re: [OMPI users] Bug in oob_tcp_[in|ex]clude?"</a>
<li><strong>Previous message:</strong> <a href="4688.php">Jeff Squyres: "Re: [OMPI users] unable to open osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4685.php">Elena Zhebel: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4699.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
