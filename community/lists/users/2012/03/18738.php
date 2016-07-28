<?
$subject_val = "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 13:25:09 2012" -->
<!-- isoreceived="20120313172509" -->
<!-- sent="Tue, 13 Mar 2012 10:25:04 -0700" -->
<!-- isosent="20120313172504" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG" -->
<!-- id="7F70CEBD-479E-4D3F-BFA4-CECC1168F5AC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203091814300.44755_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 13:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18739.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18733.php">Jeremiah Willcock: "[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2012, at 5:17 PM, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; On Open MPI 1.5.1, when I call MPI_Testsome with incount=0 and the two output arrays NULL, I get an argument error (MPI_ERR_ARG).  Is this the intended behavior?  If incount=0, no requests can complete, so the output arrays can never be written to.  I do not see anything in the MPI 2.2 standard that says either way whether this is allowed.
</span><br>
<p><p>I have no strong opinions here, so I coded up a patch to just return MPI_SUCCESS in this scenario (attached).
<br>
<p>If no one objects, we can probably get this in 1.6.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18738/jeremiah-wait-test-args.diff">jeremiah-wait-test-args.diff</a>
</ul>
<!-- attachment="jeremiah-wait-test-args.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18739.php">Jeffrey Squyres: "Re: [OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>Previous message:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18733.php">Jeremiah Willcock: "[OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Reply:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
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
