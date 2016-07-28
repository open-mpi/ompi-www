<?
$subject_val = "[OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 08:10:39 2011" -->
<!-- isoreceived="20111004121039" -->
<!-- sent="Tue, 4 Oct 2011 15:55:53 +0400" -->
<!-- isosent="20111004115553" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="[OMPI users] Non-continous ranks with &amp;quot;--np 4 -npernode 3 -bynode&amp;quot;" -->
<!-- id="CAN7CqrcDAGnGu9LjX60h58H+c97mkfkUDe1tuTmVmMeWNMk51Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 07:55:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>Previous message:</strong> <a href="17496.php">Mudassar Majeed: "[OMPI users] Need to use MPI-Get asynchronously"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>Reply:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I noticed a strange behaviour in 1.5.4 which seems to me as a bug. I'm
<br>
trying to launch 4 ranks on 2 nodes. If I add &quot;-npernode 3 -bynode&quot;
<br>
parameters mpirun freezes on start. When I tried with the &quot;-display-map&quot;
<br>
parameter it shows the following:
<br>
./mpirun --np 4 --host mir1,mir2 -npernode 3 -display-map -bynode ./hello
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: mir1    Num procs: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42759,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42759,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42759,1] *Process rank: 4*
<br>
<p>&nbsp;Data for node: mir2    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [42759,1] Process rank: 1
<br>
<p>Which seems as a problem since there supposed to be no rank #4 as np=4.
<br>
<p>I've also tried with trunk. The application also freezes but does not show
<br>
the map of ranks.
<br>
<p>Could you please assist if this is a bug or I'm doing something improperly?
<br>
<p>Regards,
<br>
Andrew Senin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>Previous message:</strong> <a href="17496.php">Mudassar Majeed: "[OMPI users] Need to use MPI-Get asynchronously"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
<li><strong>Reply:</strong> <a href="17498.php">Ralph Castain: "Re: [OMPI users] Non-continous ranks with &quot;--np 4 -npernode 3 -bynode&quot;"</a>
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
