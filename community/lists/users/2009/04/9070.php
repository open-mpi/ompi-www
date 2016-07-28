<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 10:34:54 2009" -->
<!-- isoreceived="20090423143454" -->
<!-- sent="Thu, 23 Apr 2009 10:34:32 -0400" -->
<!-- isosent="20090423143432" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49F07C78.6030204_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 10:34:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9071.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9069.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Jeff already sent clarifications about image processing,
<br>
and the portable API nature of OpenMPI (and other MPI implementations).
<br>
<p>As for &quot;mpicc: command not found&quot; this is again a problem with your
<br>
PATH.
<br>
Remember the &quot;locate&quot; command?  :)
<br>
Find where mpicc is installed, and put that directory on your PATH.
<br>
<p>In any case, I would suggest that you choose a central NFS mounted
<br>
file system on your cluster master node, and install OpenMPI there,
<br>
configuring and building it from source (not from yum).
<br>
If this directory is mounted on all nodes, the same OpenMPI will be
<br>
available on all nodes.
<br>
This will give you a single standard version of OpenMPI across the board.
<br>
<p>Clustering can become a very confusing and tricky business if you
<br>
have heterogeneous nodes, with different OS/Linux versions,
<br>
different MPI versions etc, software installed in different locations
<br>
on each node, etc, regardless of whether you use mpiselector or
<br>
you set the PATH variable on each node, or you use environment modules
<br>
package, or any other technique to setup your environment.
<br>
Installing less software, rather than more software,
<br>
and doing so in a standardized homogeneous way across all cluster nodes,
<br>
will give you a cleaner environment, which is easier to understand,
<br>
control, upgrade, and update.
<br>
<p>A relatively simple way to install a homogeneous cluster is
<br>
to use the Rocks Clusters &quot;rolls&quot; suite,
<br>
which is free and based on CentOS.
<br>
It will probably give you some extra work in the beginning,
<br>
but may be worthwhile in the long run.
<br>
See this:
<br>
<a href="http://www.rocksclusters.org/wordpress/">http://www.rocksclusters.org/wordpress/</a>
<br>
<p><p>My two cents.
<br>
<p>Gus Correa
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
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; @Gus, Eugene
</span><br>
<span class="quotelev1">&gt; I read all you mails and even followed the same procedure, it was blas 
</span><br>
<span class="quotelev1">&gt; that was giving the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am again stuck on a problem, i connected a new node to my cluster and 
</span><br>
<span class="quotelev1">&gt; installed CentOS 5.2 on it. after that i use yum to install 
</span><br>
<span class="quotelev1">&gt; openmpi,openmpi-libs and openmpi-devel sucessfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But still when i run mpicc command it gives me error :
</span><br>
<span class="quotelev1">&gt; /bash: mpicc: command not found/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i found out there is a command *mpi-selector* but dont know hoe to use it.
</span><br>
<span class="quotelev1">&gt; Is this a new version of openmpi? how do i configure it?
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
<li><strong>Next message:</strong> <a href="9071.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9069.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>In reply to:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
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
