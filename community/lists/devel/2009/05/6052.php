<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 09:43:54 2009" -->
<!-- isoreceived="20090515134354" -->
<!-- sent="Fri, 15 May 2009 07:43:47 -0600" -->
<!-- isosent="20090515134347" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="71d2d8cc0905150643k2d038784n62dfb7c1fec2af28_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A0D6FFF.9020000_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 09:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are running it with 1.3.2, last I heard - haven't tried the current 1.3
<br>
branch. Ashley reported a problem with some other symbol that couldn't be
<br>
loaded that blocked him on message queue debugging, but that was on the
<br>
trunk.
<br>
<p>Sounds like we are missing at least a couple of header files.
<br>
<p><p>On Fri, May 15, 2009 at 7:37 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone tried to run totalview with OMPI 1.3 on a RH5 linux system.  I
</span><br>
<span class="quotelev1">&gt; am seeing totalview unable to load libompi_dbg_msgq.so because
</span><br>
<span class="quotelev1">&gt; ompi_free_list_grow is not found.  What's interesting is this same symbol is
</span><br>
<span class="quotelev1">&gt; undefined for Solaris but things work.  Is ompi_free_list_grow actually used
</span><br>
<span class="quotelev1">&gt; by libompi_dbg_msgq.so or is it some how pulled in as a side affect of
</span><br>
<span class="quotelev1">&gt; including an ompi header file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, I am curious if anyone else is seeing this same issue or if I am
</span><br>
<span class="quotelev1">&gt; building OMPI in a way that is causing this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6051.php">Terry Dontje: "[OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6053.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
