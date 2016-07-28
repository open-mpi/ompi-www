<?
$subject_val = "[OMPI users] PathScale problems persist";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 07:32:13 2010" -->
<!-- isoreceived="20100921113213" -->
<!-- sent="Tue, 21 Sep 2010 13:31:34 +0200" -->
<!-- isosent="20100921113134" -->
<!-- name="Rafael Arco Arredondo" -->
<!-- email="rafaarco_at_[hidden]" -->
<!-- subject="[OMPI users] PathScale problems persist" -->
<!-- id="1285068694.9741.5.camel_at_boabdilmec" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] PathScale problems persist<br>
<strong>From:</strong> Rafael Arco Arredondo (<em>rafaarco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 07:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Maybe reply:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>In January, I reported a problem with Open MPI 1.4.1 and PathScale 3.2
<br>
about a simple Hello World that hung on initialization
<br>
( <a href="http://www.open-mpi.org/community/lists/users/2010/01/11863.php">http://www.open-mpi.org/community/lists/users/2010/01/11863.php</a> ).
<br>
Open MPI 1.4.2 does not show this problem.
<br>
<p>However, now we are having trouble with the 1.4.2, PathScale 3.2, and
<br>
the C++ bindings. The following code:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;int node, size;
<br>
<p>&nbsp;&nbsp;MPI::Init(argc, argv);
<br>
&nbsp;&nbsp;MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
<br>
<p>&nbsp;&nbsp;try {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size = MPI::COMM_WORLD.Get_size();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Hello world from process &quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; size &lt;&lt; &quot;!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;catch(MPI::Exception e) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;MPI Error: &quot; &lt;&lt; e.Get_error_code()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot; - &quot; &lt;&lt; e.Get_error_string() &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>generates the following output:
<br>
<p>[host1:29934] *** An error occurred in MPI_Comm_set_errhandler
<br>
[host1:29934] *** on communicator MPI_COMM_WORLD
<br>
[host1:29934] *** MPI_ERR_COMM: invalid communicator
<br>
[host1:29934] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 29934 on
<br>
node host1 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[host1:29931] 3 more processes have sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[host1:29931] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>There are no problems when Open MPI 1.4.2 is built with GCC (GCC 4.1.2).
<br>
No problems are found with Open MPI 1.2.6 and PathScale either.
<br>
<p>Best regards,
<br>
<p>Rafa
<br>
<p><pre>
-- 
Rafael Arco Arredondo
Centro de Servicios de Inform&#195;&#161;tica y Redes de Comunicaciones
Campus de Fuentenueva - Edificio Mecenas
Universidad de Granada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14255.php">Ashley Pittman: "Re: [OMPI users] Thread as MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Maybe reply:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
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
