<?
$subject_val = "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 09:10:02 2009" -->
<!-- isoreceived="20090126141002" -->
<!-- sent="Mon, 26 Jan 2009 09:09:55 -0500" -->
<!-- isosent="20090126140955" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols" -->
<!-- id="1232979006.0000_at_hypermail.dummy" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497D63F1.4020700_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 09:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5302.php">Jeff Squyres: "Re: [OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>Previous message:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>In reply to:</strong> <a href="5298.php">Brice Goglin: "[OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are several reasons these calls are there. Please read further.
<br>
<p>On Jan 26, 2009, at 02:19 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am testing OpenMPI 1.3 over Open-MX. OpenMPI 1.2 works well but 1.3
</span><br>
<span class="quotelev1">&gt; does not load. This is caused by OMPI MX components now using some MX
</span><br>
<span class="quotelev1">&gt; internal symbols (mx_open_board, mx__get_mapper_state and
</span><br>
<span class="quotelev1">&gt; mx__regcache_clean). This looks like an ugly hack to me :) Why don't  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; talk to Myricom about adding a proper interface in MX?
</span><br>
<p>mx__regcache_clean is something that was added inside Open MPI by the  
<br>
Myricom people. So, I guess they consider it as not ugly enough.
<br>
<p>mx_open_board is there so we can detect as quick as possible if the  
<br>
Myricom hardware is available on the machine or there are just  
<br>
libraries laying around. There is no other way to do so, except  
<br>
initializing the device, and then we are stuck with the current  
<br>
configuration (as we cannot modify the MX behavior at runtime).
<br>
<p>mx__get_mapper_state is there to detect multiple links and compute the  
<br>
routes. There are two reasons for this:
<br>
- clusters with multiple MX interfaces. We want to have a one to one  
<br>
mapping between the cards, and not to rely on the mapper to do the  
<br>
right thing.
<br>
- clusters of clusters: we have to be able to figure out that even if  
<br>
two computers have MX they will not necessarily be able to communicate  
<br>
over it if they belong to 2 distinct clusters.
<br>
<p><span class="quotelev1">&gt; Building OMPI directly on Open-MX will disable the mapper_state stuff
</span><br>
<span class="quotelev1">&gt; because of missing MX internal headers. But, Open-MX is ABI compatible
</span><br>
<span class="quotelev1">&gt; with MX.
</span><br>
<p>Unfortunately we access more than just the simple interface propose in  
<br>
myriexpress.h. However, Open MPI can be build without these  
<br>
dependencies if the correct defines are not set. I guess this will  
<br>
work in most common cases (not grids as an example).
<br>
<p><span class="quotelev1">&gt; So building on MX and running on Open-MX requires the addition
</span><br>
<span class="quotelev1">&gt; of these symbols in Open-MX anyway. Before I do so, I'd like to know  
</span><br>
<span class="quotelev1">&gt; why
</span><br>
<span class="quotelev1">&gt; you actually need these symbols. Are mx_open_board and
</span><br>
<span class="quotelev1">&gt; mx__get_mapper_state used to get a &quot;fabric identifier&quot; in the  
</span><br>
<span class="quotelev1">&gt; context of
</span><br>
<span class="quotelev1">&gt; multi-clusters/grids?
</span><br>
<p>Yes, you have half the answer.
<br>
<p><span class="quotelev1">&gt; If so, assuming it will ever matter for Open-MX,
</span><br>
<span class="quotelev1">&gt; is it ok to just have mx__get_mapper_state report the MAC address of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; my mapper node and nothing else in the mapper_state structure?
</span><br>
<p>Yes, the only thing we need is an unique identifier per cluster. We  
<br>
use the last 6 digits from the mapper MAC address.
<br>
<p><span class="quotelev1">&gt; Then, I guess mx__regcache_clean is called when the OMPI free hook  
</span><br>
<span class="quotelev1">&gt; wants to
</span><br>
<span class="quotelev1">&gt; clear the MX regcache, right?
</span><br>
<p>As we don't really have access to the MX memory registration (which is  
<br>
good), we need sometimes to force the cleanup. This is why we're using  
<br>
this function.
<br>
<p><span class="quotelev1">&gt; Also, is there any plan to use any other MX internal symbols in the
</span><br>
<span class="quotelev1">&gt; future releases?
</span><br>
<p>Depend on the bugs we're running into. So far so good, but there is no  
<br>
way to guarantee we will not need additional symbols.
<br>
<p><span class="quotelev1">&gt; By the way, is there a way to get more details from OMPI when it fails
</span><br>
<span class="quotelev1">&gt; to load a component because of missing symbols like this?
</span><br>
<span class="quotelev1">&gt; LD_DEBUG=verbose isn't very convenient :)
</span><br>
<p>mca_component_show_load_errors is what you need there. Set it to  
<br>
something high depending on the level of verbosity you want to have.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Brice Goglin
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5302.php">Jeff Squyres: "Re: [OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>Previous message:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<li><strong>In reply to:</strong> <a href="5298.php">Brice Goglin: "[OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
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
