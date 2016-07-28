<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 16:58:43 2006" -->
<!-- isoreceived="20060605205843" -->
<!-- sent="Mon, 5 Jun 2006 14:58:38 -0600" -->
<!-- isosent="20060605205838" -->
<!-- name="Josh Aune" -->
<!-- email="ladros_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] process ordering/processes per node" -->
<!-- id="98a233180606051358l62bf0ccx38d802f1529888fe_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FA546_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Josh Aune (<em>ladros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 16:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Previous message:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Reply:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/5/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; This is going to be influenced by how many processes bproc tells Open
</span><br>
<span class="quotelev1">&gt; MPI can be launched on each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check out the FAQ for the -bynode and -byslot arguments to mpirun for
</span><br>
<span class="quotelev1">&gt; more details:
</span><br>
<p>I have tried these arguments several times (up through 1.0.2a4) and I
<br>
always get the same ordering.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This specific entry uses hostfiles as an example, but the issue is the
</span><br>
<span class="quotelev1">&gt; same for bproc -- the &quot;hostfile&quot; is simply implicitly supplied by bproc
</span><br>
<span class="quotelev1">&gt; (i.e., the node names and the available on each).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Josh Aune
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Friday, March 31, 2006 4:43 PM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI devel] process ordering/processes per node
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a simple hello program where each child prints out the hostname
</span><br>
<span class="quotelev2">&gt; &gt; of the node it is running on.  When I run this (on a bproc machine)
</span><br>
<span class="quotelev2">&gt; &gt; with -np 4 and no host file it launches one process per node on each
</span><br>
<span class="quotelev2">&gt; &gt; of the first 4 avaliable nodes.   ie:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 4 ./mpi_hello
</span><br>
<span class="quotelev2">&gt; &gt; n1 hello
</span><br>
<span class="quotelev2">&gt; &gt; n3 hello
</span><br>
<span class="quotelev2">&gt; &gt; n2 hello
</span><br>
<span class="quotelev2">&gt; &gt; n4 hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I am trying to get is to launch 2 processes per node, or
</span><br>
<span class="quotelev2">&gt; &gt; this output:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 4 $magic_arg ./mpi_hello
</span><br>
<span class="quotelev2">&gt; &gt; n1 hello
</span><br>
<span class="quotelev2">&gt; &gt; n1 hello
</span><br>
<span class="quotelev2">&gt; &gt; n2 hello
</span><br>
<span class="quotelev2">&gt; &gt; n2 hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ita,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>Previous message:</strong> <a href="0930.php">Josh Aune: "[OMPI devel] Please add explicit test for sysfs/libsysfs.h"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Reply:</strong> <a href="0933.php">Brian Barrett: "Re: [OMPI devel] process ordering/processes per node"</a>
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
