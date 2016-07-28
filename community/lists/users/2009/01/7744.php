<?
$subject_val = "Re: [OMPI users] error opal/libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 17:19:38 2009" -->
<!-- isoreceived="20090120221938" -->
<!-- sent="Tue, 20 Jan 2009 17:19:32 -0500" -->
<!-- isosent="20090120221932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error opal/libltdl" -->
<!-- id="2C08F069-FB49-4582-B780-A4C31F716AD1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5b2ac7ea0901200508o3f83fda1t1ef2c51de2e35e0d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error opal/libltdl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 17:19:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 20, 2009, at 8:08 AM, nilesh barange wrote:
<br>
<p><span class="quotelev1">&gt; Hi...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install openmpi-1.2.8 on REHL-4.
</span><br>
<span class="quotelev1">&gt; I am getting following error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clususer_at_vlsiserver openmpi-1.2.8]$ make all install
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/clususer/openmpi-1.2.8/config'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/config'
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/clususer/openmpi-1.2.8/contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/contrib'
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/clususer/openmpi-1.2.8/opal'
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/clususer/openmpi-1.2.8/opal/ 
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/clususer/openmpi-1.2.8/opal/ 
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/include'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/include'
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/clususer/openmpi-1.2.8/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/clususer/openmpi-1.2.8/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; /bin/sh ./libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG  -module - 
</span><br>
<span class="quotelev1">&gt; avoid-version  -o dlopen.la  dlopen.lo -ldl -ldl -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: false cru .libs/dlopen.a .libs/dlopen.o
</span><br>
<span class="quotelev1">&gt; make[3]: *** [dlopen.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/clususer/openmpi-1.2.8/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/clususer/openmpi-1.2.8/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [clususer_at_vlsiserver openmpi-1.2.8]$
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7745.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7743.php">Jeff Squyres: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>In reply to:</strong> <a href="7736.php">nilesh barange: "[OMPI users] error opal/libltdl"</a>
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
