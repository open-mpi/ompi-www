<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 10:50:00 2009" -->
<!-- isoreceived="20090610145000" -->
<!-- sent="Wed, 10 Jun 2009 15:51:41 +0100" -->
<!-- isosent="20090610145141" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="1244645501.8451.70.camel_at_localhost.localdomain" -->
<!-- inreplyto="71d2d8cc0906091140j1752d813h7dd7a2291433fc29_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 10:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6209.php">Anjin Pradhan: "[OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>In reply to:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>If I may say this is exactly the type of problem the tool I have been
<br>
working on recently aims to help with and I'd be happy to help you
<br>
through it.
<br>
<p>Firstly I'd say of the three collectives you mention, MPI_Allgather,
<br>
MPI_Reduce and MPI_Bcast one exhibit a many-to-many, one a many-to-one
<br>
and the last a many-to-one communication pattern.  The scenario of a
<br>
root process falling behind and getting swamped in comms is a plausible
<br>
one for MPI_Reduce only but doesn't hold water with the other two.  You
<br>
also don't mention if the loop is over a single collective or if you
<br>
have loop calling a number of different collectives each iteration.
<br>
<p>padb, the tool I've been working on has the ability to look at parallel
<br>
jobs and report on the state of collective comms and should help narrow
<br>
you down on erroneous processes and those simply blocked waiting for
<br>
comms.  I'd recommend using it to look at maybe four or five instances
<br>
where the application has hung and look for any common features between
<br>
them.
<br>
<p>Let me know if you are willing to try this route and I'll talk, the code
<br>
is downloadable from <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a> and if you want the full
<br>
collective functionality you'll need to patch openmp with the patch from
<br>
<a href="http://padb.pittman.org.uk/extensions.html">http://padb.pittman.org.uk/extensions.html</a>
<br>
<p>Ashley,
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
<li><strong>Next message:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6209.php">Anjin Pradhan: "[OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>In reply to:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6211.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
