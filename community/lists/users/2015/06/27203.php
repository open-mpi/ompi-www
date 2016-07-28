<?
$subject_val = "Re: [OMPI users] vader/sm not being picked up";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 14:36:40 2015" -->
<!-- isoreceived="20150626183640" -->
<!-- sent="Fri, 26 Jun 2015 12:36:38 -0600" -->
<!-- isosent="20150626183638" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] vader/sm not being picked up" -->
<!-- id="20150626183638.GA1384_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFGXdky=Tuj7Ep0JWYED-c_u5Uau4pcmAPM73F8o8TOwoJ0Nww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] vader/sm not being picked up<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-26 14:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27204.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27202.php">Ralph Castain: "Re: [OMPI users] hybrid programming: cpu load issues"</a>
<li><strong>In reply to:</strong> <a href="27188.php">Dave Turner: "[OMPI users] vader/sm not being picked up"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That strange. Are you sure the btl mca variable is not being set through
<br>
an environment variable or though an MCA parameter file? You should be
<br>
able to tell from the output of ompi_info -a.
<br>
<p>BTW, you do no need to specify both sm and vader. vader is a newer
<br>
shared memory btl that will likely replace sm in a future release.
<br>
<p>-Nathan
<br>
<p>On Wed, Jun 24, 2015 at 02:59:23PM -0500, Dave Turner wrote:
<br>
<span class="quotelev1">&gt;         Running OpenMPI 1.8.4 one application running on 16 cores of a single
</span><br>
<span class="quotelev1">&gt;    node
</span><br>
<span class="quotelev1">&gt;    takes over an hour compared to just 7 minutes for MPICH.  If I use 
</span><br>
<span class="quotelev1">&gt;    --mca btl vader,sm,self it runs in the same 7 minutes as MPICH.  If I
</span><br>
<span class="quotelev1">&gt;    throw in
</span><br>
<span class="quotelev1">&gt;    the tcp and openib btl's it also runs quickly, so it seems to just not be
</span><br>
<span class="quotelev1">&gt;    picking
</span><br>
<span class="quotelev1">&gt;    up the sm or vader btl's by default.  ompi_info shows the exclusivities
</span><br>
<span class="quotelev1">&gt;    set
</span><br>
<span class="quotelev1">&gt;    correctly.  I've also installed OpenMPI 1.8.6 and it runs fine.  Can
</span><br>
<span class="quotelev1">&gt;    someone
</span><br>
<span class="quotelev1">&gt;    take a look at the attached ompi_info output and let me know what is wrong
</span><br>
<span class="quotelev1">&gt;    in the configuration, or if there was a bug that has been fixed.  Thanks.
</span><br>
<span class="quotelev1">&gt;                      Dave Turner
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;                 118 Nichols Hall, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt;    Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                  cell: (785) 770-5929
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27188.php">http://www.open-mpi.org/community/lists/users/2015/06/27188.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27203/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27204.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27202.php">Ralph Castain: "Re: [OMPI users] hybrid programming: cpu load issues"</a>
<li><strong>In reply to:</strong> <a href="27188.php">Dave Turner: "[OMPI users] vader/sm not being picked up"</a>
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
