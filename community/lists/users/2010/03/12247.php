<?
$subject_val = "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 11:07:02 2010" -->
<!-- isoreceived="20100304160702" -->
<!-- sent="Thu, 4 Mar 2010 11:06:56 -0500" -->
<!-- isosent="20100304160656" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint" -->
<!-- id="86105F29-A502-4000-B689-61BCFAD52A47_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="201003041107482652456_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 11:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12248.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="12235.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is some overhead involved when activating the current C/R functionality in Open MPI due to the wrapping of the internal point-to-point stack. The wrapper (CRCP framework) tracks the signature of each message (not the buffer, so constant time for any size MPI message) so that when we need to quiesce the network we know of all the outstanding messages that need to be drained.
<br>
<p>So there is an overhead, but it should not be as significant as you have mentioned. I looked at some of the performance aspects in the paper at the link below:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/hpdc-2009/">http://www.open-mpi.org/papers/hpdc-2009/</a>
<br>
Though I did not look at HPL explicitly in this paper (just NPB, GROMACS, and NetPipe), I have in testing and the time difference was definitely not 2x (cannot recall the exact differences at the moment).
<br>
<p>Can you tell me a bit about your setup:
<br>
&nbsp;- What version of Open MPI are you using?
<br>
&nbsp;- What configure options are you using?
<br>
&nbsp;- What MCA parameters are you using?
<br>
&nbsp;- Are you building from a release tarball or a SVN checkout?
<br>
<p>-- Josh
<br>
<p><p>On Mar 3, 2010, at 10:07 PM, &#194;&#237;&#201;&#217;&#189;&#220; wrote:
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2010-03-04
</span><br>
<span class="quotelev1">&gt; &#194;&#237;&#201;&#217;&#189;&#220;
</span><br>
<span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt;        I want to use blcr  and openmpi to checkpoint, now I can save check point and restart my work successfully. How erver I find the option &quot;--am ft-enable-cr&quot; will case large cost . For example ,  when I run my HPL job  without and with the option &quot;--am ft-enable-cr&quot; on 4 hosts (32 process, IB network) respectively , the time costed are   8m21.180s    and 16m37.732s respctively. it is should be noted that I did not save the checkpoint when I run the job, the additional cost is caused by &quot;--am ft-enable-cr&quot; independently. Why can the optin &quot;--am ft-enable-cr&quot;  case so much system  cost? Is it normal? How can I solve the problem.
</span><br>
<span class="quotelev1">&gt;       I also test  other mpi applications, the problem still exists.   
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12248.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="12246.php">Joshua Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>In reply to:</strong> <a href="12235.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
<li><strong>Reply:</strong> <a href="12255.php">马少杰: "Re: [OMPI users] low efficiency when we use --am ft-enable-cr to checkpoint"</a>
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
