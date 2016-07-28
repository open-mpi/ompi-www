<?
$subject_val = "[OMPI users] Possible memory leak in MPI_Gather";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 05:18:12 2012" -->
<!-- isoreceived="20121203101812" -->
<!-- sent="Mon, 3 Dec 2012 11:18:07 +0100" -->
<!-- isosent="20121203101807" -->
<!-- name="Silvio a Beccara" -->
<!-- email="s.abeccara_at_[hidden]" -->
<!-- subject="[OMPI users] Possible memory leak in MPI_Gather" -->
<!-- id="CACRG-aYXL9_GFqmhiFS7X7HRSVhNrb3OaUxFyBvZWYU9AShUrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Possible memory leak in MPI_Gather<br>
<strong>From:</strong> Silvio a Beccara (<em>s.abeccara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-03 05:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Previous message:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>I have found a memory leak in an MPI program of mine. Basically the
<br>
memory used by the program increases first rapidly, and then linearly,
<br>
even if slowly, with time.
<br>
<p>I reproduced the error in a very simple program, which I include here:
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p><p>typedef struct {
<br>
<p>&nbsp;&nbsp;double* send_buffer;
<br>
&nbsp;&nbsp;double* receive_buffer;
<br>
<p>} my_structure;
<br>
<p><p><p>my_structure* my_structure_alloc ( int nelems, int nprocs ) {
<br>
<p>&nbsp;&nbsp;my_structure* my_object;
<br>
&nbsp;&nbsp;my_object = ( my_structure* ) malloc ( sizeof ( my_structure ) );
<br>
<p>&nbsp;&nbsp;if ( !my_object ) return ( NULL );
<br>
<p>&nbsp;&nbsp;my_object -&gt; send_buffer = ( double* ) malloc ( nelems * sizeof ( double ) );
<br>
&nbsp;&nbsp;my_object -&gt; receive_buffer = ( double* ) malloc ( nelems * nprocs *
<br>
sizeof ( double ) );
<br>
<p>&nbsp;&nbsp;return ( my_object );
<br>
<p>}
<br>
<p><p><p>void my_structure_free ( my_structure* my_object ) {
<br>
<p>&nbsp;&nbsp;free ( my_object -&gt; send_buffer );
<br>
&nbsp;&nbsp;free ( my_object -&gt; receive_buffer );
<br>
<p>}
<br>
<p><p><p><p>void collect_elements ( my_structure* my_object, int nelems, int
<br>
idproc, int istep, int nsteps ) {
<br>
<p>&nbsp;&nbsp;int ielem;
<br>
<p>&nbsp;&nbsp;static double* send_buffer = NULL;
<br>
&nbsp;&nbsp;if ( send_buffer == NULL ) send_buffer = ( double* ) malloc ( nelems
<br>
* sizeof ( double ) );
<br>
<p><p>&nbsp;&nbsp;for ( ielem = 0; ielem &lt; nelems; ielem++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;send_buffer [ ielem ] = sqrt ( 2.0 * ( double ) idproc * rand()  );
<br>
&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;MPI_Gather ( send_buffer, nelems, MPI_DOUBLE, my_object -&gt;
<br>
receive_buffer, nelems, MPI_DOUBLE, 0, MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;if ( istep == nsteps - 1 ) free ( send_buffer );
<br>
<p>} //end collect_elements
<br>
<p><p><p>int main ( int argc, char **argv ) {
<br>
<p><p>&nbsp;&nbsp;int idproc;
<br>
&nbsp;&nbsp;int nprocs;
<br>
&nbsp;&nbsp;int nelems = 1;
<br>
&nbsp;&nbsp;int istep;
<br>
&nbsp;&nbsp;long nsteps;
<br>
<p>&nbsp;&nbsp;MPI_Init ( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;MPI_Comm_rank ( MPI_COMM_WORLD, &amp;idproc );
<br>
&nbsp;&nbsp;MPI_Comm_size ( MPI_COMM_WORLD, &amp;nprocs );
<br>
<p>&nbsp;&nbsp;my_structure* my_object;
<br>
<p>&nbsp;&nbsp;my_object = my_structure_alloc ( nelems, nprocs );
<br>
<p>&nbsp;&nbsp;nsteps = 1000000000;
<br>
<p>&nbsp;&nbsp;for ( istep = 0; istep &lt; nsteps; istep++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collect_elements ( my_object, nelems, idproc, istep, nsteps );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( istep % 1000 == 0 ) { fprintf ( stderr, &quot;# ISTEP = %i\n&quot;, istep ); }
<br>
&nbsp;&nbsp;} //for istep
<br>
<p><p>&nbsp;my_structure_free ( my_object );
<br>
<p>&nbsp;MPI_Finalize();
<br>
<p>} //end main
<br>
<p>I compiled with the following command:
<br>
mpicc.openmpi -lm Mpi_Gather_leak.c -o Mpi_Gather_leak
<br>
<p>and run the following way:
<br>
mpirun.openmpi -np 4 -mca mpi_leave_pinned 0 ./Mpi_Gather_leak
<br>
<p>I check memory usage by using the pidof command. Analysis of the
<br>
memory with the mtrace() function gives no reference to unfreed memory
<br>
in the program, but only
<br>
to hexadecimal addresses (which I reckon refer to some library).
<br>
<p>I have OpenMPI version 1.4.3, running on a Kubuntu 12.04 Intel 64 system.
<br>
<p>Best regards
<br>
<p>Silvio a Beccara
<br>
<p>FBK Foundation
<br>
via Sommarive, 18
<br>
I-38123 Povo TN
<br>
ITALY
<br>
<a href="http://www.fbk.eu">http://www.fbk.eu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20858.php">Eric Chamberland: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<li><strong>Previous message:</strong> <a href="20856.php">pascal.deveze_at_[hidden]: "Re: [OMPI users] Lustre hints via environment variables/runtime	parameters"</a>
<!-- nextthread="start" -->
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
