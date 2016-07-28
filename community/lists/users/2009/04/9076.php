<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 14:31:07 2009" -->
<!-- isoreceived="20090423183107" -->
<!-- sent="Thu, 23 Apr 2009 14:31:00 -0400" -->
<!-- isosent="20090423183100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="36000658-D2FC-42E1-B482-E1F5A8692A8C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49F07C78.6030204_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-04-23 14:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9077.php">Jeff Squyres: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>Previous message:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9070.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent answer.  One addendum -- we had a really nice FAQ entry  
<br>
about this kind of stuff on the LAM/MPI web site, which I was  
<br>
horrified to see that we had not copied to the Open MPI site.  So I  
<br>
copied it over this morning.  :-)
<br>
<p>Have a look at these 3 FAQ (brand new) entries:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi">http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
<br>
<p>Hope that helps.
<br>
<p><p><p>On Apr 23, 2009, at 10:34 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ankush
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff already sent clarifications about image processing,
</span><br>
<span class="quotelev1">&gt; and the portable API nature of OpenMPI (and other MPI  
</span><br>
<span class="quotelev1">&gt; implementations).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for &quot;mpicc: command not found&quot; this is again a problem with your
</span><br>
<span class="quotelev1">&gt; PATH.
</span><br>
<span class="quotelev1">&gt; Remember the &quot;locate&quot; command?  :)
</span><br>
<span class="quotelev1">&gt; Find where mpicc is installed, and put that directory on your PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, I would suggest that you choose a central NFS mounted
</span><br>
<span class="quotelev1">&gt; file system on your cluster master node, and install OpenMPI there,
</span><br>
<span class="quotelev1">&gt; configuring and building it from source (not from yum).
</span><br>
<span class="quotelev1">&gt; If this directory is mounted on all nodes, the same OpenMPI will be
</span><br>
<span class="quotelev1">&gt; available on all nodes.
</span><br>
<span class="quotelev1">&gt; This will give you a single standard version of OpenMPI across the  
</span><br>
<span class="quotelev1">&gt; board.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Clustering can become a very confusing and tricky business if you
</span><br>
<span class="quotelev1">&gt; have heterogeneous nodes, with different OS/Linux versions,
</span><br>
<span class="quotelev1">&gt; different MPI versions etc, software installed in different locations
</span><br>
<span class="quotelev1">&gt; on each node, etc, regardless of whether you use mpiselector or
</span><br>
<span class="quotelev1">&gt; you set the PATH variable on each node, or you use environment modules
</span><br>
<span class="quotelev1">&gt; package, or any other technique to setup your environment.
</span><br>
<span class="quotelev1">&gt; Installing less software, rather than more software,
</span><br>
<span class="quotelev1">&gt; and doing so in a standardized homogeneous way across all cluster  
</span><br>
<span class="quotelev1">&gt; nodes,
</span><br>
<span class="quotelev1">&gt; will give you a cleaner environment, which is easier to understand,
</span><br>
<span class="quotelev1">&gt; control, upgrade, and update.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A relatively simple way to install a homogeneous cluster is
</span><br>
<span class="quotelev1">&gt; to use the Rocks Clusters &quot;rolls&quot; suite,
</span><br>
<span class="quotelev1">&gt; which is free and based on CentOS.
</span><br>
<span class="quotelev1">&gt; It will probably give you some extra work in the beginning,
</span><br>
<span class="quotelev1">&gt; but may be worthwhile in the long run.
</span><br>
<span class="quotelev1">&gt; See this:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.rocksclusters.org/wordpress/">http://www.rocksclusters.org/wordpress/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev2">&gt; &gt; @Gus, Eugene
</span><br>
<span class="quotelev2">&gt; &gt; I read all you mails and even followed the same procedure, it was  
</span><br>
<span class="quotelev1">&gt; blas
</span><br>
<span class="quotelev2">&gt; &gt; that was giving the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am again stuck on a problem, i connected a new node to my  
</span><br>
<span class="quotelev1">&gt; cluster and
</span><br>
<span class="quotelev2">&gt; &gt; installed CentOS 5.2 on it. after that i use yum to install
</span><br>
<span class="quotelev2">&gt; &gt; openmpi,openmpi-libs and openmpi-devel sucessfully.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But still when i run mpicc command it gives me error :
</span><br>
<span class="quotelev2">&gt; &gt; /bash: mpicc: command not found/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i found out there is a command *mpi-selector* but dont know hoe to  
</span><br>
<span class="quotelev1">&gt; use it.
</span><br>
<span class="quotelev2">&gt; &gt; Is this a new version of openmpi? how do i configure it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9077.php">Jeff Squyres: "Re: [OMPI users] pls_rsh_agent deprecated?"</a>
<li><strong>Previous message:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9070.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9127.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
