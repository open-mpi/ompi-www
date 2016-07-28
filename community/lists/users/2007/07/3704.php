<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 08:59:56 2007" -->
<!-- isoreceived="20070718125956" -->
<!-- sent="Wed, 18 Jul 2007 08:59:33 -0400" -->
<!-- isosent="20070718125933" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="[OMPI users] orte_pls_base_select fails" -->
<!-- id="1184763573.3979.85.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 08:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3703.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I'm running the Debian package of OpenMPI in a chroot (with /proc
<br>
mounted properly), and orte_init is failing as follows:
<br>
<p>$ uptime
<br>
&nbsp;12:51:55 up 12 days, 21:30,  0 users,  load average: 0.00, 0.00, 0.00
<br>
$ orterun -np 1 uptime
<br>
[new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init_stage1.c at line 312
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_pls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_system_init.c at line 42
<br>
[new-host-3:18250] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 52
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p>Note running with -v produces no more output than this.  Running orted
<br>
in the background doesn't seem to help.
<br>
<p>What could be wrong?  Does orterun not run in a chroot environment?
<br>
What more can I do to investigate further?
<br>
<p>Thanks,
<br>
-Adam
<br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Welcome to the best software in the world today cafe!
<a href="http://www.take6.com/albums/greatesthits.html">http://www.take6.com/albums/greatesthits.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Previous message:</strong> <a href="3703.php">Ralph Castain: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>Reply:</strong> <a href="3705.php">Tim Prins: "Re: [OMPI users] orte_pls_base_select fails"</a>
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
