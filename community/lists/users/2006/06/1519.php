<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 18:25:40 2006" -->
<!-- isoreceived="20060630222540" -->
<!-- sent="Sat, 01 Jul 2006 00:25:00 +0200" -->
<!-- isosent="20060630222500" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1" -->
<!-- id="1151706300.12310.6.camel_at_newhon.site" -->
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
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 18:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Previous message:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I had encountered a bug in Open MPI 1.0.1 using indexed datatypes
<br>
with MPI_Recv (which seems to be of the &quot;off by one&quot; sort), which
<br>
was corrected in Open MPI 1.0.2.
<br>
<p>It seems to have resurfaced in Open MPI 1.1 (I encountered it using
<br>
different data and did not recognize it immediately, but it seems
<br>
it can reproduced using the same simplified test I had sent
<br>
the first time, which I re-attach here just in case).
<br>
<p>Here is a summary of the case:
<br>
<p>------------------
<br>
<p>Each processor reads a file (&quot;data_p0&quot; or &quot;data_p1&quot;) giving a list of
<br>
global element ids. Some elements (vertices from a partitionned mesh)
<br>
may belong to both processors, so their id's may appear on both
<br>
processors: we have 7178 global vertices, 3654 and 3688 of them being
<br>
known by ranks 0 and 1 respectively.
<br>
<p>In this simplified version, we assign coordinates {x, y, z} to each
<br>
vertex equal to it's global id number for rank 1, and the negative of
<br>
that for rank 0 (assigning the same values to x, y, and z). After
<br>
finishing the &quot;ordered gather&quot;, rank 0 prints the global id and
<br>
coordinates of each vertex.
<br>
<p>lines should print (for example) as:
<br>
&nbsp;&nbsp;6456 ;   6455.00000   6455.00000   6456.00000
<br>
&nbsp;&nbsp;6457 ;  -6457.00000  -6457.00000  -6457.00000
<br>
depending on whether a vertex belongs only to rank 0 (negative
<br>
coordinates) or belongs to rank 1 (positive coordinates).
<br>
<p>With the OMPI 1.0.1 bug (observed on Suse Linux 10.0 with gcc 4.0 and on
<br>
Debian sarge with gcc 3.4), we have for example for the last vertices:
<br>
&nbsp;&nbsp;7176 ;   7175.00000   7175.00000   7176.00000
<br>
&nbsp;&nbsp;7177 ;   7176.00000   7176.00000   7177.00000
<br>
seeming to indicate an &quot;off by one&quot; type bug in datatype handling
<br>
<p>Not using an indexed datatype (i.e. not defining USE_INDEXED_DATATYPE
<br>
in the gather_test.c file), the bug dissapears.
<br>
<p>------------------
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yvan Fournier
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1519/ompi_datatype_bug.tar.gz">ompi_datatype_bug.tar.gz</a>
</ul>
<!-- attachment="ompi_datatype_bug.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] Testing one-sided message passing with 1.1"</a>
<li><strong>Previous message:</strong> <a href="1518.php">Doug Gregor: "Re: [OMPI users] MPI_Bcast/MPI_Finalize hang with Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
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
