<?
$subject_val = "[OMPI users] running external program on same processor (Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 19:50:52 2010" -->
<!-- isoreceived="20100303005052" -->
<!-- sent="Wed, 3 Mar 2010 00:48:39 +0000" -->
<!-- isosent="20100303004839" -->
<!-- name="abc def" -->
<!-- email="cannonjunk_at_[hidden]" -->
<!-- subject="[OMPI users] running external program on same processor (Fortran)" -->
<!-- id="SNT110-W29DBAC3AE6F0F018EAB4068B3A0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] running external program on same processor (Fortran)<br>
<strong>From:</strong> abc def (<em>cannonjunk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 19:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I wonder if someone can help.
<br>
<p><p>The situation is that I have an MPI-parallel fortran program. I run it
<br>
and it's distributed on N cores, and each of these processes must
<br>
call an external program.
<br>
<p><p><p>This external program is also an MPI program, however I want to run it
<br>
in serial, on the core that is calling it, as if it were part of
<br>
the fortran program. The fortran program waits until the external
<br>
program has completed, and then continues.
<br>
<p><p><p>The problem is that this external program seems to run on any core, and not necessarily the (now idle) core that called it. This slows things down a lot as you get one core doing multiple tasks.
<br>
<p><p><p>Can anyone tell me how I can call the program and ensure it runs only on the core that's calling it? Note that there are several cores per node. I can ID the node by running the hostname command (I don't know a way to do this for individual cores).
<br>
<p><p><p>Thanks!
<br>
<p><p><p>====
<br>
<p><p><p>Extra information that might be helpful:
<br>
<p><p><p>If I simply run the external program from the command line (ie, type
<br>
&quot;/path/myprogram.ex &lt;enter&gt;&quot;), it runs fine. If I run it within
<br>
the fortran program by calling it via
<br>
<p><p><p>CALL SYSTEM(&quot;/path/myprogram.ex&quot;)
<br>
<p><p><p>it doesn't run at all (doesn't even start) and everything crashes. I don't know why this is.
<br>
<p><p><p>If I call it using mpiexec:
<br>
<p><p><p>CALL SYSTEM(&quot;mpiexec -n 1 /path/myprogram.ex&quot;)
<br>
<p><p><p>then it does work, but I get the problem that it can go on any core. 		 	   		  
<br>
_________________________________________________________________
<br>
Do you have a story that started on Hotmail? Tell us now
<br>
<a href="http://clk.atdmt.com/UKM/go/195013117/direct/01/">http://clk.atdmt.com/UKM/go/195013117/direct/01/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12207.php">Addepalli, Srirangam V: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12205.php">Reuti: "Re: [OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
<li><strong>Reply:</strong> <a href="12208.php">Terry Frankcombe: "Re: [OMPI users] running external program on same processor	(Fortran)"</a>
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
