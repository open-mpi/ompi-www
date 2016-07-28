<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 14:05:17 2008" -->
<!-- isoreceived="20081208190517" -->
<!-- sent="Mon, 08 Dec 2008 20:05:03 +0100" -->
<!-- isosent="20081208190503" -->
<!-- name="Jens" -->
<!-- email="jens-devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="493D6FDF.9040904_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="493D61DB.1030007_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> Jens (<em>jens-devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 14:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugen,
<br>
<p>thanks for your answer ... I am beginning to understand - even though I
<br>
am not happy with it :)
<br>
<p>Greetings
<br>
Jens
<br>
<p>Eugene Loh schrieb:
<br>
<span class="quotelev1">&gt; Jens wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to run a paraview-server all time on our cluster (even
</span><br>
<span class="quotelev2">&gt;&gt; though it is not in use 24h) - but this would simply result in some kind
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;heating-thread&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Even though it has (in theory) no impact on the node performace (which
</span><br>
<span class="quotelev2">&gt;&gt; is part of a grid-engine), it would simply result in some kind of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;heating-thread&quot; which is not a nice idea.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Further (and you can test this), it doesn't yield 100% effectively. 
</span><br>
<span class="quotelev1">&gt; E.g., even if you had other processes ready and eager to consume the
</span><br>
<span class="quotelev1">&gt; CPU, it seems (based on my tests) that a waiting/yielding OMPI process
</span><br>
<span class="quotelev1">&gt; won't give up the CPU very well.  E.g., maybe only 50%.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An MPI implementation could be more cautious.  E.g., it could put a
</span><br>
<span class="quotelev1">&gt; process to sleep and poll only occasionally for in-coming messages or
</span><br>
<span class="quotelev1">&gt; have some other way of waking up when needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trade-offs are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) the more you give up the CPU, the longer it takes to wake up
</span><br>
<span class="quotelev1">&gt; *) the more control over this trade off you give to the user, the more
</span><br>
<span class="quotelev1">&gt; the user needs to understand the tradeoffs
</span><br>
<span class="quotelev1">&gt; *) the more control you want to allow, the more complex the MPI
</span><br>
<span class="quotelev1">&gt; implementation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding the last one, I think OMPI only allows aggressive or else
</span><br>
<span class="quotelev1">&gt; yield.  No sleep.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7467.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7465.php">Douglas Guptill: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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
