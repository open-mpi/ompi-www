<?
$subject_val = "[OMPI devel] padb and orte";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 15:01:15 2009" -->
<!-- isoreceived="20090610190115" -->
<!-- sent="Wed, 10 Jun 2009 20:02:54 +0100" -->
<!-- isosent="20090610190254" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] padb and orte" -->
<!-- id="1244660574.4183.39.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI devel] padb and orte<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-10 15:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>As mentioned in another thread I've recently ported padb, a command line
<br>
job inspection tool (kinda like a parallel debugger) to orte and
<br>
OpenMPI.  Padb is an existing stable product which has worked for a
<br>
number of years on Slurm and RMS, orte support is new and not widely
<br>
tested yet although it works for all cases I've tried.
<br>
<p>For those who haven't used it padb is a open source command-line tool
<br>
which among other things can collect stack traces, display MPI message
<br>
queues and present a lot of process information about parallel jobs to
<br>
the user is an accessible way.
<br>
<p>Ideally padb will find it's place within the day to day workings of
<br>
OpenMPI developers and become a recommended tool for users as well, it
<br>
also has a mode where it can be launched automatically to gather
<br>
information about job hangs without human intervention, I'd be willing
<br>
to work with the OpenMPI team to integrate this into the MTT code if
<br>
desired.
<br>
<p>I would encourage you to download it and try it out, if it works for you
<br>
and you like it that's great, if not let me know and I'll do what I can
<br>
to fix it.  There is a website and public mailing lists for padb issues
<br>
or I am happy to discuss orte specific issues on this list.
<br>
<p>The website is at <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a> and I welcome any feedback,
<br>
either here, off-list or on either of the padb mailing lists.
<br>
<p>Yours,
<br>
<p>Ashley Pittman,
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
<li><strong>Next message:</strong> <a href="6218.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6216.php">Ralph Castain: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
