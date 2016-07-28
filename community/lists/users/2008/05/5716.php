<?
$subject_val = "Re: [OMPI users] different interconnects (myrinet and gige)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 13:23:33 2008" -->
<!-- isoreceived="20080521172333" -->
<!-- sent="Wed, 21 May 2008 13:22:28 -0400" -->
<!-- isosent="20080521172228" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] different interconnects (myrinet and gige)" -->
<!-- id="FE50E81C-A3AC-4D5F-8F3C-3AE1E3A282BB_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F206BCE465_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] different interconnects (myrinet and gige)<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 13:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>In reply to:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI does this already.  We use it all the time for IB vs Gig-E.
<br>
<p>You can change the weights, but I doubt you want to.
<br>
<p>Also use mx if you can.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 21, 2008, at 1:17 PM, Borenstein, Bernard S wrote:
<br>
<span class="quotelev1">&gt; We now have a myrinet cluster along with our GIGE clusters and I was
</span><br>
<span class="quotelev1">&gt; wondering how to have openmpi select the right interconnect.  We  
</span><br>
<span class="quotelev1">&gt; use PBS
</span><br>
<span class="quotelev1">&gt; and would like to have Openmpi select the right interconnect
</span><br>
<span class="quotelev1">&gt; automatically, depending on whether we are on the Myrinet cluster  
</span><br>
<span class="quotelev1">&gt; or the
</span><br>
<span class="quotelev1">&gt; Gige cluster.  Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
<li><strong>In reply to:</strong> <a href="5715.php">Borenstein, Bernard S: "[OMPI users] different interconnects (myrinet and gige)"</a>
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
