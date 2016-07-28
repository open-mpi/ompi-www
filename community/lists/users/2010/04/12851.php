<?
$subject_val = "[OMPI users] Calling MPI from a CGI script";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 15:26:03 2010" -->
<!-- isoreceived="20100429192603" -->
<!-- sent="Thu, 29 Apr 2010 12:25:56 -0700 (PDT)" -->
<!-- isosent="20100429192556" -->
<!-- name="Srujan Enaganti" -->
<!-- email="esrujan_at_[hidden]" -->
<!-- subject="[OMPI users] Calling MPI from a CGI script" -->
<!-- id="alpine.LNX.2.00.1004291224050.14317_at_moretti.cs.ubc.ca" -->
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
<strong>Subject:</strong> [OMPI users] Calling MPI from a CGI script<br>
<strong>From:</strong> Srujan Enaganti (<em>esrujan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 15:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Reply:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12873.php">Jeff Squyres: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to run an MPI program as a CGI Python script which is running 
<br>
over an Apache web server running locally on my computer.
<br>
<p>I have a test.py file which has the code snippet
<br>
<p>cmd = 'opt/local/bin/mpiexec -np 10 testmpi'
<br>
output = commands.getoutput(cmd)
<br>
<p><p>When I run the file test.py as an executable over command line (as 
<br>
./test.py ), it works perfectly fine.
<br>
<p>But when I try to run the same over the web browser, the MPI code 
<br>
functions as if the command was 'mpiexec -n 1 testmpi'.
<br>
It is unable to recognize that there are multiple processes that are being 
<br>
invoked. In other words it is not forking child processes.
<br>
<p>I checked in to the error log in apache regarding the same. The 
<br>
corresponding error code is following:
<br>
<p>[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261.local:07199] 
<br>
[0,0,0]-[0,0,1] mca_oob_tcp_msg_send_handler: writev failed: Broken pipe 
<br>
(32), referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261.local:07199] 
<br>
[0,0,0] ORTE_ERROR_LOG: Communication failure in file 
<br>
/SourceCache/openmpi/openmpi-
<br>
5/openmpi/orte/mca/gpr/replica/communications/gpr_replica_recv_proxy_msgs.c 
<br>
at line 49, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] *** 
<br>
Process received signal ***, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] 
<br>
Signal: Segmentation fault (11), referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] Signal 
<br>
code: Address not mapped (1), referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] 
<br>
Failing at address: 0x8, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 0] 2 
<br>
libSystem.B.dylib                   0x00000000803ec3fa _sigtramp + 26, 
<br>
referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 1] 3 
<br>
???                                 0x0000000000000004 0x0 + 4, referer: 
<br>
<a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 2] 4 
<br>
libopen-rte.0.dylib                 0x000000000002dca9 
<br>
mca_oob_send_packed_nb + 297, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 3] 5 
<br>
mca_oob_tcp.so                      0x00000000000f4a8f 
<br>
mca_oob_tcp_msg_complete + 175, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 4] 6 
<br>
mca_oob_tcp.so                      0x00000000000f588a 
<br>
mca_oob_tcp_peer_send + 298, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 5] 7 
<br>
mca_oob_tcp.so                      0x00000000000f9973 mca_oob_tcp_send_nb 
<br>
+ 595, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 6] 8 
<br>
libopen-rte.0.dylib                 0x000000000002dc4c 
<br>
mca_oob_send_packed_nb + 204, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 7] 9 
<br>
mca_gpr_replica.so                  0x00000000002271a0 
<br>
orte_gpr_replica_recv + 304, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 8] 
<br>
10  libopen-rte.0.dylib                 0x000000000002da13 
<br>
mca_oob_recv_packed_nb + 403, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [ 9] 
<br>
11  mca_oob_tcp.so                      0x00000000000f5073 
<br>
mca_oob_tcp_msg_recv_complete + 771, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [10] 
<br>
12  mca_oob_tcp.so                      0x00000000000f6400 
<br>
mca_oob_tcp_peer_lookup + 2240, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [11] 
<br>
13  libopen-pal.0.dylib                 0x0000000000077f3e 
<br>
opal_event_base_loop + 990, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [12] 
<br>
14  libopen-pal.0.dylib                 0x000000000006e8ce opal_progress + 
<br>
126, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [13] 
<br>
15  mpiexec                             0x0000000000001b9d orterun + 2242, 
<br>
referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [14] 
<br>
16  mpiexec                             0x0000000000001764 orterun + 1161, 
<br>
referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [15] 
<br>
17  mpiexec                             0x00000000000012d9 main + 27, 
<br>
referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] [16] 
<br>
18  mpiexec                             0x000000000000129c start + 52, 
<br>
referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] [NeoDen-1261:07199] *** 
<br>
End of error message ***, referer: <a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
[Wed Apr 28 20:32:20 2010] [error] [client ::1] 
<br>
/Users/esrujan/apache2/htdocs/cgi-bin/shell.sh: line 29:  7199 
<br>
Segmentation fault      mpiexec -np 10 testmpi, referer: 
<br>
<a href="http://localhost:8888/">http://localhost:8888/</a>
<br>
<p><p>Can some one help me what the problem is? Why am I not able to run the MPI 
<br>
using a CGI script.
<br>
<p>Thanks a ton for your help,
<br>
Srujan Kumar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Reply:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12873.php">Jeff Squyres: "Re: [OMPI users] Calling MPI from a CGI script"</a>
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
