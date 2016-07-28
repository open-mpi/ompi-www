<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 13:30:07 2009" -->
<!-- isoreceived="20090112183007" -->
<!-- sent="Mon, 12 Jan 2009 13:30:03 -0500" -->
<!-- isosent="20090112183003" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="ea86ce220901121030g18859cdcg58ea5c7fbb0cad41_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="496B81EF.4040702_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock on large numbers of processors<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 13:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>In reply to:</strong> <a href="7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Justin,
<br>
I applied the fixes for this particular deadlock to the 1.3 code base
<br>
late last week, see ticket #1725:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1725">https://svn.open-mpi.org/trac/ompi/ticket/1725</a>
<br>
<p>This should fix the described problem, but I personally have not tested
<br>
to see if the deadlock in question is now gone.  Everyone should give
<br>
thanks to George for his efforts in tracking down the problem
<br>
and finding a solution.
<br>
&nbsp;&nbsp;-- Tim Mattox, the v1.3 gatekeeper
<br>
<p>On Mon, Jan 12, 2009 at 12:46 PM, Justin &lt;luitjens_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,  has this deadlock been fixed in the 1.3 source yet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 11, 2008, at 5:30 PM, Justin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The more I look at this bug the more I'm convinced it is with openMPI and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not our code.  Here is why:  Our code generates a communication/execution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schedule.  At each timestep this schedule is executed and all communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and execution is performed.  Our problem is AMR which means the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication schedule may change from time to time.  In this case the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schedule has not changed in many timesteps meaning the same communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; schedule is being used as the last X (x being around 20 in this case)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timesteps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our code does have a very large communication problem.  I have been able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to reduce the hang down to 16 processors and it seems to me the hang occurs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when he have lots of work per processor.  Meaning if I add more processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it may not hang but reducing processors makes it more likely to hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the status on the fix for this particular freelist deadlock?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George is actively working on it because it is the &quot;last&quot; issue blocking
</span><br>
<span class="quotelev2">&gt;&gt; us from releasing v1.3.  I fear that if he doesn't get it fixed by tonight,
</span><br>
<span class="quotelev2">&gt;&gt; we'll have to push v1.3 to next year (see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5029.php">http://www.open-mpi.org/community/lists/devel/2008/12/5029.php</a> and
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/12/7499.php">http://www.open-mpi.org/community/lists/users/2008/12/7499.php</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>In reply to:</strong> <a href="7678.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7682.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
