<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 08:55:49 2011" -->
<!-- isoreceived="20110916125549" -->
<!-- sent="Fri, 16 Sep 2011 08:55:45 -0400" -->
<!-- isosent="20110916125545" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="CAANzjEmq9cQ50MVFYnO5Lk9hsSSEr=gzn1AwwuRUZsA_WR33nA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6EFBA84C-06C1-4B5F-AB4E-6828E0590CE8_at_eecs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-16 08:55:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17316.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Though I do not share George's pessimism about acceptance to the Open
<br>
MPI community, it has been slightly difficult to add such a
<br>
non-standard feature to the code base for various reasons.
<br>
<p>At ORNL, I have been developing a prototype for the MPI Forum Fault
<br>
Tolerance Working Group [1] of the Run-Through Stabilization proposal
<br>
[2,3]. This would allow the application to continue running and using
<br>
MPI functions even though processes fail during execution. We have
<br>
been doing some limited alpha releases for some friendly application
<br>
developers desiring to play with the prototype for a while now. We are
<br>
hoping to do a more public beta release in the coming months. I'll
<br>
likely post a message to the ompi-devel list once it is ready.
<br>
<p>-- Josh
<br>
<p>[1] <a href="http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage">http://svn.mpi-forum.org/trac/mpi-forum-web/wiki/FaultToleranceWikiPage</a>
<br>
[2] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization</a>
<br>
[3] See PDF on <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/ft/run_through_stabilization_2</a>
<br>
<p>On Thu, Sep 15, 2011 at 4:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Rob,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI community did consider such as option, but it deemed it as uninteresting. However, we (UTK team) have a patched version supporting several fault tolerant modes, including the one you described in your email. If you are interested please contact me directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Thanks,
</span><br>
<span class="quotelev1">&gt; &#160; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 20:43 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rob Stewart
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Previous message:</strong> <a href="17316.php">&#186;&#194;&#206;&#196;&#198;&#189;: "Re: [OMPI users] openmpi configure error"</a>
<li><strong>In reply to:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17318.php">Ralph Castain: "Re: [OMPI users] mpiexec option for node failure"</a>
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
