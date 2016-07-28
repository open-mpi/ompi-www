<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 13:12:18 2006" -->
<!-- isoreceived="20060525171218" -->
<!-- sent="Fri, 26 May 2006 11:12:03 -0400" -->
<!-- isosent="20060526151203" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with myirnet support on PPC" -->
<!-- id="E3A0D259-5A0A-4B01-9921-E4530696659B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="38D9DBDE-A75A-406D-A7AD-6EB223A07C87_at_umich.edu" -->
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
<strong>Date:</strong> 2006-05-26 11:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1298.php">Brock Palen: "[OMPI users] multicast and broadcast"</a>
<li><strong>Previous message:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The commit is quite simple. You can simply modify the ompi/mca/ptl/gm/ 
<br>
ptl_gm_component.c at line 249 and replace the PTHREAD_CANCELED with  
<br>
0 and your problem will be solved. This fix was committed yesterday  
<br>
it will be on the next 1.0.3 release, or you can grab it from the  
<br>
nightly build section on our website.
<br>
<p>There is another way, but this approach will completely disable the  
<br>
GM support. You can specify --without-gm on the configure line.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 25, 2006, at 12:58 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to disable pthreads when building with gm?  i can
</span><br>
<span class="quotelev1">&gt; build with just tcp just fine.
</span><br>
<span class="quotelev1">&gt; Brock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 25, 2006, at 3:34 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's kind of funny ... Look like the PTHREAD_CANCEL was missing
</span><br>
<span class="quotelev2">&gt;&gt; from the pthread.h on most of the Linux distributions until the
</span><br>
<span class="quotelev2">&gt;&gt; beginning of 2002 (<a href="http://sourceware.org/ml/newlib/2002/">http://sourceware.org/ml/newlib/2002/</a>
</span><br>
<span class="quotelev2">&gt;&gt; msg00538.html). And it look like it is still missing from the MAC OS
</span><br>
<span class="quotelev2">&gt;&gt; X 10.3.9 pthread.h (<a href="http://lists.apple.com/archives/darwin">http://lists.apple.com/archives/darwin</a>-
</span><br>
<span class="quotelev2">&gt;&gt; development/2004/Feb/msg00150.html). Anyway, we can remove it as the
</span><br>
<span class="quotelev2">&gt;&gt; ptl are not used in the 1.0.2 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2006, at 5:10 PM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Im getting the following error when trying to build OMPI on OSX
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.3.9  with myrinet support,  the libs are in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/gm/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Includes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/gm/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bellow is my configure line and the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/home/software/openmpi-1.0.2 --with-tm=/home/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; software/torque-2.1.0p0 --with-gm=/opt/gm FC=/opt/ibmcmp/xlf/8.1/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xlf90 F77=/opt/ibmcmp/xlf/8.1/bin/xlf CPPFLAGS=-I/opt/gm/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include -I/opt/gm/include -I../../../../include -I../../../.. -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../../.. -I../../../../include -I../../../../opal -I../../../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -MT ptl_gm.lo -MD -MP -MF .deps/ptl_gm.Tpo -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm.c  -fno-common -DPIC -o .libs/ptl_gm.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include -I/opt/gm/include -I../../../../include -I../../../.. -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../../.. -I../../../../include -I../../../../opal -I../../../../
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte -I../../../../ompi -I/opt/gm/include -D_REENTRANT -O3 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DNDEBUG -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -MT ptl_gm_priv.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_priv.Tpo -c ptl_gm_priv.c  -fno-common -DPIC -o .libs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_priv.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_component.c: In function `mca_ptl_gm_thread_progress':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_component.c:249: error: `PTHREAD_CANCELED' undeclared (first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_component.c:249: error: (Each undeclared identifier is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reported only once
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptl_gm_component.c:249: error: for each function it appears in.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [ptl_gm_component.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could this be related to the version of the gm package we have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed?  Any insight would be helpful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1298.php">Brock Palen: "[OMPI users] multicast and broadcast"</a>
<li><strong>Previous message:</strong> <a href="1296.php">Tom Rosmond: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
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
