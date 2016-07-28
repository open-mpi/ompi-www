<?
$subject_val = "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 15:36:38 2013" -->
<!-- isoreceived="20131111203638" -->
<!-- sent="Mon, 11 Nov 2013 20:36:31 +0000" -->
<!-- isosent="20131111203631" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64" -->
<!-- id="02471414-AA8B-4204-8317-E5CBE262EE4D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5277D5F4.2010002_at_debian.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 15:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2013, at 12:14 PM, Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FYI, I tried with OpenMPI 1.7.3 under ia64 and the build fails with:
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -DNDEBUG -g -O2 -Wformat
</span><br>
<span class="quotelev1">&gt; -Werror=format-security -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -o .libs/orte-clean orte-clean.o  -L/usr//lib
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.so -lrt -lnsl -lutil -lm -lhwloc
</span><br>
<span class="quotelev1">&gt; /usr/lib/ia64-linux-gnu/libltdl.so -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/usr/lib/openmpi/lib
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: orte-clean.o: undefined reference to symbol
</span><br>
<span class="quotelev1">&gt; 'opal_show_help_string'
</span><br>
<span class="quotelev1">&gt; /home/sylvestre/openmpi-1.7.3/opal/.libs/libopen-pal.so.6: error adding
</span><br>
<span class="quotelev1">&gt; symbols: DSO missing from command line
</span><br>
<p>Sorry for the delay -- my INBOX management skills suck.  :-(
<br>
<p>No, this is not familiar.  That symbol -- opal_show_help_string -- should definitely be in libopen-pal.so.
<br>
<p>I do see -L/usr/lib in the command line, though, which is worrysome.  I've seen problems when system-default library locations are manually listed in the command line (i.e., -L/usr/lib should probably *not* be listed in the command line; it can disrupt the order of search paths for libraries...?).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
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
