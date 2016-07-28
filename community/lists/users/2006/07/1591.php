<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  7 15:13:02 2006" -->
<!-- isoreceived="20060707191302" -->
<!-- sent="Fri, 07 Jul 2006 15:12:51 -0400" -->
<!-- isosent="20060707191251" -->
<!-- name="Abhishek Agarwal" -->
<!-- email="a_agarwal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic COMM_WORLD" -->
<!-- id="BAY112-F223FE53D020F13551A5AED9E740_at_phx.gbl" -->
<!-- inreplyto="200607071449.04094.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Abhishek Agarwal (<em>a_agarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-07 15:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1592.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have done some work on this using MPICH which is very similar to OpenMPI 
<br>
usage.
<br>
<p>The i think this is working as soon as you spawn a process it creates a 
<br>
intercommunicator and you can comunicate with the corresponding working 
<br>
using that intercommunicator. If you want to communicate between two workers 
<br>
then you will have to merge all the processes which communicate into one 
<br>
intra communicator and pass that particular intracommunicator during 
<br>
communication.
<br>
<p>I hope this helps
<br>
Abhishek
<br>
Nortel Gov. Sol.
<br>
<p><span class="quotelev1">&gt;From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Dynamic COMM_WORLD
</span><br>
<span class="quotelev1">&gt;Date: Fri, 7 Jul 2006 14:49:04 -0400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, I was interested in the example such as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/node98.htm#Node98">http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/node98.htm#Node98</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The way I see it, there are litteraly two programs, a Manager program and a
</span><br>
<span class="quotelev1">&gt;Worker program which is started by the manager (the example doesn't show if
</span><br>
<span class="quotelev1">&gt;multiple workers are started by repeated calls to the spawn command). I
</span><br>
<span class="quotelev1">&gt;unsderstand that MPI_COMM_WORLD is somewhat static but I am unclear as to 
</span><br>
<span class="quotelev1">&gt;how
</span><br>
<span class="quotelev1">&gt;to communicate with future-spawned process... Is there an MPI_COMM_UNIVERSE
</span><br>
<span class="quotelev1">&gt;that we can drop in place of the MPI_COMM_WORLD? It's also not clear who
</span><br>
<span class="quotelev1">&gt;would be part of MPI_COMM_PARENT other than the process that spawned the
</span><br>
<span class="quotelev1">&gt;worker.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Well, I know I have some reading to perform on the whole dynamic/spawning
</span><br>
<span class="quotelev1">&gt;process, my query was really to know if OpenMPI was up and ready in that
</span><br>
<span class="quotelev1">&gt;field of MPI2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Le vendredi 7 juillet 2006 14:09, Edgar Gabriel a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Before I embark on a train that will run out of tracks, I wanted to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; get a WFF concerning the spwaning mechanisme in OpenMPI. The intent
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is that I would program a &quot;simple&quot; parallel application that would
</span><br>
<span class="quotelev3">&gt; &gt; &gt; demonstrate the ability of recent MPI implementations (OpenMPI) to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dynamically ADD or remove processes from the parallel task pool. Of
</span><br>
<span class="quotelev3">&gt; &gt; &gt; course, any documentation concerning these new features would also be
</span><br>
<span class="quotelev3">&gt; &gt; &gt; greatly appreciated ;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI supports spawning new processes as defined in the MPI-2
</span><br>
<span class="quotelev2">&gt; &gt; specification, see e.g.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;<a href="http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm">http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, please note, that this does not modify MPI_COMM_WORLD.
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD is a static communicator which can not be changed, even
</span><br>
<span class="quotelev2">&gt; &gt; in Open MPI...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Edgar
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Eric Thibodeau
</span><br>
<span class="quotelev1">&gt;Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt;T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt;C. (514) 710-0517
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1592.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] debugging with mpirun"</a>
<li><strong>Previous message:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
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
