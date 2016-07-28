<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 16:44:10 2007" -->
<!-- isoreceived="20070712204410" -->
<!-- sent="Thu, 12 Jul 2007 16:44:03 -0400" -->
<!-- isosent="20070712204403" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get TotalView to find main program" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D401B28E79_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4505B3F-C695-46B2-B1E8-8E7CE1F4E6E9_at_cs.utk.edu" -->
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
<strong>From:</strong> Dennis McRitchie (<em>dmcr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-12 16:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George.
<br>
<p>That will be very helpful.
<br>
<p>Dennis 
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Thursday, July 12, 2007 4:35 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can't get TotalView to find main program
<br>
<p>Dennis,
<br>
<p>The message queue feature is not yet available on the 1.2.3. One should
<br>
use the latest version (from svn trunk or from the nightly
<br>
builds) in order to get it. I'll make sure it get included in 1.2.4 if
<br>
we release it before the 1.3.
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
<span class="quotelev1">&gt; build process stripped the symbols from orterun, so that turned out to
</span><br>
<p><span class="quotelev1">&gt; be the culprit. Once we fixed that and used openmpi-totalview.tcl to 
</span><br>
<span class="quotelev1">&gt; start things up, TotalView debugging started working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I still can't get the TotalView message queue feature 
</span><br>
<span class="quotelev1">&gt; to work. The option is greyed out, probably because I got the 
</span><br>
<span class="quotelev1">&gt; following error, once for every process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In process mpirun&lt;uname_test.intel&gt;.N: Failed to find the global 
</span><br>
<span class="quotelev1">&gt; symbol MPID_recvs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where uname_test.intel is my test app, and N is the process' rank.  
</span><br>
<span class="quotelev1">&gt; Note
</span><br>
<span class="quotelev1">&gt; that I get the same error whether I built openmpi and my test app with
</span><br>
<p><span class="quotelev1">&gt; the Intel compiler or the gcc compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In looking in &lt;ompi_build_home&gt;/ompi/debuggers, I see that the error 
</span><br>
<span class="quotelev1">&gt; is coming out of ompi_dll.c, and it caused by not finding either 
</span><br>
<span class="quotelev1">&gt; &quot;mca_pml_base_send_requests&quot; or &quot;mca_pml_base_recv_requests&quot; in the 
</span><br>
<span class="quotelev1">&gt; image. I presume that the image in question is either orterun or my 
</span><br>
<span class="quotelev1">&gt; test app, and if I run the strings command against them, 
</span><br>
<span class="quotelev1">&gt; unsurprisingly I do not find either of these strings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I compile the same test app against the MPICH library, I *can* 
</span><br>
<span class="quotelev1">&gt; use TotalView's message queue feature with it. So I think the problem 
</span><br>
<span class="quotelev1">&gt; is not with the test app itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything I need to do to enable the viewing of message queues
</span><br>
<p><span class="quotelev1">&gt; with TV when using openmpi 1.2.3?
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- mpi.org] 
</span><br>
<span class="quotelev1">&gt; On Behalf Of Jeff Squyres
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
<p><span class="quotelev2">&gt;&gt; general MPI users. Unclear about the latter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, both of those should be just for OMPI developers; you should not 
</span><br>
<span class="quotelev1">&gt; need them for user installations.  Indeed, OMPI should build itself 
</span><br>
<span class="quotelev1">&gt; with -g as relevant for TV support (i.e., use -g to compile the 
</span><br>
<span class="quotelev1">&gt; relevant .c files in libmpi); you shouldn't need to build OMPI itself 
</span><br>
<span class="quotelev1">&gt; with -g.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3672.php">Michael: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3670.php">George Bosilca: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3600.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
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
