<?
$subject_val = "Re: [OMPI users] checkpointing of NPB";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 24 19:36:25 2012" -->
<!-- isoreceived="20120624233625" -->
<!-- sent="Mon, 25 Jun 2012 09:36:20 +1000" -->
<!-- isosent="20120624233620" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpointing of NPB" -->
<!-- id="CAMxrTy8ErmhKg4JZaTYjRCqMzvTO7xj16khVB983w=qcs8v2FQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=34Hk9nsQFq_NHi70AGSrAR=ZRz8GNQUmbLziCuSUgSQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-24 19:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19653.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19637.php">Josh Hursey: "Re: [OMPI users] checkpointing of NPB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh for the reply.
<br>
<p>I will try patching, and possibly other benchmarking.
<br>
<p>Regards,
<br>
Ifeanyi
<br>
<p><p>On Wed, Jun 20, 2012 at 11:51 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ifeanyi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am usually the one that responds to checkpoint/restart questions,
</span><br>
<span class="quotelev1">&gt; but unfortunately I do not have time to look into this issue at the
</span><br>
<span class="quotelev1">&gt; moment (and probably won't for at least a few more months). There are
</span><br>
<span class="quotelev1">&gt; a few other developers that work on the checkpoint/restart
</span><br>
<span class="quotelev1">&gt; functionality that might be able to more immediately help you.
</span><br>
<span class="quotelev1">&gt; Hopefully they will chime in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At one point in time (about a year ago) I was able to
</span><br>
<span class="quotelev1">&gt; checkpoint/restart the NAS benchmarks (and other applications) without
</span><br>
<span class="quotelev1">&gt; issue. From the error message that you posted earlier, it seems that
</span><br>
<span class="quotelev1">&gt; something has broken in the 1.6 branch. Unfortunately, I do not have
</span><br>
<span class="quotelev1">&gt; any advice on an alternative branch to try. The C/R functionality in
</span><br>
<span class="quotelev1">&gt; the Open MPI trunk is known to be broken. There is a patch for the
</span><br>
<span class="quotelev1">&gt; trunk making its way through testing at the moment. Once that is
</span><br>
<span class="quotelev1">&gt; committed then you should be able to use the Open MPI trunk until
</span><br>
<span class="quotelev1">&gt; someone fixes the 1.6 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I cannot be of much help. Hopefully others can assist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 19, 2012 at 1:22 AM, Ifeanyi &lt;ifeanyeg2012_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I configured the open mpi and it can checkpoint HPL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, whenever I want to checkpoint NAS parallel benchmark it kills
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; application without informative message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please how do I configure the openmpi 1.6 to checkpoint NPB? I really
</span><br>
<span class="quotelev1">&gt; need a
</span><br>
<span class="quotelev2">&gt; &gt; help, I have been on this issue for the past few days without solution
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Ifeanyi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19655.php">Mohamad Ali Rostami: "[OMPI users] MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19653.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19637.php">Josh Hursey: "Re: [OMPI users] checkpointing of NPB"</a>
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
