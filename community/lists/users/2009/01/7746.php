<?
$subject_val = "[OMPI users] openmpi 1.3 and --wdir problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 05:22:48 2009" -->
<!-- isoreceived="20090121102248" -->
<!-- sent="Wed, 21 Jan 2009 11:22:44 +0100" -->
<!-- isosent="20090121102244" -->
<!-- name="Geoffroy Pignot" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.3 and --wdir problem" -->
<!-- id="b4f9bf870901210222j5b458a51u533080f3e2246fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.3 and --wdir problem<br>
<strong>From:</strong> Geoffroy Pignot (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 05:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>&nbsp;&nbsp;&nbsp;I'm currently trying the new release but I cant reproduce the 1.2.8
<br>
behaviour
<br>
&nbsp;&nbsp;&nbsp;concerning --wdir option
<br>
<p>&nbsp;&nbsp;&nbsp;Then
<br>
&nbsp;&nbsp;&nbsp;%% /tmp/openmpi-1.2.8/bin/mpirun -n 1 --wdir /tmp --host r003n030 pwd :
<br>
--wdir /scr1 -n 1 --host r003n031 pwd
<br>
&nbsp;&nbsp;&nbsp;/scr1
<br>
&nbsp;&nbsp;&nbsp;/tmp
<br>
<p>&nbsp;&nbsp;&nbsp;but
<br>
&nbsp;&nbsp;&nbsp;%% /tmp/openmpi-1.3/bin/mpirun -n 1 --wdir /tmp --host r003n030 pwd :
<br>
--wdir  /scr1 -n 1 --host r003n031 pwd
<br>
&nbsp;&nbsp;&nbsp;/scr1
<br>
&nbsp;&nbsp;&nbsp;/scr1
<br>
&nbsp;&nbsp;&nbsp;Thanks in advance
<br>
&nbsp;&nbsp;&nbsp;Regards
<br>
&nbsp;&nbsp;&nbsp;Geoffroy
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7747.php">Bernard Secher - SFME/LGLS: "[OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Reply:</strong> <a href="7750.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
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
