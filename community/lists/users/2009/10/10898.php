<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept()/connect() errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 05:33:51 2009" -->
<!-- isoreceived="20091008093351" -->
<!-- sent="Thu, 8 Oct 2009 10:33:45 +0100" -->
<!-- isosent="20091008093345" -->
<!-- name="Blesson Varghese" -->
<!-- email="b.varghese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept()/connect() errors" -->
<!-- id="002d01ca47fa$6ec96950$4c5c3bf0$_at_ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Comm_accept()/connect() errors" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept()/connect() errors<br>
<strong>From:</strong> Blesson Varghese (<em>b.varghese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 05:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10899.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10820.php">Blesson Varghese: "[OMPI users] MPI_Comm_accept()/connect() errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PATH variable contains
<br>
/home/hx019035/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/
<br>
bin:/usr/games:/usr/local/maui/bin/:
<br>
<p>/home/hx019035/bin contains the local installation of OMPI 1.3.3
<br>
<p>&nbsp;
<br>
<p>The LD_LIBRARY_PATH variable contains /home/hx019035/lib:
<br>
<p>&nbsp;
<br>
<p>These variables are being set in the .profile file on the hpcc00 node. 
<br>
<p>&nbsp;
<br>
<p>Would there be a change anywhere else?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: Ralph Castain [mailto:rhc.openmpi_at_[hidden]] On Behalf Of Ralph
<br>
Castain
<br>
Sent: 07 October 2009 13:32
<br>
To: Blesson Varghese
<br>
Subject: Re: [OMPI users] MPI_Comm_accept()/connect() errors
<br>
<p>&nbsp;
<br>
<p>Yes, it does. But the error message indicates a 1.2 version is running on
<br>
hpcc00.
<br>
<p>&nbsp;
<br>
<p>On Oct 7, 2009, at 5:46 AM, Blesson Varghese wrote:
<br>
<p>&nbsp;
<br>
<p>Just a quick question. Would mpirun -version give me the version of the
<br>
mpirun being executed? I am getting the result of that as 1.3.3.
<br>
<p>&nbsp;
<br>
<p>From: Ralph Castain [mailto:rhc.openmpi_at_[hidden]] On Behalf Of Ralph
<br>
Castain
<br>
Sent: 07 October 2009 11:58
<br>
To: Blesson Varghese
<br>
Subject: Re: [OMPI users] MPI_Comm_accept()/connect() errors
<br>
<p>&nbsp;
<br>
<p>Hate to tell you this, but your output clearly indicates you are NOT running
<br>
1.3.3 - that is an output from a 1.2.x version of OMPI.
<br>
<p>&nbsp;
<br>
<p>Check you path and ld_library_path - you're still picking up the 1.2.5
<br>
version somewhere.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Oct 7, 2009, at 4:05 AM, Blesson Varghese wrote:
<br>
<p><p><p><p><p>Hi,
<br>
<p>&nbsp;
<br>
<p>Please refer to the emails below.
<br>
<p>&nbsp;
<br>
<p>I have made an upgrade to Open MPI 1.3.3 as suggested. The necessary
<br>
environment variables have all been set. Attaching the output of ompi_info
<br>
-all. However, the errors continue to persist.
<br>
<p>&nbsp;
<br>
<p>[hpcc00:31864] [0,0,0] ORTE_ERROR_LOG: Not found in file dss/dss_unpack.c at
<br>
line 209
<br>
<p>[hpcc00:31864] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
communicator/comm_dyn.c at line 186
<br>
<p>[hpcc00:31864] *** An error occurred in MPI_Comm_connect
<br>
<p>[hpcc00:31864] *** on communicator MPI_COMM_WORLD
<br>
<p>[hpcc00:31864] *** MPI_ERR_INTERN: internal error
<br>
<p>[hpcc00:31864] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>The server program is as follows:
<br>
<p>&nbsp;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p>&nbsp;
<br>
<p>int main( int argc, char **argv )
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm client;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int buf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int size, again;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info portInfo;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;server available at %s\n&quot;,port_name);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client
<br>
);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;buf, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG, client,
<br>
&amp;status );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect( &amp;client );
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>The client program is as follows:
<br>
<p>&nbsp;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;string.h&gt;
<br>
<p>&nbsp;
<br>
<p>int main( int argc, char **argv )
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm server;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int buf = 8;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info portInfo;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;strcpy(port_name, &quot;0.0.0:2000&quot;); //The port name is hardcoded since
<br>
0.0.0:2000 is generated by the server program
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;buf, 1, MPI_INT, 0, 1, server );
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect( &amp;server );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>Would you please advise?
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Blesson.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>-----Original Message-----
<br>
From: Blesson Varghese [mailto:hx019035_at_[hidden]] 
<br>
Sent: 03 October 2009 12:20
<br>
To: 'Jeff Squyres'
<br>
Subject: RE: [OMPI users] MPI_Comm_accept()/connect() errors
<br>
<p>&nbsp;
<br>
<p>Thank you. I shall try the upgrade very soon.
<br>
<p>&nbsp;
<br>
<p>-----Original Message-----
<br>
<p>From: Jeff Squyres [mailto:jsquyres_at_[hidden]]
<br>
<p>Sent: 03 October 2009 12:18
<br>
<p>To: Blesson Varghese
<br>
<p>Subject: Re: [OMPI users] MPI_Comm_accept()/connect() errors
<br>
<p>&nbsp;
<br>
<p>On Oct 3, 2009, at 7:14 AM, Blesson Varghese wrote:
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; Thanks for your reply Jeff. Since, it is a teaching cluster of the
</span><br>
<p><span class="quotelev1">&gt; University,  I am quite unsure if I would be able to upgrade it very 
</span><br>
<p><span class="quotelev1">&gt; soon.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; Do you reckon that the error is due to the Open MPI version?
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p>&nbsp;
<br>
<p>You can always install your own version of Open MPI under your $HOME 
<br>
<p>or somesuch -- there is no requirement that Open MPI is installed by 
<br>
<p>root in a central location.
<br>
<p>&nbsp;
<br>
<p>That being said, you might want to check with your administrator to 
<br>
<p>ensure that this is ok with local policies -- see if they did any 
<br>
<p>special setup for Open MPI, etc.
<br>
<p>&nbsp;
<br>
<p>But yes, we made a bunch of COMM_SPAWN improvements since the 1.2 
<br>
<p>series.
<br>
<p>&nbsp;
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
 
 
From: Blesson Varghese [mailto:hx019035_at_[hidden]] 
Sent: 01 October 2009 12:01
To: 'Open MPI Users'; 'Ralph Castain'
Subject: RE: [OMPI users] MPI_Comm_accept()/connect() errors
 
