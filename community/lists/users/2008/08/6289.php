<?
$subject_val = "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 08:42:22 2008" -->
<!-- isoreceived="20080807124222" -->
<!-- sent="Thu, 7 Aug 2008 08:42:16 -0400" -->
<!-- isosent="20080807124216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran" -->
<!-- id="4676E766-0C53-47BB-96ED-058342EC66D4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080804185348.GB9867_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 08:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I dropped attention on this thread; Ralph posted a reply earlier  
<br>
but it got rejected because he's not a member of the list.  Here's his  
<br>
reply.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Ralf Wildenhues &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 4, 2008 2:53:49 PM EDT
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey  
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Craig, Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Sun, Aug 03, 2008 at 03:20:17PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI uses GNU Libtool to build itself.  I suspect that perhaps
</span><br>
<span class="quotelev2">&gt;&gt; Libtool doesn't know the Right Mojo to understand the Lahey  
</span><br>
<span class="quotelev2">&gt;&gt; compilers,
</span><br>
<span class="quotelev2">&gt;&gt; and that's why you're seeing this issue.  As such, it might well be  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; your workaround is the best one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralf -- we build the OMPI 1.2 series with that same &quot;late beta&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; Libtool
</span><br>
<span class="quotelev2">&gt;&gt; (2.1a) that we have forever.  Do you recall offhand if Libtool 2.x  
</span><br>
<span class="quotelev2">&gt;&gt; before
</span><br>
<span class="quotelev2">&gt;&gt; 2.2 supported the Lahey fortran compilers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Libtool does not yet support Lahey.  Neither Absoft Fortran 90
</span><br>
<span class="quotelev1">&gt; (which was asked about a while ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you would like to see support for Lahey and Absoft in Libtool,
</span><br>
<span class="quotelev1">&gt; here's what you can do that really helps getting there faster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - get me some access to these compilers.  A login to a system
</span><br>
<span class="quotelev1">&gt;  with one of them would be great, but a long-term trial version
</span><br>
<span class="quotelev1">&gt;  (2 weeks helps little for later regression testing) would be
</span><br>
<span class="quotelev1">&gt;  better than nothing, too (sometimes a friendly email is all it
</span><br>
<span class="quotelev1">&gt;  takes for this);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - alternatively, a volunteer that has access to the compilers,
</span><br>
<span class="quotelev1">&gt;  to help me with the port, or do the porting herself.  This will
</span><br>
<span class="quotelev1">&gt;  require installing git Libtool and running its testsuite anywhere
</span><br>
<span class="quotelev1">&gt;  between once and several times, and reading and sending some emails
</span><br>
<span class="quotelev1">&gt;  with patches resp. test results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, here's some tips for workaround building: edit the  
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; libtool scripts (there are a few in the OpenMPI build tree) and set
</span><br>
<span class="quotelev1">&gt; pic_flag (to --shared), archive_cmds (to contain --shared), and
</span><br>
<span class="quotelev1">&gt; archive_export_cmds correctly everywhere.  These variables are set  
</span><br>
<span class="quotelev1">&gt; once
</span><br>
<span class="quotelev1">&gt; for each compiler: the C compiler comes at the beginning, all other  
</span><br>
<span class="quotelev1">&gt; ones
</span><br>
<span class="quotelev1">&gt; near the end of the script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Previous message:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>Reply:</strong> <a href="6290.php">Craig Tierney: "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
