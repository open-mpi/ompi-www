<?
$subject_val = "Re: [OMPI users] cluster LiveCD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 03:10:04 2008" -->
<!-- isoreceived="20080806071004" -->
<!-- sent="Wed, 6 Aug 2008 09:09:38 +0200" -->
<!-- isosent="20080806070938" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cluster LiveCD" -->
<!-- id="200808060909.38772.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 03:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6274.php">Dirk Eddelbuettel: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ben,
<br>
we created one bootable DVD based on Knoppix for our Parallel Tools Workshop 
<br>
at HLRS. It features Open MPI and various (open source) tools based on it 
<br>
using Oscar modules.
<br>
<p>Among the compilers it has gfortran-4.3, which Open MPI-1.2.6 is compiled 
<br>
against.
<br>
<p>We don't have automatic integration of other clients and no download of the 
<br>
DVD image (yet), but we could send You a copy by snail-mail. Interested?
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p><p>On Mittwoch, 6. August 2008, Ben Payne wrote:
<br>
<span class="quotelev1">&gt; Hello.  I am not sure if this is the correct list to ask this
</span><br>
<span class="quotelev1">&gt; question, so if you know of a more appropriate one please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think am looking for a LiveCD that supports MPI, specifically one
</span><br>
<span class="quotelev1">&gt; that has mpif90 built in, and can easily mount external (USB) drives
</span><br>
<span class="quotelev1">&gt; for storing data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have access to 40 Windows computers in a lab that rarely gets used.
</span><br>
<span class="quotelev1">&gt; I would like to use the computers to run a cluster during the
</span><br>
<span class="quotelev1">&gt; weekends, but be able to not mess with the Windows installation that
</span><br>
<span class="quotelev1">&gt; exists on the hard drive. Because of this, I think a LiveCD would be
</span><br>
<span class="quotelev1">&gt; good, and one that supports PXE booting is even better.  If there is a
</span><br>
<span class="quotelev1">&gt; better way to do this (run MPI, not disrupt Windows) please let me
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The applications that I want to run are originally written in
</span><br>
<span class="quotelev1">&gt; Fortran90 and have been ported to MPI (by me) and compile with mpif90.
</span><br>
<span class="quotelev1">&gt;  I have attempted to use ParallelKnoppix and PelicanHPC (see below)
</span><br>
<span class="quotelev1">&gt; and have spoken to the author of the distro, but he isn't explicitly
</span><br>
<span class="quotelev1">&gt; supporting mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From the list at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.knoppix.net/wiki/Cluster_Live_CD">http://www.knoppix.net/wiki/Cluster_Live_CD</a>
</span><br>
<span class="quotelev1">&gt; I have tried many distros.  Below are the results of my attempts with
</span><br>
<span class="quotelev1">&gt; the LiveCDs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BCCD 2.2.1c7 [DHCP server, ssh &quot;heartbeats&quot;]:
</span><br>
<span class="quotelev1">&gt; <a href="http://bccd.cs.uni.edu/">http://bccd.cs.uni.edu/</a>
</span><br>
<span class="quotelev1">&gt; mpiexec &quot;command not found&quot;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./a.out   : &quot;cannot execute binary file&quot;
</span><br>
<span class="quotelev1">&gt; mpif90: &quot;no fortran 90 compiler specified when mpif90 was created&quot;
</span><br>
<span class="quotelev1">&gt; gfortran: &quot;command not found&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PelicanHPC (Debian)   [DHCP server, PXE boot]:
</span><br>
<span class="quotelev1">&gt; <a href="http://pareto.uab.es/mcreel/PelicanHPC/">http://pareto.uab.es/mcreel/PelicanHPC/</a>
</span><br>
<span class="quotelev1">&gt; mpirun works
</span><br>
<span class="quotelev1">&gt; mpiexec works
</span><br>
<span class="quotelev1">&gt; gfortran works
</span><br>
<span class="quotelev1">&gt; mpif90: &quot;command not found&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ParallelKnoppix 2.9 (Knoppix) [DHCP server, PXE boot]:
</span><br>
<span class="quotelev1">&gt; <a href="http://idea.uab.es/mcreel/ParallelKnoppix/">http://idea.uab.es/mcreel/ParallelKnoppix/</a>
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./a.out     : &quot;cannot execute binary file
</span><br>
<span class="quotelev1">&gt; mpiexec -np 1 ./a.out     : &quot;cannot execute binary file&quot;, &quot;mpirun
</span><br>
<span class="quotelev1">&gt; failed with exit status 252&quot;
</span><br>
<span class="quotelev1">&gt; gfortran works
</span><br>
<span class="quotelev1">&gt; mpif90: &quot;command not found&quot;
</span><br>
<span class="quotelev1">&gt; ifort: &quot;command not found&quot;
</span><br>
<span class="quotelev1">&gt; lamexec -np 1 ./a.out    : &quot;cannot execute binary file
</span><br>
<span class="quotelev1">&gt; Note: mounting external drives is most intuitive in PK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ClusterKnoppix: OpenMOSIX (no MPI)
</span><br>
<span class="quotelev1">&gt; <a href="http://clusterknoppix.sw.be/">http://clusterknoppix.sw.be/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CHAOS: OpenMOSIX (no MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pai Pix: could not find on internet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6274.php">Dirk Eddelbuettel: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6271.php">Ben Payne: "[OMPI users] cluster LiveCD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6283.php">Adam C Powell IV: "Re: [OMPI users] cluster LiveCD"</a>
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
