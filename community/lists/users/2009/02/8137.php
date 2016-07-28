<?
$subject_val = "Re: [OMPI users] lammps MD code fails with Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:06:00 2009" -->
<!-- isoreceived="20090220150600" -->
<!-- sent="Fri, 20 Feb 2009 09:08:34 -0600" -->
<!-- isosent="20090220150834" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] lammps MD code fails with Open MPI 1.3" -->
<!-- id="499EC772.2070707_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16858_1235132117_n1KCFGh8018730_8519F497-3BBC-4A37-A4EF-0CB968529441_at_cisco.com" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 10:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
<li><strong>Previous message:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Maybe in reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's probably not the same issue as this is one of the very few codes 
<br>
that I maintain which is C++ and not fortran :-(
<br>
<p>It behaved similarly on another system when I built it against a new 
<br>
version (1.0??) of MVAPICH. I had to roll back a version from that as well.
<br>
<p>I may contact the lammps people and see if they know what's going on as 
<br>
well.
<br>
<p><p>Jeff F. Pummill
<br>
Senior Linux Cluster Administrator
<br>
TeraGrid Campus Champion - UofA
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p>&quot;In theory, there is no difference between theory and
<br>
practice. But in practice, there is!&quot; /-- anonymous/
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Actually, there was a big Fortran bug that crept in after 1.3 that was 
</span><br>
<span class="quotelev1">&gt; just fixed on the trunk last night.  If you're using Fortran 
</span><br>
<span class="quotelev1">&gt; applications with some compilers (e.g., Intel), the 1.3.1 nightly 
</span><br>
<span class="quotelev1">&gt; snapshots may have hung in some cases.  The problem should be fixed in 
</span><br>
<span class="quotelev1">&gt; tonight's 1.3.1 nightly snapshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2009, at 12:46 AM, Nysal Jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It could be the same bug reported here
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/02/8010.php">http://www.open-mpi.org/community/lists/users/2009/02/8010.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try a recent snapshot of 1.3.1
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.open-mpi.org/nightly/v1.3/">http://www.open-mpi.org/nightly/v1.3/</a>) to verify if this has been fixed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Nysal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2009-02-19 at 16:09 -0600, Jeff Pummill wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I built a fresh version of lammps v29Jan09 against Open MPI 1.3 which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in turn was built with Gnu compilers v4.2.4 on an Ubuntu 8.04 x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; box. This Open MPI build was able to generate usable binaries such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XHPL and NPB, but the lammps binary it generated was not usable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried it with a couple of different versions of the lammps source,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but to no avail. No errors during the builds and a binary was created,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when executing the job it quickly exits with no messages other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jpummil_at_stealth:~$ mpirun -np 4 -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hosts /home/jpummil/lmp_Stealth-OMPI &lt; in.testbench_small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAMMPS (22 Jan 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interestingly, I downloaded Open MPI 1.2.8, built it with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure options I had used with 1.3, and it worked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting by fine with 1.2.8. I just wanted to file a possible bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; report on 1.3 and see if others have seen this behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff F. Pummill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior Linux Cluster Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TeraGrid Campus Champion - UofA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Arkansas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
<li><strong>Previous message:</strong> <a href="8136.php">Olaf Lenz: "[OMPI users] openmpi 1.3: undefined symbol: mca_base_param_reg_int [was: Re: OpenMPI 1.3:]"</a>
<li><strong>Maybe in reply to:</strong> <a href="8119.php">Jeff Pummill: "[OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8142.php">Jeff Squyres: "Re: [OMPI users] lammps MD code fails with Open MPI 1.3"</a>
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
