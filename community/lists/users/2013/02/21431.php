<?
$subject_val = "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 06:23:19 2013" -->
<!-- isoreceived="20130221112319" -->
<!-- sent="Thu, 21 Feb 2013 12:23:14 +0100" -->
<!-- isosent="20130221112314" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel" -->
<!-- id="512603A2.5050807_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130221105345.GI3971_at_woyzeck" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 06:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>In reply to:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Reply:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MTT-Parameter mess is well-known and the good solution is to set the MTT 
<br>
parameter high. In other case you never know what you will get - your 
<br>
application may hang, block the IB interface, run bit slower, run very slow...
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
<br>
<a href="http://montecarlo.vtt.fi/mtg/2012_Madrid/Hans_Hammer2.pdf">http://montecarlo.vtt.fi/mtg/2012_Madrid/Hans_Hammer2.pdf</a>
<br>
<p>On 02/21/13 11:53, Stefan Friedel wrote:
<br>
<span class="quotelev1">&gt; Is there a way to tell openmpi-1.6.3 to use the ofed-module from vanilla
</span><br>
<span class="quotelev1">&gt; kernel and not to rely on log_num_mtt for
</span><br>
<span class="quotelev1">&gt; &quot;do-we-have-enough-registred-mem&quot; computation for Mellanox HCAs? Any
</span><br>
<span class="quotelev1">&gt; other idea/hint?
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21431/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>In reply to:</strong> <a href="21430.php">Stefan Friedel: "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Reply:</strong> <a href="21432.php">Stefan Friedel: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
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
