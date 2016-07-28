<?
$subject_val = "Re: [OMPI users] lammps MD code fails with Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 21:37:52 2009" -->
<!-- isoreceived="20090220023752" -->
<!-- sent="Thu, 19 Feb 2009 21:37:44 -0500" -->
<!-- isosent="20090220023744" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lammps MD code fails with Open MPI 1.3" -->
<!-- id="E9A1FEAB-DFA7-4941-A9BA-58954757DF32_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499DD890.9050400_at_uark.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] lammps MD code fails with Open MPI 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 21:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8125.php">Jeff Squyres: "Re: [OMPI users] MPI Gather Query"</a>
<li><strong>In reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible to attach to any of the MPI processes and see where it  
<br>
is hung?
<br>
<p><p>On Feb 19, 2009, at 5:09 PM, Jeff Pummill wrote:
<br>
<p><span class="quotelev1">&gt; I built a fresh version of lammps v29Jan09 against Open MPI 1.3  
</span><br>
<span class="quotelev1">&gt; which in turn was built with Gnu compilers v4.2.4 on an Ubuntu 8.04  
</span><br>
<span class="quotelev1">&gt; x86_64 box. This Open MPI build was able to generate usable binaries  
</span><br>
<span class="quotelev1">&gt; such as XHPL and NPB, but the lammps binary it generated was not  
</span><br>
<span class="quotelev1">&gt; usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried it with a couple of different versions of the lammps source,  
</span><br>
<span class="quotelev1">&gt; but to no avail. No errors during the builds and a binary was  
</span><br>
<span class="quotelev1">&gt; created, but when executing the job it quickly exits with no  
</span><br>
<span class="quotelev1">&gt; messages other than:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jpummil_at_stealth:~$ mpirun -np 4 -hostfile hosts /home/jpummil/ 
</span><br>
<span class="quotelev1">&gt; lmp_Stealth-OMPI &lt; in.testbench_small
</span><br>
<span class="quotelev1">&gt; LAMMPS (22 Jan 2008)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, I downloaded Open MPI 1.2.8, built it with the same  
</span><br>
<span class="quotelev1">&gt; configure options I had used with 1.3, and it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting by fine with 1.2.8. I just wanted to file a possible bug  
</span><br>
<span class="quotelev1">&gt; report on 1.3 and see if others have seen this behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff F. Pummill
</span><br>
<span class="quotelev1">&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev1">&gt; TeraGrid Campus Champion - UofA
</span><br>
<span class="quotelev1">&gt; University of Arkansas
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8127.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8125.php">Jeff Squyres: "Re: [OMPI users] MPI Gather Query"</a>
<li><strong>In reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
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
