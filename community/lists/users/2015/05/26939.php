<?
$subject_val = "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 11:54:35 2015" -->
<!-- isoreceived="20150526155435" -->
<!-- sent="Tue, 26 May 2015 09:54:33 -0600" -->
<!-- isosent="20150526155433" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag" -->
<!-- id="55649739.5060707_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAO1KyZGugSxRA7G-CNAfbNLB9zGPrAMV8E9cEAA=e9EqOwRyw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-26 11:54:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26938.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mike,
<br>
<p>I'm glad that I could be of help.
<br>
<p>Just as an FYI, right now our admins are still hosting the fca libraries 
<br>
in /opt, but they would like to have it in system-space just as they 
<br>
have done with mxm. I haven't worked my way through all of the 
<br>
fca-related logic in configure yet, so I don't know if putting the fca 
<br>
libraries in system-space will expose any issues as of yet. It might be 
<br>
a good idea to check out that logic while looking at the mxm-related logic.
<br>
<p>Thank you again!
<br>
David
<br>
<p>On 05/26/2015 09:41 AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hello David,
</span><br>
<span class="quotelev1">&gt; Thanks for info and patch - will fix ompi configure logic with your patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mxm can be installed in the system and user spaces - both are valid 
</span><br>
<span class="quotelev1">&gt; and supported logic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2015 at 5:50 PM, David Shrader &lt;dshrader_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     This particular instance of mxm was installed using rpms that were
</span><br>
<span class="quotelev1">&gt;     re-rolled by our admins. I'm not 100% sure where they got them
</span><br>
<span class="quotelev1">&gt;     (HPCx or somewhere else). I myself am not using HPCx. Is there any
</span><br>
<span class="quotelev1">&gt;     particular reason why mxm shouldn't be in system space? If there
</span><br>
<span class="quotelev1">&gt;     is, I'll share it with our admins and try to get the install
</span><br>
<span class="quotelev1">&gt;     location corrected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As for what is causing the extra -L, it does look like an empty
</span><br>
<span class="quotelev1">&gt;     variable is used without checking that it is empty in configure.
</span><br>
<span class="quotelev1">&gt;     Line 246117 in the configure script provided by the
</span><br>
<span class="quotelev1">&gt;     openmpi-1.8.5.tar.bz2 tarball has this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     By invoking configure with '/bin/sh -x ./configure ...' and
</span><br>
<span class="quotelev1">&gt;     changing PS4 to output line numbers, I saw that line 246117 was
</span><br>
<span class="quotelev1">&gt;     setting ompi_check_mxm_extra_libs to just &quot;-L&quot;. It turns out that
</span><br>
<span class="quotelev1">&gt;     configure does this in three separate locations. I put a check
</span><br>
<span class="quotelev1">&gt;     around all three instances like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if test ! -z &quot;$ompi_check_mxm_extra_libs&quot;; then
</span><br>
<span class="quotelev1">&gt;       ompi_check_mxm_extra_libs=&quot;-L$ompi_check_mxm_libdir&quot;
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     And the spurious '-L' disappeared from the linking commands and
</span><br>
<span class="quotelev1">&gt;     make completed fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So, it looks like there are two solutions: move the install
</span><br>
<span class="quotelev1">&gt;     location of mxm to not be in system-space or modify configure.
</span><br>
<span class="quotelev1">&gt;     Which one would be the better one for me to pursue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/23/2015 12:05 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     How mxm was installed? by copying?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The rpm based installation places mxm into /opt/mellanox/mxm and
</span><br>
<span class="quotelev2">&gt;&gt;     not into /usr/lib64/libmxm.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Do you use HPCx (pack of OMPI and MXM and FCA)?
</span><br>
<span class="quotelev2">&gt;&gt;     You can download HPCX, extract it anywhere and compile OMPI
</span><br>
<span class="quotelev2">&gt;&gt;     pointing to mxm location under HPCX.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Also, HPCx contains rpms for mxm and fca.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     M
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Sat, May 23, 2015 at 1:07 AM, David Shrader &lt;dshrader_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm getting a spurious '-L' flag when I have mxm installed in
</span><br>
<span class="quotelev2">&gt;&gt;         system-space (/usr/lib64/libmxm.so) which is causing an error
</span><br>
<span class="quotelev2">&gt;&gt;         at link time during make:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt;         /bin/sh ../../../../libtool  --tag=CC  --mode=link gcc
</span><br>
<span class="quotelev2">&gt;&gt;         -std=gnu99 -O3 -DNDEBUG -I/opt/panfs/include
</span><br>
<span class="quotelev2">&gt;&gt;         -finline-functions -fno-strict-aliasing -pthread -module
</span><br>
<span class="quotelev2">&gt;&gt;         -avoid-version   -o libmca_mtl_mxm.la
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://libmca_mtl_mxm.la">http://libmca_mtl_mxm.la</a>&gt; mtl_mxm.lo mtl_mxm_cancel.lo
</span><br>
<span class="quotelev2">&gt;&gt;         mtl_mxm_component.lo mtl_mxm_endpoint.lo mtl_mxm_probe.lo
</span><br>
<span class="quotelev2">&gt;&gt;         mtl_mxm_recv.lo mtl_mxm_send.lo -lmxm -L -lrt -lm -lutil
</span><br>
<span class="quotelev2">&gt;&gt;         libtool: link: require no space between `-L' and `-lrt'
</span><br>
<span class="quotelev2">&gt;&gt;         make[2]: *** [libmca_mtl_mxm.la &lt;<a href="http://libmca_mtl_mxm.la">http://libmca_mtl_mxm.la</a>&gt;]
</span><br>
<span class="quotelev2">&gt;&gt;         Error 1
</span><br>
<span class="quotelev2">&gt;&gt;         make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;         `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi/mca/mtl/mxm'
</span><br>
<span class="quotelev2">&gt;&gt;         make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;         make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;         `/turquoise/usr/projects/hpctools/dshrader/hpcsoft/openmpi/1.8.5/openmpi-1.8.5/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;         make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         If I I use --with-mxm=no, then this error doesn't occur (as
</span><br>
<span class="quotelev2">&gt;&gt;         expected as the mxm component isn't touched). Has anyone run
</span><br>
<span class="quotelev2">&gt;&gt;         in to this before?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Here is my configure line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ./configure --disable-silent-rules
</span><br>
<span class="quotelev2">&gt;&gt;         --with-platform=contrib/platform/lanl/toss/optimized-panasas
</span><br>
<span class="quotelev2">&gt;&gt;         --prefix=...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I wonder if there is an empty variable that should contain
</span><br>
<span class="quotelev2">&gt;&gt;         the directory libmxm is in somewhere in configure since no
</span><br>
<span class="quotelev2">&gt;&gt;         directory is passed to --with-mxm which is then paired with a
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;-L&quot;. I think I'll go through the configure script while
</span><br>
<span class="quotelev2">&gt;&gt;         waiting to see if anyone else has run in to this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thank you for any and all help,
</span><br>
<span class="quotelev2">&gt;&gt;         David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         David Shrader
</span><br>
<span class="quotelev2">&gt;&gt;         HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt;         Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt;         Email: dshrader &lt;at&gt; lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26904.php">http://www.open-mpi.org/community/lists/users/2015/05/26904.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     M.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/05/26905.php">http://www.open-mpi.org/community/lists/users/2015/05/26905.php</a>
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
<span class="quotelev1">&gt;     Email: dshrader &lt;at&gt;lanl.gov  &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26936.php">http://www.open-mpi.org/community/lists/users/2015/05/26936.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26937.php">http://www.open-mpi.org/community/lists/users/2015/05/26937.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26940.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26938.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>In reply to:</strong> <a href="26937.php">Mike Dubman: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
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
