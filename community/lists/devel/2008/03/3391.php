<?
$subject_val = "[OMPI devel] Fault tolerance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:45:03 2008" -->
<!-- isoreceived="20080306154503" -->
<!-- sent="Thu, 06 Mar 2008 08:44:53 -0700" -->
<!-- isosent="20080306154453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fault tolerance" -->
<!-- id="C3F55F85.4931%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Fault tolerance<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 10:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I've been doing some work on fault response within the system, and finally
<br>
realized something I should probably have seen awhile back. Perhaps I am
<br>
misunderstanding somewhere, so forgive the ignorance if so.
<br>
<p>When we designed ORTE some time in the deep, dark past, we had envisioned
<br>
that people might want multiple ways of responding to process faults and/or
<br>
abnormal terminations. You might want to just abort the job, attempt to
<br>
restart just that proc, attempt to restart the job, etc. To support these
<br>
multiple options, and to provide a means for people to simply try new ones,
<br>
we created the errmgr framework.
<br>
<p>Our thought was that a process and/or daemon would call the errmgr when we
<br>
detected something abnormal happening, and that the selected errmgr
<br>
component could then do whatever fault response was desired.
<br>
<p>However, I now see that the fault tolerance mechanisms inside of OMPI do not
<br>
seem to be using that methodology. Instead, we have hard-coded a particular
<br>
response into the system.
<br>
<p>If we configure without FT, we just abort the entire job since that is the
<br>
only errmgr component that exists.
<br>
<p>If we configure with FT, then we execute the hard-coded C/R methodology.
<br>
This is built directly into the code, so there is no option as to what
<br>
happens.
<br>
<p>Is there a reason why the errmgr framework was not used? Did the FT team
<br>
decide that this was not a useful tool to support multiple FT strategies?
<br>
Can we modify it to better serve those needs, or is it simply not feasible?
<br>
<p>If it isn't going to be used for that purpose, then I might as well remove
<br>
it. As things stand, there really is no purpose served by the errmgr
<br>
framework - might as well replace it with just a function call.
<br>
<p>Appreciate any insights
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Previous message:</strong> <a href="3390.php">Ralph Castain: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
<li><strong>Reply:</strong> <a href="3392.php">Josh Hursey: "Re: [OMPI devel] Fault tolerance"</a>
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
