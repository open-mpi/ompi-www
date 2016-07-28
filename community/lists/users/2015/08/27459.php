<?
$subject_val = "Re: [OMPI users] open mpi upgrade";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 12:28:27 2015" -->
<!-- isoreceived="20150813162827" -->
<!-- sent="Thu, 13 Aug 2015 12:28:19 -0400" -->
<!-- isosent="20150813162819" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open mpi upgrade" -->
<!-- id="32D185D1-448D-448E-AB11-5D1BE54CA3AF_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJdx8H1eczhYXkCJGONDHmWw8eNp8ppAw-xT6e1qZhrj527N7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open mpi upgrade<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-13 12:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27451.php">Ehsan Moradi: "[OMPI users] open mpi upgrade"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ehsan
<br>
<p>You didn't tell the details of how you configured and installed Open MPI.
<br>
However, you must point the configuration --prefix to the installation
<br>
directory, say:
<br>
<p>./configure --prefix=/opt/openmpi-1.8.8
<br>
<p>In addition, the installation directory must be *different* from the 
<br>
directory where you build Open MPI (say, where you downloaded
<br>
and decompressed the Open MPI source code tarball).
<br>
<p>Also, make sure you have writing permissions to both the build 
<br>
and installation directories. 
<br>
If you don't have writing permissions to the installation directory, 
<br>
you may need to use &quot;sudo&quot; or &quot;su&quot; when you do &quot;make install&quot;.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On Aug 13, 2015, at 1:29 AM, Ehsan Moradi wrote:
<br>
<p><span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt; my dear friends
</span><br>
<span class="quotelev1">&gt; i tried to upgrade my openmpi version from 1.2.8 to 1.8.8
</span><br>
<span class="quotelev1">&gt; but after installing it on different directory &quot;/opt/openmpi-1.8.8/&quot; when i enter mpirun its version is 1.2.8 
</span><br>
<span class="quotelev1">&gt; and  after installing the directory &quot;/opt/openmpi-1.8.8/&quot; is empty!!
</span><br>
<span class="quotelev1">&gt; so what should i do for installing and using new version
</span><br>
<span class="quotelev1">&gt; ????
</span><br>
<span class="quotelev1">&gt; my current version was preinstalled on the system and its have a problem with big jobs i got errno110 (time out), i changed the mac argument to but steel not working
</span><br>
<span class="quotelev1">&gt; so if anyone help me to install last version would be a great help.
</span><br>
<span class="quotelev1">&gt; os: open suse, 4 nodes ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks alot
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27451.php">http://www.open-mpi.org/community/lists/users/2015/08/27451.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27460.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27458.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27451.php">Ehsan Moradi: "[OMPI users] open mpi upgrade"</a>
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
