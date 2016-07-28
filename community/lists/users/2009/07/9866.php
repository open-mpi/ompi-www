<?
$subject_val = "Re: [OMPI users] Configuration problem or network problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 08:42:32 2009" -->
<!-- isoreceived="20090707124232" -->
<!-- sent="Tue, 7 Jul 2009 08:42:27 -0400" -->
<!-- isosent="20090707124227" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration problem or network problem?" -->
<!-- id="BAC34910-E46C-4804-BDB8-CB1E53810C83_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="0332CB5EB6327940B291055AAD964221048FDE02_at_SHAMLVEM02.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration problem or network problem?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 08:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9867.php">Jeff Squyres: "Re: [OMPI users] Question on running the openmpi test modules"</a>
<li><strong>Previous message:</strong> <a href="9865.php">Jeff Squyres: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to use a tracing library to see where exactly your  
<br>
synchronization issues are occurring.  It may depend on the  
<br>
communication pattern between your nodes and the timing between them.   
<br>
Additionally, your network switch(es) performance characteristics may  
<br>
come into effect here: are there retransmissions, timeouts, etc.?
<br>
<p>It can sometimes be helpful to insert an MPI_BARRIER every few  
<br>
iterations just to keep all processes well-synchronized.  It seems  
<br>
counter-intuitive, but sometimes waiting a short time in a barrier can  
<br>
increase overall throughput (rather than waiting progressively longer  
<br>
times in poorly-synchronized blocking communications).
<br>
<p><p><p>On Jul 6, 2009, at 11:33 PM, Zou, Lin (GE, Research, Consultant) wrote:
<br>
<p><span class="quotelev1">&gt;  Thank you for your suggestion, I tried this solution, but it  
</span><br>
<span class="quotelev1">&gt; doesn't work. In fact, the headnode doesn't participate the  
</span><br>
<span class="quotelev1">&gt; computing and communication, it only malloc a large a memory, and  
</span><br>
<span class="quotelev1">&gt; when the loop in every PS3 is over, the headnode gather the data  
</span><br>
<span class="quotelev1">&gt; from every PS3.
</span><br>
<span class="quotelev1">&gt; The strange thing is that sometimes the program can work well, but  
</span><br>
<span class="quotelev1">&gt; when reboot the system, without any change to the program, it can't  
</span><br>
<span class="quotelev1">&gt; work, so I think it should be some mechanism in OpenMPI that can  
</span><br>
<span class="quotelev1">&gt; configure to let the program work well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Doug Reeder
</span><br>
<span class="quotelev1">&gt; Sent: 2009&#196;&#234;7&#212;&#194;7&#200;&#213; 10:49
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Configuration problem or network problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try -np 16 and not running on the head node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2009, at 7:08 PM, Zou, Lin (GE, Research, Consultant) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;     The system I use is a PS3 cluster, with 16 PS3s and a PowerPC  
</span><br>
<span class="quotelev2">&gt;&gt; as a headnode, they are connected by a high speed switch.
</span><br>
<span class="quotelev2">&gt;&gt;     There are point-to-point communication functions( MPI_Send and  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv ), the data size is about 40KB, and a lot of computings  
</span><br>
<span class="quotelev2">&gt;&gt; which will consume a long time(about 1 sec)in a loop.The co- 
</span><br>
<span class="quotelev2">&gt;&gt; processor in PS3 can take care of the computation, the main  
</span><br>
<span class="quotelev2">&gt;&gt; processor take care of point-to-point communication,so the  
</span><br>
<span class="quotelev2">&gt;&gt; computing and communication can overlap.The communication funtions  
</span><br>
<span class="quotelev2">&gt;&gt; should return much faster than computing function.
</span><br>
<span class="quotelev2">&gt;&gt;     My question is that after some circles, the time consumed by  
</span><br>
<span class="quotelev2">&gt;&gt; communication functions in a PS3 will increase heavily, and the  
</span><br>
<span class="quotelev2">&gt;&gt; whole cluster's sync state will corrupt.When I decrease the  
</span><br>
<span class="quotelev2">&gt;&gt; computing time, this situation just disappeare.I am very confused  
</span><br>
<span class="quotelev2">&gt;&gt; about this.
</span><br>
<span class="quotelev2">&gt;&gt; I think there is a mechanism in OpenMPI that cause this case, does  
</span><br>
<span class="quotelev2">&gt;&gt; everyone get this situation before?
</span><br>
<span class="quotelev2">&gt;&gt; I use &quot;mpirun --mca btl tcp, self -np 17 --hostfile ...&quot;, is there  
</span><br>
<span class="quotelev2">&gt;&gt; something i should added?
</span><br>
<span class="quotelev2">&gt;&gt; Lin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9867.php">Jeff Squyres: "Re: [OMPI users] Question on running the openmpi test modules"</a>
<li><strong>Previous message:</strong> <a href="9865.php">Jeff Squyres: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Reply:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
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
