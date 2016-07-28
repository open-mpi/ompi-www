<?
$subject_val = "Re: [OMPI users] XHPL question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 22:36:40 2015" -->
<!-- isoreceived="20150917023640" -->
<!-- sent="Wed, 16 Sep 2015 19:36:39 -0700" -->
<!-- isosent="20150917023639" -->
<!-- name="Mark Moorcroft" -->
<!-- email="plaktau_at_[hidden]" -->
<!-- subject="Re: [OMPI users] XHPL question" -->
<!-- id="CAFXuo3aEdL6R70wuCpMi9R=dHvBD-3SLPPuaVFm_abcm3RhpJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] XHPL question" -->
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
<strong>From:</strong> Mark Moorcroft (<em>plaktau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 22:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Maybe in reply to:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Reply:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I'm pretty sure my xhpl binary is/was dynamic linked. Here is my env:
<br>
<p>LD_LIBRARY_PATH=/share/apps/openmpi-1.10-intel-x86_64/lib:/share/apps/Intel/composer_xe_2015.2.164/compiler/lib/intel64:/share/apps/Intel/composer_xe_2015.2.164/mkl/lib/intel64:/opt/python/lib
<br>
<p>The binary fails without a symlink to libmpi.so.1.
<br>
<p>So I'm not sure if you're saying yes create a symlink or yes rebuild the
<br>
binary. Or it should work, and no symlink should be necessary.
<br>
<p><span class="quotelev1">&gt;Jeff will undoubtedly start typing before he reads my response, so I'll
</span><br>
<span class="quotelev1">&gt;spare you from reading all the ugly details twice :-)
</span><br>
<span class="quotelev1">&gt;There was an unintentional ABI break in the 1.8 series that necessitated a
</span><br>
<span class="quotelev1">&gt;version numbering change to libmpi. It involves the code that handles the
</span><br>
<span class="quotelev1">&gt;connection between a process and its local daemon. If you hard link (e.g.,
</span><br>
<span class="quotelev1">&gt;static build) your app against a pre-1.8.5 lib and then run it against a
</span><br>
<span class="quotelev1">&gt;1.8.5+ version of mpirun, it will fail.
</span><br>
<span class="quotelev1">&gt;However, if you dynamically link, everything should be fine so long as the
</span><br>
<span class="quotelev1">&gt;app's LD_LIBRARY_PATH points to the 1.8.5+ shared libs.
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Previous message:</strong> <a href="27601.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Maybe in reply to:</strong> <a href="27598.php">Mark Moorcroft: "[OMPI users] XHPL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
<li><strong>Reply:</strong> <a href="27603.php">Ralph Castain: "Re: [OMPI users] XHPL question"</a>
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
