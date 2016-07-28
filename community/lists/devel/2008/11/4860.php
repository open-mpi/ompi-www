<?
$subject_val = "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 06:38:50 2008" -->
<!-- isoreceived="20081107113850" -->
<!-- sent="Fri, 07 Nov 2008 06:38:42 -0500" -->
<!-- isosent="20081107113842" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="491428C2.5090303_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A2DDB39A-A51B-40D4-A388-1BE682634462_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 06:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4859.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4851.php">Jeff Squyres: "[OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not see the real value in doing this name change.  The name &quot;OMPI 
<br>
Run Time Environment&quot; and libopen_rte.so are not that far from each 
<br>
other.  Changing a bunch of Makefile.am's at this point in the game for 
<br>
what I consider a minor cosmetic difference just makes little sense to me. 
<br>
<p>On the technical side what I hate about this is Sun is about to release 
<br>
its second distribution base on 1.3.  If the below change goes through 
<br>
this guarrantees that the next CT release will be incompatible with 
<br>
CT8.1.  Now we can go through the discussion of whether such a 
<br>
compatibility will exist aside from this change but it would be nice to 
<br>
try and stabilize the items we have. 
<br>
<p>I have very little confidence that if we change the library name to 
<br>
libompi_rte.so that at the end of 1.4 we decide it should be named 
<br>
something else.  I also wonder if we do change the rte library if we 
<br>
should also change the name of libopen_pal.so.
<br>
<p>Anyways, Sun votes no on this rfe.
<br>
<p>--td
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; WHAT: Rename libopen-rte to be libompi-rte (and probably other 
</span><br>
<span class="quotelev1">&gt; supporting text)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: ORTE is really quite specific to OMPI.  We decided long ago that 
</span><br>
<span class="quotelev1">&gt; ORTE would not split off from OMPI, and it has been specifically 
</span><br>
<span class="quotelev1">&gt; tailored for OMPI.  Indeed, Ralph has recently been expanding &quot;ORTE&quot; 
</span><br>
<span class="quotelev1">&gt; to &quot;OMPI Run Time Environment&quot;.  So let's name the library what it 
</span><br>
<span class="quotelev1">&gt; really is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: See attached patch; basically, a bunch of Makefile.am's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Before v1.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconference, Tues 11 Nov 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change is fairly minor, and 98% of OMPI users won't notice.  Only 
</span><br>
<span class="quotelev1">&gt; those who are not using wrapper compilers properly will notice the 
</span><br>
<span class="quotelev1">&gt; change (and they should be using the wrapper compilers; we strongly 
</span><br>
<span class="quotelev1">&gt; recommended that everyone either directly use the wrapper compilers to 
</span><br>
<span class="quotelev1">&gt; compile/link their apps, or use the wrappers to get the required flags 
</span><br>
<span class="quotelev1">&gt; [including library names] to compile/link their apps).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if Sun has any policies about library name changes 
</span><br>
<span class="quotelev1">&gt; between versions, or if it'll create problems since CT8 has already 
</span><br>
<span class="quotelev1">&gt; been released. As a history note, we changed this library name in v1.2 
</span><br>
<span class="quotelev1">&gt; from &quot;liborte&quot; to &quot;libopen-rte&quot;.  This would be another change.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4859.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4851.php">Jeff Squyres: "[OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
