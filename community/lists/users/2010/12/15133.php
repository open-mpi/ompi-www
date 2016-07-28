<?
$subject_val = "Re: [OMPI users] jobs with more that 2, 500 processes will not even start";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 15:53:48 2010" -->
<!-- isoreceived="20101214205348" -->
<!-- sent="Tue, 14 Dec 2010 21:53:41 +0100" -->
<!-- isosent="20101214205341" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs with more that 2, 500 processes will not even start" -->
<!-- id="4D07D955.5080103_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F760301-2CFD-4BE3-B03C-8A1007AB462A_at_open-mpi.org" -->
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
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 15:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15132.php">George Bosilca: "Re: [OMPI users] Use of -mca pml csum"</a>
<li><strong>In reply to:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Ralph,
<br>
<p>&nbsp;&nbsp;I wonder : is this plm_rsh_num_concurrent parameter standing ONLY for 
<br>
rsh use,
<br>
or for ssh OR rsh, depending on plm_rsh_agent, please ?
<br>
<p>&nbsp;&nbsp;Thanks,  Best,   G.
<br>
<p><p>Le 14/12/2010 18:30, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; That's a big cluster to be starting with rsh! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you say it won't start, do you mean that it hangs? Or does it fail with some error message? How many nodes are involved (this is the important number, not the number of cores)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, what version are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2010, at 9:10 AM, Lydia Heck wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; About 9 months ago we had a new installation with a system of 1800 cores and at the time we found that jobs with more than 1028 cores would not start. At the time a colleague found that setting
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_plm_rsh_num_concurrent=256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; help with the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have now increased our processor count to more than 2700 cores and a job with 2,500 jobs does not start.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any advice?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lydia Heck
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr E L Heck
</span><br>
<span class="quotelev2">&gt;&gt; Senior Computer Manager
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; University of Durham Institute for Computational Cosmology
</span><br>
<span class="quotelev2">&gt;&gt; Ogden Centre
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics South Road
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DURHAM, DH1 3LE United Kingdom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev2">&gt;&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev2">&gt;&gt; ___________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
  Cordialement,   Gilbert.
--
*---------------------------------------------------------------------*
   Gilbert Grosdidier             Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15132.php">George Bosilca: "Re: [OMPI users] Use of -mca pml csum"</a>
<li><strong>In reply to:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Reply:</strong> <a href="15134.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
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
