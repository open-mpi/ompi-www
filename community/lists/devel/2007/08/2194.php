<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 18 12:23:31 2007" -->
<!-- isoreceived="20070818162331" -->
<!-- sent="Sat, 18 Aug 2007 10:23:14 -0600" -->
<!-- isosent="20070818162314" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on NX bit patch in Debian" -->
<!-- id="0673F3C1-A5F6-472E-8C70-B8FDA1C197F7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1187449414.25000.10.camel_at_woodstock.pinguinkiste.local" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-18 12:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Manuel Prinz: "[OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Manuel Prinz: "[OMPI devel] Question on NX bit patch in Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Reply:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are correct -- we now add a .note.GNU-stack to the assembly file  
<br>
if the assembler supports it, so that patch should no longer be needed.
<br>
<p>Brian
<br>
<p>On Aug 18, 2007, at 9:03 AM, Manuel Prinz wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the Debian package of OpenMPI there has been a patch [1] for some
</span><br>
<span class="quotelev1">&gt; time which I think is obsolete. I did some reading on that topic  
</span><br>
<span class="quotelev1">&gt; but I'm
</span><br>
<span class="quotelev1">&gt; not very familiar with assembler, so I'm asking you here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I can see, removing the patch doesn't change the binaries
</span><br>
<span class="quotelev1">&gt; much. Neither scanelf nor readelf show something I'd consider as
</span><br>
<span class="quotelev1">&gt; suspicious. I think that the .note.GNU-stack instruction is added  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<span class="quotelev1">&gt; assembler files by generate-asm.pl, so everything's set properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But as I said, I'm not very familiar with the matter and it would be
</span><br>
<span class="quotelev1">&gt; great to get a statement on that issue from you. (We could drop a  
</span><br>
<span class="quotelev1">&gt; rather
</span><br>
<span class="quotelev1">&gt; large patch along with this one, if it's obsolete.) Thanks in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Footnote:
</span><br>
<span class="quotelev1">&gt;  1. <a href="http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/debian/">http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/debian/</a> 
</span><br>
<span class="quotelev1">&gt; patches/10opal_noexecstack.dpatch?op=file&amp;rev=0&amp;sc=0
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Previous message:</strong> <a href="2193.php">Manuel Prinz: "[OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>In reply to:</strong> <a href="2193.php">Manuel Prinz: "[OMPI devel] Question on NX bit patch in Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
<li><strong>Reply:</strong> <a href="2195.php">Manuel Prinz: "Re: [OMPI devel] Question on NX bit patch in Debian"</a>
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
