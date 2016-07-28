<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 13:20:40 2010" -->
<!-- isoreceived="20100812172040" -->
<!-- sent="Thu, 12 Aug 2010 13:20:15 -0400" -->
<!-- isosent="20100812172015" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="4C642D4F.5000606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C641D94.7090104_at_oracle.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 13:20:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Rich, I didn't realize there was a graph attached at the end of 
<br>
message.  In other words my comments are not applicable because I really 
<br>
didn't know you were asking about the graph.  I agree it would be nice 
<br>
to know what the graph was plotting.
<br>
<p>--td
<br>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Stupid question:
</span><br>
<span class="quotelev2">&gt;&gt;    What is being plotted, and what are the units ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; MB of Resident and Shared memory as gotten from top (on linux).  The 
</span><br>
<span class="quotelev1">&gt; values for each of the processes run cases seem to be the same between 
</span><br>
<span class="quotelev1">&gt; posix, mmap and sysv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On 8/11/10 3:15 PM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 11, 2010, at 12:34 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I've done some minor testing on Linux looking at resident and shared memory sizes for np=4, 8 and 16 jobs.  I could not see any appreciable differences in sizes in the process between sysv, posix or mmap usage in the SM btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So I am still somewhat non-plussed about making this the default.  It seems like the biggest gain out of using posix might be one doesn't need to worry about the location of the backing file.  This seems kind of frivolous to me since there is a warning that happens if the backing file is not memory based.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I'm not mistaken, the warning is only issued if the backing files is stored on the following file systems: Lustre, NFS, Panasas, and GPFS  (see: opal_path_nfs in opal/util/path.c).  Based on the performance numbers that Sylvain provided on June 9th of this year (see attached),  there was a performance difference between mmap on /tmp and mmap on a tmpfs-like file system (/dev/shm in that particular case).  Using the new POSIX component provides us with a portable way to provide similar shared memory performance gains without having to worry about where the OMPI session directory is rooted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [cid:3364459484_11867134]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I still working on testing the code on Solaris but I don't imagine I will see anything that will change my mind.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rich,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  It's a modification to the existing common sm component.  The modifications do include the addition of a new POSIX shared memory facility, however.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Sam
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a modification of the existing component, or a new component ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; &lt;mailto:samuel_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I wanted to give everyone a heads-up about a new POSIX shared memory
</span><br>
<span class="quotelev2">&gt;&gt;  component
</span><br>
<span class="quotelev2">&gt;&gt;  that has been in the works for a while now and is ready to be pushed
</span><br>
<span class="quotelev2">&gt;&gt;  into the
</span><br>
<span class="quotelev2">&gt;&gt;  trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Some highlights:
</span><br>
<span class="quotelev2">&gt;&gt;  o New posix component now the new default.
</span><br>
<span class="quotelev2">&gt;&gt;         o May address some of the shared memory performance issues users
</span><br>
<span class="quotelev2">&gt;&gt;  encounter
</span><br>
<span class="quotelev2">&gt;&gt;            when OMPI's session directories are inadvertently placed on a non-
</span><br>
<span class="quotelev2">&gt;&gt;  local
</span><br>
<span class="quotelev2">&gt;&gt;            filesystem.
</span><br>
<span class="quotelev2">&gt;&gt;  o Silent component failover.
</span><br>
<span class="quotelev2">&gt;&gt;         o In the default case, if the posix component fails initialization,
</span><br>
<span class="quotelev2">&gt;&gt;            mmap will be selected.
</span><br>
<span class="quotelev2">&gt;&gt;  o The sysv component will only be queried for selection if it is
</span><br>
<span class="quotelev2">&gt;&gt;  placed before
</span><br>
<span class="quotelev2">&gt;&gt;     the mmap component (for example, -mca mpi_common_sm
</span><br>
<span class="quotelev2">&gt;&gt;  sysv,posix,mmap).  In the
</span><br>
<span class="quotelev2">&gt;&gt;     default case, sysv will never be queried/selected.
</span><br>
<span class="quotelev2">&gt;&gt;  o Per some on-list discussion, now unlinking mmaped file in both mmap
</span><br>
<span class="quotelev2">&gt;&gt;  and posix
</span><br>
<span class="quotelev2">&gt;&gt;     components (see: &quot;System V Shared Memory for Open MPI: Request for
</span><br>
<span class="quotelev2">&gt;&gt;  Community
</span><br>
<span class="quotelev2">&gt;&gt;     Input and Testing&quot; thread).
</span><br>
<span class="quotelev2">&gt;&gt;  o  Assuming local process homogeneity with respect to all utilized
</span><br>
<span class="quotelev2">&gt;&gt;  shared
</span><br>
<span class="quotelev2">&gt;&gt;      memory facilities. That is, if one local process deems a
</span><br>
<span class="quotelev2">&gt;&gt;  particular shared
</span><br>
<span class="quotelev2">&gt;&gt;      memory facility acceptable, then ALL local processes should be
</span><br>
<span class="quotelev2">&gt;&gt;  able to
</span><br>
<span class="quotelev2">&gt;&gt;      utilize that facility. As it stands, this is an important point
</span><br>
<span class="quotelev2">&gt;&gt;  because one
</span><br>
<span class="quotelev2">&gt;&gt;      process dictates to all other local processes which common sm
</span><br>
<span class="quotelev2">&gt;&gt;  component will
</span><br>
<span class="quotelev2">&gt;&gt;      be selected based on its own, local run-time test.
</span><br>
<span class="quotelev2">&gt;&gt;  o Addressed some of George's code reuse concerns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If there are no major objections by August 17th, I'll commit the code
</span><br>
<span class="quotelev2">&gt;&gt;  after the
</span><br>
<span class="quotelev2">&gt;&gt;  Tuesday morning conference call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt;  Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt;  Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8266/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8266/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8266/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8264.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
