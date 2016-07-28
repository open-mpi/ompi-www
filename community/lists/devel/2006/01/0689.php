<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 16:39:19 2006" -->
<!-- isoreceived="20060118213919" -->
<!-- sent="Wed, 18 Jan 2006 16:39:19 -0500" -->
<!-- isosent="20060118213919" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="EC489EA3-B456-46F3-99C2-265AD891BF7E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601110905.47000.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 16:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<li><strong>Previous message:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2006, at 3:05 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt; I had a point on the tbd-list, that I would like to ask here:
</span><br>
<span class="quotelev1">&gt;  - Shouldn't we have a while-loop condition around every occurence
</span><br>
<span class="quotelev1">&gt;    of opal_condition_wait (spurious wake-ups)
</span><br>
<span class="quotelev1">&gt;    As we may do a pthread_cond_wait,
</span><br>
<span class="quotelev1">&gt;     e.g. in opal_free_list.h and OPAL_FREE_LIST_WAIT ?
</span><br>
<p>I finally got a chance to look at this, and I think for the most part  
<br>
we're ok.  There are two that worry me, but I wanted Ralph and Tim to  
<br>
weigh in before I did anything.  More info below...
<br>
<p><span class="quotelev1">&gt; Occurrences:
</span><br>
<span class="quotelev1">&gt;       ompi/class/ompi_free_list.h
</span><br>
<p>This is ok as is, because the loop protecting against a spurious  
<br>
wakeup is already there.  If two threads are waiting, both are woken  
<br>
up, and there's only one request (or somehow, no requests), then  
<br>
they'll try to remove from the list, get NULL, and continue through  
<br>
the bigger while() loop.  So that works as expected.
<br>
<p><span class="quotelev1">&gt;       opal/class/opal_free_list.h
</span><br>
<p>Same reasoning as ompi_free_list.
<br>
<p><span class="quotelev1">&gt;       ompi/request/req_wait.c          /* Two Occurences: not a
</span><br>
<span class="quotelev1">&gt;                must, but... */
</span><br>
<p>I believe these are both correct.  The first is in a larger do { ...}  
<br>
while loop that will handle the case of a wakeup with no requests  
<br>
ready.  The second is in a tight while() loop already, so we're ok  
<br>
there.
<br>
<p><span class="quotelev1">&gt;       orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<p>This one I'd like Ralph to look at, because I&quot;m not sure I understand  
<br>
the logic completely.  It looks like this is potentially a problem.   
<br>
Only one thread will be woken up at a time, since the mutex has to be  
<br>
re-acquired.  So the question becomes, will anyone give up the mutex  
<br>
with component.compound_cmd_mode left set to true, and I think the  
<br>
answer is yes.  This looks like it could be a possible bug if people  
<br>
are using the compound command code when multiple threads are  
<br>
active.  Thankfully, I don't think this happens very often.
<br>
<p><span class="quotelev1">&gt;       orte/mca/iof/base/iof_base_flush.c:108
</span><br>
<p>This looks like it's wrapped in a larger while loop and is safe from  
<br>
any restart wait conditions.
<br>
<p><span class="quotelev1">&gt;       orte/mca/pls/rsh/pls_rsh_module.c:892
</span><br>
<p>This could be a bit of a problem, but I don't think spurious wake-ups  
<br>
will cause any real problems.  The worst case is that possibly we end  
<br>
up trying to concurrently start more processes than we really  
<br>
intended.  But Tim might have more insight than I do.
<br>
<p><p>Just my $0.02
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0690.php">George Bosilca: "Path detection patch"</a>
<li><strong>Previous message:</strong> <a href="0688.php">Luke Schierer: "posix threads"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
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
