<?
$subject_val = "[OMPI users] Problem on openmpi run";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 21:39:41 2009" -->
<!-- isoreceived="20091118023941" -->
<!-- sent="Wed, 18 Nov 2009 10:39:35 +0800" -->
<!-- isosent="20091118023935" -->
<!-- name="Jiaye Li" -->
<!-- email="jameslipd_at_[hidden]" -->
<!-- subject="[OMPI users] Problem on openmpi run" -->
<!-- id="b5d787260911171839n3580f838vad94d4080259be96_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem on openmpi run<br>
<strong>From:</strong> Jiaye Li (<em>jameslipd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 21:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>Previous message:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>Reply:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users
<br>
<p>I installed openmpi 1.3.3 on my PC (single core &amp; quad-processes). The
<br>
compilation reported no error and I have found the executable file in the
<br>
configure directory. But when I try to test it, I met a problem.
<br>
<p>I tested it with Vasp and PWscf programs, respectively. I typed &quot;mpirun -np
<br>
4 vasp &amp;&quot;, and then it runs like four separated processes (not parallel
<br>
run), which looks like &quot;mpirun -np 1 vasp &amp;&quot; X 4. Moreover, I tested it with
<br>
pwscf by &quot;mpirun -np 4 pwscf &lt;input &gt;output &amp;&quot;, only 25% of cpu was taken
<br>
up.(It should have been 100%, 4 processes).
<br>
<p>Could anybody help me to fix this problem? Thank you in advance.
<br>
<p><pre>
-- 
Sincerely yours
Jiaye Li
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>Previous message:</strong> <a href="11224.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
<li><strong>Reply:</strong> <a href="11226.php">Ralph Castain: "Re: [OMPI users] Problem on openmpi run"</a>
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
