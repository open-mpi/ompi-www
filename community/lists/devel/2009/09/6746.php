<?
$subject_val = "Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 00:46:14 2009" -->
<!-- isoreceived="20090902044614" -->
<!-- sent="Wed, 2 Sep 2009 07:46:09 +0300" -->
<!-- isosent="20090902044609" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()" -->
<!-- id="672C06FF-F1D1-4824-B35F-DAFE0F624A73_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40908311455p5c243e53m9352715df52170d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Cannot Free() a datatype created with Dup() orCreate_resized()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 00:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6747.php">Lisandro Dalcin: "[OMPI devel] more bug/comments for current trunk"</a>
<li><strong>Previous message:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a definite error (I replicated it with a trivial C equivalent  
<br>
of your python program) -- I'll file a bug.
<br>
<p>Thanks for reporting it, Lisdandro!
<br>
<p><p>On Sep 1, 2009, at 12:55 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; In current ompi-trunk (svn up'ed and built a few minutes ago), a
</span><br>
<span class="quotelev1">&gt; Free() from a datatype obtained with Dup() or Create_resized() from a
</span><br>
<span class="quotelev1">&gt; predefined datatype is failing with ERR_TYPE...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this change intentional or is it a regression?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat typedup.py
</span><br>
<span class="quotelev1">&gt; from mpi4py import MPI
</span><br>
<span class="quotelev1">&gt; t = MPI.INT.Dup()
</span><br>
<span class="quotelev1">&gt; t.Free()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ python typedup.py
</span><br>
<span class="quotelev1">&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev1">&gt;   File &quot;typedup.py&quot;, line 3, in &lt;module&gt;
</span><br>
<span class="quotelev1">&gt;     t.Free()
</span><br>
<span class="quotelev1">&gt;   File &quot;Datatype.pyx&quot;, line 328, in mpi4py.MPI.Datatype.Free
</span><br>
<span class="quotelev1">&gt; (src/mpi4py.MPI.c:28632)
</span><br>
<span class="quotelev1">&gt; mpi4py.MPI.Exception: MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6747.php">Lisandro Dalcin: "[OMPI devel] more bug/comments for current trunk"</a>
<li><strong>Previous message:</strong> <a href="6745.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
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
