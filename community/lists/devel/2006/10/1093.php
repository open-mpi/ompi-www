<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 12:42:35 2006" -->
<!-- isoreceived="20061002164235" -->
<!-- sent="Mon, 2 Oct 2006 18:42:25 +0200" -->
<!-- isosent="20061002164225" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI::File::Create_errhandler() missing?" -->
<!-- id="20061002164224.GA30184_at_cluster.inf-ra.uni-jena.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-02 12:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/09/1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Reply:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>After doing some application coding using the C++ bindings, I tried to
<br>
create a custom MPI::File Errorhandler but failed: 
<br>
<p>| mpiiowriter.cc: In member function `virtual void MPIIOWriter::initialized()':
<br>
| mpiiowriter.cc:29: error: `Create_errhandler' is not a member of `MPI::File'
<br>
| mpiiowriter.cc:29: warning: unused variable 'errhandler'
<br>
<p>After some source grepping, it seems that the function
<br>
MPI::File::Create_errhandler() is not implemented, although the MPI2.0
<br>
standard requires it for MPI-IO. Should I file a ticket?
<br>
<p>Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/09/1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
<li><strong>Reply:</strong> <a href="1094.php">Jeff Squyres: "Re: [OMPI devel] MPI::File::Create_errhandler() missing?"</a>
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
