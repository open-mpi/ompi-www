<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 09:59:30 2007" -->
<!-- isoreceived="20070512135930" -->
<!-- sent="Sat, 12 May 2007 15:58:11 +0200" -->
<!-- isosent="20070512135811" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time" -->
<!-- id="200705121558.11811.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="464587F8.1080802_at_higgs.gen.tr" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 09:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Previous message:</strong> <a href="3253.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Saturday 12 May 2007 11:25, Sefa Arslan wrote:
<br>
<span class="quotelev1">&gt; I need to use rank of the mpi processes in my sub functions ( c
</span><br>
<span class="quotelev1">&gt; language). which one has more cost?;
</span><br>
<span class="quotelev1">&gt;     creating a new variable&amp; and finding the rank in each sub function by:
</span><br>
<span class="quotelev1">&gt;         int mpi_rank;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank(MPI_COMM_WORLD,&amp;mpi_rank);
</span><br>
<span class="quotelev1">&gt; or finding the rank in main function once, and every time sending
</span><br>
<span class="quotelev1">&gt; this information to the    functions in function arguments like
</span><br>
<span class="quotelev1">&gt;     foo(a,b,c,mpi_rank);
</span><br>
Depends how often You call this function, too.
<br>
But You ommitted another solution, so let's see:
<br>
1.) Calling MPI_Comm_rank involves:
<br>
- Overhead of calling the function MPI_Comm_rank
<br>
- Overhead of checking the communicator (in case of --enable-debug),
<br>
- (otherwise, only the inline function ompi_comm_rank is evaluated as 
<br>
comm-&gt;c_my_rank).
<br>
<p>2.) Calling MPI_Comm_rank once and pass the rank as parameter:
<br>
- Clutters Your function parameters...
<br>
<p>3.) Keep the mpi_rank of MPI_COMM_WORLD as global variable.
<br>
<p>The latter would be the fastest; although not possibly the nicest solution; if 
<br>
You already have a structure keeping init-once variables, this would be the 
<br>
place to keep...
<br>
<p>Hope, this helps.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3255.php">Jeff Squyres: "Re: [OMPI users] errors in stdin"</a>
<li><strong>Previous message:</strong> <a href="3253.php">Jeff Squyres: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3249.php">Sefa Arslan: "[OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
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
