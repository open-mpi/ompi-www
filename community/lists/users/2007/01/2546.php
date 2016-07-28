<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 25 16:23:53 2007" -->
<!-- isoreceived="20070125212353" -->
<!-- sent="Thu, 25 Jan 2007 15:22:49 -0600" -->
<!-- isosent="20070125212249" -->
<!-- name="Fisher, Mark S" -->
<!-- email="mark.s.fisher_at_[hidden]" -->
<!-- subject="[OMPI users] Scrambled communications using ssh starter on multiple nodes." -->
<!-- id="A24ED13E8792884EBC90BE07F48DCE1502141182_at_XCH-MW-1V1.mw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-01-25 16:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2547.php">sdamjad: "[OMPI users] Open mpi with MAC OSX on intel macs"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Reply:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Recently I wanted to try OpenMPI for use with our CFD flow solver
<br>
WINDUS. The code uses a master/slave methodology were the master handles
<br>
I/O and issues tasks for the slaves to perform. The original parallel
<br>
implementation was done in 1993 using PVM and in 1999 we added support
<br>
for MPI.
<br>
<p>When testing the code with Openmpi 1.1.2 it ran fine when running on a
<br>
single machine. As soon as I ran on more than one machine I started
<br>
getting random errors right away (the attached tar ball has a good and
<br>
bad output). It looked like either the messages were out of order or
<br>
were for the other slave process. In the run mode used there is no slave
<br>
to slave communication. In the file the code died near the beginning of
<br>
the communication between master and slave. Sometimes it will run
<br>
further before it fails. 
<br>
<p>I have included a tar file with the build and configuration info. The
<br>
two nodes are identical Xeon 2.8 GHZ machines running SLED 10. I am
<br>
running real-time (no queue) using the ssh starter using the following
<br>
appt file.
<br>
<p>-x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
<br>
skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./__bcfdbeta.exe
<br>
-x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
<br>
copland -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
<br>
<p>The above file fails but the following works:
<br>
<p>-x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
<br>
skipper2  -wdir /opt/scratch/m209290/ol.scr.16348 -np 1 ./__bcfdbeta.exe
<br>
-x PVMTASK -x BCFD_PS_MODE --mca pls_rsh_agent /usr/bin/ssh --host
<br>
skipper2 -wdir /tmp/mpi.m209290 -np 2 ./__bcfdbeta.exe
<br>
<p>The first process is the master and the second two are the slaves. I am
<br>
not sure what is going wrong, the code runs fine with many other MPI
<br>
distributions (MPICH1/2, Intel, Scali...). I assume that either I built
<br>
it wrong or am not running it properly but I cannot see what I am doing
<br>
wrong. Any help would be appreciated!
<br>
<p>&nbsp;&lt;&lt;mpipb.tgz&gt;&gt; 
<br>
<p>
<br><hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2546/mpipb.tgz">mpipb.tgz</a>
</ul>
<!-- attachment="mpipb.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2547.php">sdamjad: "[OMPI users] Open mpi with MAC OSX on intel macs"</a>
<li><strong>Previous message:</strong> <a href="2545.php">Jeff Squyres: "Re: [OMPI users] Trouble Building Open MPI on SGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
<li><strong>Reply:</strong> <a href="2559.php">Jeff Squyres: "Re: [OMPI users] Scrambled communications using ssh starter on multiple nodes."</a>
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
