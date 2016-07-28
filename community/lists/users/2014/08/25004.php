<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 14:54:38 2014" -->
<!-- isoreceived="20140812185438" -->
<!-- sent="Tue, 12 Aug 2014 18:54:37 +0000" -->
<!-- isosent="20140812185437" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="6F097860-7240-4D23-9A32-9144B0A39036_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1407861146.472.13.camel_at_brixpro.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC 4.9 and MPI_F08?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 14:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="25003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@#$%@#$%#@$%
<br>
<p>I was very confused by this bug report, because in my mind, a) this functionality is on the SVN trunk, and b) we had moved the gcc functionality to the v1.8 branch long ago.
<br>
<p>I just checked the SVN/Trac records:
<br>
<p>1. I'm right: this functionality *is* on the trunk.  If you build the OMPI SVN trunk with gcc/gfortran 4.9, you get the ignore TKR &quot;mpi&quot; module and the mpi_f08 module.  I just tried it myself to verify this.
<br>
<p>2. I'm (sorta) right: we CMR'ed the &quot;add the GCC ignore TKR functionality&quot; in <a href="https://svn.open-mpi.org/trac/ompi/ticket/4058">https://svn.open-mpi.org/trac/ompi/ticket/4058</a> for v1.7.5, but it looks like that CMR was botched somehow and the functionality wasn't applied (!) ...even though the log message says it was.  Sad panda.
<br>
<p>I'll open a ticket to track this.  We'll have to see how the RM feels about putting this in at the last second; it may or may not make the cutoff for 1.8.2 (the freeze has already occurred).
<br>
<p><p><p>On Aug 12, 2014, at 12:32 PM, Daniels, Marcus G &lt;mdaniels_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2014-08-12 at 16:18 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the output from configure, the config.log file, and the ompi_config.h file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached.  configure.log comes from
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (./configure --prefix=/usr/projects/eap/tools/openmpi/1.8.2rc3  2&gt;&amp;1) &gt;
</span><br>
<span class="quotelev1">&gt; configure.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems fishy that there is no &quot;checking for Fortran compiler support of !
</span><br>
<span class="quotelev1">&gt; GCC$ ATTRIBUTES NO_ARG_CHECK&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler module include flag... -I
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... not cached; checking
</span><br>
<span class="quotelev1">&gt; variants
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DEC$ ATTRIBUTES
</span><br>
<span class="quotelev1">&gt; NO_ARG_CHECK... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !$PRAGMA IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !DIR$ IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking for Fortran compiler support of !IBM* IGNORE_TKR... no
</span><br>
<span class="quotelev1">&gt; checking Fortran compiler ignore TKR syntax... 0:real:!
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler supports ISO_C_BINDING... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi' bindings... yes
</span><br>
<span class="quotelev1">&gt; checking if building Fortran 'use mpi_f08' bindings... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.8.2rc3-config.tar.gz&gt;
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
<li><strong>Next message:</strong> <a href="25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>Previous message:</strong> <a href="25003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
