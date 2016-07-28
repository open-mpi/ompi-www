<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 18:53:35 2006" -->
<!-- isoreceived="20060104235335" -->
<!-- sent="Wed, 4 Jan 2006 18:53:26 -0500" -->
<!-- isosent="20060104235326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] LAM vs OPENMPI performance" -->
<!-- id="BB8C619A-7D7A-47AC-BC1A-2001699C087E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43BC4697.2060602_at_reachone.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 18:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 4, 2006, at 5:05 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick reply.  I ran my tests with a hostfile with
</span><br>
<span class="quotelev1">&gt; cedar.reachone.com slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I clearly misunderstood the role of the 'slots' parameter, because
</span><br>
<span class="quotelev1">&gt; when I removed it, OPENMPI slightly outperformed LAM, which I
</span><br>
<span class="quotelev1">&gt; assume it should.  Thanks for the help.
</span><br>
<p>Not entirely your fault -- I just went back and re-read the FAQ  
<br>
entries and can easily see how the wording would lead you to that  
<br>
conclusion.  I have touched up the wording to make it more clear, and  
<br>
added an FAQ item about oversubscription:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<p>Here's the text (it looks a bit prettier on the web page):
<br>
<p>------
<br>
Can I oversubscribe nodes (run more processes than processors)?
<br>
<p><p>Yes.
<br>
<p>However, it is critical that Open MPI knows that you are  
<br>
oversubscribing the node, or severe performance degredation can result.
<br>
<p>The short explanation is as follows: never specify a number of slots  
<br>
that is more than the available number of processors. For example, if  
<br>
you want to run 4 processes on a uniprocessor, then indicate that you  
<br>
only have 1 slot but want to run 4 processes. For example:
<br>
<p><p><p>shell$ cat my-hostfile
<br>
localhost
<br>
shell$ mpirun -np 4 --hostfile my-hostfile a.out
<br>
<p><p>Specifically: do NOT have a hostfile that contains &quot;slots =  
<br>
4&quot; (because there is only one available processor).
<br>
<p>Here's the full explanation:
<br>
<p>Open MPI basically runs its message passing progression engine in two  
<br>
modes: aggressive and degraded.
<br>
<p><p><p>Degraded: When Open MPI thinks that it is in an oversubscribed mode  
<br>
(i.e., more processes are running than there are processors  
<br>
available), MPI processes will automatically run in degraded mode and  
<br>
frequently yield the processor to its peers, thereby allowing all  
<br>
processes to make progress.
<br>
<p>Aggressive: When Open MPI thinks that it is in an exactly- or under- 
<br>
subscribed mode (i.e., the number of running processes is equal to or  
<br>
less than the numebr of available processors), MPI processes will  
<br>
automatically run in aggressive mode, meaning that they will never  
<br>
voluntarily give up the processor to other processes. With some  
<br>
network transports, this means that Open MPI will spin in tight loops  
<br>
attempting to make message passing progress, effectively causing  
<br>
other processes to not get any CPU cycles (and therefore never make  
<br>
any progress).
<br>
For example, on a uniprocessor node:
<br>
<p><p><p>shell$ cat my-hostfile
<br>
localhost slots=4
<br>
shell$ mpirun -np 4 --hostfile my-hostfile a.out
<br>
<p><p>This would cause all 4 MPI processes to run in aggressive mode  
<br>
because Open MPI thinks that there are 4 available processors to use.  
<br>
This is actually a lie (there is only 1 processor -- not 4), and can  
<br>
cause extremely bad performance.
<br>
<p>-----
<br>
<p><p><p>Hope that clears up the issue.  Sorry about that!
<br>
<p><p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Anthony Chan: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Tom Rosmond: "Re: [O-MPI users] LAM vs OPENMPI performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0498.php">Tom Rosmond: "[O-MPI users] Totalview question?"</a>
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
