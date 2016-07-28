<?
$subject_val = "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 14:08:34 2009" -->
<!-- isoreceived="20090112190834" -->
<!-- sent="Mon, 12 Jan 2009 14:08:28 -0500" -->
<!-- isosent="20090112190828" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop" -->
<!-- id="5CD2ECC2-8CC8-4CFF-83ED-28F78D64EE5A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="979451F6-8530-43F6-8367-D6A51249B2D7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 14:08:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Previous message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>In reply to:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There might be one reason to slowdown the application quite a bit. If  
<br>
the fact that you're using timer interact with the libevent (the  
<br>
library we're using to internally manage any kind of events), then we  
<br>
might end-up in the situation where we call the poll for every  
<br>
iteration in the event library. And this is really expensive.
<br>
<p>A quick way to figure out if this is that case is to run Open MPI  
<br>
without support for shared memory (--mca btl ^sm). This way we will  
<br>
call poll on a regular basis anyway, and if there is no difference  
<br>
between a normal run and a OSS one, we know at least where to start  
<br>
looking ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 12, 2009, at 13:00 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 9, 2009, at 12:39 AM, William Hachfeld wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can any of the OpenMPI developers speculate as to possible  
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms by which the ptrace() attachment , signal handler, or  
</span><br>
<span class="quotelev2">&gt;&gt; timer registration and corresponding signal delivery could cause  
</span><br>
<span class="quotelev2">&gt;&gt; large amounts of time to be spent within the &quot;progress&quot; functions  
</span><br>
<span class="quotelev2">&gt;&gt; of the OpenMPI library with an apparent lack of any real progress?  
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas/information would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hum; interesting.  I can't think of any reason why that would be a  
</span><br>
<span class="quotelev1">&gt; problem offhand.  The mca_btl_sm_component_progress() function is  
</span><br>
<span class="quotelev1">&gt; the shared memory progression function.  opal_progress() and  
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_progress() are likely mainly dispatching off to this  
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does OSS interfere with shared memory between processes in any way?   
</span><br>
<span class="quotelev1">&gt; (I'm not enough of a kernel guy to know what the ramifications of  
</span><br>
<span class="quotelev1">&gt; ptrace and whatnot are)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Previous message:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>In reply to:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
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
