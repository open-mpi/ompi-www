<?
$subject_val = "Re: [OMPI devel] Build failures on trunk? r21235";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 13:46:29 2009" -->
<!-- isoreceived="20090514174629" -->
<!-- sent="Thu, 14 May 2009 19:46:22 +0200" -->
<!-- isosent="20090514174622" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures on trunk? r21235" -->
<!-- id="20090514174620.GA12180_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="27B5EEC8-3328-4C3C-BCFF-2C3254F65E29_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failures on trunk? r21235<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 13:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6042.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Ashley, did you rebootstrap with Debian's Libtool?
<br>
<p>They enable link_all_deplibs=no in their Libtool which changes some
<br>
things and can cause issues like this.  Can't hurt to open a Debian
<br>
bug report about it (targeted against libtool) so they know this issue
<br>
exists.
<br>
<p>Can you try working around it by setting link_all_deplibs to &quot;yes&quot;,
<br>
then rebuilding all the libraries?  Like this, done in the top build
<br>
directory with your current build tree:
<br>
&nbsp;&nbsp;find . -name libtool | xargs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sed -i 's/^\(link_all_deplibs=\).*/&amp;no/'
<br>
&nbsp;&nbsp;find . -name \*.la | xargs ./libtool --mode=clean rm -f
<br>
&nbsp;&nbsp;make
<br>
<p>If that does not work, then I'd be very interested in what the failure
<br>
would look at that point.
<br>
<p>A more permanent workaround could be in OpenMPI to list each library
<br>
that is used *directly* by some other library as a dependency.  Sigh.
<br>
Or fix Debian Libtool.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Thu, May 14, 2009 at 07:28:47PM CEST:
<br>
<span class="quotelev1">&gt; Hmm.  This may not be pilot error.  I build OMPI with a pre-installed  
</span><br>
<span class="quotelev1">&gt; OMPI all the time and they don't conflict during the build (i.e., the  
</span><br>
<span class="quotelev1">&gt; building OMPI always uses the libopen-rte and libopen-pal from the build 
</span><br>
<span class="quotelev1">&gt; tree, not the install tree).  Here's my link lines for ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -g -Wall -Wundef  
</span><br>
<span class="quotelev1">&gt; -Wno-long-long -finline-functions -pthread  -export-dynamic   -o  
</span><br>
<span class="quotelev1">&gt; ompi_info components.o ompi_info.o output.o param.o version.o ../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/libmpi.la -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -g -Wall -Wundef -Wno-long-long -finline-functions - 
</span><br>
<span class="quotelev1">&gt; pthread -o .libs/ompi_info components.o ompi_info.o output.o param.o  
</span><br>
<span class="quotelev1">&gt; version.o -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so /users/ 
</span><br>
<span class="quotelev1">&gt; jsquyres/svn/ompi/orte/.libs/libopen-rte.so /users/jsquyres/svn/ompi/ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread -Wl,-rpath - 
</span><br>
<span class="quotelev1">&gt; Wl,/home/jsquyres/bogus/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice that libopen-rte.os and libopen-pal.so are explicitly mentioned  
</span><br>
<span class="quotelev1">&gt; by absolute path name.  Yours weren't.  I wonder why...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2009, at 12:41 PM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Libtool is 2.2.6.  I use debian unstable so it's normally fairly
</span><br>
<span class="quotelev2">&gt;&gt; up-to-date, I suppose it's not impossible that a debian update has
</span><br>
<span class="quotelev2">&gt;&gt; broken things now that I think of it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I normally build in memfs for speed and have just rebooted my machine
</span><br>
<span class="quotelev2">&gt;&gt; now, a full rebuild has failed again with the same errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All three symbols are shown as B according to nm so they should be
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually further testing shows it's user error again, if I remove the
</span><br>
<span class="quotelev2">&gt;&gt; current install then the build succeeds, it must have been pickings up
</span><br>
<span class="quotelev2">&gt;&gt; the libopen-pal from the install location rather than from the current
</span><br>
<span class="quotelev2">&gt;&gt; build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>In reply to:</strong> <a href="6028.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6030.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Reply:</strong> <a href="6042.php">Ashley Pittman: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
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
