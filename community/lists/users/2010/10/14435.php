<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 10 21:10:38 2010" -->
<!-- isoreceived="20101011011038" -->
<!-- sent="Sun, 10 Oct 2010 19:10:08 -0600" -->
<!-- isosent="20101011011008" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released" -->
<!-- id="4CB263F0.7060508_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C444D554-EE0E-410D-A650-484DF09535CE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-10 21:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14434.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;You didn't mention complete Fortran support on Windows, thanks to 
<br>
Shiqing.  :-)
<br>
<p>Damien
<br>
<p>On 10/10/2010 5:50 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.5.  This release represents over a year of research, development, and testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although the version 1.5 release marks the advent of a new &quot;feature release&quot; series for Open MPI, the v1.4 series remains relevant as the &quot;super stable&quot; series (e.g., there will likely be a v1.4.4 someday).  To explain what I mean, here's an excerpt from our release methodology:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      o Even minor release numbers are part of &quot;super-stable&quot;
</span><br>
<span class="quotelev1">&gt;        release series (e.g., v1.4.0). Releases in super stable series
</span><br>
<span class="quotelev1">&gt;        are well-tested, time-tested, and mature. Such releases are
</span><br>
<span class="quotelev1">&gt;        recomended for production sites. Changes between subsequent
</span><br>
<span class="quotelev1">&gt;        releases in super stable series are expected to be fairly small.
</span><br>
<span class="quotelev1">&gt;      o Odd minor release numbers are part of &quot;feature&quot; release
</span><br>
<span class="quotelev1">&gt;        series (e.g., v1.5.0). Releases in feature releases are
</span><br>
<span class="quotelev1">&gt;        well-tested, but they are not necessarily time-tested or as
</span><br>
<span class="quotelev1">&gt;        mature as super stable releases. Changes between subsequent
</span><br>
<span class="quotelev1">&gt;        releases in feature series may be large.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The v1.5 series will eventually morph into the next &quot;super stable&quot; series, v1.6 -- at which time, we'll start a new &quot;feature&quot; series (v1.7).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version 1.5 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following is an abbreviated list of changes in v1.5 (note that countless other smaller improvements and enhancements are not shown below):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Added &quot;knem&quot; support: direct process-to-process copying for shared
</span><br>
<span class="quotelev1">&gt;    memory message passing.  See <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>
</span><br>
<span class="quotelev1">&gt;    and the README file for more details.
</span><br>
<span class="quotelev1">&gt; - Updated shared library versioning scheme and linking style of MPI
</span><br>
<span class="quotelev1">&gt;    applications.  The MPI application ABI has been broken from the
</span><br>
<span class="quotelev1">&gt;    v1.3/v1.4 series.  MPI applications compiled against any prior
</span><br>
<span class="quotelev1">&gt;    version of Open MPI will need to, at a minimum, re-link.  See the
</span><br>
<span class="quotelev1">&gt;    README file for more details.
</span><br>
<span class="quotelev1">&gt; - Added &quot;fca&quot; collective component, enabling MPI collective offload
</span><br>
<span class="quotelev1">&gt;    support for Voltaire switches.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI one-sided operations with large target displacements.
</span><br>
<span class="quotelev1">&gt;    Thanks to Brian Price and Jed Brown for reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_GET_COUNT when used with large counts.  Thanks to Jed
</span><br>
<span class="quotelev1">&gt;    Brown for reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Made the openib BTL safer if extremely low SRQ settings are used.
</span><br>
<span class="quotelev1">&gt; - Fixed handling of the array_of_argv parameter in the Fortran
</span><br>
<span class="quotelev1">&gt;    binding of MPI_COMM_SPAWN_MULTIPLE (** also to appear: 1.4.3).
</span><br>
<span class="quotelev1">&gt; - Fixed malloc(0) warnings in some collectives.
</span><br>
<span class="quotelev1">&gt; - Fixed a problem with the Fortran binding for
</span><br>
<span class="quotelev1">&gt;    MPI_FILE_CREATE_ERRHANDLER.  Thanks to Secretan Yves for identifying
</span><br>
<span class="quotelev1">&gt;    the issue (** also to appear: 1.4.3).
</span><br>
<span class="quotelev1">&gt; - Updates to the LSF PLM to ensure that the path is correctly passed.
</span><br>
<span class="quotelev1">&gt;    Thanks to Teng Lin for the patch (** also to appear: 1.4.3).
</span><br>
<span class="quotelev1">&gt; - Fixes for the F90 MPI_COMM_SET_ERRHANDLER and MPI_WIN_SET_ERRHANDLER
</span><br>
<span class="quotelev1">&gt;    bindings.  Thanks to Paul Kapinos for pointing out the issue
</span><br>
<span class="quotelev1">&gt;    (** also to appear: 1.4.3).
</span><br>
<span class="quotelev1">&gt; - Fixed extra_state parameter types in F90 prototypes for
</span><br>
<span class="quotelev1">&gt;    MPI_COMM_CREATE_KEYVAL, MPI_GREQUEST_START, MPI_REGISTER_DATAREP,
</span><br>
<span class="quotelev1">&gt;    MPI_TYPE_CREATE_KEYVAL, and MPI_WIN_CREATE_KEYVAL.
</span><br>
<span class="quotelev1">&gt; - Fixes for Solaris oversubscription detection.
</span><br>
<span class="quotelev1">&gt; - If the PML determines it can't reach a peer process, print a
</span><br>
<span class="quotelev1">&gt;    slightly more helpful message.  Thanks to Nick Edmonds for the
</span><br>
<span class="quotelev1">&gt;    suggestion.
</span><br>
<span class="quotelev1">&gt; - Make btl_openib_if_include/exclude function the same way
</span><br>
<span class="quotelev1">&gt;    btl_tcp_if_include/exclude works (i.e., supplying an _include list
</span><br>
<span class="quotelev1">&gt;    overrides supplying an _exclude list).
</span><br>
<span class="quotelev1">&gt; - Apply more scalable reachability algorithm on platforms with more
</span><br>
<span class="quotelev1">&gt;    than 8 TCP interfaces.
</span><br>
<span class="quotelev1">&gt; - Various assembly code updates for more modern platforms / compilers.
</span><br>
<span class="quotelev1">&gt; - Relax restrictions on using certain kinds of MPI datatypes with
</span><br>
<span class="quotelev1">&gt;    one-sided operations.  Users beware; not all MPI datatypes are valid
</span><br>
<span class="quotelev1">&gt;    for use with one-sided operations!
</span><br>
<span class="quotelev1">&gt; - Improve behavior of MPI_COMM_SPAWN with regards to --bynode.
</span><br>
<span class="quotelev1">&gt; - Various threading fixes in the openib BTL and other core pieces of
</span><br>
<span class="quotelev1">&gt;    Open MPI.
</span><br>
<span class="quotelev1">&gt; - Various help file and man pages updates.
</span><br>
<span class="quotelev1">&gt; - Various FreeBSD and NetBSD updates and fixes.  Thanks to Kevin
</span><br>
<span class="quotelev1">&gt;    Buckley and Aleksej Saushev for their work.
</span><br>
<span class="quotelev1">&gt; - Fix case where freeing communicators in MPI_FINALIZE could cause
</span><br>
<span class="quotelev1">&gt;    process failures.
</span><br>
<span class="quotelev1">&gt; - Print warnings if shared memory state files are opened on what look
</span><br>
<span class="quotelev1">&gt;    like networked filesystems.
</span><br>
<span class="quotelev1">&gt; - Update libevent to v1.4.13.
</span><br>
<span class="quotelev1">&gt; - Allow propagating signals to processes that call fork().
</span><br>
<span class="quotelev1">&gt; - Fix bug where MPI_GATHER was sometimes incorrectly examining the
</span><br>
<span class="quotelev1">&gt;    datatype on non-root processes.  Thanks to Michael Hofmann for
</span><br>
<span class="quotelev1">&gt;    investigating the issue.
</span><br>
<span class="quotelev1">&gt; - Various Microsoft Windows fixes.
</span><br>
<span class="quotelev1">&gt; - Various Catamount fixes.
</span><br>
<span class="quotelev1">&gt; - Various checkpoint / restart fixes.
</span><br>
<span class="quotelev1">&gt; - Xgrid support has been removed until it can be fixed (patches
</span><br>
<span class="quotelev1">&gt;    would be welcome).
</span><br>
<span class="quotelev1">&gt; - Added simplistic &quot;libompitrace&quot; contrib package.  Using the MPI
</span><br>
<span class="quotelev1">&gt;    profiling interface, it essentially prints out to stderr when select
</span><br>
<span class="quotelev1">&gt;    MPI functions are invoked.
</span><br>
<span class="quotelev1">&gt; - Update bundled VampirTrace to v5.8.2.
</span><br>
<span class="quotelev1">&gt; - Add pkg-config(1) configuration files for ompi, ompi-c, ompi-cxx,
</span><br>
<span class="quotelev1">&gt;    ompi-f77, ompi-f90.  See the README for more details.
</span><br>
<span class="quotelev1">&gt; - Removed the libopenmpi_malloc library (added in the v1.3 series)
</span><br>
<span class="quotelev1">&gt;    since it is no longer necessary
</span><br>
<span class="quotelev1">&gt; - Add several notifier plugins (generally used when Open MPI detects
</span><br>
<span class="quotelev1">&gt;    system/network administrator-worthy problems); each have their own
</span><br>
<span class="quotelev1">&gt;    MCA parameters to govern their usage.  See &quot;ompi_info --param
</span><br>
<span class="quotelev1">&gt;    notifier&lt;name&gt;&quot; for more details.
</span><br>
<span class="quotelev1">&gt;    - command to execute arbitrary commands (e.g., run a script).
</span><br>
<span class="quotelev1">&gt;    - file to send output to a file.
</span><br>
<span class="quotelev1">&gt;    - ftb to send output to the Fault Tolerant Backplane (see
</span><br>
<span class="quotelev1">&gt;      <a href="http://wiki.mcs.anl.gov/cifts/index.php/CIFTS">http://wiki.mcs.anl.gov/cifts/index.php/CIFTS</a>)
</span><br>
<span class="quotelev1">&gt;    - hnp to send the output to mpirun.
</span><br>
<span class="quotelev1">&gt;    - smtp (requires libesmtp) to send an email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14434.php">G&#246;tz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
