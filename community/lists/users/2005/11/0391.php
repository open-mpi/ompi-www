<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 25 17:37:40 2005" -->
<!-- isoreceived="20051125223740" -->
<!-- sent="Fri, 25 Nov 2005 17:37:21 -0500" -->
<!-- isosent="20051125223721" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[O-MPI users] MPI_Offset and C++ interface" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820E4CFA_at_webmail.imi.nrc.ca" -->
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
<strong>Date:</strong> 2005-11-25 17:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Reply:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just compiled my library with version 1.0 of OpenMPI and I had two problems.
<br>
<p>First the MPI_Offset datatype is defined as a preprocessor macro as follow in mpi.h:
<br>
<p>&nbsp;&nbsp;&nbsp;/* Type of MPI_Offset */
<br>
&nbsp;&nbsp;&nbsp;#define MPI_Offset long long
<br>
<p>This generate a syntax error when MPI_Offset is used in C++ for what Stroustrup call a value construction (e.g. type ( expr_list ) c.f. section 6.2 in The C++ programming language).
<br>
<p>For example the following code:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Offset   ofs,size;
<br>
&nbsp;&nbsp;&nbsp;int          nbr;
<br>
<p>&nbsp;&nbsp;&nbsp;// compute ofs, size and nbr.
<br>
<p>&nbsp;&nbsp;&nbsp;ofs +=  MPI_Offset(nbr)*size;
<br>
<p>cannot compile if MPI_Offset is defined as it is currently.
<br>
<p>The obvious solution is to define MPI_Offset as a typedef as follow:
<br>
<p>&nbsp;&nbsp;&nbsp;/* Type of MPI_Offset */
<br>
&nbsp;&nbsp;&nbsp;typedef long long MPI_Offset;
<br>
<p>Note that a similar typedef is used for MPI_Aint:
<br>
<p>&nbsp;&nbsp;&nbsp;typedef long MPI_Aint;
<br>
<p><p>The seccond problem is related to the C++ interface: it uses direct C-style type cast that remove constness. Since ISO/C++ have the const_cast operator especially for this situation, the compiler generates TONS of warnings (I use to compile my code with -Wall and many other warning activated) and this is really annoying.
<br>
<p>The solution to this problem is to replace C-style cast with const_cast operator. For example the MPI::Comm::Send method defined in openmpi/ompi/mpi/cxx/comm_inln.h as follow:
<br>
<p>&nbsp;&nbsp;&nbsp;inline void
<br>
&nbsp;&nbsp;&nbsp;MPI::Comm::Send(const void *buf, int count, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, int dest, int tag) const
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)MPI_Send((void *)buf, count, datatype, dest, tag, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>becomes:
<br>
<p>&nbsp;&nbsp;&nbsp;inline void
<br>
&nbsp;&nbsp;&nbsp;MPI::Comm::Send(const void *buf, int count, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const MPI::Datatype &amp; datatype, int dest, int tag) const
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)MPI_Send(const_cast&lt;void *&gt;(buf), count, datatype, dest, tag, mpi_comm);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>This fix the annoying warning problem because the const_cast operator is the intended method to remove constness.
<br>
<p><p><p>Martin Audet                   E: matin.audet_at_[hidden]
<br>
Research Officer               T: 450-641-5034
<br>
Industrial Material Institute
<br>
National Research Council of Canada
<br>
75 de Mortagne, Boucherville, QC, J4B 6Y4
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0391/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0390.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Reply:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
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
