<?
$subject_val = "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 11:25:33 2009" -->
<!-- isoreceived="20090511152533" -->
<!-- sent="Mon, 11 May 2009 09:25:27 -0600" -->
<!-- isosent="20090511152527" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configuring openmpi-1.3.2 with &amp;quot;--without-rte-support&amp;quot;. FLAG." -->
<!-- id="71d2d8cc0905110825p2290b296q11ec5cb5b6afdf6e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090511111218.x1782egmm8sk0sos_at_cubmail.cc.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 11:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="5995.php">ms3770_at_[hidden]: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>In reply to:</strong> <a href="5995.php">ms3770_at_[hidden]: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI has never really been ported to Bluegene environments, which is one
<br>
reason why it would start so slow. Just running in a very suboptimal way.
<br>
We've never had access to a machine to do a real port, and the folks who use
<br>
BG's haven't been all that interested to date.
<br>
<p>First thing you might want to do is look at the new startup architecture -
<br>
your description is for the old 1.2 system, which admittedly scaled poorly.
<br>
The system in 1.3 is much, much faster and scalable. We start over 12k procs
<br>
in about 22 seconds on Roadrunner with OMPI 1.3.2, and that includes
<br>
completing MPI_Init wireup. The OMPI developers trunk is even faster.
<br>
<p>You also might want to look at our wiki page:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki">https://svn.open-mpi.org/trac/ompi/wiki</a>
<br>
<p>Specifically, take a look at:
<br>
<p>1. the engineering/developer meetings from Dec 2008 and Feb 25-27, 2009.
<br>
These were devoted to scaling issues, particular focused on startup scaling.
<br>
Included are plans for how we intend to go forward, some of which have
<br>
already been implemented.
<br>
<p>2. the ORTE scalability plan and measurements at the bottom of the page.
<br>
This will give you an idea of where the time is being spent.
<br>
<p>Once you have looked at those, I would be happy to provide you with an
<br>
update on where we stand today, and advice on where you might want to focus
<br>
your attention. There are certainly opportunities yet to be explored!
<br>
<p>Ralph
<br>
<p>On Mon, May 11, 2009 at 9:12 AM, &lt;ms3770_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your quick response. I am working on LINUX Cluster, so probably
</span><br>
<span class="quotelev1">&gt; has SLURM installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am studying to minimise the time to start-up of OMPI on a homogeneous
</span><br>
<span class="quotelev1">&gt; system - like a bunch of embedded devices or even on large number of similar
</span><br>
<span class="quotelev1">&gt; cores - like Bluegene(they say it takes 30 min for OMPI to start on it!!!).
</span><br>
<span class="quotelev1">&gt; I am grad student and am trying to study the ways OMPI can be enhanced for
</span><br>
<span class="quotelev1">&gt; such systems. I thought the initialization process involving the discovery
</span><br>
<span class="quotelev1">&gt; of resources, allocation and forming the registery and then HNP must be
</span><br>
<span class="quotelev1">&gt; taking all that time. I don't have a large number of homogeneous systems at
</span><br>
<span class="quotelev1">&gt; my dispense, so was just trying with my small cluster of Linux boxes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can direct me to the right direction it will be really greatful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and Regards,
</span><br>
<span class="quotelev1">&gt; Maninder Singh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  That configure option does work, but you appear to be on a system that
</span><br>
<span class="quotelev2">&gt;&gt; has SLURM installed - yes? Are you planning on running with SLURM?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building --without-rte-support will remove a lot more than just the
</span><br>
<span class="quotelev2">&gt;&gt; allocator and mapper. You have to be on a system like a Cray that has
</span><br>
<span class="quotelev2">&gt;&gt; its own launch, mapping, and MPI wireup support. Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; SLURM
</span><br>
<span class="quotelev2">&gt;&gt; doesn't meet all those requirements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are trying to improve startup time, then you are probably
</span><br>
<span class="quotelev2">&gt;&gt; chasing the wrong areas. The allocation and mapping functions are only
</span><br>
<span class="quotelev2">&gt;&gt; loaded by mpirun, not any application process or daemon, and those
</span><br>
<span class="quotelev2">&gt;&gt; functions typically take only milliseconds to execute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What problem are you trying to solve? We have a lot of capability for
</span><br>
<span class="quotelev2">&gt;&gt; improved launch times built into 1.3.2, and even more in the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; development trunk that will be in future releases. Depending upon the
</span><br>
<span class="quotelev2">&gt;&gt; precise problem you are trying to resolve, we can perhaps point you to
</span><br>
<span class="quotelev2">&gt;&gt; a better solution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2009, at 12:18 AM, ms3770_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I  am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting bunch of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors. Is this support fully functioning or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was trying to reduce the time OMPI takes to load on a homogenous
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  system by removing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Resource Discovery/Allocation/mapping stuff by giving all these as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static inputs but then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw this FLAG and tried to build using it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody with knowledge on this direct me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maninder.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS : Sorry, I sent this same mail to users group also, if that is  not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; permissible please let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared  here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (not in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?rte_init?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:82: error: (Each undeclared identifier is  reported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:82: error: for each function it appears in.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:82: error: ?jmap? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:126: error: expected expression before ?)? token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?rte_finalize?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:152: error: ?orte_nid_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:152: error: ?nids? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:153: error: ?jmaps? undeclared (first use in  this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:170: error: expected expression before ?)? token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:175: error: expected expression before ?)? token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?proc_is_local?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:192: error: ?orte_nid_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:192: error: ?nid? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?proc_get_hostname?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:218: error: ?orte_nid_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:218: error: ?nid? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?proc_get_arch?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:236: error: ?orte_nid_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:236: error: ?nid? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?update_arch?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:254: error: ?orte_nid_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:254: error: ?nid? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?proc_get_local_rank?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c: In function ?proc_get_node_rank?:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess_slurm_module.c:292: error: ?pmap? undeclared (first use in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [ess_slurm_module.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte/mca/ess/slurm'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  `/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="5995.php">ms3770_at_[hidden]: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>In reply to:</strong> <a href="5995.php">ms3770_at_[hidden]: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
<li><strong>Reply:</strong> <a href="6012.php">Maninder Singh: "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG."</a>
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
