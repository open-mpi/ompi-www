<?
$subject_val = "Re: [OMPI devel] Improvement of openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 09:49:27 2009" -->
<!-- isoreceived="20090806134927" -->
<!-- sent="Thu, 6 Aug 2009 15:49:15 +0200 (CEST)" -->
<!-- isosent="20090806134915" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improvement of openmpi.spec" -->
<!-- id="alpine.DEB.2.00.0908061541430.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35995A07-1DBE-462A-BE22-D2324E5A85EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Improvement of openmpi.spec<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 09:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for reviewing my changes !
<br>
<p>On Thu, 6 Aug 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; -Source: openmpi-%{version}.tar.$EXTENSION
</span><br>
<span class="quotelev1">&gt; +Source: %{name}-%{version}.tar.$EXTENSION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this mean that you're looking for a different tarball name?  I'm not 
</span><br>
<span class="quotelev1">&gt; sure that's good; the tarball should be an openmpi tarball, regardless of 
</span><br>
<span class="quotelev1">&gt; what name it gets installed under (e.g., OFED builds an OMPI tarball 3-4 
</span><br>
<span class="quotelev1">&gt; different ways [one for each compiler] and changes %name, but uses the same 
</span><br>
<span class="quotelev1">&gt; tarball.  How about another param (hey, we've got something like 100, so 
</span><br>
<span class="quotelev1">&gt; what's 101? ;-) ) for the tarball that defaults to &quot;openmpi&quot;?  They if you 
</span><br>
<span class="quotelev1">&gt; want to have a differently-named tarball, you can.
</span><br>
Well, maybe we could live with an openmpi tarball ... it was just to be 
<br>
consistent. When I build bullmpi-a.b.c.src.rpm, I somehow expect the tar 
<br>
file to be bullmpi-a.b.c.tar.gz.
<br>
<p><span class="quotelev1">&gt; -%setup -q -n openmpi-%{version}
</span><br>
<span class="quotelev1">&gt; +%setup -q -n %{name}-%{version}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ditto for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -%dir %{_libdir}/openmpi
</span><br>
<span class="quotelev1">&gt; +%dir %{_libdir}/%{name}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm -- is this right?  I thought that the name &quot;openmpi&quot; in this directory 
</span><br>
<span class="quotelev1">&gt; path came from OMPI's configure script, not from the RPM spec...?  Or is the 
</span><br>
<span class="quotelev1">&gt; RPM build command passing --pkgname or somesuch to OMPI's configure to 
</span><br>
<span class="quotelev1">&gt; override the built-in name?
</span><br>
Hum, I guess you're right, this is indeed not something to change. Sorry 
<br>
about that.
<br>
<p>Sylvain
<br>
<p><span class="quotelev1">&gt; On Jul 31, 2009, at 11:51 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We had to apply a little set of modifications to the openmpi.spec file to 
</span><br>
<span class="quotelev2">&gt;&gt; help us integrate openmpi in our cluster distribution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So here is a patch which, as the changelog suggests, does a couple of 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;improvements&quot; :
</span><br>
<span class="quotelev2">&gt;&gt; - Fix a typo in Summary
</span><br>
<span class="quotelev2">&gt;&gt; - Replace openmpi by %{name} in a couple of places
</span><br>
<span class="quotelev2">&gt;&gt; - Add an %{opt_prefix} option to be able to install in a specific path 
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. in /opt/&lt;vendor&gt;/mpi/&lt;mpilib&gt;-&lt;version&gt;/ instead of 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/&lt;mpilib&gt;-&lt;version&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The patch is done with &quot;hg extract&quot; but should apply on the SVN trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain&lt;openmpi.spec.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>In reply to:</strong> <a href="6600.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
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
