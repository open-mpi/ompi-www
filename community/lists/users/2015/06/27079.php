<?
$subject_val = "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 06:36:06 2015" -->
<!-- isoreceived="20150610103606" -->
<!-- sent="Wed, 10 Jun 2015 11:36:04 +0100" -->
<!-- isosent="20150610103604" -->
<!-- name="Cian Davis" -->
<!-- email="ciandavis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Looking for LAM-MPI sources to create a mirror" -->
<!-- id="CA+Wyvfj7FJhd55BPsGBpNZkxmHLHRqxSFRApsnQUvFGqEj5wYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A1D2395C-99A7-48E6-9DBF-33C7414CBD4F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Looking for LAM-MPI sources to create a mirror<br>
<strong>From:</strong> Cian Davis (<em>ciandavis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 06:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
An old version of software I use (FDS 5.5.3 in this case - a CFD solver for
<br>
fire) was compiled against LAM-MPI. It looks for the particular executables
<br>
that came with LAM-MPI and looks for a running lamd. I tried a while ago to
<br>
symlink against more current OpenMPI distributions without success (I will
<br>
admit I didn't throw a huge amount of time at it).
<br>
<p>I have LAM-MPI compiled and running on our Ubuntu cluster, but I got a
<br>
request this morning from someone who read a post on the FDS fourm a few
<br>
years ago for the CentOS RPMs. I went to lam-mpi-org to get them, got
<br>
confused by the Chinese, Googled and found your blog post.
<br>
<p>The newer version of the software (Version 6) is compiled against OpenMPI.
<br>
By the way, a .deb of recent OpenMPI releases would be really nice if
<br>
someone would be so kind :-)
<br>
<p>Regards,
<br>
Cian
<br>
<p><p>On 10 June 2015 at 11:23, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Just curious -- is there a reason you can't upgrade?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - LAM/MPI has been dead for nearly a decade.
</span><br>
<span class="quotelev1">&gt; - Open MPI is source compatible with LAM/MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 10, 2015, at 5:07 AM, Cian Davis &lt;ciandavis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt; While OpenMPI is the way forward, there is a fair amount of software out
</span><br>
<span class="quotelev1">&gt; there still compiled against LAM-MPI. As Indiana University has stopped
</span><br>
<span class="quotelev1">&gt; hosting (<a href="http://blogs.cisco.com/performance/a-farewell-to-lammpi">http://blogs.cisco.com/performance/a-farewell-to-lammpi</a>), there
</span><br>
<span class="quotelev1">&gt; is no easy way to get the sources.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering if someone know of somewhere I could get a full copy of
</span><br>
<span class="quotelev1">&gt; the sources to create an archive mirror?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Cian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27073.php">http://www.open-mpi.org/community/lists/users/2015/06/27073.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27076.php">http://www.open-mpi.org/community/lists/users/2015/06/27076.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27080.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27076.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Reply:</strong> <a href="27082.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
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
