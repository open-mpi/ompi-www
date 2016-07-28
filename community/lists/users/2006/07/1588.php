<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  7 14:10:19 2006" -->
<!-- isoreceived="20060707181019" -->
<!-- sent="Fri, 07 Jul 2006 13:09:47 -0500" -->
<!-- isosent="20060707180947" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic COMM_WORLD" -->
<!-- id="44AEA36B.2060403_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200607051641.11878.kyron_at_neuralbs.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-07 14:09:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Previous message:</strong> <a href="1587.php">s anwar: "[OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Reply:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Reply:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before I embark on a train that will run out of tracks, I wanted to
</span><br>
<span class="quotelev1">&gt; get a WFF concerning the spwaning mechanisme in OpenMPI. The intent
</span><br>
<span class="quotelev1">&gt; is that I would program a &quot;simple&quot; parallel application that would
</span><br>
<span class="quotelev1">&gt; demonstrate the ability of recent MPI implementations (OpenMPI) to
</span><br>
<span class="quotelev1">&gt; dynamically ADD or remove processes from the parallel task pool. Of
</span><br>
<span class="quotelev1">&gt; course, any documentation concerning these new features would also be
</span><br>
<span class="quotelev1">&gt; greatly appreciated ;)
</span><br>
<p>Open MPI supports spawning new processes as defined in the MPI-2 
<br>
specification, see e.g.
<br>
<p><a href="http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm">http://www-unix.mcs.anl.gov/mpi/mpi-standard/mpi-report-2.0/mpi2-report.htm</a>
<br>
<p>However, please note, that this does not modify MPI_COMM_WORLD. 
<br>
MPI_COMM_WORLD is a static communicator which can not be changed, even 
<br>
in Open MPI...
<br>
<p>Thanks
<br>
Edgar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Previous message:</strong> <a href="1587.php">s anwar: "[OMPI users] readline and mpirun"</a>
<li><strong>In reply to:</strong> <a href="1557.php">Eric Thibodeau: "[OMPI users] Dynamic COMM_WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Reply:</strong> <a href="1589.php">Abhishek Agarwal: "[OMPI users] Client Server"</a>
<li><strong>Reply:</strong> <a href="1590.php">Eric Thibodeau: "Re: [OMPI users] Dynamic COMM_WORLD"</a>
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
