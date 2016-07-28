<?
$subject_val = "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 09:39:18 2016" -->
<!-- isoreceived="20160126143918" -->
<!-- sent="Tue, 26 Jan 2016 23:39:15 +0900" -->
<!-- isosent="20160126143915" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris" -->
<!-- id="CAAkFZ5sa6i4w9TmcaX3j4-rEtLbbWNJ9j3FwmNLpCYFAoU9Baw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56A77EEF.7080200_at_central.uh.edu" -->
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
<strong>Date:</strong> 2016-01-26 09:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul Hargrove builds all rc versions on various platforms that do include
<br>
solaris.
<br>
the faulty lines were committed about 10 days ago
<br>
(use romio instead of ompio with lustre) and are not fs specific.
<br>
I can only guess several filesytems are not available on solaris, so using
<br>
a Linux statfs never caused any issue.
<br>
<p>I was just pointing to opal/util/proc.c as an example of how statfs can be
<br>
replaced on Solaris.
<br>
that being said, that part could be refactored so it can be simply used by
<br>
ompio.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, January 26, 2016, Edgar Gabriel &lt;egabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can look into that, but just as a note, that code is now for roughly 5
</span><br>
<span class="quotelev1">&gt; years in master in *all* fs components, so its not necessarily new (it just
</span><br>
<span class="quotelev1">&gt; shows how often we compile with solaris). Based on what I see in the
</span><br>
<span class="quotelev1">&gt; opal/util/path.c the function opal_path_nfs does something very similar,
</span><br>
<span class="quotelev1">&gt; but I would have to extend on that, since I need to know *what* file system
</span><br>
<span class="quotelev1">&gt; it is, not just *whether* it is one of the known file systems. Its however
</span><br>
<span class="quotelev1">&gt; a hange affecting io/ompio and all fs components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/26/2016 06:27 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Siegmar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recent updates cannot work on Solaris.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can have a look at opal/util/path.c,
</span><br>
<span class="quotelev1">&gt; statfs &quot;oddities&quot; are handled here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, January 26, 2016, Siegmar Gross &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Siegmar.Gross_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','Siegmar.Gross_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yesterday I tried to build openmpi-v2.x-dev-1020-ge2a53b3 on my
</span><br>
<span class="quotelev2">&gt;&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev2">&gt;&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
</span><br>
<span class="quotelev2">&gt;&gt; my Linux machine, but I got the following errors on both Solaris
</span><br>
<span class="quotelev2">&gt;&gt; platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 33 tail -15
</span><br>
<span class="quotelev2">&gt;&gt; log.make.SunOS.sparc.64_cc
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     mca_fs_ufs.la
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/fs/ufs'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/io/ompio
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       io_ompio.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       io_ompio_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 285: prototype mismatch: 2 args passed, 4 expected
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 290: prototype mismatch: 2 args passed, 4 expected
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; line 296: undefined struct/union member: f_type
</span><br>
<span class="quotelev2">&gt;&gt; cc: acomp failed for
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [io_ompio_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 34
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 37 tail -29
</span><br>
<span class="quotelev2">&gt;&gt; log.make.SunOS.sparc.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     mca_fs_ufs.la
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/fs/ufs'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/io/ompio
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       io_ompio.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       io_ompio_component.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:
</span><br>
<span class="quotelev2">&gt;&gt; In function 'file_query':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:285:23:
</span><br>
<span class="quotelev2">&gt;&gt; error: too few arguments to function 'statfs'
</span><br>
<span class="quotelev2">&gt;&gt;                  err = statfs (file-&gt;f_filename, &amp;fsbuf);
</span><br>
<span class="quotelev2">&gt;&gt;                        ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/sys/statfs.h:53:5: note: declared here
</span><br>
<span class="quotelev2">&gt;&gt;  int statfs(const char *, struct statfs *, int, int);
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:290:23:
</span><br>
<span class="quotelev2">&gt;&gt; error: too few arguments to function 'statfs'
</span><br>
<span class="quotelev2">&gt;&gt;                  err = statfs (dir, &amp;fsbuf);
</span><br>
<span class="quotelev2">&gt;&gt;                        ^
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/sys/statfs.h:53:5: note: declared here
</span><br>
<span class="quotelev2">&gt;&gt;  int statfs(const char *, struct statfs *, int, int);
</span><br>
<span class="quotelev2">&gt;&gt;      ^
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:296:22:
</span><br>
<span class="quotelev2">&gt;&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev2">&gt;&gt;              if (fsbuf.f_type == LL_SUPER_MAGIC) {
</span><br>
<span class="quotelev2">&gt;&gt;                       ^
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [io_ompio_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 38
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt;&gt; very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28377.php">http://www.open-mpi.org/community/lists/users/2016/01/28377.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28379.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28381.php">Edgar Gabriel: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
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
