<?
$subject_val = "[OMPI devel] cosmetic misleading mpirun error message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 18:01:52 2015" -->
<!-- isoreceived="20150825220152" -->
<!-- sent="Tue, 25 Aug 2015 22:01:41 +0000" -->
<!-- isosent="20150825220141" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="[OMPI devel] cosmetic misleading mpirun error message" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D843AA600_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI devel] cosmetic misleading mpirun error message<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 18:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Previous message:</strong> <a href="17853.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Playing with the 1.10.0 (just released) build I found a cosmetic misleading error message in mpirun. If by mistake you type -hosts (with an extra  &quot;s&quot;), the error message complains about an unknown &quot;-o&quot; option that is actually not being used. Typing the parameters correctly fixes the issue :)
<br>
<p>m&gt; mpirun --allow-run-as-root -hosts m7,m8 -np 2  osu_latency
<br>
mpirun: Error: unknown option &quot;-o&quot;
<br>
Type 'mpirun --help' for usage.
<br>
<p>Thanks,
<br>
Regards,
<br>
<p><p>_MAC
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Previous message:</strong> <a href="17853.php">Ralph Castain: "Re: [OMPI devel] mca_mtl_psm and java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
<li><strong>Reply:</strong> <a href="17855.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic misleading mpirun error message"</a>
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
