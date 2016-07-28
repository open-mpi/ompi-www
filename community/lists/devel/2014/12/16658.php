<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 17:38:02 2014" -->
<!-- isoreceived="20141217223802" -->
<!-- sent="Wed, 17 Dec 2014 22:37:59 +0000" -->
<!-- isosent="20141217223759" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="1418855878941.63510_at_goodyear.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57oeGcgHhiHJAcmrduT9igpaz6Za+2FqDenhAzpeMFoOVmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 17:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>In reply to:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16603.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delayed response.....
<br>
<p><p>I got and built the tarball 1.8.3-272-g4e4f997 below.
<br>
<p><p>A single node job runs ok, with correct cores etc
<br>
<p>A multi-node job dies with the following error (no core dumps now):
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt;A specified physical processor does not exist in this topology:
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt;  CPU number:     0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Cpu set given:  None
</span><br>
<p><p>my mpirun line looks like:
<br>
<p>/apps/share/openmpi/1.8.3-272-g4e4f997/bin/mpirun --prefix /apps/share/openmpi/1.8.3-272-g4e4f997 --mca btl openib,tcp,sm,self --x LD_LIBRARY_PATH --np 64 myexe -i br.i -l tommy1.o
<br>
<p><p>My compile options for openmpi are:
<br>
<p><p>version=1.8.3-272-g4e4f997
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf=/apps/share/LSF/9.1.3/9.1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-lsf-libdir=/apps/share/LSF/9.1.3/9.1/linux2.6-glibc2.3-x86_64/lib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-shared-intel&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-ext
<br>
<p><p>Can you see anything that should or shouldn't be there?
<br>
<p><p>Thanks
<br>
<p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Monday, December 15, 2014 10:07 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] 1.8.4rc Status
<br>
<p>My correction - the fix is in the nightly tarball from tonight. You can get it here:
<br>
<p>openmpi-v1.8.3-272-g4e4f997.tar.bz2&lt;<a href="http://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.3-272-g4e4f997.tar.bz2">http://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.3-272-g4e4f997.tar.bz2</a>&gt;
<br>
<p><p><p>On Mon, Dec 15, 2014 at 2:40 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Hey Tom
<br>
<p>Note that rc2 had a bug in the out-of-band messaging system - might be what you are hitting. I'd suggest working with rc4.
<br>
<p><p>On Mon, Dec 15, 2014 at 12:57 PM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>I have to take it back.  While the first job was less than a node's worth of cores and ran properly on the cores I wanted. more testing is revealing other problems.
<br>
<p>Anything that spans more than one node crashes and burns, with a core dump, and nothing in the files to indicate why.
<br>
<p>Note this is still rc2....
<br>
<p>More testing on-going....
<br>
<p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt;
<br>
Sent: Monday, December 15, 2014 1:23 PM
<br>
<p>To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] 1.8.4rc Status
<br>
<p><p>It seems to be working in rc2 after all.
<br>
<p>I was still trying to use a rankfile, but it appears that is no longer needed.
<br>
<p>Thanks!
<br>
<p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Sent: Monday, December 15, 2014 8:45 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] 1.8.4rc Status
<br>
<p>Should be there in rc4, and I thought it made it to rc2 for that matter. I'll take a gander.
<br>
<p>FWIW: I'm working off-list with IBM to tighten the LSF integration so we correctly read and follow their binding directives. This will also be in 1.8.4 as we are in final test with it now.
<br>
<p>Ralph
<br>
<p><p>On Mon, Dec 15, 2014 at 5:40 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
Forgive me if I've missed it, but I believe using physical OR logical core numbering was going to be
<br>
<p>reimplemented in the 1.8.4 series.
<br>
<p><p>I've checked out rc2 and as far as I can tell, it isn't there as yet.   Is this correct?
<br>
<p><p>thanks!
<br>
<p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Sent: Monday, December 15, 2014 8:35 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] 1.8.4rc Status
<br>
<p>Hi folks
<br>
<p>Trying to summarize the current situation on releasing 1.8.4. Remaining identified issues:
<br>
<p>1. TCP/BTL hang under mpi-thread-multiple. Asked George to look into it.
<br>
<p>2. hwloc updates required. Brice committed them to the hwloc 1.7 repo. Gilles volunteered to create the PR from there.
<br>
<p>3. Fortran f08 binding disable for compilers not meeting certain conditions. PR from Gilles awaiting review by Jeff
<br>
<p>4. Topo signature issue reported by IBM. Ralph is waiting for more debug.
<br>
<p>5. MPI/IO issue reported by Eric Chamberland. Gilles investigating.
<br>
<p>6. make check issue on SPARC. Problem and fix reported by Paul Hargrove, Ralph will commit
<br>
<p>7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and link. Need someone to investigate.
<br>
<p>Please let me know if I've missed anything.
<br>
Ralph
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16595.php">http://www.open-mpi.org/community/lists/devel/2014/12/16595.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16604.php">http://www.open-mpi.org/community/lists/devel/2014/12/16604.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16659.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16657.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated. dev-564-g6c468b8"</a>
<li><strong>In reply to:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16603.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
