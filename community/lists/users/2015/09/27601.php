<?
$subject_val = "Re: [OMPI users] XHPL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:26:10 2015" -->
<!-- isoreceived="20150917022610" -->
<!-- sent="Wed, 16 Sep 2015 19:26:07 -0700" -->
<!-- isosent="20150917022607" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XHPL question" -->
<!-- id="CAMD57oetVNseGM94svD=AiAmAB=kSL0ocDF-6MTagTwS8Uw0Bw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFXuo3bwOy2e2kT51vFkhBFJHdenSf=9DvXpFKhPPt2+p=kOsQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] XHPL question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 22:26:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contact?"</a>
<li><strong>In reply to:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff will undoubtedly start typing before he reads my response, so I'll
<br>
spare you from reading all the ugly details twice :-)
<br>
<p>There was an unintentional ABI break in the 1.8 series that necessitated a
<br>
version numbering change to libmpi. It involves the code that handles the
<br>
connection between a process and its local daemon. If you hard link (e.g.,
<br>
static build) your app against a pre-1.8.5 lib and then run it against a
<br>
1.8.5+ version of mpirun, it will fail.
<br>
<p>However, if you dynamically link, everything should be fine so long as the
<br>
app's LD_LIBRARY_PATH points to the 1.8.5+ shared libs.
<br>
<p>Ralph
<br>
<p><p><p>On Wed, Sep 16, 2015 at 2:49 PM, Mark Moorcroft &lt;plaktau_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found the thread below from May. I&#226;&#128;&#153;m setting up a new cluster and using
</span><br>
<span class="quotelev1">&gt; openmpi 1.10. I have a gnu build and an Intel. Neither has libmpi.so.1. I
</span><br>
<span class="quotelev1">&gt; created a symlink and it&#226;&#128;&#153;s working. My question is if I should try to
</span><br>
<span class="quotelev1">&gt; rebuild LAPACK, and is it wise to be adding that link? For me it&#226;&#128;&#153;s just
</span><br>
<span class="quotelev1">&gt; burn-in and testing. I don&#226;&#128;&#153;t want to create issues for the scientists
</span><br>
<span class="quotelev1">&gt; later. Was this link purposely removed some number of versions back?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I copied the LAPACK benchmark binaries (xhpl being the binary) over to a
</span><br>
<span class="quotelev1">&gt; development system (which
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is running the same version of CentOS) but I'm getting some errors trying
</span><br>
<span class="quotelev1">&gt; to run the OpenMPI LAPACK benchmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on OpenMPI 1.8.5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xhpl: error while loading shared libraries: libmpi.so.1: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I look at the 1.8.5 install directory I find the following shared
</span><br>
<span class="quotelev1">&gt; object library but no libmpi.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /apps/mpi/openmpi/1.8.5-dev/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it necessary to re-compile the OpenMPI LAPACK benchmark to run OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.8.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as opposed to 1.8.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27598.php">http://www.open-mpi.org/community/lists/users/2015/09/27598.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Contact?"</a>
<li><strong>In reply to:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
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
