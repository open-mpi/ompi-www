<?
$subject_val = "[OMPI users] cleanup of round robin mappers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 07:56:42 2014" -->
<!-- isoreceived="20140324115642" -->
<!-- sent="Mon, 24 Mar 2014 20:55:48 +0900" -->
<!-- isosent="20140324115548" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] cleanup of round robin mappers" -->
<!-- id="OF246BD6A1.AEB382D5-ON49257CA5.0030A438-49257CA5.00419AE7_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] cleanup of round robin mappers<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20cleanup%20of%20round%20robin%20mappers"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-24 07:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
<li><strong>Reply:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I tried to improve checking for mapping-too-low and fixed a minor
<br>
problem in rmaps_rr.c file. Please see attached patch file.
<br>
<p>1) Regarding mapping-too-low, in future we'll have a lager size of
<br>
l1,2,3cache or other architectuers, and in that case, the needs to
<br>
map by a lower object level will increase. So, it's better/exact to
<br>
compare cpus_per_rank with ncpus of the mapping object in detecting
<br>
it. How do you think?
<br>
<p>2) When orte_rmaps_rr_byobj returns with ORTE_ERR_NOT_FOUND,
<br>
we should change mapping policy to ORTE_MAPPING_BYSLOT
<br>
so that binding direction can be exactly evaluated in
<br>
rmaps_base_binding.c file.
<br>
<p>Tetsuya
<br>
<p>(See attached file: patch.rmaps)
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23941/patch.rmaps">patch.rmaps</a>
</ul>
<!-- attachment="patch.rmaps" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23940.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
<li><strong>Reply:</strong> <a href="23946.php">Ralph Castain: "Re: [OMPI users] cleanup of round robin mappers"</a>
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
