<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 11:10:38 2007" -->
<!-- isoreceived="20070927151038" -->
<!-- sent="Thu, 27 Sep 2007 17:08:51 +0200" -->
<!-- isosent="20070927150851" -->
<!-- name="Dino Rossegger" -->
<!-- email="dino.rossegger_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255." -->
<!-- id="46FBC783.9060105_at_gmx.at" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Dino Rossegger (<em>dino.rossegger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 11:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem running a simple programm mpihello.cpp.
<br>
<p>Here is a excerp of the error and the command
<br>
root_at_sun:~# mpirun -H sun,saturn main
<br>
[sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1164
<br>
[sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
[sun:25213] ERROR: A daemon on node saturn failed to start as expected.
<br>
[sun:25213] ERROR: There may be more information available from
<br>
[sun:25213] ERROR: the remote shell (see above).
<br>
[sun:25213] ERROR: The daemon exited unexpectedly with status 255.
<br>
[sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[sun:25213] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at
<br>
line 1196
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job.
<br>
Returned value Timeout instead of ORTE_SUCCESS.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>The program is runable from each node alone (mpirun -np2 main)
<br>
<p>My PathVariables:
<br>
$PATH
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/libecho
<br>
$LD_LIBRARY_PATH
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/c3-4/:/usr/lib:/usr/local/lib
<br>
<p>Passwordless ssh is up 'n running
<br>
<p>I walked through the FAQ and Mailing Lists but couldn't find any
<br>
solution for my problem.
<br>
<p>Thanks
<br>
Dino R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Previous message:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>Reply:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
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
