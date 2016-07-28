<?
$subject_val = "Re: [OMPI devel] Fortran linking problem: libraries have changed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 11:22:24 2012" -->
<!-- isoreceived="20120423152224" -->
<!-- sent="Mon, 23 Apr 2012 11:22:19 -0400" -->
<!-- isosent="20120423152219" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran linking problem: libraries have changed" -->
<!-- id="9953D9BF-56DB-43D6-A700-ADA2D2809C95_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F94EB5E.2020901_at_oracle.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 11:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>In reply to:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2012, at 1:40 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; [rhc_at_odin001 ~/svn-trunk]$ mpifort --showme
</span><br>
<span class="quotelev2">&gt;&gt; gfortran -I/nfs/rinfs/san/homedirs/rhc/openmpi/include -I/nfs/rinfs/san/homedirs/rhc/openmpi/lib -L/nfs/rinfs/san/homedirs/rhc/openmpi/lib -lmpi_usempi -lmpi_mpifh -lmpi -lopen-rte -lopen-pal -ldl -lm -lpci -lresolv -Wl,--export-dynamic -lrt -lnsl -lutil -lm -lpthread -ldl
</span><br>
<span class="quotelev1">&gt; Hmm, that's interesting.  &quot;mpifort --showme&quot; in my case is *NOT* showing &quot;-lmpi_usempi -lmpi_mpifh&quot; and it *IS* showing &quot;-lmpi_f77 -lmpi_f90&quot;.  
</span><br>
<p>Hmm.  I can't imagine how that happened.  The wrappers get these values from the wrapper data files in $prefix/share/openmpi/mpi*wrapper-data.txt.  I can't imagine how mpifort-wrapper-data.txt is getting loaded with -lmpi_f77 -lmpi_f90.  Weird!
<br>
<p><span class="quotelev1">&gt; I guess I need to make sure that I'm actually picking up the post-Fortran-merge trunk build I think I'm picking up, but it sure looks to me like I am.  Among other things, it recognizes mpifort as a command.  I'll think about possible dumb mistakes more tomorrow.
</span><br>
<p>Let me know what you find.  Let's not exclude the possibility that this is a problem on the trunk somehow.
<br>
<p><span class="quotelev2">&gt;&gt; Did you change your MTT config to use mpifort instead of mpif77 and mpif90? If not, then they would indeed fail.
</span><br>
<span class="quotelev1">&gt; That sounds like a different discussion.  I try &quot;mpifort --showme&quot; and I see the problem.  So, this is not dependent on mpif77 or mpif90.  Plus, I thought those two commands were simply deprecated -- that is, they should still work.
</span><br>
<p>Correct.  They will still work -- they're sym links to mpifort, and should have the appropriate wrapper data files, too.
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
<li><strong>Next message:</strong> <a href="10906.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: opal_cache_line_size"</a>
<li><strong>Previous message:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>In reply to:</strong> <a href="10903.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10910.php">Eugene Loh: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
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
