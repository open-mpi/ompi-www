<?
$subject_val = "Re: [OMPI users] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 15:03:25 2010" -->
<!-- isoreceived="20101129200325" -->
<!-- sent="Mon, 29 Nov 2010 15:03:16 -0500" -->
<!-- isosent="20101129200316" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling Openmpi on solaris studio express" -->
<!-- id="4CF40704.1030306_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=d19pBLimQ_KmxG3WgaYwE7f8R29SRqUdQ=vtj_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling Openmpi on solaris studio express<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 15:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nehemiah
<br>
<p>I never tried to build OpenMPI with SunStudio, but it should work.
<br>
(I did with Gnu, Intel, PGI and Open64, the latter still has Fortran90 
<br>
problems.)
<br>
<p>For starters, I would just try the recipe in the OpenMPI FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-compilers">http://www.open-mpi.org/faq/?category=building#build-compilers</a>
<br>
replacing the intel compiler names by the corresponding Solaris studio.
<br>
<p>If you installed the compilers in Rocks /share/apps, any shared 
<br>
libraries they may have will be available at runtime on all nodes.
<br>
<p>BTW, /share/apps would be the best place to install OpenMPI as well
<br>
(in a subdirectory of your choice).
<br>
This will avoid installing on all nodes, making OpenMPI available 
<br>
through the NFS mounted /share/apps directory.
<br>
For modest-sized clusters this scales well.
<br>
If you have many hundreds of nodes, you may want a different approach
<br>
(e.g. making OpenMPI RPMs and rebuilding the nodes with them.)
<br>
<p>If you have Infiniband and/or Torque or SGE, read these FAQs:
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-p2p">http://www.open-mpi.org/faq/?category=building#build-p2p</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-tm">http://www.open-mpi.org/faq/?category=building#build-rte-tm</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=building#build-rte-sge">http://www.open-mpi.org/faq/?category=building#build-rte-sge</a>
<br>
<p>The FAQ are the de-facto OpenMPI documentation:
<br>
<a href="http://www.open-mpi.org/faq">http://www.open-mpi.org/faq</a>
<br>
Worth reading.
<br>
<p>My two cents,
<br>
Gus
<br>
<p>Nehemiah Dacres wrote:
<br>
<span class="quotelev1">&gt; I want to compile openmpi to work with the solaris studio express  or 
</span><br>
<span class="quotelev1">&gt; solaris studio. This is a different version than is installed on 
</span><br>
<span class="quotelev1">&gt; rockscluster 5.2  and would like to know if there any gotchas or 
</span><br>
<span class="quotelev1">&gt; configure flags I should use to get it working or portable to nodes on 
</span><br>
<span class="quotelev1">&gt; the cluster. Software-wise,  it is a fairly homogeneous environment with 
</span><br>
<span class="quotelev1">&gt; only slight variations on the hardware side which could be isolated 
</span><br>
<span class="quotelev1">&gt; (machinefile flag and what-not)
</span><br>
<span class="quotelev1">&gt; Please advise
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator 
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14917.php">Tim Prince: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>In reply to:</strong> <a href="14916.php">Nehemiah Dacres: "[OMPI users] compiling Openmpi on solaris studio express"</a>
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
