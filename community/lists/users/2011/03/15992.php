<?
$subject_val = "[OMPI users] OMPI error terminate w/o reasons";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 26 01:49:29 2011" -->
<!-- isoreceived="20110326054929" -->
<!-- sent="Fri, 25 Mar 2011 23:49:23 -0600" -->
<!-- isosent="20110326054923" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI error terminate w/o reasons" -->
<!-- id="SNT134-w1613EB150E4B4BB208891ACBB80_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI error terminate w/o reasons<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-26 01:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15991.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter	equivalent	to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi , All: 
<br>
I running a Open MPI (1.3.4) program by 200 parallel processes. 
<br>
But, the program is terminated with 
<br>
--------------------------------------------------------------------------mpirun noticed that process rank 0 with PID 77967 on node n342 exited on signal 9 (Killed).--------------------------------------------------------------------------
<br>
After searching, the signal 9 means: 
<br>
the
<br>
process is currently in an unworkable state and should be terminated with
<br>
extreme prejudice
<br>
&nbsp;If a process does not respond to any other
<br>
termination signals, sending it a SIGKILL signal will almost always cause it to
<br>
go away.
<br>
&nbsp;The system will generate SIGKILL for a process itself under
<br>
some unusual conditions where the program cannot possibly continue to run (even
<br>
to run a signal handler). 
<br>
But, the error message does not indicate any possible reasons for the termination. 
<br>
There is a FOR loop in the main() program, if the loop number is small (&lt; 200), the program works well, but if it becomes lager and larger, the program will got SIGKILL. 
<br>
The cluster where I am running the MPI program does not allow running debug tools. 
<br>
If I run it on a workstation, it will take a very very long time (for &gt; 200 loops) in order to get the error occur again. 
<br>
What can I do to find the possible bugs ? 
<br>
Any help is really appreciated. 
<br>
thanks
<br>
Jack
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15992/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Previous message:</strong> <a href="15991.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter	equivalent	to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
<li><strong>Reply:</strong> <a href="15993.php">Ralph Castain: "Re: [OMPI users] OMPI error terminate w/o reasons"</a>
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
