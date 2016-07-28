<?
$subject_val = "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 06:36:04 2013" -->
<!-- isoreceived="20130221113604" -->
<!-- sent="Thu, 21 Feb 2013 12:35:53 +0100" -->
<!-- isosent="20130221113553" -->
<!-- name="Stefan Friedel" -->
<!-- email="stefan.friedel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel" -->
<!-- id="20130221113553.GJ3971_at_woyzeck" -->
<!-- charset="utf-8" -->
<!-- inreplyto="512603A2.5050807_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Stefan Friedel (<em>stefan.friedel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 06:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>In reply to:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 21, 2013 at 12:23:14PM +0100, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt;The MTT-Parameter mess is well-known and the good solution is to set 
</span><br>
<span class="quotelev1">&gt;the MTT parameter high. In other case you never know what you will 
</span><br>
<span class="quotelev1">&gt;get - your application may hang, block the IB interface, run bit 
</span><br>
<span class="quotelev1">&gt;slower, run very slow...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<p>As I wrote: I'm aware of this FAQ entries -but: you can't set the log_num_mtt
<br>
parameter if you're using a Debian/vanilla kernel: the mlx4_core-module
<br>
does not offer this parameter.
<br>
<p>MfG/Sincerely,
<br>
Stefan Friedel
<br>
<pre>
--
IWR * 523 * INF 368 * 69120 Heidelberg
T +49 6221 548240 * F +49 6221 545224
stefan.friedel_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21432/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21433.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>In reply to:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
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
