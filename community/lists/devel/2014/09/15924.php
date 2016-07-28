<?
$subject_val = "Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 14:55:43 2014" -->
<!-- isoreceived="20140926185543" -->
<!-- sent="Fri, 26 Sep 2014 12:55:39 -0600" -->
<!-- isosent="20140926185539" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t" -->
<!-- id="10DEDFB6-0722-4AA3-B210-3D9406EA37CA_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05B55B09_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 14:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>Previous message:</strong> <a href="15923.php">Pritchard Jr., Howard: "[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>In reply to:</strong> <a href="15923.php">Pritchard Jr., Howard: "[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The s1 method is correct - other two are wrong
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Sep 26, 2014, at 9:24 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to figure out something about the kind of info pmi&#226;&#128;&#153;s are suppose
</span><br>
<span class="quotelev1">&gt; to be feeding back up in to orte/ompi, partly because native launch
</span><br>
<span class="quotelev1">&gt; doesn&#226;&#128;&#153;t seem to work too well in trunk. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; One of the things I&#226;&#128;&#153;m puzzling about is the purpose of the my_node_rank
</span><br>
<span class="quotelev1">&gt; field in orte_proc_info_t.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m particularly puzzled, because with the new pmix s2 and cray components,
</span><br>
<span class="quotelev1">&gt; we are returning the NODE RANK (i.e. which NODE in a virtual sense, the
</span><br>
<span class="quotelev1">&gt; proc is on) via a pmix_X_parse_pmap function.   See find_my_node in both
</span><br>
<span class="quotelev1">&gt; the pmix_cray_parse_pmap and pmix_s2_parse_pmap functions.     This
</span><br>
<span class="quotelev1">&gt; value is subsequently returned when the pmix component is queried with the
</span><br>
<span class="quotelev1">&gt; PMIX_NODE_RANK attribute.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; But, with s1, we seem to just be assigning the same value to my_node_rank
</span><br>
<span class="quotelev1">&gt; as to my_local_rank, based on the contents of the array returned from PMI_Get_clique_ranks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It appears that in the 1.7/1.8 branch, the behavior is to do the s1 route,
</span><br>
<span class="quotelev1">&gt; irrespective of whether pmi2 from slurm or the pmi.fuzzy from cray is used.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; HPC-5
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15923.php">http://www.open-mpi.org/community/lists/devel/2014/09/15923.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15924/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>Previous message:</strong> <a href="15923.php">Pritchard Jr., Howard: "[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
<li><strong>In reply to:</strong> <a href="15923.php">Pritchard Jr., Howard: "[OMPI devel] dfference between my_node_rank and my_local_rank in orte proc_info_t"</a>
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
