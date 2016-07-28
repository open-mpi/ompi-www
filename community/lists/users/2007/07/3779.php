<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 11:01:08 2007" -->
<!-- isoreceived="20070727150108" -->
<!-- sent="Fri, 27 Jul 2007 10:01:13 -0500" -->
<!-- isosent="20070727150113" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="[OMPI users] torque and openmpi" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1D7698C_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 11:01:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I run jobs with torque, I get this error message.  Any ideas?
<br>
<p>[sam_at_prodnode1 all]$ cat script.sh.err 
<br>
Host key verification failed.
<br>
[prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 275
<br>
[prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1164
<br>
[prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
errmgr_hnp.c at line 90
<br>
[prodnode3.brooks.af.mil:03321] ERROR: A daemon on node
<br>
prodnode2.brooks.af.mil failed to start as expected.
<br>
[prodnode3.brooks.af.mil:03321] ERROR: There may be more information
<br>
available from
<br>
[prodnode3.brooks.af.mil:03321] ERROR: the remote shell (see above).
<br>
[prodnode3.brooks.af.mil:03321] ERROR: The daemon exited unexpectedly
<br>
with status 255.
<br>
[prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
base/pls_base_orted_cmds.c at line 188
<br>
[prodnode3.brooks.af.mil:03321] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
pls_rsh_module.c at line 1196
<br>
------------------------------------------------------------------------
<br>
<pre>
--
mpirun was unable to cleanly terminate the daemons for this job.
Returned value Timeout instead of ORTE_SUCCESS.
------------------------------------------------------------------------
--
Sam Adams
General Dynamics Information Technology
Phone: 210.536.5945
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3778.php">Jeff Squyres: "Re: [OMPI users] Error message when running openmpi on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
<li><strong>Reply:</strong> <a href="3780.php">George Bosilca: "Re: [OMPI users] torque and openmpi"</a>
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
