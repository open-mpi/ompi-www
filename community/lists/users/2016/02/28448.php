<?
$subject_val = "[OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:02:17 2016" -->
<!-- isoreceived="20160204170217" -->
<!-- sent="Thu, 4 Feb 2016 12:02:16 -0500" -->
<!-- isosent="20160204170216" -->
<!-- name="Brian Taylor" -->
<!-- email="spam.brian.taylor_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran vs C reductions" -->
<!-- id="CAKRe6eBJ2e0a1iUsrBye6GodtYrwrWYU9okWkNp3OZP9Z_u8rA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Brian Taylor (<em>spam.brian.taylor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 12:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a question about the standards compliance of OpenMPI.  Is the
<br>
following program valid according to the MPI standard?
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;double in[2], out[2];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;in[1] = in[0] = (double) rank;
<br>
<p>&nbsp;&nbsp;MPI_Reduce(in, out, 1, MPI_2DOUBLE_PRECISION, MPI_MAXLOC, 0,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;if (rank == 0) printf(&quot;out = %f %f\n&quot;, out[0], out[1]);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Specifically, I am wondering if MPI_2DOUBLE_PRECISION can be used with
<br>
MPI_MAXLOC (or MPI_MINLOC) in a C program.  MPI_2DOUBLE_PRECISION is not
<br>
included in the list of datatypes for reduction functions in C in Appendix
<br>
A.1 of the MPI 3.1 standard, although it is included in the list of
<br>
reduction functions for Fortran.  What exactly does that mean?
<br>
<p>The program above runs with OpenMPI 1.10.2 and gives the output one would
<br>
expect for an equivalent program written in Fortran.  Can I rely on this
<br>
being portable to other MPI implementations?
<br>
<p>Thanks,
<br>
Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28447.php">Gilles Gouaillardet: "Re: [OMPI users] Conflicting directives for mapping policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
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
