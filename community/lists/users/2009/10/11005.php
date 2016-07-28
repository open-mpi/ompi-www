<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 12:24:39 2009" -->
<!-- isoreceived="20091029162439" -->
<!-- sent="Thu, 29 Oct 2009 08:25:38 -0800" -->
<!-- isosent="20091029162538" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="4AE9C202.30608_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c4b5a27c0910282017j12e84128q4bfb037e3ff5fa3d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 12:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Natarajan CS wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;         Firstly, My apologies for a duplicate post in LAM/MPI list I 
</span><br>
<span class="quotelev1">&gt; have the following simple MPI code. I was wondering if there was a 
</span><br>
<span class="quotelev1">&gt; workaround for sending a dynamically allocated 2-D matrix? Currently I 
</span><br>
<span class="quotelev1">&gt; can send the matrix row-by-row, however, since rows are not contiguous 
</span><br>
<span class="quotelev1">&gt; I cannot send the entire matrix at once. I realize one option is to 
</span><br>
<span class="quotelev1">&gt; change the malloc to act as one contiguous block but can I keep the 
</span><br>
<span class="quotelev1">&gt; matrix definition as below and still send the entire matrix in one go?
</span><br>
<p>You mean with one standard MPI call?  I don't think so.
<br>
<p>In MPI, there is a notion of derived datatypes, but I'm not convinced 
<br>
this is what you want.  A derived datatype is basically a static 
<br>
template of data and holes in memory.  E.g., 3 bytes, then skip 7 bytes, 
<br>
then another 2 bytes, then skip 500 bytes, then 1 last byte.  Something 
<br>
like that.  Your 2d matrices differ in two respects.  One is that the 
<br>
pattern in memory is different for each matrix you allocate.  The other 
<br>
is that your matrix definition includes pointer information that won't 
<br>
be the same in every process's address space.  I guess you could 
<br>
overcome the first problem by changing alloc_matrix() to some fixed 
<br>
pattern in memory for some r and c, but you'd still have pointer 
<br>
information in there that you couldn't blindly copy from one process 
<br>
address space to another.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11004.php">John R. Cary: "Re: [OMPI users] collective communications broken on more than 4 cores"</a>
<li><strong>In reply to:</strong> <a href="10996.php">Natarajan CS: "[OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
