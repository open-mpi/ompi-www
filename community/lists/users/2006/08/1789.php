<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 12:13:52 2006" -->
<!-- isoreceived="20060829161352" -->
<!-- sent="Tue, 29 Aug 2006 12:13:31 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20060829161331" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Short Long messages when synchronous" -->
<!-- id="Pine.WNT.4.64.0608291139160.3936_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cc86c080608290645o799215e8v61f32158ec4e2806_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-29 12:13:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 29 Aug 2006, Marcelo Stival wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 2 questions related to short/long message protocols...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When using synchronous comm mode, short  messages (&lt;64kB) still be
</span><br>
<span class="quotelev1">&gt; transferred eagerly?
</span><br>
<p>Depend. 64Kb is not the limits between the eager and rendez-vous protocol. 
<br>
In fact it depend on the underlying network that get activated. Anyway, 
<br>
for this particular question this limit between the eager and rendez-vous 
<br>
protocol does not matter. Synchronous is alway a rendez-vous protocol as 
<br>
specified in the MPI standard.
<br>
<p><span class="quotelev1">&gt; And larger messages will be transferred using rendezvous...?
</span><br>
<p>That's always the case even for non synchronous operations.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) When the progress-thread (tcp btl) will be applied?
</span><br>
<span class="quotelev1">&gt; Just for long messages? Does it affect synchronous short messages sends?
</span><br>
<p>The behavior will be the same with or without threads.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1790.php">Rainer Keller: "Re: [OMPI users] OpenMPI error in the simplest configuration..."</a>
<li><strong>Previous message:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1788.php">Marcelo Stival: "[OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
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
