<?
$subject_val = "Re: [OMPI devel] 1.8.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:46:00 2015" -->
<!-- isoreceived="20150422214600" -->
<!-- sent="Wed, 22 Apr 2015 21:45:58 +0000" -->
<!-- isosent="20150422214558" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc2 released" -->
<!-- id="8D72E5E3-57B5-4AC8-9D52-08CB40913571_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15z8ARxEYR_hrb4CeoSp16eGC16UVaGgmi52qcUuYnDgw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-22 17:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17329.php">Paul Hargrove: "[OMPI devel] 1.8.5rc2 testing report"</a>
<li><strong>Previous message:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17303.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- missed this when I reviewed / updated README for v1.8.  Will fix -- thanks!
<br>
<p><span class="quotelev1">&gt; On Apr 22, 2015, at 12:02 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless I am mistaken, the text quoted below from README no longer reflects the current behavior.
</span><br>
<span class="quotelev1">&gt; The text appears to be the same in master and v1.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-libltdl(=value)
</span><br>
<span class="quotelev1">&gt;   This option specifies where to find the GNU Libtool libltdl support
</span><br>
<span class="quotelev1">&gt;   library.  The following values are permitted:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     internal:    Use Open MPI's internal copy of libltdl.
</span><br>
<span class="quotelev1">&gt;     external:    Use an external libltdl installation (rely on default
</span><br>
<span class="quotelev1">&gt;                  compiler and linker paths to find it)
</span><br>
<span class="quotelev1">&gt;     &lt;no value&gt;:  Same as &quot;internal&quot;.
</span><br>
<span class="quotelev1">&gt;     &lt;directory&gt;: Specify the location of a specific libltdl
</span><br>
<span class="quotelev1">&gt;                  installation to use
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   By default (or if --with-libltdl is specified with no VALUE), Open
</span><br>
<span class="quotelev1">&gt;   MPI will build and use the copy of libltdl that it has in its source
</span><br>
<span class="quotelev1">&gt;   tree.  However, if the VALUE is &quot;external&quot;, Open MPI will look for
</span><br>
<span class="quotelev1">&gt;   the relevant libltdl header file and library in default compiler /
</span><br>
<span class="quotelev1">&gt;   linker locations.  Or, VALUE can be a directory tree where the
</span><br>
<span class="quotelev1">&gt;   libltdl header file and library can be found.  This option allows
</span><br>
<span class="quotelev1">&gt;   operating systems to include Open MPI and use their default libltdl
</span><br>
<span class="quotelev1">&gt;   installation instead of Open MPI's bundled libltdl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 21, 2015 at 3:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In the usual location:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The NEWS changed completely between rc1 and r2, so I don't know easily exactly what is different between rc1 and rc2.  Here's the full 1.8.5 NEWS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fixed configure problems in some cases when using an external hwloc
</span><br>
<span class="quotelev1">&gt;   installation.  Thanks to Erick Schnetter for reporting the error and
</span><br>
<span class="quotelev1">&gt;   helping track down the source of the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed linker error on OS X when using the clang compiler.  Thanks to
</span><br>
<span class="quotelev1">&gt;   Erick Schnetter for reporting the error and helping track down the
</span><br>
<span class="quotelev1">&gt;   source of the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_THREAD_MULTIPLE deadlock error in the vader BTL.  Thanks
</span><br>
<span class="quotelev1">&gt;   to Thomas Klimpel for reporting the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed several Valgrind warnings.  Thanks for Lisandro Dalcin for
</span><br>
<span class="quotelev1">&gt;   contributing a patch fixing some one-sided code paths.
</span><br>
<span class="quotelev1">&gt; - Fixed version compatibility test in OOB that broke ABI within the
</span><br>
<span class="quotelev1">&gt;   1.8 series. NOTE: this will not resolve the problem between pre-1.8.5
</span><br>
<span class="quotelev1">&gt;   versions, but will fix it going forward.
</span><br>
<span class="quotelev1">&gt; - Fix some issues related to running on Intel Xeon Phi coprocessors.
</span><br>
<span class="quotelev1">&gt; - Opportunistically switch away from using GNU Libtool's libltdl
</span><br>
<span class="quotelev1">&gt;   library when possible (by default).
</span><br>
<span class="quotelev1">&gt; - Fix some VampirTrace errors.  Thanks to Paul Hargrove for reporting
</span><br>
<span class="quotelev1">&gt;   the issues.
</span><br>
<span class="quotelev1">&gt; - Correct default binding patterns when --use-hwthread-cpus was
</span><br>
<span class="quotelev1">&gt;   specified and nprocs &lt;= 2.
</span><br>
<span class="quotelev1">&gt; - Fix warnings about -finline-functions when compiling with clang.
</span><br>
<span class="quotelev1">&gt; - Updated the embedded hwloc with several bug fixes, including the
</span><br>
<span class="quotelev1">&gt;   &quot;duplicate Lhwloc1 symbol&quot; that multiple users reported on some
</span><br>
<span class="quotelev1">&gt;   platforms.
</span><br>
<span class="quotelev1">&gt; - Do not error when mpirun is invoked with with default bindings
</span><br>
<span class="quotelev1">&gt;   (i.e., no binding was specified), and one or more nodes do not
</span><br>
<span class="quotelev1">&gt;   support bindings.  Thanks to Annu Desari for pointing out the
</span><br>
<span class="quotelev1">&gt;   problem.
</span><br>
<span class="quotelev1">&gt; - Let root invoke &quot;mpirun --version&quot; to check the version without
</span><br>
<span class="quotelev1">&gt;   printing the &quot;Don't run as root!&quot; warnings.  Thanks to Robert McLay
</span><br>
<span class="quotelev1">&gt;   for the suggestion.
</span><br>
<span class="quotelev1">&gt; - Fixed several bugs in OpenSHMEM support.
</span><br>
<span class="quotelev1">&gt; - Extended vader shared memory support to 32-bit architectures.
</span><br>
<span class="quotelev1">&gt; - Fix handling of very large datatypes.  Thanks to Bogdan Sataric for
</span><br>
<span class="quotelev1">&gt;   the bug report.
</span><br>
<span class="quotelev1">&gt; - Fixed a bug in handling subarray MPI datatypes, and a bug when using
</span><br>
<span class="quotelev1">&gt;   MPI_LB and MPI_UB.  Thanks to Gus Correa for pointing out the issue.
</span><br>
<span class="quotelev1">&gt; - Restore user-settable bandwidth and latency PML MCA variables.
</span><br>
<span class="quotelev1">&gt; - Multiple bug fixes for cleanup during MPI_FINALIZE in unusual
</span><br>
<span class="quotelev1">&gt;   situations.
</span><br>
<span class="quotelev1">&gt; - Added support for TCP keepalive signals to ensure timely termination
</span><br>
<span class="quotelev1">&gt;   when sockets between daemons cannot be created (e.g., due to a
</span><br>
<span class="quotelev1">&gt;   firewall).
</span><br>
<span class="quotelev1">&gt; - Added MCA parameter to allow full use of a SLURM allocation when
</span><br>
<span class="quotelev1">&gt;   started from a tool (supports LLNL debugger).
</span><br>
<span class="quotelev1">&gt; - Fixed several bugs in the configure logic for PMI and hwloc.
</span><br>
<span class="quotelev1">&gt; - Fixed incorrect interface index in TCP communications setup.  Thanks
</span><br>
<span class="quotelev1">&gt;   to Mark Kettenis for spotting the problem and providing a patch.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_IREDUCE_SCATTER with single-process communicators when
</span><br>
<span class="quotelev1">&gt;   MPI_IN_PLACE was not used.
</span><br>
<span class="quotelev1">&gt; - Added XRC support for OFED v3.12 and higher.
</span><br>
<span class="quotelev1">&gt; - Various updates and bug fixes to the Mellanox hcoll collective
</span><br>
<span class="quotelev1">&gt;   support.
</span><br>
<span class="quotelev1">&gt; - Fix problems with Fortran compilers that did not support
</span><br>
<span class="quotelev1">&gt;   REAL*16/COMPLEX*32 types.  Thanks to Orion Poplawski for identifying
</span><br>
<span class="quotelev1">&gt;   the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed problem with rpath/runpath support in pkg-config files.
</span><br>
<span class="quotelev1">&gt;   Thanks to Christoph Junghans for notifying us of the issue.
</span><br>
<span class="quotelev1">&gt; - Man page fixes:
</span><br>
<span class="quotelev1">&gt;   - Removed erroneous &quot;color&quot; discussion from MPI_COMM_SPLIT_TYPE.
</span><br>
<span class="quotelev1">&gt;     Thanks to Erick Schnetter for spotting the outdated text.
</span><br>
<span class="quotelev1">&gt;   - Fixed prototypes for MPI_IBARRIER.  Thanks to Maximilian for
</span><br>
<span class="quotelev1">&gt;     finding the issue.
</span><br>
<span class="quotelev1">&gt;   - Updated docs about buffer usage in non-blocking communications.
</span><br>
<span class="quotelev1">&gt;     Thanks to Alexander Pozdneev for citing the outdated text.
</span><br>
<span class="quotelev1">&gt;   - Added documentation about the 'ompi_unique' MPI_Info key with
</span><br>
<span class="quotelev1">&gt;     MPI_PUBLISH_NAME.
</span><br>
<span class="quotelev1">&gt;   - Fixed typo in MPI_INTERCOMM_MERGE.  Thanks to Harald Servat for
</span><br>
<span class="quotelev1">&gt;     noticing and sending a patch.
</span><br>
<span class="quotelev1">&gt;   - Updated configure paths in HACKING.  Thanks to Maximilien Levesque
</span><br>
<span class="quotelev1">&gt;     for the fix.
</span><br>
<span class="quotelev1">&gt;   - Fixed Fortran typo in MPI_WIN_LOCK_ALL.  Thanks to Thomas Jahns
</span><br>
<span class="quotelev1">&gt;     for pointing out the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed a number of MPI one-sided bugs.
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_COMM_SPAWN when invoked from a singleton job.
</span><br>
<span class="quotelev1">&gt; - Fixed a number of minor issues with CUDA support, including
</span><br>
<span class="quotelev1">&gt;   registering of shared memory and supporting reduction support for
</span><br>
<span class="quotelev1">&gt;   GPU buffers.
</span><br>
<span class="quotelev1">&gt; - Improved support for building OMPI on Cray platforms.
</span><br>
<span class="quotelev1">&gt; - Fixed performance regression introduced by the inadvertent default
</span><br>
<span class="quotelev1">&gt;   enabling of MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17298.php">http://www.open-mpi.org/community/lists/devel/2015/04/17298.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17303.php">http://www.open-mpi.org/community/lists/devel/2015/04/17303.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17329.php">Paul Hargrove: "[OMPI devel] 1.8.5rc2 testing report"</a>
<li><strong>Previous message:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17303.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
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
