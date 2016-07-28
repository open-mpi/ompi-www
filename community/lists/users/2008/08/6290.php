<?
$subject_val = "Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 14:15:39 2008" -->
<!-- isoreceived="20080807181539" -->
<!-- sent="Thu, 07 Aug 2008 12:15:34 -0600" -->
<!-- isosent="20080807181534" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran" -->
<!-- id="489B3BC6.60407_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4676E766-0C53-47BB-96ED-058342EC66D4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran<br>
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 14:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>In reply to:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry I dropped attention on this thread; Ralph posted a reply earlier 
</span><br>
<span class="quotelev1">&gt; but it got rejected because he's not a member of the list.  Here's his 
</span><br>
<span class="quotelev1">&gt; reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I will coordinate with Ralf and try to add Lahey support to Libtool.
<br>
<p>Craig
<br>
<p><p><p><span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralf Wildenhues &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: August 4, 2008 2:53:49 PM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Craig, Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Jeff Squyres wrote on Sun, Aug 03, 2008 at 03:20:17PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI uses GNU Libtool to build itself.  I suspect that perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Libtool doesn't know the Right Mojo to understand the Lahey compilers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that's why you're seeing this issue.  As such, it might well be that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your workaround is the best one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralf -- we build the OMPI 1.2 series with that same &quot;late beta&quot; Libtool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2.1a) that we have forever.  Do you recall offhand if Libtool 2.x 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.2 supported the Lahey fortran compilers?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Libtool does not yet support Lahey.  Neither Absoft Fortran 90
</span><br>
<span class="quotelev2">&gt;&gt; (which was asked about a while ago).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you would like to see support for Lahey and Absoft in Libtool,
</span><br>
<span class="quotelev2">&gt;&gt; here's what you can do that really helps getting there faster:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - get me some access to these compilers.  A login to a system
</span><br>
<span class="quotelev2">&gt;&gt;  with one of them would be great, but a long-term trial version
</span><br>
<span class="quotelev2">&gt;&gt;  (2 weeks helps little for later regression testing) would be
</span><br>
<span class="quotelev2">&gt;&gt;  better than nothing, too (sometimes a friendly email is all it
</span><br>
<span class="quotelev2">&gt;&gt;  takes for this);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - alternatively, a volunteer that has access to the compilers,
</span><br>
<span class="quotelev2">&gt;&gt;  to help me with the port, or do the porting herself.  This will
</span><br>
<span class="quotelev2">&gt;&gt;  require installing git Libtool and running its testsuite anywhere
</span><br>
<span class="quotelev2">&gt;&gt;  between once and several times, and reading and sending some emails
</span><br>
<span class="quotelev2">&gt;&gt;  with patches resp. test results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, here's some tips for workaround building: edit the generated
</span><br>
<span class="quotelev2">&gt;&gt; libtool scripts (there are a few in the OpenMPI build tree) and set
</span><br>
<span class="quotelev2">&gt;&gt; pic_flag (to --shared), archive_cmds (to contain --shared), and
</span><br>
<span class="quotelev2">&gt;&gt; archive_export_cmds correctly everywhere.  These variables are set once
</span><br>
<span class="quotelev2">&gt;&gt; for each compiler: the C compiler comes at the beginning, all other ones
</span><br>
<span class="quotelev2">&gt;&gt; near the end of the script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6291.php">Tim Mattox: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>Previous message:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<li><strong>In reply to:</strong> <a href="6289.php">Jeff Squyres: "[OMPI users] Fwd: Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
