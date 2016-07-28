<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  6 19:15:05 2010" -->
<!-- isoreceived="20101106231505" -->
<!-- sent="Sat, 6 Nov 2010 18:15:01 -0500" -->
<!-- isosent="20101106231501" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="AANLkTi=a25_UZsNOwSYPNyHOxb1dQJBnHtkfSB7Qbwj=_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="SNT134-W2A24F7698CC0955A94286CB4D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI data transfer error<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-06 19:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Nov 6, 2010 at 18:00, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About my MPI program bugs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used GDB and got the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0:  0x0000003a31c62184 in fwrite () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Clearly fwrite was called with invalid parameters, but you don't give enough
<br>
information for anyone to explain why.  Compile your program with debugging
<br>
symbols and print the whole stack trace, e.g. with &quot;backtrace full&quot;.  Also
<br>
try valgrind.
<br>
<p><p><span class="quotelev1">&gt; class CNSGA2
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; allocate mem for var;
</span><br>
<span class="quotelev1">&gt; some deallocate statement;
</span><br>
<span class="quotelev1">&gt; some pointers;
</span><br>
<span class="quotelev1">&gt; evaluate(); // it is a function
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This isn't even close to valid code since you can't have statements in the
<br>
suggested scope.
<br>
<p>main()
<br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; CNSGA2* nsga2a = new CNSGA2(true); // true or false are only for different
</span><br>
<span class="quotelev1">&gt; constructors
</span><br>
<span class="quotelev1">&gt; CNSGA2* nsga2b = new CNSGA2(false);
</span><br>
<span class="quotelev1">&gt;  if (myRank == 0) // scope1
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; initialize the objects of nsga2a or nsga2b;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  broadcast some parameters, which are got from scope1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the parameters, define a datatype (myData) so that all workers
</span><br>
<span class="quotelev1">&gt; use that to do recv and send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (myRank == 0) // scope2
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; send out myData to workers by the datatype defined above;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (myRank != 0)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; newCNSGA2 myNsga2;
</span><br>
<span class="quotelev1">&gt; recv data from master and work on the recved data;
</span><br>
<span class="quotelev1">&gt; myNsga2.evaluate(recv data);
</span><br>
<span class="quotelev1">&gt; send back results;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>According to the above, rank 0 never receives the results from before.  You
<br>
should paste valid code.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14710.php">Jerome Reybert: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14708.php">Jack Bryan: "Re: [OMPI users] Open MPI data transfer error"</a>
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
