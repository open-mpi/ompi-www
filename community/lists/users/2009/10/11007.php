<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 14:30:27 2009" -->
<!-- isoreceived="20091029183027" -->
<!-- sent="Thu, 29 Oct 2009 13:30:22 -0500" -->
<!-- isosent="20091029183022" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="c4b5a27c0910291130u6c341e84peaef325899af67da_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AE9C202.30608_at_sun.com" -->
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
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 14:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
&nbsp;&nbsp;&nbsp;thanks for the quick response. Yes, that is what I meant. I thought there
<br>
was no other way around what I am doing but It is always good to ask a
<br>
expert rather than assume!
<br>
<p>Cheers,
<br>
<p>C.S.N
<br>
<p>On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;        Firstly, My apologies for a duplicate post in LAM/MPI list I have
</span><br>
<span class="quotelev2">&gt;&gt; the following simple MPI code. I was wondering if there was a workaround for
</span><br>
<span class="quotelev2">&gt;&gt; sending a dynamically allocated 2-D matrix? Currently I can send the matrix
</span><br>
<span class="quotelev2">&gt;&gt; row-by-row, however, since rows are not contiguous I cannot send the entire
</span><br>
<span class="quotelev2">&gt;&gt; matrix at once. I realize one option is to change the malloc to act as one
</span><br>
<span class="quotelev2">&gt;&gt; contiguous block but can I keep the matrix definition as below and still
</span><br>
<span class="quotelev2">&gt;&gt; send the entire matrix in one go?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In MPI, there is a notion of derived datatypes, but I'm not convinced this
</span><br>
<span class="quotelev1">&gt; is what you want.  A derived datatype is basically a static template of data
</span><br>
<span class="quotelev1">&gt; and holes in memory.  E.g., 3 bytes, then skip 7 bytes, then another 2
</span><br>
<span class="quotelev1">&gt; bytes, then skip 500 bytes, then 1 last byte.  Something like that.  Your 2d
</span><br>
<span class="quotelev1">&gt; matrices differ in two respects.  One is that the pattern in memory is
</span><br>
<span class="quotelev1">&gt; different for each matrix you allocate.  The other is that your matrix
</span><br>
<span class="quotelev1">&gt; definition includes pointer information that won't be the same in every
</span><br>
<span class="quotelev1">&gt; process's address space.  I guess you could overcome the first problem by
</span><br>
<span class="quotelev1">&gt; changing alloc_matrix() to some fixed pattern in memory for some r and c,
</span><br>
<span class="quotelev1">&gt; but you'd still have pointer information in there that you couldn't blindly
</span><br>
<span class="quotelev1">&gt; copy from one process address space to another.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11007/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="11006.php">David Gunter: "[OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11005.php">Eugene Loh: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11009.php">Justin Luitjens: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
