<?
$subject_val = "Re: [OMPI users] jobs with more that 2, 500 processes will not even start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 12:49:05 2010" -->
<!-- isoreceived="20101214174905" -->
<!-- sent="Tue, 14 Dec 2010 17:49:00 +0000" -->
<!-- isosent="20101214174900" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs with more that 2, 500 processes will not even start" -->
<!-- id="AANLkTik9N5MES0YfVzLnrY4xRvaB3r85WvJhtFKayo+X_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.00.1012141727120.21413_at_dubris.phyast.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] jobs with more that 2, 500 processes will not even start<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 12:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15132.php">George Bosilca: "Re: [OMPI users] Use of -mca pml csum"</a>
<li><strong>Previous message:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14 December 2010 17:32, Lydia Heck &lt;lydia.heck_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have experimented a bit more and found that if I set
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_plm_rsh_num_concurrent=1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a job with more than 2,500 processes will start and run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However when I searched the open-mpi web site for the the variable I could
</span><br>
<span class="quotelev1">&gt; not find any indication.
</span><br>
<p>Lydia,  a quick search find this page:
<br>
<a href="http://docs.sun.com/source/820-3176-10/appb-mca.html">http://docs.sun.com/source/820-3176-10/appb-mca.html</a>
<br>
<p>It may be out of data, but does describe the parameters.
<br>
What is your setting for plm_rsh_agent   (ie are you using ssh or rsh)
<br>
and also have you tried setting plm_rsh_debug
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15132.php">George Bosilca: "Re: [OMPI users] Use of -mca pml csum"</a>
<li><strong>Previous message:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>In reply to:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
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
