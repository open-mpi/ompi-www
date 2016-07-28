<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 27 20:42:20 2005" -->
<!-- isoreceived="20051228014220" -->
<!-- sent="Tue, 27 Dec 2005 20:42:19 -0500" -->
<!-- isosent="20051228014219" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  debugging methods" -->
<!-- id="C1B8A6BD-DDBC-48C0-9FF9-3C21753A2608_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="62f43a280512271330x5e9a012i_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2005-12-27 20:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Leslie Watter: "debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0640.php">Leslie Watter: "debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0645.php">Jeff Squyres: "Re:  debugging methods"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 27, 2005, at 4:30 PM, Leslie Watter wrote:
<br>
<p><span class="quotelev1">&gt; Hi people,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to develop a new btl module using LLC protocol.
</span><br>
<span class="quotelev1">&gt; I've based the code on the TCP btl code and I'm experiencing some  
</span><br>
<span class="quotelev1">&gt; problems like:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 1763 on node &quot;servidor&quot; exited
</span><br>
<span class="quotelev1">&gt; on signal 11.
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way that I can debug or know where the code are being  
</span><br>
<span class="quotelev1">&gt; killed?
</span><br>
<p>The easiest way is to use TotalView, but that can be expensive.  If  
<br>
you are only trying to run a couple of processes in your job, it's  
<br>
possible to use gdb to debug your processes.  It's easiest when using  
<br>
ssh to login to remote nodes, since it sets up X11 forwarding for  
<br>
you.  running the command:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np X -d xterm -e gdb &lt;my app&gt;
<br>
<p>will start X xterms, with one gdb process in each xterm.  From there,  
<br>
you can debug the processes to figure out what your code is doing.
<br>
<p><span class="quotelev1">&gt; I'm using BTL_OUTPUT to trace the execution, is there another way?
</span><br>
<p>This is probably the easiest way - the macros are already there so in  
<br>
optimized builds, all that code isn't executed (which is nice for  
<br>
performance.
<br>
<p>Good luck!
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="0640.php">Leslie Watter: "debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0640.php">Leslie Watter: "debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/01/0645.php">Jeff Squyres: "Re:  debugging methods"</a>
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
