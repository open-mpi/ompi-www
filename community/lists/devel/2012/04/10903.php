<?
$subject_val = "Re: [OMPI devel] Fortran linking problem: libraries have changed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 01:40:39 2012" -->
<!-- isoreceived="20120423054039" -->
<!-- sent="Sun, 22 Apr 2012 22:40:46 -0700" -->
<!-- isosent="20120423054046" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran linking problem: libraries have changed" -->
<!-- id="4F94EB5E.2020901_at_oracle.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20AB464C-DAD7-4513-AC53-D0BA545016A3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-04-23 01:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Previous message:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/22/2012 9:53 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm&#133;I don't see that happening, Eugene:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rhc_at_odin001 ~/svn-trunk]$ mpifort --showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/nfs/rinfs/san/homedirs/rhc/openmpi/include -I/nfs/rinfs/san/homedirs/rhc/openmpi/lib -L/nfs/rinfs/san/homedirs/rhc/openmpi/lib -lmpi_usempi -lmpi_mpifh -lmpi -lopen-rte -lopen-pal -ldl -lm -lpci -lresolv -Wl,--export-dynamic -lrt -lnsl -lutil -lm -lpthread -ldl
</span><br>
Hmm, that's interesting.  &quot;mpifort --showme&quot; in my case is *NOT* showing 
<br>
&quot;-lmpi_usempi -lmpi_mpifh&quot; and it *IS* showing &quot;-lmpi_f77 -lmpi_f90&quot;.  I 
<br>
guess I need to make sure that I'm actually picking up the 
<br>
post-Fortran-merge trunk build I think I'm picking up, but it sure looks 
<br>
to me like I am.  Among other things, it recognizes mpifort as a 
<br>
command.  I'll think about possible dumb mistakes more tomorrow.
<br>
<span class="quotelev1">&gt; Did you change your MTT config to use mpifort instead of mpif77 and mpif90? If not, then they would indeed fail.
</span><br>
That sounds like a different discussion.  I try &quot;mpifort --showme&quot; and I 
<br>
see the problem.  So, this is not dependent on mpif77 or mpif90.  Plus, 
<br>
I thought those two commands were simply deprecated -- that is, they 
<br>
should still work.
<br>
<span class="quotelev1">&gt; On Apr 22, 2012, at 9:57 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Next Fortran problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oracle MTT managed to build the trunk (r26307) in some cases.  No test-run failures in these cases, but the pass counts are way low.  Turns out, the Fortran tests aren't being built (or run).  I try compiling a Fortran code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: library -lmpi_f77: not found
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: library -lmpi_f90: not found
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: File processing errors. No output written to a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I try &quot;mpifort --showme&quot; and see that it's trying to link in &quot;-lmpi_f77 -lmpi_f90&quot;, but those libraries no longer exist.  They have been replaced by
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_mpifh
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_usempi_ignore_tkr
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi_usempif08
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the Fortran wrapper needs to be updated.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10904.php">Jeffrey Squyres: "Re: [OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Previous message:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>In reply to:</strong> <a href="10902.php">Ralph Castain: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Reply:</strong> <a href="10905.php">Jeffrey Squyres: "Re: [OMPI devel] Fortran linking problem: libraries have changed"</a>
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
