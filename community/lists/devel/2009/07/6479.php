<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:13:59 2009" -->
<!-- isoreceived="20090721231359" -->
<!-- sent="Tue, 21 Jul 2009 19:13:53 -0400" -->
<!-- isosent="20090721231353" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="0030EF4F-99EA-4F5F-9502-94FE84A9CC5E_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5E4952FF-18D0-40FE-8693-C3928DB0AC9A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autodetect broken<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 19:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>In reply to:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2009, at 6:34 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm quite confused about what this component did to the base  
</span><br>
<span class="quotelev1">&gt; functions.  I haven't had a chance to digest it properly, but it  
</span><br>
<span class="quotelev1">&gt; &quot;feels wrong&quot;...  Iain -- can you please explain the workings of  
</span><br>
<span class="quotelev1">&gt; this component and its interactions with the base?
</span><br>
<p>The autodetect component gets loaded after the environment component,  
<br>
and before the config component.  So environment variables like  
<br>
OPAL_PREFIX will override it.
<br>
<p>When it loads, it finds the directory containing libopen-pal.so  
<br>
(assuming that is where the autodetect component actually is) and sets  
<br>
its install_dirs_data.libdir to that.  The other fields of  
<br>
install_dirs_data are set to &quot;${infer-libdir}&quot;.  So when the base  
<br>
component loads autodetect, and no environment variables have set any  
<br>
of the fields, opal_install_dirs.everything_except_libdir is set to &quot;$ 
<br>
{infer-libdir}&quot;.
<br>
<p>(If the autodetect component is statically linked into an application,  
<br>
then it will set bindir rather than libdir.)
<br>
<p>The base component looks for fields set to &quot;${infer-foo}&quot;, and calls  
<br>
opal_install_dirs_infer to figure out what the field should be.  For  
<br>
example, if opal_install_dirs.prefix is set to &quot;${infer-libdir}&quot;, then  
<br>
it calls opal_install_dirs_infer(&quot;prefix&quot;, &quot;libdir}&quot;, 6, &amp;component- 
<br>
<span class="quotelev1"> &gt;install_dirs_data).
</span><br>
<p>Opal_install_dirs_infer expands everything in component- 
<br>
<span class="quotelev1"> &gt;install_dirs_data.libdir *except* &quot;${prefix}&quot;.  Let's say that ompi  
</span><br>
was configured so that libdir is &quot;${prefix}/lib&quot;, and the actual path  
<br>
to libopen-pal.so is /usr/local/lib/libopen-pal.so.  The autodetect  
<br>
component will have set opal_install_dirs.libdir to &quot;/usr/local/lib&quot;.   
<br>
It matches the tail of &quot;${prefix}/lib&quot; to &quot;/usr/local/lib&quot;, and infers  
<br>
that the remainder must be the prefix, so it sets  
<br>
opal_install_dirs.prefix to &quot;/usr/local&quot;.
<br>
<p>Other directories (e.g., pkgdatadir) presumably cannot be inferred  
<br>
from libdir, and opal_install_dirs_infer will return NULL.  The config  
<br>
component will then load some value into that field, and things will  
<br>
work as they did before.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6480.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6478.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>In reply to:</strong> <a href="6477.php">Jeff Squyres: "[OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6482.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6497.php">Brian W. Barrett: "Re: [OMPI devel] autodetect broken"</a>
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
