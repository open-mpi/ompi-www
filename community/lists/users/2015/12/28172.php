<?
$subject_val = "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function..";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 01:33:08 2015" -->
<!-- isoreceived="20151217063308" -->
<!-- sent="Thu, 17 Dec 2015 01:33:01 -0500" -->
<!-- isosent="20151217063301" -->
<!-- name="Udayanga Wickramasinghe" -->
<!-- email="uswickra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.." -->
<!-- id="CAAMMxCZpczN0=VX+_vBu531L=5_2C=y4DgYFK6oP5+nh9pvxiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20151216222418.GB33443_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Udayanga Wickramasinghe (<em>uswickra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 01:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried with 1.10.0, and is failing still. I will need to check whether it
<br>
works for later releases.
<br>
<p>Thanks
<br>
Udayanga
<br>
<p><p>On Wed, Dec 16, 2015 at 5:24 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is fixed in the 1.10 series. We will not be making any more
</span><br>
<span class="quotelev1">&gt; updates to the 1.8 series so you will need to update to 1.10 to get the
</span><br>
<span class="quotelev1">&gt; fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 16, 2015 at 02:48:45PM -0500, Udayanga Wickramasinghe wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;    I have a custom MPI_Op function which I use within a non blocking
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev2">&gt; &gt;    of all_reduce(). When executing the mpi program I am seeing a segfault
</span><br>
<span class="quotelev2">&gt; &gt;    thrown from libNBC. It seems like this is a known issue in openMPI
</span><br>
<span class="quotelev1">&gt; atleast
</span><br>
<span class="quotelev2">&gt; &gt;    [1]. Is this somehow fixed in a later release version of openmpi ? I
</span><br>
<span class="quotelev1">&gt; am
</span><br>
<span class="quotelev2">&gt; &gt;    using 1.8.4.
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks
</span><br>
<span class="quotelev2">&gt; &gt;    Udayanga
</span><br>
<span class="quotelev2">&gt; &gt;    [1] <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14588.php">http://www.open-mpi.org/community/lists/devel/2014/04/14588.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28167.php">http://www.open-mpi.org/community/lists/users/2015/12/28167.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28170.php">http://www.open-mpi.org/community/lists/users/2015/12/28170.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Reply:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
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
