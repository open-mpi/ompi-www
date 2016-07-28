<?
$subject_val = "[OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 18:18:18 2014" -->
<!-- isoreceived="20140624221818" -->
<!-- sent="Tue, 24 Jun 2014 18:18:10 -0400" -->
<!-- isosent="20140624221810" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="[OMPI users] poor performance using the openib btl" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159F66045E_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> [OMPI users] poor performance using the openib btl<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 18:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello openmpi-users,
<br>
<p>A few weeks ago, I posted to the list about difficulties I was having getting openib to work with Torque (see &quot;openib segfaults with Torque&quot;, June 6, 2014). The issues were related to Torque imposing restrictive limits on locked memory, and have since been resolved.
<br>
<p>However, now that I've had some time to test the applications, I'm seeing abysmal performance over the openib layer. Applications run with the tcp btl execute about 10x faster than with the openib btl. Clearly something still isn't quite right.
<br>
<p>I tried running with &quot;-mca btl_openib_verbose 1&quot;, but didn't see anything resembling a smoking gun. How should I go about determining the source of the problem? (This uses the same OpenMPI Version 1.8.1 / SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
<br>
<p>Thanks,
<br>
Greg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24696.php">Jeff Squyres (jsquyres): "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24698.php">Maxime Boissonneault: "Re: [OMPI users] poor performance using the openib btl"</a>
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
