<?
$subject_val = "Re: [OMPI users] Configuration problem or network problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 06:58:11 2009" -->
<!-- isoreceived="20090709105811" -->
<!-- sent="Thu, 9 Jul 2009 06:58:05 -0400" -->
<!-- isosent="20090709105805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration problem or network problem?" -->
<!-- id="7A1DD349-8716-4C08-9EBB-A99EB3BA9A03_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="0332CB5EB6327940B291055AAD96422104931EB8_at_SHAMLVEM02.e2k.ad.ge.com" -->
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
<strong>Date:</strong> 2009-07-09 06:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9893.php">yvan.fournier_at_[hidden]: "[OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI includes VampirTrace to generate tracing info.  In addition  
<br>
to Vampir (a commercial product), there are a few free tools that can  
<br>
read VT's Open Tracefile Format (OTF) output -- I'll leave this up to  
<br>
the VT guys to describe.
<br>
<p>Alternatively, you could also use MPE (<a href="http://www.mcs.anl.gov/research/projects/mpi/www/www4/MPE.html">http://www.mcs.anl.gov/research/projects/mpi/www/www4/MPE.html</a> 
<br>
).  IIRC, MPE is included in MPICH2 distributions.  There's also mpiP (<a href="http://mpip.sourceforge.net/">http://mpip.sourceforge.net/</a> 
<br>
).  Other MPI tracing tools also exist -- you should be able to google  
<br>
around and find them.
<br>
<p>All of these tools basically interpose themselves on the MPI library  
<br>
and intercept your function calls.  Stats are generated, and possibly  
<br>
even timelines which can be shown graphically.  Such graphical  
<br>
timelines can be quite enlightening as to what is really happening in  
<br>
your MPI application at run-time.
<br>
<p><p>On Jul 9, 2009, at 5:11 AM, Zou, Lin (GE, Research, Consultant) wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; I tried your suggestion, insert MPI_Barrier every few iterations,  
</span><br>
<span class="quotelev1">&gt; but it doesn't work, in fact it became even slower.....
</span><br>
<span class="quotelev1">&gt; i want to try tracing the communication avtivity, can you give me  
</span><br>
<span class="quotelev1">&gt; some more details about how to use mpitrace.
</span><br>
<span class="quotelev1">&gt; Thank you for your attention.
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; Lin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 2009&#196;&#234;7&#212;&#194;7&#200;&#213; 20:42
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Configuration problem or network problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to use a tracing library to see where exactly your  
</span><br>
<span class="quotelev1">&gt; synchronization issues are occurring.  It may depend on the
</span><br>
<span class="quotelev1">&gt; communication pattern between your nodes and the timing between them.
</span><br>
<span class="quotelev1">&gt; Additionally, your network switch(es) performance characteristics  
</span><br>
<span class="quotelev1">&gt; may come into effect here: are there retransmissions, timeouts, etc.?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can sometimes be helpful to insert an MPI_BARRIER every few  
</span><br>
<span class="quotelev1">&gt; iterations just to keep all processes well-synchronized.  It seems  
</span><br>
<span class="quotelev1">&gt; counter-intuitive, but sometimes waiting a short time in a barrier  
</span><br>
<span class="quotelev1">&gt; can increase overall throughput (rather than waiting progressively  
</span><br>
<span class="quotelev1">&gt; longer times in poorly-synchronized blocking communications).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2009, at 11:33 PM, Zou, Lin (GE, Research, Consultant)  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Thank you for your suggestion, I tried this solution, but it  
</span><br>
<span class="quotelev1">&gt; doesn't
</span><br>
<span class="quotelev2">&gt; &gt; work. In fact, the headnode doesn't participate the computing and
</span><br>
<span class="quotelev2">&gt; &gt; communication, it only malloc a large a memory, and when the loop in
</span><br>
<span class="quotelev2">&gt; &gt; every PS3 is over, the headnode gather the data from every PS3.
</span><br>
<span class="quotelev2">&gt; &gt; The strange thing is that sometimes the program can work well, but
</span><br>
<span class="quotelev2">&gt; &gt; when reboot the system, without any change to the program, it can't
</span><br>
<span class="quotelev2">&gt; &gt; work, so I think it should be some mechanism in OpenMPI that can
</span><br>
<span class="quotelev2">&gt; &gt; configure to let the program work well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; On Behalf Of Doug Reeder
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 2009&#196;&#234;7&#212;&#194;7&#200;&#213; 10:49
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Configuration problem or network problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lin,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try -np 16 and not running on the head node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doug Reeder
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 6, 2009, at 7:08 PM, Zou, Lin (GE, Research, Consultant)  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     The system I use is a PS3 cluster, with 16 PS3s and a PowerPC  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a headnode, they are connected by a high speed switch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     There are point-to-point communication functions( MPI_Send and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Recv ), the data size is about 40KB, and a lot of computings
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which will consume a long time(about 1 sec)in a loop.The co-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processor in PS3 can take care of the computation, the main  
</span><br>
<span class="quotelev1">&gt; processor
</span><br>
<span class="quotelev3">&gt; &gt;&gt; take care of point-to-point communication,so the computing and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication can overlap.The communication funtions should return
</span><br>
<span class="quotelev3">&gt; &gt;&gt; much faster than computing function.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     My question is that after some circles, the time consumed by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communication functions in a PS3 will increase heavily, and the  
</span><br>
<span class="quotelev1">&gt; whole
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cluster's sync state will corrupt.When I decrease the computing  
</span><br>
<span class="quotelev1">&gt; time,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this situation just disappeare.I am very confused about this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think there is a mechanism in OpenMPI that cause this case, does
</span><br>
<span class="quotelev3">&gt; &gt;&gt; everyone get this situation before?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I use &quot;mpirun --mca btl tcp, self -np 17 --hostfile ...&quot;, is there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something i should added?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT5113881.txt&gt;
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
<li><strong>Next message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>Previous message:</strong> <a href="9893.php">yvan.fournier_at_[hidden]: "[OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
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
