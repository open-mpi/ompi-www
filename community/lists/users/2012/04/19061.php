<?
$subject_val = "[OMPI users]  Array version of MPI_Iprobe?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 20 17:14:25 2012" -->
<!-- isoreceived="20120420211425" -->
<!-- sent="Fri, 20 Apr 2012 17:14:46 -0400" -->
<!-- isosent="20120420211446" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="[OMPI users]  Array version of MPI_Iprobe?" -->
<!-- id="OF0BE8A4B9.7F17E94C-ON852579E6.0074017F-852579E6.0074B23A_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAJ_xm3DPcf=9fz+e_hEnozXYcOZC=6X75up1W-sKohpEZVHv4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  Array version of MPI_Iprobe?<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-20 17:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<li><strong>Previous message:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>In reply to:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>Reply:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Iprobe returns a single status object if at least one message is 
<br>
waiting in a queue.  I would like to be able to do something similar 
<br>
(i.e., non blocking probes) which would produce an array of status objects 
<br>
representing all messages waiting in a queue.  I would then decide on the 
<br>
order of actual message reception based on the source field of the status 
<br>
array objects.  Does anyone know of a way to accomplish this?
<br>
<p>Jeff Cummings
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<li><strong>Previous message:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<li><strong>In reply to:</strong> <a href="19060.php">seshendra seshu: "[OMPI users] Regarding installation procedure for installing openmpi for 1master and 16 slaves"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>Reply:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
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
