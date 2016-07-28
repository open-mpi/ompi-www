<?
$subject_val = "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 17:10:59 2009" -->
<!-- isoreceived="20090325211059" -->
<!-- sent="Wed, 25 Mar 2009 17:10:48 -0400" -->
<!-- isosent="20090325211048" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value" -->
<!-- id="4C81330E-F146-4F87-ABED-A075B812E67E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1238002161.13040.80.camel_at_hp-laptop" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 17:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5704.php">Aurélien Bouteiller: "[OMPI devel] MCA component dependency"</a>
<li><strong>Previous message:</strong> <a href="5702.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>In reply to:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was the result of an unfortunate commit. Starting from revision  
<br>
r20884 the header file ompi_config.h is not included anymore.
<br>
<p>Thanks for the report.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 25, 2009, at 13:29 , Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; One remark: after installation, I had to remove the '#include
</span><br>
<span class="quotelev1">&gt; &quot;ompi_config.h&quot;' line  in the &quot;include/peruse.h&quot; header to get PERUSE
</span><br>
<span class="quotelev1">&gt; applications to compile. Otherwise I got a missing header error  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; for ompi_config.h.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5704.php">Aurélien Bouteiller: "[OMPI devel] MCA component dependency"</a>
<li><strong>Previous message:</strong> <a href="5702.php">Samuel K. Gutierrez: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<li><strong>In reply to:</strong> <a href="5700.php">Kiril Dichev: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer	Negative	Value"</a>
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
