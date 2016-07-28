<?
$subject_val = "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 12:07:57 2010" -->
<!-- isoreceived="20100823160757" -->
<!-- sent="Mon, 23 Aug 2010 10:07:52 -0600" -->
<!-- isosent="20100823160752" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component" -->
<!-- id="24CBE038-1B38-4243-A8B2-05008FC28005_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E563D2B8-8BF9-4C54-B7B1-BD04F37461D9_at_lanl.gov" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 12:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Previous message:</strong> <a href="8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>In reply to:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Code is in (see r23633).  Note: mmap is still the default.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Aug 12, 2010, at 11:37 AM, Samuel K. Gutierrez wrote:
&gt; Sorry, I should have included the link containing the discussion of  
&gt; the plot.
&gt;
&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8078.php">http://www.open-mpi.org/community/lists/devel/2010/06/8078.php</a>
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt; On Aug 12, 2010, at 11:20 AM, Terry Dontje wrote:
&gt;
&gt;&gt; Sorry Rich, I didn't realize there was a graph attached at the end  
&gt;&gt; of message.  In other words my comments are not applicable because  
&gt;&gt; I really didn't know you were asking about the graph.  I agree it  
&gt;&gt; would be nice to know what the graph was plotting.
&gt;&gt;
&gt;&gt; --td
&gt;&gt; Terry Dontje wrote:
&gt;&gt;&gt;
&gt;&gt;&gt; Graham, Richard L. wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Stupid question:
&gt;&gt;&gt;&gt;    What is being plotted, and what are the units ?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Rich
&gt;&gt;&gt;&gt;
&gt;&gt;&gt; MB of Resident and Shared memory as gotten from top (on linux).   
&gt;&gt;&gt; The values for each of the processes run cases seem to be the same  
&gt;&gt;&gt; between posix, mmap and sysv.
&gt;&gt;&gt;
&gt;&gt;&gt; --td
&gt;&gt;&gt;&gt; On 8/11/10 3:15 PM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Hi Terry,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Aug 11, 2010, at 12:34 PM, Terry Dontje wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  I've done some minor testing on Linux looking at resident and  
&gt;&gt;&gt;&gt; shared memory sizes for np=4, 8 and 16 jobs.  I could not see any  
&gt;&gt;&gt;&gt; appreciable differences in sizes in the process between sysv,  
&gt;&gt;&gt;&gt; posix or mmap usage in the SM btl.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  So I am still somewhat non-plussed about making this the  
&gt;&gt;&gt;&gt; default.  It seems like the biggest gain out of using posix might  
&gt;&gt;&gt;&gt; be one doesn't need to worry about the location of the backing  
&gt;&gt;&gt;&gt; file.  This seems kind of frivolous to me since there is a  
&gt;&gt;&gt;&gt; warning that happens if the backing file is not memory based.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; If I'm not mistaken, the warning is only issued if the backing  
&gt;&gt;&gt;&gt; files is stored on the following file systems: Lustre, NFS,  
&gt;&gt;&gt;&gt; Panasas, and GPFS  (see: opal_path_nfs in opal/util/path.c).   
&gt;&gt;&gt;&gt; Based on the performance numbers that Sylvain provided on June  
&gt;&gt;&gt;&gt; 9th of this year (see attached),  there was a performance  
&gt;&gt;&gt;&gt; difference between mmap on /tmp and mmap on a tmpfs-like file  
&gt;&gt;&gt;&gt; system (/dev/shm in that particular case).  Using the new POSIX  
&gt;&gt;&gt;&gt; component provides us with a portable way to provide similar  
&gt;&gt;&gt;&gt; shared memory performance gains without having to worry about  
&gt;&gt;&gt;&gt; where the OMPI session directory is rooted.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Samuel K. Gutierrez
&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; [cid:3364459484_11867134]
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  I still working on testing the code on Solaris but I don't  
&gt;&gt;&gt;&gt; imagine I will see anything that will change my mind.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  --td
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Samuel K. Gutierrez wrote:
&gt;&gt;&gt;&gt; Hi Rich,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  It's a modification to the existing common sm component.  The  
&gt;&gt;&gt;&gt; modifications do include the addition of a new POSIX shared  
&gt;&gt;&gt;&gt; memory facility, however.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Sam
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  On Aug 11, 2010, at 10:05 AM, Graham, Richard L. wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Is this a modification of the existing component, or a new  
&gt;&gt;&gt;&gt; component ?
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Rich
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  On 8/10/10 10:52 AM, &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt; &lt;mailto:samuel_at_[hidden] 
&gt;&gt;&gt;&gt; &gt;  wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Hi,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  I wanted to give everyone a heads-up about a new POSIX shared  
&gt;&gt;&gt;&gt; memory
&gt;&gt;&gt;&gt;  component
&gt;&gt;&gt;&gt;  that has been in the works for a while now and is ready to be  
&gt;&gt;&gt;&gt; pushed
&gt;&gt;&gt;&gt;  into the
&gt;&gt;&gt;&gt;  trunk.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  <a href="http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new">http://bitbucket.org/samuelkgutierrez/ompi_posix_sm_new</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Some highlights:
&gt;&gt;&gt;&gt;  o New posix component now the new default.
&gt;&gt;&gt;&gt;         o May address some of the shared memory performance  
&gt;&gt;&gt;&gt; issues users
&gt;&gt;&gt;&gt;  encounter
&gt;&gt;&gt;&gt;            when OMPI's session directories are inadvertently  
&gt;&gt;&gt;&gt; placed on a non-
&gt;&gt;&gt;&gt;  local
&gt;&gt;&gt;&gt;            filesystem.
&gt;&gt;&gt;&gt;  o Silent component failover.
&gt;&gt;&gt;&gt;         o In the default case, if the posix component fails  
&gt;&gt;&gt;&gt; initialization,
&gt;&gt;&gt;&gt;            mmap will be selected.
&gt;&gt;&gt;&gt;  o The sysv component will only be queried for selection if it is
&gt;&gt;&gt;&gt;  placed before
&gt;&gt;&gt;&gt;     the mmap component (for example, -mca mpi_common_sm
&gt;&gt;&gt;&gt;  sysv,posix,mmap).  In the
&gt;&gt;&gt;&gt;     default case, sysv will never be queried/selected.
&gt;&gt;&gt;&gt;  o Per some on-list discussion, now unlinking mmaped file in both  
&gt;&gt;&gt;&gt; mmap
&gt;&gt;&gt;&gt;  and posix
&gt;&gt;&gt;&gt;     components (see: &quot;System V Shared Memory for Open MPI:  
&gt;&gt;&gt;&gt; Request for
&gt;&gt;&gt;&gt;  Community
&gt;&gt;&gt;&gt;     Input and Testing&quot; thread).
&gt;&gt;&gt;&gt;  o  Assuming local process homogeneity with respect to all utilized
&gt;&gt;&gt;&gt;  shared
&gt;&gt;&gt;&gt;      memory facilities. That is, if one local process deems a
&gt;&gt;&gt;&gt;  particular shared
&gt;&gt;&gt;&gt;      memory facility acceptable, then ALL local processes should be
&gt;&gt;&gt;&gt;  able to
&gt;&gt;&gt;&gt;      utilize that facility. As it stands, this is an important  
&gt;&gt;&gt;&gt; point
&gt;&gt;&gt;&gt;  because one
&gt;&gt;&gt;&gt;      process dictates to all other local processes which common sm
&gt;&gt;&gt;&gt;  component will
&gt;&gt;&gt;&gt;      be selected based on its own, local run-time test.
&gt;&gt;&gt;&gt;  o Addressed some of George's code reuse concerns.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  If there are no major objections by August 17th, I'll commit the  
&gt;&gt;&gt;&gt; code
&gt;&gt;&gt;&gt;  after the
&gt;&gt;&gt;&gt;  Tuesday morning conference call.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  Thanks!
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  --
&gt;&gt;&gt;&gt;  Samuel K. Gutierrez
&gt;&gt;&gt;&gt;  Los Alamos National Laboratory
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  _______________________________________________
&gt;&gt;&gt;&gt;  devel mailing list
&gt;&gt;&gt;&gt;  devel_at_[hidden]
&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  _______________________________________________
&gt;&gt;&gt;&gt;  devel mailing list
&gt;&gt;&gt;&gt;  devel_at_[hidden]
&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;  _______________________________________________
&gt;&gt;&gt;&gt;  devel mailing list
&gt;&gt;&gt;&gt;  devel_at_[hidden]
&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; -- 
&gt;&gt;&gt; &lt;mime-attachment.gif&gt;
&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
&gt;&gt;&gt; Developer Tools Engineering | +1.650.633.7054
&gt;&gt;&gt; Oracle - Performance Technologies
&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
&gt;&gt;&gt; Email terry.dontje_at_[hidden]
&gt;&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; &lt;mime-attachment.gif&gt;
&gt;&gt; Terry D. Dontje | Principal Software Engineer
&gt;&gt; Developer Tools Engineering | +1.650.633.7054
&gt;&gt; Oracle - Performance Technologies
&gt;&gt; 95 Network Drive, Burlington, MA 01803
&gt;&gt; Email terry.dontje_at_[hidden]
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8308.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on MCA_BASE_METADATA_PARAM_NONE"</a>
<li><strong>Previous message:</strong> <a href="8306.php">David Gunter: "[OMPI devel] Unable to build OMPI 1.4.2 and newer w/Intel 10 or Intel 11 compilers"</a>
<li><strong>In reply to:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
