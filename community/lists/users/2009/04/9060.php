<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 07:34:47 2009" -->
<!-- isoreceived="20090423113447" -->
<!-- sent="Thu, 23 Apr 2009 07:34:42 -0400" -->
<!-- isosent="20090423113442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="861E4176-284A-4498-B8D2-415375979019_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a599d60e0904230040o2cd344e5n19fda08bf1d42e2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 07:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9061.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9059.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9070.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2009, at 3:40 AM, Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; I am again stuck on a problem, i connected a new node to my cluster  
</span><br>
<span class="quotelev1">&gt; and installed CentOS 5.2 on it. after that i use yum to install  
</span><br>
<span class="quotelev1">&gt; openmpi,openmpi-libs and openmpi-devel sucessfully.
</span><br>
<p>Be sure that you have the same version of Open MPI installed on all  
<br>
your nodes.
<br>
<p><span class="quotelev1">&gt; But still when i run mpicc command it gives me error :
</span><br>
<span class="quotelev1">&gt; bash: mpicc: command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i found out there is a command mpi-selector but dont know hoe to use  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; Is this a new version of openmpi? how do i configure it?
</span><br>
<p><p>No it's not a version of Open MPI, it's a mechanism for switching  
<br>
between multiple different MPI implementations installed on the same  
<br>
machine.
<br>
<p>See the man page or &quot;mpi-selector --help&quot; for details.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9061.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9059.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9070.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
