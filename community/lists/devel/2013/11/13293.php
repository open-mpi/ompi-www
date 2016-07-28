<?
$subject_val = "Re: [OMPI devel] What to do about openib/ofacm/cpc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 21:05:45 2013" -->
<!-- isoreceived="20131116020545" -->
<!-- sent="Fri, 15 Nov 2013 20:05:47 -0600" -->
<!-- isosent="20131116020547" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] What to do about openib/ofacm/cpc" -->
<!-- id="5286D2FB.1000401_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6D0623B-AFD3-4DB4-9954-F002FDEEC927_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] What to do about openib/ofacm/cpc<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 21:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/15/2013 5:12 PM, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt;&gt; Perhaps if Pasha or somebody else proficient in the OMPI code could help out, then the iWARP CPC could be moved.  W/O help from OMPI developers, its going to take me a very long time...
</span><br>
<span class="quotelev1">&gt; I believe we would all be willing to provide advice - we just have no way of testing.
</span><br>
<p>I have lots of testing facilities. :)
<br>
<p><p><span class="quotelev2">&gt;&gt; Can't we leave the openib rdma CPC code as is until we can get the rdmacm CPC moved into OFACM.  What is the harm with that exactly? I mean, if no iWARP devices support these accelerated MPI collectives, then leave the rdmacm CPC in the openib btl so we can at least support iWARP via the openib BTL...
</span><br>
<span class="quotelev1">&gt; I see no reason why we can't just push the rdma over to ofacm - I'd prefer that to leaving the code in the openib btl. Forcing the openib btl to use both cpc's from ofacm AND its own would be ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you or someone can do the move and make it compile, I could then 
<br>
test/debug/resolve all the other issues and make it work.  I just balk 
<br>
at the task of moving the stuff over because of my lack of knowledge of 
<br>
the OMPI code above the openib/connect code.
<br>
<p>&nbsp;&nbsp;Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13294.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<li><strong>In reply to:</strong> <a href="13292.php">Ralph Castain: "Re: [OMPI devel] What to do about openib/ofacm/cpc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13256.php">Joshua Ladd: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29703	- in trunk: contrib/platform/iu/odin ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
