<?
$subject_val = "Re: [OMPI users] getc in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 15:26:03 2010" -->
<!-- isoreceived="20100512192603" -->
<!-- sent="Wed, 12 May 2010 15:25:58 -0400" -->
<!-- isosent="20100512192558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getc in openmpi" -->
<!-- id="24E19E76-6D8A-4A72-A4E2-FF8A51845EB8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinah2N5etk46z1_YLjln3nObGZ8l-aP0485gFq6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getc in openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 15:25:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 3:01 PM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; Please correct me if I'm wrong, but I believe OpenMPI sends
</span><br>
<span class="quotelev1">&gt; stdin/stdout from the other ranks back to rank 0 so that the output is
</span><br>
<span class="quotelev1">&gt; displayed as the stdin of mpirun and the other way around with
</span><br>
<span class="quotelev1">&gt; stdout/stderr. Otherwise it wouldn't be possible to even see the
</span><br>
<span class="quotelev1">&gt; output from the other ranks. I guess that could make things slower.
</span><br>
<p>Correct, OMPI does this.  The original question asked if we overrode getc(); we do not.  Open MPI sends stdin and receives stdout/stderr via pipes to MPI processes.
<br>
<p>The phrasing of the original question also led me to believe that the program was being run without mpirun, but that could be a bad assumption on my part.  Another relevant data point here would be exactly what &quot;4x slower&quot; means.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13036.php">Ralph Castain: "Re: [OMPI users] opal_cr_tmp_dir"</a>
<li><strong>Previous message:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13034.php">Fernando Lemos: "Re: [OMPI users] getc in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
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
