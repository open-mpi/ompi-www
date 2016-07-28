<?
$subject_val = "[OMPI users] Seg fault with PBS Pro 10.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 12:10:12 2011" -->
<!-- isoreceived="20110726161012" -->
<!-- sent="Tue, 26 Jul 2011 16:10:07 +0000" -->
<!-- isosent="20110726161007" -->
<!-- name="Wood, Justin Contractor, SAIC" -->
<!-- email="justin.g.wood.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] Seg fault with PBS Pro 10.4" -->
<!-- id="42861DF4B1D56543B73C37F573B5AFC00CF5A1DA_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> [OMPI users] Seg fault with PBS Pro 10.4<br>
<strong>From:</strong> Wood, Justin Contractor, SAIC (<em>justin.g.wood.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 12:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16982.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16980.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Reply:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having a problem using OpenMPI under PBS Pro 10.4.  I tried both 1.4.3 and 1.5.3, both behave the same.  I'm able to run just fine if I don't use PBS and go direct to the nodes.  Also, if I run under PBS and use only 1 node, it works fine, but as soon as I span nodes, I get the following:
<br>
<p>[a4ou-n501:07366] *** Process received signal ***
<br>
[a4ou-n501:07366] Signal: Segmentation fault (11)
<br>
[a4ou-n501:07366] Signal code: Address not mapped (1)
<br>
[a4ou-n501:07366] Failing at address: 0x3f
<br>
[a4ou-n501:07366] [ 0] /lib64/libpthread.so.0 [0x3f2b20eb10]
<br>
[a4ou-n501:07366] [ 1] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(discui_+0x84) [0x2affa453765c]
<br>
[a4ou-n501:07366] [ 2] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(diswsi+0xc3) [0x2affa4534c6f]
<br>
[a4ou-n501:07366] [ 3] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa453290c]
<br>
[a4ou-n501:07366] [ 4] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(tm_init+0x1fe) [0x2affa4532bf8]
<br>
[a4ou-n501:07366] [ 5] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa452691c]
<br>
[a4ou-n501:07366] [ 6] mpirun [0x404c17]
<br>
[a4ou-n501:07366] [ 7] mpirun [0x403e28]
<br>
[a4ou-n501:07366] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3f2a61d994]
<br>
[a4ou-n501:07366] [ 9] mpirun [0x403d59]
<br>
[a4ou-n501:07366] *** End of error message ***
<br>
Segmentation fault
<br>
<p>I searched the archives and found a similar issue from last year:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/02/12084.php">http://www.open-mpi.org/community/lists/users/2010/02/12084.php</a>
<br>
<p>The last update I saw was that someone was going to contact Altair and have them look at why it was failing to do the tm_init.  Does anyone have an update to this, and has anyone been able to run successfully using recent versions of PBSPro?  I've also contacted our rep at Altair, but he hasn't responded yet.
<br>
<p>Thanks, Justin.
<br>
<p>Justin Wood
<br>
Systems Engineer
<br>
FNMOC | SAIC
<br>
7 Grace Hopper, Stop 1
<br>
Monterey, CA
<br>
justin.g.wood.ctr_at_[hidden]
<br>
justin.g.wood_at_[hidden]
<br>
office: 831.656.4671
<br>
mobile: 831.869.1576
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16982.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>Previous message:</strong> <a href="16980.php">Ralph Castain: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Reply:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
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
