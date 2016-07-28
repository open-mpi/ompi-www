<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 14:09:50 2006" -->
<!-- isoreceived="20060524180950" -->
<!-- sent="Wed, 24 May 2006 12:09:46 -0600" -->
<!-- isosent="20060524180946" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] spawn failed with errno=-7" -->
<!-- id="4474A16A.3040509_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1148492926.9967.34.camel_at_pc076.imfd.tu-freiberg.de" -->
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
<strong>Date:</strong> 2006-05-24 14:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1275.php">Paul: "[OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hi Jens<br>
<br>
What this says is that the system was unable to launch your processes
on the specified machines. The usual reason is a lack of ssh authority
on the remote machines. You might check the following FAQ to see if it
is of help:<br>
<br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a><br>
<br>
Let us know if that solves the problem. I'm assuming that you are using
an rsh/ssh launcher and not in some other kind of cluster - if that's
incorrect, please let us know.<br>
<br>
Ralph<br>
<br>
<br>
Jens Klostermann wrote:
<blockquote cite="mid1148492926.9967.34.camel@pc076.imfd.tu-freiberg.de"
 type="cite">
  <pre wrap="">        I did the following run with openmpi1.0.2:
        
        mpirun -np 8 -machinefile ompimachinefile ./hello_world_mpi
        
        and got the following errors
        [stokes:00740] [0,0,0] ORTE_ERROR_LOG: Not implemented in file
        rmgr_urm.c at line 177
        [stokes:00740] [0,0,0] ORTE_ERROR_LOG: Not implemented in file
        rmgr_urm.c at line 365
        [stokes:00740] mpirun: spawn failed with errno=-7
        
        What should I do to track the error or to get rid of it?
        
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
<li><strong>Next message:</strong> <a href="1275.php">Paul: "[OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>In reply to:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
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
