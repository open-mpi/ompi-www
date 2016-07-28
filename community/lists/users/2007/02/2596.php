<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 18:29:19 2007" -->
<!-- isoreceived="20070202232919" -->
<!-- sent="Fri, 02 Feb 2007 15:28:21 -0800" -->
<!-- isosent="20070202232821" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="[OMPI users] -prefix not working" -->
<!-- id="45C3C915.1000402_at_mscsoftware.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D4FEC584_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 18:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2595.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I can see that Patrick posted my same error on:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2006/12/1230.php">http://www.open-mpi.org/community/lists/devel/2006/12/1230.php</a>
<br>
<p>Can I please find out the status?   I have a simple test case which
<br>
demonstrates the --prefix is not working on mpirun.  I build into 
<br>
/usr/local/openmpi-1.1.3
<br>
and it works.  However, if I copy the files, remove the 
<br>
/usr/local/openmpi-1.1.3/lib
<br>
and try to point to my new directory of /tmp/openmpi-1.1.3, it fails.
<br>
<p><p>prompt &lt;154&gt; /usr/local/openmpi-1.1.3/bin/mpirun -n 1 --host em64t hostname
<br>
em64t
<br>
prompt &lt;155&gt; cp -r /usr/local/openmpi-1.1.3 /tmp
<br>
prompt &lt;156&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t hostname
<br>
em64t
<br>
<p># As ROOT:
<br>
[root_at_em64t openmpi-1.1.3]# mv /usr/local/openmpi-1.1.3/lib 
<br>
/usr/local/openmpi-1.1.3/LLL
<br>
<p><p>prompt &lt;157&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t --prefix 
<br>
/tmp/openmpi-1.1.3 hostname
<br>
[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init_stage1.c at line 214
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
<p>&nbsp;&nbsp;orte_sds_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value -13 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_system_init.c at line 42
<br>
[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file 
<br>
runtime/orte_init.c at line 49
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -13 instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p><p>The man page implies that --prefix would work.   I know my example is 
<br>
silly.  The real case
<br>
involves going over a cluster, but the above is the simpliest case I 
<br>
could create.
<br>
&nbsp;From the man page:
<br>
<p>&nbsp;&nbsp;&nbsp;--prefix &lt;dir&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix directory that will  be  used  to  set  the  
<br>
PATH  and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH  on  the remote node before invoking 
<br>
Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or the target process.  See the &quot;Remote  Execution&quot;  
<br>
section,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;below.
<br>
<p>BTW - I am trying to migrate from LAM to OpenMPI.  The switch was
<br>
very painless.   Thanks for the good work.
<br>
<p>Regards,
<br>
Joe
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2597.php">Audet, Martin: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2595.php">Dennis McRitchie: "Re: [OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
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
