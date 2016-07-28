<?
$subject_val = "Re: [OMPI users] Problem with insatlling OpenMPI on compute node";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  4 09:37:56 2009" -->
<!-- isoreceived="20090404133756" -->
<!-- sent="Sat, 4 Apr 2009 09:37:49 -0400" -->
<!-- isosent="20090404133749" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with insatlling OpenMPI on compute node" -->
<!-- id="0322D860-06B2-484D-B58D-22C66CEA53A7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a599d60e0904040423y66c3dc4h9dbe471bbebd1bf7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with insatlling OpenMPI on compute node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-04 09:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8777.php">Number Cruncher: "Re: [OMPI users] Bogus memcpy or bogus valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not too familiar with that tutorial nor your particular method of  
<br>
installation.  In general, Open MPI needs a bunch of files to be  
<br>
available on all nodes (e.g., see if you can find &quot;mpirun&quot; on all  
<br>
nodes).  See these FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p><p>On Apr 4, 2009, at 7:23 AM, Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; I followed the steps given here to setup up openMPI cluster : <a href="http://www.ps3cluster.umassd.edu/step3mpi.html">http://www.ps3cluster.umassd.edu/step3mpi.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster consists of two nodes, master(running on fedora 10) and  
</span><br>
<span class="quotelev1">&gt; compute(CentOS 5.2) node, connected directly through a cross cable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed openmpi on both, there were many folders n files on de  
</span><br>
<span class="quotelev1">&gt; master node but there were none on de compute node. i again ran yum  
</span><br>
<span class="quotelev1">&gt; install openmpi successfully on de compute node but still there were  
</span><br>
<span class="quotelev1">&gt; no openmpi folders or files installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is this happening? is it because of the OS?
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8777.php">Number Cruncher: "Re: [OMPI users] Bogus memcpy or bogus valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8775.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8774.php">Ankush Kaul: "[OMPI users] Problem with insatlling OpenMPI on compute node"</a>
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
