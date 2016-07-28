<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 14:12:50 2011" -->
<!-- isoreceived="20110727181250" -->
<!-- sent="Wed, 27 Jul 2011 11:16:43 -0700" -->
<!-- isosent="20110727181643" -->
<!-- name="Justin Wood" -->
<!-- email="jgwood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.4" -->
<!-- id="4E30560B.2000905_at_nps.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AFA23B89-6355-486F-B165-F095D0562BAD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Seg fault with PBS Pro 10.4<br>
<strong>From:</strong> Justin Wood (<em>jgwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 14:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16999.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Reply:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I heard back from my Altair contact this morning.  He told me that they 
<br>
did in fact make a change in some version of 10.x that broke this.  They 
<br>
don't have a workaround for v10, but he said it was fixed in v11.x.
<br>
<p>I built OpenMPI 1.5.3 this morning with PBSPro v11.0, and it works fine. 
<br>
&nbsp;&nbsp;I don't get any segfaults.
<br>
<p>-Justin.
<br>
<p>On 07/26/2011 05:49 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I don't believe we ever got anywhere with this due to lack of response. If you get some info on what happened to tm_init, please pass it along.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best guess: something changed in a recent PBS Pro release. Since none of us have access to it, we don't know what's going on. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 26, 2011, at 10:10 AM, Wood, Justin Contractor, SAIC wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having a problem using OpenMPI under PBS Pro 10.4.  I tried both 1.4.3 and 1.5.3, both behave the same.  I'm able to run just fine if I don't use PBS and go direct to the nodes.  Also, if I run under PBS and use only 1 node, it works fine, but as soon as I span nodes, I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] Failing at address: 0x3f
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 0] /lib64/libpthread.so.0 [0x3f2b20eb10]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 1] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(discui_+0x84) [0x2affa453765c]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 2] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(diswsi+0xc3) [0x2affa4534c6f]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 3] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa453290c]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 4] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(tm_init+0x1fe) [0x2affa4532bf8]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 5] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa452691c]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 6] mpirun [0x404c17]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 7] mpirun [0x403e28]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3f2a61d994]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] [ 9] mpirun [0x403d59]
</span><br>
<span class="quotelev2">&gt;&gt; [a4ou-n501:07366] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I searched the archives and found a similar issue from last year:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/02/12084.php">http://www.open-mpi.org/community/lists/users/2010/02/12084.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The last update I saw was that someone was going to contact Altair and have them look at why it was failing to do the tm_init.  Does anyone have an update to this, and has anyone been able to run successfully using recent versions of PBSPro?  I've also contacted our rep at Altair, but he hasn't responded yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Justin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Justin Wood
</span><br>
<span class="quotelev2">&gt;&gt; Systems Engineer
</span><br>
<span class="quotelev2">&gt;&gt; FNMOC | SAIC
</span><br>
<span class="quotelev2">&gt;&gt; 7 Grace Hopper, Stop 1
</span><br>
<span class="quotelev2">&gt;&gt; Monterey, CA
</span><br>
<span class="quotelev2">&gt;&gt; justin.g.wood.ctr_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; justin.g.wood_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; office: 831.656.4671
</span><br>
<span class="quotelev2">&gt;&gt; mobile: 831.869.1576
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Justin Wood
Systems Engineer
FNMOC | SAIC
7 Grace Hopper, Stop 1
Monterey, CA
justin.g.wood.ctr_at_[hidden]
justin.g.wood_at_[hidden]
office: 831.656.4671
mobile: 831.869.1576
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16999.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Reply:</strong> <a href="17001.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
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
