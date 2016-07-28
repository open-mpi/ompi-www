<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:55:41 2011" -->
<!-- isoreceived="20111103165541" -->
<!-- sent="Thu, 03 Nov 2011 10:54:46 -0600" -->
<!-- isosent="20111103165446" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431CE7_at_HDXMSPB.us.lmco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHXxYDgiYY1j1FPSq67M6C_asbmtO6zpXkNNLi=4cdv-uLJQfA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In /tmp.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Durga Choudhury
<br>
Sent: Thursday, November 03, 2011 11:04 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Shared-memory problems
<br>
<p>Since /tmp is mounted across a network and /dev/shm is (always) local,
<br>
/dev/shm seems to be the right place for shared memory transactions.
<br>
If you create temporary files using mktemp is it being created in
<br>
/dev/shm or /tmp?
<br>
<p><p>On Thu, Nov 3, 2011 at 11:50 AM, Bogdan Costescu &lt;bcostescu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, Nov 3, 2011 at 15:54, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; -&#160;&#160;&#160; /dev/shm is 12 GB and has 755 permissions
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; % ls -l output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x&#160; 2 root root&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 40 Oct 28 09:14 shm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is your problem: it should be something like drwxrwxrwt. It might
</span><br>
<span class="quotelev1">&gt; depend on the distribution, f.e. the following show this to be a bug:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=533897">https://bugzilla.redhat.com/show_bug.cgi?id=533897</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and surely you can find some more on the subject with your favorite
</span><br>
<span class="quotelev1">&gt; search engine. Another source could be a paranoid sysadmin who has
</span><br>
<span class="quotelev1">&gt; changed the default (most likely correct) setting the distribution
</span><br>
<span class="quotelev1">&gt; came with - not only OpenMPI but any application using shmem would be
</span><br>
<span class="quotelev1">&gt; affected..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Bogdan
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
<p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="17681.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17679.php">amine mrabet: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
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
