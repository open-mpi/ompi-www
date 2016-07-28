<?
$subject_val = "[OMPI users] MPI_Open_port returns port 0.0.0:2000";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  1 02:19:18 2006" -->
<!-- isoreceived="20060501061918" -->
<!-- sent="Mon, 01 May 2006 09:17:39 +0300" -->
<!-- isosent="20060501061739" -->
<!-- name="Amit Schreiber" -->
<!-- email="gnobal_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Open_port returns port 0.0.0:2000" -->
<!-- id="BAY22-F8BE613A1114DDB4D4E7D3C6B10_at_phx.gbl" -->
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
<strong>From:</strong> Amit Schreiber (<em>gnobal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 02:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="../../2006/04/1167.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a simple program which performs the following code:
<br>
MPI_Init( &amp;argc, &amp;argv );
<br>
MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
<br>
MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
printf(&quot;accepting connections on port: %s\n&quot;, port_name);
<br>
(... then the program MPI_Comm_accept)
<br>
I run the program _without_ mpirun, as I intend later to use the dynamic 
<br>
processes feature of MPI. However, once I run the program, the output I get 
<br>
is this:
<br>
accepting connections on port: 0.0.0:2000
<br>
<p>I managed a few times to get a port name that consists of a long string 
<br>
containing the computer's name, IP address, port and tag but I am unable to 
<br>
use either strings for clients (I have a client program which simply tries 
<br>
MPI_Comm_connect to a given port_name parameter).
<br>
<p>Additionaly, the following mclient.c/mserver.c sample from this link gives 
<br>
me the same results:
<br>
<a href="http://www.hpclab.niu.edu/mpi/g2_body.html">http://www.hpclab.niu.edu/mpi/g2_body.html</a>
<br>
<p>Please help. Thanks,
<br>
Amit.
<br>
<p>_________________________________________________________________
<br>
FREE pop-up blocking with the new MSN Toolbar - get it now! 
<br>
<a href="http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/">http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="../../2006/04/1167.php">Brian Barrett: "Re: [OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1169.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
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
