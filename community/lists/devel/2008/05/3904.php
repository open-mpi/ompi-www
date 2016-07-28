<?
$subject_val = "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 12:45:02 2008" -->
<!-- isoreceived="20080513164502" -->
<!-- sent="Tue, 13 May 2008 12:44:50 -0400" -->
<!-- isosent="20080513164450" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls" -->
<!-- id="4829C582.8020709_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200805131110.12468.jon_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 12:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jon Mason wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 13 May 2008 09:56:13 am Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I believe btl_open_iwarp.c is making platform specific calls. I don't
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Silly question, but I thought openib ONLY worked in Linux.  If this is not the 
</span><br>
<span class="quotelev1">&gt; case, then this whole chunk of code will have to be redesigned (if it can 
</span><br>
<span class="quotelev1">&gt; even be done at all).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I thought one of the fundamental architecture principles of Open MPI was 
<br>
to remain platform neutral.  Anyway, there is a project at Sun to 
<br>
deliver libibverbs for Solaris. Sun intends to move toward utilizing the 
<br>
openib btl and phase out support for the udapl btl, at an appropriate 
<br>
pace.  Up until the iwarp specific changes to the openib btl I was able 
<br>
to build openib btl on Solaris, with development bits of libibverbs.
<br>
<p>I believe there are similar operations being used by other areas of open 
<br>
mpi, place to start looking would be, opal/util/if.c.
<br>
<p>-DON
<br>
<span class="quotelev2">&gt;&gt; have jdmason's email and wanted to send this note out before todays con
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Its me.  Sorry, I didn't hear it mentioned on the call...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this already exists, but having a svn id to contact info list 
</span><br>
<span class="quotelev1">&gt; on the wiki might be a good thing (and perhaps even an area of expertise).  I 
</span><br>
<span class="quotelev1">&gt; have worked on previous projects that did this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_iwarp.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;ifaddrs.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; getifaddrs()
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3903.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3900.php">Jon Mason: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3905.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Reply:</strong> <a href="3906.php">Brian W. Barrett: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
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
