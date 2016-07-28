<?
$subject_val = "Re: [OMPI devel] RES:  v pml question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 18:37:06 2008" -->
<!-- isoreceived="20080123233706" -->
<!-- sent="Wed, 23 Jan 2008 18:36:55 -0500" -->
<!-- isosent="20080123233655" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RES:  v pml question" -->
<!-- id="206CF017-1495-48AA-8871-D6E527F1538C_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00ed01c85e0a$a179ff30$02fefe0a_at_Leonardo" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RES:  v pml question<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 18:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<li><strong>In reply to:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Actually it might already work. We never tried yet but nothing should  
<br>
prevent it.
<br>
<p>The symlinks are necessary to trick the autogen and configure stages.  
<br>
This is required to avoid code replication from autogen.sh. If you  
<br>
look carefully you will see that the simlinks are created only inside  
<br>
the build directory, and not in the source directory. Thus it does not  
<br>
help to add them to the trunk.
<br>
<p>Aurelien
<br>
<p>Le 23 janv. 08 &#224; 16:55, Leonardo Fialho a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I'm testing the v protocol just now. Anybody have plans to do a  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; wrapper mixing crcpw and v_protocol?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; University Autonoma of Barcelona
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Mensagem original-----
</span><br>
<span class="quotelev1">&gt; De: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; Em nome
</span><br>
<span class="quotelev1">&gt; de Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Enviada em: mi&#233;rcoles, 23 de enero de 2008 22:45
</span><br>
<span class="quotelev1">&gt; Para: Open Developers
</span><br>
<span class="quotelev1">&gt; Assunto: [OMPI devel] v pml question
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious: what are the &quot;mca&quot; and &quot;vprotocol&quot; symlinks to &quot;.&quot; for  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; v/vprotocol directory for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If they're necessary, can they be committed to svn?  If they're not
</span><br>
<span class="quotelev1">&gt; necessary, can they be removed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<li><strong>In reply to:</strong> <a href="3026.php">Leonardo Fialho: "[OMPI devel] RES:  v pml question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
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
