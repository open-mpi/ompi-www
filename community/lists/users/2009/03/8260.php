<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  1 19:25:10 2009" -->
<!-- isoreceived="20090302002510" -->
<!-- sent="Mon, 02 Mar 2009 11:24:48 +1100" -->
<!-- isosent="20090302002448" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="49AB2750.3040001_at_vpac.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120902270854h2b7ecfbds30f9b303dd7eee76_at_mail.gmail.com" -->
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
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-01 19:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="../../2009/02/8238.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8288.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8288.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt Hughes wrote:
<br>
<span class="quotelev1">&gt; 2009/2/26 Brett Pemberton &lt;brett_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from tango092.vpac.org
</span><br>
<span class="quotelev2">&gt;&gt; to: tango090 error polling LP CQ with status RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev2">&gt;&gt; number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What OS are you using?
</span><br>
<p>Centos 5
<br>
<p>&nbsp;&nbsp;&nbsp;I've seen this error and many other Infiniband
<br>
<span class="quotelev1">&gt; related errors on RedHat enterprise linux 4 update 4, with ConnectX
</span><br>
<span class="quotelev1">&gt; cards and various versions of OFED, up to version 1.3.  Depending on
</span><br>
<span class="quotelev1">&gt; the MCA parameters, I also see hangs often enough to make native
</span><br>
<span class="quotelev1">&gt; Infiniband unusable on this OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'd appreciate some advice on if I'm using OFED correctly.
<br>
<p>I'm running OFED 1.4, however not the kernel modules, just userland.
<br>
Is this a bad idea?
<br>
<p>Basically, I recompile the ofed src.rpms for:
<br>
<p>dapl, libibcm, libibcommon, libibmad, libibumad, libibverbs, libmthca, 
<br>
librdmacm, libsdp, mstflint
<br>
<p>And install onto CentOS, upgrading the in-distro versions.
<br>
Should I also be compiling ofa_kernel ?
<br>
Could this be causing problems ?
<br>
<p>As explained off-list, I'm running the most recent firmware for my 
<br>
cards, although the release is quite old:
<br>
<p>hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c902:0024:3c6c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c902:0024:3c6f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_03B0140001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-8260/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8261.php">Nicolas Deladerriere: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8259.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="../../2009/02/8238.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8288.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8288.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
