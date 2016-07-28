<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 20:38:46 2006" -->
<!-- isoreceived="20060606003846" -->
<!-- sent="Mon, 5 Jun 2006 18:38:17 -0600" -->
<!-- isosent="20060606003817" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] process ordering/processes per node" -->
<!-- id="ECBB76BE-C7E6-4E55-97C3-4DB1FBE93B53_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98a233180606051358l62bf0ccx38d802f1529888fe_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 20:38:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Previous message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>In reply to:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2006, at 2:58 PM, Josh Aune wrote:
<br>
<p><span class="quotelev1">&gt; On 4/5/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is going to be influenced by how many processes bproc tells Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI can be launched on each node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check out the FAQ for the -bynode and -byslot arguments to mpirun for
</span><br>
<span class="quotelev2">&gt;&gt; more details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried these arguments several times (up through 1.0.2a4) and I
</span><br>
<span class="quotelev1">&gt; always get the same ordering.
</span><br>
<p>I think (and I could be wrong here) that this is because of some code  
<br>
we have that only works with bproc (that allows you to not give a  
<br>
hostfile) that (at least on my small machine) doesn't set the number  
<br>
of cpus to anything greater than 1, so -bynode and -byslot will give  
<br>
the same answer.
<br>
<p>Your best bet is to specify a hostfile or use a batch scheduler.   
<br>
Since this will limit the number of nodes available and you can set  
<br>
the available number of slots, this should allow you to schedule more  
<br>
than one process per processor.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0934.php">Jonathan Day: "[OMPI devel] Question on &quot;get&quot; operation"</a>
<li><strong>Previous message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>In reply to:</strong> <a href="0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
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
