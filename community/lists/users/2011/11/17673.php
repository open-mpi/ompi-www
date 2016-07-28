<?
$subject_val = "Re: [OMPI users] Shared-memory problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 11:50:20 2011" -->
<!-- isoreceived="20111103155020" -->
<!-- sent="Thu, 3 Nov 2011 16:50:15 +0100" -->
<!-- isosent="20111103155015" -->
<!-- name="Bogdan Costescu" -->
<!-- email="bcostescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared-memory problems" -->
<!-- id="CAH+WPdsToUbqi3GL=+_3RWz8WaFFAeNpNcWiO6pO6Ri1qb2w0g_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB27C5431947_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Bogdan Costescu (<em>bcostescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 11:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 3, 2011 at 15:54, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; -&#160;&#160;&#160; /dev/shm is 12 GB and has 755 permissions
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; % ls &#150;l output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; drwxr-xr-x&#160; 2 root root&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 40 Oct 28 09:14 shm
</span><br>
<p>This is your problem: it should be something like drwxrwxrwt. It might
<br>
depend on the distribution, f.e. the following show this to be a bug:
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=533897">https://bugzilla.redhat.com/show_bug.cgi?id=533897</a>
<br>
<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=317329</a>
<br>
<p>and surely you can find some more on the subject with your favorite
<br>
search engine. Another source could be a paranoid sysadmin who has
<br>
changed the default (most likely correct) setting the distribution
<br>
came with - not only OpenMPI but any application using shmem would be
<br>
affected..
<br>
<p>Cheers,
<br>
Bogdan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Previous message:</strong> <a href="17672.php">Ralph Castain: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>In reply to:</strong> <a href="17671.php">Blosch, Edwin L: "[OMPI users] Shared-memory problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
<li><strong>Reply:</strong> <a href="17674.php">Durga Choudhury: "Re: [OMPI users] Shared-memory problems"</a>
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
