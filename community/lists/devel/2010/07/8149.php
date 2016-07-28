<?
$subject_val = "[OMPI devel] NEWS for v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 08:48:54 2010" -->
<!-- isoreceived="20100707124854" -->
<!-- sent="Wed, 7 Jul 2010 08:49:01 -0400" -->
<!-- isosent="20100707124901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] NEWS for v1.5" -->
<!-- id="1A0A1E6C-DF75-4C4A-A711-7F37E62BC5B8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] NEWS for v1.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 08:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8150.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added a preamble to the top of NEWS and made up the list of items for v1.5.  Please verify and send me corrections:
<br>
<p>======
<br>
<p>As more fully described in the &quot;Software Version Number&quot; section in
<br>
the README file, Open MPI typically releases two separate version
<br>
series simultaneously.  Since these series have different goals and
<br>
are semi-independent of each other, a single NEWS-worthy item may be
<br>
introduced into different series at different times.  For example,
<br>
feature F was introduced in the vA.B series at version vA.B.C, and was
<br>
later introduced into the vX.Y series at vX.Y.Z.
<br>
<p>The first time feature F is released, the item will be listed in the
<br>
vA.B.C section, denoted as:
<br>
<p>&nbsp;&nbsp;&nbsp;(** also to appear: X.Y.Z) -- indicating that this item is also
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;likely to be included in future release
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;version vX.Y.Z.
<br>
<p>When vX.Y.Z is later released, the same NEWS-worthy item will also be
<br>
included in the vX.Y.Z section and be denoted as:
<br>
<p>&nbsp;&nbsp;&nbsp;(** also appeared: A.B.C)  -- indicating that this item was previously
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;included in release version vA.B.C.
<br>
<p><p>1.5
<br>
<pre>
---
- Updated shared library versioning scheme and linking style of MPI
  applications.  The MPI application ABI has been broken from the
  v1.3/v1.4 series.  MPI applications compiled against any prior
  version of Open MPI will need to, at a minimum, re-link.  See the
  README file for more details.
- Made the openib BTL safer if extremely low SRQ settings are used.
- Fixed handling of the array_of_argv parameter in the Fortran
  binding of MPI_COMM_SPAWN_MULTIPLE (** also to appear: 1.4.3).
- Fixed mallox(0) warnings in some collectives.
- Fixed a problem with the Fortran binding for
  MPI_FILE_CREATE_ERRHANDLER.  Thanks to Secretan Yves for identifying
  the issue (** also to appear: 1.4.3).
- Updates to the LSF PLM to ensure that the path is correctly passed.
  Thanks to Teng Lin for the patch (** also to appear: 1.4.3).
- Fixes for the F90 MPI_COMM_SET_ERRHANDLER and MPI_WIN_SET_ERRHANDLER
  bindings.  Thanks to Paul Kapinos for pointing out the issue
  (** also to appear: 1.4.3).
- Fixes for Solaris oversubscription detection.
- If the PML determines it can't reach a peer process, print a
  slightly more helpful message.  Thanks to Nick Edmonds for the
  suggestion. 
- Make btl_openib_if_include/exclude function the same what
  btl_tcp_if_include/exclude work (i.e., supplying an _include list
  overrides supplying an _exclude list).
- Apply more scalable reachability algorithm on platforms with more
  than 8 TCP interfaces.
- Various assembly code updates for more modern platforms / compilers.
- Relax restrictions on using certain kinds of MPI datatypes with
  one-sided operations.  Users beware; not all MPI datatypes are valid
  for use with one-sided operations!
- Improve behavior of MPI_COMM_SPAWN with regards to --bynode.
- Various threading fixes in the openib BTL and other core pieces of
  Open MPI.
- Various help file and man pages updates.
- Various FreeBSD and NetBSD updates and fixes.  Thanks to Kevin
  Buckley and Aleksej Saushev for their work.
- Fix case where freeing communicators in MPI_FINALIZE could cause
  process failures.
- Print warnings if shared memory state files are opened on what look
  like networked filesystems.
- Update libevent to v1.4.13.
- Allow propagating signals to processes that call fork().
- Fix bug where MPI_GATHER was sometimes incorrectly examining the
  datatype on non-root processes.  Thanks to Michael Hofmann for
  investigating the issue.
- Various Microsoft Windows fixes.
- Various Catamount fixes.
- Various checkpoint / restart fixes.
- Xgrid support has been removed until it can be fixed (patches
  would be welcome).
- Added simplistic &quot;libompitrace&quot; contrib package.  Using the MPI
  profiling interface, it essentially prints out to stderr when select
  MPI functions are invoked.
- Update bundled VampirTrace to v5.8.2.
- Add pkg-config(1) configuration files for ompi, ompi-c, ompi-cxx,
  ompi-f77, ompi-f90.  See the README for more details.
- Added &quot;knem&quot; support (direct process-to-process copying for shared
  memory message passing).  See <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>
  and the README file for more details.
- Removed the libopenmpi_malloc library (added in the v1.3 series)
  since it is no longer necessary
- Add several notifier plugins (generally used when Open MPI detects
  system/network administrator-worthy problems); each have their own
  MCA parameters to govern their usage.  See &quot;ompi_info --param
  notifier &lt;name&gt;&quot; for more details.
  - command to execute arbitrary commands (e.g., run a script).
  - file to send output to a file.
  - ftb to send output to the Fault Tolerant Backplane (see
    <a href="http://wiki.mcs.anl.gov/cifts/index.php/CIFTS">http://wiki.mcs.anl.gov/cifts/index.php/CIFTS</a>)
  - hnp to send the output to mpirun.
  - smtp (requires libesmtp) to send an email.
  - twitter (yes, that Twitter) to send a Tweet.
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
<li><strong>Next message:</strong> <a href="8150.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
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
