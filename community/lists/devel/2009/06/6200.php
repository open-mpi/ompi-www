<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 08:57:59 2009" -->
<!-- isoreceived="20090609125759" -->
<!-- sent="Tue, 09 Jun 2009 13:59:40 +0100" -->
<!-- isosent="20090609125940" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="1244552380.12364.469.camel_at_localhost.localdomain" -->
<!-- inreplyto="alpine.DEB.1.10.0905120949520.4423_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 08:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-06-08 at 17:50 +0200, Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; Principle
</span><br>
<span class="quotelev1">&gt; =========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_progress() ensures the progression of MPI communication. The current 
</span><br>
<span class="quotelev1">&gt; algorithm is a loop calling progress on all registered components. If the 
</span><br>
<span class="quotelev1">&gt; program is blocked, the loop will busy-poll indefinetely.
</span><br>
<p>I have some experience here due to implementing this feature (blocking
<br>
waits) on Quadrics hardware.  You're right that it can have benefits and
<br>
yielding the CPU when &quot;idle&quot; is a good thing in the general case.
<br>
<p>The &quot;correct&quot; way for a process to relinquish the cpu is to block in a
<br>
select() or poll() call until data is received whereupon it can wake up
<br>
and continue working, the major problem each and every MPI
<br>
implementation has is that select() only works for tcp/ip and not for
<br>
shared memory or any of the more exotic networks.  IMHO it would be much
<br>
preferred to solve this problem properly and block in the wakeable
<br>
select() rather than usleep().
<br>
<p>In my experience when done correctly the performance is affected however
<br>
surprisingly it can often lead to increased performance, we had full
<br>
coverage however so were able to sleep early and wake up in a timely
<br>
manner on receiving any message.  Yeilding even one cpu per node from
<br>
the application occasionally gives any background/os processing a chance
<br>
to run without impacting the performance of the application so enabling
<br>
blocking waits can lead to quicker runtimes.
<br>
<p><span class="quotelev1">&gt; Going to sleep after a certain amount of time with nothing received is 
</span><br>
<span class="quotelev1">&gt; interesting for two things :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - Administrator can easily detect whether a job is deadlocked : all the 
</span><br>
<span class="quotelev1">&gt; processes are in sleep(). Currently, all processors are using 100% cpu and 
</span><br>
<span class="quotelev1">&gt; it is very hard to know if progression is still happening or not.
</span><br>
<p>This is a valuable thing to know however I don't view the proposed
<br>
solution as the correct one, if this were the problem you were aiming to
<br>
solve I'd recommend a different approach, more like the llnl solution
<br>
that Ralph described.
<br>
<p>Yours,
<br>
<p>Ashley Pittman.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6201.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1927: v1.3 COMM_SPAWN loop testfails after ~120 spawns"</a>
<li><strong>Previous message:</strong> <a href="6199.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
