<?
$subject_val = "Re: [OMPI devel] RFC: changes to modex";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  2 10:53:10 2008" -->
<!-- isoreceived="20080402145310" -->
<!-- sent="Wed, 02 Apr 2008 10:52:31 -0400" -->
<!-- isosent="20080402145231" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: changes to modex" -->
<!-- id="47F39DAF.9040807_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="168065BB-DC8B-4DD6-B3C0-EB50728F916D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: changes to modex<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-02 10:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; WHAT: Changes to MPI layer modex API
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: To be mo' betta scalable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mpi/runtime/ompi_module_exchange.* and everywhere that  
</span><br>
<span class="quotelev1">&gt; calls ompi_modex_send() and/or ompi_modex_recv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB Fri 4 Apr 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DESCRIPTION:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
[...snip...]
<br>
<span class="quotelev1">&gt;   * int ompi_modex_node_send(...): send modex data that is relevant  
</span><br>
<span class="quotelev1">&gt; for all processes in this job on this node.  It is intended that only  
</span><br>
<span class="quotelev1">&gt; one process in a job on a node will call this function.  If more than  
</span><br>
<span class="quotelev1">&gt; one process in a job on a node calls _node_send(), then only one will  
</span><br>
<span class="quotelev1">&gt; &quot;win&quot; (meaning that the data sent by the others will be overwritten).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;   * int ompi_modex_node_recv(...): receive modex data that is relevant  
</span><br>
<span class="quotelev1">&gt; for a whole peer node; receive the [&quot;winning&quot;] blob sent by  
</span><br>
<span class="quotelev1">&gt; _node_send() from the source node.  We haven't yet decided what the  
</span><br>
<span class="quotelev1">&gt; node index will be; it may be (ompi_proc_t*) (i.e., _node_recv() would  
</span><br>
<span class="quotelev1">&gt; figure out what node the (ompi_proc_t*) resides on and then give you  
</span><br>
<span class="quotelev1">&gt; the data).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The above sounds like there could be race conditions if more than one 
<br>
process on a node is doing
<br>
ompi_modex_node_send.  That is are you really going to be able to be 
<br>
assured when ompi_modex_node_recv
<br>
is done that one of the processes is not in the middle of doing 
<br>
ompi_modex_node_send?  I assume
<br>
there must be some sort of gate that allows you to make sure no one is 
<br>
in the middle of overwriting your data.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3618.php">Tim Prins: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Previous message:</strong> <a href="3616.php">Jeff Squyres: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>In reply to:</strong> <a href="3614.php">Jeff Squyres: "[OMPI devel] RFC: changes to modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
<li><strong>Reply:</strong> <a href="3620.php">Ralph H Castain: "Re: [OMPI devel] RFC: changes to modex"</a>
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
