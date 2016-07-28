<?
$subject_val = "Re: [OMPI users] checkpointing of NPB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 09:51:05 2012" -->
<!-- isoreceived="20120620135105" -->
<!-- sent="Wed, 20 Jun 2012 09:51:01 -0400" -->
<!-- isosent="20120620135101" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing of NPB" -->
<!-- id="CAANzjE=34Hk9nsQFq_NHi70AGSrAR=ZRz8GNQUmbLziCuSUgSQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMxrTy-Om+WvgSWvy9_3w4VardktUjPxT=caiSsFN3uuy0MJMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpointing of NPB<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 09:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19624.php">Ifeanyi: "[OMPI users]  checkpointing of NPB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Reply:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ifeanyi,
<br>
<p>I am usually the one that responds to checkpoint/restart questions,
<br>
but unfortunately I do not have time to look into this issue at the
<br>
moment (and probably won't for at least a few more months). There are
<br>
a few other developers that work on the checkpoint/restart
<br>
functionality that might be able to more immediately help you.
<br>
Hopefully they will chime in.
<br>
<p>At one point in time (about a year ago) I was able to
<br>
checkpoint/restart the NAS benchmarks (and other applications) without
<br>
issue. From the error message that you posted earlier, it seems that
<br>
something has broken in the 1.6 branch. Unfortunately, I do not have
<br>
any advice on an alternative branch to try. The C/R functionality in
<br>
the Open MPI trunk is known to be broken. There is a patch for the
<br>
trunk making its way through testing at the moment. Once that is
<br>
committed then you should be able to use the Open MPI trunk until
<br>
someone fixes the 1.6 branch.
<br>
<p>Sorry I cannot be of much help. Hopefully others can assist.
<br>
<p>-- Josh
<br>
<p>On Tue, Jun 19, 2012 at 1:22 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I configured the open mpi and it can checkpoint HPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, whenever I want to checkpoint NAS parallel benchmark it kills the
</span><br>
<span class="quotelev1">&gt; application without informative message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please how do I configure the openmpi 1.6 to checkpoint NPB? I really need a
</span><br>
<span class="quotelev1">&gt; help, I have been on this issue for the past few days without solution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ifeanyi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19636.php">Josh Hursey: "[OMPI users] Re: [OMPI users] &#187;&#216;&#184;&#180;: Re: [OMPI users] 2012/06/18 14:35:07 &#215;&#212;&#182;&#175;&#177;&#163;&#180;&#230;&#178;&#221;&#184;&#229;"</a>
<li><strong>In reply to:</strong> <a href="19624.php">Ifeanyi: "[OMPI users]  checkpointing of NPB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
<li><strong>Reply:</strong> <a href="19654.php">Ifeanyi: "Re: [OMPI users] checkpointing of NPB"</a>
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
