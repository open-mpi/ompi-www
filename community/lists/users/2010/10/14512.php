<?
$subject_val = "[OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 17:51:50 2010" -->
<!-- isoreceived="20101020215150" -->
<!-- sent="Wed, 20 Oct 2010 16:51:44 -0500" -->
<!-- isosent="20101020215144" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="[OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTi=ng2qYwsVKub=XZG5QtLeia37NTOvz5jeCURf=_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 17:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14519.php">jody: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14519.php">jody: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I got confused with my recent C++ MPI program's behavior. I have an MPI
<br>
program in which I use clock() to measure the time spent between to
<br>
MPI_Barrier, just like this:
<br>
<p>MPI::COMM_WORLD.Barrier();
<br>
if if(rank == master) t1 = clock();
<br>
&quot;code A&quot;;
<br>
&nbsp;MPI::COMM_WORLD.Barrier();
<br>
if if(rank == master) t2 = clock();
<br>
&quot;code B&quot;;
<br>
<p>I need to measure t2-t1 to see the time spent on the code A between these
<br>
two MPI_Barriers. I notice that if I comment code B, the time seems much
<br>
less the original time (almost half). How does it happen? What is a possible
<br>
reason for it? I have no idea.
<br>
<p>Thanks for your help.
<br>
<p>Linbao
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14519.php">jody: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14519.php">jody: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14522.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
