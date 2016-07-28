<?
$subject_val = "[OMPI users] Bug in return status of MPI_WAIT()?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 10 05:52:39 2009" -->
<!-- isoreceived="20090510095239" -->
<!-- sent="Sun, 10 May 2009 12:51:31 +0300" -->
<!-- isosent="20090510095131" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in return status of MPI_WAIT()?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F2D009FFFC_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> [OMPI users] Bug in return status of MPI_WAIT()?<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-10 05:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
<li><strong>Previous message:</strong> <a href="9281.php">Katz, Jacob: "[OMPI users] Wrapping MPI program in a script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Reply:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
While trying error-related functionality of OMPI, I came across a situation where when I use MPI_ERRORS_RETURN error handler, the errors do not come out correctly from WAIT calls.
<br>
The program below correctly terminates with a fatal &quot;message truncated&quot; error, but when the line setting the error handler to MPI_ERRORS_RETURN is uncommented, it silently completes. I expected the print out that checks the status after WAIT call to be executed, but it wasn't.
<br>
The issue didn't happen when using blocking recv.
<br>
<p>A bug or my incorrect usage?
<br>
<p>Thanks!
<br>
<p>// mpic++ -o test test.cpp
<br>
// mpirun -np2 ./test
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;iostream&gt;
<br>
using namespace std;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buf[100] = &quot;hmmmm&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Status stat;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank = MPI::COMM_WORLD.Get_rank();
<br>
<p>//    MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_RETURN);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Request r = MPI::COMM_WORLD.Irecv(buf, 1, MPI_CHAR, MPI::ANY_SOURCE, MPI::ANY_TAG);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r.Wait(stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (stat.Get_error() != MPI::SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;0: Error during recv&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(buf, 2, MPI_CHAR, 0, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (0);
<br>
}
<br>
<p>--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden]&lt;mailto:jacob.katz_at_[hidden]&gt; | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p>---------------------------------------------------------------------
<br>
Intel Israel (74) Limited
<br>
<p>This e-mail and any attachments may contain confidential material for
<br>
the sole use of the intended recipient(s). Any review or distribution
<br>
by others is strictly prohibited. If you are not the intended
<br>
recipient, please contact the sender and delete all copies.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9282/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9283.php">ms3770_at_[hidden]: "[OMPI users] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot; FLAG."</a>
<li><strong>Previous message:</strong> <a href="9281.php">Katz, Jacob: "[OMPI users] Wrapping MPI program in a script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<li><strong>Reply:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
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
