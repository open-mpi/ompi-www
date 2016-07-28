<?
$subject_val = "[OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 09:50:24 2010" -->
<!-- isoreceived="20100922135024" -->
<!-- sent="Wed, 22 Sep 2010 09:50:19 -0400" -->
<!-- isosent="20100922135019" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="0D00FFAF-C902-4985-8BCB-02313153A236_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 09:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some of you may be unaware that recent versions of automake can run in parallel.  That is, automake will run in parallel with a degree of (at most) $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.pl quite a bit on some platforms.  On my cluster at cisco, here's a few quick timings of the entire autogen.pl process (of which, automake is the bottleneck):
<br>
<p>$AUTOMAKE_JOBS           Total wall time
<br>
value                    of autogen.pl
<br>
8                        3:01.46
<br>
4                        2:55.57
<br>
2                        3:28.09
<br>
1                        4:38.44
<br>
<p>This is an older Xeon machine with 2 sockets, each with 2 cores.
<br>
<p>There's a nice performance jump from 1 to 2, and a smaller jump from 2 to 4.  4 and 8 are close enough to not matter.  YMMV.
<br>
<p>I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS if it is not already set (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
<br>
<p>- If lstopo is found in your $PATH, runs it and count how many PU's (processing units) you have.  It'll set AUTOMAKE_JOBS to that number, or a maximum of 4 (which is admittedly a further heuristic).  
<br>
- If lstopo is not found, it just sets AUTOMAKE_JOBS to 2.
<br>
<p>Enjoy.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8525.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Previous message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8530.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8542.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
