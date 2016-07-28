<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 13:29:23 2009" -->
<!-- isoreceived="20090428172923" -->
<!-- sent="Tue, 28 Apr 2009 22:59:17 +0530" -->
<!-- isosent="20090428172917" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904281029t783cc022q1baec05757e7c5a2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36000658-D2FC-42E1-B482-E1F5A8692A8C_at_cisco.com" -->
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
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 13:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Previous message:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>In reply to:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9134.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks everyone(esp Gus and Jeff) for the support and guidance. We are
<br>
almost at the verge of completing our project which could have not been
<br>
possible without all u guys.
<br>
<p>I would like to know one more thing, what are real life applications that i
<br>
can use the cluster for (except mathematical computation)? Can i use if for
<br>
my web server, if yes then how?
<br>
<p><p><p>On Fri, Apr 24, 2009 at 12:01 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent answer.  One addendum -- we had a really nice FAQ entry about
</span><br>
<span class="quotelev1">&gt; this kind of stuff on the LAM/MPI web site, which I was horrified to see
</span><br>
<span class="quotelev1">&gt; that we had not copied to the Open MPI site.  So I copied it over this
</span><br>
<span class="quotelev1">&gt; morning.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a look at these 3 FAQ (brand new) entries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi">http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2009, at 10:34 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Ankush
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff already sent clarifications about image processing,
</span><br>
<span class="quotelev2">&gt;&gt; and the portable API nature of OpenMPI (and other MPI implementations).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for &quot;mpicc: command not found&quot; this is again a problem with your
</span><br>
<span class="quotelev2">&gt;&gt; PATH.
</span><br>
<span class="quotelev2">&gt;&gt; Remember the &quot;locate&quot; command?  :)
</span><br>
<span class="quotelev2">&gt;&gt; Find where mpicc is installed, and put that directory on your PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, I would suggest that you choose a central NFS mounted
</span><br>
<span class="quotelev2">&gt;&gt; file system on your cluster master node, and install OpenMPI there,
</span><br>
<span class="quotelev2">&gt;&gt; configuring and building it from source (not from yum).
</span><br>
<span class="quotelev2">&gt;&gt; If this directory is mounted on all nodes, the same OpenMPI will be
</span><br>
<span class="quotelev2">&gt;&gt; available on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt; This will give you a single standard version of OpenMPI across the board.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Clustering can become a very confusing and tricky business if you
</span><br>
<span class="quotelev2">&gt;&gt; have heterogeneous nodes, with different OS/Linux versions,
</span><br>
<span class="quotelev2">&gt;&gt; different MPI versions etc, software installed in different locations
</span><br>
<span class="quotelev2">&gt;&gt; on each node, etc, regardless of whether you use mpiselector or
</span><br>
<span class="quotelev2">&gt;&gt; you set the PATH variable on each node, or you use environment modules
</span><br>
<span class="quotelev2">&gt;&gt; package, or any other technique to setup your environment.
</span><br>
<span class="quotelev2">&gt;&gt; Installing less software, rather than more software,
</span><br>
<span class="quotelev2">&gt;&gt; and doing so in a standardized homogeneous way across all cluster nodes,
</span><br>
<span class="quotelev2">&gt;&gt; will give you a cleaner environment, which is easier to understand,
</span><br>
<span class="quotelev2">&gt;&gt; control, upgrade, and update.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A relatively simple way to install a homogeneous cluster is
</span><br>
<span class="quotelev2">&gt;&gt; to use the Rocks Clusters &quot;rolls&quot; suite,
</span><br>
<span class="quotelev2">&gt;&gt; which is free and based on CentOS.
</span><br>
<span class="quotelev2">&gt;&gt; It will probably give you some extra work in the beginning,
</span><br>
<span class="quotelev2">&gt;&gt; but may be worthwhile in the long run.
</span><br>
<span class="quotelev2">&gt;&gt; See this:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.rocksclusters.org/wordpress/">http://www.rocksclusters.org/wordpress/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My two cents.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; @Gus, Eugene
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I read all you mails and even followed the same procedure, it was blas
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that was giving the problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am again stuck on a problem, i connected a new node to my cluster and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; installed CentOS 5.2 on it. after that i use yum to install
</span><br>
<span class="quotelev3">&gt;&gt; &gt; openmpi,openmpi-libs and openmpi-devel sucessfully.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But still when i run mpicc command it gives me error :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /bash: mpicc: command not found/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i found out there is a command *mpi-selector* but dont know hoe to use
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is this a new version of openmpi? how do i configure it?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9128.php">Barnabas Debreczeni: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>Previous message:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
<li><strong>In reply to:</strong> <a href="9076.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9132.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9134.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
