<?
$subject_val = "Re: [OMPI devel] Trunk problem: VT breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 09:05:57 2011" -->
<!-- isoreceived="20110630130557" -->
<!-- sent="Thu, 30 Jun 2011 15:05:47 +0200" -->
<!-- isosent="20110630130547" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk problem: VT breakage" -->
<!-- id="201106301505.51981.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C774AA45-82B0-499C-83A6-8030D74A2075_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk problem: VT breakage<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 09:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems to me that anything during your last update went wrong. Since r24803 
<br>
the source file 'vt_filthandler.cc' is moved to the subdirectory 'old', so 
<br>
actually if the source file doesn't exist the error message should be:
<br>
<p>No rule to make target `old/vt_filthandler.cc', needed by `vtfilter-
<br>
vt_filthandler.o'.  Stop.
<br>
<p>(I just tested it by removing the source file by hand)
<br>
<p>Does the error occur also with a completely new checkout of the trunk?
<br>
<p>Matthias
<br>
<p>On Thursday 30 June 2011 03:01:10 Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It appears I cannot build the trunk on Mac - I hit this issue when I
</span><br>
<span class="quotelev1">&gt; updated from the trunk and rebuilt from autogen this evening:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[7]: *** No rule to make target `vt_filthandler.cc', needed by
</span><br>
<span class="quotelev1">&gt; `vtfilter-vt_filthandler.o'.  Stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vanilla configure - I didn't turn VT off like I usually do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
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
<p><pre>
-- 
Matthias Jurenz
Technische Universit&#228;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9447/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Previous message:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9446.php">Ralph Castain: "[OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<li><strong>Reply:</strong> <a href="9448.php">Jeff Squyres: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
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
