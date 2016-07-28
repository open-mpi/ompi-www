<?
$subject_val = "Re: [OMPI devel] Deadlock when creating too many communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 12:44:55 2009" -->
<!-- isoreceived="20090916164455" -->
<!-- sent="Wed, 16 Sep 2009 11:44:50 -0500" -->
<!-- isosent="20090916164450" -->
<!-- name="Wolfgang Bangerth" -->
<!-- email="bangerth_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlock when creating too many communicators" -->
<!-- id="200909161144.50834.bangerth_at_math.tamu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200909051552.14912.bangerth_at_math.tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlock when creating too many communicators<br>
<strong>From:</strong> Wolfgang Bangerth (<em>bangerth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-16 12:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6842.php">Lisandro Dalcin: "[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
there didn't appear any discussion on the problem below, but I believe that 
<br>
this is just yet another manifestation of what you have already found as 
<br>
ticket #2009.
<br>
<p>Best
<br>
&nbsp;Wolfgang
<br>
<p><span class="quotelev1">&gt; Howdy,
</span><br>
<span class="quotelev1">&gt; here's a creative way to deadlock a program: create and destroy 65500 and
</span><br>
<span class="quotelev1">&gt; some communicators and send a message on each of them:
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define CHECK(a)				\
</span><br>
<span class="quotelev1">&gt;   {						\
</span><br>
<span class="quotelev1">&gt;     int err = (a);				\
</span><br>
<span class="quotelev1">&gt;     if (err != 0) std::cout &lt;&lt; &quot;Error in line &quot; &lt;&lt; __LINE__ &lt;&lt; std::endl; \
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int a=0, b;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for (int i=0; i&lt;1000000; ++i)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;       if (i % 100 == 0) std::cout&lt;&lt; &quot;Duplication event &quot; &lt;&lt; i &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Comm dup;
</span><br>
<span class="quotelev1">&gt;       CHECK(MPI_Comm_dup (MPI_COMM_WORLD, &amp;dup));
</span><br>
<span class="quotelev1">&gt;       CHECK(MPI_Allreduce(&amp;a, &amp;b, 1, MPI_INT, MPI_MIN, dup));
</span><br>
<span class="quotelev1">&gt;       CHECK(MPI_Comm_free (&amp;dup));
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; If you run this, for example, on two processors with OpenMPI 1.2.6 or
</span><br>
<span class="quotelev1">&gt; 1.3.2, you'll see that the program runs until after it produces 65500 as
</span><br>
<span class="quotelev1">&gt; output, and then just hangs -- on my system somewhere in the operating
</span><br>
<span class="quotelev1">&gt; system poll(), running full steam.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I take care of destroying the communicators again, I would have
</span><br>
<span class="quotelev1">&gt; expected this to work. I use creating many communicators basically as a
</span><br>
<span class="quotelev1">&gt; debugging tool: every object gets its own communicator to work on to
</span><br>
<span class="quotelev1">&gt; ensure that different objects don't communicate by accident with each
</span><br>
<span class="quotelev1">&gt; other just because they all use MPI_COMM_WORLD. It would be nice if this
</span><br>
<span class="quotelev1">&gt; mode of using MPI could be made to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best &amp; thanks in advance!
</span><br>
<span class="quotelev1">&gt;  Wolfgang
</span><br>
<p><p><p><pre>
-- 
-------------------------------------------------------------------------
Wolfgang Bangerth                email:            bangerth_at_[hidden]
                                 www: <a href="http://www.math.tamu.edu/~bangerth/">http://www.math.tamu.edu/~bangerth/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6842.php">Lisandro Dalcin: "[OMPI devel] Dynamic languages, dlopen() issues, and symbol visibility of libtool 	ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6840.php">Edgar Gabriel: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6791.php">Wolfgang Bangerth: "[OMPI devel] Deadlock when creating too many communicators"</a>
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
