<?
$subject_val = "[OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:28:41 2009" -->
<!-- isoreceived="20090304202841" -->
<!-- sent="Wed, 4 Mar 2009 12:28:37 -0800" -->
<!-- isosent="20090304202837" -->
<!-- name="Jan Lindheim" -->
<!-- email="lindheim_at_[hidden]" -->
<!-- subject="[OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="20090304202835.GE30193_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> [OMPI users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Jan Lindheim (<em>lindheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found several reports on the openmpi users mailing list from users,
<br>
who need to bump up the default value for btl_openib_ib_timeout. 
<br>
We also have some applications on our cluster, that have problems,
<br>
unless we set this value from the default 10 to 15:
<br>
<p>[24426,1],122][btl_openib_component.c:2905:handle_wc] from shc174 to: shc175
<br>
error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for 
<br>
wr_id 250450816 opcode 11048 qp_idx 3
<br>
<p>This is seen with OpenMPI 1.3 and OpenFabrics 1.4.
<br>
<p>Is this normal or is it an indicator of other problems, maybe related to
<br>
hardware?
<br>
Are there other parameters that need to be looked at too?
<br>
<p>Thanks for any insight on this!
<br>
<p>Regards,
<br>
Jan Lindheim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Previous message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8300.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
