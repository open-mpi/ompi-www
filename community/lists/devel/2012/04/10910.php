<?
$subject_val = "Re: [OMPI devel] Fortran linking problem: libraries have changed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 17:52:19 2012" -->
<!-- isoreceived="20120423215219" -->
<!-- sent="Mon, 23 Apr 2012 14:52:28 -0700" -->
<!-- isosent="20120423215228" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran linking problem: libraries have changed" -->
<!-- id="4F95CF1C.9080306_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9953D9BF-56DB-43D6-A700-ADA2D2809C95_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran linking problem: libraries have changed<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 17:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/23/2012 8:22 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 23, 2012, at 1:40 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rhc_at_odin001 ~/svn-trunk]$ mpifort --showme
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gfortran -I/nfs/rinfs/san/homedirs/rhc/openmpi/include -I/nfs/rinfs/san/homedirs/rhc/openmpi/lib -L/nfs/rinfs/san/homedirs/rhc/openmpi/lib -lmpi_usempi -lmpi_mpifh -lmpi -lopen-rte -lopen-pal -ldl -lm -lpci -lresolv -Wl,--export-dynamic -lrt -lnsl -lutil -lm -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, that's interesting.  &quot;mpifort --showme&quot; in my case is *NOT* showing &quot;-lmpi_usempi -lmpi_mpifh&quot; and it *IS* showing &quot;-lmpi_f77 -lmpi_f90&quot;.
</span><br>
<span class="quotelev1">&gt; Hmm.  I can't imagine how that happened.  The wrappers get these values from the wrapper data files in $prefix/share/openmpi/mpi*wrapper-data.txt.  I can't imagine how mpifort-wrapper-data.txt is getting loaded with -lmpi_f77 -lmpi_f90.  Weird!
</span><br>
It turns out that we have MTT magic to generate those wrapper data 
<br>
files.  I will fix our magic.
<br>
<span class="quotelev2">&gt;&gt; I guess I need to make sure that I'm actually picking up the post-Fortran-merge trunk build I think I'm picking up, but it sure looks to me like I am.  Among other things, it recognizes mpifort as a command.  I'll think about possible dumb mistakes more tomorrow.
</span><br>
<span class="quotelev1">&gt; Let me know what you find.  Let's not exclude the possibility that this is a problem on the trunk somehow.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10911.php">George Bosilca: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10909.php">Rayson Ho: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>In reply to:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
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
