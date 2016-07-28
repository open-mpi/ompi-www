<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 13 11:45:08 2007" -->
<!-- isoreceived="20070913154508" -->
<!-- sent="Thu, 13 Sep 2007 11:44:51 -0400" -->
<!-- isosent="20070913154451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a new component" -->
<!-- id="35BEB205-8070-4741-B8CB-F6DB655B498E_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF2980F72F.A472E76D-ON86257353.0059A590-86257353.0059C942_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-13 11:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>In reply to:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Aurelien said, check out this thread:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2007/09/2312.php">http://www.open-mpi.org/community/lists/devel/2007/09/2312.php</a>
<br>
<p>Tim Prins gives some additional tips about how to add a new component  
<br>
to Open MPI.
<br>
<p><p>On Sep 11, 2007, at 12:20 PM, Sajjad Tabib wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Aurelien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the pointers. I was able to plug in a component to an  
</span><br>
<span class="quotelev1">&gt; existing framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sajjad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 09/08/07 01:34 PM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] Adding a new component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Sajjad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First it will depend wether you are writing a new component in an  
</span><br>
<span class="quotelev1">&gt; existing framework (let say you are writing a new BTL for a new  
</span><br>
<span class="quotelev1">&gt; type of interconnect) or a totally new framework (you want to have  
</span><br>
<span class="quotelev1">&gt; a family of component that can manage a totally new functionality  
</span><br>
<span class="quotelev1">&gt; in Open MPI). In each Framework there is a &quot;base&quot; which take care  
</span><br>
<span class="quotelev1">&gt; of the component selection process. If you are just adding a  
</span><br>
<span class="quotelev1">&gt; component, you will just need to provide a mca_mycomponent_init 
</span><br>
<span class="quotelev1">&gt; (bool enable_progress_threads, bool enable_mpi_threads) as  
</span><br>
<span class="quotelev1">&gt; described in the mca_component_t structure. The  
</span><br>
<span class="quotelev1">&gt; mca_framework_base_select will then take care of everything for  
</span><br>
<span class="quotelev1">&gt; you. If you want to add a new framework you'll have to create a  
</span><br>
<span class="quotelev1">&gt; selection function by yourself (all along with a full bunch of  
</span><br>
<span class="quotelev1">&gt; other functions to populate the base of the framework). I'll give  
</span><br>
<span class="quotelev1">&gt; you more details on this if it is relevant for you, just ask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 7 sept. 07 &#224; 17:21, Sajjad Tabib a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2315.php">Terry Dontje: "Re: [OMPI devel] Which tests for larger cluster testing"</a>
<li><strong>Previous message:</strong> <a href="2313.php">Tim Prins: "Re: [OMPI devel] Adding a new component to MTL"</a>
<li><strong>In reply to:</strong> <a href="2305.php">Sajjad Tabib: "Re: [OMPI devel] Adding a new component"</a>
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
