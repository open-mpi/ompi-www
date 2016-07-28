<?
$subject_val = "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 13:28:12 2015" -->
<!-- isoreceived="20150526172812" -->
<!-- sent="Tue, 26 May 2015 20:28:10 +0300" -->
<!-- isosent="20150526172810" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag" -->
<!-- id="CAAO1KyaivQKKKSBUx3mpsJeJXA1o1UD2j9eUgTjk-SKGVw5rGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0AC24CD8-6B05-44B3-A0B6-8A10D9934EB8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 13:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff!
<br>
<p>but in this line:
<br>
<p><a href="https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L36">https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L36</a>
<br>
<p>ompi_check_mxm_libdir gets value if with_mxm was passed
<br>
<p><p><p>On Tue, May 26, 2015 at 6:59 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; This line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L41">https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L41</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; doesn't check to see if $ompi_check_mxm_libdir is empty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 26, 2015, at 11:50 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David,
</span><br>
<span class="quotelev2">&gt; &gt; Could you please send me your config.log file?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looking into config/ompi_check_mxm.m4 macro I don`t understand how it
</span><br>
<span class="quotelev1">&gt; could happen.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 26, 2015 at 6:41 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello David,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for info and patch - will fix ompi configure logic with your
</span><br>
<span class="quotelev1">&gt; patch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mxm can be installed in the system and user spaces - both are valid and
</span><br>
<span class="quotelev1">&gt; supported logic.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; M
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 26, 2015 at 5:50 PM, David Shrader &lt;dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Mike,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This particular instance of mxm was installed using rpms that were
</span><br>
<span class="quotelev1">&gt; re-rolled by our admins. I'm not 100% sure where they got them (HPCx or
</span><br>
<span class="quotelev1">&gt; somewhere else). I myself am not using HPCx. Is there any particular reason
</span><br>
<span class="quotelev1">&gt; why mxm shouldn't be in system space? If there is, I'll share it with our
</span><br>
<span class="quotelev1">&gt; admins and try to get the install location corrected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As for what is causing the extra -L, it does look like an empty variable
</span><br>
<span class="quotelev1">&gt; is used without checking that it is empty in configure. Line 246117 in the
</span><br>
<span class="quotelev1">&gt; configure script provided by the openmpi-1.8.5.tar.bz2 tarball has this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; By invoking configure with '/bin/sh -x ./configure ...' and changing PS4
</span><br>
<span class="quotelev1">&gt; to output line numbers, I saw that line 246117 was setting
</span><br>
<span class="quotelev1">&gt; ompi_check_mxm_extra_libs to just &quot;-L&quot;. It turns out that configure does
</span><br>
<span class="quotelev1">&gt; this in three separate locations. I put a check around all three instances
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if test ! -z &quot;$ompi_check_mxm_extra_libs&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt;   ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev2">&gt; &gt; fi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And the spurious '-L' disappeared from the linking commands and make
</span><br>
<span class="quotelev1">&gt; completed fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, it looks like there are two solutions: move the install location of
</span><br>
<span class="quotelev1">&gt; mxm to not be in system-space or modify configure. Which one would be the
</span><br>
<span class="quotelev1">&gt; better one for me to pursue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 05/23/2015 12:05 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How mxm was installed? by copying?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The rpm based installation places mxm into /opt/mellanox/mxm and not
</span><br>
<span class="quotelev1">&gt; into /usr/lib64/libmxm.so.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you use HPCx (pack of OMPI and MXM and FCA)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can download HPCX, extract it anywhere and compile OMPI pointing to
</span><br>
<span class="quotelev1">&gt; mxm location under HPCX.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, HPCx contains rpms for mxm and fca.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Sat, May 23, 2015 at 1:07 AM, David Shrader &lt;dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm getting a spurious '-L' flag when I have mxm installed in
</span><br>
<span class="quotelev1">&gt; system-space (/usr/lib64/libmxm.so) which is causing an error at link time
</span><br>
<span class="quotelev1">&gt; during make:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...output snipped...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99 -O3
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -I/opt/panfs/include -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthread -module -avoid-version   -o libmca_mtl_mxm.la  mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt; mtl_mxm_cancel.lo mtl_mxm_component.lo mtl_mxm_endpoint.lo mtl_mxm_probe.lo
</span><br>
<span class="quotelev1">&gt; mtl_mxm_recv.lo mtl_mxm_send.lo -lmxm -L -lrt -lm -lutil
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtool: link: require no space between `-L' and `-lrt'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [libmca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I I use --with-mxm=no, then this error doesn't occur (as expected as
</span><br>
<span class="quotelev1">&gt; the mxm component isn't touched). Has anyone run in to this before?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is my configure line:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --disable-silent-rules
</span><br>
<span class="quotelev1">&gt; --with-platform=contrib/platform/lanl/toss/optimized-panasas --prefix=...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wonder if there is an empty variable that should contain the
</span><br>
<span class="quotelev1">&gt; directory libmxm is in somewhere in configure since no directory is passed
</span><br>
<span class="quotelev1">&gt; to --with-mxm which is then paired with a &quot;-L&quot;. I think I'll go through the
</span><br>
<span class="quotelev1">&gt; configure script while waiting to see if anyone else has run in to this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you for any and all help,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; David Shrader
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26904.php">http://www.open-mpi.org/community/lists/users/2015/05/26904.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26905.php">http://www.open-mpi.org/community/lists/users/2015/05/26905.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David Shrader
</span><br>
<span class="quotelev2">&gt; &gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt; &gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev2">&gt; &gt; lanl.gov
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26936.php">http://www.open-mpi.org/community/lists/users/2015/05/26936.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; M.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; M.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26938.php">http://www.open-mpi.org/community/lists/users/2015/05/26938.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26940.php">http://www.open-mpi.org/community/lists/users/2015/05/26940.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26942.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
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
