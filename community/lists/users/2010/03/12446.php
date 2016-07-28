<?
$subject_val = "Re: [OMPI users] LAM: static";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 08:44:20 2010" -->
<!-- isoreceived="20100329124420" -->
<!-- sent="Mon, 29 Mar 2010 08:44:13 -0400" -->
<!-- isosent="20100329124413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAM: static" -->
<!-- id="15E90A4C-950B-440A-9FDD-A6CBB30462B2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="413552.355265.1269865313492.JavaMail.root_at_frontal2" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAM: static<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 08:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
<li><strong>Previous message:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moving to the Open MPI user's mailing list...)
<br>
<p>Can you send all the information listed here (please compress!):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 29, 2010, at 8:21 AM, Philippe GOURET wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The make failed with Open MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: entrant dans le r&#233;pertoire &#171; /home/philippe/tmp/openmpi-1.4.1/opal/tools/wrappers &#187;
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt;         gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../.. -static   -O3 -DNDEBUG -static -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;         mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -static -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic -static  -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden -o opal_wrapper opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.a -ldl -lnsl -lutil -lm -pthread
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o): In function `opal_mem_free_ptmalloc2_munmap':
</span><br>
<span class="quotelev1">&gt; opal_ptmalloc2_munmap.c:(.text+0x42): undefined reference to `__munmap'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.a(opal_ptmalloc2_munmap.o): In function `munmap':
</span><br>
<span class="quotelev1">&gt; opal_ptmalloc2_munmap.c:(.text+0x8d): undefined reference to `__munmap'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Erreur 1
</span><br>
<span class="quotelev1">&gt; make[2]: quittant le r&#233;pertoire &#171; /home/philippe/tmp/openmpi-1.4.1/opal/tools/wrappers &#187;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Erreur 1
</span><br>
<span class="quotelev1">&gt; make[1]: quittant le r&#233;pertoire &#171; /home/philippe/tmp/openmpi-1.4.1/opal &#187;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Erreur 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know why ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover like with lam, the gcc last call doesn't have the &quot;-static&quot; option, but &quot;libtool&quot; has it !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Mon Mar 29 14:01:50 CEST 2010
</span><br>
<span class="quotelev2">&gt; &gt; To: Philippe GOURET &lt;Philippe.Gouret_at_[hidden]&gt;, General LAM/MPI mailing list &lt;lam_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: LAM: static
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It could be that the Libtool included in LAM/MPI is so old that it is not passing -static through properly...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible for you to upgrade to Open MPI?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 29, 2010, at 7:42 AM, Philippe GOURET wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to deploy a 32-bit version of lam-7.1.4 on a 64-bit computer.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So i would like to build lam-7.1.4 in a static way. I just added the &quot;-static&quot;  option to some environment variables: CFLAGS, LDFLAGS, CXXLDFLAGS, CXXFLAGS, but when i verify the built runtimes with ldd command i always see:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         linux-gate.so.1 =&gt;  (0xffffe000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         libdl.so.2 =&gt; /lib/libdl.so.2 (0xb7f6e000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         libutil.so.1 =&gt; /lib/libutil.so.1 (0xb7f6a000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         libpthread.so.0 =&gt; /lib/i686/libpthread.so.0 (0xb7f53000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         libc.so.6 =&gt; /lib/i686/libc.so.6 (0xb7e13000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         /lib/ld-linux.so.2 (0xb7f89000)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If i look to the &quot;make&quot; trace, for example for lamboot runtime, i see:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Making all in lamboot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: entrant dans le r&#233;pertoire &#171; /home/philippe/tmp/lam-7.1.4/tools/lamboot &#187;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if gcc -DHAVE_CONFIG_H -I. -I. -I../../share/include  -DLAM_SYSCONFDIR=&quot;\&quot;/usr/local/etc\&quot;&quot; -DBOOT_MODULES=&quot;\&quot;globus rsh slurm\&quot;&quot; -DRPI_MODULES=&quot;\&quot;crtcp lamd sysv tcp usysv\&quot;&quot; -DCOLL_MODULES=&quot;\&quot;lam_basic shmem smp\&quot;&quot; -I../../share/include -static -DLAM_BUILDING=1   -O3 -static -pthread -MT lamboot.o -MD -MP -MF &quot;.deps/lamboot.Tpo&quot; -c -o lamboot.o lamboot.c; \
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         then mv -f &quot;.deps/lamboot.Tpo&quot; &quot;.deps/lamboot.Po&quot;; else rm -f &quot;.deps/lamboot.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /bin/sh ../../libtool --tag=CC --mode=link gcc  -O3 -static -pthread  -static  -o lamboot  lamboot.o ../../share/liblam/liblam.la  -lutil
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mkdir .libs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; gcc -O3 -pthread -o lamboot lamboot.o  ../../share/liblam/.libs/liblam.a -ldl -lutil
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make[2]: quittant le r&#233;pertoire &#171; /home/philippe/tmp/lam-7.1.4/tools/lamboot &#187;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Did i miss something ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks by advance
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Philippe Gouret
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This list is archived at <a href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; This list is archived at <a href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; This list is archived at <a href="http://www.lam-mpi.org/MailArchives/lam/">http://www.lam-mpi.org/MailArchives/lam/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12447.php">Philippe GOURET: "[OMPI users] configuration and compilation outputs"</a>
<li><strong>Previous message:</strong> <a href="12445.php">sunita_at_[hidden]: "Re: [OMPI users] mpi.h file is missing in openmpi"</a>
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
