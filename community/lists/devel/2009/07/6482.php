<?
$subject_val = "Re: [OMPI devel] autodetect broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 19:48:11 2009" -->
<!-- isoreceived="20090721234811" -->
<!-- sent="Tue, 21 Jul 2009 19:48:06 -0400" -->
<!-- isosent="20090721234806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autodetect broken" -->
<!-- id="FBDEC76B-CD42-43C7-B3FA-D0D099C8BE3E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0030EF4F-99EA-4F5F-9502-94FE84A9CC5E_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 19:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arrgh!!  Even with .ompi_ignore, everything is broken on OS X and  
<br>
Linux (perhaps this is what Ralph was referring to -- not a compile  
<br>
time problem?):
<br>
<p>-----
<br>
$ mpicc -g -Isrc   -c -o libmpitest.o libmpitest.c
<br>
Cannot open configuration file ${datadir}/openmpi/mpicc-wrapper-data.txt
<br>
Error parsing data file mpicc: Not found
<br>
-----
<br>
<p>$#%@#$%@#$%@#$%#$!!!!!
<br>
<p>Given that it's happening on 2 different OS's, this is enough to  
<br>
convince me that r21723 is unfortunately borked.  I'm going to back it  
<br>
out.
<br>
<p><p><p>On Jul 21, 2009, at 7:13 PM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2009, at 6:34 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm quite confused about what this component did to the base
</span><br>
<span class="quotelev2">&gt; &gt; functions.  I haven't had a chance to digest it properly, but it
</span><br>
<span class="quotelev2">&gt; &gt; &quot;feels wrong&quot;...  Iain -- can you please explain the workings of
</span><br>
<span class="quotelev2">&gt; &gt; this component and its interactions with the base?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The autodetect component gets loaded after the environment component,
</span><br>
<span class="quotelev1">&gt; and before the config component.  So environment variables like
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX will override it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When it loads, it finds the directory containing libopen-pal.so
</span><br>
<span class="quotelev1">&gt; (assuming that is where the autodetect component actually is) and sets
</span><br>
<span class="quotelev1">&gt; its install_dirs_data.libdir to that.  The other fields of
</span><br>
<span class="quotelev1">&gt; install_dirs_data are set to &quot;${infer-libdir}&quot;.  So when the base
</span><br>
<span class="quotelev1">&gt; component loads autodetect, and no environment variables have set any
</span><br>
<span class="quotelev1">&gt; of the fields, opal_install_dirs.everything_except_libdir is set to &quot;$
</span><br>
<span class="quotelev1">&gt; {infer-libdir}&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (If the autodetect component is statically linked into an application,
</span><br>
<span class="quotelev1">&gt; then it will set bindir rather than libdir.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The base component looks for fields set to &quot;${infer-foo}&quot;, and calls
</span><br>
<span class="quotelev1">&gt; opal_install_dirs_infer to figure out what the field should be.  For
</span><br>
<span class="quotelev1">&gt; example, if opal_install_dirs.prefix is set to &quot;${infer-libdir}&quot;, then
</span><br>
<span class="quotelev1">&gt; it calls opal_install_dirs_infer(&quot;prefix&quot;, &quot;libdir}&quot;, 6, &amp;component-
</span><br>
<span class="quotelev2">&gt;  &gt;install_dirs_data).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Opal_install_dirs_infer expands everything in component-
</span><br>
<span class="quotelev2">&gt;  &gt;install_dirs_data.libdir *except* &quot;${prefix}&quot;.  Let's say that ompi
</span><br>
<span class="quotelev1">&gt; was configured so that libdir is &quot;${prefix}/lib&quot;, and the actual path
</span><br>
<span class="quotelev1">&gt; to libopen-pal.so is /usr/local/lib/libopen-pal.so.  The autodetect
</span><br>
<span class="quotelev1">&gt; component will have set opal_install_dirs.libdir to &quot;/usr/local/lib&quot;.
</span><br>
<span class="quotelev1">&gt; It matches the tail of &quot;${prefix}/lib&quot; to &quot;/usr/local/lib&quot;, and infers
</span><br>
<span class="quotelev1">&gt; that the remainder must be the prefix, so it sets
</span><br>
<span class="quotelev1">&gt; opal_install_dirs.prefix to &quot;/usr/local&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other directories (e.g., pkgdatadir) presumably cannot be inferred
</span><br>
<span class="quotelev1">&gt; from libdir, and opal_install_dirs_infer will return NULL.  The config
</span><br>
<span class="quotelev1">&gt; component will then load some value into that field, and things will
</span><br>
<span class="quotelev1">&gt; work as they did before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6483.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6481.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>In reply to:</strong> <a href="6479.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
<li><strong>Reply:</strong> <a href="6488.php">Iain Bason: "Re: [OMPI devel] autodetect broken"</a>
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
