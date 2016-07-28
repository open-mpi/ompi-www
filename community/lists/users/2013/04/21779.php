<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 09:33:20 2013" -->
<!-- isoreceived="20130424133320" -->
<!-- sent="Wed, 24 Apr 2013 06:33:12 -0700" -->
<!-- isosent="20130424133312" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="15B2FA24-DCD1-4F42-90E5-5AA82C881D54_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="a90ed175eb9055b4e17a324fca1d67b6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI at scale on Cray XK7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 09:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2013, at 6:01 AM, Derbunovich Andrei &lt;abderbunovich_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you to everybody for suggestions and comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have used relatively small number of nodes (4400). It looks like that
</span><br>
<span class="quotelev1">&gt; the main issue that I didn't disable dynamic components opening in my
</span><br>
<span class="quotelev1">&gt; openmpi build while keeping MPI installation directory on network file
</span><br>
<span class="quotelev1">&gt; system. Oh my god!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ouch! Yep, that will slow things down a lot. Did you try using the LANL platform files? They build everything static just to avoid this problem.
<br>
<p><span class="quotelev1">&gt; I didn't check suggestion about using debrujin routed component yet.
</span><br>
<p>Nathan and I are debugging it. Meantime, please try the radix component I suggested in an earlier email.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Andrei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 23, 2013 10:07 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI at scale on Cray XK7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2013, at 10:45 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 23, 2013 at 10:17:46AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 23, 2013, at 10:09 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Apr 23, 2013 at 12:21:49PM +0400, ????????????????????
</span><br>
<span class="quotelev1">&gt; ???????????? wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nathan,  could you please advise what is expected startup time for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI job at such scale (128K ranks)? I'm interesting in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) time from mpirun start to completion of MPI_Init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It takes less than a minute to run:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -n 131072 /bin/true
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) time from MPI_Init() start to completion of MPI_Init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A simple MPI application took about about 1.25 mins to run. If you
</span><br>
<span class="quotelev1">&gt; want to see our setup you can take a look at
</span><br>
<span class="quotelev1">&gt; contrib/platform/lanl/cray_xe6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From my experience for 52800 rank job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) took around 20 min
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) took around 12 min
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that actually looks like a hung.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How many nodes? I have never seen launch times that bad on Cielo. You
</span><br>
<span class="quotelev1">&gt; could try adding -mca routed debruijn -novm and see if that helps. It will
</span><br>
<span class="quotelev1">&gt; reduce the amount of communication between compute nodes and the login
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the debrujin module was turned off a while ago due to a bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that wasn't fixed. However, try using
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Was it turned off or was the priority lowered? If it was lowered then
</span><br>
<span class="quotelev1">&gt; -mca routed debruijn should work. The -novm is to avoid the bug (as I
</span><br>
<span class="quotelev1">&gt; understand it). I am working on fixing the bug now in hope it will be
</span><br>
<span class="quotelev1">&gt; ready for 1.7.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pretty sure it is ompi_ignored and thus, not in the tarball
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21780.php">Thomas Watson: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21778.php">Derbunovich Andrei: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
