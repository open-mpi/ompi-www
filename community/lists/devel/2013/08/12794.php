<?
$subject_val = "Re: [OMPI devel] Detailed documentation on OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 06:38:35 2013" -->
<!-- isoreceived="20130823103835" -->
<!-- sent="Fri, 23 Aug 2013 12:38:32 +0200" -->
<!-- isosent="20130823103832" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Detailed documentation on OpenMPI" -->
<!-- id="AE4C3653-9F59-4F24-94D1-B9C4D28BF27D_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20130823055414.GA10082_at_xtreme.fed" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Detailed documentation on OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 06:38:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12800.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some questions are easier than others &#133;
<br>
<p>On Aug 23, 2013, at 07:54 , mahesh &lt;mahsh.baheti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I know that its a huge code base. But, I am looking for specific answers like does OpenMPI use sockets?
</span><br>
<p>When Open MPI is using TCP it does indeed use sockets.
<br>
<p><span class="quotelev1">&gt; Can programs written without mpi libraries be run on
</span><br>
<span class="quotelev1">&gt; clusters using orte(with some changes)?
</span><br>
<p>Yes, that's why you can run &quot;mpirun -np 4 hostname&quot;.
<br>
<p><span class="quotelev1">&gt; It would be really helpful if at least these and related doubts can be solved.
</span><br>
<p>Hope that helps.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mahesh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2013 (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote
</span><br>
<span class="quotelev2">&gt;&gt; Note that according to <a href="http://www.ohloh.net/p/openmpi">http://www.ohloh.net/p/openmpi</a>, OMPI is over 3/4M lines of code.  I doubt you will be able to get a thorough understanding of *all* of OMPI in a semester or two -- indeed, I doubt that any one Open MPI core developer has a thorough understanding of the whole code base (I know I don't!).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't say these things to discourage you; I actually just want to encourage you to set realistic expectations for what you'll be able to do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are there any particular areas that you'd like to focus on?  MPI -- and the Open MPI implementation -- covers a *lot* of different subsystems and concepts.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2013, at 8:06 AM, mahesh &lt;mahsh.baheti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am an	newbie to all MPI concepts and I would like to understand the MPI source code thoroughly for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an academic project. So, what I	need is	an detailed explanation	of how every framework and module 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works. It would	be really helpful if wise people could point me	to right direction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mahesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Previous message:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12800.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
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
