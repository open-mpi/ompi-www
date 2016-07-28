<?
$subject_val = "Re: [OMPI devel] 32 bit build breakage in oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 08:00:51 2013" -->
<!-- isoreceived="20131009120051" -->
<!-- sent="Wed, 9 Oct 2013 15:00:50 +0300" -->
<!-- isosent="20131009120050" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit build breakage in oshmem" -->
<!-- id="CAAO1KybwdhE2syLhNB+cw3S5F7JeaRr75dmEPXRS14zC5fGzXw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F929BE8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 32 bit build breakage in oshmem<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 08:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>In reply to:</strong> <a href="13065.php">Jeff Squyres (jsquyres): "[OMPI devel] 32 bit build breakage in oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Reply:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I`m unable to reproduce this fail with gcc and -m32 flags.
<br>
I added same command line to jenkins (and in jenkins we trust) - and it
<br>
passed on RHEL 6.4 with stock gcc.
<br>
<p>Please check that you run it on latest trunk and please provide a gcc
<br>
version if it is not a stock one.
<br>
<p>Thanks
<br>
M
<br>
<p><p><p><p><p>On Tue, Oct 8, 2013 at 4:52 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On RHEL6.4 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;CFLAGS=-g -pipe -m32&quot; CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --disable-dlopen --enable-mpi-cxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get a ton of compile errors in oshmem/op/op.c, like this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
</span><br>
<span class="quotelev1">&gt;  FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
</span><br>
<span class="quotelev1">&gt; op/op.c:135:15: error: 'b' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt;          type *b = (type *) out;
</span><br>
<span class="quotelev1">&gt;   \
</span><br>
<span class="quotelev1">&gt;                ^
</span><br>
<span class="quotelev1">&gt; -----
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13074.php">George Bosilca: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>In reply to:</strong> <a href="13065.php">Jeff Squyres (jsquyres): "[OMPI devel] 32 bit build breakage in oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Reply:</strong> <a href="13080.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
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
