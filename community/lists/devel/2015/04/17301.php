<?
$subject_val = "Re: [OMPI devel] 1.8.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 20:33:11 2015" -->
<!-- isoreceived="20150422003311" -->
<!-- sent="Wed, 22 Apr 2015 00:33:07 +0000" -->
<!-- isosent="20150422003307" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc2 released" -->
<!-- id="0BF7B913-3EE3-43AF-B290-05F1CEF06235_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17+rn9q54JNaZrFKHn-vQ-2C4=Y29XaA5xneh7RPan8Ww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc2 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-21 20:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17300.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17300.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens with master tar balls?
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Apr 21, 2015, at 7:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>Sorry the output in the previous email left out some relevant detail.
<br>
See here that BOTH dl components were unable to compile with the 1.8.5rc2 tarball:
<br>
<p>+++ Configuring MCA framework dl
<br>
checking for no configure components in framework dl...
<br>
checking for m4 configure components in framework dl... libltdl, dlopen
<br>
<p>--- MCA component dl:dlopen (m4 configuration macro, priority 80)
<br>
checking for MCA component dl:dlopen compile mode... static
<br>
checking dlfcn.h usability... yes
<br>
checking dlfcn.h presence... yes
<br>
checking for dlfcn.h... yes
<br>
looking for library without search path
<br>
checking for dlopen in -ldl... no
<br>
checking if MCA component dl:dlopen can compile... no
<br>
<p>--- MCA component dl:libltdl (m4 configuration macro, priority 50)
<br>
checking for MCA component dl:libltdl compile mode... static
<br>
checking --with-libltdl value... simple ok (unspecified)
<br>
checking --with-libltdl-libdir value... simple ok (unspecified)
<br>
checking for libltdl dir... compiler default
<br>
checking for libltdl library dir... linker default
<br>
checking ltdl.h usability... no
<br>
checking ltdl.h presence... no
<br>
checking for ltdl.h... no
<br>
checking if MCA component dl:libltdl can compile... no
<br>
configure: WARNING: Did not find a suitable static opal dl component
<br>
configure: WARNING: You might need to install libltld (and its headers) or
<br>
configure: WARNING: specify --disable-dlopen to configure.
<br>
configure: error: Cannot continue
<br>
<p>I am getting this on ALL of my {Free,Net,Open}BSD platforms.
<br>
However, they all built the dl:dlopen component fine when testing Jeff''s tarballs from PR410:
<br>
<p>--- MCA component dl:dlopen (m4 configuration macro, priority 80)
<br>
checking for MCA component dl:dlopen compile mode... static
<br>
checking dlfcn.h usability... yes
<br>
checking dlfcn.h presence... yes
<br>
checking for dlfcn.h... yes
<br>
looking for library without search path
<br>
checking for library containing dlopen... none required
<br>
checking if MCA component dl:dlopen can compile... yes
<br>
<p>The key difference I see is that dlopen() is available in libc, not in (the non-existent libdl).
<br>
So it looks likely that something wasn't brought over correctly/completely from master to v1.8.
<br>
<p>-Paul [a.k.a. bot:hargrove]
<br>
<p><p><p>On Tue, Apr 21, 2015 at 4:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
Is the following configure-fails-by-default behavior really the desired one in 1.8.5?
<br>
I thought this was more of a 1.9 change than a mid-series change.
<br>
<p>-Paul
<br>
<p>--- MCA component dl:libltdl (m4 configuration macro, priority 50)
<br>
checking for MCA component dl:libltdl compile mode... static
<br>
checking --with-libltdl value... simple ok (unspecified)
<br>
checking --with-libltdl-libdir value... simple ok (unspecified)
<br>
checking for libltdl dir... compiler default
<br>
checking for libltdl library dir... linker default
<br>
checking ltdl.h usability... no
<br>
checking ltdl.h presence... no
<br>
checking for ltdl.h... no
<br>
checking if MCA component dl:libltdl can compile... no
<br>
configure: WARNING: Did not find a suitable static opal dl component
<br>
configure: WARNING: You might need to install libltld (and its headers) or
<br>
configure: WARNING: specify --disable-dlopen to configure.
<br>
configure: error: Cannot continue
<br>
<p>On Tue, Apr 21, 2015 at 3:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>The NEWS changed completely between rc1 and r2, so I don't know easily exactly what is different between rc1 and rc2.  Here's the full 1.8.5 NEWS:
<br>
<p>- Fixed configure problems in some cases when using an external hwloc
<br>
&nbsp;&nbsp;installation.  Thanks to Erick Schnetter for reporting the error and
<br>
&nbsp;&nbsp;helping track down the source of the problem.
<br>
- Fixed linker error on OS X when using the clang compiler.  Thanks to
<br>
&nbsp;&nbsp;Erick Schnetter for reporting the error and helping track down the
<br>
&nbsp;&nbsp;source of the problem.
<br>
- Fixed MPI_THREAD_MULTIPLE deadlock error in the vader BTL.  Thanks
<br>
&nbsp;&nbsp;to Thomas Klimpel for reporting the issue.
<br>
- Fixed several Valgrind warnings.  Thanks for Lisandro Dalcin for
<br>
&nbsp;&nbsp;contributing a patch fixing some one-sided code paths.
<br>
- Fixed version compatibility test in OOB that broke ABI within the
<br>
&nbsp;&nbsp;1.8 series. NOTE: this will not resolve the problem between pre-1.8.5
<br>
&nbsp;&nbsp;versions, but will fix it going forward.
<br>
- Fix some issues related to running on Intel Xeon Phi coprocessors.
<br>
- Opportunistically switch away from using GNU Libtool's libltdl
<br>
&nbsp;&nbsp;library when possible (by default).
<br>
- Fix some VampirTrace errors.  Thanks to Paul Hargrove for reporting
<br>
&nbsp;&nbsp;the issues.
<br>
- Correct default binding patterns when --use-hwthread-cpus was
<br>
&nbsp;&nbsp;specified and nprocs &lt;= 2.
<br>
- Fix warnings about -finline-functions when compiling with clang.
<br>
- Updated the embedded hwloc with several bug fixes, including the
<br>
&nbsp;&nbsp;&quot;duplicate Lhwloc1 symbol&quot; that multiple users reported on some
<br>
&nbsp;&nbsp;platforms.
<br>
- Do not error when mpirun is invoked with with default bindings
<br>
&nbsp;&nbsp;(i.e., no binding was specified), and one or more nodes do not
<br>
&nbsp;&nbsp;support bindings.  Thanks to Annu Desari for pointing out the
<br>
&nbsp;&nbsp;problem.
<br>
- Let root invoke &quot;mpirun --version&quot; to check the version without
<br>
&nbsp;&nbsp;printing the &quot;Don't run as root!&quot; warnings.  Thanks to Robert McLay
<br>
&nbsp;&nbsp;for the suggestion.
<br>
- Fixed several bugs in OpenSHMEM support.
<br>
- Extended vader shared memory support to 32-bit architectures.
<br>
- Fix handling of very large datatypes.  Thanks to Bogdan Sataric for
<br>
&nbsp;&nbsp;the bug report.
<br>
- Fixed a bug in handling subarray MPI datatypes, and a bug when using
<br>
&nbsp;&nbsp;MPI_LB and MPI_UB.  Thanks to Gus Correa for pointing out the issue.
<br>
- Restore user-settable bandwidth and latency PML MCA variables.
<br>
- Multiple bug fixes for cleanup during MPI_FINALIZE in unusual
<br>
&nbsp;&nbsp;situations.
<br>
- Added support for TCP keepalive signals to ensure timely termination
<br>
&nbsp;&nbsp;when sockets between daemons cannot be created (e.g., due to a
<br>
&nbsp;&nbsp;firewall).
<br>
- Added MCA parameter to allow full use of a SLURM allocation when
<br>
&nbsp;&nbsp;started from a tool (supports LLNL debugger).
<br>
- Fixed several bugs in the configure logic for PMI and hwloc.
<br>
- Fixed incorrect interface index in TCP communications setup.  Thanks
<br>
&nbsp;&nbsp;to Mark Kettenis for spotting the problem and providing a patch.
<br>
- Fixed MPI_IREDUCE_SCATTER with single-process communicators when
<br>
&nbsp;&nbsp;MPI_IN_PLACE was not used.
<br>
- Added XRC support for OFED v3.12 and higher.
<br>
- Various updates and bug fixes to the Mellanox hcoll collective
<br>
&nbsp;&nbsp;support.
<br>
- Fix problems with Fortran compilers that did not support
<br>
&nbsp;&nbsp;REAL*16/COMPLEX*32 types.  Thanks to Orion Poplawski for identifying
<br>
&nbsp;&nbsp;the issue.
<br>
- Fixed problem with rpath/runpath support in pkg-config files.
<br>
&nbsp;&nbsp;Thanks to Christoph Junghans for notifying us of the issue.
<br>
- Man page fixes:
<br>
&nbsp;&nbsp;- Removed erroneous &quot;color&quot; discussion from MPI_COMM_SPLIT_TYPE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Erick Schnetter for spotting the outdated text.
<br>
&nbsp;&nbsp;- Fixed prototypes for MPI_IBARRIER.  Thanks to Maximilian for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;finding the issue.
<br>
&nbsp;&nbsp;- Updated docs about buffer usage in non-blocking communications.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Alexander Pozdneev for citing the outdated text.
<br>
&nbsp;&nbsp;- Added documentation about the 'ompi_unique' MPI_Info key with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_PUBLISH_NAME.
<br>
&nbsp;&nbsp;- Fixed typo in MPI_INTERCOMM_MERGE.  Thanks to Harald Servat for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;noticing and sending a patch.
<br>
&nbsp;&nbsp;- Updated configure paths in HACKING.  Thanks to Maximilien Levesque
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for the fix.
<br>
&nbsp;&nbsp;- Fixed Fortran typo in MPI_WIN_LOCK_ALL.  Thanks to Thomas Jahns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for pointing out the issue.
<br>
- Fixed a number of MPI one-sided bugs.
<br>
- Fixed MPI_COMM_SPAWN when invoked from a singleton job.
<br>
- Fixed a number of minor issues with CUDA support, including
<br>
&nbsp;&nbsp;registering of shared memory and supporting reduction support for
<br>
&nbsp;&nbsp;GPU buffers.
<br>
- Improved support for building OMPI on Cray platforms.
<br>
- Fixed performance regression introduced by the inadvertent default
<br>
&nbsp;&nbsp;enabling of MPI_THREAD_MULTIPLE support.
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17298.php">http://www.open-mpi.org/community/lists/devel/2015/04/17298.php</a>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352&lt;tel:%2B1-510-495-2352&gt;
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900&lt;tel:%2B1-510-486-6900&gt;
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17300.php">http://www.open-mpi.org/community/lists/devel/2015/04/17300.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17301/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Previous message:</strong> <a href="17300.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17300.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>Reply:</strong> <a href="17302.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
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
