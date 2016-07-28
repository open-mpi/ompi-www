<?
$subject_val = "Re: [OMPI users] Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:33:39 2011" -->
<!-- isoreceived="20111103163339" -->
<!-- sent="Thu, 3 Nov 2011 10:33:27 -0600" -->
<!-- isosent="20111103163327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared-memory problems" -->
<!-- id="2F3311C4-042F-4233-B8FA-248E37320202_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared-memory problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid this isn't correct. You definitely don't want the session directory in /dev/shm as this will almost always cause problems.
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
<span class="quotelev3">&gt;&gt;&gt; % ls &#150;l output:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17677.php">Jeff Squyres: "Re: [OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>Previous message:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17683.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
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
