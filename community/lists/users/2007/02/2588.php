<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 13:41:28 2007" -->
<!-- isoreceived="20070202184128" -->
<!-- sent="Fri, 2 Feb 2007 13:41:20 -0500" -->
<!-- isosent="20070202184120" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="[OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="44233CA5B57295409DA4423AECEFFEE701E64DCB_at_mailbox01.cshl.edu" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 13:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have OpenMPI running fine for a small/medium number of tasks (simple
<br>
hello or cpi program). But when I try 700 or 800 tasks, it hangs,
<br>
apparently on startup. I think this might be related to LDAP, since if I
<br>
try to log into my account while the job is hung, I get told my username
<br>
doesn't exist. However, I tried adding -debug to the mpirun, and got the
<br>
same sequence of output as for successful smaller runs, until it hung
<br>
again. So I added --debug-daemons and got this (with an exit, i.e. no
<br>
hanging):
<br>
<p>...
<br>
<p>[blade1:31733] [0,0,0] wrote setup file
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
The rsh launcher has been given a number of 128 concurrent daemons to
launch and is in a debug-daemons option. However, the total number of
daemons to launch (200) is greater than this value. This is a scenario
that
will cause the system to deadlock.
 
To avoid deadlock, either increase the number of concurrent daemons, or
remove the debug-daemons flag.
------------------------------------------------------------------------
--
[blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
../../../../../orte/mca/rmgr/urm/
rmgr_urm.c at line 455
[blade1:31733] mpirun: spawn failed with errno=-6
[blade1:31733] sess_dir_finalize: proc session dir not empty - leaving
 
Any ideas or suggestions appreciated.
 
Todd Heywood
 
 
 
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2589.php">George Bosilca: "Re: [OMPI users] ERROR: gfortran compiler is not in PATH for driver: mpif90"</a>
<li><strong>Previous message:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Reply:</strong> <a href="2593.php">Ralph Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
