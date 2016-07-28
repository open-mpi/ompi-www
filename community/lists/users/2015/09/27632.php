<?
$subject_val = "Re: [OMPI users] C/R Enabled Debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 20 00:53:10 2015" -->
<!-- isoreceived="20150920045310" -->
<!-- sent="Sat, 19 Sep 2015 21:53:07 -0700" -->
<!-- isosent="20150920045307" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C/R Enabled Debugging" -->
<!-- id="06C4489D-C31D-4E2C-A858-2719AE20DEC1_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87wpvn4v5u.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] C/R Enabled Debugging<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-20 00:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27625.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhang
<br>
<p>We have seen little interest in binary level CR over the years, which is the primary reason the support has lapsed. The approach just doesn&#226;&#128;&#153;t scale very well. Once the graduate student who wrote it received his degree, there simply wasn&#226;&#128;&#153;t enough user-level interest to motivate the developer members to maintain it.
<br>
<p>In the interim, we&#226;&#128;&#153;ve seen considerable interest in application-level CR in its place. You might checkout the SCR library from LLNL as an example of what people are doing in that space:
<br>
<p><a href="https://computation.llnl.gov/project/scr/">https://computation.llnl.gov/project/scr/</a> &lt;<a href="https://computation.llnl.gov/project/scr/">https://computation.llnl.gov/project/scr/</a>&gt;
<br>
<p>We did have someone (another graduate student) recently work with the community to attempt to restore the binary-level CR support, but he didn&#226;&#128;&#153;t get a chance to complete it prior to graduating. So we are removing the leftover code from the 2.x release series until someone comes along with enough interest to repair it.
<br>
<p>Assuming that hasn&#226;&#128;&#153;t happened before sometime next year, I might take a shot at it then - but I won&#226;&#128;&#153;t have any time to work on it before next spring at the earliest, and as I said, it isn&#226;&#128;&#153;t clear there is a significant user base for binary-level CR with the shift to application-level systems.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Sep 18, 2015, at 8:14 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;gzzhang_at_[hidden]&quot; &lt;gzzhang_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Team 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use the MPI to do some test and study on the C/R
</span><br>
<span class="quotelev2">&gt;&gt; enabled debugging.  Professor Josh Hursey said that the feature never
</span><br>
<span class="quotelev2">&gt;&gt; made it into a release so it was only ever available on the trunk,
</span><br>
<span class="quotelev2">&gt;&gt; However , since that time the C/R functionality has fallen into
</span><br>
<span class="quotelev2">&gt;&gt; disrepair. It is most likely broken in the trunk today. T tried with
</span><br>
<span class="quotelev2">&gt;&gt; the current openmpi-master sourcecode, it can be configure, but can't
</span><br>
<span class="quotelev2">&gt;&gt; be make successful because bugs still existing according to the log.
</span><br>
<span class="quotelev2">&gt;&gt; Is there any possible that the history openmpi-developer code which
</span><br>
<span class="quotelev2">&gt;&gt; supports C/R enabled debugging can be download . I appreciate your
</span><br>
<span class="quotelev2">&gt;&gt; offer to help us .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does seem an important deficiency, and a good reason to stay with
</span><br>
<span class="quotelev1">&gt; 1.6 or use mpich.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, DMTCP is supposed to be able to checkpoint over TCP and
</span><br>
<span class="quotelev1">&gt; Infiniband without any extra support.  I'm intending to try it soon and
</span><br>
<span class="quotelev1">&gt; would be interested to know any relevant experience.  There used to be a
</span><br>
<span class="quotelev1">&gt; note about not working over IB with some OMPI implementation detail
</span><br>
<span class="quotelev1">&gt; (URC?) but I can't find that now, and the web site implies it should
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See <a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27625.php">http://www.open-mpi.org/community/lists/users/2015/09/27625.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Previous message:</strong> <a href="27631.php">George Bosilca: "Re: [OMPI users] Have Trouble Setting Up a Ring Network Using Open MPI"</a>
<li><strong>In reply to:</strong> <a href="27625.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27633.php">Jorge D'Elia: "[OMPI users] send() to socket 9 failed with the 1.10.0 version but not with 1.8.7 one."</a>
<li><strong>Reply:</strong> <a href="27713.php">Dave Love: "Re: [OMPI users] C/R Enabled Debugging"</a>
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
