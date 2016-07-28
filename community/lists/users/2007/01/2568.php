<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 10:09:30 2007" -->
<!-- isoreceived="20070130150930" -->
<!-- sent="Tue, 30 Jan 2007 10:09:20 -0500" -->
<!-- isosent="20070130150920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes." -->
<!-- id="6C9DFB36-4542-4440-A8B7-211944B128EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A24ED13E8792884EBC90BE07F48DCE1502141198_at_XCH-MW-1V1.mw.nos.boeing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 10:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any way that you can share the code?
<br>
<p>On Jan 30, 2007, at 9:57 AM, Fisher, Mark S wrote:
<br>
<p><span class="quotelev1">&gt; The slaves send specific requests to the master and then waits for a
</span><br>
<span class="quotelev1">&gt; reply to that request. For instance it might send a request to read a
</span><br>
<span class="quotelev1">&gt; variable from the file. The master will read the variable and send it
</span><br>
<span class="quotelev1">&gt; back with the same tag in response. Thus there is never more than one
</span><br>
<span class="quotelev1">&gt; response at a time to a given slave. We do not use any broadcast
</span><br>
<span class="quotelev1">&gt; functions in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact that it run ok on one host but not more than one host  
</span><br>
<span class="quotelev1">&gt; seems to
</span><br>
<span class="quotelev1">&gt; indicate something else is the problem. The code has been used for 13
</span><br>
<span class="quotelev1">&gt; years in parallel and runs with PVM and other MPI distros without any
</span><br>
<span class="quotelev1">&gt; problems. The communication patterns are very simple and only require
</span><br>
<span class="quotelev1">&gt; that message order be preserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 30, 2007 8:44 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Scrambled communications using ssh
</span><br>
<span class="quotelev1">&gt; starteronmultiple nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2007, at 9:35 AM, Fisher, Mark S wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The master process uses both MPI_ANY_SOURCE and MPI_ANY_TAG while
</span><br>
<span class="quotelev2">&gt;&gt; waiting for requests from slave processes. The slaves sometimes use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ANY_TAG but the source is always specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you said that you only had corruption issues on the slave,
</span><br>
<span class="quotelev1">&gt; right?  If so, the ANY_SOURCE/ANY_TAG on the master probably aren't  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if you're doing ANY_TAG on the slaves, you might want to double
</span><br>
<span class="quotelev1">&gt; check that that code is doing exactly what you think it's doing.  Are
</span><br>
<span class="quotelev1">&gt; there any race conditions such that a message could be received on  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; ANY_TAG that you did not intend to receive there?  Look especially  
</span><br>
<span class="quotelev1">&gt; hard
</span><br>
<span class="quotelev1">&gt; at non-blocking receives with ANY_TAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have run the code through valgrid for a number of cases including
</span><br>
<span class="quotelev2">&gt;&gt; the one being used here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The code is Fortran 90 and we are using the FORTRAN 77 interface so I
</span><br>
<span class="quotelev2">&gt;&gt; do not believe this is a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed; should not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are using Gigabit Ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could look at LAM again to see if it would work. The code needs to
</span><br>
<span class="quotelev2">&gt;&gt; be in a specific working directory and we need some environment
</span><br>
<span class="quotelev2">&gt;&gt; variable set. This was not supported well in pre MPI 2. versions of
</span><br>
<span class="quotelev2">&gt;&gt; MPI. For
</span><br>
<span class="quotelev2">&gt;&gt; MPICH1 I actually launch a script for the slaves so that we have the
</span><br>
<span class="quotelev2">&gt;&gt; proper setup before running the executable. Note I had tried that  
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI and it had an internal error in orterun. This is not a  
</span><br>
<span class="quotelev2">&gt;&gt; problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Really?  OMPI's mpirun does not depend on the executable being an MPI
</span><br>
<span class="quotelev1">&gt; application -- indeed, you can &quot;mpirun -np 2 uptime&quot; with no problem.
</span><br>
<span class="quotelev1">&gt; What problem did you run into here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; since the mpirun can setup everything we need. If you think it is
</span><br>
<span class="quotelev2">&gt;&gt; worth while I will download and try it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From what you describe, it sounds like order of messaging may be the
</span><br>
<span class="quotelev1">&gt; issue, not necessarily MPI handle types.  So let's hold off on that  
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt; for the moment (although LAM should be pretty straightforward to  
</span><br>
<span class="quotelev1">&gt; try --
</span><br>
<span class="quotelev1">&gt; you should be able to mpirun scripts with no problems; perhaps you can
</span><br>
<span class="quotelev1">&gt; try it as a background effort when you have spare cycles / etc.), and
</span><br>
<span class="quotelev1">&gt; look at your slave code for receiving.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, January 29, 2007 7:54 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Scrambled communications using ssh starter
</span><br>
<span class="quotelev2">&gt;&gt; onmultiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Without analyzing your source, it's hard to say.  I will say that  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; may send fragments out of order, but we do, of course, provide the
</span><br>
<span class="quotelev2">&gt;&gt; same message ordering guarantees that MPI mandates.  So let me ask a
</span><br>
<span class="quotelev2">&gt;&gt; few leading questions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Are you using any wildcards in your receives, such as  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ANY_SOURCE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or MPI_ANY_TAG?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Have you run your code through a memory-checking debugger such as
</span><br>
<span class="quotelev2">&gt;&gt; valgrind?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - I don't know what Scali MPI uses, but MPICH and Intel MPI use
</span><br>
<span class="quotelev2">&gt;&gt; integers for MPI handles.  Have you tried LAM/MPI as well?  It, like
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI, uses pointers for MPI handles.  I mention this because apps
</span><br>
<span class="quotelev2">&gt;&gt; that unintentionally have code that takes advantage of integer  
</span><br>
<span class="quotelev2">&gt;&gt; handles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can sometimes behave unpredictably when switching to a pointer-based
</span><br>
<span class="quotelev2">&gt;&gt; MPI implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - What network interconnect are you using between the two hosts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2007, at 4:22 PM, Fisher, Mark S wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently I wanted to try OpenMPI for use with our CFD flow solver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WINDUS. The code uses a master/slave methodology were the master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; handles I/O and issues tasks for the slaves to perform. The original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel implementation was done in 1993 using PVM and in 1999 we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added support for MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When testing the code with Openmpi 1.1.2 it ran fine when running on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single machine. As soon as I ran on more than one machine I started
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting random errors right away (the attached tar ball has a good
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bad output). It looked like either the messages were out of order or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were for the other slave process. In the run mode used there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slave to slave communication. In the file the code died near the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beginning of the communication between master and slave.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sometimes it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will run further before it fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have included a tar file with the build and configuration info.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two nodes are identical Xeon 2.8 GHZ machines running SLED 10. I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running real-time (no queue) using the ssh starter using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appt file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ssh --host copland -wdir /tmp/mpi.m209290 -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./__bcfdbeta.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The above file fails but the following works:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ssh --host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipper2 -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The first process is the master and the second two are the slaves.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not sure what is going wrong, the code runs fine with many other MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributions (MPICH1/2, Intel, Scali...). I assume that either I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built it wrong or am not running it properly but I cannot see what I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am doing wrong. Any help would be appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;&lt;mpipb.tgz&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpipb.tgz&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2569.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using sshstarteronmultiple nodes."</a>
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
