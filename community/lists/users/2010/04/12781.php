<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 09:37:24 2010" -->
<!-- isoreceived="20100426133724" -->
<!-- sent="Mon, 26 Apr 2010 06:37:08 -0700" -->
<!-- isosent="20100426133708" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="4BD59704.5000904_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="h2x28d120cc1004260231r7c301c5dy11fd8ab79450e5bc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 09:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12782.php">Matthew MacManes: "[OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/26/2010 2:31 AM, Asad Ali wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 26, 2010 at 8:01 PM, Ashley Pittman &lt;ashley_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ashley_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 25 Apr 2010, at 22:27, Asad Ali wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Yes I use different machines such as
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; machine 1 uses AMD Opterons. (Fedora)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; machine 2 and 3 use Intel Xeons. (CentOS)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; machine 4 uses slightly older Intel Xeons. (Debian)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Only machine 1 gives correct results.  While CentOS and Debian
</span><br>
<span class="quotelev1">&gt;     results are same but are wrong and different from those of machine 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Have you verified the are actually wrong or are they just
</span><br>
<span class="quotelev1">&gt;     different?  It's actually perfectly possible for the same program
</span><br>
<span class="quotelev1">&gt;     to get different results from run to run even on the same hardware
</span><br>
<span class="quotelev1">&gt;     and the same OS.  All floating point operations by the MPI library
</span><br>
<span class="quotelev1">&gt;     are expected to be deterministic but changing the process layout
</span><br>
<span class="quotelev1">&gt;     or and MPI settings can affect this and of course anything the
</span><br>
<span class="quotelev1">&gt;     application does can introduce differences as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ashley.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is the same with the same input/output and the same constants 
</span><br>
<span class="quotelev1">&gt; etc. From run to run the results can only be different if you either 
</span><br>
<span class="quotelev1">&gt; use different input/output or use different random number seeds. Here 
</span><br>
<span class="quotelev1">&gt; in my case the random number seeds are the same as well. This means 
</span><br>
<span class="quotelev1">&gt; that this code must give (and it does) the same results no matter how 
</span><br>
<span class="quotelev1">&gt; many times you run it. I didn't tamper with mpi-settings for any run. 
</span><br>
<span class="quotelev1">&gt; I have verified that results of only Fedora are correct because I know 
</span><br>
<span class="quotelev1">&gt; what is in my data and how should my model behave and I get a nearly 
</span><br>
<span class="quotelev1">&gt; perfect convergence on Fedora OS. Even my dual core laptop with Ubuntu 
</span><br>
<span class="quotelev1">&gt; 9.10 also gives correct results. The other OSs give the same results 
</span><br>
<span class="quotelev1">&gt; for a few hundred iterations as Fedora but then an unusual thing 
</span><br>
<span class="quotelev1">&gt; happens and the results start getting wrong.
</span><br>
If you're really interested in solving your &quot;problem,&quot;  you'll have to 
<br>
consider important details such as which compiler was used, which 
<br>
options (e.g. 387 vs. sse), run-time setting of x87 or SSE control 
<br>
registers, 32- vs. 64-bit compilation.  SSE2 is the default for 64-bit 
<br>
compilation, but compilers vary on defaults for 32-bit.  If your program 
<br>
depends on x87 extra precision of doubles, or efficient mixing of double 
<br>
and long double, 387 code may be a better choice, but limits your 
<br>
efficiency.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12782.php">Matthew MacManes: "[OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12793.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
