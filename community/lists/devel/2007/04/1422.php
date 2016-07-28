<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 16:10:50 2007" -->
<!-- isoreceived="20070416201050" -->
<!-- sent="Mon, 16 Apr 2007 14:10:44 -0600" -->
<!-- isosent="20070416201044" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenRTE and &amp;quot;malloc&amp;quot;" -->
<!-- id="C2493464.8B0F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-16 16:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>There has been some recent activity aimed at reducing memory &quot;leaks&quot; from
<br>
within the Open MPI code base, including OpenRTE. These are most welcome and
<br>
long overdue. It has, though, caused a couple of questions to me about why
<br>
we used malloc so extensively within OpenRTE. Rather than answer these
<br>
independently, I though it might help if I documented this history for
<br>
future participants.
<br>
<p>The decision to use dynamic, as opposed to static, memory allocation as our
<br>
&quot;standard&quot; method within OpenRTE was made at an ORTE design meeting
<br>
approximately two years ago. The overarching reasons for that decision were
<br>
four-fold:
<br>
<p>1. we didn't want to introduce any system-level constraints on sizes for
<br>
things like arrays or strings;
<br>
<p>2. given the large degree of flexibility in the system, only a small
<br>
percentage of all code paths might be exercised in any given job. Static
<br>
memory allocation would therefore have caused the overall memory footprint
<br>
for OpenRTE to include storage for data that would likely never be used -
<br>
whereas dynamic allocation would ensure we only consumed as much memory as
<br>
required for that particular code path;
<br>
<p>3. tracking down memory corruption is generally much more difficult than
<br>
plugging memory leaks. Given (1), we either would have to continually check
<br>
the size of data being given to us to ensure we weren't overrunning static
<br>
allocations, or we would have to spend considerable time and effort tracking
<br>
down memory corruption problems. We felt that it would be more time
<br>
efficient (from a development standpoint) to avoid these problems and just
<br>
malloc the memory - and then use valgrind and other tools to eventually plug
<br>
any resulting leaks. Every now and then we do make a pass at reducing the
<br>
worst of the leakage, but no really concerted effort has been made to-date
<br>
as it just hasn't been enough of a problem to merit a high priority; and
<br>
<p>4. the performance impact of using malloc was considered inconsequential to
<br>
the OpenRTE functional requirements. Current measurements show that the
<br>
total time to traverse a launch procedure is a few milliseconds (not
<br>
including the time to send xcast stage gate messages - see my other note on
<br>
scalability issues). This is well within any functional requirement
<br>
expressed to date, so obviously the use of malloc hasn't created a major
<br>
problem in that regard.
<br>
<p>As a result, the code contains a number of malloc/free combinations that
<br>
typically involve small quantities of memory. Many of these are in debugging
<br>
code that only gets called if/when a developer requests it be run - I
<br>
generally ignore these as that is not a code path that ever gets exercised
<br>
during normal operations. Of the remainder, please feel free to plug leaks
<br>
and/or consider alternatives. Just please keep in mind the prior
<br>
considerations when making your changes.
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
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
