<?
$subject_val = "Re: [OMPI users] Profiling OpenMPI routines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 22:16:27 2009" -->
<!-- isoreceived="20091002021627" -->
<!-- sent="Thu, 01 Oct 2009 19:17:27 -0700" -->
<!-- isosent="20091002021727" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Profiling OpenMPI routines" -->
<!-- id="4AC562B7.8010901_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f93233e90910011448madbfab3w4c91c30875b311a5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Profiling OpenMPI routines<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 22:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Previous message:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aniruddha Marathe wrote:
<br>
<p><span class="quotelev1">&gt;I am trying to profile (get the call graph/call sequence of) Open MPI
</span><br>
<span class="quotelev1">&gt;communication routines using GNU Profiler (gprof) since the
</span><br>
<span class="quotelev1">&gt;communication calls are implemented using macros and it's harder to
</span><br>
<span class="quotelev1">&gt;trace them statically. In order to do that I compiled the OpenMPI
</span><br>
<span class="quotelev1">&gt;source code with following options supplied to 'configure' tool:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;./configure CFLAGS=-pg CPPFLAGS=-pg --enable-debug
</span><br>
<span class="quotelev1">&gt;--prefix=/home/amarathe/mpi/svn_openmpi/install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When I recompiled my test MPI application that does MPI_Send and
</span><br>
<span class="quotelev1">&gt;MPI_Recv with the new library, it generated gmon.out file as expected
</span><br>
<span class="quotelev1">&gt;(I ran it as 'mpirun -np 2 send_recv'). However, running 'gprof' on
</span><br>
<span class="quotelev1">&gt;this file didn't provide any information such as the call graphs for
</span><br>
<span class="quotelev1">&gt;MPI_Send or MPI_Recv. Following is the only function call that I see
</span><br>
<span class="quotelev1">&gt;in the output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ gprof send_recv gmon.out
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;%   cumulative   self              self     total
</span><br>
<span class="quotelev1">&gt;time   seconds   seconds    calls  Ts/call  Ts/call  name
</span><br>
<span class="quotelev1">&gt;0.00      0.00     0.00       25     0.00     0.00  data_start
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would like to know if anyone has done something similar with gprof
</span><br>
<span class="quotelev1">&gt;or any other open source tool with OpenMPI code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(I found a similar, fairly recent post on the mailing list, but it
</span><br>
<span class="quotelev1">&gt;seems to talk about profiling the MPI application itself and not the
</span><br>
<span class="quotelev1">&gt;OpenMPI library routines -
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2009/04/8999.php">http://www.open-mpi.org/community/lists/users/2009/04/8999.php</a>)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Open source tool or free download?  That is, do you really need to be 
<br>
able to see the tool's source code, or are you just interested in 
<br>
avoiding license fees?  In any case, since that post you mention, a FAQ 
<br>
has appeared on performance tools.  Check 
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
<br>
<p>You make an important distinction between profiling MPI applications 
<br>
versus profiling the library itself, and many tools will help just with 
<br>
applications.  But I've used Sun Studio for profiling Open MPI.  
<br>
Ideally, you should ./configure with -g among the compilation switches 
<br>
so that you get symbolic information about the library, but that isn't 
<br>
necessary.  The use of macros and dynamically loaded objects makes 
<br>
correlating profiles with source code hard, but it works.  When you 
<br>
bring the Analyzer up, I think you also have to unhide the symbols 
<br>
within the MPI library, which as I remember are hidden by default.  
<br>
Anyhow, it works and I've learned a lot doing things this way.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10870.php">Peter Lonjers: "[OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>Previous message:</strong> <a href="10868.php">Jeff Squyres: "Re: [OMPI users] memalign usage in OpenMPIand	it's	consequencesforTotalVIew"</a>
<li><strong>In reply to:</strong> <a href="10867.php">Aniruddha Marathe: "[OMPI users] Profiling OpenMPI routines"</a>
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
