<?
$subject_val = "Re: [OMPI devel] MPI_Bcast using TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 07:39:16 2011" -->
<!-- isoreceived="20110927113916" -->
<!-- sent="Tue, 27 Sep 2011 07:39:09 -0400" -->
<!-- isosent="20110927113909" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Bcast using TIPC" -->
<!-- id="A459060A-6356-49B6-AAB1-6F89E414BF78_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E819AC2.2030107_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Bcast using TIPC<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 07:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Xin,
<br>
<p>The collective calls are handled by the collective framework (mca/coll). You can export only the function you want (MPI_Bcast in your example) from your collective component.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Sep 27, 2011, at 05:43 , Xin He wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sorry that it takes so long for paper works of TIPC BTL. Hopefully I can get some feedback this week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I would like to do some work while waiting. For future work, I would like to add TIPC_broadcast
</span><br>
<span class="quotelev1">&gt; to support MPI_Bcast. But as I looked into TCP BTL code, I could not find any code doing broadcast. Does
</span><br>
<span class="quotelev1">&gt; that mean MPI_Bcast is actually done by sending one by one? In that case, in I want to add actual broadcast
</span><br>
<span class="quotelev1">&gt; support, which part should I change, I guess not just adding a BTL but also modify PML as well?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Xin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>In reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9763.php">Jeff Squyres: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
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
