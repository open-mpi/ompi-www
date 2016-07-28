<?
$subject_val = "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 11:39:42 2009" -->
<!-- isoreceived="20090929153942" -->
<!-- sent="Tue, 29 Sep 2009 08:40:30 -0700" -->
<!-- isosent="20090929154030" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?" -->
<!-- id="4AC22A6E.5000105_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e76aa17f0909282329m1f1945b1w45f65b917b1e32af_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 11:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>In reply to:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If MPE and Vampir represent the class of tools you're interested in, 
<br>
there is a performance-tool FAQ at 
<br>
<a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a> listing some other tools 
<br>
in this class.
<br>
<p>Note that these are really postmortem tools.  That is, you typically run 
<br>
the code first and then look at results later.  In certain cases, you 
<br>
can start looking at results while the job is still running, but mostly 
<br>
these tools are built to do postmortem analysis.
<br>
<p>That may still work for you.  E.g., Sun Studio Analyzer (which happens 
<br>
to be the only one of the tools I know well) allows you to look at 
<br>
in-flight messages or bytes -- either in general or for a specific 
<br>
connection.
<br>
<p>But I'm guessing these are indirect ways of looking at what you really 
<br>
want to know.  It sounds like you want to be able to watch some % 
<br>
utilization of a hardware interface as the program is running.  I 
<br>
*think* these tools (the ones on the FAQ, including MPE, Vampir, and Sun 
<br>
Studio) are not of that class.
<br>
<p>But maybe the indirect, postmortem methods suffice.  You decide.
<br>
<p>Matthieu Brucher wrote:
<br>
<p><span class="quotelev1">&gt;You can try MPE (free) or Vampir (not free, but can be integrated
</span><br>
<span class="quotelev1">&gt;inside OpenMPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2009/9/29 Rahul Nabar &lt;rpnabar_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have a code that seems to run about 40% faster when I bond together
</span><br>
<span class="quotelev2">&gt;&gt;twin eth interfaces. The question, of course, arises: is it really
</span><br>
<span class="quotelev2">&gt;&gt;producing so much traffic to keep twin 1 Gig eth interfaces busy? I
</span><br>
<span class="quotelev2">&gt;&gt;don't really believe this but need a way to check.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What are good tools to monitior the MPI performance of a running job.
</span><br>
<span class="quotelev2">&gt;&gt;Basically what throughput loads is it imposing on the eth interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The code does not seem to produce much of disk I/O as profiled via
</span><br>
<span class="quotelev2">&gt;&gt;strace (if at all NFS I/O is a bottleneck).
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>In reply to:</strong> <a href="10809.php">Matthieu Brucher: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Reply:</strong> <a href="10817.php">Rahul Nabar: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
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
