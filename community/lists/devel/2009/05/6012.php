<?
$subject_val = "Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 12:46:48 2009" -->
<!-- isoreceived="20090513164648" -->
<!-- sent="Wed, 13 May 2009 12:46:38 -0400" -->
<!-- isosent="20090513164638" -->
<!-- name="Maninder Singh" -->
<!-- email="ms3770_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configuring openmpi-1.3.2 with	&amp;quot;--without-rte-support&amp;quot;. FLAG." -->
<!-- id="000001c9d3ea$652e7040$2f8b50c0$_at_edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0905110825p2290b296q11ec5cb5b6afdf6e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configuring openmpi-1.3.2 with	&quot;--without-rte-support&quot;. FLAG.<br>
<strong>From:</strong> Maninder Singh (<em>ms3770_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 12:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>Thanks for the link and information. The understanding that I got from this,
<br>
regarding the process for scaling is
<br>
<p>-          Pass launch instructions to orteds
<br>
<p>-          Minimize the HNP connections
<br>
<p>-          Or, eliminate the entire orted phase by directly launching the
<br>
application procs.
<br>
<p>&nbsp;
<br>
<p>I have few queries. 
<br>
<p>I couldn't get the notion of modex operation.
<br>
<p>Where should I focus? The final objective can be to run MPI on a huge
<br>
cluster of embedded devices with very minute resources, eg memory.
<br>
<p>Is there any other documentation elaborating on the current 1.3.2
<br>
architecture?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Thanks and Regards,
<br>
<p>Maninder.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Monday, May 11, 2009 11:25 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Configuring openmpi-1.3.2 with
<br>
&quot;--without-rte-support&quot;. FLAG.
<br>
<p>&nbsp;
<br>
<p>OMPI has never really been ported to Bluegene environments, which is one
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
<p>Hello,
<br>
<p>Thanks for your quick response. I am working on LINUX Cluster, so probably
<br>
has SLURM installed.
<br>
<p>I am studying to minimise the time to start-up of OMPI on a homogeneous
<br>
system - like a bunch of embedded devices or even on large number of similar
<br>
cores - like Bluegene(they say it takes 30 min for OMPI to start on it!!!).
<br>
I am grad student and am trying to study the ways OMPI can be enhanced for
<br>
such systems. I thought the initialization process involving the discovery
<br>
of resources, allocation and forming the registery and then HNP must be
<br>
taking all that time. I don't have a large number of homogeneous systems at
<br>
my dispense, so was just trying with my small cluster of Linux boxes.
<br>
<p>If you can direct me to the right direction it will be really greatful.
<br>
<p>Thanks and Regards,
<br>
Maninder Singh.
<br>
<p><p><p>Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p>That configure option does work, but you appear to be on a system that
<br>
has SLURM installed - yes? Are you planning on running with SLURM?
<br>
<p>Building --without-rte-support will remove a lot more than just the
<br>
allocator and mapper. You have to be on a system like a Cray that has
<br>
its own launch, mapping, and MPI wireup support. Unfortunately,
<br>
SLURM
<br>
doesn't meet all those requirements.
<br>
<p>If you are trying to improve startup time, then you are probably
<br>
chasing the wrong areas. The allocation and mapping functions are only
<br>
loaded by mpirun, not any application process or daemon, and those
<br>
functions typically take only milliseconds to execute.
<br>
<p>What problem are you trying to solve? We have a lot of capability for
<br>
improved launch times built into 1.3.2, and even more in the OMPI
<br>
development trunk that will be in future releases. Depending upon the
<br>
precise problem you are trying to resolve, we can perhaps point you to
<br>
a better solution.
<br>
<p>Ralph
<br>
<p>On May 11, 2009, at 12:18 AM, ms3770_at_[hidden] wrote:
<br>
<p>Hello All,
<br>
<p>I am trying to build openmpi-1.3.2 with &quot;--without-rte-support&quot;. I  am
<br>
getting bunch of
<br>
errors. Is this support fully functioning or not?
<br>
<p>I was trying to reduce the time OMPI takes to load on a homogenous  system
<br>
by removing the
<br>
Resource Discovery/Allocation/mapping stuff by giving all these as  static
<br>
inputs but then
<br>
I saw this FLAG and tried to build using it.
<br>
<p>Can anybody with knowledge on this direct me?
<br>
<p>Thanks and Regards,
<br>
Maninder.
<br>
<p>PS : Sorry, I sent this same mail to users group also, if that is  not
<br>
permissible please let me know.
<br>
<p>errors :
<br>
-------------------------------------------------------------------------
<br>
ess_slurm_module.c:63: error: ?orte_ess_base_app_abort? undeclared  here
<br>
(not in a
<br>
function)
<br>
ess_slurm_module.c: In function ?rte_init?:
<br>
ess_slurm_module.c:82: error: ?orte_jmap_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:82: error: (Each undeclared identifier is  reported only
<br>
once
<br>
ess_slurm_module.c:82: error: for each function it appears in.)
<br>
ess_slurm_module.c:82: error: ?jmap? undeclared (first use in this function)
<br>
ess_slurm_module.c:126: error: expected expression before ?)? token
<br>
ess_slurm_module.c: In function ?rte_finalize?:
<br>
ess_slurm_module.c:152: error: ?orte_nid_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:152: error: ?nids? undeclared (first use in this
<br>
function)
<br>
ess_slurm_module.c:153: error: ?orte_jmap_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:153: error: ?jmaps? undeclared (first use in  this
<br>
function)
<br>
ess_slurm_module.c:170: error: expected expression before ?)? token
<br>
ess_slurm_module.c:175: error: expected expression before ?)? token
<br>
ess_slurm_module.c: In function ?proc_is_local?:
<br>
ess_slurm_module.c:192: error: ?orte_nid_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:192: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_hostname?:
<br>
ess_slurm_module.c:218: error: ?orte_nid_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:218: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_arch?:
<br>
ess_slurm_module.c:236: error: ?orte_nid_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:236: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?update_arch?:
<br>
ess_slurm_module.c:254: error: ?orte_nid_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:254: error: ?nid? undeclared (first use in this function)
<br>
ess_slurm_module.c: In function ?proc_get_local_rank?:
<br>
ess_slurm_module.c:274: error: ?orte_pmap_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:274: error: ?pmap? undeclared (first use in this
<br>
function)
<br>
ess_slurm_module.c: In function ?proc_get_node_rank?:
<br>
ess_slurm_module.c:292: error: ?orte_pmap_t? undeclared (first use  in this
<br>
function)
<br>
ess_slurm_module.c:292: error: ?pmap? undeclared (first use in this
<br>
function)
<br>
make[2]: *** [ess_slurm_module.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte/mca/ess/slurm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/NotRoot/Documents/DES/OMPI/openmpi-1.3.2/orte'
<br>
make: *** [all-recursive] Error 1
<br>
-------------------------------------------------------------------------
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6013.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6011.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
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
