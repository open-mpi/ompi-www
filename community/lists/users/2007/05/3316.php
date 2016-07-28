<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 11:48:23 2007" -->
<!-- isoreceived="20070524154823" -->
<!-- sent="Thu, 24 May 2007 17:48:17 +0200" -->
<!-- isosent="20070524154817" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="[OMPI users] oob_tcp_if_include vs. oob_tcp_include" -->
<!-- id="4655B3C1.7000706_at_cs.vu.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 11:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Previous message:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Reply:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>For OpenMPI users struggling with cluster/grid setups in combination
<br>
with particular networks to use or avoid, it may be useful to know
<br>
that the documentation on <a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
regarding the oob module is currently misleading.  The options that
<br>
actually implement this functionality are &quot;oob_tcp_include&quot; and
<br>
&quot;oob_tcp_exclude&quot; (not oob_tcp_if_include and oob_tcp_if_exclude).
<br>
<p>The confusion probably arises from the fact that for the btl
<br>
layer the &quot;_if&quot; does need to be included.
<br>
<p>Cheers,
<br>
Kees Verstoep
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Jeff Squyres: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<li><strong>Previous message:</strong> <a href="3315.php">George Bosilca: "Re: [OMPI users] MPI Compilation Problem when linked with XOOPIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<li><strong>Reply:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
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
