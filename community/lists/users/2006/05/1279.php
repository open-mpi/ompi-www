<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 17:34:59 2006" -->
<!-- isoreceived="20060524213459" -->
<!-- sent="Thu, 25 May 2006 15:34:44 -0400" -->
<!-- isosent="20060525193444" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with myirnet support on PPC" -->
<!-- id="DD35E221-A18A-424C-94CF-03503FBC0E4B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453E68CF-605C-4450-A6BE-87F3B4245B21_at_umich.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 15:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>In reply to:</strong> <a href="1277.php">Brock Palen: "[OMPI users] Problems with myirnet support on PPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Reply:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's kind of funny ... Look like the PTHREAD_CANCEL was missing  
<br>
from the pthread.h on most of the Linux distributions until the  
<br>
beginning of 2002 (<a href="http://sourceware.org/ml/newlib/2002/">http://sourceware.org/ml/newlib/2002/</a> 
<br>
msg00538.html). And it look like it is still missing from the MAC OS  
<br>
X 10.3.9 pthread.h (<a href="http://lists.apple.com/archives/darwin">http://lists.apple.com/archives/darwin</a>- 
<br>
development/2004/Feb/msg00150.html). Anyway, we can remove it as the  
<br>
ptl are not used in the 1.0.2 release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 24, 2006, at 5:10 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Im getting the following error when trying to build OMPI on OSX
</span><br>
<span class="quotelev1">&gt; 10.3.9  with myrinet support,  the libs are in
</span><br>
<span class="quotelev1">&gt; /opt/gm/lib
</span><br>
<span class="quotelev1">&gt; Includes:
</span><br>
<span class="quotelev1">&gt; /opt/gm/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bellow is my configure line and the error:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/software/openmpi-1.0.2 --with-tm=/home/
</span><br>
<span class="quotelev1">&gt; software/torque-2.1.0p0 --with-gm=/opt/gm FC=/opt/ibmcmp/xlf/8.1/bin/
</span><br>
<span class="quotelev1">&gt; xlf90 F77=/opt/ibmcmp/xlf/8.1/bin/xlf CPPFLAGS=-I/opt/gm/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../
</span><br>
<span class="quotelev1">&gt; include -I/opt/gm/include -I../../../../include -I../../../.. -
</span><br>
<span class="quotelev1">&gt; I../../../.. -I../../../../include -I../../../../opal -I../../../../
</span><br>
<span class="quotelev1">&gt; orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 -DNDEBUG -
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -MT ptl_gm.lo -MD -MP -MF .deps/ptl_gm.Tpo -c
</span><br>
<span class="quotelev1">&gt; ptl_gm.c  -fno-common -DPIC -o .libs/ptl_gm.o
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../
</span><br>
<span class="quotelev1">&gt; include -I/opt/gm/include -I../../../../include -I../../../.. -
</span><br>
<span class="quotelev1">&gt; I../../../.. -I../../../../include -I../../../../opal -I../../../../
</span><br>
<span class="quotelev1">&gt; orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 -DNDEBUG -
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -MT ptl_gm_priv.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev1">&gt; ptl_gm_priv.Tpo -c ptl_gm_priv.c  -fno-common -DPIC -o .libs/
</span><br>
<span class="quotelev1">&gt; ptl_gm_priv.o
</span><br>
<span class="quotelev1">&gt; ptl_gm_component.c: In function `mca_ptl_gm_thread_progress':
</span><br>
<span class="quotelev1">&gt; ptl_gm_component.c:249: error: `PTHREAD_CANCELED' undeclared (first
</span><br>
<span class="quotelev1">&gt; use in this function)
</span><br>
<span class="quotelev1">&gt; ptl_gm_component.c:249: error: (Each undeclared identifier is
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; ptl_gm_component.c:249: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[4]: *** [ptl_gm_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could this be related to the version of the gm package we have
</span><br>
<span class="quotelev1">&gt; installed?  Any insight would be helpful.
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1280.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>Previous message:</strong> <a href="1278.php">Paul: "Re: [OMPI users] Compile issue on ppc64"</a>
<li><strong>In reply to:</strong> <a href="1277.php">Brock Palen: "[OMPI users] Problems with myirnet support on PPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Reply:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
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
