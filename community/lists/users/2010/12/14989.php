<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 08:46:21 2010" -->
<!-- isoreceived="20101203134621" -->
<!-- sent="Fri, 3 Dec 2010 08:46:12 -0500" -->
<!-- isosent="20101203134612" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="8077CE3A-C9FC-4523-95F1-79A3CAC5E3A5_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 08:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we have never really optimized open MPI for tcp. That is changing soon, hopefully. 
<br>
<p>Regardless, what is the communication pattern of your app?  Are you sending a lot of data frequently?  Even the MPICH perf difference is surprising - it suggests a lot of data xfer, potentially with small messages...?
<br>
<p>Another option to try is to install the openmx drivers on your system and run open MPI with mx support. This should be much better perf than tcp. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Dec 3, 2010, at 3:11 AM, &quot;Mathieu Gontier&quot; &lt;mathieu.gontier_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am dealing with an arithmetic problem. In fact, I have two variants of my code: one in single precision, one in double precision. When I compare the two executable built with MPICH, one can observed an expected difference of performance: 115.7-sec in single precision against 178.68-sec in double precision (+54%).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The thing is, when I use OpenMPI, the difference is really bigger: 238.5-sec in single precision against 403.19-sec double precision (+69%).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our experiences have already shown OpenMPI is less efficient than MPICH on Ethernet with a small number of processes. This explain the differences between the first set of results with MPICH and the second set with OpenMPI. (But if someone have more information about that or even a solution, I am of course interested.)
</span><br>
<span class="quotelev1">&gt; But, using OpenMPI increases the difference between the two arithmetic. Is it the accentuation of the OpenMPI+Ethernet loss of performance, is it another issue into OpenMPI or is there any option a can use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help.
</span><br>
<span class="quotelev1">&gt; Mathieu.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="14988.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>In reply to:</strong> <a href="14984.php">Mathieu Gontier: "[OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="14990.php">Jonathan Dursi: "Re: [OMPI users] difference between single and double precision"</a>
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
