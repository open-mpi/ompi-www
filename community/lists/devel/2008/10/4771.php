<?
$subject_val = "[OMPI devel] IOF 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:38:21 2008" -->
<!-- isoreceived="20081017143821" -->
<!-- sent="Fri, 17 Oct 2008 08:38:14 -0600" -->
<!-- isosent="20081017143814" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IOF 2.0" -->
<!-- id="EBAE02B3-F9A4-4DB0-A335-9130C249FBC4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] IOF 2.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 10:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4770.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<li><strong>Reply:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>As probably most of you know, we have been actively rewriting the I/O  
<br>
forwarding subsystem to reduce its complexity (so it is easier to  
<br>
maintain), and to enable some new features. This work has been  
<br>
completed and will be committed to the trunk later today.
<br>
<p>NOTE: it will -not- be included in the 1.3 distribution, but is  
<br>
intended for 1.4.
<br>
<p>Some of the new features include:
<br>
<p>1. ability to tag output using process name and stream (stdout,  
<br>
stderr) using a new mpirun cmd line option --tag-output
<br>
<p>2. ability to direct stdin to any specified rank, or to all ranks, or  
<br>
to no ranks using a new mpirun cmd line option --stdin. This defaults  
<br>
to rank=0t o preserve today's behavior
<br>
<p>3. addition of a new MPI_Info key &quot;ompi_stdin_target&quot; that allows  
<br>
comm_spawn'd jobs the same ability as described in #2. This defaults  
<br>
to &quot;none&quot; to preserve today's behavior
<br>
<p>4. a new tool &quot;orte-iof&quot; that takes cmd line options indicating the  
<br>
pid of the mpirun you want to get stdout/err from, and the rank of the  
<br>
procs from which you want that info. The tool then connects to that  
<br>
mpirun and prints the requested info to its own stdout/err. Again, the  
<br>
--tag-output cmd line option is available.
<br>
<p>You will hopefully find the code much less complex than the earlier  
<br>
version. In addition, we have completely eliminated IOF-related wireup  
<br>
communications. We retain flow-control for stdin to help constrain  
<br>
orted memory footprint - this is now done via an xon/xoff protocol as  
<br>
opposed to the prior technique of exchanging an &quot;ack&quot; after every  
<br>
message.
<br>
<p>I have tested the new IOF on several systems and it appears to be  
<br>
functioning fine. However, I do not promise that we won't see a hiccup  
<br>
or two once this is introduced into the system.
<br>
<p>Please keep me advised of any issues you observe. Hopefully, this will  
<br>
transition smoothly.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4772.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4770.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
<li><strong>Reply:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI devel] IOF 2.0"</a>
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
