<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 17 11:02:21 2013" -->
<!-- isoreceived="20130717150221" -->
<!-- sent="Wed, 17 Jul 2013 15:02:16 +0000" -->
<!-- isosent="20130717150216" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F724BF9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130717144835.GN18047_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-17 11:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2013, at 10:48 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I must be missing something here. type_size.c contains MPI_Type_size and MPI_Type_size_x and I see all the MPI and PMPI variants in the resulting .so, .dylib, and .a.
</span><br>
<p><p>If you have a nathan.c file with:
<br>
<p>-----
<br>
void MPI_foo() { ... }
<br>
void MPI_bar() { ... }
<br>
-----
<br>
<p>This will result in defining both symbols in that nathan.o file, which ends up in libmpi.so.
<br>
<p>Then if someone writes a code like this:
<br>
<p>-----
<br>
int main() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Foo();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bar();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>And then they interpose their own version of MPI_Bar() with their libinterposition.so, *it won't work* (meaning their version of MPI_Bar() won't be called).  
<br>
<p>This happens because the linker will first see MPI_Foo() in main and resolves it.  When it resolves the MPI_Foo symbol, it pulls *all* symbols out of the .o from where MPI_Foo came (i.e., nathan.o in libmpi.so) -- i.e., including MPI_Bar.  
<br>
<p>So when MPI_Bar goes to get executed, it's *already been resolved* to the one in nathan.o/libmpi.so, not the one from libinterposition.so.
<br>
<p>Even worse, if they reversed the order of foo/bar in main, then the linker would likely give you a duplicate symbol error because it will first resolve MPI_Bar from libinterposition.so, and then later resolve MPI_Foo from libmpi.so, but it will also pull MPI_Bar from libmpi.so -- kaboom.
<br>
<p>Linkers are insanely complicated.
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
<li><strong>Next message:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12638.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
