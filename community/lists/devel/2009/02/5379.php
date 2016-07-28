<?
$subject_val = "[OMPI devel] add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 14:37:25 2009" -->
<!-- isoreceived="20090205193725" -->
<!-- sent="Thu, 05 Feb 2009 11:41:46 -0800" -->
<!-- isosent="20090205194146" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] add_procs" -->
<!-- id="498B40FA.1080609_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] add_procs<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 14:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTLs have &quot;add_procs&quot; functions.  E.g., my own parochial interests are 
<br>
with the sm BTL and there is a mca_btl_sm_add_procs() function.  I'm 
<br>
trying to get a feel for how likely it is that this function would be 
<br>
called more than once.  There is code in there to support the case where 
<br>
it's called multiple times:  e.g., don't just call it once during 
<br>
MPI_Init, but again during program execution to add more processes.
<br>
<p>Maybe we can do this the &quot;multiple choice&quot; method:
<br>
<p>A) That code is in there for standard purposes (dynamically added 
<br>
processes or something?) and is robust and routinely tested.
<br>
<p>B) That code was in there because we had hoped to support this stuff 
<br>
someday, but I'm not sure if it works.  It's not really tested and 
<br>
rarely used by our users.  We should clean it up sometime so that we're 
<br>
sure it's doing what it should.
<br>
<p>C) That code was a fantasy we had when we first started coding this 
<br>
stuff, and for sure there is no prayer of that stuff working properly 
<br>
today or any time in the foreseeable future without major work.  Come to 
<br>
think of it, we'd be doing ourselves a service by ripping all that stuff 
<br>
out.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5378.php">Richard Graham: "Re: [OMPI devel] &quot;unknown&quot; in-coming fragment in sm BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
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
