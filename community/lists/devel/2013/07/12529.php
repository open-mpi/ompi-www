<?
$subject_val = "[OMPI devel] RFC: add performance variable interface to the MCA base";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 12:54:56 2013" -->
<!-- isoreceived="20130702165456" -->
<!-- sent="Tue, 2 Jul 2013 10:54:49 -0600" -->
<!-- isosent="20130702165449" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add performance variable interface to the MCA base" -->
<!-- id="20130702165449.GJ3886_at_pantheralanlgov.local" -->
<!-- charset="unknown-8bit" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add performance variable interface to the MCA base<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 12:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12528.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: As per the discussion at the developer's meeting in June add an interface for performance variables to the MCA base. The interface is implemented at the MCA level to allow performance variables to be exposed from any level (opal, orte, and ompi). For more information on performance variables please see MPI 3.0 &#194;&#167; 14.3.7.
<br>
<p>When: I want to get this new API right the first time so I am setting a relatively long timeout: 2 weeks (July 16, 2013). Please take a look and let me know what should change before it is committed. Because this is a well-contained change I intend to CMR it to 1.7.
<br>
<p>Working tree can be found @ github: <a href="https://github.com/hjelmn/ompi-mca-var">https://github.com/hjelmn/ompi-mca-var</a> (branch:mpit_pvar).
<br>
<p><p>Some high-level design details:
<br>
<p>&nbsp;1) When registering a performance variable with mca_base_pvar_register() the caller provides three functions: read - reads the current value of the variable (may be NULL), write - write the current value (can be NULL-- not used at this stage), and notify - used to deliver notification when handles are allocated/freed/started/stopped (can be NULL).
<br>
<p>&nbsp;2) If a notification function is provided it MUST return the number of values associated with the variable/bound mpi object combination (see the examples in pml/ob1) when notified that a handle has been bound. See the MPI_T documentation for more information.
<br>
<p>&nbsp;3) If the number of values associated with a variable are dependent on the bound object the caller MUST provide a notify function. The function MUST return this count when a performance variable handle is bound.
<br>
<p>&nbsp;4) If either the read or write functions are NULL default function(s) are used. These functions read/write to a context pointer specified at registration time (see the documentation in mca_base_pvar.h). The type of this pointer is determined by the variable type supplied at registration (int/unsigned/double/etc).
<br>
<p>&nbsp;5) It should be relatively straightforward to add variables to cover all existing peruse functionality. We do not intend to deprecate or remove peruse at this time.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12530.php">Ralph Castain: "[OMPI devel] RFC: revised ORTE error handling"</a>
<li><strong>Previous message:</strong> <a href="12528.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
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
