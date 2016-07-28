<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 27 15:57:15 2013" -->
<!-- isoreceived="20130627195715" -->
<!-- sent="Thu, 27 Jun 2013 21:57:12 +0200" -->
<!-- isosent="20130627195712" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall" -->
<!-- id="3902BF22-139B-4668-82C1-5A7E32DC44F7_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CA369E5_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-27 15:57:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22230.php">rmjuberias: "[OMPI users] openmpi install problem ..."</a>
<li><strong>Previous message:</strong> <a href="22228.php">rmjuberias: "[OMPI users] problem compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22231.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22231.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems to highlight a possible bug in the MPI implementation. As I suggested earlier, the credit management of the OpenIB might be unsafe.
<br>
<p>To confirm this one last test to run. Let's prevent the OpenIB support from being used during the run (thus Open MPI will fall back to TCP). I suppose you should have ethernet cards in your cluster or you have IBoIP. Add &quot;--mca btl ^openib&quot; to your mpirun command. If this allows your application to run to completion then we know exactly where to start looking.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jun 27, 2013, at 19:59 , &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The debug version also hung, roughly the same amount of progress in the computations (although of course it took much longer to make that progress in comparison to the optimized version).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On the bright side, the idea of putting an mpi_barrier after the irecvs and before the isends appears to have helped.  I was able to run 5 times farther without any trouble.  So now I&#146;m trying to run 50 times farther and, if no hang, I will declare workaround-victory.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What could this mean?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am guessing that one or more processes may run ahead of the others, just because of the different amounts of work that precedes the communication step.  If a process manages to post all its irecvs and post all its isends well before another process has managed to post any matching irecvs, perhaps there is some buffering resource on the sender side that is getting exhausted?   This is pure guessing on my part.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ed Blosch
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 27, 2013 8:01 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Application hangs on mpi_waitall
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It ran a bit longer but still deadlocked.  All matching sends are posted 1:1with posted recvs so it is a delivery issue of some kind.  I'm running a debug compiled version tonight to see what that might turn up.  I may try to rewrite with blocking sends and see if that works.  I can also try adding a barrier (irecvs, barrier, isends, waitall) to make sure sends are not buffering waiting for recvs to be posted.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sent via the Samsung Galaxy S&#153; III, an AT&amp;T 4G LTE smartphone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- Original message --------
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Date: 
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Application hangs on mpi_waitall 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Im not sure but there might be a case where the BTL is getting overwhelmed by the nob-blocking operations while trying to setup the connection. There is a simple test for this. Add an MPI_Alltoall with a reasonable size (100k) before you start posting the non-blocking receives, and let's see if this solves your issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 26, 2013, at 04:02 , eblosch_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; An update: I recoded the mpi_waitall as a loop over the requests with
</span><br>
<span class="quotelev2">&gt; &gt; mpi_test and a 30 second timeout.  The timeout happens unpredictably,
</span><br>
<span class="quotelev2">&gt; &gt; sometimes after 10 minutes of run time, other times after 15 minutes, for
</span><br>
<span class="quotelev2">&gt; &gt; the exact same case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After 30 seconds, I print out the status of all outstanding receive
</span><br>
<span class="quotelev2">&gt; &gt; requests.  The message tags that are outstanding have definitely been
</span><br>
<span class="quotelev2">&gt; &gt; sent, so I am wondering why they are not getting received?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As I said before, everybody posts non-blocking standard receives, then
</span><br>
<span class="quotelev2">&gt; &gt; non-blocking standard sends, then calls mpi_waitall. Each process is
</span><br>
<span class="quotelev2">&gt; &gt; typically waiting on 200 to 300 requests. Is deadlock possible via this
</span><br>
<span class="quotelev2">&gt; &gt; implementation approach under some kind of unusual conditions?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ed
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm running OpenMPI 1.6.4 and seeing a problem where mpi_waitall never
</span><br>
<span class="quotelev3">&gt; &gt;&gt; returns.  The case runs fine with MVAPICH.  The logic associated with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communications has been extensively debugged in the past; we don't think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it has errors.   Each process posts non-blocking receives, non-blocking
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sends, and then does waitall on all the outstanding requests.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The work is broken down into 960 chunks. If I run with 960 processes (60
</span><br>
<span class="quotelev3">&gt; &gt;&gt; nodes of 16 cores each), things seem to work.  If I use 160 processes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (each process handling 6 chunks of work), then each process is handling 6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; times as much communication, and that is the case that hangs with OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.6.4; again, seems to work with MVAPICH.  Is there an obvious place to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; start, diagnostically?  We're using the openib btl.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ed
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22230.php">rmjuberias: "[OMPI users] openmpi install problem ..."</a>
<li><strong>Previous message:</strong> <a href="22228.php">rmjuberias: "[OMPI users] problem compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="22226.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22231.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="22231.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Application hangs on mpi_waitall"</a>
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
