<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 10:28:28 2011" -->
<!-- isoreceived="20110916142828" -->
<!-- sent="Fri, 16 Sep 2011 08:28:19 -0600" -->
<!-- isosent="20110916142819" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="381D2ED5-045F-4F79-9397-0007086ED3E4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEmq9cQ50MVFYnO5Lk9hsSSEr=gzn1AwwuRUZsA_WR33nA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-16 10:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I honestly don't remember even having that discussion. In looking at it, this would be relatively easy to implement if someone really wanted it.
<br>
<p>Only issue: user would bear full responsibility for OMPI not cleaning up failed jobs since we wouldn't terminate upon seeing a proc fail. Definitely not something you'd want to do in production!
<br>
<p><p>On Sep 16, 2011, at 6:55 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Though I do not share George's pessimism about acceptance to the Open
</span><br>
<span class="quotelev1">&gt; MPI community, it has been slightly difficult to add such a
</span><br>
<span class="quotelev1">&gt; non-standard feature to the code base for various reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At ORNL, I have been developing a prototype for the MPI Forum Fault
</span><br>
<span class="quotelev1">&gt; Tolerance Working Group [1] of the Run-Through Stabilization proposal
</span><br>
<span class="quotelev1">&gt; [2,3]. This would allow the application to continue running and using
</span><br>
<span class="quotelev1">&gt; MPI functions even though processes fail during execution. We have
</span><br>
<span class="quotelev1">&gt; been doing some limited alpha releases for some friendly application
</span><br>
<span class="quotelev1">&gt; developers desiring to play with the prototype for a while now. We are
</span><br>
<span class="quotelev1">&gt; hoping to do a more public beta release in the coming months. I'll
</span><br>
<span class="quotelev1">&gt; likely post a message to the ompi-devel list once it is ready.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
</span><br>
<span class="quotelev1">&gt; [2] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
</span><br>
<span class="quotelev1">&gt; [3] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 15, 2011 at 4:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rob,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI community did consider such as option, but it deemed it as uninteresting. However, we (UTK team) have a patched version supporting several fault tolerant modes, including the one you described in your email. If you are interested please contact me directly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2011, at 20:43 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rob Stewart
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="17319.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created	by	mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17317.php">Josh Hursey: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17323.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
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
