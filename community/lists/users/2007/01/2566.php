<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 09:44:20 2007" -->
<!-- isoreceived="20070130144420" -->
<!-- sent="Tue, 30 Jan 2007 09:44:10 -0500" -->
<!-- isosent="20070130144410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes." -->
<!-- id="BFD7C20F-0E89-47D0-9278-D6581D7AFC63_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A24ED13E8792884EBC90BE07F48DCE1502141195_at_XCH-MW-1V1.mw.nos.boeing.com" -->
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
<strong>Date:</strong> 2007-01-30 09:44:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2007, at 9:35 AM, Fisher, Mark S wrote:
<br>
<p><span class="quotelev1">&gt; The master process uses both MPI_ANY_SOURCE and MPI_ANY_TAG while
</span><br>
<span class="quotelev1">&gt; waiting for requests from slave processes. The slaves sometimes use
</span><br>
<span class="quotelev1">&gt; MPI_ANY_TAG but the source is always specified.
</span><br>
<p>I think you said that you only had corruption issues on the slave,  
<br>
right?  If so, the ANY_SOURCE/ANY_TAG on the master probably aren't  
<br>
the issue.
<br>
<p>But if you're doing ANY_TAG on the slaves, you might want to double  
<br>
check that that code is doing exactly what you think it's doing.  Are  
<br>
there any race conditions such that a message could be received on  
<br>
that ANY_TAG that you did not intend to receive there?  Look  
<br>
especially hard at non-blocking receives with ANY_TAG.
<br>
<p><span class="quotelev1">&gt; We have run the code through valgrid for a number of cases  
</span><br>
<span class="quotelev1">&gt; including the
</span><br>
<span class="quotelev1">&gt; one being used here.
</span><br>
<p>Excellent.
<br>
<p><span class="quotelev1">&gt; The code is Fortran 90 and we are using the FORTRAN 77 interface so  
</span><br>
<span class="quotelev1">&gt; I do
</span><br>
<span class="quotelev1">&gt; not believe this is a problem.
</span><br>
<p>Agreed; should not be an issue.
<br>
<p><span class="quotelev1">&gt; We are using Gigabit Ethernet.
</span><br>
<p>Ok, good.
<br>
<p><span class="quotelev1">&gt; I could look at LAM again to see if it would work. The code needs  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; in a specific working directory and we need some environment variable
</span><br>
<span class="quotelev1">&gt; set. This was not supported well in pre MPI 2. versions of MPI. For
</span><br>
<span class="quotelev1">&gt; MPICH1 I actually launch a script for the slaves so that we have the
</span><br>
<span class="quotelev1">&gt; proper setup before running the executable. Note I had tried that with
</span><br>
<span class="quotelev1">&gt; OpenMPI and it had an internal error in orterun. This is not a problem
</span><br>
<p>Really?  OMPI's mpirun does not depend on the executable being an MPI  
<br>
application -- indeed, you can &quot;mpirun -np 2 uptime&quot; with no  
<br>
problem.  What problem did you run into here?
<br>
<p><span class="quotelev1">&gt; since the mpirun can setup everything we need. If you think it is  
</span><br>
<span class="quotelev1">&gt; worth
</span><br>
<span class="quotelev1">&gt; while I will download and try it.
</span><br>
<p>&nbsp;From what you describe, it sounds like order of messaging may be the  
<br>
issue, not necessarily MPI handle types.  So let's hold off on that  
<br>
one for the moment (although LAM should be pretty straightforward to  
<br>
try -- you should be able to mpirun scripts with no problems; perhaps  
<br>
you can try it as a background effort when you have spare cycles /  
<br>
etc.), and look at your slave code for receiving.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 29, 2007 7:54 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Scrambled communications using ssh starter
</span><br>
<span class="quotelev1">&gt; onmultiple nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without analyzing your source, it's hard to say.  I will say that OMPI
</span><br>
<span class="quotelev1">&gt; may send fragments out of order, but we do, of course, provide the  
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev1">&gt; message ordering guarantees that MPI mandates.  So let me ask a few
</span><br>
<span class="quotelev1">&gt; leading questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Are you using any wildcards in your receives, such as MPI_ANY_SOURCE
</span><br>
<span class="quotelev1">&gt; or MPI_ANY_TAG?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Have you run your code through a memory-checking debugger such as
</span><br>
<span class="quotelev1">&gt; valgrind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I don't know what Scali MPI uses, but MPICH and Intel MPI use  
</span><br>
<span class="quotelev1">&gt; integers
</span><br>
<span class="quotelev1">&gt; for MPI handles.  Have you tried LAM/MPI as well?  It, like Open MPI,
</span><br>
<span class="quotelev1">&gt; uses pointers for MPI handles.  I mention this because apps that
</span><br>
<span class="quotelev1">&gt; unintentionally have code that takes advantage of integer handles can
</span><br>
<span class="quotelev1">&gt; sometimes behave unpredictably when switching to a pointer-based MPI
</span><br>
<span class="quotelev1">&gt; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - What network interconnect are you using between the two hosts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 25, 2007, at 4:22 PM, Fisher, Mark S wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Recently I wanted to try OpenMPI for use with our CFD flow solver
</span><br>
<span class="quotelev2">&gt;&gt; WINDUS. The code uses a master/slave methodology were the master
</span><br>
<span class="quotelev2">&gt;&gt; handles I/O and issues tasks for the slaves to perform. The original
</span><br>
<span class="quotelev2">&gt;&gt; parallel implementation was done in 1993 using PVM and in 1999 we
</span><br>
<span class="quotelev2">&gt;&gt; added support for MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When testing the code with Openmpi 1.1.2 it ran fine when running  
</span><br>
<span class="quotelev2">&gt;&gt; on a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; single machine. As soon as I ran on more than one machine I started
</span><br>
<span class="quotelev2">&gt;&gt; getting random errors right away (the attached tar ball has a good  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bad output). It looked like either the messages were out of order or
</span><br>
<span class="quotelev2">&gt;&gt; were for the other slave process. In the run mode used there is no
</span><br>
<span class="quotelev2">&gt;&gt; slave to slave communication. In the file the code died near the
</span><br>
<span class="quotelev2">&gt;&gt; beginning of the communication between master and slave. Sometimes it
</span><br>
<span class="quotelev2">&gt;&gt; will run further before it fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have included a tar file with the build and configuration info. The
</span><br>
<span class="quotelev2">&gt;&gt; two nodes are identical Xeon 2.8 GHZ machines running SLED 10. I am
</span><br>
<span class="quotelev2">&gt;&gt; running real-time (no queue) using the ssh starter using the  
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; appt file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev2">&gt;&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./
</span><br>
<span class="quotelev2">&gt;&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ssh --host copland -wdir /tmp/mpi.m209290 -np 2
</span><br>
<span class="quotelev2">&gt;&gt; ./__bcfdbeta.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above file fails but the following works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev2">&gt;&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./
</span><br>
<span class="quotelev2">&gt;&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ssh --host
</span><br>
<span class="quotelev2">&gt;&gt; skipper2 -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first process is the master and the second two are the slaves.
</span><br>
<span class="quotelev2">&gt;&gt; I am
</span><br>
<span class="quotelev2">&gt;&gt; not sure what is going wrong, the code runs fine with many other MPI
</span><br>
<span class="quotelev2">&gt;&gt; distributions (MPICH1/2, Intel, Scali...). I assume that either I
</span><br>
<span class="quotelev2">&gt;&gt; built it wrong or am not running it properly but I cannot see what I
</span><br>
<span class="quotelev2">&gt;&gt; am doing wrong. Any help would be appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;&lt;mpipb.tgz&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpipb.tgz&gt;
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
<li><strong>Next message:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>In reply to:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2567.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starteronmultiple nodes."</a>
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
