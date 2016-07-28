<?
$subject_val = "[OMPI devel] 32 bit build breakage in oshmem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 09:52:40 2013" -->
<!-- isoreceived="20131008135240" -->
<!-- sent="Tue, 8 Oct 2013 13:52:39 +0000" -->
<!-- isosent="20131008135239" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 32 bit build breakage in oshmem" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F929BE8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] 32 bit build breakage in oshmem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 09:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13066.php">Jeff Squyres (jsquyres): "[OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13064.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Reply:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On RHEL6.4 with:
<br>
<p>&quot;CFLAGS=-g -pipe -m32&quot; CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper-fflags=-m32 --with-wrapper-fcflags=-m32 --enable-mpirun-prefix-by-default --disable-dlopen --enable-mpi-cxx
<br>
<p>I get a ton of compile errors in oshmem/op/op.c, like this one:
<br>
<p>-----
<br>
op/op.c:194:1: note: in expansion of macro 'FUNC_OP_CREATE'
<br>
&nbsp;FUNC_OP_CREATE(max, freal16, ompi_fortran_real16_t, __max_op);
<br>
op/op.c:135:15: error: 'b' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type *b = (type *) out;                                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13066.php">Jeff Squyres (jsquyres): "[OMPI devel] More oshmem compile errors"</a>
<li><strong>Previous message:</strong> <a href="13064.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL]  1.7.x support statement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
<li><strong>Reply:</strong> <a href="13075.php">Mike Dubman: "Re: [OMPI devel] 32 bit build breakage in oshmem"</a>
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
