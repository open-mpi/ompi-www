<?
$subject_val = "Re: [OMPI users] XHPL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:43:44 2015" -->
<!-- isoreceived="20150917024344" -->
<!-- sent="Wed, 16 Sep 2015 19:43:42 -0700" -->
<!-- isosent="20150917024342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XHPL question" -->
<!-- id="CAMD57oe-KoE4fPXAdFuGCg4LH233+WvcP+3J6So3sYQXnr5f9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFXuo3aEdL6R70wuCpMi9R=dHvBD-3SLPPuaVFm_abcm3RhpJg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-16 22:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27604.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<li><strong>In reply to:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you are trying to link it against the 1.10 series? You could
<br>
probably get away with the symlink, but unless there is some reason to
<br>
avoid it, I'd just recompile to be safe.
<br>
<p><p>On Wed, Sep 16, 2015 at 7:36 PM, Mark Moorcroft &lt;plaktau_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, I'm pretty sure my xhpl binary is/was dynamic linked. Here is my env:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/share/apps/openmpi-1.10-intel-x86_64/lib:/share/apps/Intel/composer_xe_2015.2.164/compiler/lib/intel64:/share/apps/Intel/composer_xe_2015.2.164/mkl/lib/intel64:/opt/python/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The binary fails without a symlink to libmpi.so.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm not sure if you're saying yes create a symlink or yes rebuild the
</span><br>
<span class="quotelev1">&gt; binary. Or it should work, and no symlink should be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Jeff will undoubtedly start typing before he reads my response, so I'll
</span><br>
<span class="quotelev2">&gt; &gt;spare you from reading all the ugly details twice :-)
</span><br>
<span class="quotelev2">&gt; &gt;There was an unintentional ABI break in the 1.8 series that necessitated
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev2">&gt; &gt;version numbering change to libmpi. It involves the code that handles the
</span><br>
<span class="quotelev2">&gt; &gt;connection between a process and its local daemon. If you hard link
</span><br>
<span class="quotelev1">&gt; (e.g.,
</span><br>
<span class="quotelev2">&gt; &gt;static build) your app against a pre-1.8.5 lib and then run it against a
</span><br>
<span class="quotelev2">&gt; &gt;1.8.5+ version of mpirun, it will fail.
</span><br>
<span class="quotelev2">&gt; &gt;However, if you dynamically link, everything should be fine so long as
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;app's LD_LIBRARY_PATH points to the 1.8.5+ shared libs.
</span><br>
<span class="quotelev2">&gt; &gt;Ralph
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27602.php">http://www.open-mpi.org/community/lists/users/2015/09/27602.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27604.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
<li><strong>In reply to:</strong> <a href="27602.php">Mark Moorcroft: "Re: [OMPI users] XHPL question"</a>
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
