<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 15:34:10 2007" -->
<!-- isoreceived="20070712193410" -->
<!-- sent="Thu, 12 Jul 2007 15:34:03 -0400" -->
<!-- isosent="20070712193403" -->
<!-- name="Dennis McRitchie" -->
<!-- email="dmcr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get TotalView to find main program" -->
<!-- id="5927226A3D285F40AB95CA2A3D2369D401B28E4F_at_EXCLUSTER.pu.win.princeton.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A29D09C7-5BAF-4006-84C1-35D7174A3E5D_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-12 15:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3667.php">Jeff Squyres: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply Jeff.
<br>
<p>Yes, I did compile my test app with -g, but unfortunately, our rpm build
<br>
process stripped the symbols from orterun, so that turned out to be the
<br>
culprit. Once we fixed that and used openmpi-totalview.tcl to start
<br>
things up, TotalView debugging started working.
<br>
<p>Unfortunately, I still can't get the TotalView message queue feature to
<br>
work. The option is greyed out, probably because I got the following
<br>
error, once for every process:
<br>
<p>In process mpirun&lt;uname_test.intel&gt;.N: Failed to find the global symbol
<br>
MPID_recvs
<br>
<p>where uname_test.intel is my test app, and N is the process' rank. Note
<br>
that I get the same error whether I built openmpi and my test app with
<br>
the Intel compiler or the gcc compiler.
<br>
<p>In looking in &lt;ompi_build_home&gt;/ompi/debuggers, I see that the error is
<br>
coming out of ompi_dll.c, and it caused by not finding either
<br>
&quot;mca_pml_base_send_requests&quot; or &quot;mca_pml_base_recv_requests&quot; in the
<br>
image. I presume that the image in question is either orterun or my test
<br>
app, and if I run the strings command against them, unsurprisingly I do
<br>
not find either of these strings.
<br>
<p>But if I compile the same test app against the MPICH library, I *can*
<br>
use TotalView's message queue feature with it. So I think the problem is
<br>
not with the test app itself.
<br>
<p>Is there anything I need to do to enable the viewing of message queues
<br>
with TV when using openmpi 1.2.3?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dennis
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Monday, July 09, 2007 10:06 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Can't get TotalView to find main program
<br>
<p>On Jul 5, 2007, at 4:02 PM, Dennis McRitchie wrote:
<br>
<p><span class="quotelev1">&gt; Any idea why the main program can't be found when running under 
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<p>Just to be sure: you compiled your test MPI application with -g, right?
<br>
<p><span class="quotelev1">&gt; Does openmpi need to be built with either --enable-debug or 
</span><br>
<span class="quotelev1">&gt; --enable-mem-debug? The &quot;configure --help&quot; says the former is not for 
</span><br>
<span class="quotelev1">&gt; general MPI users. Unclear about the latter.
</span><br>
<p>No, both of those should be just for OMPI developers; you should not
<br>
need them for user installations.  Indeed, OMPI should build itself with
<br>
-g as relevant for TV support (i.e., use -g to compile the relevant .c
<br>
files in libmpi); you shouldn't need to build OMPI itself with -g.
<br>
<p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Previous message:</strong> <a href="3667.php">Jeff Squyres: "Re: [OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>In reply to:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>Reply:</strong> <a href="3669.php">George Bosilca: "Re: [OMPI users] Can't get TotalView to find main program"</a>
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
