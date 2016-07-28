<?
$subject_val = "[OMPI devel] RFC: Pineapple Runtime Interposition Project";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 14:55:52 2012" -->
<!-- isoreceived="20120615185552" -->
<!-- sent="Fri, 15 Jun 2012 14:55:46 -0400" -->
<!-- isosent="20120615185546" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Pineapple Runtime Interposition Project" -->
<!-- id="CAANzjE=q4usYGcr6DwY6S3v3WB0beq0uJPpEP94_QuVe5NGDWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Pineapple Runtime Interposition Project<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 14:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11110.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: A Runtime Interposition Project - Codename Pineapple
<br>
<p>Why: Define clear API and semantics for runtime requirements of the OMPI layer.
<br>
<p>When:
<br>
&nbsp;- F June 22, 2012 - Work completed
<br>
&nbsp;- T June 26, 2012 - Discuss on teleconf
<br>
&nbsp;- R June 28, 2012 - Commit to trunk
<br>
<p>Where: Trunk (development BitBucket branch below)
<br>
&nbsp;&nbsp;<a href="https://bitbucket.org/jjhursey/ompi-pineapple">https://bitbucket.org/jjhursey/ompi-pineapple</a>
<br>
<p>Attached:
<br>
&nbsp;&nbsp;PDF of slides presented on the June 12, 2012 teleconf. Note that the
<br>
timeline was slightly adjusted above (work completed date moved
<br>
ealier).
<br>
<p><p>Description: Short Version
<br>
--------------------------
<br>
Define, in an 'rte.h', the interfaces and semantics that the OMPI
<br>
layer requires of a runtime environment. Currently this interface
<br>
matches the subset of ORTE functionality that is used by the OMPI
<br>
layer. Runtime symbols (e.g., orte_ess.proc_get_locality) are isolated
<br>
to a framework inside this project to provide linker-level protection
<br>
against accidental breakage of the pineapple interposition layer.
<br>
<p>The interposition project provides researchers working on side
<br>
projects above and below the 'rte.h' interface a single location in
<br>
the code base to watch for interface and semantic changes that they
<br>
need to be concerned about. Researchers working above the pineapple
<br>
layer might explore something other than (or in addition to) OMPI
<br>
(e.g., Extended OMPI, UPC+OMPI). Researchers working below the
<br>
pineapple layer might explore something other than (or in addition to)
<br>
ORTE under OMPI (e.g., specialized runtimes for specific
<br>
environments).
<br>
<p><p>Description: Other notes
<br>
------------------------
<br>
The pineapple interface provides OMPI developers with a runtime API to
<br>
program against without requiring detailed knowledge of the layout of
<br>
ORTE and its frameworks. In some places in OMPI a single source file
<br>
needs to include &gt;5 (up to 12 in one place) different header files to
<br>
get all of the necessary symbols. Developers must not only know where
<br>
these headers are, but must also understand the differences between
<br>
the various frameworks in ORTE to use ORTE. The developer must also be
<br>
aware that there are certain APIs and data structure fields that are
<br>
not available to the MPI process, so should not be used. The pineapple
<br>
project provides an API representing the small subset of ORTE that is
<br>
used by OMPI. With this API a developer only needs to look at a single
<br>
location in the code base to understand what is provided by the
<br>
runtime for use in the OMPI layer.
<br>
<p>A similar statement could be made for runtime developers trying to
<br>
figure out what the OMPI layer requires from the a runtime
<br>
environment. Currently they need a deep understanding of the behavior
<br>
of ORTE to understand the semantics of various calls to ORTE from the
<br>
OMPI layer. Then they must develop a custom patch for the OMPI layer
<br>
that extracts the ORTE symbols, and replaces them with their own
<br>
symbols. This process is messy, error prone, and tedious to say the
<br>
least. Having a single set of interfaces and semantics will allow such
<br>
developers to focus their efforts on supporting the Open MPI community
<br>
defined API, and not necessarily the evolution of the ORTE or OMPI
<br>
project internals. This is advantageous when porting Open MPI to an
<br>
environment with a full featured runtime already running on the
<br>
machine, and for researchers exploring radical runtime designs for
<br>
future systems. The pineapple API allows such projects to develop
<br>
beside the mainline Open MPI trunk a little more easily than without
<br>
the pineapple API.
<br>
<p><p>FAQ:
<br>
<pre>
----
(1) Why is this a separate project and not a framework of OMPI? or a
framework of ORTE?
After much deliberation between the developers, from a software
engineering perspective, making the pineapple rte.h interface a
separate project was the most flexible solution. So neither the OMPI
layer nor the ORTE layer 'own' the interface, but it is 'owned' by the
Open MPI project primarily to support the interaction between these
two layers.
Consider that if we decided to place the interface in the OMPI layer
as a framework then we would be able to place something other than (or
in addition to) ORTE underneath OMPI, but we would be limited in our
ability to place something other than (or in addition to) OMPI over
ORTE. Alternatively, if we decided to place the rte.h interface in the
ORTE layer then we would be able to place something other than (or in
addition to) OMPI over ORTE, but we would be limited in our ability to
place something other than (or in addition to) ORTE under OMPI.
Defining the interposition layer as a separate project between these
two layers allows maximal flexibility for the project and researchers
working on side branches.
(2) What if another project outside of Open MPI needs interface
changes to the pineapple 'rte.h'?
The rule of thumb is that 'The OMPI/ORTE/OPAL stack is king!'. This
means that the pineapple project should always err on the side of
supporting the OMPI/ORTE/OPAL stack, as that is the flagship product
of the Open MPI project. Interface suggestions are always welcome and
the rte.h may be extended/modified in the future as a result of those
suggestions. However, if a suggested change negatively impacts the
OMPI/ORTE/OPAL stack then it is unlikely to be accepted upstream by
the Open MPI community.
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>

</pre>
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11109/Pineapple-Teleconf.pdf">Pineapple-Teleconf.pdf</a>
</ul>
<!-- attachment="Pineapple-Teleconf.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11110.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11108.php">Nathan Hjelm: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
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
