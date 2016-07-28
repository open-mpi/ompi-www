<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 18 08:39:34 2011" -->
<!-- isoreceived="20110918123934" -->
<!-- sent="Sun, 18 Sep 2011 06:39:26 -0600" -->
<!-- isosent="20110918123926" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="E421558E-A8D8-42F0-B86D-EC88A91531FA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="381D2ED5-045F-4F79-9397-0007086ED3E4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec option for node failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-18 08:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Previous message:</strong> <a href="17322.php">Evghenii Gaburov: "[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(sigh) let me clarify this to resolve some offlist chatter.
<br>
<p>It would be rather simple to implement an option that allowed an MPI job to continue executing after the failure of one or more processes. The problem is that OMPI's MPI layer does not yet know how to handle that situation. As Josh indicated in his posting, there are several research branches out there that are exploring solutions. However, these are -research- branches - they have not been tested nor vetted by the overall OMPI developer community.
<br>
<p>So if I add the specified option to the OMPI code, it would (as of this moment) be up to the application to deal with the failure. While I could ensure that OMPI would clean up if/when the job finalized, it would be up to the application to ensure that the job actually reached that stage. For example, it would be up to the application to ensure that any collectives underway at the time of proc failure were properly exited so the job could finalize.
<br>
<p>As Josh said, at some point we expect these research branches to fold their results into the OMPI code base. Historically, we have found that this generally creates some period of instability - research code doesn't get exposed to the entire range of environments we support, and so there are usually problems that need to be ironed out. Using the code in a production environment before that has occurred is a &quot;use at your own risk&quot; venture.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Sep 16, 2011, at 8:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, I honestly don't remember even having that discussion. In looking at it, this would be relatively easy to implement if someone really wanted it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only issue: user would bear full responsibility for OMPI not cleaning up failed jobs since we wouldn't terminate upon seeing a proc fail. Definitely not something you'd want to do in production!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2011, at 6:55 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Though I do not share George's pessimism about acceptance to the Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI community, it has been slightly difficult to add such a
</span><br>
<span class="quotelev2">&gt;&gt; non-standard feature to the code base for various reasons.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At ORNL, I have been developing a prototype for the MPI Forum Fault
</span><br>
<span class="quotelev2">&gt;&gt; Tolerance Working Group [1] of the Run-Through Stabilization proposal
</span><br>
<span class="quotelev2">&gt;&gt; [2,3]. This would allow the application to continue running and using
</span><br>
<span class="quotelev2">&gt;&gt; MPI functions even though processes fail during execution. We have
</span><br>
<span class="quotelev2">&gt;&gt; been doing some limited alpha releases for some friendly application
</span><br>
<span class="quotelev2">&gt;&gt; developers desiring to play with the prototype for a while now. We are
</span><br>
<span class="quotelev2">&gt;&gt; hoping to do a more public beta release in the coming months. I'll
</span><br>
<span class="quotelev2">&gt;&gt; likely post a message to the ompi-devel list once it is ready.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [1] <a href="http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
</span><br>
<span class="quotelev2">&gt;&gt; [2] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
</span><br>
<span class="quotelev2">&gt;&gt; [3] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 15, 2011 at 4:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Open MPI community did consider such as option, but it deemed it as uninteresting. However, we (UTK team) have a patched version supporting several fault tolerant modes, including the one you described in your email. If you are interested please contact me directly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 12, 2011, at 20:43 , Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rob Stewart
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Previous message:</strong> <a href="17322.php">Evghenii Gaburov: "[OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
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
