<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 17:50:46 2009" -->
<!-- isoreceived="20090414215046" -->
<!-- sent="Tue, 14 Apr 2009 17:50:18 -0400" -->
<!-- isosent="20090414215018" -->
<!-- name="Chris Gottbrath" -->
<!-- email="chris.gottbrath_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="6BDA5881-420C-4BCA-9F96-9AA7D3980300_at_totalviewtech.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="454DA5F6-55C6-463D-92D4-6D9E87F3508B_at_totalviewtech.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Chris Gottbrath (<em>chris.gottbrath_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 17:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun,
<br>
<p>These all look like fine suggestions.
<br>
<p>Another tool you should consider using for this problem or others like
<br>
it in the future is TotalView. It seems like there
<br>
are two related questions in your current troubleshooting scenario:
<br>
<p>1. is the memory being used where you think it is?
<br>
<p>2. is there really an imbalance between send/receives that is clogging
<br>
the unexpected queue?
<br>
<p>I'd fire up the application under TotalView with memory debugging
<br>
enabled (one of the checkboxes
<br>
that will be right there when you start the debugger).
<br>
<p>Once you have run to the point where you are seeing the memory
<br>
imbalance (and you don't have to wait for it to
<br>
get &quot;bad&quot; it can just be &quot;noticeable&quot;). Then you want to stop all the
<br>
processes by clicking stop.
<br>
<p>Then open the memory debugging window from the &quot;debug&quot; menu item.
<br>
<p>Then check the &quot;memory statistics&quot; view to make sure that you know
<br>
which MPI process
<br>
it is that is using more memory than the others.
<br>
<p>Is the difference in the &quot;heap memory&quot;? I'm guessing it will be, but I
<br>
suppose there is always the possibility I'm
<br>
wrong so it is good to check. The memory statistics view should show
<br>
different kinds of memory.
<br>
<p>Then select the process that is using more memory (we can call it the
<br>
process of interest) and run a &quot;heap status&quot; report.
<br>
This should tell you &quot;where&quot; your memory usage is coming from in your
<br>
program. You should get stack backtraces for all
<br>
the allocations. Depending on the magnitude of the memory usage it may
<br>
&quot;pop right out&quot; in the numbers or you might have to
<br>
dig a bit. I'm not sure exactly what the backtrace of the kind of
<br>
memory allocation you are talking about would look like..
<br>
<p>One great way to pick up on more &quot;subtle&quot; allocations is to compare
<br>
the memory usage of a process that is behaving correctly
<br>
and the process that is behaving incorrectly.
<br>
<p>You can do that by selecting two processes and doing a &quot;memory
<br>
comparison&quot; -- that will basically filter all the allocations &quot;out of
<br>
view&quot;
<br>
that are &quot;the same (in terms of backtrace)&quot; between the two processes.
<br>
If you have several hundred extra allocations from the OpenMPI
<br>
runtime on the one processes they should be easier to find in the
<br>
difference view. If the two processes have other differences you'll
<br>
get a longer
<br>
list but if you know your code you'll hopefully be able to quickly
<br>
eliminate the ones that are &quot;expected differences&quot;.
<br>
<p>It sounds like you have a strong working hypothesis. However, it might
<br>
be useful to run a memory leak check on the process of interest..
<br>
as that is another common way to get a process that starts taking up a
<br>
lot of extra memory. If your working hypothesis is correct your
<br>
process of interest should come back &quot;clean&quot; in terms of leaks.
<br>
<p>Another technique that TotalView will give you the ability to bring to
<br>
bear is inspection of the MPI message queues. This can be done, again,
<br>
while the processes are stopped once the memory imbalance is
<br>
&quot;noticeable&quot;. Click on the tools menu and select &quot;message queue graph&quot;.
<br>
That should bring up a graphical display of the state of the MPI
<br>
message queues in all of your MPI processes. If your hypothesis is
<br>
correct there should be an extremely large number of unexpected
<br>
messages shown for your process of interest.
<br>
<p>One of the nice things about this view, when compared to the MPI
<br>
tracing tools mentioned previously, is that it will only show you the
<br>
messages
<br>
which are in the queues at the point in time where you paused all the
<br>
MPI tasks..  which may be a lot of messages, but it is likely to be
<br>
many orders of magnitude lower than the number of MPI messages
<br>
displayed on the trace.
<br>
<p>TV is commercial but a 15 day evaluation license can be obtained here
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.totalviewtech.com/download/index.html">http://www.totalviewtech.com/download/index.html</a>
<br>
<p>5 minute Videos on Memory debugging and MPI debugging (that go over
<br>
some, but probably not all of the things that I discussed above) are
<br>
available here
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.totalviewtech.com/support/videos.html#0">http://www.totalviewtech.com/support/videos.html#0</a>
<br>
<p>Don't hesitate to contact me if you want help, the guys at &quot;support_at_[hidden] 
<br>
&quot;
<br>
can also help and are available during a product evaluation.
<br>
<p>Oh, and I should mention that there is a free version of TotalView  
<br>
available for students. :)
<br>
<p>Cheers,
<br>
Chris
<br>
<p>Chris Gottbrath, 508-652-7735 or 774-270-3155
<br>
Director of Product Management, TotalView Technologies	
<br>
chris.gottbrath_at_[hidden]
<br>
<pre>
--
Learn how to radically simplify your debugging:
<a href="http://www.totalviewtech.com/support/white_papers.html?id=163">http://www.totalviewtech.com/support/white_papers.html?id=163</a>
On Apr 14, 2009, at 4:54 PM, Eugene Loh wrote:
&gt; Shaun Jackman wrote:
&gt;
&gt;&gt; Eugene Loh wrote:
&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On the other hand, I assume the memory imbalance we're talking
&gt;&gt;&gt;&gt;&gt; about is rather severe.  Much more than 2500 bytes to be
&gt;&gt;&gt;&gt;&gt; noticeable, I would think.  Is that really the situation you're
&gt;&gt;&gt;&gt;&gt; imagining?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The memory imbalance is drastic. I'm expecting 2 GB of memory use
&gt;&gt;&gt;&gt; per process. The heaving processes (13/16) use the expected
&gt;&gt;&gt;&gt; amount of memory; the remainder (3/16) misbehaving processes use
&gt;&gt;&gt;&gt; more than twice as much memory. The specifics vary from run to
&gt;&gt;&gt;&gt; run of course. So, yes, there is gigs of unexpected memory use to
&gt;&gt;&gt;&gt; track down.
&gt;&gt;&gt;
&gt;&gt;&gt; Umm, how big of a message imbalance do you think you might have?
&gt;&gt;&gt; (The inflection in my voice doesn't come out well in e-mail.)
&gt;&gt;&gt; Anyhow, that sounds like, um, &quot;lots&quot; of 2500-byte messages.
&gt;&gt;
&gt;&gt; The message imbalance could be very large. Each process is running
&gt;&gt; pretty close to its memory capacity. If a backlog of messages
&gt;&gt; causes a buffer to grow to the point where the process starts
&gt;&gt; swapping, it will very quickly fall very far behind. There are some
&gt;&gt; billion 25-byte operations being sent in total or tens of millions
&gt;&gt; MPI_Send messages (at 100 operations per MPI_Send).
&gt;
&gt; Okay.  Attached is a &quot;little&quot; note I wrote up illustrating memory
&gt; profiling with Sun tools.  (It's &quot;big&quot; because I ended up including
&gt; a few screenshots.)  The program has a bunch of one-way message
&gt; traffic and some user-code memory allocation.  I then rerun with the
&gt; receiver sleeping before jumping into action.  The messages back up
&gt; and OMPI ends up allocating a bunch of memory.  The tools show you
&gt; who (user or OMPI) is allocating how much memory and how big of a
&gt; message backlog develops and how the sender starts stalling out
&gt; (which is a good thing!).  Anyhow, a useful exercise for me and
&gt; hopefully helpful for you.
&gt; &lt;memory-
&gt; profiling.tar.gz&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
**********
This transmission contains confidential and/or legally privileged  
information from
TotalView Technologies intended only for the use of the individual(s)  
to which it is
addressed. If you are not the intended recipient, you are hereby  
notified that any disclosure,
copying or distribution of this information or the taking of any  
action in reliance on the
contents of this transmission is strictly prohibited. If you have  
received this transmission
in error, please notify us immediately.
**********
**********
This transmission contains confidential and/or legally privileged information from
TotalView Technologies intended only for the use of the individual(s) to which it is
addressed. If you are not the intended recipient, you are hereby notified that any disclosure,
copying or distribution of this information or the taking of any action in reliance on the
contents of this transmission is strictly prohibited. If you have received this transmission
in error, please notify us immediately.
**********
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="8851.php">Shaun Jackman: "[OMPI users] Debugging memory use of Open MPI"</a>
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
