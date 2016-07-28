<?
$subject_val = "[OMPI users] Waitall never returns";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 20:20:32 2014" -->
<!-- isoreceived="20140405002032" -->
<!-- sent="Fri, 04 Apr 2014 17:20:31 -0700" -->
<!-- isosent="20140405002031" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] Waitall never returns" -->
<!-- id="533F4C4F.6080300_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Waitall never returns<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 20:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During shutdown of my application the processes issue a waitall, since 
<br>
they have done some Isends.  A couple of them never return from that call.
<br>
<p>Could this be the result of some of the processes already being shutdown 
<br>
(the processes with the problem were late in the shutdown sequence)?  If 
<br>
so, what is the recommended solution?  A barrier?
<br>
<p>The shutdown proceeds in stages, but the processes in question are not 
<br>
told to shutdown until all the messages they have sent have been 
<br>
received.  So there shouldn't be any outstanding messages from them.
<br>
<p>My reading of the manual is that Waitall with a count of 0 should return 
<br>
immediately, not hang.  Is that correct?
<br>
<p>Running under R with openmpi 1.7.4.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Previous message:</strong> <a href="24058.php">Ralph Castain: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
<li><strong>Reply:</strong> <a href="24060.php">Ralph Castain: "Re: [OMPI users] Waitall never returns"</a>
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
