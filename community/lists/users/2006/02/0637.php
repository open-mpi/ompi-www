<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 17:08:56 2006" -->
<!-- isoreceived="20060210220856" -->
<!-- sent="Fri, 10 Feb 2006 23:06:43 +0100" -->
<!-- isosent="20060210220643" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes" -->
<!-- id="1139609203.17594.9.camel_at_newhon.site" -->
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
<strong>Date:</strong> 2006-02-10 17:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Reply:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I seem to have encountered a bug in Open MPI 1.0 using indexed datatypes
<br>
with MPI_Recv (which seems to be of the &quot;off by one&quot; sort). I have
<br>
joined a test case, which is briefly explained below (as well as in the
<br>
source file). This case should run on two processes. I observed the bug
<br>
on 2 different Linux systems (single processor Centrino under Suse 10.0
<br>
with gcc 4.0.2, dual-processor Xeon under Debian Sarge with gcc 3.4)
<br>
with Open MPI 1.0.1, and do not observe it using LAM 7.1.1 or MPICH2.
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
in the gather_test.c file), the bug dissapears. Using the indexed
<br>
datatype with LAM MPI 7.1.1 or MPICH2, we do not reproduce the bug
<br>
either, so it does seem to be an Open MPI issue.
<br>
<p>------------------
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yvan Fournier
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0637/ompi_datatype_bug.tar.gz">ompi_datatype_bug.tar.gz</a>
</ul>
<!-- attachment="ompi_datatype_bug.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] A few benchmarks"</a>
<li><strong>Previous message:</strong> <a href="0636.php">James Conway: "[OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Reply:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
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
