<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  5 12:10:31 2010" -->
<!-- isoreceived="20101205171031" -->
<!-- sent="Sun, 05 Dec 2010 09:10:14 -0800" -->
<!-- isosent="20101205171014" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4CFBC776.4020700_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF8A406.9000604_at_gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-05 12:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt;   Dear OpenMPI users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am dealing with an arithmetic problem. In fact, I have two variants 
</span><br>
<span class="quotelev1">&gt; of my code: one in single precision, one in double precision. When I 
</span><br>
<span class="quotelev1">&gt; compare the two executable built with MPICH, one can observed an 
</span><br>
<span class="quotelev1">&gt; expected difference of performance: 115.7-sec in single precision 
</span><br>
<span class="quotelev1">&gt; against 178.68-sec in double precision (+54%).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thing is, when I use OpenMPI, the difference is really bigger: 
</span><br>
<span class="quotelev1">&gt; 238.5-sec in single precision against 403.19-sec double precision (+69%).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our experiences have already shown OpenMPI is less efficient than 
</span><br>
<span class="quotelev1">&gt; MPICH on Ethernet with a small number of processes. This explain the 
</span><br>
<span class="quotelev1">&gt; differences between the first set of results with MPICH and the second 
</span><br>
<span class="quotelev1">&gt; set with OpenMPI. (But if someone have more information about that or 
</span><br>
<span class="quotelev1">&gt; even a solution, I am of course interested.)
</span><br>
<span class="quotelev1">&gt; But, using OpenMPI increases the difference between the two 
</span><br>
<span class="quotelev1">&gt; arithmetic. Is it the accentuation of the OpenMPI+Ethernet loss of 
</span><br>
<span class="quotelev1">&gt; performance, is it another issue into OpenMPI or is there any option a 
</span><br>
<span class="quotelev1">&gt; can use?
</span><br>
<p>It is also unusual that the performance difference between MPICH and 
<br>
OMPI is so large.  You say that OMPI is slower than MPICH even at small 
<br>
process counts.  Can you confirm that this is because MPI calls are 
<br>
slower?  Some of the biggest performance differences I've seen between 
<br>
MPI implementations had nothing to do with the performance of MPI calls 
<br>
at all.  It had to do with process binding or other factors that 
<br>
impacted the computational (non-MPI) performance of the code.  The 
<br>
performance of MPI calls was basically irrelevant.
<br>
<p>In this particular case, I'm not convinced since neither OMPI nor MPICH 
<br>
binds processes by default.
<br>
<p>Still, can you do some basic performance profiling to confirm what 
<br>
aspect of your application is consuming so much time?  Is it a 
<br>
particular MPI call?  If your application is spending almost all of its 
<br>
time in MPI calls, do you have some way of judging whether the faster 
<br>
performance is acceptable?  That is, is 238 secs acceptable and 403 secs 
<br>
slow?  Or, are both timings unacceptable -- e.g., the code &quot;should&quot; be 
<br>
running in about 30 secs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14995.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14993.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
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
