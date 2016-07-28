<?
$subject_val = "Re: [OMPI devel] IOF 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 11:30:55 2008" -->
<!-- isoreceived="20081017153055" -->
<!-- sent="Fri, 17 Oct 2008 11:30:46 -0400" -->
<!-- isosent="20081017153046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF 2.0" -->
<!-- id="50D9E72F-1121-4B2F-9FD2-E45FACA3275C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EBAE02B3-F9A4-4DB0-A335-9130C249FBC4_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF 2.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 11:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Leonardo Fialho: "[OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4771.php">Ralph Castain: "[OMPI devel] IOF 2.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph!  I'll give the hg branch a shot on my systems today.
<br>
<p>I'm particularly excited about orte-iof(1); &quot;mpirun --screen ...&quot; is  
<br>
now one [major] step closer!  :-)
<br>
<p><p>On Oct 17, 2008, at 10:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As probably most of you know, we have been actively rewriting the I/ 
</span><br>
<span class="quotelev1">&gt; O forwarding subsystem to reduce its complexity (so it is easier to  
</span><br>
<span class="quotelev1">&gt; maintain), and to enable some new features. This work has been  
</span><br>
<span class="quotelev1">&gt; completed and will be committed to the trunk later today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: it will -not- be included in the 1.3 distribution, but is  
</span><br>
<span class="quotelev1">&gt; intended for 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the new features include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. ability to tag output using process name and stream (stdout,  
</span><br>
<span class="quotelev1">&gt; stderr) using a new mpirun cmd line option --tag-output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. ability to direct stdin to any specified rank, or to all ranks,  
</span><br>
<span class="quotelev1">&gt; or to no ranks using a new mpirun cmd line option --stdin. This  
</span><br>
<span class="quotelev1">&gt; defaults to rank=0t o preserve today's behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. addition of a new MPI_Info key &quot;ompi_stdin_target&quot; that allows  
</span><br>
<span class="quotelev1">&gt; comm_spawn'd jobs the same ability as described in #2. This defaults  
</span><br>
<span class="quotelev1">&gt; to &quot;none&quot; to preserve today's behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. a new tool &quot;orte-iof&quot; that takes cmd line options indicating the  
</span><br>
<span class="quotelev1">&gt; pid of the mpirun you want to get stdout/err from, and the rank of  
</span><br>
<span class="quotelev1">&gt; the procs from which you want that info. The tool then connects to  
</span><br>
<span class="quotelev1">&gt; that mpirun and prints the requested info to its own stdout/err.  
</span><br>
<span class="quotelev1">&gt; Again, the --tag-output cmd line option is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will hopefully find the code much less complex than the earlier  
</span><br>
<span class="quotelev1">&gt; version. In addition, we have completely eliminated IOF-related  
</span><br>
<span class="quotelev1">&gt; wireup communications. We retain flow-control for stdin to help  
</span><br>
<span class="quotelev1">&gt; constrain orted memory footprint - this is now done via an xon/xoff  
</span><br>
<span class="quotelev1">&gt; protocol as opposed to the prior technique of exchanging an &quot;ack&quot;  
</span><br>
<span class="quotelev1">&gt; after every message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested the new IOF on several systems and it appears to be  
</span><br>
<span class="quotelev1">&gt; functioning fine. However, I do not promise that we won't see a  
</span><br>
<span class="quotelev1">&gt; hiccup or two once this is introduced into the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please keep me advised of any issues you observe. Hopefully, this  
</span><br>
<span class="quotelev1">&gt; will transition smoothly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Leonardo Fialho: "[OMPI devel] OOB-TCP Retries"</a>
<li><strong>Previous message:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="4771.php">Ralph Castain: "[OMPI devel] IOF 2.0"</a>
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
