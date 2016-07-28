<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 17:40:46 2011" -->
<!-- isoreceived="20110323214046" -->
<!-- sent="Wed, 23 Mar 2011 15:40:37 -0600" -->
<!-- isosent="20110323214037" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?" -->
<!-- id="3F04475F-653C-458C-8FBE-5B6E7A3E6C42_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8A5616.8040008_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 17:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15976.php">Gus Correa: "[OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2011, at 2:20 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2011, at 9:27 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there an MCA parameter that would do the same as the mpiexec switch '-bind-to-core'?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.e., something that I could set up not in the mpiexec command line,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but for the whole cluster, or for an user, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the past I used '-mca mpi mpi_paffinity_alone=1'.
</span><br>
<span class="quotelev2">&gt;&gt; Must be a typo here - the correct command is '-mca mpi_paffinity_alone 1'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But that was before '-bind-to-core' came along.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, my recollection of some recent discussions here in the list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is that the latter would not do the same as '-bind-to-core',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and that the recommendation was to use '-bind-to-core' in the mpiexec command line.
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear: mpi_paffinity_alone=1 still works and will cause the same behavior as bind-to-core.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little awkward, but how about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        --bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you Ralph and Eugene
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, forgive me the typo in the previous message, please.
</span><br>
<span class="quotelev1">&gt; Equal sign inside the openmpi-mca-params.conf file,
</span><br>
<span class="quotelev1">&gt; but no equal sign on the mpiexec command line, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.3
</span><br>
<span class="quotelev1">&gt; I inserted the line
</span><br>
<span class="quotelev1">&gt; &quot;mpi_paffinity_alone = 1&quot;
</span><br>
<span class="quotelev1">&gt; in my openmpi-mca-params.conf file, following Ralph's suggestion
</span><br>
<span class="quotelev1">&gt; that it is equivalent to '-bind-to-core'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, now when I do &quot;ompi_info -a&quot;,
</span><br>
<span class="quotelev1">&gt; the output shows the non-default value 1 twice in a row,
</span><br>
<span class="quotelev1">&gt; then later it shows the default value 0 again!
</span><br>
<span class="quotelev1">&gt; Please see the output enclosed below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am confused.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Is this just a glitch in ompi_info,
</span><br>
<span class="quotelev1">&gt; or did mpi_paffinity_alone get reverted to zero?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Just tested it myself, and it looks like the output has a weird behavior in it - only shows when you use &quot;-a&quot; option. If you instead do:
<br>
<p>ompi_info --params opal all
<br>
<p>you'll get the correct output:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA opal: parameter &quot;opal_paffinity_alone&quot; (current value: &quot;1&quot;, data source: file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[/Users/rhc/openmpi/build/etc/openmpi-mca-params.conf], synonyms: mpi_paffinity_alone, mpi_paffinity_alone)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starting with processor ID 0
<br>
<p>I'll have to pass that on to Jeff - I suspect it is because mpi_paffinity_alone is a synonym for opal_paffinity_alone, and so it sorta gets defined twice in the code.
<br>
<p><span class="quotelev1">&gt; 2) How can I increase the verbosity level to make sure I have processor
</span><br>
<span class="quotelev1">&gt; affinity set (i.e. that the processes are bound to cores/processors)?
</span><br>
<p>As Eugene said, just --report-bindings, which is tied to &quot;-mca orte_report_bindings 1&quot;
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##########
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;1&quot;, data source: file [/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                          If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;1&quot;, data source: file [/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                          If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ ... and after 'mpi_leave_pinned_pipeline' ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15978.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15976.php">Gus Correa: "[OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
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
