<?
$subject_val = "[OMPI users] openib_reg_mr";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  9 14:42:54 2012" -->
<!-- isoreceived="20120609184254" -->
<!-- sent="Sat, 9 Jun 2012 18:42:48 +0000" -->
<!-- isosent="20120609184248" -->
<!-- name="Daniels, Marcus G" -->
<!-- email="mdaniels_at_[hidden]" -->
<!-- subject="[OMPI users] openib_reg_mr" -->
<!-- id="0463FECC-D649-463D-8E89-B26C93D23932_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] openib_reg_mr<br>
<strong>From:</strong> Daniels, Marcus G (<em>mdaniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-09 14:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19490.php">Mudassar Majeed: "[OMPI users] Reducing across nodes communication in MPI"</a>
<li><strong>Previous message:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Is there anything I can do about this?  I don't have any locked memory limits.
<br>
<p>Thanks,
<br>
<p>Marcus
<br>
<p>Creating ensight file: EnSight6.geo000001  elapsed secs=      6.84
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to register memory in the driver.
<br>
Please check /var/log/messages or dmesg for driver specific failure
<br>
reason.
<br>
The failure occured here:
<br>
<p>&nbsp;&nbsp;Local host:    mlx4_0
<br>
&nbsp;&nbsp;Device:        openib_reg_mr
<br>
&nbsp;&nbsp;Function:      Resource temporarily unavailable()
<br>
&nbsp;&nbsp;Errno says:    &#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;`&#239;&#191;&#189;&#239;&#191;&#189;6+
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19490.php">Mudassar Majeed: "[OMPI users] Reducing across nodes communication in MPI"</a>
<li><strong>Previous message:</strong> <a href="19488.php">Jeff Squyres: "Re: [OMPI users] RE :  Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19590.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
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
