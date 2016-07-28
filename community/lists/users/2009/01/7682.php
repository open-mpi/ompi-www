<?
$subject_val = "Re: [OMPI users] Deadlock on large numbers of processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 13:41:55 2009" -->
<!-- isoreceived="20090112184155" -->
<!-- sent="Mon, 12 Jan 2009 13:41:49 -0500" -->
<!-- isosent="20090112184149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock on large numbers of processors" -->
<!-- id="C9471BE8-25EC-46E8-AB79-DD6BC6656777_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220901121030g18859cdcg58ea5c7fbb0cad41_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 13:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justin --
<br>
<p>Could you actually give your code a whirl with 1.3rc3 to ensure that  
<br>
it fixes the problem for you?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
<br>
<p><p>On Jan 12, 2009, at 1:30 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hi Justin,
</span><br>
<span class="quotelev1">&gt; I applied the fixes for this particular deadlock to the 1.3 code base
</span><br>
<span class="quotelev1">&gt; late last week, see ticket #1725:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1725">https://svn.open-mpi.org/trac/ompi/ticket/1725</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should fix the described problem, but I personally have not  
</span><br>
<span class="quotelev1">&gt; tested
</span><br>
<span class="quotelev1">&gt; to see if the deadlock in question is now gone.  Everyone should give
</span><br>
<span class="quotelev1">&gt; thanks to George for his efforts in tracking down the problem
</span><br>
<span class="quotelev1">&gt; and finding a solution.
</span><br>
<span class="quotelev1">&gt;  -- Tim Mattox, the v1.3 gatekeeper
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 12, 2009 at 12:46 PM, Justin &lt;luitjens_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,  has this deadlock been fixed in the 1.3 source yet?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 11, 2008, at 5:30 PM, Justin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The more I look at this bug the more I'm convinced it is with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openMPI and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not our code.  Here is why:  Our code generates a communication/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; schedule.  At each timestep this schedule is executed and all  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and execution is performed.  Our problem is AMR which means the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication schedule may change from time to time.  In this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; schedule has not changed in many timesteps meaning the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; schedule is being used as the last X (x being around 20 in this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timesteps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our code does have a very large communication problem.  I have  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; been able
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to reduce the hang down to 16 processors and it seems to me the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hang occurs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when he have lots of work per processor.  Meaning if I add more  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it may not hang but reducing processors makes it more likely to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hang.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the status on the fix for this particular freelist  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlock?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George is actively working on it because it is the &quot;last&quot; issue  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blocking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us from releasing v1.3.  I fear that if he doesn't get it fixed by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tonight,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we'll have to push v1.3 to next year (see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5029.php">http://www.open-mpi.org/community/lists/devel/2008/12/5029.php</a> and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/12/7499.php">http://www.open-mpi.org/community/lists/users/2008/12/7499.php</a>).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7681.php">Tim Mattox: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Reply:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
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
