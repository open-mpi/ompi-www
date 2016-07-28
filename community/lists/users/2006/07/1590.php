<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  7 14:49:22 2006" -->
<!-- isoreceived="20060707184922" -->
<!-- sent="Fri, 7 Jul 2006 14:49:04 -0400" -->
<!-- isosent="20060707184904" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic COMM_WORLD" -->
<!-- id="200607071449.04094.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44AEA36B.2060403_at_cs.uh.edu" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-07 14:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>In reply to:</strong> <a href="1588.php">Edgar Gabriel: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I was interested in the example such as:
<br>
<p><a href="http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/node98.htm#Node98">http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/node98.htm#Node98</a>
<br>
<p>The way I see it, there are litteraly two programs, a Manager program and a 
<br>
Worker program which is started by the manager (the example doesn't show if 
<br>
multiple workers are started by repeated calls to the spawn command). I 
<br>
unsderstand that MPI_COMM_WORLD is somewhat static but I am unclear as to how 
<br>
to communicate with future-spawned process... Is there an MPI_COMM_UNIVERSE 
<br>
that we can drop in place of the MPI_COMM_WORLD? It's also not clear who 
<br>
would be part of MPI_COMM_PARENT other than the process that spawned the 
<br>
worker.
<br>
<p>Well, I know I have some reading to perform on the whole dynamic/spawning 
<br>
process, my query was really to know if OpenMPI was up and ready in that 
<br>
field of MPI2.
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p><p>Le vendredi 7 juillet 2006 14:09, Edgar Gabriel a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Before I embark on a train that will run out of tracks, I wanted to
</span><br>
<span class="quotelev2">&gt; &gt; get a WFF concerning the spwaning mechanisme in OpenMPI. The intent
</span><br>
<span class="quotelev2">&gt; &gt; is that I would program a &quot;simple&quot; parallel application that would
</span><br>
<span class="quotelev2">&gt; &gt; demonstrate the ability of recent MPI implementations (OpenMPI) to
</span><br>
<span class="quotelev2">&gt; &gt; dynamically ADD or remove processes from the parallel task pool. Of
</span><br>
<span class="quotelev2">&gt; &gt; course, any documentation concerning these new features would also be
</span><br>
<span class="quotelev2">&gt; &gt; greatly appreciated ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI supports spawning new processes as defined in the MPI-2 
</span><br>
<span class="quotelev1">&gt; specification, see e.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm">http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, please note, that this does not modify MPI_COMM_WORLD. 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD is a static communicator which can not be changed, even 
</span><br>
<span class="quotelev1">&gt; in Open MPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
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
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>In reply to:</strong> <a href="1588.php">Edgar Gabriel: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="1591.php">Abhishek Agarwal: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
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
