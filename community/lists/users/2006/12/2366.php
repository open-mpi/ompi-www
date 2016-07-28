<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 14 15:48:29 2006" -->
<!-- isoreceived="20061214204829" -->
<!-- sent="Thu, 14 Dec 2006 15:48:24 -0500" -->
<!-- isosent="20061214204824" -->
<!-- name="Michael Galloway" -->
<!-- email="mgx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi compiler configure problems" -->
<!-- id="20061214204824.GM30568_at_sif.lsd.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061214190154.GJ30568_at_sif.lsd.ornl.gov" -->
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
<strong>From:</strong> Michael Galloway (<em>mgx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-14 15:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 14, 2006 at 02:01:54PM -0500, Michael Galloway wrote:
<br>
<span class="quotelev1">&gt; good day all, i've been trying to build ompi with the 6.2-X version of the pgi
</span><br>
<span class="quotelev1">&gt; compiler set (pgcc 6.2-4 64-bit target on x86-64 Linux). i've tried both 1.1.2 and
</span><br>
<span class="quotelev1">&gt; the current nightly build 1.1.3b2r12766, both fail with this error from configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether /opt/pgi/linux86-64/6.2/bin/pgf77 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking /opt/pgi/linux86-64/6.2/bin/pgf77 external symbol convention... single underscore
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 LOGICAL... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will attache the config.log file. i've looked around the maillist and i've seen a few issue
</span><br>
<span class="quotelev1">&gt; similar but no real resolution. the env i used to build is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F90=/opt/pgi/linux86-64/6.2/bin/pgf90
</span><br>
<span class="quotelev1">&gt; F77=/opt/pgi/linux86-64/6.2/bin/pgf77
</span><br>
<span class="quotelev1">&gt; LM_LICENSE_FILE=/opt/pgi/license.dat
</span><br>
<span class="quotelev1">&gt; CXX=/opt/pgi/linux86-64/6.2/bin/pgCC
</span><br>
<span class="quotelev1">&gt; FC=/opt/pgi/linux86-64/6.2/bin/pgf90
</span><br>
<span class="quotelev1">&gt; CC=/opt/pgi/linux86-64/6.2/bin/pgcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F90FLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; CFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
</span><br>
<span class="quotelev1">&gt; FFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there something simple i'm messing up? thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- michael
</span><br>
<p>interesting, if i build with the 32bit pgi components it works. the env:
<br>
<p>[root_at_bioinfo openmpi-1.1.2]# env | grep pgi
<br>
PGI=/opt/pgi
<br>
PATH=/opt/pgi/linux86/6.2/bin:/opt/pgi/linux86-64/6.2/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/opt/globus/bin:/opt/globus/sbin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/opt/Bio/ncbi/bin:/opt/Bio/mpiblast/bin/:/opt/Bio/hmmer/bin:/opt/Bio/Emboss/bin:/opt/Bio/clustalw/bin:/opt/Bio/t_coffee/bin:/opt/Bio/phylip/exe:/opt/Bio/mrbayes:/opt/Bio/fasta:/opt/Bio/glimmer/bin://opt/Bio/glimmer/scripts:/opt/Bio/gromacs/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/usr/java/jre1.5.0_09/bin:/opt/lam/gnu/bin:/usr/NX/bin:/opt/openmpi/bin/:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
<br>
F90=/opt/pgi/linux86/6.2/bin/pgf90
<br>
F77=/opt/pgi/linux86/6.2/bin/pgf77
<br>
LM_LICENSE_FILE=/opt/pgi/license.dat
<br>
CXX=/opt/pgi/linux86/6.2/bin/pgCC
<br>
FC=/opt/pgi/linux86/6.2/bin/pgf95
<br>
CC=/opt/pgi/linux86/6.2/bin/pgcc
<br>
<p>[root_at_bioinfo openmpi-1.1.2]# env | grep FLAG
<br>
F90FLAGS=-fastsse
<br>
CXXFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
CFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
FFLAGS=-fastsse
<br>
<p>and config'd with:
<br>
<p>./configure --prefix=/share/apps/opmi-112/pgi --with-gnu-ld
<br>
<p>at least configure completes. if i change back to x86_64 it fails with:
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether /opt/pgi/linux86-64/6.2/bin/pgf77 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking /opt/pgi/linux86-64/6.2/bin/pgf77 external symbol convention... single underscore
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL... 4
<br>
checking for C type corresponding to LOGICAL... not found
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: error: Cannot continue
<br>
<p>and the env:
<br>
<p>[root_at_bioinfo openmpi-1.1.2]# env | grep pgi
<br>
PGI=/opt/pgi
<br>
PATH=/opt/pgi/linux86-64/6.2/bin:/opt/pgi/linux86/6.2/bin:/opt/pgi/linux86-64/6.2/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/opt/globus/bin:/opt/globus/sbin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/opt/Bio/ncbi/bin:/opt/Bio/mpiblast/bin/:/opt/Bio/hmmer/bin:/opt/Bio/Emboss/bin:/opt/Bio/clustalw/bin:/opt/Bio/t_coffee/bin:/opt/Bio/phylip/exe:/opt/Bio/mrbayes:/opt/Bio/fasta:/opt/Bio/glimmer/bin://opt/Bio/glimmer/scripts:/opt/Bio/gromacs/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/usr/java/jre1.5.0_09/bin:/opt/lam/gnu/bin:/usr/NX/bin:/opt/openmpi/bin/:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
<br>
F90=/opt/pgi/linux86-64/6.2/bin/pgf90
<br>
F77=/opt/pgi/linux86-64/6.2/bin/pgf77
<br>
LM_LICENSE_FILE=/opt/pgi/license.dat
<br>
CXX=/opt/pgi/linux86-64/6.2/bin/pgCC
<br>
FC=/opt/pgi/linux86-64/6.2/bin/pgf95
<br>
CC=/opt/pgi/linux86-64/6.2/bin/pgcc
<br>
<p>odd .....
<br>
<p>-- michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2365.php">David Gunter: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
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
