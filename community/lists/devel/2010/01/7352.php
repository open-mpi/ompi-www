<?
$subject_val = "Re: [OMPI devel] Snow leopard builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 19:33:50 2010" -->
<!-- isoreceived="20100125003350" -->
<!-- sent="Sun, 24 Jan 2010 16:33:37 -0800" -->
<!-- isosent="20100125003337" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Snow leopard builds" -->
<!-- id="4B5CE6E1.60809_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C7824F60.7521%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Snow leopard builds<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-24 19:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<li><strong>In reply to:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7355.php">Greg Watson: "Re: [OMPI devel] Snow leopard builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I build ompi-1.3.3 on Snow Leopard with no problems.
<br>
I have not tried any other versions.
<br>
<p>-Paul
<br>
<p>Graham, Richard L. wrote:
<br>
<span class="quotelev1">&gt; Has someone managed to build ompi on snow leopard ?  I am trying to build, and it looks like configure does not detect the support for htonl and friends, so it adds the definition.
</span><br>
<span class="quotelev1">&gt; static inline uint32_t htonl(uint32_t hostvar) { return hostvar; }
</span><br>
<span class="quotelev1">&gt;  with the compiler proceeding to do a macro substituion for htonl, which obviously does not work.  I am hoping someone has run into this AND fixed the problem and could save me trying to figure out this part of our configure script, and how to fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<li><strong>In reply to:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7353.php">Ralph Castain: "Re: [OMPI devel] Snow leopard builds"</a>
<li><strong>Reply:</strong> <a href="7355.php">Greg Watson: "Re: [OMPI devel] Snow leopard builds"</a>
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
