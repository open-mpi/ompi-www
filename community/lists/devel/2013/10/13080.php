<?
$subject_val = "Re: [OMPI devel] 32 bit build breakage in oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 10:00:19 2013" -->
<!-- isoreceived="20131009140019" -->
<!-- sent="Wed, 9 Oct 2013 14:00:18 +0000" -->
<!-- isosent="20131009140018" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 32 bit build breakage in oshmem" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F949067_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KybwdhE2syLhNB+cw3S5F7JeaRr75dmEPXRS14zC5fGzXw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 10:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13081.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem configure options"</a>
<li><strong>Previous message:</strong> <a href="13079.php">Jeff Squyres (jsquyres): "[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>In reply to:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="https://svn.open-mpi.org/trac/ompi/changeset/29408">https://svn.open-mpi.org/trac/ompi/changeset/29408</a>.
<br>
<p><p>On Oct 9, 2013, at 8:00 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I`m unable to reproduce this fail with gcc and -m32 flags.
</span><br>
<span class="quotelev1">&gt; I added same command line to jenkins (and in jenkins we trust) - and it passed on RHEL 6.4 with stock gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please check that you run it on latest trunk and please provide a gcc version if it is not a stock one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; M
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
<span class="quotelev1">&gt; On Tue, Oct 8, 2013 at 4:52 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On RHEL6.4 with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;CFLAGS=-g -pipe -m32&quot; CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default --disable-dlopen --enable-mpi-cxx
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
<span class="quotelev1">&gt;          type *b = (type *) out;                                             \
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13081.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem configure options"</a>
<li><strong>Previous message:</strong> <a href="13079.php">Jeff Squyres (jsquyres): "[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>In reply to:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
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
