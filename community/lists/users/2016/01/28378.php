<?
$subject_val = "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 07:27:49 2016" -->
<!-- isoreceived="20160126122749" -->
<!-- sent="Tue, 26 Jan 2016 21:27:47 +0900" -->
<!-- isosent="20160126122747" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris" -->
<!-- id="CAAkFZ5s7LeMOyZnL3VxgzEJOkbqy+ZOKjagcLEj36-P7RN5GUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56A75A68.2080602_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 07:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28377.php">Siegmar Gross: "[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28377.php">Siegmar Gross: "[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Siegmar,
<br>
<p>recent updates cannot work on Solaris.
<br>
<p>Edgar,
<br>
<p>you can have a look at opal/util/path.c,
<br>
statfs &quot;oddities&quot; are handled here
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, January 26, 2016, Siegmar Gross &lt;
<br>
Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yesterday I tried to build openmpi-v2.x-dev-1020-ge2a53b3 on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev1">&gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 33 tail -15
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev1">&gt;   CCLD     mca_fs_ufs.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/fs/ufs'
</span><br>
<span class="quotelev1">&gt; Making all in mca/io/ompio
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev1">&gt;   CC       io_ompio.lo
</span><br>
<span class="quotelev1">&gt;   CC       io_ompio_component.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 285: prototype mismatch: 2 args passed, 4 expected
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 290: prototype mismatch: 2 args passed, 4 expected
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev1">&gt; line 296: undefined struct/union member: f_type
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [io_ompio_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 34
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
<span class="quotelev1">&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 37 tail -29
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev1">&gt;   CCLD     mca_fs_ufs.la
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/fs/ufs'
</span><br>
<span class="quotelev1">&gt; Making all in mca/io/ompio
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev1">&gt;   CC       io_ompio.lo
</span><br>
<span class="quotelev1">&gt;   CC       io_ompio_component.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:
</span><br>
<span class="quotelev1">&gt; In function 'file_query':
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:285:23:
</span><br>
<span class="quotelev1">&gt; error: too few arguments to function 'statfs'
</span><br>
<span class="quotelev1">&gt;                  err = statfs (file-&gt;f_filename, &amp;fsbuf);
</span><br>
<span class="quotelev1">&gt;                        ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/statfs.h:53:5: note: declared here
</span><br>
<span class="quotelev1">&gt;  int statfs(const char *, struct statfs *, int, int);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:290:23:
</span><br>
<span class="quotelev1">&gt; error: too few arguments to function 'statfs'
</span><br>
<span class="quotelev1">&gt;                  err = statfs (dir, &amp;fsbuf);
</span><br>
<span class="quotelev1">&gt;                        ^
</span><br>
<span class="quotelev1">&gt; In file included from
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/statfs.h:53:5: note: declared here
</span><br>
<span class="quotelev1">&gt;  int statfs(const char *, struct statfs *, int, int);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:296:22:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt;              if (fsbuf.f_type == LL_SUPER_MAGIC) {
</span><br>
<span class="quotelev1">&gt;                       ^
</span><br>
<span class="quotelev1">&gt; make[2]: *** [io_ompio_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28377.php">http://www.open-mpi.org/community/lists/users/2016/01/28377.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28377.php">Siegmar Gross: "[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28377.php">Siegmar Gross: "[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
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
