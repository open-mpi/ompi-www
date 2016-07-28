<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 30 16:55:14 2007" -->
<!-- isoreceived="20070130215514" -->
<!-- sent="Tue, 30 Jan 2007 16:55:09 -0500" -->
<!-- isosent="20070130215509" -->
<!-- name="Ivan de Jesus Deras Tabora" -->
<!-- email="ideras_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_create_subarray fails!" -->
<!-- id="77a596ab0701301355q597e9b16x40235dc509a6d9d3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ivan de Jesus Deras Tabora (<em>ideras_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-30 16:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2575.php">Avishay Traeger: "[OMPI users] test"</a>
<li><strong>Previous message:</strong> <a href="2573.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2591.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2591.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Recently I installed OpenMPI 1.1.4 using the source RPM on Fedora Core
<br>
6.  then I tried to run some benchmarks from NASA.  First I tried is
<br>
some I/O benchmarks, It compiles, but when I run it, it generates the
<br>
following error:
<br>
<p>[abc:25584] *** An error occurred in MPI_Type_create_subarray
<br>
[abc:25583] *** on communicator MPI_COMM_WORLD
<br>
[abc:25583] *** MPI_ERR_TYPE: invalid datatype
<br>
[abc:25583] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Then I find all the references to the MPI_Type_create_subarray and
<br>
create a little program just to test that part of the code, the code I
<br>
created is:
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype subarray, type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int array_size[] = {9};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int array_subsize[] = {3};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int array_start[] = {1};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, err;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Create a new type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(5, MPI_INT, &amp;type);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;type);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Create a subarray datatype */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_create_subarray(1, array_size, array_subsize,
<br>
array_start, MPI_ORDER_C, type, &amp;subarray);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;subarray);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>After running this little program using mpirun, it raises the same error.
<br>
<p>Thanks in advance,
<br>
Ivan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2575.php">Avishay Traeger: "[OMPI users] test"</a>
<li><strong>Previous message:</strong> <a href="2573.php">Jeff Squyres: "Re: [OMPI users] ompi_info segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2591.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2591.php">Robert Latham: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
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
