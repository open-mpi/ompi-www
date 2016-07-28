<?
$subject_val = "Re: [OMPI users] Seg fault with PBS Pro 10.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 27 05:58:56 2011" -->
<!-- isoreceived="20110727095856" -->
<!-- sent="Wed, 27 Jul 2011 11:58:47 +0200" -->
<!-- isosent="20110727095847" -->
<!-- name="Youri LACAN-BARTLEY" -->
<!-- email="youri.lacan-bartley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Seg fault with PBS Pro 10.4" -->
<!-- id="9113A52E1096EB41B1F88DD94C4369D5C40394_at_EXCHSRV.transvalor.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Youri LACAN-BARTLEY (<em>youri.lacan-bartley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-27 05:58:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16996.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17000.php">Justin Wood: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>For what it's worth: we're successfully running OMPI 1.4.3 compiled with gcc-4.1.2 along with PBS Pro 10.4.
<br>
<p>Kind regards,
<br>
<p>Youri LACAN-BARTLEY
<br>
<p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Ralph Castain
<br>
Envoy&#233;&#160;: mercredi 27 juillet 2011 02:49
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] Seg fault with PBS Pro 10.4
<br>
<p>I don't believe we ever got anywhere with this due to lack of response. If you get some info on what happened to tm_init, please pass it along.
<br>
<p>Best guess: something changed in a recent PBS Pro release. Since none of us have access to it, we don't know what's going on. :-(
<br>
<p><p>On Jul 26, 2011, at 10:10 AM, Wood, Justin Contractor, SAIC wrote:
<br>
<p><span class="quotelev1">&gt; I'm having a problem using OpenMPI under PBS Pro 10.4.  I tried both 1.4.3 and 1.5.3, both behave the same.  I'm able to run just fine if I don't use PBS and go direct to the nodes.  Also, if I run under PBS and use only 1 node, it works fine, but as soon as I span nodes, I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] Failing at address: 0x3f
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 0] /lib64/libpthread.so.0 [0x3f2b20eb10]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 1] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(discui_+0x84) [0x2affa453765c]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 2] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(diswsi+0xc3) [0x2affa4534c6f]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 3] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa453290c]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 4] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0(tm_init+0x1fe) [0x2affa4532bf8]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 5] /opt/ompi/1.4.3/intel/lib/libopen-rte.so.0 [0x2affa452691c]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 6] mpirun [0x404c17]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 7] mpirun [0x403e28]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3f2a61d994]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] [ 9] mpirun [0x403d59]
</span><br>
<span class="quotelev1">&gt; [a4ou-n501:07366] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I searched the archives and found a similar issue from last year:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/02/12084.php">http://www.open-mpi.org/community/lists/users/2010/02/12084.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last update I saw was that someone was going to contact Altair and have them look at why it was failing to do the tm_init.  Does anyone have an update to this, and has anyone been able to run successfully using recent versions of PBSPro?  I've also contacted our rep at Altair, but he hasn't responded yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Justin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Justin Wood
</span><br>
<span class="quotelev1">&gt; Systems Engineer
</span><br>
<span class="quotelev1">&gt; FNMOC | SAIC
</span><br>
<span class="quotelev1">&gt; 7 Grace Hopper, Stop 1
</span><br>
<span class="quotelev1">&gt; Monterey, CA
</span><br>
<span class="quotelev1">&gt; justin.g.wood.ctr_at_[hidden]
</span><br>
<span class="quotelev1">&gt; justin.g.wood_at_[hidden]
</span><br>
<span class="quotelev1">&gt; office: 831.656.4671
</span><br>
<span class="quotelev1">&gt; mobile: 831.869.1576
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16996.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="16993.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17000.php">Justin Wood: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
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
