<?
$subject_val = "Re: [OMPI users] write out mca parameters after mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 03:57:29 2010" -->
<!-- isoreceived="20101130085729" -->
<!-- sent="Tue, 30 Nov 2010 10:07:38 +0100" -->
<!-- isosent="20101130090738" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] write out mca parameters after mpi_init" -->
<!-- id="1291108058.1869.10016.camel_at_B014522" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CF4B53A.4080105_at_zmaw.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] write out mca parameters after mpi_init<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 04:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
<li><strong>In reply to:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2010-11-30 at 09:26 +0100, Luis Kornblueh wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it possible to do something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL mpi_init(...
</span><br>
<span class="quotelev1">&gt; CALL ompi_print_used_mca_setup
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to see how finally the used mca parameters are set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Luis,
<br>
<p>There is an mca parameter &quot;mpi_show_mca_params&quot; that is supposed to do
<br>
that.
<br>
<p>You can also specify a file name via another mca parameter
<br>
&quot;mpi_show_mca_params_file&quot;: in that case the resulting output will be
<br>
redirected to that file.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14942.php">Hicham Mouline: "[OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
<li><strong>In reply to:</strong> <a href="14940.php">Luis Kornblueh: "[OMPI users] write out mca parameters after mpi_init"</a>
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
