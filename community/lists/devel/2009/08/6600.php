<?
$subject_val = "Re: [OMPI devel] Improvement of openmpi.spec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 09:32:13 2009" -->
<!-- isoreceived="20090806133213" -->
<!-- sent="Thu, 6 Aug 2009 09:32:08 -0400" -->
<!-- isosent="20090806133208" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Improvement of openmpi.spec" -->
<!-- id="35995A07-1DBE-462A-BE22-D2324E5A85EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0907311728470.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 09:32:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6599.php">Prasadcse Perera: "[OMPI devel] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  A few questions about this patch:
<br>
<p>-Source: openmpi-%{version}.tar.$EXTENSION
<br>
+Source: %{name}-%{version}.tar.$EXTENSION
<br>
<p>Does this mean that you're looking for a different tarball name?  I'm  
<br>
not sure that's good; the tarball should be an openmpi tarball,  
<br>
regardless of what name it gets installed under (e.g., OFED builds an  
<br>
OMPI tarball 3-4 different ways [one for each compiler] and changes  
<br>
%name, but uses the same tarball.  How about another param (hey, we've  
<br>
got something like 100, so what's 101? ;-) ) for the tarball that  
<br>
defaults to &quot;openmpi&quot;?  They if you want to have a differently-named  
<br>
tarball, you can.
<br>
<p>-%setup -q -n openmpi-%{version}
<br>
+%setup -q -n %{name}-%{version}
<br>
<p>Ditto for this.
<br>
<p>-%dir %{_libdir}/openmpi
<br>
+%dir %{_libdir}/%{name}
<br>
<p>Hmm -- is this right?  I thought that the name &quot;openmpi&quot; in this  
<br>
directory path came from OMPI's configure script, not from the RPM  
<br>
spec...?  Or is the RPM build command passing --pkgname or somesuch to  
<br>
OMPI's configure to override the built-in name?
<br>
<p><p><p><p>On Jul 31, 2009, at 11:51 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had to apply a little set of modifications to the openmpi.spec  
</span><br>
<span class="quotelev1">&gt; file to help us integrate openmpi in our cluster distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here is a patch which, as the changelog suggests, does a couple  
</span><br>
<span class="quotelev1">&gt; of &quot;improvements&quot; :
</span><br>
<span class="quotelev1">&gt; - Fix a typo in Summary
</span><br>
<span class="quotelev1">&gt; - Replace openmpi by %{name} in a couple of places
</span><br>
<span class="quotelev1">&gt; - Add an %{opt_prefix} option to be able to install in a specific  
</span><br>
<span class="quotelev1">&gt; path (e.g. in /opt/&lt;vendor&gt;/mpi/&lt;mpilib&gt;-&lt;version&gt;/ instead of /opt/ 
</span><br>
<span class="quotelev1">&gt; &lt;mpilib&gt;-&lt;version&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch is done with &quot;hg extract&quot; but should apply on the SVN trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain 
</span><br>
<span class="quotelev1">&gt; &lt;openmpi.spec.patch&gt;_______________________________________________
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="6599.php">Prasadcse Perera: "[OMPI devel] Parallel Quicksort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6547.php">Sylvain Jeaugey: "[OMPI devel] Improvement of openmpi.spec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
<li><strong>Reply:</strong> <a href="6601.php">Sylvain Jeaugey: "Re: [OMPI devel] Improvement of openmpi.spec"</a>
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
