<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 15:21:01 2006" -->
<!-- isoreceived="20060424192101" -->
<!-- sent="Mon, 24 Apr 2006 15:20:13 -0400" -->
<!-- isosent="20060424192013" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F42B_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 15:20:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1127.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Reply:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The current and the previous versions of OpenMPI define MPI_LONG_LONG_INT and MPI_LONG_LONG constants as the address of two distinct global variables (&amp;ompi_mpi_long_long_int and &amp;ompi_mpi_long_long respectively) which makes the following expression true: MPI_LONG_LONG_INT != MPI_LONG_LONG.
<br>
<p>After consulting the MPI standards, I noticed the following:
<br>
<p>&nbsp;- The optional datatype corresponding to the optional C/C++ &quot;long long&quot; type is MPI_LONG_LONG_INT according to article 3.2.2. &quot;Message data&quot; of the MPI 1.1 standard (www.mpi-forum.org/docs/mpi-11-html/node32.html) and article 10.2. &quot;Defined Constants for C and Fortran&quot; (www.mpi-forum.org/docs/mpi-11-html/node169.html) of the MPI 1.1 standard.
<br>
<p>&nbsp;- The MPI_LONG_LONG optional datatype appeared for the first time in section 9.5.2. &quot;External Data Representation: ``external32''&quot; of the MPI 2.0 standard (www.mpi-forum.org/docs/mpi-20-html/node200.htm). This paragraph state that with the external32 data representation, this datatype is eight (8) bytes long.
<br>
<p>&nbsp;- However the previous statement was recognized as an error in the MPI 2.0 errata document (www.mpi-forum.org/docs/errata-20-2.html). The MPI 2.0 document should have used MPI_LONG_LONG_INT instead of MPI_LONG_LONG. It also state the following:
<br>
<p>&nbsp;&nbsp;&nbsp;In addition, the type MPI_LONG_LONG should be added as an optional type; it is a synonym for MPI_LONG_LONG_INT.
<br>
<p>This means that the real optional datatype corresponding to the C/C++ &quot;long long&quot; datatype is MPI_LONG_LONG_INT and that since MPI_LONG_LONG was mentioned by mistake in the MPI 2.0 standard document, the MPI_LONG_LONG predefined datatype constant is also accepted as a synonym to MPI_LONG_LONG_INT.
<br>
<p>We should therefore have MPI_LONG_LONG_INT == MPI_LONG_LONG which is not the case in OpenMPI.
<br>
<p>So please have a look at this issue.
<br>
<p>Note that MPICH and MPICH2 implementations satisfy: MPI_LONG_LONG_INT == MPI_LONG_LONG.
<br>
<p>Regrards,
<br>
<p><p>Martin Audet        E: martin DOT audet AT imi cnrc-nrc gc ca
<br>
Research Officer    T: 450-641-5034
<br>
Industrial Material Institute / National Research Council
<br>
75 de Mortagne, Boucherville, QC, J4B 6Y4, Canada
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1127.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Reply:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
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
