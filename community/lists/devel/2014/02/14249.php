<?
$subject_val = "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 12:44:56 2014" -->
<!-- isoreceived="20140227174456" -->
<!-- sent="Thu, 27 Feb 2014 09:43:04 -0800" -->
<!-- isosent="20140227174304" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?" -->
<!-- id="91DDC356-65D4-4F39-B0FB-AE9CDA32642F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="530F769A.30307_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 12:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>In reply to:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not intentional, but I suspect it's a race condition you are seeing. I'll have to look to see where it is getting lost
<br>
<p>On Feb 27, 2014, at 9:32 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please take a look at the attached 'program'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this program, we try to catch signals send from outside, and &quot;handle&quot; them. In case of different signals different output has to be produced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you start this file directly, or using 'mpiexec' from Intel MPI, and then abort it by Ctrl-C, the output &quot;SIGINT  received&quot; is written to file and to StdOut.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you start this file using Open MPI's 'mpiexec', the output is written to file, but *not* to StdOutput - 'mpiexec' seem to nick it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that behaviour intentionally? (it is quite uncomfortable, huh)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Tested versions: 1.6.5, 1.7.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;testoutput.py&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="14250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 -	in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>In reply to:</strong> <a href="14248.php">Paul Kapinos: "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
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
