<?
$subject_val = "[OMPI users] problem with mpiexec/mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 11:01:08 2009" -->
<!-- isoreceived="20091012150108" -->
<!-- sent="Mon, 12 Oct 2009 17:01:03 +0200" -->
<!-- isosent="20091012150103" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] problem with mpiexec/mpirun" -->
<!-- id="9d13e50c0910120801p4058214n7e5de181c09b0e3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with mpiexec/mpirun<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 11:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>Previous message:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>Reply:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone!
<br>
<p>I am trying to run 11 instances of my program on 6 dual-core Opterons
<br>
(it is not time-consuming application anyway, takes 10 seconds at
<br>
one-core laptop :)).
<br>
so, when I type:
<br>
<p>&nbsp;mpiexec -machinefile hostfile -n 11 ./program
<br>
<p>nothing happens!
<br>
<p>The output of:
<br>
<p>&quot;mpdtrace -l&quot;  command (from the machine I type the command at) is:
<br>
<p>lx64a171_41469 (10.156.70.171)
<br>
lx64a176_47945 (10.156.70.176)
<br>
lx64a175_42990 (10.156.70.175)
<br>
lx64a174_39601 (10.156.70.174)
<br>
lx64a173_45387 (10.156.70.173)
<br>
lx64a172_55297 (10.156.70.172)
<br>
<p>(seems that all 6 machines are there)
<br>
<p>Does anyone have any idea/clue what the reason could be?
<br>
<p>Thanks in advance!
<br>
<p>Regards,
<br>
Jovana
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>Previous message:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
<li><strong>Reply:</strong> <a href="10910.php">Ralph Castain: "Re: [OMPI users] problem with mpiexec/mpirun"</a>
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
