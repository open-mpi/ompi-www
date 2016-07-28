<?
$subject_val = "Re: [OMPI devel] Empty-initializer problems w/ PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 29 08:02:24 2015" -->
<!-- isoreceived="20150829120224" -->
<!-- sent="Sat, 29 Aug 2015 12:02:21 +0000" -->
<!-- isosent="20150829120221" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Empty-initializer problems w/ PGI" -->
<!-- id="C385D260-34E4-4D6E-A275-7FA571FF9B56_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17CS1d+A4+rGs4fcQxSQATN2dy-BoZSheS5bgueGfg0jg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Empty-initializer problems w/ PGI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-29 08:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed; thanks.
<br>
<p><span class="quotelev1">&gt; On Aug 27, 2015, at 12:16 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am pretty sure we fixed something very similar a couple months back.
</span><br>
<span class="quotelev1">&gt; The following is from &quot;make check&quot; with a recent (Tuesday night?) master tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC       unpack_ooo.o
</span><br>
<span class="quotelev1">&gt; PGC-S-0155-Empty initializer not supported  (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-13.10/openmpi-dev-2371-gea935df/test/datatype/unpack_ooo.c: 34)
</span><br>
<span class="quotelev1">&gt; PGC-S-0155-Empty initializer not supported  (/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-master-linux-x86_64-pgi-13.10/openmpi-dev-2371-gea935df/test/datatype/unpack_ooo.c: 39)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 13.10-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running &quot;make -k check&quot; shows no other errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17875.php">http://www.open-mpi.org/community/lists/devel/2015/08/17875.php</a>
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
<li><strong>Next message:</strong> <a href="17897.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<li><strong>Previous message:</strong> <a href="17895.php">Mark Santcroos: "Re: [OMPI devel] bind to interface / address oob_tcp_listener.c:create_listen()"</a>
<li><strong>In reply to:</strong> <a href="17875.php">Paul Hargrove: "[OMPI devel] Empty-initializer problems w/ PGI"</a>
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
