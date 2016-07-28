<?
$subject_val = "Re: [OMPI devel] configuring with --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 10:19:44 2008" -->
<!-- isoreceived="20080411141944" -->
<!-- sent="Fri, 11 Apr 2008 07:19:35 -0700" -->
<!-- isosent="20080411141935" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configuring with --enable-mpi-profile option" -->
<!-- id="0F5E5FCF-590A-4E63-B9FA-5BA34CBF0678_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200804111053.04814.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configuring with --enable-mpi-profile option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 10:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3702.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might also want to look at:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=vampirtrace">http://www.open-mpi.org/faq/?category=vampirtrace</a>
<br>
<p><p><p>On Apr 11, 2008, at 1:53 AM, Andreas Kn&#252;pfer wrote:
<br>
<span class="quotelev1">&gt; On Thursday 10 April 2008, Swati Kher wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2)       If vampire trace by default is built with openmpi, if I set
</span><br>
<span class="quotelev2">&gt;&gt; VT_CC flag for compiling my application, where I can view &quot;.vtf&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; files
</span><br>
<span class="quotelev2">&gt;&gt; after a parallel run ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me answer the second question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, there is no default VT_CC flag in OMPI's compiler  
</span><br>
<span class="quotelev1">&gt; wrappers. To
</span><br>
<span class="quotelev1">&gt; compile your MPI application with VampirTrace support, please  
</span><br>
<span class="quotelev1">&gt; replace the MPI
</span><br>
<span class="quotelev1">&gt; compiler wrappers in your Makefiles like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc --&gt; mpicc-vt
</span><br>
<span class="quotelev1">&gt; mpicxx --&gt; mpicxx-vt
</span><br>
<span class="quotelev1">&gt; mpif90 --&gt; mpif90-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and so on. After running the resulting executable you'll find an OTF  
</span><br>
<span class="quotelev1">&gt; trace
</span><br>
<span class="quotelev1">&gt; (Open Trace Format) in your pwd. Note that it consists of multiple  
</span><br>
<span class="quotelev1">&gt; files
</span><br>
<span class="quotelev1">&gt; which need to be copied/moved together. The former VTF format is still
</span><br>
<span class="quotelev1">&gt; supported by VampirTrace, yet not in the version that comes with  
</span><br>
<span class="quotelev1">&gt; Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open Trace Format can be read by several performance analysis  
</span><br>
<span class="quotelev1">&gt; tools, e.g.
</span><br>
<span class="quotelev1">&gt; Vampir and VampirServer, Kojak/Scalasca Tools, TAU tools and maybe  
</span><br>
<span class="quotelev1">&gt; already by
</span><br>
<span class="quotelev1">&gt; OpenSpeedShop, which is going to have OTF support afaik.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best rgards, Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3702.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3700.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="3700.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
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
