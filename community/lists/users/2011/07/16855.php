<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 09:28:39 2011" -->
<!-- isoreceived="20110708132839" -->
<!-- sent="Fri, 8 Jul 2011 09:28:31 -0400" -->
<!-- isosent="20110708132831" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="4E16CDBF.14788.43AD05E_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20does%20not%20propagate%20environment%20from%20master%20node%20to%20slave%20nodes"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-08 09:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16856.php">yanyg_at_[hidden]: "[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph.
<br>
<p>*************** quote begin *************
<br>
Let me get this straight. You are executing mpirun from inside a c-
<br>
shell script, launching onto nodes where you will by default be 
<br>
running bash. The param I gave you should support that mode - it 
<br>
basically tells OMPI to probe the remote node to discover what 
<br>
shell it will run under there, and then formats the orted cmd line 
<br>
accordingly. If that isn't working (and it almost never gets used, so 
<br>
may have bit-rotted), then your only option is to convert the c-shell 
<br>
to bash.
<br>
<p>However, you are saying that the app you are asking us to run is a 
<br>
c-shell script??? Have you included the !/bin/csh directive in the top 
<br>
of that file so the system will automatically exec it using csh?
<br>
<p>Note that the orted comes alive and running prior to your &quot;app&quot; 
<br>
being executed, so the fact that your &quot;app&quot; is a c-shell script is 
<br>
irrelevant. 
<br>
*************** quote end *************
<br>
<p>You got exactly as in my case. and I agree with you that the app c-
<br>
shell should not matter here. I checked that I have the #!/bin/csh to 
<br>
the head of the c-shell scripts. I guess I have to rewrite the c-shell 
<br>
script in bash to solve this issue totally, although it is not that easy.
<br>
<p>Thanks again,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16856.php">yanyg_at_[hidden]: "[OMPI users] Error-Open MPI over Infiniband: polling LP CQ with status LOCAL LENGTH ERROR"</a>
<li><strong>Previous message:</strong> <a href="16854.php">Shiqing Fan: "Re: [OMPI users] [WARNING: SPOOFED E-MAIL--Non-Aerospace Sender] Re: Problem with prebuilt ver 1.5.3 for windows"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
