<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 14 14:55:17 2006" -->
<!-- isoreceived="20061214195517" -->
<!-- sent="Thu, 14 Dec 2006 12:55:12 -0700" -->
<!-- isosent="20061214195512" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi compiler configure problems" -->
<!-- id="D040169B-7643-4961-A278-3708A424AF9D_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-14 14:55:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>I just did a quick config of 1.1.2 using PGI 6.2-4 and didn't run  
<br>
into this problem.
<br>
<p>Here's the environment I used (similar to yours):
<br>
<p>CXX=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgCC
<br>
F90=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgf90
<br>
PGI=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4
<br>
FC=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgf95
<br>
F77=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgf77
<br>
CC=/usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgcc
<br>
F90FLAGS=-fastsse
<br>
CXXFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
FCFLAGS=-fastsse
<br>
CFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
<br>
FFLAGS=-fastsse
<br>
<p>Here's my configure options:
<br>
<p>/configure --prefix=/usr/projects/hpctools/packages/x86_64/OpenMPI/ 
<br>
openmpi-1.1.2 --with-io_romio_flags=--disable-aio --with-bproc
<br>
<p><p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether /usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgf77 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking /usr/projects/hpctools/packages/x86_64/PGI/pgi_6.2-4/ 
<br>
linux86-64/6.2/bin/pgf77 external symbol convention... sin
<br>
gle underscore
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL... 4
<br>
checking for C type corresponding to LOGICAL... int
<br>
checking alignment of Fortran LOGICAL... 4
<br>
...
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-4: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory
On Dec 14, 2006, at 12:01 PM, Michael Galloway wrote:
&gt; good day all, i've been trying to build ompi with the 6.2-X version  
&gt; of the pgi
&gt; compiler set (pgcc 6.2-4 64-bit target on x86-64 Linux). i've tried  
&gt; both 1.1.2 and
&gt; the current nightly build 1.1.3b2r12766, both fail with this error  
&gt; from configure:
&gt;
&gt; *** Fortran 77 compiler
&gt; checking whether we are using the GNU Fortran 77 compiler... no
&gt; checking whether /opt/pgi/linux86-64/6.2/bin/pgf77 accepts -g... yes
&gt; checking if Fortran 77 compiler works... yes
&gt; checking /opt/pgi/linux86-64/6.2/bin/pgf77 external symbol  
&gt; convention... single underscore
&gt; checking if Fortran 77 compiler supports LOGICAL... yes
&gt; checking size of Fortran 77 LOGICAL... 4
&gt; checking for C type corresponding to LOGICAL... not found
&gt; configure: WARNING: *** Did not find corresponding C type
&gt; configure: error: Cannot continue
&gt;
&gt; i will attache the config.log file. i've looked around the maillist  
&gt; and i've seen a few issue
&gt; similar but no real resolution. the env i used to build is:
&gt;
&gt; F90=/opt/pgi/linux86-64/6.2/bin/pgf90
&gt; F77=/opt/pgi/linux86-64/6.2/bin/pgf77
&gt; LM_LICENSE_FILE=/opt/pgi/license.dat
&gt; CXX=/opt/pgi/linux86-64/6.2/bin/pgCC
&gt; FC=/opt/pgi/linux86-64/6.2/bin/pgf90
&gt; CC=/opt/pgi/linux86-64/6.2/bin/pgcc
&gt;
&gt; F90FLAGS=-fastsse
&gt; CXXFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
&gt; FCFLAGS=-fastsse
&gt; CFLAGS=-g -O3 -Minfo=all  -fastsse -Mipa=fast -Knoieee -mp
&gt; FFLAGS=-fastsse
&gt;
&gt; is there something simple i'm messing up? thanks!
&gt;
&gt; -- michael
&gt; &lt;config.log&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2365/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2364.php">Michael Galloway: "[OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
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
