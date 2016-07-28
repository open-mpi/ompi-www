<?
$subject_val = "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 13:17:42 2014" -->
<!-- isoreceived="20140328171742" -->
<!-- sent="Fri, 28 Mar 2014 17:17:39 +0000" -->
<!-- isosent="20140328171739" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: &amp;#180;&amp;#240;&amp;#184;&amp;#180;: doubt on latency result with OpenMPI library" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3ED1E205_at_MTIDAG01.mtl.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="00343138-51A4-4F9C-A9DC-DD02EBC817D3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 13:17:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also believe that for iWARP and RoCE, the RDMA CM will be chosen automatically, and UD CM will be automatically chosen for IB.
<br>

<br>

<br>
[Josh] If you want to run OMPI over RoCE on Mellanox hardware, you must explicitly choose rdmacm with -mca btl openib,sm,self -mca btl_openib_cpc_include rdmacm - that's THE way to tell OMPI to run over RoCE and create RoCE QPs. 
<br>
<a href="https://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">https://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
<br>

<br>
So after all that: I think you shouldn't need to specify the connection manager MCA parameter at all; the openib BTL should choose the Right one for you.
<br>
[Josh] Nyet. See above.
<br>

<br>
[Josh] And, yes, RDMACM has scalability issues. 
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14424.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
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
