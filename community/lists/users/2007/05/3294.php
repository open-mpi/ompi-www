<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 17:24:48 2007" -->
<!-- isoreceived="20070518212448" -->
<!-- sent="Fri, 18 May 2007 23:25:13 +0200" -->
<!-- isosent="20070518212513" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="20070518212513.GD14385_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1626092b0705181336p6ce15d4ducd96004e9c4c174a_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 17:25:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, May 19, 2007 at 08:36:50AM +1200, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; Suppose if I want to capture any packets for my openmpi program, if I
</span><br>
<span class="quotelev1">&gt; can't filter packets by ports, then how can the sniffer tell which packets
</span><br>
<span class="quotelev1">&gt; are from/to any processes of my penmpi program?
</span><br>
<p>You first have to distinguish between ORTE and OMPI communication.
<br>
<p>ORTE communication (wire up) is a little easier to capture, because you
<br>
can extract the target port from the command line arguments.
<br>
<p>Take a typical process launch via ssh:
<br>
<p>&nbsp;&nbsp;&nbsp;0.0.0;tcp://141.35.14.189:57985;tcp://192.168.1.1:57985
<br>
<p>57985 is the listen port of the headnode process.
<br>
<p>This information should also be available via ps or any other tool to
<br>
query the process list (i.e. top)
<br>
<p>netstat can also be used:
<br>
<p>adi_at_ipc654:~$ orterun -host amun3 netstat -tpn
<br>
Active Internet connections (w/o servers)
<br>
Proto Recv-Q Send-Q Local Address           Foreign Address State       PID/Program name   
<br>
tcp        0      0 192.168.1.132:48580     192.168.1.1:41753 ESTABLISHED25377/orted         
<br>
<p>(output reduced to the relevant lines).
<br>
<p>The actual MPI communication is harder to capture. Every host has its
<br>
own listen port. Given that, you'll have to use the BTL/TCP debug output
<br>
and grep for the relevant strings.
<br>
<p>To enable this output, change WANT_PEER_DUMP from 0 to 1 in
<br>
btl_tcp_endpoint.c and make sure you compile with --enable-debug.
<br>
<p>If you don't want to parse dynamic ports or you don't want to lower your
<br>
MPI performance due to --enable-debug, you can easily change the code to
<br>
use a static port:
<br>
<p>For the BTL, see btl_tcp_component.c:
<br>
<p>Line 522, in function mca_btl_tcp_component_create_listen:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((error = getaddrinfo(NULL, &quot;0&quot;, &amp;hints, &amp;res))) {
<br>
<p>change the &quot;0&quot; to your desired port, or if you compile without IPv6,
<br>
change line 546:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;inaddr.sin_port = 0;
<br>
<p>For the OOB (wire-up connection), change oob_tcp.c:445 and/or
<br>
oob_tcp.c:469, the code is absolutely the same.
<br>
<p><p>You can optionally create two parameters (one for oob_tcp and one for btl_tcp)
<br>
to set the ports from your mca-params.conf. Creating parameters isn't
<br>
that hard, you'll find examples inside the code (i.e.
<br>
btl_tcp_disable_family).
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3293.php">Jeff Squyres: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
