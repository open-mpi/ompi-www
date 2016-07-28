<?
$subject_val = "Re: [OMPI users] OpenMPI does not see other nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 14:47:03 2011" -->
<!-- isoreceived="20110121194703" -->
<!-- sent="Fri, 21 Jan 2011 14:46:54 -0500" -->
<!-- isosent="20110121194654" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI does not see other nodes" -->
<!-- id="4D39E2AE.20202_at_ldeo.columbia.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="11257436.15973.1295609195802.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI does not see other nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 14:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15395.php">Gus Correa: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steffen Brinkmann wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed OpenMPI on a cluster consisting of ~30 nodes with 16 Xeon cores each. NFS is set up and working. For testing I have installed locally with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home_dir/openmpi-1.4.3_installation/; make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; everything smooth so far. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run a parallel program with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home_dir/openmpi-1.4.3_installation/bin/mpirun -n 2 ./my_parprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; everything scales perfectly up to -n 16. When I go to -n 32, the execution time is the same as with -n 16. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home_dir/openmpi-1.4.3_installation/bin/mpirun -n 32 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; returns 32 times the same node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program is fine (runs since years on several machines) and another mpi installation scales well, so the cluster should be ok as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What did I do wrong???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any hint!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steffen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Steffen Brinkmann
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstra&#195;&#159;e 19
</span><br>
<span class="quotelev1">&gt; D - 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone:	++49(0)711 / 685-64548
</span><br>
<span class="quotelev1">&gt; Fax:	++49(0)711 / 685-65832
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Steffen
<br>
<p>See this FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
<p>If you have a resource manager, such as Torque or SGE,
<br>
you can build OpenMPI with support for it.
<br>
This will obviate the need to specify the nodes,
<br>
as the resource manager will take care of that for you:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-sge">http://www.open-mpi.org/faq/?category=building#build-rte-sge</a>
<br>
<p>BTW, the OpenMPI FAQ are the 'de facto' (and good)
<br>
OpenMPI documentation:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Other sources are the README file and the mpiexec man page.
<br>
<p><p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15395.php">Gus Correa: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
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
