<?
$subject_val = "[OMPI devel] uDAPL EVD queue length issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 17:45:54 2007" -->
<!-- isoreceived="20071203224554" -->
<!-- sent="Mon, 3 Dec 2007 16:45:50 -0600" -->
<!-- isosent="20071203224550" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] uDAPL EVD queue length issue" -->
<!-- id="20071203224550.GF11990_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] uDAPL EVD queue length issue<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 17:45:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2707.php">Terry Dontje: "[OMPI devel] [Fwd: [devel-core] Open MPI concall agenda (12/4/2007)]"</a>
<li><strong>Previous message:</strong> <a href="2705.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While working on OMPI udapl btl, I have noticed some &quot;interesting&quot;
<br>
behavior.  OFA udapl wants the evd queues to be a power of 2 and
<br>
then will subtract 1 for book keeping (ie, so that internal head and
<br>
tail pointers never touch except when the ring is empty).  OFA udapl
<br>
will report the queue length as this number (and not the original
<br>
size requested) when queried.  This becomes interesting when a power
<br>
of 2 is passed in and then queried.  For example, a requested queue
<br>
of length 256 will report a length of 255 when queried.  I cannot tell
<br>
if it is acceptable to get a size less than the one you request, based
<br>
on the udapl documentation.
<br>
<p>Now during the setup of the ompi connection, it will try to make the
<br>
local parameters sufficient to run the programs.  Now if we try to
<br>
run a small amount of procs, then the defaults will be reset across
<br>
all nodes.  Since the defaults may not exactly match, udapl btl will
<br>
try to resize the queue (in this example 256 &gt; 255).  When the call
<br>
finally makes it up to the ofa udapl code, it will bail because it
<br>
checks to see if the new size is less than or equal to the current
<br>
size + 1.
<br>
<p>So if the ofa udapl code is working as designed, then the ompi udapl
<br>
btl code needs to have the proper boundary check for size + 1 (for
<br>
which I have a patch).  If not, then the ofa code need to be changed
<br>
to either round up to the next power of 2 if given a power of 2, or
<br>
return the size + 1 when queried.
<br>
<p>So, which one is correct?
<br>
<p>Thanks,
<br>
Jon
<br>
<p>BTW, If anyone is interested, I have cut down dapltest to a very basic
<br>
test that will show this behavior 100% of the time.  I can make the
<br>
source available to whomever wants it.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2707.php">Terry Dontje: "[OMPI devel] [Fwd: [devel-core] Open MPI concall agenda (12/4/2007)]"</a>
<li><strong>Previous message:</strong> <a href="2705.php">Jeff Squyres: "Re: [OMPI devel] Indirect calls to wait* and test*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Reply:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
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
