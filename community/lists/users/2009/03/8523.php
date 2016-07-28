<?
$subject_val = "Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 21:36:21 2009" -->
<!-- isoreceived="20090320013621" -->
<!-- sent="Thu, 19 Mar 2009 21:26:53 -0400" -->
<!-- isosent="20090320012653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0" -->
<!-- id="A5A2109A-C714-41F6-840B-CBCC2FCE6208_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="hp-ik4CaiN84BOKPvvYJlBawwKU6oaUXVpr9PiieBM_pyzhfVlKA-AjMzcdXnB3ct3MBKON39aU_at_cipher.nrlssc.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3 on Mac OS X with PGI 8.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 21:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8524.php">Ricardo Fernández-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>In reply to:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's fun.  I'm afraid I don't have access to PGI 8.0 on OSX -- I  
<br>
can't really track this down any further.
<br>
<p>Can someone check this platform?
<br>
<p><p>On Mar 19, 2009, at 11:10 AM, Tim Campbell wrote:
<br>
<p><span class="quotelev1">&gt; During &quot;make install&quot; of OpenMPI v1.3 on Mac OSX with PGI 8.0 I get
</span><br>
<span class="quotelev1">&gt; the following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Making install in mca/paffinity/darwin
</span><br>
<span class="quotelev1">&gt; source='paffinity_darwin_module.c' object='paffinity_darwin_module.lo'
</span><br>
<span class="quotelev1">&gt; libtool=yes \
</span><br>
<span class="quotelev1">&gt;          DEPDIR=.deps depmode=none /bin/sh ../../../../config/ 
</span><br>
<span class="quotelev1">&gt; depcomp \
</span><br>
<span class="quotelev1">&gt;          /bin/sh ../../../../libtool --tag=CC   --mode=compile pgcc -
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/
</span><br>
<span class="quotelev1">&gt; include -I../../../../ompi/include -I../../../../opal/mca/paffinity/
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa   -I../../../..  -D_REENTRANT  -O -DNDEBUG   -c
</span><br>
<span class="quotelev1">&gt; -o paffinity_darwin_module.lo paffinity_darwin_module.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include -I../../../../ompi/include -I../../../../
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -D_REENTRANT -
</span><br>
<span class="quotelev1">&gt; O -DNDEBUG -c paffinity_darwin_module.c -o paffinity_darwin_module.o
</span><br>
<span class="quotelev1">&gt; PGC-F-0043-Redefinition of symbol, _OSSwapInt16 (/usr/include/libkern/
</span><br>
<span class="quotelev1">&gt; machine/OSByteOrder.h: 51)
</span><br>
<span class="quotelev1">&gt; PGC/x86 OSX 8.0-4: compilation aborted
</span><br>
<span class="quotelev1">&gt; make[2]: *** [paffinity_darwin_module.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not invoke any options for configure.  Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
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
<li><strong>Next message:</strong> <a href="8524.php">Ricardo Fernández-Perea: "[OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>Previous message:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>In reply to:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
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
