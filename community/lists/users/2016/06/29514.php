<?
$subject_val = "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 11:45:54 2016" -->
<!-- isoreceived="20160622154554" -->
<!-- sent="Wed, 22 Jun 2016 10:45:37 -0500" -->
<!-- isosent="20160622154537" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?" -->
<!-- id="576AB2A1.6050808_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5sOZCx6mPJ1YgLiMQkAS0RLh-4cf4y7R7g0N58tcWRH5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 11:45:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29506.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/22/2016 05:47 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Thanks for the info, I updated
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/1809">https://github.com/open-mpi/ompi/issues/1809</a> accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, the bug occurs when addresses do not fit in 32 bits.
</span><br>
<span class="quotelev1">&gt; for some reasons, I always run into it on OSX but not on Linux, ubless I
</span><br>
<span class="quotelev1">&gt; use dmalloc.
</span><br>
<span class="quotelev1">&gt; I replaced malloc with alloca (and remove free) so I always hit the bug
</span><br>
<span class="quotelev1">&gt; on Linux.
</span><br>
<p><p>Thanks for the patch.  It's a giant mess.
<br>
<p>There are 1500 places in ROMIO where clang's &quot;-Wshorten64-to-32&quot; gives a 
<br>
warning.  Then there are cases such as this where we are explicitly 
<br>
casting to an int -- clang won't warn about that, assuming we know what 
<br>
we are doing (hah!)
<br>
<p>==rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29513.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29506.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
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
