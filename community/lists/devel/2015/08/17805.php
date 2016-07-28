<?
$subject_val = "[OMPI devel] Fwd: PMIx 2.0 API thoughts";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 22:30:22 2015" -->
<!-- isoreceived="20150824023022" -->
<!-- sent="Sun, 23 Aug 2015 19:30:18 -0700" -->
<!-- isosent="20150824023018" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: PMIx 2.0 API thoughts" -->
<!-- id="FFACBCB8-31C7-4A85-813B-B5DCD8E5B893_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DB54ABB8-3D06-4699-B54A-6AB8E85C54B2_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: PMIx 2.0 API thoughts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 22:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - for those not on the PMIx mailing list, we would welcome your input
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: PMIx 2.0 API thoughts
</span><br>
<span class="quotelev1">&gt; Date: August 22, 2015 at 8:45:50 AM PDT
</span><br>
<span class="quotelev1">&gt; To: pmix-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the last PMIx telecon, people asked about the current status of suggested PMIx 2.0 plans. I confess that we have been so absorbed by integrating PMIx 1.x into OMPI/ORCM and SLURM that we haven&#226;&#128;&#153;t developed these plans as much as I had hoped. However, we have been collecting input from around the community and have assembled some initial thoughts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 2.0 effort can be broken into two general tracks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Performance Enhancements
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Reduced memory footprint. We currently store a lot of information in every process - in terms of per-proc footprint, it isn&#226;&#128;&#153;t that huge, but when we get to large numbers of procs/node there is a significant amount of duplicated space. Courtesy of Elena (Mellanox), we already have a shared memory implementation poised in the 2.0 branch that will allow the local PMIx server to create one instance of the info, and then just point the local procs to it. This will undoubtedly benefit from some refinement as we begin to fully utilize it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * The data scoping feature included in the PMIx_Put function provides several levels of locality. This helps reduce the amount of data being distributed across nodes and being stored on each node. Current programming model libraries (other than OMPI) don&#226;&#128;&#153;t exploit this feature, and we need to educate them on its use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Distributed approach to database organization. If we consider the publish/lookup data as well as the typical modex data, what we really have is a traditional key-value datastore. Requirements for fault tolerance are beginning to be reflected into this datastore, which raises questions regarding where and how we store it. There has been a lot of research on the best ways of storing and retrieving such data - the current approach isn&#226;&#128;&#153;t necessarily high on the list of &#226;&#128;&#156;best&#226;&#128;&#157; fault tolerant solutions. Therefore, we might want to spend some time looking at distributed datastore methods such as DHTs, included in PMIx as user-selectable options until we better understand their impact on performance. This will mean adding an appropriate infrastructure to PMIx to support such research.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Embedded collective algorithms for high-performance and scalable barrier/allgather operations. We do not envision PMIx having inter-nodal communication capabilities, but it is possible that we could provide APIs by which we could direct scalable collectives across the PMIx servers. These could range from traditional HPC algorithms to Adam Moody&#226;&#128;&#153;s new &#226;&#128;&#156;ring&#226;&#128;&#157; model - we should let the user direct the choice and provide a default automated selection method. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Assuming we provide the above API, I guess that would open the question of providing a complete standalone server that uses the provided communication functions to execute inter-nodal operations. We would need to somehow wrap the other server APIs so the host RM could do things like &#226;&#128;&#156;register_nspace&#226;&#128;&#157;, but this might make adoption easier for those preferring something standalone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Switching algorithms for full vs direct modex operations. PMIx provides the ability to either fully exchange all data during the &#226;&#128;&#156;modex&#226;&#128;&#157; operation, or to execute a zero-byte barrier (or even a &#226;&#128;&#156;no-op&#226;&#128;&#157;), with data retrieval done on an &#226;&#128;&#156;as-requested&#226;&#128;&#157; basis (what we call &#226;&#128;&#156;direct modex&#226;&#128;&#157;). Deciding which of these algorithms to use is currently left to the caller, which means it is hardwired into the programming model library. However, the &#226;&#128;&#156;optimal&#226;&#128;&#157; decision is probably a question of both scale and volume of data, which means that some selection logic might be appropriate. We could either embed the decision in PMIx, or at least provide an API to help users pick the best option based on provided info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Functional Extensions
</span><br>
<span class="quotelev1">&gt; These are focused on application-level APIs for interacting with the RM/system mgmt, based on input from various users as well as the recent CORAL RFP. Also, keep in mind that multi-tenant operations are likely to become more common as we see continued increases in the number of cores on nodes plus convergence of HPC with cloud environments. So the RM will likely become involved in managing an expanding range of resources (see <a href="http://www.open-mpi.org/papers/controls-2015/">http://www.open-mpi.org/papers/controls-2015/</a> &lt;<a href="http://www.open-mpi.org/papers/controls-2015/">http://www.open-mpi.org/papers/controls-2015/</a>&gt; for at least one vision of how this might look), which means applications will need to interact with it even more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Application-directed workflow execution. I&#226;&#128;&#153;ve been getting increased requests for the ability to support emerging programming models where the application &#226;&#128;&#156;steers&#226;&#128;&#157; execution (e.g., Hadoop, Spark, Legion, and Radical). In these models, the application starts as a single process, and then computes its resource needs (nodes, files, etc.), executes some operation that involves spawning new processes, evaluates the results, and iterates. We currently have the &#226;&#128;&#156;spawn&#226;&#128;&#157; API, but additional support will be required. I suspect Gary&#226;&#128;&#153;s SC15 BoF will help to identify those needs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Request changes in power policy and settings. This is still an emerging area of interest, and really only on the largest machines, but providing a method for doing this would be helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Direct positioning of files for use by the application or another job step within the same allocated session. As on-node storage increases (e.g., with NVRAM), opportunities exist for pre-positioning files and retaining files and/or shared memory regions across job steps within the same allocated session. This needs to be supported as part of a workflow script as well as via a programmatic API (for dynamic directions by the application) - if we provide a standard library for this purpose, then even the cmd line becomes easy to support. This would also include specifying storage policies such as hot/warm/cold locations, and requests for burst buffer management.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Request notification of events at the application and/or system level, including warning of predicted failures for preemptive response, notification of process failures, and other events of interest to the application. I&#226;&#128;&#153;ve received requests for a laundry list of events that various applications would like to be notified about, so I think generalizing the existing notification API makes the most sense. Currently, we only support registration of a single notifier callback. This probably needs to be extended to allow registration of an arbitrary number of callbacks, each for a given event (or combination of events), with multiple callbacks for the same event supported in some kind of defined progression (i.e., call this function first, then call this one next - maybe with a &#226;&#128;&#156;stop the callback stack&#226;&#128;&#157; return option).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Define notification response actions, including allocation of replacement resources and launch of replacement processes. All of the specific operations will probably be supported via other APIs, but we need a way to tell the host RM that the application is indeed taking responsive action, so please don&#226;&#128;&#153;t do anything that would interfere with that action (e.g., terminate the job).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Request dynamic modification of allocations, including expansion and/or partial release of the existing allocation, and new allocations for subsequent spawn requests;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Request fabric QoS and security constraints, plus information on network topology.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously this is going to take some significant time to cover all these areas, and I honestly don&#226;&#128;&#153;t expect to see ALL of them in the 2.x series. This is an open source community project, so the timing and ordering of the features will depend on the interests of the developers, influenced as always by feedback from users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So please feel free to &#226;&#128;&#156;volunteer&#226;&#128;&#157; to contribute!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17805/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
