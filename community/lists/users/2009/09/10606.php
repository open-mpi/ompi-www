<?
$subject_val = "Re: [OMPI users] Messages getting lost during transmission (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 12:52:28 2009" -->
<!-- isoreceived="20090910165228" -->
<!-- sent="Thu, 10 Sep 2009 09:53:19 -0700" -->
<!-- isosent="20090910165319" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Messages getting lost during transmission (?)" -->
<!-- id="4AA92EFF.4040709_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AA8B226.6020207_at_kit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Messages getting lost during transmission (?)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 12:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Previous message:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>In reply to:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dennis Luxen wrote:
<br>
<p><span class="quotelev2">&gt;&gt; In MPI, you must complete every MPI_Isend by MPI_Wait on the request 
</span><br>
<span class="quotelev2">&gt;&gt; handle
</span><br>
<span class="quotelev2">&gt;&gt; (or a variant like MPI_Waitall or MPI_Test that returns TRUE).  An
</span><br>
<span class="quotelev2">&gt;&gt; un-completed MPI_Isend leaves resources tied up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point, but that doesn't seem to help. I augmented each MPI_Isend 
</span><br>
<span class="quotelev1">&gt; with a MPI_Wait.
</span><br>
<p>What does that mean?  Does that mean you immediately followed each Isend 
<br>
with a Wait?  Equivalently, did you replace each Isend with a Send?
<br>
<p>In your original message, you said each process started by sending a 
<br>
100K request.  If that's the case, and you have blocking sends (or 
<br>
Isends augmented with Waits), you're not guaranteed progress.  E.g., 
<br>
consider the last example in 
<br>
<a href="http://www.mpi-forum.org/docs/mpi-11-html/node41.html#Node41">http://www.mpi-forum.org/docs/mpi-11-html/node41.html#Node41</a> .  But your 
<br>
example code sends only single-int requests.  So, this shouldn't be an 
<br>
issue for your sample code.
<br>
<p>Anyhow, I ran your sample code and it hung.  Then I replaced Isends with 
<br>
Sends and it ran.  So, at that level, I am as yet unable to reproduce 
<br>
your problem.
<br>
<p><span class="quotelev1">&gt; Now, one process keeps hanging after a number of messages in MPI_Wait 
</span><br>
<span class="quotelev1">&gt; and the other one keeps MPI_Iprobe'ing for new messages to receive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know what symptom to expect from OpenMPI with this particular
</span><br>
<span class="quotelev2">&gt;&gt; application error but the one you describe is plausible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I start with the parameter &quot;--mca btl tcp,self&quot; on the other hand, 
</span><br>
<span class="quotelev1">&gt; the processes finish communication just fine. I am not exactly sure 
</span><br>
<span class="quotelev1">&gt; why this flag helps.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Previous message:</strong> <a href="10605.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>In reply to:</strong> <a href="10603.php">Dennis Luxen: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
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
