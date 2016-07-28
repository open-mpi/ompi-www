<?
$subject_val = "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 13:00:40 2009" -->
<!-- isoreceived="20090112180040" -->
<!-- sent="Mon, 12 Jan 2009 13:00:21 -0500" -->
<!-- isosent="20090112180021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop" -->
<!-- id="979451F6-8530-43F6-8367-D6A51249B2D7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47080911-2E83-4159-900A-4E57FC3A49A8_at_krellinst.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 13:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5115.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5108.php">William Hachfeld: "[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 9, 2009, at 12:39 AM, William Hachfeld wrote:
<br>
<p><span class="quotelev1">&gt; Can any of the OpenMPI developers speculate as to possible  
</span><br>
<span class="quotelev1">&gt; mechanisms by which the ptrace() attachment , signal handler, or  
</span><br>
<span class="quotelev1">&gt; timer registration and corresponding signal delivery could cause  
</span><br>
<span class="quotelev1">&gt; large amounts of time to be spent within the &quot;progress&quot; functions of  
</span><br>
<span class="quotelev1">&gt; the OpenMPI library with an apparent lack of any real progress? Any  
</span><br>
<span class="quotelev1">&gt; ideas/information would be greatly appreciated.
</span><br>
<p><p>Hum; interesting.  I can't think of any reason why that would be a  
<br>
problem offhand.  The mca_btl_sm_component_progress() function is the  
<br>
shared memory progression function.  opal_progress() and  
<br>
mca_bml_r2_progress() are likely mainly dispatching off to this  
<br>
function.
<br>
<p>Does OSS interfere with shared memory between processes in any way?   
<br>
(I'm not enough of a kernel guy to know what the ramifications of  
<br>
ptrace and whatnot are)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Previous message:</strong> <a href="5115.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5108.php">William Hachfeld: "[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
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
