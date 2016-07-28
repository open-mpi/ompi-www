<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 20:54:12 2007" -->
<!-- isoreceived="20070130015412" -->
<!-- sent="Mon, 29 Jan 2007 20:54:05 -0500" -->
<!-- isosent="20070130015405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes." -->
<!-- id="F0275058-6B17-4D4B-A20D-0B0FAB85DA9D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A24ED13E8792884EBC90BE07F48DCE1502141182_at_XCH-MW-1V1.mw.nos.boeing.com" -->
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
<strong>Date:</strong> 2007-01-29 20:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2546.php">Fisher, Mark S: "[OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Without analyzing your source, it's hard to say.  I will say that  
<br>
OMPI may send fragments out of order, but we do, of course, provide  
<br>
the same message ordering guarantees that MPI mandates.  So let me  
<br>
ask a few leading questions:
<br>
<p>- Are you using any wildcards in your receives, such as  
<br>
MPI_ANY_SOURCE or MPI_ANY_TAG?
<br>
<p>- Have you run your code through a memory-checking debugger such as  
<br>
valgrind?
<br>
<p>- I don't know what Scali MPI uses, but MPICH and Intel MPI use  
<br>
integers for MPI handles.  Have you tried LAM/MPI as well?  It, like  
<br>
Open MPI, uses pointers for MPI handles.  I mention this because apps  
<br>
that unintentionally have code that takes advantage of integer  
<br>
handles can sometimes behave unpredictably when switching to a  
<br>
pointer-based MPI implementation.
<br>
<p>- What network interconnect are you using between the two hosts?
<br>
<p><p><p>On Jan 25, 2007, at 4:22 PM, Fisher, Mark S wrote:
<br>
<p><span class="quotelev1">&gt; Recently I wanted to try OpenMPI for use with our CFD flow solver
</span><br>
<span class="quotelev1">&gt; WINDUS. The code uses a master/slave methodology were the master  
</span><br>
<span class="quotelev1">&gt; handles
</span><br>
<span class="quotelev1">&gt; I/O and issues tasks for the slaves to perform. The original parallel
</span><br>
<span class="quotelev1">&gt; implementation was done in 1993 using PVM and in 1999 we added support
</span><br>
<span class="quotelev1">&gt; for MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When testing the code with Openmpi 1.1.2 it ran fine when running on a
</span><br>
<span class="quotelev1">&gt; single machine. As soon as I ran on more than one machine I started
</span><br>
<span class="quotelev1">&gt; getting random errors right away (the attached tar ball has a good and
</span><br>
<span class="quotelev1">&gt; bad output). It looked like either the messages were out of order or
</span><br>
<span class="quotelev1">&gt; were for the other slave process. In the run mode used there is no  
</span><br>
<span class="quotelev1">&gt; slave
</span><br>
<span class="quotelev1">&gt; to slave communication. In the file the code died near the  
</span><br>
<span class="quotelev1">&gt; beginning of
</span><br>
<span class="quotelev1">&gt; the communication between master and slave. Sometimes it will run
</span><br>
<span class="quotelev1">&gt; further before it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have included a tar file with the build and configuration info. The
</span><br>
<span class="quotelev1">&gt; two nodes are identical Xeon 2.8 GHZ machines running SLED 10. I am
</span><br>
<span class="quotelev1">&gt; running real-time (no queue) using the ssh starter using the following
</span><br>
<span class="quotelev1">&gt; appt file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev1">&gt; skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./ 
</span><br>
<span class="quotelev1">&gt; __bcfdbeta.exe
</span><br>
<span class="quotelev1">&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
</span><br>
<span class="quotelev1">&gt; copland -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
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
<span class="quotelev1">&gt; __bcfdbeta.exe
</span><br>
<span class="quotelev1">&gt; -x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
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
<span class="quotelev1">&gt; built
</span><br>
<span class="quotelev1">&gt; it wrong or am not running it properly but I cannot see what I am  
</span><br>
<span class="quotelev1">&gt; doing
</span><br>
<span class="quotelev1">&gt; wrong. Any help would be appreciated!
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2560.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="2558.php">Ralph Castain: "Re: [OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2546.php">Fisher, Mark S: "[OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
<li><strong>Reply:</strong> <a href="2565.php">Fisher, Mark S: "Re: [OMPI users] Scrambled communications using ssh starter onmultiple nodes."</a>
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
