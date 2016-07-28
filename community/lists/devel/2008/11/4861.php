<?
$subject_val = "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 07:39:07 2008" -->
<!-- isoreceived="20081107123907" -->
<!-- sent="Fri, 7 Nov 2008 05:38:58 -0700" -->
<!-- isosent="20081107123858" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="BC80137B-F95A-44F3-9835-C5D51E0693FB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491428C2.5090303_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 07:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just in case anyone wonders: I can understand Jeff's motivation to  
<br>
rationalize the libraries name with what is in it. There is no  
<br>
&quot;OpenRTE&quot; any more - it has truly become the &quot;OMPI RTE&quot; - so I  
<br>
sympathize with what he was trying to do.
<br>
<p>That said, I truly don't have strong feelings either way on this  
<br>
proposal, so whatever is decided is just fine with me. My local  
<br>
customer base never sees the library name, and doesn't care what it is  
<br>
called.
<br>
<p><p>On Nov 7, 2008, at 4:38 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; I do not see the real value in doing this name change.  The name  
</span><br>
<span class="quotelev1">&gt; &quot;OMPI Run Time Environment&quot; and libopen_rte.so are not that far from  
</span><br>
<span class="quotelev1">&gt; each other.  Changing a bunch of Makefile.am's at this point in the  
</span><br>
<span class="quotelev1">&gt; game for what I consider a minor cosmetic difference just makes  
</span><br>
<span class="quotelev1">&gt; little sense to me.
</span><br>
<span class="quotelev1">&gt; On the technical side what I hate about this is Sun is about to  
</span><br>
<span class="quotelev1">&gt; release its second distribution base on 1.3.  If the below change  
</span><br>
<span class="quotelev1">&gt; goes through this guarrantees that the next CT release will be  
</span><br>
<span class="quotelev1">&gt; incompatible with CT8.1.  Now we can go through the discussion of  
</span><br>
<span class="quotelev1">&gt; whether such a compatibility will exist aside from this change but  
</span><br>
<span class="quotelev1">&gt; it would be nice to try and stabilize the items we have.
</span><br>
<span class="quotelev1">&gt; I have very little confidence that if we change the library name to  
</span><br>
<span class="quotelev1">&gt; libompi_rte.so that at the end of 1.4 we decide it should be named  
</span><br>
<span class="quotelev1">&gt; something else.  I also wonder if we do change the rte library if we  
</span><br>
<span class="quotelev1">&gt; should also change the name of libopen_pal.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, Sun votes no on this rfe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Rename libopen-rte to be libompi-rte (and probably other  
</span><br>
<span class="quotelev2">&gt;&gt; supporting text)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: ORTE is really quite specific to OMPI.  We decided long ago  
</span><br>
<span class="quotelev2">&gt;&gt; that ORTE would not split off from OMPI, and it has been  
</span><br>
<span class="quotelev2">&gt;&gt; specifically tailored for OMPI.  Indeed, Ralph has recently been  
</span><br>
<span class="quotelev2">&gt;&gt; expanding &quot;ORTE&quot; to &quot;OMPI Run Time Environment&quot;.  So let's name the  
</span><br>
<span class="quotelev2">&gt;&gt; library what it really is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: See attached patch; basically, a bunch of Makefile.am's
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Before v1.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Teleconference, Tues 11 Nov 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The change is fairly minor, and 98% of OMPI users won't notice.   
</span><br>
<span class="quotelev2">&gt;&gt; Only those who are not using wrapper compilers properly will notice  
</span><br>
<span class="quotelev2">&gt;&gt; the change (and they should be using the wrapper compilers; we  
</span><br>
<span class="quotelev2">&gt;&gt; strongly recommended that everyone either directly use the wrapper  
</span><br>
<span class="quotelev2">&gt;&gt; compilers to compile/link their apps, or use the wrappers to get  
</span><br>
<span class="quotelev2">&gt;&gt; the required flags [including library names] to compile/link their  
</span><br>
<span class="quotelev2">&gt;&gt; apps).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if Sun has any policies about library name changes  
</span><br>
<span class="quotelev2">&gt;&gt; between versions, or if it'll create problems since CT8 has already  
</span><br>
<span class="quotelev2">&gt;&gt; been released. As a history note, we changed this library name in  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2 from &quot;liborte&quot; to &quot;libopen-rte&quot;.  This would be another change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Previous message:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4862.php">Jeff Squyres: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
