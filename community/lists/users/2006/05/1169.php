<?
$subject_val = "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  1 07:08:40 2006" -->
<!-- isoreceived="20060501110840" -->
<!-- sent="Mon, 01 May 2006 06:08:10 -0500" -->
<!-- isosent="20060501110810" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000" -->
<!-- id="4455EC1A.4000306_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY22-F8BE613A1114DDB4D4E7D3C6B10_at_phx.gbl" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 07:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="1168.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1208.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1208.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the port number which you see here is the correct format. Please note, 
<br>
that Open MPI can only connect two applications within the same 
<br>
&quot;universe&quot;, and therefore we do not use hostnames or IP-Addresses in the 
<br>
port name. For two applications to be in the same universe, you have to 
<br>
start orted in a persistent mode prior to starting both applications, e.g.
<br>
<p>orted --seed --persistent --scope public
<br>
<p>and than you can start both applications.
<br>
Please note also, that name-publishing across different jobs is 
<br>
unfortunatly broken, however, if you copy the port-name as a string from 
<br>
one application to another (e.g. passing it at startup of the second 
<br>
application), it should work.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><p><p>Amit Schreiber wrote:
<br>
<p><span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a simple program which performs the following code:
</span><br>
<span class="quotelev1">&gt;MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt;MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev1">&gt;printf(&quot;accepting connections on port: %s\n&quot;, port_name);
</span><br>
<span class="quotelev1">&gt;(... then the program MPI_Comm_accept)
</span><br>
<span class="quotelev1">&gt;I run the program _without_ mpirun, as I intend later to use the dynamic 
</span><br>
<span class="quotelev1">&gt;processes feature of MPI. However, once I run the program, the output I get 
</span><br>
<span class="quotelev1">&gt;is this:
</span><br>
<span class="quotelev1">&gt;accepting connections on port: 0.0.0:2000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I managed a few times to get a port name that consists of a long string 
</span><br>
<span class="quotelev1">&gt;containing the computer's name, IP address, port and tag but I am unable to 
</span><br>
<span class="quotelev1">&gt;use either strings for clients (I have a client program which simply tries 
</span><br>
<span class="quotelev1">&gt;MPI_Comm_connect to a given port_name parameter).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Additionaly, the following mclient.c/mserver.c sample from this link gives 
</span><br>
<span class="quotelev1">&gt;me the same results:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.hpclab.niu.edu/mpi/g2_body.html">http://www.hpclab.niu.edu/mpi/g2_body.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please help. Thanks,
</span><br>
<span class="quotelev1">&gt;Amit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_________________________________________________________________
</span><br>
<span class="quotelev1">&gt;FREE pop-up blocking with the new MSN Toolbar - get it now! 
</span><br>
<span class="quotelev1">&gt;<a href="http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/">http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Brian Barrett: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="1168.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1208.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1208.php">Amit Schreiber: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
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
