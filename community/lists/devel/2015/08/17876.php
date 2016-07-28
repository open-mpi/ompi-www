<?
$subject_val = "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 03:25:22 2015" -->
<!-- isoreceived="20150827072522" -->
<!-- sent="Thu, 27 Aug 2015 16:25:16 +0900" -->
<!-- isosent="20150827072516" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*" -->
<!-- id="55DEBB5C.80908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="261B2E49-5213-4AF5-BC66-B58ACBDD99CF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-27 03:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am lost ...
<br>
<p>from ompi/mpi/fortran/mpif-h/profile/palltoall_f.c
<br>
<p>void ompi_alltoall_f(char *sendbuf, MPI_Fint *sendcount, MPI_Fint *sendtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *recvbuf, MPI_Fint *recvcount, MPI_Fint *recvtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Fint *comm, MPI_Fint *ierr)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_ierr = MPI_Alltoall(sendbuf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FINT_2_INT(*sendcount),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_sendtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_FINT_2_INT(*recvcount),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_recvtype, c_comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
}
<br>
<p>$ nm ompi/mpi/fortran/mpif-h/profile/.libs/palltoall_f.o | grep MPI_Alltoall
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U MPI_Alltoall
<br>
0000000000000000 W MPI_Alltoall_f
<br>
0000000000000000 W MPI_Alltoall_f08
<br>
0000000000000000 W PMPI_Alltoall_f
<br>
0000000000000000 W PMPI_Alltoall_f08
<br>
<p>ompi_alltoall_f() calls MPI_Alltoall()
<br>
<p><p>the &quot;natural&quot; way of writing a tool is to write mpi_alltoall_ (that 
<br>
calls pmpi_alltoall_)
<br>
*and* MPI_Alltoall (that calls PMPI_Alltoall)
<br>
<p>since ompi_alltoall_f invokes MPI_Alltoall (and not PMPI_Alltoall), the 
<br>
tool is invoked twice, by both the Fortran and C wrapper.
<br>
<p>my initial question was
<br>
&quot;why does ompi_alltoall_f invokes MPI_Alltoall instead of PMPI_Alltoall ?&quot;
<br>
<p>/* since we share the same source code when building with or without mpi 
<br>
profiling,
<br>
that means we would need to
<br>
#define MPI_Alltoall PMPI_Alltoall
<br>
when ompi is configure'd with --enable-mpi-profile
<br>
*/
<br>
<p>of course, if the tool does not define its own MPI_Alltoall subroutine, then
<br>
then PMPI_Alltoall is invoked directly since MPI_Alltoall is a weak 
<br>
symbol pointing to
<br>
PMPI_Alltoall.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 8/26/2015 9:39 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Aug 25, 2015, at 11:03 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This seems to be the case only with the TKR interface. All the others are either calling the OMPI version directly (mpif-h), or are calling some other internal (or weak symbol function).
</span><br>
<span class="quotelev1">&gt; Yes, those might need to be updated.  Not it!  (let's let the TKR interface die...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right about the mpif-h interface, though -- they call the PMPI versions of the functions (through weak symbols).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, our use of weak symbols might be confusing to the tool -- is it somehow intercepting our call from ompi_send_f() to PMPI_Send(), for example?  You might want to step through with a debugger to see what's happening, because the debugger should show the name of the symbol that is invoked in the call stack, even though the pointer in the source code may show you in &quot;MPI_Send()&quot; (remember: we compile the C code for our functions potential with #defines that turn MPI_Send into PMPI_Send, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17877.php">Michael Knobloch: "[OMPI devel] OpenMPI 1.8 Bug Report"</a>
<li><strong>Previous message:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Reply:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
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
