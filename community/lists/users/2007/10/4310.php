<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:20:13 2007" -->
<!-- isoreceived="20071025002013" -->
<!-- sent="Wed, 24 Oct 2007 20:19:55 -0400" -->
<!-- isosent="20071025001955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.2.4 cross-compilation problem" -->
<!-- id="2870ECE4-45C1-4412-A583-8C275274285D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710151503200.5505_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 20:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that's fun; I'm not sure why that would happen.  Can you send  
<br>
all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Oct 15, 2007, at 5:36 PM, Jorge Parra wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to cross-compile Open-mpi 1.2.4 for an embedded system.  
</span><br>
<span class="quotelev1">&gt; The development system is a i686 Linux and the target system is a  
</span><br>
<span class="quotelev1">&gt; ppc 405 based. When trying &quot;make all&quot; I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /opt/powerpc-405- 
</span><br>
<span class="quotelev1">&gt; linux/bin/powerpc-405-linux-gnu-gcc  -O3 -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread  -export-dynamic   -o  
</span><br>
<span class="quotelev1">&gt; opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/powerpc-405-linux/bin/powerpc-405-linux-gnu-gcc  
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o  
</span><br>
<span class="quotelev1">&gt; opal_wrapper opal_wrapper.o -Wl,--export-dynamic  ../../../ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.a -ldl -lnsl -lutil -lm -pthread
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0xbe):  
</span><br>
<span class="quotelev1">&gt; In function `lt_dlinit':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.text+0xc2):  
</span><br>
<span class="quotelev1">&gt; In function `lt_dlinit':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/opt/openmpi-1.2.4/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/opt/openmpi-1.2.4/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Older versions of opem-mpi have been succesfully compiled in the  
</span><br>
<span class="quotelev1">&gt; same development system. I am attaching to this email all the  
</span><br>
<span class="quotelev1">&gt; output and the configuration information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help will greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jorge
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
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
<li><strong>Next message:</strong> <a href="4311.php">Tim Prins: "Re: [OMPI users] Syntax error in remote rsh execution"</a>
<li><strong>Previous message:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>In reply to:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
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
