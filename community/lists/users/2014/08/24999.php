<?
$subject_val = "Re: [OMPI users] GCC 4.9 and MPI_F08?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 12:18:08 2014" -->
<!-- isoreceived="20140812161808" -->
<!-- sent="Tue, 12 Aug 2014 16:18:07 +0000" -->
<!-- isosent="20140812161807" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC 4.9 and MPI_F08?" -->
<!-- id="FB7232E8-D1AC-4C4D-9263-61F85EEEF7B9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1407859906.472.10.camel_at_brixpro.lanl.gov" -->
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
<strong>Date:</strong> 2014-08-12 12:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24998.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24998.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the output from configure, the config.log file, and the ompi_config.h file?
<br>
<p><p>On Aug 12, 2014, at 12:11 PM, Daniels, Marcus G &lt;mdaniels_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2014-08-12 at 15:50 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It should be in the 1.8.2rc tarball (i.e., to be included in the soon-to-be-released 1.8.2).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Want to give it a whirl before release to let us know if it works for you?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I get..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.2rc3] $ gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; COLLECT_GCC=gcc
</span><br>
<span class="quotelev1">&gt; COLLECT_LTO_WRAPPER=/yellow/usr/projects/eap/tools/gcc_tree/4.9.1/bin/../libexec/gcc/x86_64-unknown-linux-gnu/4.9.1/lto-wrapper
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/projects/eap/tools/gcc_tree/4.9.1 --disable-multilib
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.9.1 (GCC) 
</span><br>
<span class="quotelev1">&gt; mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.2rc3] $  grep
</span><br>
<span class="quotelev1">&gt; ^OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS config.log
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_FALSE=''
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_TRUE='#'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compared to..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.1] $ ifort -v
</span><br>
<span class="quotelev1">&gt; ifort version 14.0.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mdaniels_at_ml-fey2[/scratch/mdaniels/openmpi-1.8.1] $ grep
</span><br>
<span class="quotelev1">&gt; ^OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS config.log
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_FALSE='#'
</span><br>
<span class="quotelev1">&gt; OMPI_BUILD_FORTRAN_USEMPIF08_BINDINGS_TRUE=''
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see it in the interfaces, but not the M4..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mdaniels_at_brixpro openmpi-1.8.2rc3]$ grep -r NO_ARG_CHECK config
</span><br>
<span class="quotelev1">&gt; config/ompi_fortran_check_ignore_tkr.m4:              [!DEC\$ ATTRIBUTES
</span><br>
<span class="quotelev1">&gt; NO_ARG_CHECK ::], [real, dimension(*)],
</span><br>
<span class="quotelev1">&gt; config/ompi_fortran_check_ignore_tkr.m4:              [!DEC\$ ATTRIBUTES
</span><br>
<span class="quotelev1">&gt; NO_ARG_CHECK],
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24998.php">http://www.open-mpi.org/community/lists/users/2014/08/24998.php</a>
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
<li><strong>Next message:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Previous message:</strong> <a href="24998.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>In reply to:</strong> <a href="24998.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<li><strong>Reply:</strong> <a href="25000.php">Daniels, Marcus G: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
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
