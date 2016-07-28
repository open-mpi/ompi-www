<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:35:10 2007" -->
<!-- isoreceived="20070712203510" -->
<!-- sent="Thu, 12 Jul 2007 16:34:49 -0400" -->
<!-- isosent="20070712203449" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get TotalView to find main program" -->
<!-- id="E4505B3F-C695-46B2-B1E8-8E7CE1F4E6E9_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5927226A3D285F40AB95CA2A3D2369D401B28E4F_at_EXCLUSTER.pu.win.princeton.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 16:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dennis,
<br>
<p>The message queue feature is not yet available on the 1.2.3. One  
<br>
should use the latest version (from svn trunk or from the nightly  
<br>
builds) in order to get it. I'll make sure it get included in 1.2.4  
<br>
if we release it before the 1.3.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 12, 2007, at 3:34 PM, Dennis McRitchie wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I did compile my test app with -g, but unfortunately, our rpm  
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; process stripped the symbols from orterun, so that turned out to be  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; culprit. Once we fixed that and used openmpi-totalview.tcl to start
</span><br>
<span class="quotelev1">&gt; things up, TotalView debugging started working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I still can't get the TotalView message queue  
</span><br>
<span class="quotelev1">&gt; feature to
</span><br>
<span class="quotelev1">&gt; work. The option is greyed out, probably because I got the following
</span><br>
<span class="quotelev1">&gt; error, once for every process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In process mpirun&lt;uname_test.intel&gt;.N: Failed to find the global  
</span><br>
<span class="quotelev1">&gt; symbol
</span><br>
<span class="quotelev1">&gt; MPID_recvs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where uname_test.intel is my test app, and N is the process' rank.  
</span><br>
<span class="quotelev1">&gt; Note
</span><br>
<span class="quotelev1">&gt; that I get the same error whether I built openmpi and my test app with
</span><br>
<span class="quotelev1">&gt; the Intel compiler or the gcc compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In looking in &lt;ompi_build_home&gt;/ompi/debuggers, I see that the  
</span><br>
<span class="quotelev1">&gt; error is
</span><br>
<span class="quotelev1">&gt; coming out of ompi_dll.c, and it caused by not finding either
</span><br>
<span class="quotelev1">&gt; &quot;mca_pml_base_send_requests&quot; or &quot;mca_pml_base_recv_requests&quot; in the
</span><br>
<span class="quotelev1">&gt; image. I presume that the image in question is either orterun or my  
</span><br>
<span class="quotelev1">&gt; test
</span><br>
<span class="quotelev1">&gt; app, and if I run the strings command against them, unsurprisingly  
</span><br>
<span class="quotelev1">&gt; I do
</span><br>
<span class="quotelev1">&gt; not find either of these strings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I compile the same test app against the MPICH library, I *can*
</span><br>
<span class="quotelev1">&gt; use TotalView's message queue feature with it. So I think the  
</span><br>
<span class="quotelev1">&gt; problem is
</span><br>
<span class="quotelev1">&gt; not with the test app itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything I need to do to enable the viewing of message queues
</span><br>
<span class="quotelev1">&gt; with TV when using openmpi 1.2.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;        Dennis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Monday, July 09, 2007 10:06 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can't get TotalView to find main program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2007, at 4:02 PM, Dennis McRitchie wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea why the main program can't be found when running under
</span><br>
<span class="quotelev2">&gt;&gt; mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to be sure: you compiled your test MPI application with -g,  
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does openmpi need to be built with either --enable-debug or
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mem-debug? The &quot;configure --help&quot; says the former is not for
</span><br>
<span class="quotelev2">&gt;&gt; general MPI users. Unclear about the latter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, both of those should be just for OMPI developers; you should not
</span><br>
<span class="quotelev1">&gt; need them for user installations.  Indeed, OMPI should build itself  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; -g as relevant for TV support (i.e., use -g to compile the relevant .c
</span><br>
<span class="quotelev1">&gt; files in libmpi); you shouldn't need to build OMPI itself with -g.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="3668.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3671.php">Dennis McRitchie: "Re: [OMPI users] Can't get TotalView to find main program"</a>
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
