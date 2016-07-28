<?
$subject_val = "Re: [OMPI users] how to find the binding of each rank on the local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 03:29:08 2013" -->
<!-- isoreceived="20130211082908" -->
<!-- sent="Mon, 11 Feb 2013 13:59:04 +0530" -->
<!-- isosent="20130211082904" -->
<!-- name="Kranthi Kumar" -->
<!-- email="kranthipls_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to find the binding of each rank on the local machine" -->
<!-- id="CAL97QqiNHYWSPRar3L5bqY=SS9FHhdA1hfGf=QVopyfp+ghnnQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL97QqiAWaZu-LWhtLtvz16xsmSiyuqPLjMOE82CQ=Fbssvhrg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to find the binding of each rank on the local machine<br>
<strong>From:</strong> Kranthi Kumar (<em>kranthipls_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 03:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21359.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to find the binding of each rank on the local	machine"</a>
<li><strong>Previous message:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
<li><strong>In reply to:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sir,
<br>
<p>I was following your discussion.
<br>
<p>Brice Sir's explanation of what I want is correct.
<br>
<p>Your last reply was asking me to look for ompi_proc_t for the process in
<br>
the proc_flafs field if I am correct. You said that the defintion of the
<br>
values will be in opal/mca/hwloc/hwloc.h. I checked in this file in OpenMPI
<br>
1.6. I couldn't find it. Is it available in the later versions of OpenMPI.
<br>
<p><p>Thank You
<br>
<p>The locality of every process is stored on the ompi_proc_t for that process
<br>
in the proc_flags field. You can find the definition of the values in
<br>
opal/mca/hwloc/hwloc.h.
<br>
On Sun, Feb 10, 2013 at 10:16 AM, Kranthi Kumar &lt;kranthipls_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello Sir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need a way to find out where each rank runs from inside the
</span><br>
<span class="quotelev1">&gt; implementation?
</span><br>
<span class="quotelev1">&gt; How do I  know the binding of each rank in an MPI application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kranthi
</span><br>
<p><p><p><p><pre>
-- 
Kranthi
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21359.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to find the binding of each rank on the local	machine"</a>
<li><strong>Previous message:</strong> <a href="21357.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3493: Handle the case where rankfile provides theallocation"</a>
<li><strong>In reply to:</strong> <a href="21343.php">Kranthi Kumar: "[OMPI users] how to find the binding of each rank on the local machine"</a>
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
