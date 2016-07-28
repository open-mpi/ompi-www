<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep  8 14:34:41 2007" -->
<!-- isoreceived="20070908183441" -->
<!-- sent="Sat, 8 Sep 2007 14:34:35 -0400" -->
<!-- isosent="20070908183435" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a new component" -->
<!-- id="B64E08EC-5816-417B-AF87-77E00E1CAC77_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFF8A3483F.2753E1B6-ON8625734F.006E2BCA-8625734F.007550B4_at_us.ibm.com" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-08 14:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2295.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Previous message:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Reply:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sajjad,
<br>
<p>First it will depend wether you are writing a new component in an  
<br>
existing framework (let say you are writing a new BTL for a new type  
<br>
of interconnect) or a totally new framework (you want to have a  
<br>
family of component that can manage a totally new functionality in  
<br>
Open MPI). In each Framework there is a &quot;base&quot; which take care of the  
<br>
component selection process. If you are just adding a component, you  
<br>
will just need to provide a mca_mycomponent_init(bool  
<br>
enable_progress_threads, bool enable_mpi_threads) as described in the  
<br>
mca_component_t structure. The mca_framework_base_select will then  
<br>
take care of everything for you. If you want to add a new framework  
<br>
you'll have to create a selection function by yourself (all along  
<br>
with a full bunch of other functions to populate the base of the  
<br>
framework). I'll give you more details on this if it is relevant for  
<br>
you, just ask.
<br>
<p>Aurelien
<br>
<p>Le 7 sept. 07 &#224; 17:21, Sajjad Tabib a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a complete newbie to Open MPI internals and just began  
</span><br>
<span class="quotelev1">&gt; browsing the code and reading up on slides and papers. From what I  
</span><br>
<span class="quotelev1">&gt; have read, I learned that I have to create a new component. What I  
</span><br>
<span class="quotelev1">&gt; do not know is how to make MPI aware of it or should I say make MPI  
</span><br>
<span class="quotelev1">&gt; open and select my component. I found a set of slides that briefly  
</span><br>
<span class="quotelev1">&gt; went over adding components. For example, it briefly described that  
</span><br>
<span class="quotelev1">&gt; I must add PARAM_INIT_FILE and PARAM_CONFIG_FILES options in  
</span><br>
<span class="quotelev1">&gt; configure.params, but I'm not sure what these mean. Does anybody  
</span><br>
<span class="quotelev1">&gt; know of any tutorials/documents that could help me with this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; S Tabib
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2295.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16088"</a>
<li><strong>Previous message:</strong> <a href="2293.php">Aurelien Bouteiller: "Re: [OMPI devel] [devel-core] [RFC] Exit without finalize"</a>
<li><strong>In reply to:</strong> <a href="2292.php">Sajjad Tabib: "[OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Reply:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
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
