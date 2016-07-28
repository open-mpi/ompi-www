<?
$subject_val = "Re: [OMPI users] Open specific port TCP/IP in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 18:26:05 2009" -->
<!-- isoreceived="20090626222605" -->
<!-- sent="Fri, 26 Jun 2009 16:25:45 -0600" -->
<!-- isosent="20090626222545" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open specific port TCP/IP in MPI" -->
<!-- id="7F148EC0-12C2-4B97-8722-CD02B1CF2643_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c92aaf50906260948n21701172n37ac642952750c5e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open specific port TCP/IP in MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 18:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9736.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9734.php">Prentice Bisbal: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I understand the problem. Your server will have the ability  
<br>
to recv messages from multiple sources on the port it picks. Is there  
<br>
some reason why you want to specify the port for each process?
<br>
<p>Note that you can still do so - you just have to do it -before-  
<br>
calling MPI_Init. MPI jobs exchange contact info during MPI_Init so  
<br>
that the connections can be setup. Since you can only send messages  
<br>
via communicator anyway, the port is completely hidden from your code  
<br>
(as it should be).
<br>
<p>However, if you -really- need to set the port of each individual rank,  
<br>
you can do so by simply putting the MCA param into the environment  
<br>
prior to calling MPI_Init. Something like this:
<br>
<p>foo = &quot;1234&quot;;
<br>
<p>asprintf(&amp;my_port, &quot;OMPI_MCA_btl_tcp_port_min_v4=%s, foo);
<br>
putenv(my_port);
<br>
<p>putenv(&quot;OMPI_MCA_btl_tcp_port_range_v4=1&quot;);
<br>
<p>This will set a minimum port number of 1234, and tells the TCP MPI  
<br>
interconnect it can only use that port.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jun 26, 2009, at 10:48 AM, Nulik Nol wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jun 26, 2009 at 9:57 AM, Ralph Castain&lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; How are you trying to use this port? Are you expecting that to be  
</span><br>
<span class="quotelev2">&gt;&gt; the port
</span><br>
<span class="quotelev2">&gt;&gt; used for MPI communications?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am thinking to use MPI_Send and MPI_Recv on this connection. One  
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev1">&gt; will run in server mode to server data to others, only one process,  
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev1">&gt; incoming connections. Just a simple (really really simple)
</span><br>
<span class="quotelev1">&gt; client/server model so i would avoid writing my own socket library for
</span><br>
<span class="quotelev1">&gt; messaging between nodes over TCP, never thought i am asking too much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==================================
</span><br>
<span class="quotelev1">&gt; The power of zero is infinite
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9736.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9734.php">Prentice Bisbal: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<li><strong>In reply to:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9742.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
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
