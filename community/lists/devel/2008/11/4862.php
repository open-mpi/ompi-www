<?
$subject_val = "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 08:34:02 2008" -->
<!-- isoreceived="20081107133402" -->
<!-- sent="Fri, 7 Nov 2008 08:33:49 -0500" -->
<!-- isosent="20081107133349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="27F05C6D-F0A5-46B7-A024-27EB429631EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BC80137B-F95A-44F3-9835-C5D51E0693FB_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 08:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4863.php">Rolf Vandevaart: "[OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Previous message:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It bothers me a bit that the OMPI RTE library is called by a prior  
<br>
name, and based on these reactions, we're likely to be stuck with this  
<br>
name for a long time.  I guess I'll cope.
<br>
<p><p>On Nov 7, 2008, at 7:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just in case anyone wonders: I can understand Jeff's motivation to  
</span><br>
<span class="quotelev1">&gt; rationalize the libraries name with what is in it. There is no  
</span><br>
<span class="quotelev1">&gt; &quot;OpenRTE&quot; any more - it has truly become the &quot;OMPI RTE&quot; - so I  
</span><br>
<span class="quotelev1">&gt; sympathize with what he was trying to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I truly don't have strong feelings either way on this  
</span><br>
<span class="quotelev1">&gt; proposal, so whatever is decided is just fine with me. My local  
</span><br>
<span class="quotelev1">&gt; customer base never sees the library name, and doesn't care what it  
</span><br>
<span class="quotelev1">&gt; is called.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2008, at 4:38 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not see the real value in doing this name change.  The name  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;OMPI Run Time Environment&quot; and libopen_rte.so are not that far  
</span><br>
<span class="quotelev2">&gt;&gt; from each other.  Changing a bunch of Makefile.am's at this point  
</span><br>
<span class="quotelev2">&gt;&gt; in the game for what I consider a minor cosmetic difference just  
</span><br>
<span class="quotelev2">&gt;&gt; makes little sense to me.
</span><br>
<span class="quotelev2">&gt;&gt; On the technical side what I hate about this is Sun is about to  
</span><br>
<span class="quotelev2">&gt;&gt; release its second distribution base on 1.3.  If the below change  
</span><br>
<span class="quotelev2">&gt;&gt; goes through this guarrantees that the next CT release will be  
</span><br>
<span class="quotelev2">&gt;&gt; incompatible with CT8.1.  Now we can go through the discussion of  
</span><br>
<span class="quotelev2">&gt;&gt; whether such a compatibility will exist aside from this change but  
</span><br>
<span class="quotelev2">&gt;&gt; it would be nice to try and stabilize the items we have.
</span><br>
<span class="quotelev2">&gt;&gt; I have very little confidence that if we change the library name to  
</span><br>
<span class="quotelev2">&gt;&gt; libompi_rte.so that at the end of 1.4 we decide it should be named  
</span><br>
<span class="quotelev2">&gt;&gt; something else.  I also wonder if we do change the rte library if  
</span><br>
<span class="quotelev2">&gt;&gt; we should also change the name of libopen_pal.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyways, Sun votes no on this rfe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Rename libopen-rte to be libompi-rte (and probably other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supporting text)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: ORTE is really quite specific to OMPI.  We decided long ago  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that ORTE would not split off from OMPI, and it has been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically tailored for OMPI.  Indeed, Ralph has recently been  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expanding &quot;ORTE&quot; to &quot;OMPI Run Time Environment&quot;.  So let's name  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the library what it really is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: See attached patch; basically, a bunch of Makefile.am's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Before v1.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Teleconference, Tues 11 Nov 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The change is fairly minor, and 98% of OMPI users won't notice.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only those who are not using wrapper compilers properly will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notice the change (and they should be using the wrapper compilers;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we strongly recommended that everyone either directly use the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper compilers to compile/link their apps, or use the wrappers  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get the required flags [including library names] to compile/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link their apps).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know if Sun has any policies about library name changes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between versions, or if it'll create problems since CT8 has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; already been released. As a history note, we changed this library  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name in v1.2 from &quot;liborte&quot; to &quot;libopen-rte&quot;.  This would be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4863.php">Rolf Vandevaart: "[OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Previous message:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>In reply to:</strong> <a href="4861.php">Ralph Castain: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
