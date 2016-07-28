<?
$subject_val = "Re: [OMPI users] valgrind problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:33:16 2009" -->
<!-- isoreceived="20090227033316" -->
<!-- sent="Thu, 26 Feb 2009 22:33:10 -0500" -->
<!-- isosent="20090227033310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind problems" -->
<!-- id="1B583655-5EEB-4EA5-A615-2FC7E8DA8079_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A75D93.5040006_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 22:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2009, at 10:27 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; Also the stable version of openmpi on Debian is 1.2.7rc2.  Are there  
</span><br>
<span class="quotelev1">&gt; any known issues with this version and valgrid?
</span><br>
<p>To be honest, the Debian OMPI maintainers will need to answer this.   
<br>
I'm afraid that it's been so long since I've used the 1.2 series that  
<br>
I don't know for sure.  It also may depend on your version of Valgrind.
<br>
<p>I've been using valgrind 3.4 with OMPI 1.3 and our development trunk  
<br>
with no problems.  Indeed, OMPI 1.3 added explicit support for  
<br>
valgrind to warn you if you write into buffers that you already gave  
<br>
to MPI (see the --with-memchecker option in the README).
<br>
<p>We still do have some memory that is not freed properly during  
<br>
MPI_FINALIZE in the 1.3 series.  It'll be a bit better in the v1.4  
<br>
series, etc. (i.e., it's a low priority item that we're slowly  
<br>
tackling).
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
<li><strong>Next message:</strong> <a href="8229.php">George Bosilca: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>In reply to:</strong> <a href="8227.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8249.php">Douglas Guptill: "Re: [OMPI users] valgrind problems"</a>
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
