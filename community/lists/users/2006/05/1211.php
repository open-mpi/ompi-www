<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  4 07:23:02 2006" -->
<!-- isoreceived="20060504112302" -->
<!-- sent="Thu, 04 May 2006 14:22:55 +0300" -->
<!-- isosent="20060504112255" -->
<!-- name="Amit Schreiber" -->
<!-- email="gnobal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000" -->
<!-- id="BAY22-F23E246242C49E972B9BAA2C6B40_at_phx.gbl" -->
<!-- inreplyto="4455EC1A.4000306_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2006-05-04 07:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>I followed your instructions and indeed made some progress. However, I now 
<br>
encounter the following errors when trying to run my simple test:
<br>
[hostname:29060] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file 
<br>
dps_unpack.c at line 121
<br>
[hostname:29060] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file 
<br>
dps_unpack.c at line 95
<br>
<p>The errors happen immediately as a result of calling MPI_Comm_connect. The 
<br>
result returned from the call is MPI_ERR_UNKNOWN.
<br>
<p>I looked up this problem and in the mailing list it was implied that the 
<br>
problem exists because of 32/64 bit mismatches or because of conflicting MPI 
<br>
installations. To avoid these problems I re-installed my Red Hat linux and 
<br>
the two processes I tested run on the same machine. Still, I get these 
<br>
errors.
<br>
<p>Any other reason this problem may rise? The computer I run these tests on is 
<br>
a 2-processor Intel Xeon.
<br>
<p>Thanks a lot,
<br>
Amit
<br>
<p>Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the port number which you see here is the correct format. Please note,
</span><br>
<span class="quotelev1">&gt;that Open MPI can only connect two applications within the same
</span><br>
<span class="quotelev1">&gt;&quot;universe&quot;, and therefore we do not use hostnames or IP-Addresses in the
</span><br>
<span class="quotelev1">&gt;port name. For two applications to be in the same universe, you have to
</span><br>
<span class="quotelev1">&gt;start orted in a persistent mode prior to starting both applications, e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;orted --seed --persistent --scope public
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and than you can start both applications.
</span><br>
<span class="quotelev1">&gt;Please note also, that name-publishing across different jobs is
</span><br>
<span class="quotelev1">&gt;unfortunatly broken, however, if you copy the port-name as a string from
</span><br>
<span class="quotelev1">&gt;one application to another (e.g. passing it at startup of the second
</span><br>
<span class="quotelev1">&gt;application), it should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Amit Schreiber wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I have a simple program which performs the following code:
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Errhandler_set(MPI_COMM_WORLD, MPI_ERRORS_RETURN);
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev2">&gt; &gt;printf(&quot;accepting connections on port: %s\n&quot;, port_name);
</span><br>
<span class="quotelev2">&gt; &gt;(... then the program MPI_Comm_accept)
</span><br>
<span class="quotelev2">&gt; &gt;I run the program _without_ mpirun, as I intend later to use the dynamic
</span><br>
<span class="quotelev2">&gt; &gt;processes feature of MPI. However, once I run the program, the output I 
</span><br>
<span class="quotelev1">&gt;get
</span><br>
<span class="quotelev2">&gt; &gt;is this:
</span><br>
<span class="quotelev2">&gt; &gt;accepting connections on port: 0.0.0:2000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I managed a few times to get a port name that consists of a long string
</span><br>
<span class="quotelev2">&gt; &gt;containing the computer's name, IP address, port and tag but I am unable 
</span><br>
<span class="quotelev1">&gt;to
</span><br>
<span class="quotelev2">&gt; &gt;use either strings for clients (I have a client program which simply 
</span><br>
<span class="quotelev1">&gt;tries
</span><br>
<span class="quotelev2">&gt; &gt;MPI_Comm_connect to a given port_name parameter).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Additionaly, the following mclient.c/mserver.c sample from this link 
</span><br>
<span class="quotelev1">&gt;gives
</span><br>
<span class="quotelev2">&gt; &gt;me the same results:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.hpclab.niu.edu/mpi/g2_body.html">http://www.hpclab.niu.edu/mpi/g2_body.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Please help. Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;Amit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_________________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;FREE pop-up blocking with the new MSN Toolbar - get it now!
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/">http://toolbar.msn.click-url.com/go/onm00200415ave/direct/01/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_________________________________________________________________
<br>
Express yourself instantly with MSN Messenger! Download today it's FREE! 
<br>
<a href="http://messenger.msn.click-url.com/go/onm00200471ave/direct/01/">http://messenger.msn.click-url.com/go/onm00200471ave/direct/01/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Reply:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
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
