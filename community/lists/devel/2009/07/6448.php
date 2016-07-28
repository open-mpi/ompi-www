<?
$subject_val = "[OMPI devel] default btl eager_limit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 10:06:05 2009" -->
<!-- isoreceived="20090716140605" -->
<!-- sent="Thu, 16 Jul 2009 10:04:54 -0400" -->
<!-- isosent="20090716140454" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] default btl eager_limit" -->
<!-- id="4A5F3386.2000400_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] default btl eager_limit<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-16 10:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6447.php">Terry Dontje: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was playing around with some really silly fragment sizes (sub 72 
<br>
bytes) when I ran into some asserts in the btl_openib_sendi.  I traced 
<br>
the assert to be caused by mca_pml_ob1_send_request_start_btl() 
<br>
calculating the true eager_limit with the following line:
<br>
<p>&nbsp;&nbsp;&nbsp;size_t eager_limit = btl-&gt;btl_eager_limit - sizeof(mca_pml_ob1_hdr_t);
<br>
<p>If btl_eager_limit ends up being less than the sizeof(mca_pml_ob1_hdr_t) 
<br>
the eager_limit calculated results in a very large number and an assert 
<br>
later on in the stack.
<br>
<p>It seems to me that it would be nice to insert some checks in  
<br>
mca_btl_base_param_register() to make sure btl_eager_limit is &gt; 
<br>
sizeof(mca_pml_ob1_hdr_t).  Am I missing a reason why this was not done 
<br>
in the first place?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Previous message:</strong> <a href="6447.php">Terry Dontje: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
<li><strong>Reply:</strong> <a href="6449.php">Terry Dontje: "Re: [OMPI devel] default btl eager_limit"</a>
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
