<?
$subject_val = "Re: [OMPI users] MPI based HLA/RTI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 15 11:10:14 2013" -->
<!-- isoreceived="20130415151014" -->
<!-- sent="Mon, 15 Apr 2013 08:10:06 -0700" -->
<!-- isosent="20130415151006" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI based HLA/RTI ?" -->
<!-- id="3B7FA87C-621F-480F-894F-FBF439040DAD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABftzehm4nHRoxmjNCj2+86iwC6KPzbbsd8w+GGnLfkuOpr33A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI based HLA/RTI ?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-15 11:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21732.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>In reply to:</strong> <a href="21732.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Reply:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: some of us are working on a variant of MPI that would indeed support what you describe - it would support send/recv (i.e., MPI-1), but not collectives, and so would allow communication between arbitrary programs.
<br>
<p>Not specifically targeting HLA/RTI, though I suppose a wrapper that conformed to that standard could be created.
<br>
<p>On Apr 15, 2013, at 7:50 AM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This would be a departure from the SPMD paradigm that seems central to
</span><br>
<span class="quotelev1">&gt; MPI's design. Each process would be a completely different program
</span><br>
<span class="quotelev1">&gt; (piece of code) and I'm not sure how well that would working using
</span><br>
<span class="quotelev1">&gt; MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, MPI is commonly used in the parallel discrete even world for
</span><br>
<span class="quotelev1">&gt; communication between LPs (federates in HLA). But these LPs are
</span><br>
<span class="quotelev1">&gt; usually the same program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 15, 2013 at 10:22 AM, John Chludzinski
</span><br>
<span class="quotelev1">&gt; &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is anyone aware of an MPI based HLA/RTI (DoD High Level Architecture
</span><br>
<span class="quotelev2">&gt;&gt; (HLA) / Runtime Infrastructure)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---John
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
<li><strong>Next message:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Previous message:</strong> <a href="21732.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>In reply to:</strong> <a href="21732.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<li><strong>Reply:</strong> <a href="21734.php">John Chludzinski: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
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
