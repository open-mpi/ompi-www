<?
$subject_val = "Re: [OMPI users] Cant build OpenMPI!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 13:40:44 2012" -->
<!-- isoreceived="20120124184044" -->
<!-- sent="Tue, 24 Jan 2012 13:40:39 -0500" -->
<!-- isosent="20120124184039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cant build OpenMPI!" -->
<!-- id="C83AE03B-1ED1-440E-8F5A-2D951F510165_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1327430331.98017.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cant build OpenMPI!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 13:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Previous message:</strong> <a href="18256.php">devendra rai: "[OMPI users] Cant build OpenMPI!"</a>
<li><strong>In reply to:</strong> <a href="18256.php">devendra rai: "[OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Reply:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you try running autogen.sh?
<br>
<p>You should not need to -- you should only need to:
<br>
<p>./configure ...
<br>
make all
<br>
make install
<br>
<p><p>On Jan 24, 2012, at 1:38 PM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to build openMPI on a server (I do not have sudo on this server).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running make, I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -I/usr/include -g -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT dt_module.lo -MD -MP -MF .deps/dt_module.Tpo -c dt_module.c  -fPIC -DPIC -o .libs/dt_module.o
</span><br>
<span class="quotelev1">&gt; dt_module.c:177: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:182: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:187: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:192: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:203: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:208: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:219: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:224: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:229: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:234: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; dt_module.c:250: error: expected expression before &#145;)&#146; token
</span><br>
<span class="quotelev1">&gt; make[2]: *** [dt_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/raid/private/openmpi-1.4.2/ompi/datatype'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/raid/private/openmpi-1.4.2/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before this, I had some warnings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: `aclocal-1.10' is missing on your system.  You should only need it if
</span><br>
<span class="quotelev1">&gt;          you modified `acinclude.m4' or `configure.in'.  You might want
</span><br>
<span class="quotelev1">&gt;          to install the `Automake' and `Perl' packages.  Grab them from
</span><br>
<span class="quotelev1">&gt;          any GNU archive site.
</span><br>
<span class="quotelev1">&gt;  cd . &amp;&amp; /bin/bash /home/raid/private/openmpi-1.4.2/ompi/contrib/vt/vt/missing --run automake-1.10 --foreign 
</span><br>
<span class="quotelev1">&gt; /home/raid/private/openmpi-1.4.2/ompi/contrib/vt/vt/missing: line 54: automake-1.10: command not found
</span><br>
<span class="quotelev1">&gt; WARNING: `automake-1.10' is missing on your system.  You should only need it if
</span><br>
<span class="quotelev1">&gt;          you modified `Makefile.am', `acinclude.m4' or `configure.in'.
</span><br>
<span class="quotelev1">&gt;          You might want to install the `Automake' and `Perl' packages.
</span><br>
<span class="quotelev1">&gt;          Grab them from any GNU archive site.
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/bash /home/raid/private/openmpi-1.4.2/ompi/contrib/vt/vt/missing --run autoconf
</span><br>
<span class="quotelev1">&gt; aclocal.m4:16: warning: this file was generated for autoconf 2.63.
</span><br>
<span class="quotelev1">&gt; You have another version of autoconf.  It may work, but is not guaranteed to.
</span><br>
<span class="quotelev1">&gt; If you have problems, you may need to regenerate the build system entirely.
</span><br>
<span class="quotelev1">&gt; To do so, use the procedure documented by the package, typically `autoreconf'.
</span><br>
<span class="quotelev1">&gt; /bin/bash ./config.status --recheck
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any relationship? If not, what else am I missing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for pointers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Previous message:</strong> <a href="18256.php">devendra rai: "[OMPI users] Cant build OpenMPI!"</a>
<li><strong>In reply to:</strong> <a href="18256.php">devendra rai: "[OMPI users] Cant build OpenMPI!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
<li><strong>Reply:</strong> <a href="18258.php">devendra rai: "Re: [OMPI users] Cant build OpenMPI!"</a>
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
