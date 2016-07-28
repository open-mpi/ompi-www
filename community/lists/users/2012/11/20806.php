<?
$subject_val = "Re: [OMPI users] error with mrmpi and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 05:49:19 2012" -->
<!-- isoreceived="20121129104919" -->
<!-- sent="Thu, 29 Nov 2012 05:49:15 -0500" -->
<!-- isosent="20121129104915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with mrmpi and openmpi" -->
<!-- id="2C3C203D-E696-434B-8E9E-565DFAFDD5E5_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C14FCF71-F5D1-4C1E-976C-FC5BF7AD7BED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with mrmpi and openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 05:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20805.php">Syed Ahsan Ali: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)"</a>
<li><strong>In reply to:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2012, at 11:20 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like OMPI was built with Infiniband support, but we aren't finding the required support libraries wherever the process is running. 
</span><br>
<p><p>Just to clarify, this message means that *verbs* didn't find the right driver for the OpenFabrics NIC in your machine.
<br>
<p>Specifically, your Open MPI build includes support for OpenFabrics types of devices, but when it goes to use that support on your machine, the OpenFabrics &quot;verbs&quot; library is failing to find a driver for your specific NIC device.
<br>
<p>This usually means that your OpenFabrics installation is borked.  You should probably contact your system administrator to have them fix it.
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
<li><strong>Next message:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20805.php">Syed Ahsan Ali: "[OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)"</a>
<li><strong>In reply to:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
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
