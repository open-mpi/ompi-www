<?
$subject_val = "Re: [OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  7 15:45:43 2016" -->
<!-- isoreceived="20160207204543" -->
<!-- sent="Sun, 7 Feb 2016 15:45:41 -0500" -->
<!-- isosent="20160207204541" -->
<!-- name="Brian Taylor" -->
<!-- email="spam.brian.taylor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran vs C reductions" -->
<!-- id="CAKRe6eDuPZqOoZnEmRgPHqMm4mmrg+B=raA4WMdjG4=8ESyTvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C3E3CBE6-D407-47EC-9616-29399739A366_at_cisco.com" -->
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
<strong>Date:</strong> 2016-02-07 15:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Feb 7, 2016 at 8:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2016, at 9:46 PM, Brian Taylor &lt;spam.brian.taylor_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the explanation, Jeff.  I'm not surprised to hear that using
</span><br>
a Fortran type from C in this manner is potentially buggy and not
<br>
portable.  However, assuming that the C and Fortran types are
<br>
interoperable, is there any guarantee that the call to MPI_Reduce in the
<br>
program above will execute successfully?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the representations of the C and Fortran datatypes are the same, then
</span><br>
yes, it should work.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If OpenMPI 1.10.2 is built with Fortran support, the program above runs
</span><br>
and gives the expected output.  If OpenMPI 1.10.2 is built without Fortran
<br>
support, the program exits with the following error:
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; taylor_at_host $ mpirun -np 1 ./bug
</span><br>
<span class="quotelev2">&gt; &gt; [host:49234] *** An error occurred in MPI_Reduce: the reduction
</span><br>
operation MPI_MAXLOC is not defined on the MPI_2DBLPREC datatype
<br>
<span class="quotelev2">&gt; &gt; [host:49234] *** reported by process [3133079553,0]
</span><br>
<span class="quotelev2">&gt; &gt; [host:49234] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [host:49234] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt; &gt; [host:49234] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
will now abort,
<br>
<span class="quotelev2">&gt; &gt; [host:49234] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose that error message is a bit misleading -- it's not available
</span><br>
because we disabled *all* Fortran support, including support for Fortran
<br>
data types.  So yes, MPI_MAXLOC is not defined for MPI2DBLPREC, but
<br>
*because* there's no Fortran support *at all*.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the MPI_MAXLOC operator for MPI_2DOUBLE_PRECISION is not
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there's no Fortran compiler, Open MPI can't possibly know what the
</span><br>
Fortran representation of the Fortran datatypes.
<br>
<p>You might think that's the case - it certainly makes sense to me! - but the
<br>
following program suggests that OpenMPI &quot;knows&quot; more than you think.
<br>
Consider the following program:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;MPI_Type_size(MPI_2DOUBLE_PRECISION, &amp;size);
<br>
&nbsp;&nbsp;if (rank == 0) printf(&quot;MPI_2DOUBLE_PRECISION is %d bytes\n&quot;, size);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>When compiled and linked with OpenMPI 1.10.2 built without Fortran support,
<br>
the program runs successfully:
<br>
<p>taylor_at_host $ mpicc main.c -o bug
<br>
taylor_at_host $ mpirun -np 1 ./bug
<br>
MPI_2DOUBLE_PRECISION is 16 bytes
<br>
<p>It certainly appears that MPI_2DOUBLE_PRECISION is a valid type - at least
<br>
it has a sensible size.  I would expect that when OpenMPI is built with
<br>
Fortran support, it would either not define the Fortran types or set them
<br>
to MPI_TYPE_NULL.  The former would prevent C code that uses Fortran types
<br>
from compiling when there is no Fortran support, while the latter would
<br>
hopefully lead to more sensible run time error messages.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: is there a reason you don't want to just use the C datatypes?  The
</span><br>
fundamental output of the index is an integer value -- casting it to a
<br>
float of some flavor doesn't fundamentally change its value.
<br>
<p>The code in question is not mine.  I have suggested to the developers that
<br>
they should use the correct C types.  The reason I became aware of this
<br>
issue is that one of my colleagues compiled and ran this code on a system
<br>
where OpenMPI was built without Fortran support and the code started
<br>
failing with errors from MPI which were not seen on other systems.
<br>
<p><span class="quotelev1">&gt;
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
<p>Thanks,
<br>
Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28458.php">Jeff Hammond: "Re: [OMPI users] Fortran vs C reductions"</a>
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
