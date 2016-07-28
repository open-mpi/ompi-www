<?
$subject_val = "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 12:29:55 2013" -->
<!-- isoreceived="20130606162955" -->
<!-- sent="Thu, 6 Jun 2013 18:29:50 +0200 (CEST)" -->
<!-- isosent="20130606162950" -->
<!-- name="Nima Aghajari" -->
<!-- email="greyy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns" -->
<!-- id="trinity-5a4d5d79-b674-4bd0-82bd-042922b1a65f-1370536190549_at_3capp-gmx-bs44" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Oversubcription for mimd/mpmd mpiruns" -->
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
<strong>Subject:</strong> Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns<br>
<strong>From:</strong> Nima Aghajari (<em>greyy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 12:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22046.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Maybe in reply to:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Reply:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<head></head><body><div style="font-family: Verdana;font-size: 12.0px;"><div>
<div>Hello,</div>

<div>first of all thanks for your reply. I tried specifying the --slot-list option like you proposed. This will unfortunately lead to the same mpirun with 5 cores. Adding another slot-list command for the second program, e.g.</div>

<div>&nbsp; &nbsp;</div>

<div>&nbsp; &nbsp;&nbsp; mpirun -np 4 --slot-list 0-3 prog_1 : -np 1 --slot-list 0 prog_2</div>

<div>&nbsp;</div>

<div>will actually run on only 4 cores, but now it takes more than triple the time as needed before on 5 cores. I suppose there should be some overhead because of the oversubscription but that definitely seems too much. Any suggestions?</div>
</div></div></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22046.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Maybe in reply to:</strong> <a href="22036.php">Nima Aghajari: "[OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>Reply:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
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
