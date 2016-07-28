<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 17:13:45 2011" -->
<!-- isoreceived="20110323211345" -->
<!-- sent="Wed, 23 Mar 2011 13:13:37 -0800" -->
<!-- isosent="20110323211337" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?" -->
<!-- id="4D8A6281.7080300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 17:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15976.php">Gus Correa: "[OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15977.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2011, at 9:27 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there an MCA parameter that would do the same as the mpiexec 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; switch '-bind-to-core'?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.e., something that I could set up not in the mpiexec command line,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but for the whole cluster, or for an user, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the past I used '-mca mpi mpi_paffinity_alone=1'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Must be a typo here - the correct command is '-mca 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone 1'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But that was before '-bind-to-core' came along.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, my recollection of some recent discussions here in the list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is that the latter would not do the same as '-bind-to-core',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and that the recommendation was to use '-bind-to-core' in the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to be clear: mpi_paffinity_alone=1 still works and will cause 
</span><br>
<span class="quotelev2">&gt;&gt; the same behavior as bind-to-core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little awkward, but how about
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 2) How can I increase the verbosity level to make sure I have processor
</span><br>
<span class="quotelev1">&gt; affinity set (i.e. that the processes are bound to cores/processors)?
</span><br>
<p>Just a quick answer on 2).  The FAQ 
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4</a> (or 
<br>
&quot;man mpirun&quot; or &quot;mpirun --help&quot;) mentions --report-bindings.
<br>
<p>If this is on a Linux system with numactl, you can also try &quot;mpirun ... 
<br>
numactl --show&quot;.
<br>
<p><span class="quotelev1">&gt; ##########
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
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: file 
</span><br>
<span class="quotelev1">&gt; [/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], 
</span><br>
<span class="quotelev1">&gt; synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the 
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes to 
</span><br>
<span class="quotelev1">&gt; processors, starting with processor ID 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;, data source: file 
</span><br>
<span class="quotelev1">&gt; [/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], 
</span><br>
<span class="quotelev1">&gt; synonym of: opal_paffinity_alone)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the 
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes to 
</span><br>
<span class="quotelev1">&gt; processors, starting with processor ID 0
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
<span class="quotelev1">&gt;                   MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                            If nonzero, assume that this job is the 
</span><br>
<span class="quotelev1">&gt; only (set of) process(es) running on each node and bind processes to 
</span><br>
<span class="quotelev1">&gt; processors, starting with processor ID 0
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
<li><strong>Next message:</strong> <a href="15976.php">Gus Correa: "[OMPI users] keyval parser: error 1 reading file mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>In reply to:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15977.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
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
