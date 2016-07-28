<?
$subject_val = "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 22:13:35 2013" -->
<!-- isoreceived="20130517021335" -->
<!-- sent="Thu, 16 May 2013 22:13:26 -0400" -->
<!-- isosent="20130517021326" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5" -->
<!-- id="51959246.6030607_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A742283-3BF6-4A71-A58D-E9D1AD8D7661_at_ufl.edu" -->
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
<strong>Date:</strong> 2013-05-16 22:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21926.php">Ralph Castain: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/16/2013 2:16 PM, Geraldine Hochman-Klarenberg wrote:
<br>
<span class="quotelev1">&gt; Maybe I should add that my Intel C++ and Fortran compilers are 
</span><br>
<span class="quotelev1">&gt; different versions. C++ is 12.0.2 and Fortran is 13.0.2. Could that be 
</span><br>
<span class="quotelev1">&gt; an issue? Also, when I check for the location of ifort, it seems to be 
</span><br>
<span class="quotelev1">&gt; in usr/bin - which is different than the C compiler (even though I 
</span><br>
<span class="quotelev1">&gt; have folders /opt/intel/composer_xe_2013 and 
</span><br>
<span class="quotelev1">&gt; /opt/intel/composer_xe_2013.3.171 etc.). And I have tried /source 
</span><br>
<span class="quotelev1">&gt; /opt/intel/bin/ifortvars.sh intel64/ too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geraldine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 16, 2013, at 11:57 AM, Geraldine Hochman-Klarenberg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having trouble configuring OpenMPI-1.6.4 with the Intel C/C++ 
</span><br>
<span class="quotelev2">&gt;&gt; composer (12.0.2). My OS is OSX 10.7.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not a computer whizz so I hope I can explain what I did properly:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) In bash, I did /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev2">&gt;&gt; and then /echo PATH/ showed:
</span><br>
<span class="quotelev2">&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64:/opt/intel/composerxe-2011.2.142/mpirt/bin/intel64:/opt/intel/composerxe-2011.2.142/bin:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/Library/Frameworks/Python.framework/Versions/Current/bin:.:/Library/Frameworks/EPD64.framework/Versions/Current/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/X11/bin/
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; 2)/which icc /and /which icpc /showed:
</span><br>
<span class="quotelev2">&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icc/
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; //opt/intel/composerxe-2011.2.142/bin/intel64/icpc/
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; So that all seems okay to me. Still when I do
</span><br>
<span class="quotelev2">&gt;&gt; /./configure CC=icc CXX=icpc F77=ifort FC=ifort 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi-1.6.4/
</span><br>
<span class="quotelev2">&gt;&gt; from the folder in which the extracted OpenMPI files sit, I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /============================================================================/
</span><br>
<span class="quotelev2">&gt;&gt; /== Configuring Open MPI/
</span><br>
<span class="quotelev2">&gt;&gt; /============================================================================/
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /*** Startup tests/
</span><br>
<span class="quotelev2">&gt;&gt; /checking build system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev2">&gt;&gt; /checking host system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev2">&gt;&gt; /checking target system type... x86_64-apple-darwin11.4.2/
</span><br>
<span class="quotelev2">&gt;&gt; /checking for gcc... icc/
</span><br>
<span class="quotelev2">&gt;&gt; /checking whether the C compiler works... no/
</span><br>
<span class="quotelev2">&gt;&gt; /configure: error: in 
</span><br>
<span class="quotelev2">&gt;&gt; `/Users/geraldinehochman-klarenberg/Projects/openmpi-1.6.4':/
</span><br>
<span class="quotelev2">&gt;&gt; /configure: error: C compiler cannot create executables/
</span><br>
<span class="quotelev2">&gt;&gt; /See `config.log' for more details/
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev1">&gt;
</span><br>
You do need to examine config.log and show it to us if you don't 
<br>
understand it.
<br>
Attempting to use the older C compiler and libraries to link  .o files 
<br>
made by the newer Fortran is likely to fail.
<br>
If you wish to attempt this, assuming the Intel compilers are installed 
<br>
in default directories, I would suggest you source the environment 
<br>
setting for the older compiler, then the newer one, so that the newer 
<br>
libraries will be found first and the older ones used only when they 
<br>
aren't duplicated by the newer ones.
<br>
You also need the 64-bit g++ active.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21926.php">Ralph Castain: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Reply:</strong> <a href="21933.php">Tim Prince: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
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
