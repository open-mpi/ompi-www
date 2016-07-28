<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 07:23:23 2010" -->
<!-- isoreceived="20100812112323" -->
<!-- sent="Thu, 12 Aug 2010 07:21:59 -0400" -->
<!-- isosent="20100812112159" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="4C63D957.40509_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B0B002A5-CCD5-4C1A-97A5-E681EE337919_at_lanl.gov" -->
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
<strong>Date:</strong> 2010-08-12 07:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8259.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do.
<br>
<p>--td
<br>
Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more thing...  Before testing on Solaris 10, could you please 
</span><br>
<span class="quotelev1">&gt; update (I just committed a Solaris 10 fix).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt; On Aug 11, 2010, at 1:15 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt;&gt; On Aug 11, 2010, at 12:34 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've done some minor testing on Linux looking at resident and shared 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory sizes for np=4, 8 and 16 jobs.  I could not see any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciable differences in sizes in the process between sysv, posix 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or mmap usage in the SM btl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I am still somewhat non-plussed about making this the default.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems like the biggest gain out of using posix might be one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't need to worry about the location of the backing file.  This 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems kind of frivolous to me since there is a warning that happens 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if the backing file is not memory based.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I'm not mistaken, the warning is only issued if the backing files 
</span><br>
<span class="quotelev2">&gt;&gt; is stored on the following file systems: Lustre, NFS, Panasas, and 
</span><br>
<span class="quotelev2">&gt;&gt; GPFS  (see: opal_path_nfs in opal/util/path.c).  Based on the 
</span><br>
<span class="quotelev2">&gt;&gt; performance numbers that Sylvain provided on June 9th of this year 
</span><br>
<span class="quotelev2">&gt;&gt; (see attached),  there was a performance difference between mmap on 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp and mmap on a tmpfs-like file system (/dev/shm in that 
</span><br>
<span class="quotelev2">&gt;&gt; particular case).  Using the new POSIX component provides us with a 
</span><br>
<span class="quotelev2">&gt;&gt; portable way to provide similar shared memory performance gains 
</span><br>
<span class="quotelev2">&gt;&gt; without having to worry about where the OMPI session directory is rooted.
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
<span class="quotelev2">&gt;&gt; &lt;sm-compared.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still working on testing the code on Solaris but I don't imagine I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will see anything that will change my mind.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Rich,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's a modification to the existing common sm component.  The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modifications do include the addition of a new POSIX shared memory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; facility, however.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this a modification of the existing component, or a new 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wanted to give everyone a heads-up about a new POSIX shared memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that has been in the works for a while now and is ready to be pushed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; into the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Some highlights:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o New posix component now the new default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        o May address some of the shared memory performance issues 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; encounter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           when OMPI's session directories are inadvertently placed 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on a non-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           filesystem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o Silent component failover.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        o In the default case, if the posix component fails 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialization,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           mmap will be selected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o The sysv component will only be queried for selection if it is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; placed before
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    the mmap component (for example, -mca mpi_common_sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sysv,posix,mmap).  In the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    default case, sysv will never be queried/selected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o Per some on-list discussion, now unlinking mmaped file in both mmap
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and posix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    components (see: &quot;System V Shared Memory for Open MPI: Request for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Community
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Input and Testing&quot; thread).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o  Assuming local process homogeneity with respect to all utilized
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     memory facilities. That is, if one local process deems a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; particular shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     memory facility acceptable, then ALL local processes should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     utilize that facility. As it stands, this is an important point
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     process dictates to all other local processes which common sm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     be selected based on its own, local run-time test.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; o Addressed some of George's code reuse concerns.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If there are no major objections by August 17th, I'll commit the code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; after the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tuesday morning conference call.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mime-attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8262/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8263.php">Graham, Richard L.: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>Previous message:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="8259.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8261.php">Terry Dontje: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
