<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 17:38:32 2011" -->
<!-- isoreceived="20110608213832" -->
<!-- sent="Wed, 8 Jun 2011 17:37:56 -0400" -->
<!-- isosent="20110608213756" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTikL1SsWUvH=FNvYqeQ9zwmDKayydQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikRQgojprVYuoGgnP8rdrgi3T-ywg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-08 17:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>In reply to:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, June 7, 2011 at 4:55 PM, Josh Hursey wrote:
<br>
<p>- orte_errmgr.post_startup() start the persistent RML message. There
<br>
does not seem to be a shutdown version of this (to deregister the RML
<br>
message at orte_finalize time). Was this intentional, or just missed?
<br>
<p>&nbsp;I just missed that one. I've added that into the code now.
<br>
<p>- in the orte_errmgr.set_fault_callback: it would be nice if it
<br>
returned the previous callback, so you could layer more than one
<br>
'thing' on top of ORTE and have them chain in a sigaction-like manner.
<br>
<p>&nbsp;Again, you are correct. Rather than just returning the previous callback
<br>
(if any) I think it makes more sense to maintain a list of callbacks and
<br>
have the errmgr call them directly. That way applications/ompi layers don't
<br>
have to worry about calling another callback function.
<br>
<p>- orte_process_info.max_procs: this seems to be only used in the
<br>
binomial routed, but I was a bit unclear about its purpose. Can you
<br>
describe what it does, and how it is used?
<br>
<p>I use this to determine how many processes were in the job before we started
<br>
having failures. This helps me preserve the structure of the tree as much as
<br>
possible rather than completely reorganizing the routing layer every time a
<br>
process fails.
<br>
<p>- in orted_comm.c: you process the ORTE_PROCESS_FAILED_NOTIFICATION
<br>
message here. Why not push all of that logic into the errmgr
<br>
components? It is not a big deal, just curious.
<br>
<p>Most of the actual logic that handles the processing of the error messages
<br>
is pushed into the errmgr component. The code you see in orted_comm.c is
<br>
almost all parsing and resending the list of dead processes to the
<br>
appropriate modules. That code will have to be in there no matter what.
<br>
<p>I've updated the code and checked it into a bitbucket repository which can
<br>
be found here:
<br>
<p><a href="https://bitbucket.org/wesbland/resilient-orte/">https://bitbucket.org/wesbland/resilient-orte/</a>
<br>
<p>Please let me know of any more comments,
<br>
Wesley
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9325.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fortran support in Open MPI Extensions"</a>
<li><strong>In reply to:</strong> <a href="9322.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9327.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
