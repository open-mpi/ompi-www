<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 29 12:11:18 2006" -->
<!-- isoreceived="20060529161118" -->
<!-- sent="Mon, 29 May 2006 10:11:18 -0600" -->
<!-- isosent="20060529161118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spawn failed with errno=-7" -->
<!-- id="447B1D26.4020103_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1148916161.9967.48.camel_at_pc076.imfd.tu-freiberg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-29 12:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
The problem is that the run-time underlying Open MPI is unable to
locate the ssh binary you told it to use to launch your application. Is
ssh in your path?<br>
<br>
Ralph<br>
<br>
<br>
<br>
Jens Klostermann wrote:
<blockquote cite="mid1148916161.9967.48.camel@pc076.imfd.tu-freiberg.de"
 type="cite">
  <pre wrap="">@ Ralph

password-less execution of commands is enabled

@ Michael
I did the following with openmpi 1.1 and 1.2 alphas now I get the
following error. 

mpirun --mca pls_rsh_agent ssh -np 2 -machinefile
ompimachinefile ./hello_world_mpi
--------------------------------------------------------------------------
No available launching agents were found.

This is an unusual error; it means that Open RTE was unable to find
any mechanism to launch proceses, and therefore is unable start the
process(es) in your application.
--------------------------------------------------------------------------
[stokes:11293] [0,0,0] ORTE_ERROR_LOG: Not found in file
rmgr_urm_component.c at line 190

Jens


_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1325.php">Troy Telford: "[OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
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
