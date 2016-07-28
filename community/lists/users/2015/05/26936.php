<?
$subject_val = "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 10:50:17 2015" -->
<!-- isoreceived="20150526145017" -->
<!-- sent="Tue, 26 May 2015 08:50:15 -0600" -->
<!-- isosent="20150526145015" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag" -->
<!-- id="55648827.6020401_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAO1KyYpF8LBift9Ga=g+nfXr=4L2S8Y8nFvk5nGmGUzVDPgDg_at_mail.gmail.com" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 10:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mike,
<br>
<p>This particular instance of mxm was installed using rpms that were 
<br>
re-rolled by our admins. I'm not 100% sure where they got them (HPCx or 
<br>
somewhere else). I myself am not using HPCx. Is there any particular 
<br>
reason why mxm shouldn't be in system space? If there is, I'll share it 
<br>
with our admins and try to get the install location corrected.
<br>
<p>As for what is causing the extra -L, it does look like an empty variable 
<br>
is used without checking that it is empty in configure. Line 246117 in 
<br>
the configure script provided by the openmpi-1.8.5.tar.bz2 tarball has this:
<br>
<p>ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
<br>
<p>By invoking configure with '/bin/sh -x ./configure ...' and changing PS4 
<br>
to output line numbers, I saw that line 246117 was setting 
<br>
ompi_check_mxm_extra_libs to just &quot;-L&quot;. It turns out that configure does 
<br>
this in three separate locations. I put a check around all three 
<br>
instances like this:
<br>
<p>if test ! -z &quot;$ompi_check_mxm_extra_libs&quot;; then
<br>
&nbsp;&nbsp;&nbsp;ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
<br>
fi
<br>
<p>And the spurious '-L' disappeared from the linking commands and make 
<br>
completed fine.
<br>
<p>So, it looks like there are two solutions: move the install location of 
<br>
mxm to not be in system-space or modify configure. Which one would be 
<br>
the better one for me to pursue?
<br>
<p>Thanks,
<br>
David
<br>
<p>On 05/23/2015 12:05 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How mxm was installed? by copying?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rpm based installation places mxm into /opt/mellanox/mxm and not 
</span><br>
<span class="quotelev1">&gt; into /usr/lib64/libmxm.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you use HPCx (pack of OMPI and MXM and FCA)?
</span><br>
<span class="quotelev1">&gt; You can download HPCX, extract it anywhere and compile OMPI pointing 
</span><br>
<span class="quotelev1">&gt; to mxm location under HPCX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, HPCx contains rpms for mxm and fca.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 23, 2015 at 1:07 AM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm getting a spurious '-L' flag when I have mxm installed in
</span><br>
<span class="quotelev1">&gt;     system-space (/usr/lib64/libmxm.so) which is causing an error at
</span><br>
<span class="quotelev1">&gt;     link time during make:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ...output snipped...
</span><br>
<span class="quotelev1">&gt;     /bin/sh ../../../../libtool  --tag=CC   --mode=link gcc -std=gnu99
</span><br>
<span class="quotelev1">&gt;     -O3 -DNDEBUG -I/opt/panfs/include -finline-functions
</span><br>
<span class="quotelev1">&gt;     -fno-strict-aliasing -pthread -module -avoid-version   -o
</span><br>
<span class="quotelev1">&gt;     libmca_mtl_mxm.la &lt;<a href="http://libmca_mtl_mxm.la">http://libmca_mtl_mxm.la</a>&gt; mtl_mxm.lo
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_cancel.lo mtl_mxm_component.lo mtl_mxm_endpoint.lo
</span><br>
<span class="quotelev1">&gt;     mtl_mxm_probe.lo mtl_mxm_recv.lo mtl_mxm_send.lo -lmxm -L -lrt -lm
</span><br>
<span class="quotelev1">&gt;     -lutil
</span><br>
<span class="quotelev1">&gt;     libtool: link: require no space between `-L' and `-lrt'
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [libmca_mtl_mxm.la &lt;<a href="http://libmca_mtl_mxm.la">http://libmca_mtl_mxm.la</a>&gt;] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev1">&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi'
</span><br>
<span class="quotelev1">&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If I I use --with-mxm=no, then this error doesn't occur (as
</span><br>
<span class="quotelev1">&gt;     expected as the mxm component isn't touched). Has anyone run in to
</span><br>
<span class="quotelev1">&gt;     this before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here is my configure line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --disable-silent-rules
</span><br>
<span class="quotelev1">&gt;     --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev1">&gt;     --prefix=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I wonder if there is an empty variable that should contain the
</span><br>
<span class="quotelev1">&gt;     directory libmxm is in somewhere in configure since no directory
</span><br>
<span class="quotelev1">&gt;     is passed to --with-mxm which is then paired with a &quot;-L&quot;. I think
</span><br>
<span class="quotelev1">&gt;     I'll go through the configure script while waiting to see if
</span><br>
<span class="quotelev1">&gt;     anyone else has run in to this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you for any and all help,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     David Shrader
</span><br>
<span class="quotelev1">&gt;     HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;     Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;     Email: dshrader &lt;at&gt; lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26904.php">http://www.open-mpi.org/community/lists/users/2015/05/26904.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26905.php">http://www.open-mpi.org/community/lists/users/2015/05/26905.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-3 High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26905.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Reply:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
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
