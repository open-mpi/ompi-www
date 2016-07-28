<?
$subject_val = "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 20:07:48 2014" -->
<!-- isoreceived="20141007000748" -->
<!-- sent="Mon, 6 Oct 2014 20:07:46 -0400" -->
<!-- isosent="20141007000746" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Update/patch to check/opal_check_pmi.m4" -->
<!-- id="CAG4F6z8_N-yiRt0ZaW_QkwSem1y1MNTEL_QWgJTweeUB56wT0g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54B12FAC-0C03-4524-9A13-017717B5D8D1_at_colorado.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Update/patch to check/opal_check_pmi.m4<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 20:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We only link in libpmi(2).so if specifically requested to do so via
<br>
&quot;--with-pmi&quot; configure flag. It is not automatic.
<br>
<p>Josh
<br>
<p>On Mon, Oct 6, 2014 at 3:28 PM, Timothy Brown &lt;Timothy.Brown-1_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not too sure if this is the right list, or if I should be posting to
</span><br>
<span class="quotelev1">&gt; the dev list. Please let me know if I&#226;&#128;&#153;m in the wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use SLURM (14.03.7) and have been trying to get OpenMPI (1.8.3) to work
</span><br>
<span class="quotelev1">&gt; with `srun`. It seems that the M4 file to check for PMI doesn&#226;&#128;&#153;t work in our
</span><br>
<span class="quotelev1">&gt; situation. Where we have both a lib64 and lib directory within SLURM. The
</span><br>
<span class="quotelev1">&gt; lib64 directory only contains perl modules, while the lib directory
</span><br>
<span class="quotelev1">&gt; contains the PMI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By changing the M4 AS_IF macro in config/opal_check_pmi.m4 to check for
</span><br>
<span class="quotelev1">&gt; the library .so and to have an else if test. The configuration script finds
</span><br>
<span class="quotelev1">&gt; the library. Which means OpenMPI builds with PMI support and now we have
</span><br>
<span class="quotelev1">&gt; - srun
</span><br>
<span class="quotelev1">&gt; - mpirun
</span><br>
<span class="quotelev1">&gt; - mpiexec
</span><br>
<span class="quotelev1">&gt; all working properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have created a patch against the git master and it&#226;&#128;&#153;s attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Timothy
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25467.php">http://www.open-mpi.org/community/lists/users/2014/10/25467.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25469/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25470.php">Timothy Brown: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
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
