<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 14:00:36 2011" -->
<!-- isoreceived="20111103180036" -->
<!-- sent="Thu, 03 Nov 2011 12:00:25 -0600" -->
<!-- isosent="20111103180025" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5480CB2_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F3311C4-042F-4233-B8FA-248E37320202_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-11-03 14:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right, Ralph.  There is no surprise behavior.  I had forgotten that I had been testing --mca orte_tmpdir_base /dev/shm to see if it worked (and obviously it doesn't).  Before that, without any MCA options, OpenMPI had tried /tmp, and gave me the warning about /tmp being NFS mounted, and so I had been exploring options.
<br>
<p>I accept your point - I need &quot;a good local directory - anything you have permission to write in will work fine&quot;.  How would one do this on a stateless node?  And can I beat the vendor over the head for not knowing how to set up the node image so that OpenMPI could function properly?
<br>
<p>Thanks
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, November 03, 2011 11:33 AM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Shared-memory problems
<br>
<p>I'm afraid this isn't correct. You definitely don't want the session directory in /dev/shm as this will almost always cause problems.
<br>
<p>We look thru a progression of envars to find where to put the session directory:
<br>
<p>1. the MCA param orte_tmpdir_base
<br>
<p>2. the envar OMPI_PREFIX_ENV
<br>
<p>3. the envar TMPDIR
<br>
<p>4. the envar TEMP
<br>
<p>5. the envar TMP
<br>
<p>Check all those to see if one is set to /dev/shm. If so, you have a problem to resolve. For performance reasons, you probably don't want the session directory sitting on a network mounted location. What you need is a good local directory - anything you have permission to write in will work fine. Just set one of the above to point to it.
<br>
<p><p>On Nov 3, 2011, at 10:04 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Since /tmp is mounted across a network and /dev/shm is (always) local,
</span><br>
<span class="quotelev1">&gt; /dev/shm seems to be the right place for shared memory transactions.
</span><br>
<span class="quotelev1">&gt; If you create temporary files using mktemp is it being created in
</span><br>
<span class="quotelev1">&gt; /dev/shm or /tmp?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 3, 2011 at 11:50 AM, Bogdan Costescu &lt;bcostescu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Nov 3, 2011 at 15:54, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    /dev/shm is 12 GB and has 755 permissions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % ls -l output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drwxr-xr-x  2 root root         40 Oct 28 09:14 shm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is your problem: it should be something like drwxrwxrwt. It might
</span><br>
<span class="quotelev2">&gt;&gt; depend on the distribution, f.e. the following show this to be a bug:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=533897">https://bugzilla.redhat.com/show_bug.cgi?id=533897</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and surely you can find some more on the subject with your favorite
</span><br>
<span class="quotelev2">&gt;&gt; search engine. Another source could be a paranoid sysadmin who has
</span><br>
<span class="quotelev2">&gt;&gt; changed the default (most likely correct) setting the distribution
</span><br>
<span class="quotelev2">&gt;&gt; came with - not only OpenMPI but any application using shmem would be
</span><br>
<span class="quotelev2">&gt;&gt; affected..
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Bogdan
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
<li><strong>Next message:</strong> <a href="17684.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17682.php">Eugene Loh: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
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
