<?
$subject_val = "[OMPI users] problems with 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 17:41:37 2012" -->
<!-- isoreceived="20120514214137" -->
<!-- sent="Mon, 14 May 2012 14:41:29 -0700" -->
<!-- isosent="20120514214129" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] problems with 1.6" -->
<!-- id="4FB17C09.2000702_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] problems with 1.6<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 17:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Previous message:</strong> <a href="19270.php">vaibhav dutt: "[OMPI users] Polling and Interrupt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Reply:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am having troubles with the newly-available 1.6 release (tar.gz).
<br>
I built it with my &quot;normal&quot; configure options, with no obvious
<br>
configure or make errors.  I used both PGI 12.4, and GCC 4.7.0, under
<br>
Scientific Linux 5.5.
<br>
<p>I then compiled my &quot;normal&quot; matrix-multiply test case.  Upon execution,
<br>
I get (with either compiler):
<br>
<p>[c0667:24962] [[39579,1],11] ORTE_ERROR_LOG: Data unpack had inadequate 
<br>
space in file util/nidmap.c at line 118
<br>
[c0667:24962] [[39579,1],11] ORTE_ERROR_LOG: Data unpack had inadequate 
<br>
space in file ess_env_module.c at line 174
<br>
[c0667:24966] [[39579,1],15] ORTE_ERROR_LOG: Data unpack had inadequate 
<br>
space in file util/nidmap.c at line 118
<br>
[c0667:24966] [[39579,1],15] ORTE_ERROR_LOG: Data unpack had inadequate 
<br>
space in file ess_env_module.c at line 174
<br>
...
<br>
It looks like orte_init failed for some reason; ...
<br>
...
<br>
It looks like MPI_INIT failed for some reason; ...
<br>
<p>I can provide additional details if needed, but again:  I did nothing
<br>
different than what I have done with previous OMPI and compiler
<br>
releases.  Thoughts?  Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Previous message:</strong> <a href="19270.php">vaibhav dutt: "[OMPI users] Polling and Interrupt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Reply:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
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
