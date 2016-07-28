<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 10:01:26 2010" -->
<!-- isoreceived="20101206150126" -->
<!-- sent="Mon, 6 Dec 2010 16:01:16 +0100" -->
<!-- isosent="20101206150116" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="201012061601.21610.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CFCED21.1040604_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 10:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 06 December 2010 15:03:13 Mathieu Gontier wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A small update.
</span><br>
<span class="quotelev1">&gt; My colleague made a mistake and there is no arithmetic performance
</span><br>
<span class="quotelev1">&gt; issue. Sorry for bothering you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevertheless, one can observed some differences between MPICH and
</span><br>
<span class="quotelev1">&gt; OpenMPI from 25% to 100% depending on the options we are using into our
</span><br>
<span class="quotelev1">&gt; software. Tests are lead on a single SGI node on 6 or 12 processes, and
</span><br>
<span class="quotelev1">&gt; thus, I am focused on the sm option.
</span><br>
<p>A few previous threads on sm performance have been related to what /tmp is. 
<br>
OpenMPI relies on (or at least used to rely on) this being backed by page 
<br>
cache (tmpfs, a local ext3 or similar). I'm not sure what the behaviour is in 
<br>
the latest version but then again you didn't say which version you've tried.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15009/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15008.php">Grzegorz Maj: "[OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15010.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
