<?
$subject_val = "[OMPI users] Newbi question about MPI_wait vs MPI_wait any";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 13:09:40 2012" -->
<!-- isoreceived="20120229180940" -->
<!-- sent="Wed, 29 Feb 2012 13:09:34 -0500" -->
<!-- isosent="20120229180934" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Newbi question about MPI_wait vs MPI_wait any" -->
<!-- id="4F4E69DE.40102_at_giref.ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Newbi question about MPI_wait vs MPI_wait any<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 13:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18610.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18608.php">Jeffrey Squyres: "Re: [OMPI users] archlinux segmentation fault error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I would like to know which of &quot;waitone&quot; vs &quot;waitany&quot; is optimal and of 
<br>
course, will never produce deadlocks.
<br>
<p>Let's say we have &quot;lNp&quot; processes and they want to send an array of int 
<br>
of length &quot;lNbInt&quot; to process &quot;0&quot; in a non-blocking MPI_Isend (instead 
<br>
of MPI_Gather).  Let's say the order for receiving is unimportant and we 
<br>
want to start using data as soon as possible.
<br>
<p>I have attached wait.cc, that one can compile in two manners:
<br>
<p>mpicxx -o waitone wait.cc
<br>
<p>mpicxx -DMPI_WAIT_ANY_VERSION -o waitany wait.cc
<br>
<p>Then launch using 1 parameter to the executable: the length &quot;lNbInt&quot;.
<br>
<p>The waitone version:
<br>
mpirun -display-map -H host1,host2,host3 -n 24 waitone 10000
<br>
<p>The waitany version:
<br>
mpirun -display-map -H host1,host2,host3 -n 24 waitany 10000
<br>
<p>After executing several times, on different number of processes and 
<br>
different number of nodes and almost always large value of &quot;lNbInt&quot;, I 
<br>
*think* these could be good conclusions? :
<br>
<p>#1- Both version take almost the same wall clock time to complete
<br>
#2- Both version do *not* produce deadlock
<br>
#3- MPI_WAIT_ANY_VERSION could do better if some work was really done 
<br>
with received data.
<br>
#4- MPI_WAIT_ANY_VERSION received always the data from processes on the 
<br>
same host.
<br>
<p>I haven't be able to reproduce a deadlock even while varying array 
<br>
length, number of processes and number of hosts.  How can I conclude 
<br>
there are no problem with this code?  Any reading suggestion?
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18609/wait.cc">wait.cc</a>
</ul>
<!-- attachment="wait.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18610.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18608.php">Jeffrey Squyres: "Re: [OMPI users] archlinux segmentation fault error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18726.php">Jeffrey Squyres: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
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
