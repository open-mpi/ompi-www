<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 31 13:06:55 2006" -->
<!-- isoreceived="20061031180655" -->
<!-- sent="Tue, 31 Oct 2006 19:06:39 +0100" -->
<!-- isosent="20061031180639" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info fails: ...invalid ELF header (ignored)" -->
<!-- id="200610311906.39755.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="45478322.5000705_at_itm.uni-stuttgart.de" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-31 13:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2094.php">Mike Aho: "[OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>In reply to:</strong> <a href="2092.php">Florian Fleissner: "[OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear Florian,
<br>
right across the corner at the University of Stuttgart ,-]
<br>
On Tuesday 31 October 2006 18:08, Florian Fleissner wrote:
<br>
<span class="quotelev1">&gt; I sucessfully build and installed OpenMPI on a Debian machine running
</span><br>
<span class="quotelev1">&gt; Sarge.
</span><br>
I am not so sure, that the compilation and installation went through 
<br>
correctly, You didn't pass any options regarding shared/static compilation, 
<br>
however, in the config.log output, the opal/libtltdl the flags 
<br>
--disable-shared and --enable-static get passed...
<br>
<p>So You probably end up having only static libraries in the 
<br>
~/bin/OpenMPI/lib-directory, right?
<br>
<p>Could You please untar the openmpi-1.1.2 again and do a VPATH-build into a 
<br>
clean (empty) prefix-directory, e.g.:
<br>
<p>tar xjf openmpi-1.1.2.tar.bz2
<br>
cd openmpi-1.1.2
<br>
mkdir COMPILE
<br>
cd COMPILE
<br>
../configure --prefix=`pwd`/usr
<br>
<p>and directly mail me the output of 
<br>
config.log
<br>
and
<br>
ls -al this usr-directory?
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p><p><span class="quotelev2">&gt;   &gt; uname -a
</span><br>
<span class="quotelev2">&gt;   &gt; Linux karush 2.6.11-1-686-smp #1 SMP Mon Jun 20 20:18:45 MDT 2005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I am not root, I installed OpenMPI into my home to ~/bin/OpenMPI. I
</span><br>
<span class="quotelev1">&gt; added ..../OpenMPI/bin to my PATH and ..../OpenMPI/lib to my
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately ompi_info failed, complaining that it cannot find some
</span><br>
<span class="quotelev1">&gt; libraries that are obviously installed in ..../OpenMPI/lib/openmpi .
</span><br>
<span class="quotelev1">&gt; Although all installation manuals I found only require ..../OpenMPI/lib
</span><br>
<span class="quotelev1">&gt; to be added to LD_LIBRARY_PATH, I tried adding the subdirectory
</span><br>
<span class="quotelev1">&gt; ..../lib/openmpi to LD_LIBRARY_PATH as well.
</span><br>
<span class="quotelev1">&gt; The result is that now the libraries seem to be found but ompi_info
</span><br>
<span class="quotelev1">&gt; still complains about the libraries to have &quot;invalid ELF header&quot; (see
</span><br>
<span class="quotelev1">&gt; attached output of ompi_info).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything that I have to configure additionally to make it run?
</span><br>
<span class="quotelev1">&gt; Unfortunately I am not familiar with libtool's load mechanism for .la libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours
</span><br>
<span class="quotelev1">&gt; Florian Fleissner
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2096.php">Nader Ahmadi: "[OMPI users] Problem starting rank other than zero"</a>
<li><strong>Previous message:</strong> <a href="2094.php">Mike Aho: "[OMPI users] psm.h not found for include mtl_psm.h. configure: error: PSM support requested but not found. Aborting"</a>
<li><strong>In reply to:</strong> <a href="2092.php">Florian Fleissner: "[OMPI users] ompi_info fails: ...invalid ELF header (ignored)"</a>
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
