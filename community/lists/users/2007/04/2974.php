<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:06:22 2007" -->
<!-- isoreceived="20070402160622" -->
<!-- sent="Mon, 02 Apr 2007 12:05:37 -0400" -->
<!-- isosent="20070402160537" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="s610f1b7.002_at_n6mcgw16.cchmc.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 12:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2973.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Deadline (April 9) is approaching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3011.php">Ralph H Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have built Open MPI (1.2) with run-time environment enabled for Torque
<br>
(2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
<br>
from Torque. The from inside of my MPI code I am trying to spawn more
<br>
processes to nodes outside of Torque-assigned nodes using
<br>
MPI_Comm_spawn, but this is failing with an error below:
<br>
<p>[wins04:13564] *** An error occurred in MPI_Comm_spawn
<br>
[wins04:13564] *** on communicator MPI_COMM_WORLD
<br>
[wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
<br>
signal 15 (Terminated). 
<br>
2 additional processes aborted (not shown)
<br>
<p>#################################
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info info;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm, *intercomm;
<br>
...
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *key, *value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key = &quot;host&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value = &quot;wins08&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc1 = MPI_Info_create(&amp;info);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc1 = MPI_Info_set(info, key, value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
<br>
MPI_COMM_WORLD, intercomm, arr);
<br>
...
<br>
}
<br>
<p>###################################################
<br>
<p>Would this work as it is or is something wrong with my assumption? Is
<br>
OpenRTE stopping me from spawning processes outside of the initially
<br>
allocated nodes through Torque?
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2973.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Deadline (April 9) is approaching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="2981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Maybe reply:</strong> <a href="3011.php">Ralph H Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
