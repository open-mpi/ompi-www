<?
$subject_val = "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 10:20:13 2009" -->
<!-- isoreceived="20090515142013" -->
<!-- sent="Fri, 15 May 2009 10:19:24 -0400" -->
<!-- isosent="20090515141924" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="4A0D79EC.8000705_at_sun.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="71d2d8cc0905150643k2d038784n62dfb7c1fec2af28_at_mail.gmail.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 10:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; We are running it with 1.3.2, last I heard - haven't tried the current 
</span><br>
<span class="quotelev1">&gt; 1.3 branch. Ashley reported a problem with some other symbol that 
</span><br>
<span class="quotelev1">&gt; couldn't be loaded that blocked him on message queue debugging, but 
</span><br>
<span class="quotelev1">&gt; that was on the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hmmm, weird. I wonder if the difference in Ashley&#197;&#155; and my error is a RH 
<br>
vs. Debian. I was using a 1.3.2 version and not the 1.3 branch head.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Sounds like we are missing at least a couple of header files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 15, 2009 at 7:37 AM, Terry Dontje &lt;Terry.Dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Terry.Dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Has anyone tried to run totalview with OMPI 1.3 on a RH5 linux
</span><br>
<span class="quotelev1">&gt;     system. I am seeing totalview unable to load libompi_dbg_msgq.so
</span><br>
<span class="quotelev1">&gt;     because ompi_free_list_grow is not found. What's interesting is
</span><br>
<span class="quotelev1">&gt;     this same symbol is undefined for Solaris but things work. Is
</span><br>
<span class="quotelev1">&gt;     ompi_free_list_grow actually used by libompi_dbg_msgq.so or is it
</span><br>
<span class="quotelev1">&gt;     some how pulled in as a side affect of including an ompi header file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Anyways, I am curious if anyone else is seeing this same issue or
</span><br>
<span class="quotelev1">&gt;     if I am building OMPI in a way that is causing this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6054.php">Ashley Pittman: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
