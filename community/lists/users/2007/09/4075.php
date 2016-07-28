<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 13:22:01 2007" -->
<!-- isoreceived="20070927172201" -->
<!-- sent="Thu, 27 Sep 2007 19:21:55 +0200" -->
<!-- isosent="20070927172155" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEG in ompi_comm_start_processes" -->
<!-- id="46FBE6B3.5010502_at_student.hpi.uni-potsdam.de" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 13:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Previous message:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Reply:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I think, I found a bug and a fix for it.
<br>
Could someone verify the rationale behind this bug, as I have this
<br>
SIGSEG on only one of two machines, and I don't quite see why it doesn't
<br>
occur always. (Same testprogram, equally compiled 1.2.4 OpenMPI).
<br>
Though the fix does prevent the segmentation fault. :)
<br>
<p>Thanks,
<br>
Murat
<br>
<p><p><p><p><p>Where:
<br>
Bug:
<br>
free() crashes when trying to free stack memory
<br>
ompi/communicator/comm_dyn.c:630
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(apps[i]);
<br>
<p><p>SIGSEG:
<br>
orte/mca/rmgr/rmgr_types.h:113
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free (app_context-&gt;cwd);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
There are two ways that apps[i]-&gt;cwd is filled:
<br>
1. dynamically allocated memory
<br>
548     if ( !have_wdir ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getcwd(cwd, OMPI_PATH_MAX);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;apps[i]-&gt;cwd = strdup(cwd);    // &lt;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>2. stack
<br>
354    char cwd[OMPI_PATH_MAX];
<br>
// ...
<br>
516         /* check for 'wdir' */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info_get (array_of_info[i], &quot;wdir&quot;, valuelen, cwd, &amp;flag);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( flag ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;apps[i]-&gt;cwd = cwd;  // &lt;--
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have_wdir = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>Fix: Allocate cwd always manually and make sure, it is deleted afterwards.
<br>
<p>1.
<br>
&lt;    char cwd[OMPI_PATH_MAX];
<br>
<pre>
---
&gt;    char *cwd = (char*)malloc(OMPI_PATH_MAX);
2. And on cleanup (somewhere below line 624)
&gt;        if ( !have_wdir ) {
&gt;            getcwd(cwd, OMPI_PATH_MAX);
&gt;            apps[i]-&gt;cwd = strdup(cwd);
&gt;        }
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Previous message:</strong> <a href="4074.php">jody: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Reply:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
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
