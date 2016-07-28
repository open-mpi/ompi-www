<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 18:43:30 2008" -->
<!-- isoreceived="20080805224330" -->
<!-- sent="Tue, 5 Aug 2008 17:43:19 -0500" -->
<!-- isosent="20080805224319" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="18584.55175.847786.131956_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b00bf8820808051501v7970b130hb6cfe221bf380931_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cluster LiveCD<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 18:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6273.php">Jeff Squyres: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5 August 2008 at 17:01, Ben Payne wrote:
<br>
| Hello.  I am not sure if this is the correct list to ask this
<br>
| question, so if you know of a more appropriate one please let me know.
<br>
| 
<br>
| I think am looking for a LiveCD that supports MPI, specifically one
<br>
| that has mpif90 built in, and can easily mount external (USB) drives
<br>
| for storing data.
<br>
| 
<br>
| I have access to 40 Windows computers in a lab that rarely gets used.
<br>
| I would like to use the computers to run a cluster during the
<br>
| weekends, but be able to not mess with the Windows installation that
<br>
| exists on the hard drive. Because of this, I think a LiveCD would be
<br>
| good, and one that supports PXE booting is even better.  If there is a
<br>
| better way to do this (run MPI, not disrupt Windows) please let me
<br>
| know.
<br>
| 
<br>
| The applications that I want to run are originally written in
<br>
| Fortran90 and have been ported to MPI (by me) and compile with mpif90.
<br>
|  I have attempted to use ParallelKnoppix and PelicanHPC (see below)
<br>
| and have spoken to the author of the distro, but he isn't explicitly
<br>
| supporting mpif90.
<br>
| 
<br>
| &gt;From the list at
<br>
| <a href="http://www.knoppix.net/wiki/Cluster_Live_CD">http://www.knoppix.net/wiki/Cluster_Live_CD</a>
<br>
| I have tried many distros.  Below are the results of my attempts with
<br>
| the LiveCDs:
<br>
| 
<br>
| BCCD 2.2.1c7 [DHCP server, ssh &quot;heartbeats&quot;]:
<br>
| <a href="http://bccd.cs.uni.edu/">http://bccd.cs.uni.edu/</a>
<br>
| mpiexec &quot;command not found&quot;
<br>
| mpirun -np 1 ./a.out   : &quot;cannot execute binary file&quot;
<br>
| mpif90: &quot;no fortran 90 compiler specified when mpif90 was created&quot;
<br>
| gfortran: &quot;command not found&quot;
<br>
| 
<br>
| PelicanHPC (Debian)   [DHCP server, PXE boot]:
<br>
| <a href="http://pareto.uab.es/mcreel/PelicanHPC/">http://pareto.uab.es/mcreel/PelicanHPC/</a>
<br>
| mpirun works
<br>
| mpiexec works
<br>
| gfortran works
<br>
| mpif90: &quot;command not found&quot;
<br>
| 
<br>
| ParallelKnoppix 2.9 (Knoppix) [DHCP server, PXE boot]:
<br>
| <a href="http://idea.uab.es/mcreel/ParallelKnoppix/">http://idea.uab.es/mcreel/ParallelKnoppix/</a>
<br>
| mpirun -np 1 ./a.out     : &quot;cannot execute binary file
<br>
| mpiexec -np 1 ./a.out     : &quot;cannot execute binary file&quot;, &quot;mpirun
<br>
| failed with exit status 252&quot;
<br>
| gfortran works
<br>
| mpif90: &quot;command not found&quot;
<br>
| ifort: &quot;command not found&quot;
<br>
| lamexec -np 1 ./a.out    : &quot;cannot execute binary file
<br>
| Note: mounting external drives is most intuitive in PK
<br>
| 
<br>
| ClusterKnoppix: OpenMOSIX (no MPI)
<br>
| <a href="http://clusterknoppix.sw.be/">http://clusterknoppix.sw.be/</a>
<br>
| 
<br>
| CHAOS: OpenMOSIX (no MPI)
<br>
| 
<br>
| Pai Pix: could not find on internet
<br>
<p>You forgot Quantian, a large extension of clusterKnoppix and has OpenMOSIX as
<br>
well as MPI and PVM -- but I haven't updated it in a long-ish while. I think
<br>
I include LAM and MPICH, but I doubt it had f90.
<br>
<p>However, it so happens that I am currently updating it (in a smaller format)
<br>
for a tutorial I am giving next week [1] and which covers MPI.  So the live
<br>
cdrom (based on current Debian testing, which will soon be the next release)
<br>
will give you a working KDE environment, emacs, and current Open MPI from
<br>
Debian which includes mpif77 and mpif90, plus a bunch of R goodies you may
<br>
not care too much about.  Interested? Ping me off-list.
<br>
<p>Dirk
<br>
<p>[1] <a href="http://www.statistik.uni-dortmund.de/useR-2008//tutorials/eddelbuettel.html">http://www.statistik.uni-dortmund.de/useR-2008//tutorials/eddelbuettel.html</a>
<br>
<p>| Thanks for your help,
<br>
| 
<br>
| Ben
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6273.php">Jeff Squyres: "Re: [OMPI users] WIEN2k compilation using openmpi"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
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
