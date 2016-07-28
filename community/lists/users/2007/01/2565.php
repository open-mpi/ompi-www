<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 09:35:41 2007" -->
<!-- isoreceived="20070130143541" -->
<!-- sent="Tue, 30 Jan 2007 08:35:28 -0600" -->
<!-- isosent="20070130143528" -->
<!-- name="Fisher, Mark S" -->
<!-- email="mark.s.fisher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes." -->
<!-- id="A24ED13E8792884EBC90BE07F48DCE1502141195_at_XCH-MW-1V1.mw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0275058-6B17-4D4B-A20D-0B0FAB85DA9D_at_cisco.com" -->
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
<strong>From:</strong> Fisher, Mark S (<em>mark.s.fisher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 09:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2564.php">Adrian Knoth: "Re: [OMPI users] mpirun related"</a>
<li><strong>In reply to:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The master process uses both MPI_ANY_SOURCE and MPI_ANY_TAG while
<br>
waiting for requests from slave processes. The slaves sometimes use
<br>
MPI_ANY_TAG but the source is always specified.
<br>
<p>We have run the code through valgrid for a number of cases including the
<br>
one being used here. 
<br>
<p>The code is Fortran 90 and we are using the FORTRAN 77 interface so I do
<br>
not believe this is a problem.
<br>
<p>We are using Gigabit Ethernet. 
<br>
<p>I could look at LAM again to see if it would work. The code needs to be
<br>
in a specific working directory and we need some environment variable
<br>
set. This was not supported well in pre MPI 2. versions of MPI. For
<br>
MPICH1 I actually launch a script for the slaves so that we have the
<br>
proper setup before running the executable. Note I had tried that with
<br>
OpenMPI and it had an internal error in orterun. This is not a problem
<br>
since the mpirun can setup everything we need. If you think it is worth
<br>
while I will download and try it.
<br>
<p>-----Original Message-----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]] 
<br>
Sent: Monday, January 29, 2007 7:54 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Scrambled communications using ssh starter
<br>
onmultiple nodes.
<br>
<p>Without analyzing your source, it's hard to say.  I will say that OMPI
<br>
may send fragments out of order, but we do, of course, provide the same
<br>
message ordering guarantees that MPI mandates.  So let me ask a few
<br>
leading questions:
<br>
<p>- Are you using any wildcards in your receives, such as MPI_ANY_SOURCE
<br>
or MPI_ANY_TAG?
<br>
<p>- Have you run your code through a memory-checking debugger such as
<br>
valgrind?
<br>
<p>- I don't know what Scali MPI uses, but MPICH and Intel MPI use integers
<br>
for MPI handles.  Have you tried LAM/MPI as well?  It, like Open MPI,
<br>
uses pointers for MPI handles.  I mention this because apps that
<br>
unintentionally have code that takes advantage of integer handles can
<br>
sometimes behave unpredictably when switching to a pointer-based MPI
<br>
implementation.
<br>
<p>- What network interconnect are you using between the two hosts?
<br>
<p><p><p>On Jan 25, 2007, at 4:22 PM, Fisher, Mark S wrote:
<br>
<p><span class="quotelev1">&gt; Recently I wanted to try OpenMPI for use with our CFD flow solver 
</span><br>
<span class="quotelev1">&gt; WINDUS. The code uses a master/slave methodology were the master 
</span><br>
<span class="quotelev1">&gt; handles I/O and issues tasks for the slaves to perform. The original 
</span><br>
<span class="quotelev1">&gt; parallel implementation was done in 1993 using PVM and in 1999 we 
</span><br>
<span class="quotelev1">&gt; added support for MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When testing the code with Openmpi 1.1.2 it ran fine when running on a
</span><br>
<p><span class="quotelev1">&gt; single machine. As soon as I ran on more than one machine I started 
</span><br>
<span class="quotelev1">&gt; getting random errors right away (the attached tar ball has a good and
</span><br>
<p><span class="quotelev1">&gt; bad output). It looked like either the messages were out of order or 
</span><br>
<span class="quotelev1">&gt; were for the other slave process. In the run mode used there is no 
</span><br>
<span class="quotelev1">&gt; slave to slave communication. In the file the code died near the 
</span><br>
<span class="quotelev1">&gt; beginning of the communication between master and slave. Sometimes it 
</span><br>
<span class="quotelev1">&gt; will run further before it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have included a tar file with the build and configuration info. The 
</span><br>
<span class="quotelev1">&gt; two nodes are identical Xeon 2.8 GHZ machines running SLED 10. I am 
</span><br>
<span class="quotelev1">&gt; running real-time (no queue) using the ssh starter using the following
</span><br>
<p><span class="quotelev1">&gt; appt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev1">&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./ 
</span><br>
<span class="quotelev1">&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh --host copland -wdir /tmp/mpi.m209290 -np 2 
</span><br>
<span class="quotelev1">&gt; ./__bcfdbeta.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above file fails but the following works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev1">&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./ 
</span><br>
<span class="quotelev1">&gt; __bcfdbeta.exe -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent 
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh --host
</span><br>
<span class="quotelev1">&gt; skipper2 -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first process is the master and the second two are the slaves.  
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev1">&gt; not sure what is going wrong, the code runs fine with many other MPI 
</span><br>
<span class="quotelev1">&gt; distributions (MPICH1/2, Intel, Scali...). I assume that either I 
</span><br>
<span class="quotelev1">&gt; built it wrong or am not running it properly but I cannot see what I 
</span><br>
<span class="quotelev1">&gt; am doing wrong. Any help would be appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;&lt;mpipb.tgz&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mpipb.tgz&gt;
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Previous message:</strong> <a href="2564.php">Adrian Knoth: "Re: [OMPI users] mpirun related"</a>
<li><strong>In reply to:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2566.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
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
