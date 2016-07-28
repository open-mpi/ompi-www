<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 09:36:14 2007" -->
<!-- isoreceived="20070426133614" -->
<!-- sent="Thu, 26 Apr 2007 09:36:01 -0400" -->
<!-- isosent="20070426133601" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpoint/Restart Process Fault Tolerance Support" -->
<!-- id="52749FC4-F683-4E31-9F45-CFB9CC4E105E_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 09:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3147.php">G&#246;tz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pleased to announce that Open MPI now supports checkpoint/ 
<br>
restart process fault tolerance. This new feature is supported on the  
<br>
current development trunk as of r14519. This new feature is currently  
<br>
scheduled for release in the version 1.3 series of Open MPI.
<br>
<p>The current implementation includes support for fully coordinated  
<br>
checkpoint/restart operation (somewhat similar to the LAM/MPI  
<br>
implementation). We support checkpoint/restart with the Berkeley Lab  
<br>
Checkpoint/Restart (BLCR) system, and a specialized SELF component  
<br>
used support application level checkpoint/restart operations.
<br>
<p>By default checkpoint/restart process fault tolerance is compiled out  
<br>
and disabled at runtime. For information on how to enable and  
<br>
properly use this new feature please refer to the Checkpoint/Restart  
<br>
Users Guide draft attached to the Wiki page:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
<br>
<p>In addition to the checkpoint/restart users guide, the Wiki entry  
<br>
also describes the current status of and updates regarding the  
<br>
development of this new feature.
<br>
<p>If you have any questions or problems using checkpoint/restart  
<br>
process fault tolerance in Open MPI please send them to the users and  
<br>
developers lists.
<br>
<p>Cheers,
<br>
Josh
<br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Donald Kerr: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3147.php">G&#246;tz Waschk: "Re: [OMPI users] Portland Group Compiler &quot;-Msignextend&quot; flag"</a>
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
