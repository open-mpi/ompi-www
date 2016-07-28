<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 04:30:42 2006" -->
<!-- isoreceived="20061018083042" -->
<!-- sent="Wed, 18 Oct 2006 09:30:19 +0100 (BST)" -->
<!-- isosent="20061018083019" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3a1r12121 ..." -->
<!-- id="Pine.GSO.4.53.0610180926590.29896_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.53.0610171156150.29896_at_duss0-ast.phyast.dur.ac.uk" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 04:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2002.php">Dan Cardin: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have attached the config.log file.
<br>
<p>Here is also the instructions which I have included in the configuration
<br>
<p>In previous configuration attempts I had --with-mx=/opt/mx where
<br>
/opt/mx is the toplevel directory under which mx is installed.
<br>
<p>The result of the configuration attempt was the same with the same error
<br>
messages.
<br>
<p>#!/bin/ksh
<br>
&nbsp;&nbsp;CC=&quot;/opt/studio11/SUNWspro/bin/cc&quot;
<br>
&nbsp;&nbsp;CFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -L/opt/mx/lib64 \
<br>
-L/opt/SUNWsge/lib/sol-amd64 -R/opt/mx/lib64 -R/opt/SUNWsge/lib/sol-amd64&quot;
<br>
&nbsp;&nbsp;CXX=&quot;/opt/studio11/SUNWspro/bin/CC&quot;
<br>
&nbsp;&nbsp;CXXFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;F77=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
<br>
&nbsp;&nbsp;FFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
<br>
&nbsp;&nbsp;FC=&quot;/opt/studio11/SUNWspro/bin/f95&quot;
<br>
&nbsp;&nbsp;FCFLAGS=&quot;-xarch=amd64a -I/opt/mx/include -I/opt/SUNWsge/include&quot;
<br>
<p>PATH=/opt/studio11/SUNWspro/bin:/opt/csw/bin:/opt/sfw/bin:/usr/sfw/bin:&quot;$PATH&quot;:/usr/ucb
<br>
export CC CFLAGS LDFLAGS CXX CXXFLAGS F77 FFLAGS FC FCFLAGS PATH
<br>
<p>./configure --prefix=/opt/openMPI --with-mx=/opt/mx/lib64  \
<br>
&nbsp;&nbsp;--with-mx-libdir=/opt/mx/lib64 \
<br>
&nbsp;--with-wrapper-cflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-fflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-fcflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--with-wrapper-ldflags=-xarch=amd64a \
<br>
&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;--enable-dependency-tracking \
<br>
&nbsp;&nbsp;--enable-cxx-exceptions  \
<br>
&nbsp;&nbsp;--enable-smp-locks      \
<br>
&nbsp;&nbsp;--enable-mpi-threads   \
<br>
&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;--with-threads=solaris
<br>
<p><p>On Tue, 17 Oct 2006, Lydia Heck wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that with 1.3a1xxxx I a looking at a development release.
</span><br>
<span class="quotelev1">&gt; HOwever I do need the SGE (GridEngine) support and I could not find
</span><br>
<span class="quotelev1">&gt; a download for a stable (or any other) 1.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I downloaded 1.3a1r12121 and tried to configure it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my configuration I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-mx=/opt/mx (where the MX software is installed); also
</span><br>
<span class="quotelev1">&gt; --with-mx-libdir=/opt/mx/lib64, because I build for 64 bit only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I use the Sun Studio11 compilers and the configuration fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component btl:mx (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component btl:mx compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h usability... no
</span><br>
<span class="quotelev1">&gt; checking myriexpress.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for myriexpress.h... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: MX support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried everything, entering under CFLAGS etc
</span><br>
<span class="quotelev1">&gt; -I/opt/mx/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; modifying
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-mx=/opt/mx/include ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each the configure fails with the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, mx is definitely installed, and yes the path to mx is definitely
</span><br>
<span class="quotelev1">&gt; /opt/mx ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lydia Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr E L  Heck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; University of Durham
</span><br>
<span class="quotelev1">&gt; Institute for Computational Cosmology
</span><br>
<span class="quotelev1">&gt; Ogden Centre
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; South Road
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DURHAM, DH1 3LE
</span><br>
<span class="quotelev1">&gt; United Kingdom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; e-mail: lydia.heck_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel.: + 44 191 - 334 3628
</span><br>
<span class="quotelev1">&gt; Fax.: + 44 191 - 334 3645
</span><br>
<span class="quotelev1">&gt; ___________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>

<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2001/openmpi-config.log.gz">config.log of the configuration with mx </a>
</ul>
<!-- attachment="openmpi-config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2002.php">Dan Cardin: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="2000.php">Brian Barrett: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>In reply to:</strong> <a href="1994.php">Lydia Heck: "[OMPI users] openmpi 1.3a1r12121 ..."</a>
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
