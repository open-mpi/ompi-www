<?
$subject_val = "Re: [OMPI users] Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 12:04:18 2011" -->
<!-- isoreceived="20111103160418" -->
<!-- sent="Thu, 3 Nov 2011 12:04:14 -0400" -->
<!-- isosent="20111103160414" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared-memory problems" -->
<!-- id="CAHXxYDgiYY1j1FPSq67M6C_asbmtO6zpXkNNLi=4cdv-uLJQfA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAH+WPdsToUbqi3GL=+_3RWz8WaFFAeNpNcWiO6pO6Ri1qb2w0g_at_mail.gmail.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 12:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since /tmp is mounted across a network and /dev/shm is (always) local,
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
<span class="quotelev2">&gt;&gt; % ls &#150;l output:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17675.php">amine mrabet: "[OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17673.php">Bogdan Costescu: "Re: [OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17676.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17680.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Shared-memory problems"</a>
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
