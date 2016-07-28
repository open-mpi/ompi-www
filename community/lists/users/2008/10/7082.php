<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 08:22:59 2008" -->
<!-- isoreceived="20081023122259" -->
<!-- sent="Thu, 23 Oct 2008 08:22:50 -0400" -->
<!-- isosent="20081023122250" -->
<!-- name="Mi Yan" -->
<!-- email="miyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="OF50913005.BE3E190A-ON852574EB.00419AEA-852574EB.0044028C_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990810230248n2aecf90ck3fc93d07cb8f28b5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Working with a CellBlade cluster<br>
<strong>From:</strong> Mi Yan (<em>miyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 08:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.  MCA BTL parameters
<br>
With &quot;-mca btl openib,self&quot;, both message between two Cell processors on
<br>
one QS22 and   messages between two QS22s go through IB.
<br>
<p>With &quot;-mca btl openib,sm,slef&quot;,  message on one QS22 go through shared
<br>
memory,  message between QS22 go through IB,
<br>
<p>Depending on the message size and other MCA parameters,  it does not
<br>
guarantee message passing on shared memory is faster than on IB.   E.g.
<br>
the bandwidth for 64KB message is 959MB/s on shared-memory and is 694MB/s
<br>
on IB;  the bandwidth for 4MB message is 539 MB/s and 1092 MB/s on  IB.
<br>
The bandwidth of 4MB message on shared memory may be higher if you tune
<br>
some MCA parameter.
<br>
<p>2.  mpi_paffinity_alone
<br>
&nbsp;&nbsp;&quot;mpi_paffinity_alone =1&quot;  is not a good choice for QS22.  There are two
<br>
sockets with two physical  Cell/B.E. on one QS22.  Each Cell/B.E. has two
<br>
SMT threads.   So there are four logical CPUs on one QS22.  CBE Linux
<br>
kernel maps logical cpu 0 and 1 to socket1 and maps logical cpu 1 and 2 to
<br>
socket 2.    If mpi_paffinity_alone is set to 1,   the two MPI instances
<br>
will be assigned to logical cpu 0 and cpu 1 on socket 1.  I believe this is
<br>
not what you want.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A temporaily solution to  force the affinity on  QS22 is to use
<br>
&quot;numactl&quot;,   E.g.  assuming the hostname is &quot;qs22&quot; and the executable is
<br>
&quot;foo&quot;.  the following command can be used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 -H qs22 numactl -c0 -m0  foo :   -np 1 -H qs22
<br>
numactl -c1 -m1 foo
<br>
<p>&nbsp;&nbsp;&nbsp;In the long run,  I wish CBE kernel export  CPU topology  in /sys  and
<br>
use  PLPA to force the processor affinity.
<br>
<p>Best Regards,
<br>
Mi
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;Lenny                                                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verkhovsky&quot;                                                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;lenny.verkhovsky                                          To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@gmail.com&gt;               &quot;Open MPI Users&quot;                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  &lt;users_at_[hidden]&gt;                
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                          cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Working with a     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10/23/2008 05:48          CellBlade cluster                   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AM                                                            
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>Hi,
<br>
<p><p>If I understand you correctly the most suitable way to do it is by
<br>
paffinity that we have in Open MPI 1.3 and the trank.
<br>
how ever usually OS is distributing processes evenly between sockets by it
<br>
self.
<br>
<p>There still no formal FAQ due to a multiple reasons but you can read how to
<br>
use it in the attached scratch ( there were few name changings of the
<br>
params, so check with ompi_info )
<br>
<p>shared memory is used between processes that share same machine, and openib
<br>
is used between different machines ( hostnames ), no special mca params are
<br>
needed.
<br>
<p>Best Regards
<br>
Lenny,
<br>
<p><p><p><p><p><p><p>On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
<br>
wrote:
<br>
&nbsp;&nbsp;&nbsp;Working with a CellBlade cluster (QS22), the requirement is to have one
<br>
&nbsp;&nbsp;instance of the executable running on each socket of the blade (there are
<br>
&nbsp;&nbsp;2
<br>
&nbsp;&nbsp;sockets). The application is of the 'domain decomposition' type, and each
<br>
&nbsp;&nbsp;instance is required to often send/receive data with both the remote
<br>
&nbsp;&nbsp;blades and
<br>
&nbsp;&nbsp;the neighbor socket.
<br>
<p>&nbsp;&nbsp;&nbsp;Question is : which specification must be used for the mca btl component
<br>
&nbsp;&nbsp;to force 1) shmem type messages when communicating with this neighbor
<br>
&nbsp;&nbsp;socket,
<br>
&nbsp;&nbsp;while 2) using openib to communicate with the remote blades ?
<br>
&nbsp;&nbsp;Is '-mca btl sm,openib,self' suitable for this ?
<br>
<p>&nbsp;&nbsp;&nbsp;Also, which debug flags could be used to crosscheck that the messages
<br>
&nbsp;&nbsp;are
<br>
&nbsp;&nbsp;_actually_ going thru the right channel for a given channel, please ?
<br>
<p>&nbsp;&nbsp;&nbsp;We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
<br>
&nbsp;&nbsp;Which version do you think is currently the most optimised for these
<br>
&nbsp;&nbsp;processors and problem type ? Should we go towards OpenMPI 1.2.8
<br>
&nbsp;&nbsp;instead ?
<br>
&nbsp;&nbsp;Or even try some OpenMPI 1.3 nightly build ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks in advance for your help,                  Gilbert.
<br>
<p>&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
(See attached file: RANKS_FAQ.doc)
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><p>


<br><p>
<p><p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7082/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7082/pic25369.gif" alt="pic25369.gif">
<!-- attachment="pic25369.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-7082/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<hr>
<ul>
<li>application/msword attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7082/RANKS_FAQ.doc">RANKS_FAQ.doc</a>
</ul>
<!-- attachment="RANKS_FAQ.doc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7081.php">Julien Devriendt: "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>In reply to:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
