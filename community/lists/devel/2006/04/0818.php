<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 13:18:55 2006" -->
<!-- isoreceived="20060405171855" -->
<!-- sent="Wed, 5 Apr 2006 10:31:19 -0400" -->
<!-- isosent="20060405143119" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] process ordering/processes per node" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FA546_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] process ordering/processes per node" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 10:31:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0802.php">Josh Aune: "[OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is going to be influenced by how many processes bproc tells Open
<br>
MPI can be launched on each node.
<br>
<p>Check out the FAQ for the -bynode and -byslot arguments to mpirun for
<br>
more details:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
<br>
<p>This specific entry uses hostfiles as an example, but the issue is the
<br>
same for bproc -- the &quot;hostfile&quot; is simply implicitly supplied by bproc
<br>
(i.e., the node names and the available on each).
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Josh Aune
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 31, 2006 4:43 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] process ordering/processes per node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a simple hello program where each child prints out the hostname
</span><br>
<span class="quotelev1">&gt; of the node it is running on.  When I run this (on a bproc machine)
</span><br>
<span class="quotelev1">&gt; with -np 4 and no host file it launches one process per node on each
</span><br>
<span class="quotelev1">&gt; of the first 4 avaliable nodes.   ie:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 ./mpi_hello
</span><br>
<span class="quotelev1">&gt; n1 hello
</span><br>
<span class="quotelev1">&gt; n3 hello
</span><br>
<span class="quotelev1">&gt; n2 hello
</span><br>
<span class="quotelev1">&gt; n4 hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am trying to get is to launch 2 processes per node, or 
</span><br>
<span class="quotelev1">&gt; this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 $magic_arg ./mpi_hello
</span><br>
<span class="quotelev1">&gt; n1 hello
</span><br>
<span class="quotelev1">&gt; n1 hello
</span><br>
<span class="quotelev1">&gt; n2 hello
</span><br>
<span class="quotelev1">&gt; n2 hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ita,
</span><br>
<span class="quotelev1">&gt; Josh
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0817.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0802.php">Josh Aune: "[OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0931.php">Josh Aune: "Re: [OMPI devel] process ordering/processes per node"</a>
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
