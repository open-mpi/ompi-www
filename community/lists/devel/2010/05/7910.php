<?
$subject_val = "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 01:36:19 2010" -->
<!-- isoreceived="20100511053619" -->
<!-- sent="Tue, 11 May 2010 07:36:13 +0200" -->
<!-- isosent="20100511053613" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] The&amp;quot; Missing Symbol&amp;quot; issue and OpenMPI on NetBSD" -->
<!-- id="20100511053612.GA5791_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d8f5cc0fca4973bc6f96aa8f4aae1ab2.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 01:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7911.php">Jeff Squyres: "[OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Previous message:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Kevin,
<br>
<p>* Kevin.Buckley_at_[hidden] wrote on Tue, May 11, 2010 at 06:42:01AM CEST:
<br>
<span class="quotelev1">&gt; That is a file that gets patched in the NetBSD build as follows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $diff opal/mca/base/mca_base_component_find.c{.orig,}
</span><br>
<span class="quotelev1">&gt; 44,46d43
</span><br>
<span class="quotelev1">&gt; &lt;   #ifndef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; &lt;     #include &quot;opal/libltdl/ltdl.h&quot;
</span><br>
<span class="quotelev1">&gt; &lt;   #else
</span><br>
<span class="quotelev1">&gt; 48d44
</span><br>
<span class="quotelev1">&gt; &lt;   #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ie we have taken out the inclusion of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal/libltdl/ltdl.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to force the use of the NetBSD &quot;ltdl.h&quot; one, which I guess might point
</span><br>
<span class="quotelev1">&gt; to something underlying the issue but as to what ...
</span><br>
<p>Which libltdl version is that NetBSD ltdl.h from?  Which version is in
<br>
opal/libltdl?  Have you tried not doing the above change?
<br>
<p>libltdl 2.2.x has incompatible changes over 1.5.x, both in the library
<br>
as well as in the header, as well as (I think) in preloaded modules.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7911.php">Jeff Squyres: "[OMPI devel] Fwd: + ummunotify-userspace-support-for-mmu-notifications-v2.patch added to -mm tree"</a>
<li><strong>Previous message:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="7909.php">Kevin.Buckley_at_[hidden]: "[OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Reply:</strong> <a href="7913.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
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
