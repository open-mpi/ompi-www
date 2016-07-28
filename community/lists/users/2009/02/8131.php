<?
$subject_val = "Re: [OMPI users] lammps MD code fails with Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 07:11:31 2009" -->
<!-- isoreceived="20090220121131" -->
<!-- sent="Fri, 20 Feb 2009 07:11:20 -0500" -->
<!-- isosent="20090220121120" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lammps MD code fails with Open MPI 1.3" -->
<!-- id="8519F497-3BBC-4A37-A4EF-0CB968529441_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1235108789.8485.7.camel_at_jnysal" -->
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
<strong>Date:</strong> 2009-02-20 07:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, there was a big Fortran bug that crept in after 1.3 that was  
<br>
just fixed on the trunk last night.  If you're using Fortran  
<br>
applications with some compilers (e.g., Intel), the 1.3.1 nightly  
<br>
snapshots may have hung in some cases.  The problem should be fixed in  
<br>
tonight's 1.3.1 nightly snapshot.
<br>
<p><p>On Feb 20, 2009, at 12:46 AM, Nysal Jan wrote:
<br>
<p><span class="quotelev1">&gt; It could be the same bug reported here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/02/8010.php">http://www.open-mpi.org/community/lists/users/2009/02/8010.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try a recent snapshot of 1.3.1
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>) to verify if this has been  
</span><br>
<span class="quotelev1">&gt; fixed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --Nysal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2009-02-19 at 16:09 -0600, Jeff Pummill wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I built a fresh version of lammps v29Jan09 against Open MPI 1.3 which
</span><br>
<span class="quotelev2">&gt;&gt; in turn was built with Gnu compilers v4.2.4 on an Ubuntu 8.04 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; box. This Open MPI build was able to generate usable binaries such as
</span><br>
<span class="quotelev2">&gt;&gt; XHPL and NPB, but the lammps binary it generated was not usable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried it with a couple of different versions of the lammps source,
</span><br>
<span class="quotelev2">&gt;&gt; but to no avail. No errors during the builds and a binary was  
</span><br>
<span class="quotelev2">&gt;&gt; created,
</span><br>
<span class="quotelev2">&gt;&gt; but when executing the job it quickly exits with no messages other
</span><br>
<span class="quotelev2">&gt;&gt; than:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jpummil_at_stealth:~$ mpirun -np 4 -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hosts /home/jpummil/lmp_Stealth-OMPI &lt; in.testbench_small
</span><br>
<span class="quotelev2">&gt;&gt; LAMMPS (22 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly, I downloaded Open MPI 1.2.8, built it with the same
</span><br>
<span class="quotelev2">&gt;&gt; configure options I had used with 1.3, and it worked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting by fine with 1.2.8. I just wanted to file a possible bug
</span><br>
<span class="quotelev2">&gt;&gt; report on 1.3 and see if others have seen this behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev2">&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev2">&gt;&gt; TeraGrid Campus Champion - UofA
</span><br>
<span class="quotelev2">&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8132.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>In reply to:</strong> <a href="8129.php">Nysal Jan: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8137.php">Jeff Pummill: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
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
