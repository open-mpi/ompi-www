<?
$subject_val = "Re: [OMPI users] OpenMPI at scale on Cray XK7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 09:01:44 2013" -->
<!-- isoreceived="20130424130144" -->
<!-- sent="Wed, 24 Apr 2013 17:01:43 +0400" -->
<!-- isosent="20130424130143" -->
<!-- name="Derbunovich Andrei" -->
<!-- email="abderbunovich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI at scale on Cray XK7" -->
<!-- id="a90ed175eb9055b4e17a324fca1d67b6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF25578-A94F-4511-ADA3-EB84E5F2659C_at_open-mpi.org" -->
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
<strong>From:</strong> Derbunovich Andrei (<em>abderbunovich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 09:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21777.php">Christoph Niethammer: "[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions"</a>
<li><strong>In reply to:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you to everybody for suggestions and comments.
<br>
<p>I have used relatively small number of nodes (4400). It looks like that
<br>
the main issue that I didn't disable dynamic components opening in my
<br>
openmpi build while keeping MPI installation directory on network file
<br>
system. Oh my god!
<br>
<p>I didn't check suggestion about using debrujin routed component yet.
<br>
<p>-Andrei
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Tuesday, April 23, 2013 10:07 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI at scale on Cray XK7
<br>
<p><p>On Apr 23, 2013, at 10:45 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Apr 23, 2013 at 10:17:46AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2013, at 10:09 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Apr 23, 2013 at 12:21:49PM +0400, ????????????????????
</span><br>
???????????? wrote:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nathan,  could you please advise what is expected startup time for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI job at such scale (128K ranks)? I'm interesting in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) time from mpirun start to completion of MPI_Init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It takes less than a minute to run:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 131072 /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) time from MPI_Init() start to completion of MPI_Init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A simple MPI application took about about 1.25 mins to run. If you
</span><br>
want to see our setup you can take a look at
<br>
contrib/platform/lanl/cray_xe6.
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From my experience for 52800 rank job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) took around 20 min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) took around 12 min
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that actually looks like a hung.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How many nodes? I have never seen launch times that bad on Cielo. You
</span><br>
could try adding -mca routed debruijn -novm and see if that helps. It will
<br>
reduce the amount of communication between compute nodes and the login
<br>
node.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the debrujin module was turned off a while ago due to a bug
</span><br>
<span class="quotelev2">&gt;&gt; that wasn't fixed. However, try using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was it turned off or was the priority lowered? If it was lowered then
</span><br>
-mca routed debruijn should work. The -novm is to avoid the bug (as I
<br>
understand it). I am working on fixing the bug now in hope it will be
<br>
ready for 1.7.2.
<br>
<p>Pretty sure it is ompi_ignored and thus, not in the tarball
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Previous message:</strong> <a href="21777.php">Christoph Niethammer: "[OMPI users] Open MPI 1.7.1 and nonblocking bcast questions"</a>
<li><strong>In reply to:</strong> <a href="21774.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21779.php">Ralph Castain: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>Reply:</strong> <a href="21781.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
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
