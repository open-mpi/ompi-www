<?
$subject_val = "[Open MPI Announce] Open MPI v1.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 10 19:50:35 2010" -->
<!-- isoreceived="20101010235035" -->
<!-- sent="Sun, 10 Oct 2010 19:50:29 -0400" -->
<!-- isosent="20101010235029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.5 released" -->
<!-- id="C444D554-EE0E-410D-A650-484DF09535CE_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.5 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-10 19:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/12/0040.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.1 released"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.4.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.  This release represents over a year of research, development, and testing.  
<br>
<p>Although the version 1.5 release marks the advent of a new &quot;feature release&quot; series for Open MPI, the v1.4 series remains relevant as the &quot;super stable&quot; series (e.g., there will likely be a v1.4.4 someday).  To explain what I mean, here's an excerpt from our release methodology:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o Even minor release numbers are part of &quot;super-stable&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release series (e.g., v1.4.0). Releases in super stable series
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are well-tested, time-tested, and mature. Such releases are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recomended for production sites. Changes between subsequent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;releases in super stable series are expected to be fairly small.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;o Odd minor release numbers are part of &quot;feature&quot; release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;series (e.g., v1.5.0). Releases in feature releases are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;well-tested, but they are not necessarily time-tested or as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mature as super stable releases. Changes between subsequent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;releases in feature series may be large.
<br>
<p>The v1.5 series will eventually morph into the next &quot;super stable&quot; series, v1.6 -- at which time, we'll start a new &quot;feature&quot; series (v1.7).
<br>
<p>Version 1.5 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
<p>The following is an abbreviated list of changes in v1.5 (note that countless other smaller improvements and enhancements are not shown below):
<br>
<p>- Added &quot;knem&quot; support: direct process-to-process copying for shared
<br>
&nbsp;&nbsp;memory message passing.  See <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>
<br>
&nbsp;&nbsp;and the README file for more details.
<br>
- Updated shared library versioning scheme and linking style of MPI
<br>
&nbsp;&nbsp;applications.  The MPI application ABI has been broken from the
<br>
&nbsp;&nbsp;v1.3/v1.4 series.  MPI applications compiled against any prior
<br>
&nbsp;&nbsp;version of Open MPI will need to, at a minimum, re-link.  See the
<br>
&nbsp;&nbsp;README file for more details.
<br>
- Added &quot;fca&quot; collective component, enabling MPI collective offload
<br>
&nbsp;&nbsp;support for Voltaire switches.
<br>
- Fixed MPI one-sided operations with large target displacements.
<br>
&nbsp;&nbsp;Thanks to Brian Price and Jed Brown for reporting the issue.
<br>
- Fixed MPI_GET_COUNT when used with large counts.  Thanks to Jed
<br>
&nbsp;&nbsp;Brown for reporting the issue.
<br>
- Made the openib BTL safer if extremely low SRQ settings are used.
<br>
- Fixed handling of the array_of_argv parameter in the Fortran
<br>
&nbsp;&nbsp;binding of MPI_COMM_SPAWN_MULTIPLE (** also to appear: 1.4.3).
<br>
- Fixed malloc(0) warnings in some collectives.
<br>
- Fixed a problem with the Fortran binding for
<br>
&nbsp;&nbsp;MPI_FILE_CREATE_ERRHANDLER.  Thanks to Secretan Yves for identifying
<br>
&nbsp;&nbsp;the issue (** also to appear: 1.4.3).
<br>
- Updates to the LSF PLM to ensure that the path is correctly passed.
<br>
&nbsp;&nbsp;Thanks to Teng Lin for the patch (** also to appear: 1.4.3).
<br>
- Fixes for the F90 MPI_COMM_SET_ERRHANDLER and MPI_WIN_SET_ERRHANDLER
<br>
&nbsp;&nbsp;bindings.  Thanks to Paul Kapinos for pointing out the issue
<br>
&nbsp;&nbsp;(** also to appear: 1.4.3).
<br>
- Fixed extra_state parameter types in F90 prototypes for
<br>
&nbsp;&nbsp;MPI_COMM_CREATE_KEYVAL, MPI_GREQUEST_START, MPI_REGISTER_DATAREP,
<br>
&nbsp;&nbsp;MPI_TYPE_CREATE_KEYVAL, and MPI_WIN_CREATE_KEYVAL.
<br>
- Fixes for Solaris oversubscription detection.
<br>
- If the PML determines it can't reach a peer process, print a
<br>
&nbsp;&nbsp;slightly more helpful message.  Thanks to Nick Edmonds for the
<br>
&nbsp;&nbsp;suggestion. 
<br>
- Make btl_openib_if_include/exclude function the same way
<br>
&nbsp;&nbsp;btl_tcp_if_include/exclude works (i.e., supplying an _include list
<br>
&nbsp;&nbsp;overrides supplying an _exclude list).
<br>
- Apply more scalable reachability algorithm on platforms with more
<br>
&nbsp;&nbsp;than 8 TCP interfaces.
<br>
- Various assembly code updates for more modern platforms / compilers.
<br>
- Relax restrictions on using certain kinds of MPI datatypes with
<br>
&nbsp;&nbsp;one-sided operations.  Users beware; not all MPI datatypes are valid
<br>
&nbsp;&nbsp;for use with one-sided operations!
<br>
- Improve behavior of MPI_COMM_SPAWN with regards to --bynode.
<br>
- Various threading fixes in the openib BTL and other core pieces of
<br>
&nbsp;&nbsp;Open MPI.
<br>
- Various help file and man pages updates.
<br>
- Various FreeBSD and NetBSD updates and fixes.  Thanks to Kevin
<br>
&nbsp;&nbsp;Buckley and Aleksej Saushev for their work.
<br>
- Fix case where freeing communicators in MPI_FINALIZE could cause
<br>
&nbsp;&nbsp;process failures.
<br>
- Print warnings if shared memory state files are opened on what look
<br>
&nbsp;&nbsp;like networked filesystems.
<br>
- Update libevent to v1.4.13.
<br>
- Allow propagating signals to processes that call fork().
<br>
- Fix bug where MPI_GATHER was sometimes incorrectly examining the
<br>
&nbsp;&nbsp;datatype on non-root processes.  Thanks to Michael Hofmann for
<br>
&nbsp;&nbsp;investigating the issue.
<br>
- Various Microsoft Windows fixes.
<br>
- Various Catamount fixes.
<br>
- Various checkpoint / restart fixes.
<br>
- Xgrid support has been removed until it can be fixed (patches
<br>
&nbsp;&nbsp;would be welcome).
<br>
- Added simplistic &quot;libompitrace&quot; contrib package.  Using the MPI
<br>
&nbsp;&nbsp;profiling interface, it essentially prints out to stderr when select
<br>
&nbsp;&nbsp;MPI functions are invoked.
<br>
- Update bundled VampirTrace to v5.8.2.
<br>
- Add pkg-config(1) configuration files for ompi, ompi-c, ompi-cxx,
<br>
&nbsp;&nbsp;ompi-f77, ompi-f90.  See the README for more details.
<br>
- Removed the libopenmpi_malloc library (added in the v1.3 series)
<br>
&nbsp;&nbsp;since it is no longer necessary
<br>
- Add several notifier plugins (generally used when Open MPI detects
<br>
&nbsp;&nbsp;system/network administrator-worthy problems); each have their own
<br>
&nbsp;&nbsp;MCA parameters to govern their usage.  See &quot;ompi_info --param
<br>
&nbsp;&nbsp;notifier &lt;name&gt;&quot; for more details.
<br>
&nbsp;&nbsp;- command to execute arbitrary commands (e.g., run a script).
<br>
&nbsp;&nbsp;- file to send output to a file.
<br>
&nbsp;&nbsp;- ftb to send output to the Fault Tolerant Backplane (see
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://wiki.mcs.anl.gov/cifts/index.php/CIFTS">http://wiki.mcs.anl.gov/cifts/index.php/CIFTS</a>)
<br>
&nbsp;&nbsp;- hnp to send the output to mpirun.
<br>
&nbsp;&nbsp;- smtp (requires libesmtp) to send an email.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/12/0040.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.5.1 released"</a>
<li><strong>Previous message:</strong> <a href="0038.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.4.3 released"</a>
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
