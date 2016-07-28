<?
$subject_val = "[OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 16:46:08 2014" -->
<!-- isoreceived="20140207214608" -->
<!-- sent="Fri, 7 Feb 2014 22:46:07 +0100" -->
<!-- isosent="20140207214607" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] new CRS component added (criu)" -->
<!-- id="20140207214607.GD4981_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] new CRS component added (criu)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 16:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14036.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have created a new CRS component using criu (criu.org) to support
<br>
checkpoint/restart in Open MPI. My current patch only provides the
<br>
framework and necessary configure scripts to detect and link against
<br>
criu. With this patch orte-checkpoint can request a checkpoint and the
<br>
new CRIU CRS component is used:
<br>
<p>[dcbz:13766] orte_cr: init: orte_cr_init()
<br>
[dcbz:13766] crs:criu: opal_crs_criu_prelaunch
<br>
[dcbz:13766] crs:criu: opal_crs_criu_prelaunch
<br>
[dcbz:13771] opal_cr: init: Verbose Level: 30
<br>
[dcbz:13771] opal_cr: init: FT Enabled: true
<br>
[dcbz:13771] opal_cr: init: Is a tool program: false
<br>
[dcbz:13771] opal_cr: init: Debug SIGPIPE: 30 (False)
<br>
[dcbz:13771] opal_cr: init: Checkpoint Signal: 10
<br>
[dcbz:13771] opal_cr: init: FT Use thread: true
<br>
[dcbz:13771] opal_cr: init: FT thread sleep: check = 0, wait = 100
<br>
[dcbz:13771] opal_cr: init: C/R Debugging Enabled [False]
<br>
[dcbz:13771] opal_cr: init: Checkpoint Signal (Debug): 20
<br>
[dcbz:13771] opal_cr: init: Temp Directory: /tmp
<br>
...
<br>
[dcbz:13772] orte_cr: coord: orte_cr_coord(Checkpoint)
<br>
[dcbz:13772] orte_cr: coord_pre_ckpt: orte_cr_coord_pre_ckpt()
<br>
[dcbz:13772] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
<br>
[dcbz:13772] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
<br>
[dcbz:13772] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
<br>
[dcbz:13772] crs:criu: checkpoint(13772, ---)
<br>
[dcbz:13772] crs:criu: criu_init_opts() returned 0
<br>
[dcbz:13771] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
<br>
[dcbz:13771] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
<br>
[dcbz:13771] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
<br>
[dcbz:13771] crs:criu: checkpoint(13771, ---)
<br>
[dcbz:13771] crs:criu: criu_init_opts() returned 0
<br>
...
<br>
[dcbz:13766] 13766: Checkpoint established for process [55729,0].
<br>
[dcbz:13771] ompi_cr: coord: ompi_cr_coord(Running)
<br>
[dcbz:13771] orte_cr: coord: orte_cr_coord(Running)
<br>
[dcbz:13766] 13766: Successfully restarted process [55729,0].
<br>
[dcbz:13772] ompi_cr: coord: ompi_cr_coord(Running)
<br>
[dcbz:13772] orte_cr: coord: orte_cr_coord(Running)
<br>
<p>It seems the C/R code basically works again and now needs to be filled
<br>
with the actual code to take checkpoints using criu.
<br>
<p>The patch I want to check in is available at:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea</a>
<br>
<p>The patch only creates files in opal/mca/crs/criu and does not touch any
<br>
other code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14036.php">Ralph Castain: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
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
