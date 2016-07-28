<?
$subject_val = "Re: [OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 16:47:15 2010" -->
<!-- isoreceived="20100429204715" -->
<!-- sent="Thu, 29 Apr 2010 14:47:05 -0600" -->
<!-- isosent="20100429204705" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="24B4CA1B-CC93-45E1-84A3-4AB8FD71AB43_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="t2x522fad9c1004290824ld7f8f56brdea70b21d18b5821_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug with /bin/sh and /bin/ksh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 16:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you pinpoint where you think the logic is incorrect? I can't easily see where the parens are being added, and don't know anyone who checks/uses that code path.
<br>
<p>This hasn't been touched in a very long time, which makes me a tad cautious in how this gets changed. Would need someone to either provide a patch, or at least provide a means to test the result.
<br>
<p><p>On Apr 29, 2010, at 9:24 AM, Jonathan Vincent wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had some trouble with a user using /bin/sh together with
</span><br>
<span class="quotelev1">&gt; openmpi/1.4.1 (Centos 5 on amd64 processors, intel compiler 11.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When spawning MPI processes on a different machine it gave errors such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh: -c: line 0: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; /bin/sh: -c: line 0: `/usr/bin/env
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/i-compilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64
</span><br>
<span class="quotelev1">&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev1">&gt; /pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs
</span><br>
<span class="quotelev1">&gt; 5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openMPI is making a malformed statement
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i.e. a simpler version such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt; ksh -c '/usr/bin/env FOO=bar (echo hello)'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is not valid
</span><br>
<span class="quotelev1">&gt; sh -c '/usr/bin/env FOO=bar echo hello'
</span><br>
<span class="quotelev1">&gt; works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This problem seems to be confined to the sh and ksh logic in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
