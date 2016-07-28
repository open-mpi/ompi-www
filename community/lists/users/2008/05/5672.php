<?
$subject_val = "Re: [OMPI users] Compiler Choice in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 12:45:22 2008" -->
<!-- isoreceived="20080515164522" -->
<!-- sent="Fri, 16 May 2008 00:58:18 +0800" -->
<!-- isosent="20080515165818" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiler Choice in openmpi" -->
<!-- id="OF35FA7550.664976D4-ON4825744A.005733ED-4825744A.005C1C4D_at_cn.ibm.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="E20DADA9-A868-467A-BB4D-59938087E83D_at_cisco.com" -->
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
<strong>Date:</strong> 2008-05-15 12:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5680.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5680.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK. Thanks
<br>

<br>
After I run &quot;./configure CC=icc CXX=icpc FC=ifort F77=ifort&quot; and &quot;make all
<br>
install&quot;, some libs are installed to /usr/local/lib. These libs can not be
<br>
found when compiling my program, how should I do?
<br>

<br>
Wen Hao Wang (&#205;&#245;&#206;&#196;&#234;&#187;)
<br>

<br>
Software Engineer
<br>
IBM China Software Development Laboratory
<br>
Email: wangwhao_at_[hidden]
<br>
Tel: 86-10-82451055
<br>
Fax: 86-10-82782244 ext. 2312
<br>
Address: 5/F, Deshi Building, No.9 East Road Shangdi, Haidian District,
<br>
Beijing, 100085, P.R.China
<br>

<br>

<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008-05-15 19:06          openmpi                             
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

<br>

<br>

<br>

<br>
No worries; errors are to be expected in the config.log file.  There's
<br>
a bunch of tests in configure that are designed to fail on some
<br>
systems (and pass on others). If configure finishes successfully and
<br>
you're able to build OMPI ok, then you can safely ignore the errors in
<br>
config.log.
<br>

<br>

<br>
On May 15, 2008, at 4:33 AM, Wen Hao Wang wrote:
<br>

<br>
<span class="quotelev1">&gt; Hello Jeff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for my delay. To user Intel compiler for openmpi, I removed
</span><br>
<span class="quotelev1">&gt; openmpi installed on my machine and downloaded openmpi 1.2.5 gz
</span><br>
<span class="quotelev1">&gt; file. ./configure script exited with zero. But I find errors in
</span><br>
<span class="quotelev1">&gt; config.log. If any comments/advice can be given, that would be
</span><br>
<span class="quotelev1">&gt; appreciated. My script argument is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CXX=icpc FC=ifort F77=ifort --includedir=/opt/
</span><br>
<span class="quotelev1">&gt; intel/cc/10.1.015/include:/opt/intel/fc/10.1.015/include --libdir=/
</span><br>
<span class="quotelev1">&gt; opt/intel/cc/10.1.015/lib:/opt/intel/fc/10.1.015/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 194 configure:6309: checking how to run the C preprocessor
</span><br>
<span class="quotelev1">&gt; 195 configure:6349: icc -E conftest.c
</span><br>
<span class="quotelev1">&gt; 196 configure:6355: $? = 0
</span><br>
<span class="quotelev1">&gt; 197 configure:6386: icc -E conftest.c
</span><br>
<span class="quotelev1">&gt; 198 conftest.c(37): error #5: could not open source file
</span><br>
<span class="quotelev1">&gt; &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt; 199 #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; 200 ^
</span><br>
<span class="quotelev1">&gt; 201
</span><br>
<span class="quotelev1">&gt; 202 configure:6392: $? = 2
</span><br>
<span class="quotelev1">&gt; 203 configure: failed program was:
</span><br>
<span class="quotelev1">&gt; 204 | /* confdefs.h. */
</span><br>
<span class="quotelev1">&gt; 205 | #define PACKAGE_NAME &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt; 206 | #define PACKAGE_TARNAME &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt; 207 | #define PACKAGE_VERSION &quot;1.2.5&quot;
</span><br>
<span class="quotelev1">&gt; 208 | #define PACKAGE_STRING &quot;Open MPI 1.2.5&quot;
</span><br>
<span class="quotelev1">&gt; 209 | #define PACKAGE_BUGREPORT &quot;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 210 | #define OMPI_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; 211 | #define OMPI_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; 212 | #define OMPI_RELEASE_VERSION 5
</span><br>
<span class="quotelev1">&gt; 213 | #define OMPI_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 214 | #define OMPI_VERSION &quot;5&quot;
</span><br>
<span class="quotelev1">&gt; 215 | #define ORTE_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; 216 | #define ORTE_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; 217 | #define ORTE_RELEASE_VERSION 5
</span><br>
<span class="quotelev1">&gt; 218 | #define ORTE_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 219 | #define ORTE_VERSION &quot;5&quot;
</span><br>
<span class="quotelev1">&gt; 220 | #define OPAL_MAJOR_VERSION 1
</span><br>
<span class="quotelev1">&gt; 221 | #define OPAL_MINOR_VERSION 2
</span><br>
<span class="quotelev1">&gt; 222 | #define OPAL_RELEASE_VERSION 5
</span><br>
<span class="quotelev1">&gt; 223 | #define OPAL_GREEK_VERSION &quot;&quot;
</span><br>
<span class="quotelev1">&gt; 224 | #define OPAL_VERSION &quot;5&quot;
</span><br>
<span class="quotelev1">&gt; 225 | #define OMPI_ARCH &quot;i686-pc-linux-gnu&quot;
</span><br>
<span class="quotelev1">&gt; 226 | #define OMPI_ENABLE_MEM_DEBUG 0
</span><br>
<span class="quotelev1">&gt; 227 | #define OMPI_ENABLE_MEM_PROFILE 0
</span><br>
<span class="quotelev1">&gt; 228 | #define OMPI_ENABLE_DEBUG 0
</span><br>
<span class="quotelev1">&gt; 229 | #define OMPI_WANT_MPI_CXX_SEEK 1
</span><br>
<span class="quotelev1">&gt; 230 | #define MPI_PARAM_CHECK ompi_mpi_param_check
</span><br>
<span class="quotelev1">&gt; 231 | #define OMPI_WANT_PRETTY_PRINT_STACKTRACE 1
</span><br>
<span class="quotelev1">&gt; 232 | #define OMPI_WANT_PERUSE 0
</span><br>
<span class="quotelev1">&gt; 233 | #define OMPI_ENABLE_PTY_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; 234 | #define OMPI_ENABLE_HETEROGENEOUS_SUPPORT 1
</span><br>
<span class="quotelev1">&gt; 235 | #define OPAL_ENABLE_TRACE 0
</span><br>
<span class="quotelev1">&gt; 236 | #define OPAL_ENABLE_IPV6 1
</span><br>
<span class="quotelev1">&gt; 237 | #define ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT 0
</span><br>
<span class="quotelev1">&gt; 238 | #define OMPI_CC &quot;icc&quot;
</span><br>
<span class="quotelev1">&gt; 239 | /* end confdefs.h. */
</span><br>
<span class="quotelev1">&gt; 240 | #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; 241 configure:6425: result: icc -E
</span><br>
<span class="quotelev1">&gt; 242 configure:6454: icc -E conftest.c
</span><br>
<span class="quotelev1">&gt; 243 configure:6460: $? = 0
</span><br>
<span class="quotelev1">&gt; 244 configure:6491: icc -E conftest.c
</span><br>
<span class="quotelev1">&gt; 245 conftest.c(37): error #5: could not open source file
</span><br>
<span class="quotelev1">&gt; &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt; 246 #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; 247 ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wen Hao Wang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 2008-05-13 08:43
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Compiler Choice in openmpi
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2008, at 12:00 AM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. How can I change/set Fortran compiler used after installing
</span><br>
<span class="quotelev2">&gt; &gt; openmpi?
</span><br>
<span class="quotelev2">&gt; &gt; I installed openmpi-1.2.5-2 on RHEL5.2 Server with x86_32 arch. The
</span><br>
<span class="quotelev2">&gt; &gt; rpm has been shipped RHEL images. I directly installed the rpms
</span><br>
<span class="quotelev2">&gt; &gt; without compiling the source code. Now all mpi* compiler wrappers
</span><br>
<span class="quotelev2">&gt; &gt; point to GNU compilers. I need change to use Intel compilers by
</span><br>
<span class="quotelev2">&gt; &gt; default. How should I do? I caught one message about configuration
</span><br>
<span class="quotelev2">&gt; &gt; files /etc/openmpi-mca-params.conf and $HOME/.openmpi/mca-
</span><br>
<span class="quotelev2">&gt; &gt; params.conf. Not sure whether these two files can help. While I
</span><br>
<span class="quotelev2">&gt; &gt; failed to find detailed explanation for them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You really need to compile Open MPI from source for this;
</span><br>
<span class="quotelev1">&gt; unfortunately, there are several aspects of Open MPI that are tied to
</span><br>
<span class="quotelev1">&gt; the specific compiler chain that is used.  Specifically: you *might*
</span><br>
<span class="quotelev1">&gt; be able to get away without re-compiling Open MPI, but I wouldn't
</span><br>
<span class="quotelev1">&gt; advise it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can download the OMPI source tarball from the main web site and
</span><br>
<span class="quotelev1">&gt; configure it with the following to specify the intel compiler suite:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure CC=icc CXX=icpc FC=ifort F77=ifort ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may want to list other configure options, such as --prefix, --
</span><br>
<span class="quotelev1">&gt; enable-mpirun-prefix-by-default, etc.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Can I use Intel compiler and GNU compiler together?
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure whether I can use two types of compiler to compile one
</span><br>
<span class="quotelev2">&gt; &gt; program. For example, use GNU c/c++ compiler and Intel Fortran
</span><br>
<span class="quotelev2">&gt; &gt; compiler together to compile my project.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there are cases where this works.  But if possible, it's
</span><br>
<span class="quotelev1">&gt; generally easiest to simply use a single compiler toolset (e.g., all
</span><br>
<span class="quotelev1">&gt; Intel or all GNU).  More specifically, unless you have a *need* to mix
</span><br>
<span class="quotelev1">&gt; the compilers, just use a single toolset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
--
<br>
Jeff Squyres
<br>
Cisco Systems
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><p>


<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5672/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5672/pic24457.gif" alt="pic24457.gif">
<!-- attachment="pic24457.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-5672/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5673.php">Ryan Buckley ; 21426: "Re: [OMPI users] Running Hetergenous MPI Application Over	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>In reply to:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5680.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
<li><strong>Reply:</strong> <a href="5680.php">Jeff Squyres: "Re: [OMPI users] Compiler Choice in openmpi"</a>
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
