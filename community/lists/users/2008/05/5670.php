<?
$subject_val = "Re: [OMPI users] Compiler Choice in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 04:20:48 2008" -->
<!-- isoreceived="20080515082048" -->
<!-- sent="Thu, 15 May 2008 16:33:33 +0800" -->
<!-- isosent="20080515083333" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiler Choice in openmpi" -->
<!-- id="OFA856213B.A028CB9B-ON4825744A.002E5AC9-4825744A.002DE612_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="72F09140-EA87-4DC0-A46F-5D557BF61AE0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiler Choice in openmpi<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-15 04:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff:
<br>
<p>Sorry for my delay. To user Intel compiler for openmpi, I removed openmpi
<br>
installed on my machine and downloaded openmpi 1.2.5 gz file. ./configure
<br>
script exited with zero. But I find errors in config.log. If any
<br>
comments/advice can be given, that would be appreciated. My script argument
<br>
is
<br>
<p>./configure CC=icc CXX=icpc FC=ifort F77=ifort
<br>
--includedir=/opt/intel/cc/10.1.015/include:/opt/intel/fc/10.1.015/include
<br>
--libdir=/opt/intel/cc/10.1.015/lib:/opt/intel/fc/10.1.015/lib
<br>
<p>&nbsp;&nbsp;194 configure:6309: checking how to run the C preprocessor
<br>
&nbsp;&nbsp;195 configure:6349: icc -E  conftest.c
<br>
&nbsp;&nbsp;196 configure:6355: $? = 0
<br>
&nbsp;&nbsp;197 configure:6386: icc -E  conftest.c
<br>
&nbsp;&nbsp;198 conftest.c(37): error #5: could not open source file
<br>
&quot;ac_nonexistent.h&quot;
<br>
&nbsp;&nbsp;199   #include &lt;ac_nonexistent.h&gt;
<br>
&nbsp;&nbsp;200                              ^
<br>
&nbsp;&nbsp;201
<br>
&nbsp;&nbsp;202 configure:6392: $? = 2
<br>
&nbsp;&nbsp;203 configure: failed program was:
<br>
&nbsp;&nbsp;204 | /* confdefs.h.  */
<br>
&nbsp;&nbsp;205 | #define PACKAGE_NAME &quot;Open MPI&quot;
<br>
&nbsp;&nbsp;206 | #define PACKAGE_TARNAME &quot;openmpi&quot;
<br>
&nbsp;&nbsp;207 | #define PACKAGE_VERSION &quot;1.2.5&quot;
<br>
&nbsp;&nbsp;208 | #define PACKAGE_STRING &quot;Open MPI 1.2.5&quot;
<br>
&nbsp;&nbsp;209 | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>&quot;
<br>
&nbsp;&nbsp;210 | #define OMPI_MAJOR_VERSION 1
<br>
&nbsp;&nbsp;211 | #define OMPI_MINOR_VERSION 2
<br>
&nbsp;&nbsp;212 | #define OMPI_RELEASE_VERSION 5
<br>
&nbsp;&nbsp;213 | #define OMPI_GREEK_VERSION &quot;&quot;
<br>
&nbsp;&nbsp;214 | #define OMPI_VERSION &quot;5&quot;
<br>
&nbsp;&nbsp;215 | #define ORTE_MAJOR_VERSION 1
<br>
&nbsp;&nbsp;216 | #define ORTE_MINOR_VERSION 2
<br>
&nbsp;&nbsp;217 | #define ORTE_RELEASE_VERSION 5
<br>
&nbsp;&nbsp;218 | #define ORTE_GREEK_VERSION &quot;&quot;
<br>
&nbsp;&nbsp;219 | #define ORTE_VERSION &quot;5&quot;
<br>
&nbsp;&nbsp;220 | #define OPAL_MAJOR_VERSION 1
<br>
&nbsp;&nbsp;221 | #define OPAL_MINOR_VERSION 2
<br>
&nbsp;&nbsp;222 | #define OPAL_RELEASE_VERSION 5
<br>
&nbsp;&nbsp;223 | #define OPAL_GREEK_VERSION &quot;&quot;
<br>
&nbsp;&nbsp;224 | #define OPAL_VERSION &quot;5&quot;
<br>
&nbsp;&nbsp;225 | #define OMPI_ARCH &quot;i686-pc-linux-gnu&quot;
<br>
&nbsp;&nbsp;226 | #define OMPI_ENABLE_MEM_DEBUG 0
<br>
&nbsp;&nbsp;227 | #define OMPI_ENABLE_MEM_PROFILE 0
<br>
&nbsp;&nbsp;228 | #define OMPI_ENABLE_DEBUG 0
<br>
&nbsp;&nbsp;229 | #define OMPI_WANT_MPI_CXX_SEEK 1
<br>
&nbsp;&nbsp;230 | #define MPI_PARAM_CHECK ompi_mpi_param_check
<br>
&nbsp;&nbsp;231 | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
<br>
&nbsp;&nbsp;232 | #define OMPI_WANT_PERUSE 0
<br>
&nbsp;&nbsp;233 | #define OMPI_ENABLE_PTY_SUPPORT 1
<br>
&nbsp;&nbsp;234 | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
<br>
&nbsp;&nbsp;235 | #define OPAL_ENABLE_TRACE 0
<br>
&nbsp;&nbsp;236 | #define OPAL_ENABLE_IPV6 1
<br>
&nbsp;&nbsp;237 | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
<br>
&nbsp;&nbsp;238 | #define OMPI_CC &quot;icc&quot;
<br>
&nbsp;&nbsp;239 | /* end confdefs.h.  */
<br>
&nbsp;&nbsp;240 | #include &lt;ac_nonexistent.h&gt;
<br>
&nbsp;&nbsp;241 configure:6425: result: icc -E
<br>
&nbsp;&nbsp;242 configure:6454: icc -E  conftest.c
<br>
&nbsp;&nbsp;243 configure:6460: $? = 0
<br>
&nbsp;&nbsp;244 configure:6491: icc -E  conftest.c
<br>
&nbsp;&nbsp;245 conftest.c(37): error #5: could not open source file
<br>
&quot;ac_nonexistent.h&quot;
<br>
&nbsp;&nbsp;246   #include &lt;ac_nonexistent.h&gt;
<br>
&nbsp;&nbsp;247                              ^
<br>
<p>Thanks!
<br>
<p>Wen Hao Wang
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jeff Squyres                                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;jsquyres_at_cisco.c                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;om&gt;                                                        To 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by:                  Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-bounces_at_ope                                          cc 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n-mpi.org                                                     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Re: [OMPI users] Compiler Choice in 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-13 08:43          openmpi                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please respond to                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;users_at_open-mpi.o                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rg&gt;                                                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>On May 11, 2008, at 12:00 AM, Wen Hao Wang wrote:
<br>
<p><span class="quotelev1">&gt; 1. How can I change/set Fortran compiler used after installing
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt; I installed openmpi-1.2.5-2 on RHEL5.2 Server with x86_32 arch. The
</span><br>
<span class="quotelev1">&gt; rpm has been shipped RHEL images. I directly installed the rpms
</span><br>
<span class="quotelev1">&gt; without compiling the source code. Now all mpi* compiler wrappers
</span><br>
<span class="quotelev1">&gt; point to GNU compilers. I need change to use Intel compilers by
</span><br>
<span class="quotelev1">&gt; default. How should I do? I caught one message about configuration
</span><br>
<span class="quotelev1">&gt; files /etc/openmpi-mca-params.conf and $HOME/.openmpi/mca-
</span><br>
<span class="quotelev1">&gt; params.conf. Not sure whether these two files can help. While I
</span><br>
<span class="quotelev1">&gt; failed to find detailed explanation for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You really need to compile Open MPI from source for this;
<br>
unfortunately, there are several aspects of Open MPI that are tied to
<br>
the specific compiler chain that is used.  Specifically: you *might*
<br>
be able to get away without re-compiling Open MPI, but I wouldn't
<br>
advise it.
<br>
<p>You can download the OMPI source tarball from the main web site and
<br>
configure it with the following to specify the intel compiler suite:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc FC=ifort F77=ifort ...
<br>
<p>You may want to list other configure options, such as --prefix, --
<br>
enable-mpirun-prefix-by-default, etc.
<br>
<span class="quotelev1">&gt; 2. Can I use Intel compiler and GNU compiler together?
</span><br>
<span class="quotelev1">&gt; I am not sure whether I can use two types of compiler to compile one
</span><br>
<span class="quotelev1">&gt; program. For example, use GNU c/c++ compiler and Intel Fortran
</span><br>
<span class="quotelev1">&gt; compiler together to compile my project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, there are cases where this works.  But if possible, it's
<br>
generally easiest to simply use a single compiler toolset (e.g., all
<br>
Intel or all GNU).  More specifically, unless you have a *need* to mix
<br>
the compilers, just use a single toolset.
<br>
<p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5670/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5670/pic31042.gif" alt="pic31042.gif">
<!-- attachment="pic31042.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5670/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Previous message:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5656.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
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
