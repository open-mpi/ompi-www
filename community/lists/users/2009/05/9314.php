<?
$subject_val = "Re: [OMPI users] Bug in return status of MPI_WAIT()?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:50:46 2009" -->
<!-- isoreceived="20090512145046" -->
<!-- sent="Tue, 12 May 2009 17:49:30 +0300" -->
<!-- isosent="20090512144930" -->
<!-- name="Katz, Jacob" -->
<!-- email="jacob.katz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in return status of MPI_WAIT()?" -->
<!-- id="89F8C511E9BE1F41AE2F1BB0424037F201B0F6E813_at_hasmsx504.ger.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A95E7AF-C91F-41D8-8238-1049DC3480BE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in return status of MPI_WAIT()?<br>
<strong>From:</strong> Katz, Jacob (<em>jacob.katz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 10:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9315.php">Silviu Groza: "[OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah... Thanks, Jeff.
<br>
If the standard would explicitly mention that MPI::ERRORS_RETURN is useless with C++ binding, life would be a little easier...
<br>
<p>--------------------------------
<br>
Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet: (8)-465-5726
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Tuesday, May 12, 2009 16:37
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Bug in return status of MPI_WAIT()?
<br>
<p>Greetings Jacob; sorry for the slow reply.
<br>
<p>This is pretty subtle, but I think that your test is incorrect (I
<br>
remember arguing about this a long time ago and eventually having
<br>
another OMPI developer prove me wrong! :-) ).
<br>
<p>1. You're setting MPI_ERRORS_RETURN, which, if you're using the C++
<br>
bindings, means you won't be able to see if an error occurs because
<br>
they don't return the int error codes.
<br>
<p>2. The MPI_ERROR field in the status is specifically *not* set for
<br>
MPI_TEST and MPI_WAIT.  It *is* set for the multi-test/wait functions
<br>
(e.g., MPI_TESTANY, MPI_WAITALL).  MPI-2.1 p52:44-48 says:
<br>
<p>&quot;Error codes belonging to the error class MPI_ERR_IN_STATUS should be
<br>
returned only by the MPI completion functions that take arrays of
<br>
MPI_STATUS.  For the functions MPI_TEST, MPI_TESTANY, MPI_WAIT, and
<br>
MPI_WAITANY, which return a single MPI_STATUS value, the normal MPI
<br>
error return process should be used (not the MPI_ERROR field in the
<br>
MPI_STATUS argument).&quot;
<br>
<p>So I think you need to use MPI::ERRORS_THROW_EXCEPTIONS to catch the
<br>
error in this case, or look at the return value from the C binding for
<br>
MPI_WAIT.
<br>
<p><p>On May 10, 2009, at 5:51 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; While trying error-related functionality of OMPI, I came across a
</span><br>
<span class="quotelev1">&gt; situation where when I use MPI_ERRORS_RETURN error handler, the
</span><br>
<span class="quotelev1">&gt; errors do not come out correctly from WAIT calls.
</span><br>
<span class="quotelev1">&gt; The program below correctly terminates with a fatal &quot;message
</span><br>
<span class="quotelev1">&gt; truncated&quot; error, but when the line setting the error handler to
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_RETURN is uncommented, it silently completes. I expected
</span><br>
<span class="quotelev1">&gt; the print out that checks the status after WAIT call to be executed,
</span><br>
<span class="quotelev1">&gt; but it wasn't.
</span><br>
<span class="quotelev1">&gt; The issue didn't happen when using blocking recv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bug or my incorrect usage?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // mpic++ -o test test.cpp
</span><br>
<span class="quotelev1">&gt; // mpirun -np2 ./test
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     char buf[100] = &quot;hmmmm&quot;;
</span><br>
<span class="quotelev1">&gt;     MPI::Status stat;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;     rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //    MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_RETURN);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (rank == 0)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         MPI::Request r = MPI::COMM_WORLD.Irecv(buf, 1, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt; MPI::ANY_SOURCE, MPI::ANY_TAG);
</span><br>
<span class="quotelev1">&gt;         r.Wait(stat);
</span><br>
<span class="quotelev1">&gt;         if (stat.Get_error() != MPI::SUCCESS)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             cout &lt;&lt; &quot;0: Error during recv&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         MPI::COMM_WORLD.Send(buf, 2, MPI_CHAR, 0, 0);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;     return (0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet:
</span><br>
<span class="quotelev1">&gt; (8)-465-5726
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Intel Israel (74) Limited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail and any attachments may contain confidential material for
</span><br>
<span class="quotelev1">&gt; the sole use of the intended recipient(s). Any review or distribution
</span><br>
<span class="quotelev1">&gt; by others is strictly prohibited. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender and delete all copies.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
---------------------------------------------------------------------
Intel Israel (74) Limited
This e-mail and any attachments may contain confidential material for
the sole use of the intended recipient(s). Any review or distribution
by others is strictly prohibited. If you are not the intended
recipient, please contact the sender and delete all copies.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9315.php">Silviu Groza: "[OMPI users] Problem installing Dalton with OpenMPI over PelicanHPC"</a>
<li><strong>Previous message:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI users] Bug in return status of MPI_WAIT()?"</a>
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
