<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 13:34:07 2012" -->
<!-- isoreceived="20120315173407" -->
<!-- sent="Thu, 15 Mar 2012 13:34:02 -0400 (EDT)" -->
<!-- isosent="20120315173402" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203151320330.31702_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CFDFF8FC-6A54-494F-B2F7-F831077599BD_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 13:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18783.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Mar 2012 at 4:41pm, Reuti wrote
<br>
<p><span class="quotelev1">&gt; Am 15.03.2012 um 15:50 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 15, 2012, at 8:46 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 15.03.2012 um 15:37 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW: I see the problem. Our parser was apparently written assuming 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every line was a unique host, so it doesn't even check to see if 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there is duplication. Easy fix - can shoot it to you today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But even with the fix the nice value will be the same for all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes forked there. Either all have the nice value of his low 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority queue or the high priority queue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Agreed - nothing I can do about that, though. We only do the one qrsh 
</span><br>
<span class="quotelev2">&gt;&gt; call, so the daemons are going to fall into a single queue, and so will 
</span><br>
<span class="quotelev2">&gt;&gt; all their children. In this scenario, it isn't clear to me (from this 
</span><br>
<span class="quotelev2">&gt;&gt; discussion) that I can control which queue gets used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<p>Which I understand.  Our queue setup is admittedly a bit wonky (which is
<br>
probably why I'm the first one to have this issue).  I'm much more 
<br>
concerned with things not crashing than with them absolutely having the 
<br>
&quot;right&quot; nice levels.  :)
<br>
<p><span class="quotelev2">&gt;&gt; Should I?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't speak for the community. Personally I would say: don't 
</span><br>
<span class="quotelev1">&gt; distribute parallel jobs among different queues at all, as some 
</span><br>
<span class="quotelev1">&gt; applications will use some internal communication about the environment 
</span><br>
<span class="quotelev1">&gt; variables of the master process to distribute them to the slaves (even 
</span><br>
<span class="quotelev1">&gt; if SGE's `qrsh -inherit ...` is called without -V, and even if Open MPI 
</span><br>
<span class="quotelev1">&gt; is not told to forward and specific environment variable). If you have a 
</span><br>
<span class="quotelev1">&gt; custom application it can work of course, but with closed source ones 
</span><br>
<span class="quotelev1">&gt; you can only test and get the experience whether it's working or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to mention the timing issue of differently niced processes. 
</span><br>
<span class="quotelev1">&gt; Adjusting the SGE setup of the OP would be the smarter way IMO.
</span><br>
<p>And I agree with that as well.  I understand if the decision is made to 
<br>
leave the parser the way it is, given that my setup is outside the norm.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18783.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18786.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
