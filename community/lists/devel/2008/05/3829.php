<?
$subject_val = "Re: [OMPI devel] OMPI Mercurial read-only mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 10:13:25 2008" -->
<!-- isoreceived="20080505141325" -->
<!-- sent="Mon, 5 May 2008 10:13:15 -0400" -->
<!-- isosent="20080505141315" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI Mercurial read-only mirror" -->
<!-- id="3AECF205-7D61-4A73-959E-B49402D3065A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="222640ED-9863-47BA-BB20-84836BA7E013_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI Mercurial read-only mirror<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 10:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3826.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per our conversation in Chicago - It looks like Mercurial has a Google  
<br>
Summer of Code student working on the Mercurial -push-&gt; Subversion  
<br>
problem we were talking about:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://code.google.com/soc/2008/hg/appinfo.html">http://code.google.com/soc/2008/hg/appinfo.html</a>? 
<br>
csaid=2757CDDD2156F1A7
<br>
<p>For those not at the meeting this has to do with interoperability  
<br>
between Subversion and Mercurial. Mercurial has decent tools for  
<br>
making a read only copy of a Subversion repository (exactly like we  
<br>
have just setup for Open MPI), but the problem is pushing changes made  
<br>
to the Mercurial clone back to Subversion. The current technique is to  
<br>
create a patch from Mercurial and apply it by hand to the Subversion  
<br>
repository. Maybe this will be improved this summer.
<br>
<p>-- Josh
<br>
<p>On May 5, 2008, at 8:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2008, at 7:49 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mercurial is a fully distributed system.  So instead of thinking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch, you should think of publishing your repository, which has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commits in it.  As I understand it, open-mpi.org is not set up for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; publishing other repositories yet, but it is quite easy to set up a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mercurial server; there are also several places that will host one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you: <a href="http://www.selenic.com/mercurial/wiki/index.cgi/">http://www.selenic.com/mercurial/wiki/index.cgi/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MercurialHosting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, our goal is to be able to have the OMPI developers be able to
</span><br>
<span class="quotelev1">&gt; use their same SVN username/password to be able to publish hg trees  
</span><br>
<span class="quotelev1">&gt; on www.open-mpi.org
</span><br>
<span class="quotelev1">&gt;  (or hg.open-mpi.org).  But using an outside hosting service is also
</span><br>
<span class="quotelev1">&gt; a possibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not a high priority issue at the moment, but we'll be looking
</span><br>
<span class="quotelev1">&gt; into it in the not-distant future.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Previous message:</strong> <a href="3828.php">Jeff Squyres: "Re: [OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>In reply to:</strong> <a href="3826.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
<li><strong>Reply:</strong> <a href="3830.php">Jeff Squyres: "Re: [OMPI devel] OMPI Mercurial read-only mirror"</a>
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
