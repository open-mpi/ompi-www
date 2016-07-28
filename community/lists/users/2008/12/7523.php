<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 15:24:32 2008" -->
<!-- isoreceived="20081212202432" -->
<!-- sent="Fri, 12 Dec 2008 16:22:16 -0400" -->
<!-- isosent="20081212202216" -->
<!-- name="douglas.guptill_at_[hidden]" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="20081212202216.GA26074_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="493D7202.30104_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> <a href="mailto:douglas.guptill_at_[hidden]?Subject=Re:%20[OMPI%20users]%20trouble%20using%20--mca%20mpi_yield_when_idle%201"><em>douglas.guptill_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-12-12 15:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Eugene:
<br>
<p>On Mon, Dec 08, 2008 at 11:14:10AM -0800, Eugene Loh wrote:
<br>
<p>...&lt;html snipped/edited&gt;...
<br>
<p><span class="quotelev2">&gt;&gt; Proceeding from that, it seems that &quot;mpi_recv&quot; is implemented as 
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;poll forever until the message comes&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and NOT as 
</span><br>
<span class="quotelev2">&gt;&gt;    &quot;sleep until the message comes&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I had assumed, until now, that mpi_recv would be implemented as the
</span><br>
<span class="quotelev2">&gt;&gt; second.
</span><br>
<p><span class="quotelev1">&gt; It isn't a binary situation.&amp;nbsp; The first extreme you mention is &quot;consume
</span><br>
<span class="quotelev1">&gt; a lot of resources and spring into action as soon as there is work to
</span><br>
<span class="quotelev1">&gt; do.&quot;&amp;nbsp; The second extreme you mention is &quot;don't use any extra resources,
</span><br>
<span class="quotelev1">&gt; but take a loooong time to wake up once there is something to do&quot;.&amp;nbsp;
</span><br>
<span class="quotelev1">&gt; There are a bunch of alternatives in-between.&amp;nbsp; E.g., &quot;don't use as much
</span><br>
<span class="quotelev1">&gt; resource and wake up kind of fast when there is something to do.&quot;&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's yield behavior is such an in-between alternative.&lt;br&gt;
</span><br>
<p>Ah...I didn't realize there were more than two alternatives.
<br>
<p><span class="quotelev1">&gt; I could imagine another alternative.&amp;nbsp; Construct a wrapper function that
</span><br>
<span class="quotelev1">&gt; intercepts MPI_Recv and turn it into something like&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; PMPI_Irecv&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; while ( ! done ) {&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp; nanosleep(short);&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &amp;nbsp;&amp;nbsp;&amp;nbsp; PMPI_Test(&amp;amp;done);&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; }&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how useful this would be for your particular case.&lt;br&gt;
</span><br>
<span class="quotelev1">&gt; &lt;br&gt;
</span><br>
<p>Thank you for the suggestion.  I didn't know about &quot;PMPI_Irecv&quot; (my
<br>
question was what/where did the &quot;P&quot; prefix to MPI come from?) so I
<br>
went back to the MPI standard, and re-read the description of
<br>
&quot;mpi_send&quot; and &quot;mpi_recv&quot;.
<br>
<p>Based on my re-read of the MPI standard, it appears that I may have
<br>
slightly mis-stated my issue.  The spin is probably taking place in
<br>
&quot;mpi_send&quot;.  &quot;mpi_send&quot;, according to my understanding of the MPI
<br>
standard, may not exit until a matching &quot;mpi_recv&quot; has been initiated,
<br>
or completed.  At least that is the conclusion I came to.
<br>
<p>However my complaint - sorry, I wish I could think of a better word -
<br>
remains.  It appears that openmpi spin-waits, as opposed to, say,
<br>
going to sleep and waiting for a wake-up call.  Like a semaphore - if
<br>
those things still exist.
<br>
<p>Regards,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
