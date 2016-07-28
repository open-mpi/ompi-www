<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 12:20:48 2007" -->
<!-- isoreceived="20070911162048" -->
<!-- sent="Tue, 11 Sep 2007 11:20:41 -0500" -->
<!-- isosent="20070911162041" -->
<!-- name="Sajjad Tabib" -->
<!-- email="stabib_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a new component" -->
<!-- id="OF2980F72F.A472E76D-ON86257353.0059A590-86257353.0059C942_at_us.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B64E08EC-5816-417B-AF87-77E00E1CAC77_at_cs.utk.edu" -->
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
<strong>From:</strong> Sajjad Tabib (<em>stabib_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-11 12:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2304.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>In reply to:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Reply:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Aurelien,
<br>
<p>Thank you for the pointers. I was able to plug in a component to an 
<br>
existing framework.
<br>
<p>Thanks again,
<br>
<p>Sajjad
<br>
<p><p><p>Aurelien Bouteiller &lt;bouteill_at_[hidden]&gt; 
<br>
Sent by: devel-bounces_at_[hidden]
<br>
09/08/07 01:34 PM
<br>
Please respond to
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI devel] Adding a new component
<br>
<p><p><p><p><p><p>Hi Sajjad,
<br>
<p>First it will depend wether you are writing a new component in an existing 
<br>
framework (let say you are writing a new BTL for a new type of 
<br>
interconnect) or a totally new framework (you want to have a family of 
<br>
component that can manage a totally new functionality in Open MPI). In 
<br>
each Framework there is a &quot;base&quot; which take care of the component 
<br>
selection process. If you are just adding a component, you will just need 
<br>
to provide a mca_mycomponent_init(bool enable_progress_threads, bool 
<br>
enable_mpi_threads) as described in the mca_component_t structure. The 
<br>
mca_framework_base_select will then take care of everything for you. If 
<br>
you want to add a new framework you'll have to create a selection function 
<br>
by yourself (all along with a full bunch of other functions to populate 
<br>
the base of the framework). I'll give you more details on this if it is 
<br>
relevant for you, just ask. 
<br>
<p>Aurelien
<br>
<p>Le 7 sept. 07 &#224; 17:21, Sajjad Tabib a &#233;crit :
<br>
<p><p>Hi, 
<br>
<p>I am a complete newbie to Open MPI internals and just began browsing the 
<br>
code and reading up on slides and papers. From what I have read, I learned 
<br>
that I have to create a new component. What I do not know is how to make 
<br>
MPI aware of it or should I say make MPI open and select my component. I 
<br>
found a set of slides that briefly went over adding components. For 
<br>
example, it briefly described that I must add PARAM_INIT_FILE and 
<br>
PARAM_CONFIG_FILES options in configure.params, but I'm not sure what 
<br>
these mean. Does anybody know of any tutorials/documents that could help 
<br>
me with this? 
<br>
<p>Any help is greatly appreciated. 
<br>
<p>S Tabib
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2306.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>Previous message:</strong> <a href="2304.php">Jeff Squyres: "[OMPI devel] Coverity"</a>
<li><strong>In reply to:</strong> <a href="2294.php">Aurelien Bouteiller: "Re: [OMPI devel] Adding a new component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
<li><strong>Reply:</strong> <a href="2314.php">Jeff Squyres: "Re: [OMPI devel] Adding a new component"</a>
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
