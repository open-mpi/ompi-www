<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:59:52 2008" -->
<!-- isoreceived="20081031205952" -->
<!-- sent="Fri, 31 Oct 2008 21:59:47 +0100" -->
<!-- isosent="20081031205947" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="Pine.LNX.4.58.0810312153320.28861_at_lxplus238.cern.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8C8898F4-A0D1-4986-8AF4-18CD7A8CD886_at_cisco.com" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
<li><strong>Previous message:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, thanks to Mi and Jeff for their useful replies anyway.
<br>
<p>&nbsp;Gilbert.
<br>
<p>On Fri, 31 Oct 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; AFAIK, there are no parameters available to monitor IB message passing.  The
</span><br>
<span class="quotelev1">&gt; majority of it is processed in hardware, and Linux is unaware of it.  We have
</span><br>
<span class="quotelev1">&gt; not added any extra instrumentation into the openib BTL to provide auditing
</span><br>
<span class="quotelev1">&gt; information, because, among other reasons, that is the performance-critical
</span><br>
<span class="quotelev1">&gt; code path and we didn't want to add any latency in there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best you may be able to do is with a PMPI-based library to audit MPI
</span><br>
<span class="quotelev1">&gt; function call invocations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2008, at 4:07 PM, Mi Yan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilbert,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I did not know the MCA parameters that can monitor the message passing. I
</span><br>
<span class="quotelev2">&gt; &gt; have tried a few MCA verbose parameters and did not identify anyone helpful.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One way to check if the message goes via IB or SM maybe to check the
</span><br>
<span class="quotelev2">&gt; &gt; counters in /sys/class/infiniband.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Mi
</span><br>
<span class="quotelev2">&gt; &gt; &lt;graycol.gif&gt;Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 10/29/2008 12:36 PM
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; cc
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] Working with a CellBlade cluster
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much Mi and Lenny for your detailed replies.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe I can summarize the infos to allow for
</span><br>
<span class="quotelev2">&gt; &gt; 'Working with a QS22 CellBlade cluster' like this:
</span><br>
<span class="quotelev2">&gt; &gt; - Yes, messages are efficiently handled with &quot;-mca btl openib,sm,self&quot;
</span><br>
<span class="quotelev2">&gt; &gt; - Better to go to the OMPI-1.3 version ASAP
</span><br>
<span class="quotelev2">&gt; &gt; - It is currently more efficient/easy to use numactl to control
</span><br>
<span class="quotelev2">&gt; &gt; processor affinity on a QS22.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So far so good.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One question remains: how could I monitor in details message passing
</span><br>
<span class="quotelev2">&gt; &gt; thru IB (on one side) and thru SM (on the other side) thru the use of mca
</span><br>
<span class="quotelev2">&gt; &gt; parameters, please ? Additionnal info about the verbosity level
</span><br>
<span class="quotelev2">&gt; &gt; of this monitoring will be highly appreciated ... A lengthy travel
</span><br>
<span class="quotelev2">&gt; &gt; inside the list of such parameters provided by ompi_info did not
</span><br>
<span class="quotelev2">&gt; &gt; enlighten me (there are so many xxx_sm_yyy type params that I don't know
</span><br>
<span class="quotelev2">&gt; &gt; which
</span><br>
<span class="quotelev2">&gt; &gt; could be the right one ;-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance for your hints,      Best Regards,     Gilbert.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 23 Oct 2008, Mi Yan wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.  MCA BTL parameters
</span><br>
<span class="quotelev3">&gt; &gt; &gt; With &quot;-mca btl openib,self&quot;, both message between two Cell processors on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; one QS22 and   messages between two QS22s go through IB.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; With &quot;-mca btl openib,sm,slef&quot;,  message on one QS22 go through shared
</span><br>
<span class="quotelev3">&gt; &gt; &gt; memory,  message between QS22 go through IB,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Depending on the message size and other MCA parameters,  it does not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; guarantee message passing on shared memory is faster than on IB.   E.g.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the bandwidth for 64KB message is 959MB/s on shared-memory and is 694MB/s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on IB;  the bandwidth for 4MB message is 539 MB/s and 1092 MB/s on  IB.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The bandwidth of 4MB message on shared memory may be higher if you tune
</span><br>
<span class="quotelev3">&gt; &gt; &gt; some MCA parameter.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.  mpi_paffinity_alone
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   &quot;mpi_paffinity_alone =1&quot;  is not a good choice for QS22.  There are two
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sockets with two physical  Cell/B.E. on one QS22.  Each Cell/B.E. has two
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SMT threads.   So there are four logical CPUs on one QS22.  CBE Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kernel maps logical cpu 0 and 1 to socket1 and maps logical cpu 1 and 2 to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; socket 2.    If mpi_paffinity_alone is set to 1,   the two MPI instances
</span><br>
<span class="quotelev3">&gt; &gt; &gt; will be assigned to logical cpu 0 and cpu 1 on socket 1.  I believe this
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not what you want.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     A temporaily solution to  force the affinity on  QS22 is to use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;numactl&quot;,   E.g.  assuming the hostname is &quot;qs22&quot; and the executable is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;foo&quot;.  the following command can be used
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 mpirun -np 1 -H qs22 numactl -c0 -m0  foo :   -np 1 -H
</span><br>
<span class="quotelev2">&gt; &gt; qs22
</span><br>
<span class="quotelev3">&gt; &gt; &gt; numactl -c1 -m1 foo
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    In the long run,  I wish CBE kernel export  CPU topology  in /sys  and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use  PLPA to force the processor affinity.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              &quot;Lenny
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Verkhovsky&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              &lt;lenny.verkhovsky                                          To
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              @gmail.com&gt;               &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Sent by:                  &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              users-bounces_at_ope                                          cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              n-mpi.org
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                                                    Subject
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                                        Re: [OMPI users] Working with a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              10/23/2008 05:48          CellBlade cluster
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              Please respond to
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt; &gt;              &lt;users_at_open-mpi.o
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                     rg&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I understand you correctly the most suitable way to do it is by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; paffinity that we have in Open MPI 1.3 and the trank.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; how ever usually OS is distributing processes evenly between sockets by it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; self.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There still no formal FAQ due to a multiple reasons but you can read how
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; use it in the attached scratch ( there were few name changings of the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; params, so check with ompi_info )
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; shared memory is used between processes that share same machine, and
</span><br>
<span class="quotelev2">&gt; &gt; openib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is used between different machines ( hostnames ), no special mca params
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; needed.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Lenny,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Working with a CellBlade cluster (QS22), the requirement is to have one
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   instance of the executable running on each socket of the blade (there
</span><br>
<span class="quotelev2">&gt; &gt; are
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   sockets). The application is of the 'domain decomposition' type, and
</span><br>
<span class="quotelev2">&gt; &gt; each
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   instance is required to often send/receive data with both the remote
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   blades and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   the neighbor socket.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Question is : which specification must be used for the mca btl
</span><br>
<span class="quotelev2">&gt; &gt; component
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   to force 1) shmem type messages when communicating with this neighbor
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   socket,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Also, which debug flags could be used to crosscheck that the messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   are
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   _actually_ going thru the right channel for a given channel, please ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    We are currently using OpenMPI 1.2.5 shipped with RHEL5.2 (ppc64).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Which version do you think is currently the most optimised for these
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   processors and problem type ? Should we go towards OpenMPI 1.2.8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   instead ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Thanks in advance for your help,                  Gilbert.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (See attached file: RANKS_FAQ.doc)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev2">&gt; &gt;  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev2">&gt; &gt;  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev2">&gt; &gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7176.php">Allan Menezes: "[OMPI users] Problem with openmpi version 1.3b1 beta1"</a>
<li><strong>Previous message:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7083.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
