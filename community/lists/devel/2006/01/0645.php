<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  3 13:38:36 2006" -->
<!-- isoreceived="20060103183836" -->
<!-- sent="Tue, 3 Jan 2006 13:38:24 -0500" -->
<!-- isosent="20060103183824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  debugging methods" -->
<!-- id="495EB2D9-857F-446C-BC9B-C228236A6165_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-03 13:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0640.php">Leslie Watter: "debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0657.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Brian said, do you have any specific questions  
<br>
about Open MPI's build system, the BTL, etc.?
<br>
<p>More specifically: feel free to ping us here about code-level kinds  
<br>
of questions.
<br>
<p><p>On Dec 27, 2005, at 4:30 PM, Leslie Watter wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using BTL_OUTPUT to trace the execution, is there another way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For initial tests I'm using 2 machines, localhost(or cliente) and
</span><br>
<span class="quotelev1">&gt; another machine called servidor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LEslie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0644.php">Graziano Giuliani: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0640.php">Leslie Watter: "debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0647.php">Craig Rasmussen: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0657.php">Leslie Watter: "Re:  debugging methods"</a>
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
