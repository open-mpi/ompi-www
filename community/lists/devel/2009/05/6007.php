<?
$subject_val = "Re: [OMPI devel] Bug in return status of MPI_WAIT()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 09:38:11 2009" -->
<!-- isoreceived="20090512133811" -->
<!-- sent="Tue, 12 May 2009 09:38:05 -0400" -->
<!-- isosent="20090512133805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in return status of MPI_WAIT()" -->
<!-- id="C7AEFCC7-1C9F-45AE-8C10-4B818B480E46_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201B0F6E5F5_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in return status of MPI_WAIT()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 09:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6006.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6002.php">Katz, Jacob: "[OMPI devel] Bug in return status of MPI_WAIT()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay -- I replied to the original post on the user's  
<br>
list.
<br>
<p><p>On May 12, 2009, at 6:21 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; Fwd&#146;ing to devel list as a bug report&#133;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; Jacob M. Katz | jacob.katz_at_[hidden] | Work: +972-4-865-5726 | iNet:  
</span><br>
<span class="quotelev1">&gt; (8)-465-5726
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Katz, Jacob
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, May 10, 2009 12:52
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Bug in return status of MPI_WAIT()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; While trying error-related functionality of OMPI, I came across a  
</span><br>
<span class="quotelev1">&gt; situation where when I use MPI_ERRORS_RETURN error handler, the  
</span><br>
<span class="quotelev1">&gt; errors do not come out correctly from WAIT calls.
</span><br>
<span class="quotelev1">&gt; The program below correctly terminates with a fatal &#147;message  
</span><br>
<span class="quotelev1">&gt; truncated&#148; error, but when the line setting the error handler to  
</span><br>
<span class="quotelev1">&gt; MPI_ERRORS_RETURN is uncommented, it silently completes. I expected  
</span><br>
<span class="quotelev1">&gt; the print out that checks the status after WAIT call to be executed,  
</span><br>
<span class="quotelev1">&gt; but it wasn&#146;t.
</span><br>
<span class="quotelev1">&gt; The issue didn&#146;t happen when using blocking recv.
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6006.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6002.php">Katz, Jacob: "[OMPI devel] Bug in return status of MPI_WAIT()"</a>
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
