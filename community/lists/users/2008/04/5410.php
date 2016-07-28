<?
$subject_val = "Re: [OMPI users] Allocating some amount of memory for a process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 08:13:46 2008" -->
<!-- isoreceived="20080417121346" -->
<!-- sent="Thu, 17 Apr 2008 08:12:35 -0400" -->
<!-- isosent="20080417121235" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allocating some amount of memory for a process" -->
<!-- id="C47A3C76-B8B6-451C-AC01-01C13A493CC1_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b05971d10804170349s5751f8bdjb0b323e42319edda_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allocating some amount of memory for a process<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 08:12:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Previous message:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>In reply to:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI does not do this.  MPI codes are regular C and Fortran  
<br>
programs, so if they ALLOCATE or malloc() memory, and linux/mac can  
<br>
give it it will.
<br>
<p>I think what you need is a batch system (Torque Plug goes here).  We  
<br>
use a batch system that will then place processes on nodes based on  
<br>
memory and cpu availability.
<br>
In torque I do this with:
<br>
<p>#PBS -l nodes=2:ppn=2,pmem=1gb
<br>
<p>Thats 4 cpus across 2 nodes (ppn=processors per node)  with 1gb of  
<br>
memory per processor.  PBS will not start my job until it can find 2  
<br>
nodes with 2 cpus, where each cpu has 1 gb of memory free.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 17, 2008, at 6:49 AM, Cally K wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, am a beginner in openmpi, does openmpi provide a function for  
</span><br>
<span class="quotelev1">&gt; allocating memory to a process. For example, I have a rendering  
</span><br>
<span class="quotelev1">&gt; process from paraview named pvserver and I would like to allocate a  
</span><br>
<span class="quotelev1">&gt; certain amount of memory for that process across a few nodes  
</span><br>
<span class="quotelev1">&gt; specified in the hostfile..Any idea...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5411.php">Tim Prins: "Re: [OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Previous message:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
<li><strong>In reply to:</strong> <a href="5409.php">Cally K: "[OMPI users] Allocating some amount of memory for a process"</a>
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
