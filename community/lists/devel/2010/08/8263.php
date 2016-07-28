<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 12:04:55 2010" -->
<!-- isoreceived="20100812160455" -->
<!-- sent="Thu, 12 Aug 2010 12:04:44 -0400" -->
<!-- isosent="20100812160444" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="C88993DC.E97F%rlgraham_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CBF14B5-4C56-4140-A06F-BCA81073A56F_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 12:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8262.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8258.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stupid question:
<br>
&nbsp;&nbsp;&nbsp;What is being plotted, and what are the units ?
<br>
<p>Rich
<br>
<p><p>On 8/11/10 3:15 PM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p>Hi Terry,
<br>
<p><p><p><p><p><p><p><p><p><p>On Aug 11, 2010, at 12:34 PM, Terry Dontje wrote:
<br>
<p><p>&nbsp;I've done some minor testing on Linux looking at resident and shared memory sizes for np=4, 8 and 16 jobs.  I could not see any appreciable differences in sizes in the process between sysv, posix or mmap usage in the SM btl.
<br>
<p>&nbsp;So I am still somewhat non-plussed about making this the default.  It seems like the biggest gain out of using posix might be one doesn't need to worry about the location of the backing file.  This seems kind of frivolous to me since there is a warning that happens if the backing file is not memory based.
<br>
<p>If I'm not mistaken, the warning is only issued if the backing files is stored on the following file systems: Lustre, NFS, Panasas, and GPFS  (see: opal_path_nfs in opal/util/path.c).  Based on the performance numbers that Sylvain provided on June 9th of this year (see attached),  there was a performance difference between mmap on /tmp and mmap on a tmpfs-like file system (/dev/shm in that particular case).  Using the new POSIX component provides us with a portable way to provide similar shared memory performance gains without having to worry about where the OMPI session directory is rooted.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
[cid:3364459484_11867134]
 I still working on testing the code on Solaris but I don't imagine I will see anything that will change my mind.
 --td
 Samuel K. Gutierrez wrote:
Hi Rich,
 It's a modification to the existing common sm component.  The modifications do include the addition of a new POSIX shared memory facility, however.
 Sam
 On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
Is this a modification of the existing component, or a new component ?
 Rich
 On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; &lt;mailto:samuel_at_[hidden]&gt;  wrote:
 Hi,
 I wanted to give everyone a heads-up about a new POSIX shared memory
 component
 that has been in the works for a while now and is ready to be pushed
 into the
 trunk.
 <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
 Some highlights:
 o New posix component now the new default.
        o May address some of the shared memory performance issues users
 encounter
           when OMPI's session directories are inadvertently placed on a non-
 local
           filesystem.
 o Silent component failover.
        o In the default case, if the posix component fails initialization,
           mmap will be selected.
 o The sysv component will only be queried for selection if it is
 placed before
    the mmap component (for example, -mca mpi_common_sm
 sysv,posix,mmap).  In the
    default case, sysv will never be queried/selected.
 o Per some on-list discussion, now unlinking mmaped file in both mmap
 and posix
    components (see: &quot;System V Shared Memory for Open MPI: Request for
 Community
    Input and Testing&quot; thread).
 o  Assuming local process homogeneity with respect to all utilized
 shared
     memory facilities. That is, if one local process deems a
 particular shared
     memory facility acceptable, then ALL local processes should be
 able to
     utilize that facility. As it stands, this is an important point
 because one
     process dictates to all other local processes which common sm
 component will
     be selected based on its own, local run-time test.
 o Addressed some of George's code reuse concerns.
 If there are no major objections by August 17th, I'll commit the code
 after the
 Tuesday morning conference call.
 Thanks!
 --
 Samuel K. Gutierrez
 Los Alamos National Laboratory
 _______________________________________________
 devel mailing list
 devel_at_[hidden]
 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
 _______________________________________________
 devel mailing list
 devel_at_[hidden]
 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
 _______________________________________________
 devel mailing list
 devel_at_[hidden]
 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8263/image.png" alt="image.png
">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8262.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8258.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
