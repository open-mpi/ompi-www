<?
$subject_val = "Re: [OMPI users] Working with a CellBlade cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:20:45 2008" -->
<!-- isoreceived="20081031202045" -->
<!-- sent="Fri, 31 Oct 2008 16:20:39 -0400" -->
<!-- isosent="20081031202039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Working with a CellBlade cluster" -->
<!-- id="8C8898F4-A0D1-4986-8AF4-18CD7A8CD886_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF5D19603C.45E4DA44-ON852574F3.0068F45E-852574F3.006E8771_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="7168.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAIK, there are no parameters available to monitor IB message  
<br>
passing.  The majority of it is processed in hardware, and Linux is  
<br>
unaware of it.  We have not added any extra instrumentation into the  
<br>
openib BTL to provide auditing information, because, among other  
<br>
reasons, that is the performance-critical code path and we didn't want  
<br>
to add any latency in there.
<br>
<p>The best you may be able to do is with a PMPI-based library to audit  
<br>
MPI function call invocations.
<br>
<p><p>On Oct 31, 2008, at 4:07 PM, Mi Yan wrote:
<br>
<p><span class="quotelev1">&gt; Gilbert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not know the MCA parameters that can monitor the message  
</span><br>
<span class="quotelev1">&gt; passing. I have tried a few MCA verbose parameters and did not  
</span><br>
<span class="quotelev1">&gt; identify anyone helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One way to check if the message goes via IB or SM maybe to check the  
</span><br>
<span class="quotelev1">&gt; counters in /sys/class/infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mi
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilbert Grosdidier &lt;grodid_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 10/29/2008 12:36 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Working with a CellBlade cluster
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much Mi and Lenny for your detailed replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe I can summarize the infos to allow for
</span><br>
<span class="quotelev1">&gt; 'Working with a QS22 CellBlade cluster' like this:
</span><br>
<span class="quotelev1">&gt; - Yes, messages are efficiently handled with &quot;-mca btl openib,sm,self&quot;
</span><br>
<span class="quotelev1">&gt; - Better to go to the OMPI-1.3 version ASAP
</span><br>
<span class="quotelev1">&gt; - It is currently more efficient/easy to use numactl to control
</span><br>
<span class="quotelev1">&gt; processor affinity on a QS22.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far so good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One question remains: how could I monitor in details message passing
</span><br>
<span class="quotelev1">&gt; thru IB (on one side) and thru SM (on the other side) thru the use  
</span><br>
<span class="quotelev1">&gt; of mca
</span><br>
<span class="quotelev1">&gt; parameters, please ? Additionnal info about the verbosity level
</span><br>
<span class="quotelev1">&gt; of this monitoring will be highly appreciated ... A lengthy travel
</span><br>
<span class="quotelev1">&gt; inside the list of such parameters provided by ompi_info did not
</span><br>
<span class="quotelev1">&gt; enlighten me (there are so many xxx_sm_yyy type params that I don't  
</span><br>
<span class="quotelev1">&gt; know which
</span><br>
<span class="quotelev1">&gt; could be the right one ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your hints,      Best Regards,     Gilbert.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 23 Oct 2008, Mi Yan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.  MCA BTL parameters
</span><br>
<span class="quotelev2">&gt; &gt; With &quot;-mca btl openib,self&quot;, both message between two Cell  
</span><br>
<span class="quotelev1">&gt; processors on
</span><br>
<span class="quotelev2">&gt; &gt; one QS22 and   messages between two QS22s go through IB.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With &quot;-mca btl openib,sm,slef&quot;,  message on one QS22 go through  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev2">&gt; &gt; memory,  message between QS22 go through IB,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Depending on the message size and other MCA parameters,  it does not
</span><br>
<span class="quotelev2">&gt; &gt; guarantee message passing on shared memory is faster than on IB.    
</span><br>
<span class="quotelev1">&gt; E.g.
</span><br>
<span class="quotelev2">&gt; &gt; the bandwidth for 64KB message is 959MB/s on shared-memory and is  
</span><br>
<span class="quotelev1">&gt; 694MB/s
</span><br>
<span class="quotelev2">&gt; &gt; on IB;  the bandwidth for 4MB message is 539 MB/s and 1092 MB/s  
</span><br>
<span class="quotelev1">&gt; on  IB.
</span><br>
<span class="quotelev2">&gt; &gt; The bandwidth of 4MB message on shared memory may be higher if you  
</span><br>
<span class="quotelev1">&gt; tune
</span><br>
<span class="quotelev2">&gt; &gt; some MCA parameter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2.  mpi_paffinity_alone
</span><br>
<span class="quotelev2">&gt; &gt;   &quot;mpi_paffinity_alone =1&quot;  is not a good choice for QS22.  There  
</span><br>
<span class="quotelev1">&gt; are two
</span><br>
<span class="quotelev2">&gt; &gt; sockets with two physical  Cell/B.E. on one QS22.  Each Cell/B.E.  
</span><br>
<span class="quotelev1">&gt; has two
</span><br>
<span class="quotelev2">&gt; &gt; SMT threads.   So there are four logical CPUs on one QS22.  CBE  
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev2">&gt; &gt; kernel maps logical cpu 0 and 1 to socket1 and maps logical cpu 1  
</span><br>
<span class="quotelev1">&gt; and 2 to
</span><br>
<span class="quotelev2">&gt; &gt; socket 2.    If mpi_paffinity_alone is set to 1,   the two MPI  
</span><br>
<span class="quotelev1">&gt; instances
</span><br>
<span class="quotelev2">&gt; &gt; will be assigned to logical cpu 0 and cpu 1 on socket 1.  I  
</span><br>
<span class="quotelev1">&gt; believe this is
</span><br>
<span class="quotelev2">&gt; &gt; not what you want.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     A temporaily solution to  force the affinity on  QS22 is to use
</span><br>
<span class="quotelev2">&gt; &gt; &quot;numactl&quot;,   E.g.  assuming the hostname is &quot;qs22&quot; and the  
</span><br>
<span class="quotelev1">&gt; executable is
</span><br>
<span class="quotelev2">&gt; &gt; &quot;foo&quot;.  the following command can be used
</span><br>
<span class="quotelev2">&gt; &gt;                 mpirun -np 1 -H qs22 numactl -c0 -m0  foo :   -np  
</span><br>
<span class="quotelev1">&gt; 1 -H qs22
</span><br>
<span class="quotelev2">&gt; &gt; numactl -c1 -m1 foo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    In the long run,  I wish CBE kernel export  CPU topology  in / 
</span><br>
<span class="quotelev1">&gt; sys  and
</span><br>
<span class="quotelev2">&gt; &gt; use  PLPA to force the processor affinity.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Mi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              &quot;Lenny
</span><br>
<span class="quotelev2">&gt; &gt;              Verkhovsky&quot;
</span><br>
<span class="quotelev2">&gt; &gt;               
</span><br>
<span class="quotelev1">&gt; &lt;lenny.verkhovsky                                          To
</span><br>
<span class="quotelev2">&gt; &gt;              @gmail.com&gt;               &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev2">&gt; &gt;              Sent by:                  &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;              users- 
</span><br>
<span class="quotelev1">&gt; bounces_at_ope                                          cc
</span><br>
<span class="quotelev2">&gt; &gt;              n-mpi.org
</span><br>
<span class="quotelev2">&gt; &gt;                                                                     
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt;                                        Re: [OMPI users] Working  
</span><br>
<span class="quotelev1">&gt; with a
</span><br>
<span class="quotelev2">&gt; &gt;              10/23/2008 05:48          CellBlade cluster
</span><br>
<span class="quotelev2">&gt; &gt;              AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;              Please respond to
</span><br>
<span class="quotelev2">&gt; &gt;               Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;              &lt;users_at_open-mpi.o
</span><br>
<span class="quotelev2">&gt; &gt;                     rg&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I understand you correctly the most suitable way to do it is by
</span><br>
<span class="quotelev2">&gt; &gt; paffinity that we have in Open MPI 1.3 and the trank.
</span><br>
<span class="quotelev2">&gt; &gt; how ever usually OS is distributing processes evenly between  
</span><br>
<span class="quotelev1">&gt; sockets by it
</span><br>
<span class="quotelev2">&gt; &gt; self.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There still no formal FAQ due to a multiple reasons but you can  
</span><br>
<span class="quotelev1">&gt; read how to
</span><br>
<span class="quotelev2">&gt; &gt; use it in the attached scratch ( there were few name changings of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; params, so check with ompi_info )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; shared memory is used between processes that share same machine,  
</span><br>
<span class="quotelev1">&gt; and openib
</span><br>
<span class="quotelev2">&gt; &gt; is used between different machines ( hostnames ), no special mca  
</span><br>
<span class="quotelev1">&gt; params are
</span><br>
<span class="quotelev2">&gt; &gt; needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards
</span><br>
<span class="quotelev2">&gt; &gt; Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sun, Oct 19, 2008 at 10:32 AM, Gilbert Grosdidier &lt;grodid_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Working with a CellBlade cluster (QS22), the requirement is to  
</span><br>
<span class="quotelev1">&gt; have one
</span><br>
<span class="quotelev2">&gt; &gt;   instance of the executable running on each socket of the blade  
</span><br>
<span class="quotelev1">&gt; (there are
</span><br>
<span class="quotelev2">&gt; &gt;   2
</span><br>
<span class="quotelev2">&gt; &gt;   sockets). The application is of the 'domain decomposition' type,  
</span><br>
<span class="quotelev1">&gt; and each
</span><br>
<span class="quotelev2">&gt; &gt;   instance is required to often send/receive data with both the  
</span><br>
<span class="quotelev1">&gt; remote
</span><br>
<span class="quotelev2">&gt; &gt;   blades and
</span><br>
<span class="quotelev2">&gt; &gt;   the neighbor socket.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Question is : which specification must be used for the mca btl  
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev2">&gt; &gt;   to force 1) shmem type messages when communicating with this  
</span><br>
<span class="quotelev1">&gt; neighbor
</span><br>
<span class="quotelev2">&gt; &gt;   socket,
</span><br>
<span class="quotelev2">&gt; &gt;   while 2) using openib to communicate with the remote blades ?
</span><br>
<span class="quotelev2">&gt; &gt;   Is '-mca btl sm,openib,self' suitable for this ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Also, which debug flags could be used to crosscheck that the  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev2">&gt; &gt;   are
</span><br>
<span class="quotelev2">&gt; &gt;   _actually_ going thru the right channel for a given channel,  
</span><br>
<span class="quotelev1">&gt; please ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    We are currently using OpenMPI 1.2.5 shipped with RHEL5.2  
</span><br>
<span class="quotelev1">&gt; (ppc64).
</span><br>
<span class="quotelev2">&gt; &gt;   Which version do you think is currently the most optimised for  
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev2">&gt; &gt;   processors and problem type ? Should we go towards OpenMPI 1.2.8
</span><br>
<span class="quotelev2">&gt; &gt;   instead ?
</span><br>
<span class="quotelev2">&gt; &gt;   Or even try some OpenMPI 1.3 nightly build ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks in advance for your help,                  Gilbert.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;   users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;   users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; (See attached file: RANKS_FAQ.doc)
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; *---------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
</span><br>
<span class="quotelev1">&gt;  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
</span><br>
<span class="quotelev1">&gt;  B.P. 34, F-91898 Orsay Cedex (FRANCE)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7171.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7169.php">Hahn Kim: "[OMPI users] problem running Open MPI on Cells"</a>
<li><strong>In reply to:</strong> <a href="7168.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Reply:</strong> <a href="7175.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
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
