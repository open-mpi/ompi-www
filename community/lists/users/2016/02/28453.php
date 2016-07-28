<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 21:46:35 2016" -->
<!-- isoreceived="20160205024635" -->
<!-- sent="Thu, 4 Feb 2016 21:46:33 -0500" -->
<!-- isosent="20160205024633" -->
<!-- name="Brian Taylor" -->
<!-- email="spam.brian.taylor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="CAKRe6eBahoD97kVvfFWReBiYqHLY93Ok3xSQ2vAQkyXTm4yR6Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FAEE35BC-0246-40D1-BC99-930CE53619C0_at_cisco.com" -->
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
<strong>From:</strong> Brian Taylor (<em>spam.brian.taylor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 21:46:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Previous message:</strong> <a href="28452.php">Gilles Gouaillardet: "Re: [OMPI users] error on missing libtorque.so.2"</a>
<li><strong>In reply to:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 4, 2016 at 12:28 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2016, at 12:02 PM, Brian Taylor &lt;spam.brian.taylor_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a question about the standards compliance of OpenMPI.  Is the
</span><br>
following program valid according to the MPI standard?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   int rank;
</span><br>
<span class="quotelev2">&gt; &gt;   double in[2], out[2];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   in[1] = in[0] = (double) rank;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Reduce(in, out, 1, MPI_2DOUBLE_PRECISION, MPI_MAXLOC, 0,
</span><br>
MPI_COMM_WORLD);
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technically, this isn't correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI_2DOUBLE_PRECISION type is for Fortran data, not C data.  And
</span><br>
there is no guarantee that the size and representation of C &quot;double&quot; is
<br>
equivalent to that of Fortran &quot;double precision&quot;.  So while it may work in
<br>
some cases, it may not work in all cases.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: the reason that you can use MPI_2DOUBLE_PRECISION (and there's
</span><br>
no corresponding MPI_2DOUBLE for C datatypes) with MINLOC/MAXLOC is because
<br>
until &quot;recently&quot;, you couldn't easily have a fortran equivalent of
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct {
</span><br>
<span class="quotelev1">&gt;     double a;
</span><br>
<span class="quotelev1">&gt;     int b;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, all you could do was pass in arrays that were homogeneous in
</span><br>
type -- e.g., a pair of doubles, or a pair of integers, or reals.  Since
<br>
half the output of MINLOC/MAXLOC is to give an (integer) array index, in C,
<br>
it makes sense to have that value actually be of type &quot;int&quot;.  But in
<br>
Fortran, it was simple to just have a pair of homogeneous types (integer,
<br>
real, double).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not true in modern fortran, however.  FWIW, tere's a low-priority
</span><br>
proposal cooking in the MPI Forum to add Fortran equivalents for the C
<br>
MPI_FLOAT_INT, MPI_DOUBLE_INT, MPI_LONG_INT, ...etc. types for
<br>
MINLOC/MAXLOC.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (rank == 0) printf(&quot;out = %f %f\n&quot;, out[0], out[1]);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Specifically, I am wondering if MPI_2DOUBLE_PRECISION can be used with
</span><br>
MPI_MAXLOC (or MPI_MINLOC) in a C program.  MPI_2DOUBLE_PRECISION is not
<br>
included in the list of datatypes for reduction functions in C in Appendix
<br>
A.1 of the MPI 3.1 standard, although it is included in the list of
<br>
reduction functions for Fortran.  What exactly does that mean?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The program above runs with OpenMPI 1.10.2 and gives the output one
</span><br>
would expect for an equivalent program written in Fortran.  Can I rely on
<br>
this being portable to other MPI implementations?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28448.php">http://www.open-mpi.org/community/lists/users/2016/02/28448.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28449.php">http://www.open-mpi.org/community/lists/users/2016/02/28449.php</a>
<br>
<p><p>Thanks for the explanation, Jeff.  I'm not surprised to hear that using a
<br>
Fortran type from C in this manner is potentially buggy and not portable.
<br>
However, assuming that the C and Fortran types are interoperable, is there
<br>
any guarantee that the call to MPI_Reduce in the program above will execute
<br>
successfully?
<br>
<p>If OpenMPI 1.10.2 is built with Fortran support, the program above runs and
<br>
gives the expected output.  If OpenMPI 1.10.2 is built without Fortran
<br>
support, the program exits with the following error:
<br>
<p>taylor_at_host $ mpirun -np 1 ./bug
<br>
[host:49234] *** An error occurred in MPI_Reduce: the reduction operation
<br>
MPI_MAXLOC is not defined on the MPI_2DBLPREC datatype
<br>
[host:49234] *** reported by process [3133079553,0]
<br>
[host:49234] *** on communicator MPI_COMM_WORLD
<br>
[host:49234] *** MPI_ERR_OP: invalid reduce operation
<br>
[host:49234] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
<br>
now abort,
<br>
[host:49234] ***    and potentially your MPI job)
<br>
<p>It seems that the MPI_MAXLOC operator for MPI_2DOUBLE_PRECISION is not
<br>
available if OpenMPI is built without Fortran support; thus, the call to
<br>
MPI_Reduce fails.  Is this the expected behavior?  Is the MPI_MAXLOC
<br>
operator for MPI_2DOUBLE_PRECISION required to be available from C for
<br>
compliance with the MPI standard, or is its availability from C in OpenMPI
<br>
(when built with Fortran support) an implementation-dependent &quot;extension&quot;?
<br>
<p>Thanks,
<br>
Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28454.php">dpchoudh .: "[OMPI users] QP creation failure on iWARP adapter"</a>
<li><strong>Previous message:</strong> <a href="28452.php">Gilles Gouaillardet: "Re: [OMPI users] error on missing libtorque.so.2"</a>
<li><strong>In reply to:</strong> <a href="28449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
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
