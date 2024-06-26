<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 12:13:08 2010" -->
<!-- isoreceived="20100812161308" -->
<!-- sent="Thu, 12 Aug 2010 12:13:08 -0400" -->
<!-- isosent="20100812161308" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="4C641D94.7090104_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C88993DC.E97F%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2010-08-12 12:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Graham, Richard L. wrote:
<br>
<span class="quotelev1">&gt; Stupid question:
</span><br>
<span class="quotelev1">&gt;    What is being plotted, and what are the units ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;   
</span><br>
MB of Resident and Shared memory as gotten from top (on linux).  The 
<br>
values for each of the processes run cases seem to be the same between 
<br>
posix, mmap and sysv.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/11/10 3:15 PM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2010, at 12:34 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've done some minor testing on Linux looking at resident and shared memory sizes for np=4, 8 and 16 jobs.  I could not see any appreciable differences in sizes in the process between sysv, posix or mmap usage in the SM btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So I am still somewhat non-plussed about making this the default.  It seems like the biggest gain out of using posix might be one doesn't need to worry about the location of the backing file.  This seems kind of frivolous to me since there is a warning that happens if the backing file is not memory based.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm not mistaken, the warning is only issued if the backing files is stored on the following file systems: Lustre, NFS, Panasas, and GPFS  (see: opal_path_nfs in opal/util/path.c).  Based on the performance numbers that Sylvain provided on June 9th of this year (see attached),  there was a performance difference between mmap on /tmp and mmap on a tmpfs-like file system (/dev/shm in that particular case).  Using the new POSIX component provides us with a portable way to provide similar shared memory performance gains without having to worry about where the OMPI session directory is rooted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cid:3364459484_11867134]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I still working on testing the code on Solaris but I don't imagine I will see anything that will change my mind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; Hi Rich,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  It's a modification to the existing common sm component.  The modifications do include the addition of a new POSIX shared memory facility, however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a modification of the existing component, or a new component ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; &lt;mailto:samuel_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I wanted to give everyone a heads-up about a new POSIX shared memory
</span><br>
<span class="quotelev1">&gt;  component
</span><br>
<span class="quotelev1">&gt;  that has been in the works for a while now and is ready to be pushed
</span><br>
<span class="quotelev1">&gt;  into the
</span><br>
<span class="quotelev1">&gt;  trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Some highlights:
</span><br>
<span class="quotelev1">&gt;  o New posix component now the new default.
</span><br>
<span class="quotelev1">&gt;         o May address some of the shared memory performance issues users
</span><br>
<span class="quotelev1">&gt;  encounter
</span><br>
<span class="quotelev1">&gt;            when OMPI's session directories are inadvertently placed on a non-
</span><br>
<span class="quotelev1">&gt;  local
</span><br>
<span class="quotelev1">&gt;            filesystem.
</span><br>
<span class="quotelev1">&gt;  o Silent component failover.
</span><br>
<span class="quotelev1">&gt;         o In the default case, if the posix component fails initialization,
</span><br>
<span class="quotelev1">&gt;            mmap will be selected.
</span><br>
<span class="quotelev1">&gt;  o The sysv component will only be queried for selection if it is
</span><br>
<span class="quotelev1">&gt;  placed before
</span><br>
<span class="quotelev1">&gt;     the mmap component (for example, -mca mpi_common_sm
</span><br>
<span class="quotelev1">&gt;  sysv,posix,mmap).  In the
</span><br>
<span class="quotelev1">&gt;     default case, sysv will never be queried/selected.
</span><br>
<span class="quotelev1">&gt;  o Per some on-list discussion, now unlinking mmaped file in both mmap
</span><br>
<span class="quotelev1">&gt;  and posix
</span><br>
<span class="quotelev1">&gt;     components (see: &quot;System V Shared Memory for Open MPI: Request for
</span><br>
<span class="quotelev1">&gt;  Community
</span><br>
<span class="quotelev1">&gt;     Input and Testing&quot; thread).
</span><br>
<span class="quotelev1">&gt;  o  Assuming local process homogeneity with respect to all utilized
</span><br>
<span class="quotelev1">&gt;  shared
</span><br>
<span class="quotelev1">&gt;      memory facilities. That is, if one local process deems a
</span><br>
<span class="quotelev1">&gt;  particular shared
</span><br>
<span class="quotelev1">&gt;      memory facility acceptable, then ALL local processes should be
</span><br>
<span class="quotelev1">&gt;  able to
</span><br>
<span class="quotelev1">&gt;      utilize that facility. As it stands, this is an important point
</span><br>
<span class="quotelev1">&gt;  because one
</span><br>
<span class="quotelev1">&gt;      process dictates to all other local processes which common sm
</span><br>
<span class="quotelev1">&gt;  component will
</span><br>
<span class="quotelev1">&gt;      be selected based on its own, local run-time test.
</span><br>
<span class="quotelev1">&gt;  o Addressed some of George's code reuse concerns.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If there are no major objections by August 17th, I'll commit the code
</span><br>
<span class="quotelev1">&gt;  after the
</span><br>
<span class="quotelev1">&gt;  Tuesday morning conference call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;  Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8264/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8265.php">Jeff Squyres: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Reply:</strong> <a href="8266.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
