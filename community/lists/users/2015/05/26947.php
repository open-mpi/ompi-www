<?
$subject_val = "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 15:38:08 2015" -->
<!-- isoreceived="20150526193808" -->
<!-- sent="Tue, 26 May 2015 19:38:05 +0000" -->
<!-- isosent="20150526193805" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag" -->
<!-- id="14BA1E6F-6BFD-4C2C-BE43-18CEE6507045_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyatUUA9ciZYh=d6J3pzyjyZVdMakPfh7v=0YnNNgAChcA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 15:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26953.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26953.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unless the compiler can find the MXM headers/libraries without the --with-mxm value.  E.g.,:
<br>
<p>./configure CPPFLAGS=-I/path/to/mxm/headers LDFLAGS=-L/path/to/mxm/libs --with-mxm ...
<br>
<p>(or otherwise sets the compiler/linker default search paths, etc.)
<br>
<p>It seems like however it is happening, somehow the variable is empty, and you just end up appending &quot;-L&quot; instead of &quot;-L/something&quot;.  So why not just check to ensure that the variable is not empty?
<br>
<p><p><p><span class="quotelev1">&gt; On May 26, 2015, at 3:27 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in that case, OPAL_CHECK_PACKAGE will disqualify mxm because it will not find mxm_api.h header file in _OPAL_CHECK_PACKAGE_HEADER macro.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L43">https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L43</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from config.log generated after &quot;./configure --with-mxm&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:263059: checking --with-mxm value
</span><br>
<span class="quotelev1">&gt; configure:263062: result: simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; configure:263097: checking --with-mxm-libdir value
</span><br>
<span class="quotelev1">&gt; configure:263100: result: simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; configure:263197: checking mxm/api/mxm_api.h usability
</span><br>
<span class="quotelev1">&gt; configure:263197: gcc -std=gnu99 -c -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-implicit-function-declaration -finline-functions -fno-strict-aliasing -pthread   -I/labhome/miked/workspace/git/mellanox-hpc/ompi-release/opal/mca/hwloc/hwloc191/hwloc/include -I/labhome/miked/workspace/git/mellanox-hpc/ompi-release/opal/mca/event/libevent2022/libevent -I/labhome/miked/workspace/git/mellanox-hpc/ompi-release/opal/mca/event/libevent2022/libevent/include conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c:775:29: error: mxm/api/mxm_api.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2015 at 10:11 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mike --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think that's right.  If you just pass &quot;--with-mxm&quot;, then $with_mxm will equal &quot;yes&quot;, and therefore neither of those two blocks of code are executed.  Hence, ompi_check_mxm_libdir will be empty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 26, 2015, at 1:28 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Jeff!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but in this line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L36">https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L36</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_check_mxm_libdir gets value if with_mxm was passed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 26, 2015 at 6:59 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L41">https://github.com/open-mpi/ompi/blob/master/config/ompi_check_mxm.m4#L41</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; doesn't check to see if $ompi_check_mxm_libdir is empty.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 26, 2015, at 11:50 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; David,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you please send me your config.log file?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Looking into config/ompi_check_mxm.m4 macro I don`t understand how it could happen.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks a lot.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, May 26, 2015 at 6:41 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello David,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for info and patch - will fix ompi configure logic with your patch.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mxm can be installed in the system and user spaces - both are valid and supported logic.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; M
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, May 26, 2015 at 5:50 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello Mike,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This particular instance of mxm was installed using rpms that were re-rolled by our admins. I'm not 100% sure where they got them (HPCx or somewhere else). I myself am not using HPCx. Is there any particular reason why mxm shouldn't be in system space? If there is, I'll share it with our admins and try to get the install location corrected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As for what is causing the extra -L, it does look like an empty variable is used without checking that it is empty in configure. Line 246117 in the configure script provided by the openmpi-1.8.5.tar.bz2 tarball has this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; By invoking configure with '/bin/sh -x ./configure ...' and changing PS4 to output line numbers, I saw that line 246117 was setting ompi_check_mxm_extra_libs to just &quot;-L&quot;. It turns out that configure does this in three separate locations. I put a check around all three instances like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if test ! -z &quot;$ompi_check_mxm_extra_libs&quot;; then
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And the spurious '-L' disappeared from the linking commands and make completed fine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, it looks like there are two solutions: move the install location of mxm to not be in system-space or modify configure. Which one would be the better one for me to pursue?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; David
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 05/23/2015 12:05 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; How mxm was installed? by copying?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The rpm based installation places mxm into /opt/mellanox/mxm and not into /usr/lib64/libmxm.so.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Do you use HPCx (pack of OMPI and MXM and FCA)?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; You can download HPCX, extract it anywhere and compile OMPI pointing to mxm location under HPCX.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Also, HPCx contains rpms for mxm and fca.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; M
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Sat, May 23, 2015 at 1:07 AM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I'm getting a spurious '-L' flag when I have mxm installed in system-space (/usr/lib64/libmxm.so) which is causing an error at link time during make:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...output snipped...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99 -O3 -DNDEBUG -I/opt/panfs/include -finline-functions -fno-strict-aliasing -pthread -module -avoid-version   -o libmca_mtl_mxm.la  mtl_mxm.lo mtl_mxm_cancel.lo mtl_mxm_component.lo mtl_mxm_endpoint.lo mtl_mxm_probe.lo mtl_mxm_recv.lo mtl_mxm_send.lo -lmxm -L -lrt -lm -lutil
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; libtool: link: require no space between `-L' and `-lrt'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make[2]: *** [libmca_mtl_mxm.la] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make[2]: Leaving directory `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make[1]: Leaving directory `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi'
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; If I I use --with-mxm=no, then this error doesn't occur (as expected as the mxm component isn't touched). Has anyone run in to this before?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Here is my configure line:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ./configure --disable-silent-rules --with-platform=contrib/platform/lanl/toss/optimized-panasas --prefix=...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I wonder if there is an empty variable that should contain the directory libmxm is in somewhere in configure since no directory is passed to --with-mxm which is then paired with a &quot;-L&quot;. I think I'll go through the configure script while waiting to see if anyone else has run in to this.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thank you for any and all help,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David Shrader
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26904.php">http://www.open-mpi.org/community/lists/users/2015/05/26904.php</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Kind Regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; M.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26905.php">http://www.open-mpi.org/community/lists/users/2015/05/26905.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; David Shrader
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Los Alamos National Lab
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Email: dshrader &lt;at&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lanl.gov
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26936.php">http://www.open-mpi.org/community/lists/users/2015/05/26936.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; M.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; M.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26938.php">http://www.open-mpi.org/community/lists/users/2015/05/26938.php</a>
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
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26940.php">http://www.open-mpi.org/community/lists/users/2015/05/26940.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26941.php">http://www.open-mpi.org/community/lists/users/2015/05/26941.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26944.php">http://www.open-mpi.org/community/lists/users/2015/05/26944.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26946.php">http://www.open-mpi.org/community/lists/users/2015/05/26946.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26948.php">Ralph Castain: "Re: [OMPI users] Running HPL on RPi cluster, seems like MPI is somehow not configured properly since it work with 1 node but not more"</a>
<li><strong>Previous message:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26946.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26953.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26953.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
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
