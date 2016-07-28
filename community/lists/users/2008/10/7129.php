<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 13:49:34 2008" -->
<!-- isoreceived="20081029174934" -->
<!-- sent="Wed, 29 Oct 2008 13:49:28 -0400" -->
<!-- isosent="20081029174928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="2C8C6407-711D-4758-B29E-0DBF4DCAE1CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810291036q79ae90fam1677400f17589baa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 13:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ugh.  IMHO, Cygwin != POSIX.
<br>
<p>The problem is that we're making the assumption that if dlsym() is  
<br>
present, RTLD_NEXT is defined.  I guess that's not true for cygwin  
<br>
(lame).  I suppose that we could also check for RTLD_NEXT...?  Is  
<br>
there any other OS where dlsym() is present by RTLD_NEXT is not?
<br>
<p>Would it be easier to run Linux in a virtual machine on your windows  
<br>
host?  You'll probably get a lot better performance...?
<br>
<p><p>On Oct 29, 2008, at 1:36 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 29, 2008 at 10:48 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we have a problem in the &quot;make dist&quot; for the 1.2. I just  
</span><br>
<span class="quotelev2">&gt;&gt; downloaded
</span><br>
<span class="quotelev2">&gt;&gt; the latest 1.2.8, and the windows timer component header file is  
</span><br>
<span class="quotelev2">&gt;&gt; not in the
</span><br>
<span class="quotelev2">&gt;&gt; tarball. This file is not automatically generated, and it is in the  
</span><br>
<span class="quotelev2">&gt;&gt; svn
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, the 1.3 is nearly ready to replace the 1.2 as the stable  
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev2">&gt;&gt; And it does have this file, so I strongly suggest to switch from  
</span><br>
<span class="quotelev2">&gt;&gt; the 1.2 to
</span><br>
<span class="quotelev2">&gt;&gt; the 1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for the suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did what you suggested and downloaded openmpi-1.3b1, and now I can
</span><br>
<span class="quotelev1">&gt; see that file there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration ends cleanly again, but this time the compilation
</span><br>
<span class="quotelev1">&gt; stops with the error below. Do you mind taking a look at it to see
</span><br>
<span class="quotelev1">&gt; what could be wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Making install in mca/memory/mallopt
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/seabra/local/openmpi-1.3b1/opal/mca/memory/mallopt'
</span><br>
<span class="quotelev1">&gt; depbase=`echo memory_mallopt_component.lo | sed 's|[^/]*$|.deps/&amp;|;s| 
</span><br>
<span class="quotelev1">&gt; \.lo$||'`;\
</span><br>
<span class="quotelev1">&gt;        /bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
</span><br>
<span class="quotelev1">&gt; -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -I../../../..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -MT memory_mallopt_component.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; $depbase.Tpo -c -o memory_mallopt_component.lo
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;        mv -f $depbase.Tpo $depbase.Plo
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; .deps/memory_mallopt_component.Tpo -c memory_mallopt_component.c
</span><br>
<span class="quotelev1">&gt; -DDLL_EXPORT -DPIC -o .libs/memory_mallopt_component.o
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.c: In function `munmap':
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.c:106: error: `RTLD_NEXT' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.c:106: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; memory_mallopt_component.c:106: error: for each function it appears  
</span><br>
<span class="quotelev1">&gt; in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [memory_mallopt_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/seabra/local/openmpi-1.3b1/opal/mca/memory/mallopt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/seabra/local/openmpi-1.3b1/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error
</span><br>
<span class="quotelev1">&gt; =====================================================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7130.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
