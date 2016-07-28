<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 13:36:22 2008" -->
<!-- isoreceived="20081029173622" -->
<!-- sent="Wed, 29 Oct 2008 13:36:17 -0400" -->
<!-- isosent="20081029173617" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810291036q79ae90fam1677400f17589baa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="263CE4E1-CC4F-41F4-B5E3-2AB9935B4381_at_eecs.utk.edu" -->
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
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 13:36:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 29, 2008 at 10:48 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we have a problem in the &quot;make dist&quot; for the 1.2. I just downloaded
</span><br>
<span class="quotelev1">&gt; the latest 1.2.8, and the windows timer component header file is not in the
</span><br>
<span class="quotelev1">&gt; tarball. This file is not automatically generated, and it is in the svn
</span><br>
<span class="quotelev1">&gt; version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, the 1.3 is nearly ready to replace the 1.2 as the stable version.
</span><br>
<span class="quotelev1">&gt; And it does have this file, so I strongly suggest to switch from the 1.2 to
</span><br>
<span class="quotelev1">&gt; the 1.3 series.
</span><br>
<p>Hi George,
<br>
<p>Thank you very much for the suggestion.
<br>
<p>I did what you suggested and downloaded openmpi-1.3b1, and now I can
<br>
see that file there.
<br>
<p>The configuration ends cleanly again, but this time the compilation
<br>
stops with the error below. Do you mind taking a look at it to see
<br>
what could be wrong?
<br>
<p>Thanks.
<br>
<p>=====================================================
<br>
[...]
<br>
Making install in mca/memory/mallopt
<br>
make[2]: Entering directory
<br>
`/home/seabra/local/openmpi-1.3b1/opal/mca/memory/mallopt'
<br>
depbase=`echo memory_mallopt_component.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/bin/sh ../../../../libtool --tag=CC   --mode=compile gcc
<br>
-DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../../../..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing  -MT memory_mallopt_component.lo -MD -MP -MF
<br>
$depbase.Tpo -c -o memory_mallopt_component.lo
<br>
memory_mallopt_component.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Plo
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
<br>
-I../../../../orte/include -I../../../../ompi/include
<br>
-I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
<br>
-D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -MT
<br>
memory_mallopt_component.lo -MD -MP -MF
<br>
.deps/memory_mallopt_component.Tpo -c memory_mallopt_component.c
<br>
-DDLL_EXPORT -DPIC -o .libs/memory_mallopt_component.o
<br>
memory_mallopt_component.c: In function `munmap':
<br>
memory_mallopt_component.c:106: error: `RTLD_NEXT' undeclared (first
<br>
use in this function)
<br>
memory_mallopt_component.c:106: error: (Each undeclared identifier is
<br>
reported only once
<br>
memory_mallopt_component.c:106: error: for each function it appears in.)
<br>
make[2]: *** [memory_mallopt_component.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/seabra/local/openmpi-1.3b1/opal/mca/memory/mallopt'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/seabra/local/openmpi-1.3b1/opal'
<br>
make: *** [install-recursive] Error
<br>
=====================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>In reply to:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7129.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
