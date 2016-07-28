<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 09:00:31 2007" -->
<!-- isoreceived="20071003130031" -->
<!-- sent="Wed, 3 Oct 2007 18:30:26 +0530" -->
<!-- isosent="20071003130026" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tool communication" -->
<!-- id="547db2260710030600i39eeaa9fpbc7816162f7239da_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6ab5deaf0710011349l127757f8vf4b6c8d14473ecf7_at_mail.gmail.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 09:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4140.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4138.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>In reply to:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Oleg :-)
<br>
<p>I am a newbie as far as MPI is concerned. Still I will take a shot:
<br>
<p>On 10/2/07, Oleg Morajko &lt;olegmorajko_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the context of my PhD research, I have been developing a run-time
</span><br>
<span class="quotelev1">&gt; performance analyzer for MPI-based applications.
</span><br>
<span class="quotelev1">&gt; My tool provides a controller process for each MPI task. In particular, when
</span><br>
<span class="quotelev1">&gt; a MPI job is started, a special wrapper script is generated that first
</span><br>
<span class="quotelev1">&gt; starts my controller processes and next each controller spawns an actual MPI
</span><br>
<span class="quotelev1">&gt; task (that performs MPI_Init etc.). I use dynamic instrumentation API
</span><br>
<span class="quotelev1">&gt; (DynInst API) to control and instrument MPI tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The point is I need to intercommunicate my controller processes, in
</span><br>
<span class="quotelev1">&gt; particular I need a point-to-point communication between arbitrary pair of
</span><br>
<span class="quotelev1">&gt; controllers. So it seems reasonable to take advantage of MPI itself and use
</span><br>
<span class="quotelev1">&gt; it for communication. However I am not sure what would be the impact of
</span><br>
<span class="quotelev1">&gt; calling MPI_Init and communicating from controller processes taking into
</span><br>
<span class="quotelev1">&gt; account both controllers and actual MPI  processes where started with the
</span><br>
<span class="quotelev1">&gt; same mpirun invocation. Actually I would need to assure that controllers
</span><br>
<span class="quotelev1">&gt; have a separate MPI execution enviroment while the application has another
</span><br>
<span class="quotelev1">&gt; one.
</span><br>
<p>Have you thought about using a separate MPI Communicator?
<br>
<p>Sorry if that was lame!
<br>
<p>Regards,
<br>
Amit
<br>
<p><pre>
-- 
Amit Kumar Saha
me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
URL:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4140.php">Miguel Figueiredo Mascarenhas Sousa Filipe: "[OMPI users] OpenMPI binding all tasks to cpu0, leaving cpu1 idle. (2-cpu system)"</a>
<li><strong>Previous message:</strong> <a href="4138.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<li><strong>In reply to:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
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
