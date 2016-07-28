<?
$subject_val = "[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 05:53:56 2013" -->
<!-- isoreceived="20130221105356" -->
<!-- sent="Thu, 21 Feb 2013 11:53:45 +0100" -->
<!-- isosent="20130221105345" -->
<!-- name="Stefan Friedel" -->
<!-- email="stefan.friedel_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel" -->
<!-- id="20130221105345.GI3971_at_woyzeck" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel<br>
<strong>From:</strong> Stefan Friedel (<em>stefan.friedel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 05:53:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21429.php">Hartman, Todd W.: "[OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Reply:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
I'm struggling with the setup of openmpi-1.6.3 on top of Debian
<br>
wheezy/testing and mellanox/ofed/mlx4 memory pinning- cluster equipped
<br>
with Mellanox HCAs  MT26428, Debian 3.2.35-2 x86_64, 4x8core AMD Opteron
<br>
6212, 128G Memory.
<br>
<p>I'm aware of the FAQ entries about mlx4_core module parameters
<br>
(log_num_mtt etc.) but the module in Debian kernels (resp. kernels from
<br>
kernel.org up to recent 3.8) does not know anything about log_num_mtt.
<br>
This parameter is only available in the OFED rpms for SLES/RHEL/OEL.
<br>
<p>Jobs started with the the default environment do fail (log_mtts_per_seg
<br>
is a valid parameter in mxl4_core/Debian kernel and set to 3;
<br>
log_num_mtt is not a valid parameter of mxl4_core and set to 20 in
<br>
btl_openib.c, ...Your MPI job will continue, but may be behave poorly
<br>
and/or hang..., a simple benchmark will run for hours instead of
<br>
returning a result after a few minutes, on the same hardware -Debian
<br>
Squeeze and openmpi-1.4.5- this job runs flawlessly)
<br>
<p>Is there a way to tell openmpi-1.6.3 to use the ofed-module from vanilla
<br>
kernel and not to rely on log_num_mtt for
<br>
&quot;do-we-have-enough-registred-mem&quot; computation for Mellanox HCAs? Any
<br>
other idea/hint?
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21430/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Previous message:</strong> <a href="21429.php">Hartman, Todd W.: "[OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
<li><strong>Reply:</strong> <a href="21431.php">Paul Kapinos: "Re: [OMPI users] openmpi, 1.6.3, mlx4_core, log_num_mtt and Debian/vanilla kernel"</a>
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
