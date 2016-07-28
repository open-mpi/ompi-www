<?
$subject_val = "Re: [OMPI users] Connection problem on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 06:33:09 2015" -->
<!-- isoreceived="20150330103309" -->
<!-- sent="Mon, 30 Mar 2015 10:33:08 +0000" -->
<!-- isosent="20150330103308" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection problem on Linux cluster" -->
<!-- id="79B430A4-E8BE-408E-B336-14DFF28E8CC8_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F28A112937E208429BD09C805E9A1945090EA4BD_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection problem on Linux cluster<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 06:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26582.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 30, 2015, at 6:12 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much guys. The problem has just been resolved.
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; The problem was in the security groups rules when one create VMs. Openstack pushes the security groups into iptables rules and it is not necessary to do anything with iptables or firewalls inside VMs. The processes were freezing and I could not get any further debug information. Actually when I left the processes for few hours, I could finally get the error for tcp connection. I think I could fine tune openmpi to reduce this time? 
</span><br>
<p>FWIW, this is probably related to the default TCP timeout times set in your kernel.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26576.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26582.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
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
