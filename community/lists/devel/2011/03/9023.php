<?
$subject_val = "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 20:36:46 2011" -->
<!-- isoreceived="20110304013646" -->
<!-- sent="Thu, 03 Mar 2011 17:35:42 -0800" -->
<!-- isosent="20110304013542" -->
<!-- name="Tony Lam" -->
<!-- email="tony.lam_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager" -->
<!-- id="4D7041EE.6060906_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="81D7BE33-C44A-4456-BAAC-E730321E4380_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager<br>
<strong>From:</strong> Tony Lam (<em>tony.lam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 20:35:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Previous message:</strong> <a href="9022.php">Jeff Squyres: "[OMPI devel] 1.5.2rc3 posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/9021.php">Jeff Squyres: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>This is really helpful. I'm looking into the examples, will ask again on 
<br>
the list if I have more questions later.
<br>
<p>Tony
<br>
<p>On 02/24/11 08:01, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sure, we can do this.  Open MPI's support of various run-time systems is based on a series of plugins to our run-time later (the Open MPI Run-Time Environment, frequently abbreviated ORTE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can find details about creating new plugins (aka &quot;components&quot;, in Open MPI parlance) on this wiki page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI v1.4 is a continuation of the v1.3 series; you might want to upgrade to the latest-n-greatest, but it's not strictly necessary if you don't need to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You probably need to create 2 or 3 components in the 1.3/1.4 series:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - orte/mca/ess: Environment-Specific Services
</span><br>
<span class="quotelev1">&gt; - orte/mca/plm: Process Launch Manager
</span><br>
<span class="quotelev1">&gt; - orte/mca/ras: Resource Allocation Subsystem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at the corresponding plugin API header file for each framework (i.e., orte/mca/ess/ess.h, orte/mca/plm/plm.h, and orte/mca/ras/ras.h) for the details of what the components of each type need to provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then look at examples provided by the other components -- e.g., if your internal job scheduler is something like the SLURM model, look at orte/mca/[ess,plm,ras]/slurm.  If it's something like rsh, then look at orte/mca/plm/rsh and (I think?) orte/mca/ess/env (there is no RAS module for rsh because there's no back-end run-time system API that tells OMPI what hostnames to use).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2011, at 7:10 PM, Tony Lam wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm looking into supporting running OMPI jobs on our internal compute farms, specially we'd like to schedule and launch the jobs under the control of an internal resource manager that we developed. My reading so far indicated this can be achieved with some orted/plm plug-in (preferred over rsh/ssh), I'll appreciate if someone can give me suggestion on what exact plug-ins should be provided and what interfaces are expected from the plug-ins, I didn't find much info on this with my search on the mailing list and OMPI docs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently we have ompi v1.3, we can upgrade to a newer version if needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tony
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Previous message:</strong> <a href="9022.php">Jeff Squyres: "[OMPI devel] 1.5.2rc3 posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/02/9021.php">Jeff Squyres: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9024.php">Suraj Prabhakaran: "[OMPI devel]  Quick fix for MPI_Publish_name"</a>
<li><strong>Reply:</strong> <a href="9037.php">Christopher Samuel: "Re: [OMPI devel] Help needed to run OMPI jobs under internal resource manager"</a>
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
