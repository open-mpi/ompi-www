<?
$subject_val = "Re: [OMPI users] intermittent node file error running with torque/maui integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 10:04:43 2013" -->
<!-- isoreceived="20130920140443" -->
<!-- sent="Fri, 20 Sep 2013 10:04:43 -0400" -->
<!-- isosent="20130920140443" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent node file error running with torque/maui integration" -->
<!-- id="75E58DCB-47A5-45AC-A9FB-35C0478C22CC_at_nrl.navy.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B695C61E-461C-47E1-8634-FB492CA04947_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent node file error running with torque/maui integration<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 10:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2013, at 9:55 AM, Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is completely unrepeatable - resubmitting the same job almost
</span><br>
<span class="quotelev1">&gt; always works the second time around.  The line appears to be
</span><br>
<span class="quotelev1">&gt; associated with looking for the torque/maui generated node file,
</span><br>
<span class="quotelev1">&gt; and when I do something like
</span><br>
<span class="quotelev1">&gt;  echo $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;  cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; it appears that the file is present and correct.  
</span><br>
<p>Never mind - I was sure that my earlier tests showed that the $PBS_NODEFILE
<br>
was there, but now it seems like every time the job fails it's because this
<br>
file really is missing.  Time to check why torque isn't always creating
<br>
the nodefile.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Previous message:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>In reply to:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22688.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
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
