<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 10:43:07 2006" -->
<!-- isoreceived="20060404144307" -->
<!-- sent="Tue, 04 Apr 2006 10:43:04 -0400" -->
<!-- isosent="20060404144304" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Torque error" -->
<!-- id="443285F8.5010406_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Open MPI and Torque error" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-04 10:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Ali Eghlima: "[OMPI users] Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Reply:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prakash,
<br>
<p>tm_poll: protocol number dis error 11
<br>
ret is 17002 instead of 0: tm_init failed
<br>
3 processes killed (possibly by Open MPI)
<br>
<p>I encountered similar problem with OpenPBS before, which also uses the 
<br>
TM interfaces. It returns a TM_ENOTCONNECTED (17002) when I tried to 
<br>
call tm_init for the second time (which in turns call tm_poll and 
<br>
returned that errno).
<br>
<p>I think what you did to start tm_init from another node and connect to 
<br>
another mom which I do not think is allowed. The TM module in OpenMPI 
<br>
already called tm_init once. I am curious to know about the reason that 
<br>
you need to call tm_init again?
<br>
<p>If you are curious to know about the implementation for PBS, you can 
<br>
download the source from openpbs.org. OpenPBS source: 
<br>
v2.3.16/src/lib/Libifl/tm.c
<br>
<p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0960.php">Ali Eghlima: "[OMPI users] Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Reply:</strong> <a href="0973.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
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
