<?
$subject_val = "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 15:56:53 2014" -->
<!-- isoreceived="20141017195653" -->
<!-- sent="Fri, 17 Oct 2014 12:56:49 -0700" -->
<!-- isosent="20141017195649" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters" -->
<!-- id="095509BB-5247-4DDB-BCB3-5F37ECA91D62_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544150A2.8010607_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 15:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25532.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 17, 2014, at 10:23 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Your fixes covered much more than I could find.
</span><br>
<span class="quotelev1">&gt; The section about the three levels of process placement
</span><br>
<span class="quotelev1">&gt; (&quot; Mapping, Ranking, and Binding: Oh My!&quot;) really helps.
</span><br>
<span class="quotelev1">&gt; I would just add at the very beginning
</span><br>
<span class="quotelev1">&gt; short sentences quickly characterizing each of the three levels.
</span><br>
<span class="quotelev1">&gt; Kind of an &quot;abstract&quot;.
</span><br>
<span class="quotelev1">&gt; Then explain each level in more detail.
</span><br>
<p>Will do - thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I found Jeff's 2013 presentation about the new style
</span><br>
<span class="quotelev1">&gt; of process placement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The title calls it &quot;LAMA&quot;.
</span><br>
<span class="quotelev1">&gt; (That is mud in Portuguese! But the presentation is clear.)
</span><br>
<span class="quotelev1">&gt; OK, the acronym means &quot;Locality Aware Mapping Algorithm&quot;.
</span><br>
<span class="quotelev1">&gt; In any case, it sounds very similar to the current process placement
</span><br>
<span class="quotelev1">&gt; features of OMPI 1.8, although only Jeff and you can really tell if it
</span><br>
<span class="quotelev1">&gt; is exactly the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is the same, it may help to link it to the OMPI FAQ,
</span><br>
<span class="quotelev1">&gt; or somehow make it more visible, printable, etc.
</span><br>
<span class="quotelev1">&gt; If there are differences between OMPI 1.8 and the presentation,
</span><br>
<span class="quotelev1">&gt; it may be worth adjusting the presentation to the
</span><br>
<span class="quotelev1">&gt; current OMPI 1.8, and posting it as well.
</span><br>
<span class="quotelev1">&gt; That would be a good way to convey the OMPI 1.8
</span><br>
<span class="quotelev1">&gt; process placement conceptual model, along with its syntax
</span><br>
<span class="quotelev1">&gt; and examples.
</span><br>
<p>Yeah, I need to do that. LAMA was an alternative implementation of the current map/rank/bind system. It hasn&#146;t been fully maintained since it was introduced, and so I&#146;m not sure how much of it is functional. I need to create an equivalent for the current implementation.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/17/2014 12:10 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I know this commit could be a little hard to parse, but I have updated
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun man page on the trunk and will port the change over to the
</span><br>
<span class="quotelev2">&gt;&gt; 1.8 series tomorrow. FWIW, I&#146;ve provided the link to the commit below so
</span><br>
<span class="quotelev2">&gt;&gt; you can &#147;preview&#148; it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/f9d620e3a772cdeddd40b4f0789cf59c75b44868">https://github.com/open-mpi/ompi/commit/f9d620e3a772cdeddd40b4f0789cf59c75b44868</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 16, 2014, at 9:43 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know the process placement features are powerful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They were already very good in 1.6, even in 1.4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I just tried the new 1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-map-by l2cache&quot; (works nicely on Opteron 6300).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I couldn't keep track, test, and use the 1.7 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did that in the previous &quot;odd/new feature&quot; series (1.3, 1.5).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, my normal workload require that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I focus my attention on the &quot;even/stable&quot; series
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (less fun, more production).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence I hopped directly from 1.6 to 1.8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; although I read a number of mailing list postings about the new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; style of process placement.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pestering you again about documentation (last time for now):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpiexec man page also seems to need an update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is probably the first place people look for information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about runtime features.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For instance, the process placement examples still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use deprecated parameters and mpiexec options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bind-to-core, rmaps_base_schedule_policy, orte_process_binding, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/15/2014 11:10 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 15, 2014, at 11:46 AM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you Ralph and Jeff for the help!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Glad to hear the segmentation fault is reproducible and will be fixed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In any case, one can just avoid the old parameter name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (rmaps_base_schedule_policy),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and use instead the new parameter name
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (rmaps_base_mapping_policy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; without any problem in OMPI 1.8.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fix is in the nightly 1.8 tarball - I'll release a 1.8.4 soon to cover
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Ralph for sending the new (OMPI 1.8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter names for process binding.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My recollection is that sometime ago somebody (Jeff perhaps?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; posted here a link to a presentation (PDF or PPT) explaining the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; new style of process binding, but I couldn't find it in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; list archives.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe the link could be part of the FAQ (if not already there)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think it is, but I'll try to add it over the next day or so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The Open MPI runtime environment is really great.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, to take advantage of it one often has to do parameter guessing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and to do time consuming tests by trial and error,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; because the main sources of documentation are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the terse output of ompi_info, and several sparse
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; references in the FAQ.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Some of them outdated?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In addition, the runtime environment has evolved over time,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which is certainly a good thing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, along with this evolution, several runtime parameters
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changed both name and functionality, new ones were introduced,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; old ones were deprecated, which can be somewhat confusing,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and can lead to an ineffective use of the runtime environment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (In 1.8.3 I was using several deprecated parameters from 1.6.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that seem to be silently ignored at runtime.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I only noticed the problem because that segmentation fault happened.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I know asking for thorough documentation is foolish,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not really - it is something we need to get better about :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but I guess a simple table of runtime parameter names and valid values
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the FAQ, maybe sorted by their purpose/function, along with a few
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; examples of use, could help a lot.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Some of this material is now spread across several FAQ, but not so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; easy to find/compare.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That doesn't need to be a comprehensive table, but commonly used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; items like selecting the btl, selecting interfaces,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dealing with process binding,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modifying/enriching the stdout/sterr output
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (tagging output, increasing verbosity, etc),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; probably have their place there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yeah, we fell down on this one. The changes were announced with each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; step in the 1.7 series, but if you step from 1.6 directly to 1.8, you'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get caught flat-footed. We honestly didn't think of that case, and so we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mentally assumed that &quot;of course people have been following the series -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they know what happened&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You know what they say about those who &quot;assume&quot; :-/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll try to get something into the FAQ about the entire new mapping,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranking, and binding system. It is actually VERY powerful, allowing you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to specify pretty much any placement pattern you can imagine and bind it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to whatever level you desire. It was developed in response to requests
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from researchers who wanted to explore application performance versus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; placement strategies - but we provided some simplified options to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support more common usage patterns.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 10/15/2014 11:12 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We talked off-list -- fixed this on master and just filed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi-release/pull/33">https://github.com/open-mpi/ompi-release/pull/33</a> to get this into the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; v1.8 branch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 14, 2014, at 7:39 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 14, 2014, at 5:32 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI fans and experts
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is just a note in case other people run into the same problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I just built Open MPI 1.8.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As usual I put my old settings on openmpi-mca-params.conf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with no further thinking.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then I compiled the connectivity_c.c program and tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to run it with mpiexec.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That is a routine that never failed before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bummer!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've got a segmentation fault right away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Strange  - it works fine from the cmd line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 07:27:04  (v1.8) /home/common/openmpi/ompi-release$ mpirun -n 1 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rmaps_base_schedule_policy core hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A deprecated MCA variable value was specified in the environment or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the command line.  Deprecated MCA variables should be avoided;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; they may disappear in future releases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Deprecated variable: rmaps_base_schedule_policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New variable:        rmaps_base_mapping_policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; HOWEVER, I can replicate that behavior when it is in the default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; params file! I don't see the immediate cause of the difference, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will investigate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; After some head scratching, checking my environment, etc,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought I might have configured OMPI incorrectly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hence, I tried to get information from ompi_info.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oh well, ompi_info also segfaulted!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It took me a while to realize that the runtime parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; configuration file was the culprit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I inserted the runtime parameter settings one by one,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the segfault came with this one:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rmaps_base_schedule_policy = core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ompi_info (when I got it to work) told me that the parameter above
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is now a deprecated synonym of:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rmaps_base_mapping_policy = core
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In any case, the old synonym doesn't work and makes ompi_info and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec segfault (and I'd guess anything else that requires the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI runtime components).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Only the new parameter name works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That's because the segfault is happening in the printing of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; deprecation warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am also missing in the ompi_info output the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) orte_process_binding  ===&gt; hwloc_base_binding_policy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) orte_report_bindings   ===&gt; hwloc_base_report_bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3) opal_paffinity_alone  ===&gt; gone, use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc_base_binding_policy=none if you don't want any binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are they gone forever?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Are there replacements for them, with approximately the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; functionality?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there a list comparing the new (1.8) vs. old (1.6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI runtime parameters, and/or any additional documentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; about the new style of OMPI 1.8 runtime parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Will try to add this to the web site
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since there seems to have been a major revamping of the OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; runtime parameters, that would be a great help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25497.php">http://www.open-mpi.org/community/lists/users/2014/10/25497.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25498.php">http://www.open-mpi.org/community/lists/users/2014/10/25498.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2014/10/25501.php">http://www.open-mpi.org/community/lists/users/2014/10/25501.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/10/25501.php">http://www.open-mpi.org/community/lists/users/2014/10/25501.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25503.php">http://www.open-mpi.org/community/lists/users/2014/10/25503.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25508.php">http://www.open-mpi.org/community/lists/users/2014/10/25508.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25526.php">http://www.open-mpi.org/community/lists/users/2014/10/25526.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25531.php">http://www.open-mpi.org/community/lists/users/2014/10/25531.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25532.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
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