The following is the information regarding the error. I am running Open MPI
1.2.5 on Ubuntu 4.2.4, kernel version 2.6.24
 
I ran the server program as mpirun -np 1 server. This program gave me the
output port as 0.1.0:2000. I used this port name value as the command line
argument for the client program: mpirun -np 1 client 0.1.1:2000.
 
- The output of the &quot;ompi_info --all&quot; is attached with the email
- PATH Variable:
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr
/local/maui/bin/:
- LD_LIBRARY_PATH variable was empty
- The following is the output of ifconfig on hpcc00 from where the error has
been generated:
eth0      Link encap:Ethernet  HWaddr 00:12:3f:4c:2d:78
          inet addr:134.225.200.100  Bcast:134.225.200.255
Mask:255.255.255.0
          inet6 addr: fe80::212:3fff:fe4c:2d78/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
          RX packets:15912728 errors:0 dropped:0 overruns:0 frame:0
          TX packets:15312376 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1000
          RX bytes:2951880321 (2.7 GB)  TX bytes:2788249498 (2.5 GB)
          Interrupt:16
 
lo        Link encap:Local Loopback
          inet addr:127.0.0.1  Mask:255.0.0.0
          inet6 addr: ::1/128 Scope:Host
          UP LOOPBACK RUNNING  MTU:16436  Metric:1
          RX packets:3507489 errors:0 dropped:0 overruns:0 frame:0
          TX packets:3507489 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:0
          RX bytes:1794266658 (1.6 GB)  TX bytes:1794266658 (1.6 GB)
 
Regards,
Blesson.
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Ralph Castain
Sent: 29 September 2009 23:59
To: Open MPI Users
Subject: Re: [OMPI users] MPI_Comm_accept()/connect() errors
 
I will ask the obvious - what version of Open MPI are you running? In what
environment? What was your command line?
 
:-)
 
On Sep 29, 2009, at 3:50 PM, Blesson Varghese wrote:
 
Hi,
 
I have been trying to execute the server.c and client.c program provided in
<a href="http://www.mpi-forum.org/docs/mpi21-report/node213.htm#Node213">http://www.mpi-forum.org/docs/mpi21-report/node213.htm#Node213</a>, using
accept() and connect() function in MPI. However, the following errors are
generated.
 
[hpcc00:16522] *** An error occurred in MPI_Comm_connect
[hpcc00:16522] *** on communicator MPI_COMM_WORLD
[hpcc00:16522] *** MPI_ERR_INTERN: internal error
[hpcc00:16522] *** MPI_ERRORS_ARE_FATAL (goodbye)
 
Could anybody please help me?
 
Many thanks,
Blesson.
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
&lt;outputompi.txt&gt;
 
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10899.php">Hakime Seddik: "[OMPI users] Compilation problems of OpenMPI 1.3.3 with Snow Leopard"</a>
<li><strong>Previous message:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10820.php">Blesson Varghese: "[OMPI users] MPI_Comm_accept()/connect() errors"</a>
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
