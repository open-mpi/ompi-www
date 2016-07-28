<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 09:51:05 2012" -->
<!-- isoreceived="20120524135105" -->
<!-- sent="Thu, 24 May 2012 09:51:00 -0400" -->
<!-- isosent="20120524135100" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="85F4E360-4770-45CB-B826-2776E1CD858F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7BA44CE-4544-4E52-9FE5-349C9DB8A87A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 09:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19368.php">Jeff Squyres: "Re: [OMPI users] vers 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19366.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19366.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19369.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This bug had the opportunity to appear in all collectives supporting intercommunicators where we check the receive buffer(s) consistency. In addition to what Jeff fixed already, I fix it in ALLTOALLV, ALLTOALLW and GATHER.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On May 24, 2012, at 09:37 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2012, at 9:28 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I checked them all, and I found SCATTERV, GATHERV, and REDUCE_SCATTER all had the issue.  Now fixed on the trunk, and will be in 1.6.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I forgot to mention -- this issue exists waaay back in the Open MPI code base.  I spot-checked Open MPI 1.2.0 and see it there, too.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: this particular bug only shows itself when you invoke ALLGATHERV, GATHERV, SCATTERV, or REDUCE_SCATTER on an intercommunicator where the sizes of the two groups are unequal.  Whether the problem shows itself or not is rather random (i.e., it depends on how &quot;safe&quot; the memory is after the recvcounts array).  FWIW, you can workaround this bug by setting the MCA parameter &quot;mpi_param_check&quot; to 0, which disables all MPI function parameter checking.  That may not be attractive in some cases, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically: since this problem has been in the OMPI code base for *years* (possibly since 1.0 -- but I'm not going to bother to check), it shows how little real-world applications actually use this specific functionality.  Don't get me wrong -- I'm *very* thankful to the mpi4py community for raising this issue, and I'm glad to get it fixed!  But it does show that there are dark, dusty corners in MPI functionality where few bother to tread.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="19368.php">Jeff Squyres: "Re: [OMPI users] vers 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19366.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19366.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19369.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
