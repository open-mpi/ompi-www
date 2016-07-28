<?
$subject_val = "[OMPI devel] RFC: MCA DSO filename";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 10:19:38 2008" -->
<!-- isoreceived="20080728141938" -->
<!-- sent="Mon, 28 Jul 2008 10:19:28 -0400" -->
<!-- isosent="20080728141928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: MCA DSO filename" -->
<!-- id="78A6D39A-F0F5-4C2A-AFF7-4A4B189D7EDC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: MCA DSO filename<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 10:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Rename MCA DSO filenames from &quot;mca_&lt;framework&gt;_&lt;component&gt;.so&quot;  
<br>
to &quot;libmca_&lt;framework&gt;_&lt;component&gt;.so&quot; (backwards compatibility can be  
<br>
preserved if we want it; see below)
<br>
<p>WHY: Allows simplifying component Makefile.am's
<br>
<p>WHEN: No real rush; just wanted to get the idea out there (does *not*  
<br>
need to be before v1.3; more explanation below)
<br>
<p>WHERE: autogen.sh, some stuff in opal/mca/base, and every component's  
<br>
Makefile.am
<br>
<p>TIMEOUT: Fri, 8 Aug 2008
<br>
<p>------------------------------------------------------------------------
<br>
<p>In reviewing some old SVN/HG trees that I had hanging around, I  
<br>
discovered one about significantly simplifying (and slightly  
<br>
optimizing) component Makefile.am's.  I believe that these ideas came  
<br>
from Brian, Ralf, and possibly others.  Here's a &quot;simple&quot; current  
<br>
Makefile.am (the TCP BTL):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/tcp/Makefile.am">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/mca/btl/tcp/Makefile.am</a>
<br>
<p>At the end of this mail, I include what the meat of the TCP BTL  
<br>
Makefile.am can be reduced to.
<br>
<p>However, to do this, we need to use the same output filename for both  
<br>
the static and dynamic builds (i.e., as a standalone DSO and as a  
<br>
convenience LT library).  Libtool will complain if we build a  
<br>
convenience library with a filename that does not begin with &quot;lib&quot;.
<br>
<p>Note that there are two parts involved:
<br>
<p>1. touching each Makefile.am and converting to the simpler format.
<br>
2. converting the MCA base to look for &quot;libmca_&lt;fw&gt;_&lt;comp&gt;&quot;  
<br>
filenames.  NOTE: we can optionally have the MCA base *also* look for  
<br>
the old-style name &quot;mca_&lt;fw&gt;_&lt;comp&gt;&quot; if backwards compatibility is  
<br>
desired.
<br>
<p>Because of the backwards compatibility possibility, there is no need  
<br>
to do this before v1.3 -- it could be done for v1.3.x or even v1.4  
<br>
(there's no real rush).  It's just an idea that has been around for a  
<br>
while, so I thought I'd turn it into an RFC.  If the community agrees,  
<br>
I'll likely file a ticket about this and we'll get to it someday.
<br>
<p>Below is what the TCP BTL Makefile.am can be reduced to (compare the  
<br>
end of this file to the end of the current TCP BTL Makefile.am).  Note  
<br>
that the whole &quot;if&quot; logic at the end could possibly be hidden in  
<br>
autogen -- I haven't thought that through, but it's a possibility (we  
<br>
can't hide that stuff in autogen until we unify the output filename;  
<br>
we can't do it in today's build system, for example).
<br>
<p>-----
<br>
libmca_btl_tcp_la_SOURCES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_addr.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_component.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_endpoint.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_endpoint.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_frag.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_frag.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_hdr.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_proc.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_proc.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_ft.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_tcp_ft.h
<br>
libmca_btl_tcp_la_LDFLAGS = -module -avoid-version
<br>
<p>if OMPI_BUILD_btl_tcp_DSO
<br>
mcacomponentdir = $(pkglibdir)
<br>
mcacomponent_LTLIBRARIES = libmca_btl_tcp.la
<br>
else
<br>
noinst_LTLIBRARIES = libmca_btl_tcp.la
<br>
endif
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
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
