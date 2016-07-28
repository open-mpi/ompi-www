<?
$subject_val = "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 15:31:59 2009" -->
<!-- isoreceived="20091029193159" -->
<!-- sent="Thu, 29 Oct 2009 13:31:34 -0600" -->
<!-- isosent="20091029193134" -->
<!-- name="Justin Luitjens" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically" -->
<!-- id="913d17a50910291231m64670d7ax534723bd3fed5624_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c4b5a27c0910291130u6c341e84peaef325899af67da_at_mail.gmail.com" -->
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
<strong>From:</strong> Justin Luitjens (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 15:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not do something like this:
<br>
<p>double **A=new double*[N];
<br>
double *A_data new double [N*N];
<br>
<p>for(int i=0;i&lt;N;i++)
<br>
&nbsp;&nbsp;&nbsp;A[i]=&amp;A_data[i*N];
<br>
<p>This way you have contiguous data (in A_data) but can access it as a 2D
<br>
array using A[i][j].
<br>
<p>(I haven't compiled this but I know we represent our matrices this way).
<br>
<p>On Thu, Oct 29, 2009 at 12:30 PM, Natarajan CS &lt;csnataraj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;    thanks for the quick response. Yes, that is what I meant. I thought
</span><br>
<span class="quotelev1">&gt; there was no other way around what I am doing but It is always good to ask a
</span><br>
<span class="quotelev1">&gt; expert rather than assume!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C.S.N
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 29, 2009 at 11:25 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Natarajan CS wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Firstly, My apologies for a duplicate post in LAM/MPI list I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following simple MPI code. I was wondering if there was a workaround for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending a dynamically allocated 2-D matrix? Currently I can send the matrix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; row-by-row, however, since rows are not contiguous I cannot send the entire
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix at once. I realize one option is to change the malloc to act as one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contiguous block but can I keep the matrix definition as below and still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send the entire matrix in one go?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean with one standard MPI call?  I don't think so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In MPI, there is a notion of derived datatypes, but I'm not convinced this
</span><br>
<span class="quotelev2">&gt;&gt; is what you want.  A derived datatype is basically a static template of data
</span><br>
<span class="quotelev2">&gt;&gt; and holes in memory.  E.g., 3 bytes, then skip 7 bytes, then another 2
</span><br>
<span class="quotelev2">&gt;&gt; bytes, then skip 500 bytes, then 1 last byte.  Something like that.  Your 2d
</span><br>
<span class="quotelev2">&gt;&gt; matrices differ in two respects.  One is that the pattern in memory is
</span><br>
<span class="quotelev2">&gt;&gt; different for each matrix you allocate.  The other is that your matrix
</span><br>
<span class="quotelev2">&gt;&gt; definition includes pointer information that won't be the same in every
</span><br>
<span class="quotelev2">&gt;&gt; process's address space.  I guess you could overcome the first problem by
</span><br>
<span class="quotelev2">&gt;&gt; changing alloc_matrix() to some fixed pattern in memory for some r and c,
</span><br>
<span class="quotelev2">&gt;&gt; but you'd still have pointer information in there that you couldn't blindly
</span><br>
<span class="quotelev2">&gt;&gt; copy from one process address space to another.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11010.php">rightcfd: "[OMPI users] mpi functions are slow when first called and become normal afterwards"</a>
<li><strong>Previous message:</strong> <a href="11008.php">Ralph Castain: "Re: [OMPI users] Disabling tuned collectives in OMPI 1.3.3"</a>
<li><strong>In reply to:</strong> <a href="11007.php">Natarajan CS: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
<li><strong>Reply:</strong> <a href="11030.php">George Bosilca: "Re: [OMPI users] MPI-Send for entire entire matrix when allocating memory dynamically"</a>
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
