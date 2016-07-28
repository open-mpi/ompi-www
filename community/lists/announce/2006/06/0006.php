<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 23 09:59:46 2006" -->
<!-- isoreceived="20060623135946" -->
<!-- sent="Fri, 23 Jun 2006 09:59:45 -0400" -->
<!-- isosent="20060623135945" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.1 release" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA9F2EE_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-23 09:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/08/0007.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.1"</a>
<li><strong>Previous message:</strong> <a href="../../2006/04/0005.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.0.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and
<br>
industry partners, is pleased to announce the release of Open MPI
<br>
version 1.1.  This release contains many new features, performance
<br>
enhancements, and stability bug fixes.  Version 1.1 can be downloaded
<br>
from the main Open MPI web site or any of its mirrors (mirrors will be
<br>
updating shortly).
<br>
<p>We strongly recommend that all users upgrade to the version 1.1 series,
<br>
if possible.  The 1.0 series will likely have one more bug fix release
<br>
(v1.0.3), but is generally considered deprecated in favor of the new 1.1
<br>
series.
<br>
<p>Here are a list of changes in v1.1 as compared to v1.0.x:
<br>
<p>- Various MPI datatype fixes, optimizations.
<br>
- Fixed various problems on the SPARC architecture (e.g., not
<br>
&nbsp;&nbsp;correctly aligning addresses within structs).
<br>
- Improvements in various run-time error messages to be more clear
<br>
&nbsp;&nbsp;about what they mean and where the errors are occurring.
<br>
- Various fixes to mpirun's handling of --prefix.
<br>
- Updates and fixes for Cray/Red Storm support.
<br>
- Major improvements to the Fortran 90 MPI bindings:
<br>
&nbsp;&nbsp;- General improvements in compile/linking time and portability
<br>
&nbsp;&nbsp;&nbsp;&nbsp;between different F90 compilers.
<br>
&nbsp;&nbsp;- Addition of &quot;trivial&quot;, &quot;small&quot; (the default), and &quot;medium&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fortran 90 MPI module sizes (v1.0.x's F90 module was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;equivalent to &quot;medium&quot;).  See the README file for more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;explanation.
<br>
&nbsp;&nbsp;- Fix various MPI F90 interface functions and constant types to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;match.  Thanks to Michael Kluskens for pointing out the problems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to us.
<br>
- Allow short messages to use RDMA (vs. send/receive semantics) to a
<br>
&nbsp;&nbsp;limited number peers in both the mvapi and openib BTL components.
<br>
&nbsp;&nbsp;This reduces communication latency over IB channels.
<br>
- Numerous performance improvements throughout the entire code base.
<br>
- Many minor threading fixes.
<br>
- Add a define OMPI_SKIP_CXX to allow the user to skip the mpicxx.h from
<br>
&nbsp;&nbsp;being included in mpi.h. It allows the user to compile C code with a
<br>
CXX
<br>
&nbsp;&nbsp;compiler without including the CXX bindings.
<br>
- PERUSE support has been added. In order to activate it add
<br>
&nbsp;&nbsp;--enable-peruse to the configure options. All events described in
<br>
&nbsp;&nbsp;the PERUSE 2.0 draft are supported, plus one Open MPI
<br>
&nbsp;&nbsp;extension. PERUSE_COMM_REQ_XFER_CONTINUE allow to see how the data
<br>
&nbsp;&nbsp;is segmented internally, using multiple interfaces or the pipeline
<br>
&nbsp;&nbsp;engine. However, this version only support one event of each type
<br>
&nbsp;&nbsp;simultaneously attached to a communicator.
<br>
- Add support for running jobs in heterogeneous environments.
<br>
&nbsp;&nbsp;Currently supports environments with different endianness and
<br>
&nbsp;&nbsp;different representations of C++ bool and Fortran LOGICAL.
<br>
&nbsp;&nbsp;Mismatched sizes for other datatypes is not supported.
<br>
- Open MPI now includes an implementation of the MPI-2 One-Sided
<br>
&nbsp;&nbsp;Communications specification.
<br>
- Open MPI is now configurable in cross-compilation environments.
<br>
&nbsp;&nbsp;Several Fortran 77 and Fortran 90 tests need to be pre-seeded with
<br>
&nbsp;&nbsp;results from a config.cache-like file.
<br>
- Add --debug option to mpirun to generically invoke a parallel
<br>
debugger.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/08/0007.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.1"</a>
<li><strong>Previous message:</strong> <a href="../../2006/04/0005.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.0.2"</a>
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
