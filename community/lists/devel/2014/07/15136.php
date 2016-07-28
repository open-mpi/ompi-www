<?
$subject_val = "[OMPI devel] Hangs on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 16:38:40 2014" -->
<!-- isoreceived="20140714203840" -->
<!-- sent="Mon, 14 Jul 2014 13:38:38 -0700" -->
<!-- isosent="20140714203838" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Hangs on the trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360474A9A3C_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Hangs on the trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-14 16:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have noticed that I am seeing some tests hang on the trunk.  For example:
<br>
<p>$ mpirun --mca btl_tcp_if_include eth0 --host drossetti-ivy0,drossetti-ivy1 -np 2 --mca pml ob1 --mca btl sm,tcp,self --mca coll_mdisable_allgather 1 --mca btl_openib_warn_default_gid_prefix 0 send
<br>
<p>It is not unusual for this test to take several minutes, particularly on slow networks.
<br>
Please be patient.
<br>
NOTICE: Using max message size: 10485760
<br>
Progress: [=====
<br>
<p>Is anyone else seeing this?  (This is really a hang in spite of the message saying it should take a few minutes)
<br>
<p>This started with the changes Nathan did for renaming the descriptor fields - r32196 through r32202.
<br>
<span class="quotelev1">&gt;From what I can tell, it looks like it hangs the second time the rendezvous protocol is used to send the data.
</span><br>
<p>Rolf
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Previous message:</strong> <a href="15135.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32225 - in trunk: contrib/build-mca-comps-outside-of-tree ompi/contrib/vt/vt	ompi/contrib/vt/vt/extlib/otf opal/mca/event/libevent2021/libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
<li><strong>Reply:</strong> <a href="15137.php">Nathan Hjelm: "Re: [OMPI devel] Hangs on the trunk"</a>
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
