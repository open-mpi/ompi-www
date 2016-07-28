<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:28:09 2016" -->
<!-- isoreceived="20160204172809" -->
<!-- sent="Thu, 4 Feb 2016 17:28:06 +0000" -->
<!-- isosent="20160204172806" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="FAEE35BC-0246-40D1-BC99-930CE53619C0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKRe6eBJ2e0a1iUsrBye6GodtYrwrWYU9okWkNp3OZP9Z_u8rA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 12:28:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28450.php">Dave Love: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2016, at 12:02 PM, Brian Taylor &lt;spam.brian.taylor_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question about the standards compliance of OpenMPI.  Is the following program valid according to the MPI standard?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   double in[2], out[2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   in[1] = in[0] = (double) rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Reduce(in, out, 1, MPI_2DOUBLE_PRECISION, MPI_MAXLOC, 0, MPI_COMM_WORLD);
</span><br>
<p>Technically, this isn't correct.
<br>
<p>The MPI_2DOUBLE_PRECISION type is for Fortran data, not C data.  And there is no guarantee that the size and representation of C &quot;double&quot; is equivalent to that of Fortran &quot;double precision&quot;.  So while it may work in some cases, it may not work in all cases.
<br>
<p>Sidenote: the reason that you can use MPI_2DOUBLE_PRECISION (and there's no corresponding MPI_2DOUBLE for C datatypes) with MINLOC/MAXLOC is because until &quot;recently&quot;, you couldn't easily have a fortran equivalent of
<br>
<p>struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double a;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int b;
<br>
};
<br>
<p>Instead, all you could do was pass in arrays that were homogeneous in type -- e.g., a pair of doubles, or a pair of integers, or reals.  Since half the output of MINLOC/MAXLOC is to give an (integer) array index, in C, it makes sense to have that value actually be of type &quot;int&quot;.  But in Fortran, it was simple to just have a pair of homogeneous types (integer, real, double).
<br>
<p>This is not true in modern fortran, however.  FWIW, tere's a low-priority proposal cooking in the MPI Forum to add Fortran equivalents for the C MPI_FLOAT_INT, MPI_DOUBLE_INT, MPI_LONG_INT, ...etc. types for MINLOC/MAXLOC.
<br>
<p><span class="quotelev1">&gt;   if (rank == 0) printf(&quot;out = %f %f\n&quot;, out[0], out[1]);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, I am wondering if MPI_2DOUBLE_PRECISION can be used with MPI_MAXLOC (or MPI_MINLOC) in a C program.  MPI_2DOUBLE_PRECISION is not included in the list of datatypes for reduction functions in C in Appendix A.1 of the MPI 3.1 standard, although it is included in the list of reduction functions for Fortran.  What exactly does that mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program above runs with OpenMPI 1.10.2 and gives the output one would expect for an equivalent program written in Fortran.  Can I rely on this being portable to other MPI implementations?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28448.php">http://www.open-mpi.org/community/lists/users/2016/02/28448.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28450.php">Dave Love: "Re: [OMPI users] MX replacement?"</a>
<li><strong>Previous message:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28448.php">Brian Taylor: "[OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28453.php">Brian Taylor: "Re: [OMPI users] Fortran vs C reductions"</a>
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
