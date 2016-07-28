<?
$subject_val = "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 10:37:13 2013" -->
<!-- isoreceived="20130517143713" -->
<!-- sent="Fri, 17 May 2013 10:33:49 -0400" -->
<!-- isosent="20130517143349" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5" -->
<!-- id="51963FCD.5050102_at_aol.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51959246.6030607_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 10:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Previous message:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/16/2013 10:13 PM, Tim Prince wrote:
<br>
<span class="quotelev1">&gt; On 5/16/2013 2:16 PM, Geraldine Hochman-Klarenberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I should add that my Intel C++ and Fortran compilers are 
</span><br>
<span class="quotelev2">&gt;&gt; different versions. C++ is 12.0.2 and Fortran is 13.0.2. Could that 
</span><br>
<span class="quotelev2">&gt;&gt; be an issue? Also, when I check for the location of ifort, it seems 
</span><br>
<span class="quotelev2">&gt;&gt; to be in usr/bin - which is different than the C compiler (even 
</span><br>
<span class="quotelev2">&gt;&gt; though I have folders /opt/intel/composer_xe_2013 and 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/composer_xe_2013.3.171 etc.). And I have tried /source 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/bin/ifortvars.sh intel64/ too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Geraldine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 16, 2013, at 11:57 AM, Geraldine Hochman-Klarenberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having trouble configuring OpenMPI-1.6.4 with the Intel C/C++ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; composer (12.0.2). My OS is OSX 10.7.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not a computer whizz so I hope I can explain what I did properly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) In bash, I did /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then /echo PATH/ showed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64:/opt/intel/composerxe-2011.2.142/mpirt/bin/intel64:/opt/intel/composerxe-2011.2.142/bin:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/Library/Frameworks/Python.framework/Versions/Current/bin:.:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2)/which icc /and /which icpc /showed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icpc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that all seems okay to me. Still when I do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./configure CC=icc CXX=icpc F77=ifort FC=ifort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/opt/openmpi-1.6.4/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the folder in which the extracted OpenMPI files sit, I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /============================================================================/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /== Configuring Open MPI/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /============================================================================/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*** Startup tests/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking build system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking host system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking target system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking for gcc... icc/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /checking whether the C compiler works... no/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /configure: error: in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/Users/geraldinehochman-klarenberg/Projects/openmpi-1.6.4':/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /configure: error: C compiler cannot create executables/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /See `config.log' for more details/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; You do need to examine config.log and show it to us if you don't 
</span><br>
<span class="quotelev1">&gt; understand it.
</span><br>
<span class="quotelev1">&gt; Attempting to use the older C compiler and libraries to link  .o files 
</span><br>
<span class="quotelev1">&gt; made by the newer Fortran is likely to fail.
</span><br>
<span class="quotelev1">&gt; If you wish to attempt this, assuming the Intel compilers are 
</span><br>
<span class="quotelev1">&gt; installed in default directories, I would suggest you source the 
</span><br>
<span class="quotelev1">&gt; environment setting for the older compiler, then the newer one, so 
</span><br>
<span class="quotelev1">&gt; that the newer libraries will be found first and the older ones used 
</span><br>
<span class="quotelev1">&gt; only when they aren't duplicated by the newer ones.
</span><br>
<span class="quotelev1">&gt; You also need the 64-bit g++ active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
It's probably unnecessary to use icpc at all when building OpenMPI. icpc 
<br>
is compatible with gcc/g++ built objects,
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21934.php">dani: "[OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<li><strong>Previous message:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21927.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
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
