<?
$subject_val = "Re: [OMPI users] Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 14:21:51 2012" -->
<!-- isoreceived="20121107192151" -->
<!-- sent="Wed, 7 Nov 2012 13:21:47 -0600" -->
<!-- isosent="20121107192147" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to map MPI processes to sockets?" -->
<!-- id="CAANzjEnT2jbbPqMzi0vtASJ1NgztfCcvC9KdWrLyiANp-qXQGQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F168D5F_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to map MPI processes to sockets?<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 14:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In your desired ordering you have rank 0 on (socket,core) (0,0) and
<br>
rank 1 on (0,2). Is there an architectural reason for that? Meaning
<br>
are cores 0 and 1 hardware threads in the same core, or is there a
<br>
cache level (say L2 or L3) connecting cores 0 and 1 separate from
<br>
cores 2 and 3?
<br>
<p>hwloc's lstopo should give you that information if you don't have that
<br>
information handy.
<br>
<p>I am asking so that I might provide you with a potentially more
<br>
general solution than a rankfile.
<br>
<p>-- Josh
<br>
<p><p>On Wed, Nov 7, 2012 at 12:25 PM, Blosch, Edwin L
<br>
&lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am trying to map MPI processes to sockets in a somewhat compacted pattern
</span><br>
<span class="quotelev1">&gt; and I am wondering the best way to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say there are 2 sockets (0 and 1) and each processor has 4 cores (0,1,2,3)
</span><br>
<span class="quotelev1">&gt; and I have 4 MPI processes, each of which will use 2 OpenMP processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve re-ordered my parallel work such that pairs of ranks (0,1 and 2,3)
</span><br>
<span class="quotelev1">&gt; communicate more with each other than with other ranks.  Thus I think the
</span><br>
<span class="quotelev1">&gt; best mapping would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RANK   SOCKET    CORE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0              0              0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1              0              2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2              1              0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3              1              2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that --bysocket --bind-to-socket will give me ranks 0
</span><br>
<span class="quotelev1">&gt; and 2 on socket 0 and ranks 1 and 3 on socket 1, not what I want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like --cpus-per-proc might be what I want, i.e. seems like I might
</span><br>
<span class="quotelev1">&gt; give the value 2.  But it was unclear to me whether I would also need to
</span><br>
<span class="quotelev1">&gt; give --bysocket and the FAQ suggests this combination is untested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May be a rankfile is what I need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate some advice on the easiest way to get this mapping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20655.php">Jeff Squyres: "Re: [OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20653.php">Blosch, Edwin L: "[OMPI users] How is hwloc used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20652.php">Blosch, Edwin L: "[OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20656.php">Blosch, Edwin L: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
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
