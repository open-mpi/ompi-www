<?
$subject_val = "[OMPI users] Argument parsing issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 03:48:06 2011" -->
<!-- isoreceived="20110127084806" -->
<!-- sent="Thu, 27 Jan 2011 09:48:00 +0100" -->
<!-- isosent="20110127084800" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Argument parsing issue" -->
<!-- id="AANLkTimHvN5gHpS1XF7iM6S=5TwPEqOck-nNnWFWxqQD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Argument parsing issue<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 03:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users and developers,
<br>
<p>i'm using OpenMPI 1.4.3 and Intel compiler. My simple application require 3
<br>
line arguments to work. If i use the follow command:
<br>
<p>mpirun -np 2 ./a.out a b &quot;c d&quot;
<br>
<p>It works well.
<br>
<p>Debugging my application with Totalview:
<br>
<p>mpirun -np 2 --debug  ./a.out a b &quot;c d&quot;
<br>
<p>Argument parsing doesn't work well. Arguments passed are:
<br>
<p>a b c d
<br>
<p>and not
<br>
<p>a b &quot;c d&quot;
<br>
<p>I think there is an issue in parsing the arguments invoking Totalview. Is
<br>
this a bug into mpirun or i need to do it in other way?
<br>
<p>Thanks in forward.
<br>
<p><p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15426.php">Michael Curtis: "[OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
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
