<?
$subject_val = "Re: [OMPI users] lammps MD code fails with Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 01:15:28 2009" -->
<!-- isoreceived="20090220061528" -->
<!-- sent="Fri, 20 Feb 2009 11:16:29 +0530" -->
<!-- isosent="20090220054629" -->
<!-- name="Nysal Jan" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lammps MD code fails with Open MPI 1.3" -->
<!-- id="1235108789.8485.7.camel_at_jnysal" -->
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
<strong>From:</strong> Nysal Jan (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 00:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8128.php">Gerry Creager: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could be the same bug reported here
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/02/8010.php">http://www.open-mpi.org/community/lists/users/2009/02/8010.php</a>
<br>
<p>Can you try a recent snapshot of 1.3.1
<br>
(<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>) to verify if this has been fixed
<br>
<p>--Nysal
<br>
<p>On Thu, 2009-02-19 at 16:09 -0600, Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; I built a fresh version of lammps v29Jan09 against Open MPI 1.3 which
</span><br>
<span class="quotelev1">&gt; in turn was built with Gnu compilers v4.2.4 on an Ubuntu 8.04 x86_64
</span><br>
<span class="quotelev1">&gt; box. This Open MPI build was able to generate usable binaries such as
</span><br>
<span class="quotelev1">&gt; XHPL and NPB, but the lammps binary it generated was not usable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried it with a couple of different versions of the lammps source,
</span><br>
<span class="quotelev1">&gt; but to no avail. No errors during the builds and a binary was created,
</span><br>
<span class="quotelev1">&gt; but when executing the job it quickly exits with no messages other
</span><br>
<span class="quotelev1">&gt; than:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jpummil_at_stealth:~$ mpirun -np 4 -hostfile
</span><br>
<span class="quotelev1">&gt; hosts /home/jpummil/lmp_Stealth-OMPI &lt; in.testbench_small
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8128.php">Gerry Creager: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>In reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8131.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
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
