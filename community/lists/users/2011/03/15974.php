<?
$subject_val = "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 16:20:48 2011" -->
<!-- isoreceived="20110323202048" -->
<!-- sent="Wed, 23 Mar 2011 16:20:38 -0400" -->
<!-- isosent="20110323202038" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?" -->
<!-- id="4D8A5616.8040008_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19D9257B-9F81-466B-809E-579F0BFD785C_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 16:20:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15977.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Mar 21, 2011, at 9:27 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI Pros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an MCA parameter that would do the same as the mpiexec switch '-bind-to-core'?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., something that I could set up not in the mpiexec command line,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but for the whole cluster, or for an user, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the past I used '-mca mpi mpi_paffinity_alone=1'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Must be a typo here - the correct command is '-mca mpi_paffinity_alone 1'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But that was before '-bind-to-core' came along.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, my recollection of some recent discussions here in the list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that the latter would not do the same as '-bind-to-core',
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that the recommendation was to use '-bind-to-core' in the mpiexec command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be clear: mpi_paffinity_alone=1 still works and will cause the same behavior as bind-to-core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A little awkward, but how about
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --bycore                rmaps_base_schedule_policy  core
</span><br>
<span class="quotelev2">&gt;&gt;         --bysocket              rmaps_base_schedule_policy  socket
</span><br>
<span class="quotelev2">&gt;&gt;         --bind-to-core          orte_process_binding        core
</span><br>
<span class="quotelev2">&gt;&gt;         --bind-to-socket        orte_process_binding        socket
</span><br>
<span class="quotelev2">&gt;&gt;         --bind-to-none          orte_process_binding        none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<p>Thank you Ralph and Eugene
<br>
<p>Ralph, forgive me the typo in the previous message, please.
<br>
Equal sign inside the openmpi-mca-params.conf file,
<br>
but no equal sign on the mpiexec command line, right?
<br>
<p>I am using OpenMPI 1.4.3
<br>
I inserted the line
<br>
&quot;mpi_paffinity_alone = 1&quot;
<br>
in my openmpi-mca-params.conf file, following Ralph's suggestion
<br>
that it is equivalent to '-bind-to-core'.
<br>
<p>However, now when I do &quot;ompi_info -a&quot;,
<br>
the output shows the non-default value 1 twice in a row,
<br>
then later it shows the default value 0 again!
<br>
Please see the output enclosed below.
<br>
<p>I am confused.
<br>
<p>1) Is this just a glitch in ompi_info,
<br>
or did mpi_paffinity_alone get reverted to zero?
<br>
<p>2) How can I increase the verbosity level to make sure I have processor
<br>
affinity set (i.e. that the processes are bound to cores/processors)?
<br>
<p><p>Many thanks,
<br>
Gus Correa
<br>
<p>##########
<br>
<p>ompi_info -a
<br>
<p>...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
<br>
value: &quot;1&quot;, data source: file 
<br>
[/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], 
<br>
synonym of: opal_paffinity_alone)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If nonzero, assume that this job is the only 
<br>
(set of) process(es) running on each node and bind processes to 
<br>
processors, starting with processor ID 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
<br>
value: &quot;1&quot;, data source: file 
<br>
[/home/soft/openmpi/1.4.3/gnu-intel/etc/openmpi-mca-params.conf], 
<br>
synonym of: opal_paffinity_alone)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If nonzero, assume that this job is the only 
<br>
(set of) process(es) running on each node and bind processes to 
<br>
processors, starting with processor ID 0
<br>
<p>...
<br>
<p>[ ... and after 'mpi_leave_pinned_pipeline' ...]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current 
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If nonzero, assume that this job is the only 
<br>
(set of) process(es) running on each node and bind processes to 
<br>
processors, starting with processor ID 0
<br>
<p>...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15959.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to -bind-to-core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15975.php">Eugene Loh: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15977.php">Ralph Castain: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Reply:</strong> <a href="15980.php">Jeff Squyres: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
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
