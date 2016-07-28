<?
$subject_val = "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 15:01:42 2014" -->
<!-- isoreceived="20140826190142" -->
<!-- sent="Tue, 26 Aug 2014 22:01:21 +0300" -->
<!-- isosent="20140826190121" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()" -->
<!-- id="CAEcYPwAnQmd3pzqVV_LBpiD+3yz_+cSyzrsa1AdBqBvHetxd3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkW_JgQXJdJjQhSHjmcgn6tU6+hD34=vFHg+DoGWqYsC5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 15:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26 August 2014 21:29, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The MPI standard clearly states (in 8.7.1 Allowing User Functions at Process
</span><br>
<span class="quotelev1">&gt; Termination) that the mechanism you describe is only allowed on
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SELF. The most relevant part starts at line 14.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>IMHO, you are misinterpreting the standard. Please note that the
<br>
&quot;callbacks&quot; I'm talking about are the ones registered for freeing
<br>
cached attributes, their invocation is tied to the lifetime of the MPI
<br>
handle. The callbacks you are talking about are different kind of
<br>
beasts, they are callbacks you what to run specifically at
<br>
MPI_Finalize().
<br>
<p>Caching duplicated communicators is a key feature in many libraries.
<br>
How do you propose to handle the deallocation of the duped
<br>
communicators when COMM_WORLD is involved?
<br>
<p><p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15719.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>In reply to:</strong> <a href="15717.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Reply:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
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
