<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 20 16:07:47 2013" -->
<!-- isoreceived="20130720200747" -->
<!-- sent="Sat, 20 Jul 2013 16:07:37 -0400" -->
<!-- isosent="20130720200737" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EAEE09.1030107_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2EE998D1-6DFA-4C6D-97DB-98D8EA757FBE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-20 16:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/20/2013 10:28 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; avoid the packages as you have no idea how they were built
</span><br>
<p>So I built openmpi-1.6.5 from the tar ball and of course
<br>
everything works fine.... well my simple program got through
<br>
Mpi_init and printed its rank.
<br>
<p>I configured it very simply :
<br>
<p>&nbsp;&nbsp;./configure --prefix=/opt/openmpi-1.6.5
<br>
<p>and I noticed that the generated program does not link hwloc like
<br>
the program did when I used the system mpicc.
<br>
<p>I looked at the installed the openmpi source rpm and took a look
<br>
at the configure section and it uses --with-hwloc=/usr so I
<br>
reconfigured the openmpi-1.6.5 source with :
<br>
<p>&nbsp;&nbsp;./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/opt/openmpi-1.6.5 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc=/usr
<br>
<p>and when I rebuilt my program with the generated openmpi my error
<br>
returns.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22355/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22354.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22353.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22356.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
