<?
$subject_val = "Re: [OMPI devel] 1.7rc8 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 16:56:21 2013" -->
<!-- isoreceived="20130228215621" -->
<!-- sent="Fri, 1 Mar 2013 01:56:17 +0400" -->
<!-- isosent="20130228215617" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7rc8 is posted" -->
<!-- id="CAFamD4UK1e0Y9pYq_bf-_PSZw6Vq88c5XwRFOopvZ+2pQZjzBA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F641C9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7rc8 is posted<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 16:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/03/12182.php">Peter Kjellström: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12174.php">marco atzeri: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regarding the Open64. It's that strange thing that I need two different
<br>
versions of the compilers:
<br>
one for Opteron family 15h and one for general x86-64 architecture. This
<br>
makes things quite complicated since my head node doesn't have Opteron
<br>
family 15h processor. You can have a look at this topic:
<br>
<a href="http://devgurus.amd.com/thread/160180">http://devgurus.amd.com/thread/160180</a>
<br>
<p>I've tried building the same version on a node with 6380 processors.
<br>
Configuration was successful. But make failed in the following way:
<br>
libtool: compile:  opencc -DHAVE_CONFIG_H -I. -DLTDLOPEN=libltdlc
<br>
&quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl
<br>
-I/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal/mca/hwloc/hwloc151/hwloc/include
<br>
-I/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal/mca/event/libevent2019/libevent
<br>
-I/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal/mca/event/libevent2019/libevent/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband -I/usr/include/infiniband -O3 -DNDEBUG
<br>
-fvisibility=hidden -MT libltdlc_la-ltdl.lo -MD -MP -MF
<br>
.deps/libltdlc_la-ltdl.Tpo -c ltdl.c  -fPIC -DPIC -o
<br>
.libs/libltdlc_la-ltdl.o
<br>
/tmp/ccspin#.cVv00f.s: Assembler messages:
<br>
/tmp/ccspin#.cVv00f.s:860: Error: no such instruction: `bextr
<br>
$257,%esi,%esi'
<br>
/tmp/ccspin#.cVv00f.s:868: Error: no such instruction: `bextr
<br>
$258,%edi,%edi'
<br>
/tmp/ccspin#.cVv00f.s:876: Error: no such instruction: `bextr
<br>
$259,%eax,%eax'
<br>
make[3]: *** [libltdlc_la-ltdl.lo] Error 1
<br>
make[3]: Leaving directory
<br>
`/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal/libltdl'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory
<br>
`/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal/libltdl'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/mpi_install_tmp26482/openmpi-1.7rc8/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I guess that this issue has more to do with the compiler than with OpenMPI.
<br>
<p><p>Let me know if you need me to run any additional tests.
<br>
<p>Regards, Pavel Mezentsev.
<br>
<p><p><p>2013/2/28 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Feb 28, 2013, at 12:04 PM, Pavel Mezentsev &lt;pavel.mezentsev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you mean the logs from failed attempts? They are enclosed. If you
</span><br>
<span class="quotelev1">&gt; need the successful logs I'll need to make them again since the files from
</span><br>
<span class="quotelev1">&gt; successful builds are deleted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You guessed right; I need the logs from the failed builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like your openf95 compiler is generating borked executables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:31019: checking KIND value of Fortran C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; configure:31046: openf95 -o conftest    conftest.f90  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:31046: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:31046: ./conftest
</span><br>
<span class="quotelev1">&gt; ./configure: line 4343:  1234 Illegal instruction     (core dumped)
</span><br>
<span class="quotelev1">&gt; ./conftest$ac_exeext
</span><br>
<span class="quotelev1">&gt; configure:31046: $? = 132
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 132
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |         use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt; |         open(unit = 7, file = &quot;conftest.out&quot;)
</span><br>
<span class="quotelev1">&gt; |         write(7, *) C_SIGNED_CHAR
</span><br>
<span class="quotelev1">&gt; |         close(7)
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no reason the above Fortran program should fail with &quot;illegal
</span><br>
<span class="quotelev1">&gt; instruction&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not using  MXM. The results with the option you suggested are the
</span><br>
<span class="quotelev1">&gt; same as before:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're investigating the latency issue.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12181/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/03/12182.php">Peter Kjellström: "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>Previous message:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<li><strong>In reply to:</strong> <a href="12180.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7rc8 is posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12174.php">marco atzeri: "Re: [OMPI devel] 1.7rc8 is posted"</a>
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
