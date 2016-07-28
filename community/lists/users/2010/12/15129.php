<?
$subject_val = "Re: [OMPI users] jobs with more that 2, 500 processes will not even start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 12:30:54 2010" -->
<!-- isoreceived="20101214173054" -->
<!-- sent="Tue, 14 Dec 2010 10:30:45 -0700" -->
<!-- isosent="20101214173045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs with more that 2, 500 processes will not even start" -->
<!-- id="9F760301-2CFD-4BE3-B03C-8A1007AB462A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1012141549220.20537_at_dubris.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 12:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>In reply to:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a big cluster to be starting with rsh! :-)
<br>
<p>When you say it won't start, do you mean that it hangs? Or does it fail with some error message? How many nodes are involved (this is the important number, not the number of cores)?
<br>
<p>Also, what version are you using?
<br>
<p><p>On Dec 14, 2010, at 9:10 AM, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; About 9 months ago we had a new installation with a system of 1800 cores and at the time we found that jobs with more than 1028 cores would not start. At the time a colleague found that setting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_plm_rsh_num_concurrent=256
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; help with the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have now increased our processor count to more than 2700 cores and a job with 2,500 jobs does not start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any advice?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L Heck
</span><br>
<span class="quotelev1">&gt; Senior Computer Manager
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; University of Durham Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics South Road
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE United Kingdom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
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
<li><strong>Next message:</strong> <a href="15130.php">Lydia Heck: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>In reply to:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15133.php">Gilbert Grosdidier: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
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
