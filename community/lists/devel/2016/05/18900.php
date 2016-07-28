<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 10:17:41 2016" -->
<!-- isoreceived="20160503141741" -->
<!-- sent="Tue, 3 May 2016 09:17:33 -0500" -->
<!-- isosent="20160503141733" -->
<!-- name="Edgar Gabriel" -->
<!-- email="egabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)" -->
<!-- id="2a5892b5-b77c-d681-a92c-f01d6ce53fe6_at_central.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA152aPtnEyE4hoGYEnBi5_EoR7V7Q_KFH=Mu4j1te2i6xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)<br>
<strong>From:</strong> Edgar Gabriel (<em>egabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 10:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Previous message:</strong> <a href="18899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
well, actually the line that causes the trouble is unnecessary. 
<br>
Detecting the file system has been abstracted out, and the struct statfs 
<br>
is completely unused. I will create a one-line patch for that.
<br>
<p>Edgar
<br>
<p><p>On 5/2/2016 10:54 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; On NetNSD-7 I am testing PR1128 to get past an issue Nathan fixed 
</span><br>
<span class="quotelev1">&gt; since my report earlier today (Monday).
</span><br>
<span class="quotelev1">&gt; It appears that OMPIO is not prepared for NetBSD's uses of statvfs() 
</span><br>
<span class="quotelev1">&gt; instead of statfs().
</span><br>
<span class="quotelev1">&gt; The error message appear at the bottom of this email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW the ROMIO code does have the necessary configure login and #ifdefs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, passing --enable-mca-no-build=io-ompio to configure is 
</span><br>
<span class="quotelev1">&gt; sufficient to work around this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio 
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../../oshmem/include 
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/private/autogen 
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc1112/hwloc/include/hwloc/autogen 
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/mpiext/cuda/c 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone 
</span><br>
<span class="quotelev1">&gt; -I../../../.. 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/orte/include 
</span><br>
<span class="quotelev1">&gt; -I../../../../orte/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/oshmem/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/hwloc/hwloc1112/hwloc/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/event/libevent2022/libevent 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/opal/mca/event/libevent2022/libevent/include 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/BLD/opal/mca/event/libevent2022/libevent/include 
</span><br>
<span class="quotelev1">&gt; -g -finline-functions -fno-strict-aliasing -pthread -MT 
</span><br>
<span class="quotelev1">&gt; io_ompio_component.lo -MD -MP -MF .deps/io_ompio_component.Tpo -c 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c 
</span><br>
<span class="quotelev1">&gt;  -fPIC -DPIC -o .libs/io_ompio_component.o
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c: 
</span><br>
<span class="quotelev1">&gt; In function 'file_query':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-pr1128-netbsd7-amd64/openmpi-gitclone/ompi/mca/io/ompio/io_ompio_component.c:275:19: 
</span><br>
<span class="quotelev1">&gt; error: storage size of 'fsbuf' isn't known
</span><br>
<span class="quotelev1">&gt;      struct statfs fsbuf;
</span><br>
<span class="quotelev1">&gt;                    ^
</span><br>
<span class="quotelev1">&gt; *** Error code 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Previous message:</strong> <a href="18899.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>In reply to:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
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
