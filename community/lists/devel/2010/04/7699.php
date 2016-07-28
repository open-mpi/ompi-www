<?
$subject_val = "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 11:12:30 2010" -->
<!-- isoreceived="20100406151230" -->
<!-- sent="Tue, 06 Apr 2010 11:11:51 -0400" -->
<!-- isosent="20100406151151" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="201004061111.51717.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BBB4027.8050005_at_docawk.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 11:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Oliver,
<br>
Hmm, this is really a teaser...
<br>
I haven't seen such a drastic behavior, and haven't read of any on the list.
<br>
<p>One thing however, that might interfere is process binding.
<br>
Could You make sure, that processes are not bound to cores (default in 1.4.1):
<br>
with mpirun --bind-to-none 
<br>
<p>Just an idea...
<br>
<p>Regards,
<br>
Rainer
<br>
<p>On Tuesday 06 April 2010 10:07:35 am Oliver Geisler wrote:
<br>
<span class="quotelev1">&gt; Hello Devel-List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a little bit helpless about this matter. I already posted in the
</span><br>
<span class="quotelev1">&gt; user list. In case you don't read the users list, I post in here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the original posting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12474.php">http://www.open-mpi.org/community/lists/users/2010/03/12474.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short:
</span><br>
<span class="quotelev1">&gt; Switching from kernel 2.6.23 to 2.6.24 (and up), using openmpi 1.2.7-rc2
</span><br>
<span class="quotelev1">&gt; (I know outdated, but in debian stable, and same results with 1.4.1)
</span><br>
<span class="quotelev1">&gt; increases communication times between processes (essentially between one
</span><br>
<span class="quotelev1">&gt; master and several slave processes). This is regardless of whether the
</span><br>
<span class="quotelev1">&gt; processes are local only or communication is over ethernet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did anybody witness such a behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideas what should I test for?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What additional information should I provide for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your time
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oli
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="7700.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
