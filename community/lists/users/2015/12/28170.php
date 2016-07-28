<?
$subject_val = "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 17:24:22 2015" -->
<!-- isoreceived="20151216222422" -->
<!-- sent="Wed, 16 Dec 2015 15:24:18 -0700" -->
<!-- isosent="20151216222418" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.." -->
<!-- id="20151216222418.GB33443_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAMMxCYAELM0FFXfuM5L_s5d64R-=f4OAk5V_VaBR7t7hURtKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 17:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28167.php">Udayanga Wickramasinghe: "[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is fixed in the 1.10 series. We will not be making any more
<br>
updates to the 1.8 series so you will need to update to 1.10 to get the
<br>
fix.
<br>
<p>-Nathan
<br>
<p>On Wed, Dec 16, 2015 at 02:48:45PM -0500, Udayanga Wickramasinghe wrote:
<br>
<span class="quotelev1">&gt;    Hi all,
</span><br>
<span class="quotelev1">&gt;    I have a custom MPI_Op function which I use within a non blocking version
</span><br>
<span class="quotelev1">&gt;    of all_reduce(). When executing the mpi program I am seeing a segfault
</span><br>
<span class="quotelev1">&gt;    thrown from libNBC. It seems like this is a known issue in openMPI atleast
</span><br>
<span class="quotelev1">&gt;    [1]. Is this somehow fixed in a later release version of openmpi ? I am
</span><br>
<span class="quotelev1">&gt;    using 1.8.4.
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt;    Udayanga
</span><br>
<span class="quotelev1">&gt;    [1] <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14588.php">http://www.open-mpi.org/community/lists/devel/2014/04/14588.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28167.php">http://www.open-mpi.org/community/lists/users/2015/12/28167.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28170/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28167.php">Udayanga Wickramasinghe: "[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
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
