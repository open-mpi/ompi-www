<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 23:11:44 2007" -->
<!-- isoreceived="20071214041144" -->
<!-- sent="Thu, 13 Dec 2007 22:11:36 -0600" -->
<!-- isosent="20071214041136" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18274.632.298224.227327_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e40712130817u2ede243do6c90de55d6db2fa9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 23:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Previous message:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13 December 2007 at 13:17, Lisandro Dalcin wrote:
<br>
| Perhaps I was not clear enough. There are many public ways of
<br>
| importing modules in Python. Modules can came mainly from two sources:
<br>
| pure Python code, or C compiled code. In the later case (called
<br>
| extension modules), they are normally a shared object
<br>
| (.so,.dylib,.dll) exporting only a simbol: 'void
<br>
| init&lt;modulename&gt;(void)', this functions bootstraps the initialization
<br>
| of the extension module. What is somewhat hidden is the actual way
<br>
| Python loads this shared object and calls the init function. I believe
<br>
| the reason for this is related to de gory details of dlopen()ing in
<br>
| different OS's/archs combination.
<br>
| 
<br>
| Anyway, Python enables you to temporarily change the flags to be used
<br>
| in dlopen() calls, what is not (currently) so easy is to get the value
<br>
| of RTLD_GLOBAL in a portable way.
<br>
| 
<br>
| Jeff, in short: I believe I solved (with the help of Brian) the issue
<br>
| in the context of Python and the platforms we have access to. So, from
<br>
| our side, things are working.
<br>
| 
<br>
| However, I believe this issue is going to cause trouble to any other
<br>
| guy trying  to load shared objects using MPI. This makes me think that
<br>
| Open MPI should be in charge or solving this, but I understand the
<br>
| situation is complex and all us are usually out of time. I'll try to
<br>
| re-read all the stuff to better understand the beast.
<br>
<p>Just to recap: when we tried to address the same issue for the 'Rmpi' package
<br>
for GNU R, it was actually the hint in FAQ for Open MPI itself (!!) that lead
<br>
Hao (ie Rmpi's author) to the use of the RTLD_GLOBAL flag.  So what Lisandro
<br>
is asking for is already (at least somewhat) addressed and documented at the
<br>
Open MPI site.
<br>
<p>Anyway, great to hear that things work for Python too. It's always good to
<br>
have more tools.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4675.php">Ralph H Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Data unpack had inadequate space in file gpr_replica_cmd_processor.c at line 361"</a>
<li><strong>Previous message:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4666.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
