<?
$subject_val = "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 12:05:39 2012" -->
<!-- isoreceived="20120309170539" -->
<!-- sent="Fri, 09 Mar 2012 12:05:26 -0500" -->
<!-- isosent="20120309170526" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5" -->
<!-- id="4F5A3856.8020208_at_phys.lsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F281670-F984-4EB7-B514-50745B613280_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 12:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Downloaded 1.5.5rc3, installed libtool 2.4.2, autoconf 2.68, and 
<br>
automake 1.11.3, and added them to my PATH.
<br>
<p>Running autogen.sh and I get the following error
<br>
<p>*** Found custom autogen.sh file in:
<br>
***   /home/rdc/work/code/ompi-v1.5/ompi/mca/io/romio/romio
<br>
<p>autoreconf: Entering directory `.'
<br>
autoreconf: configure.in: not using Gettext
<br>
autoreconf: running: aclocal -I confdb --force
<br>
configure.in:2122: warning: macro `AM_PROG_LIBTOOL' not found in library
<br>
autoreconf: configure.in: tracing
<br>
autoreconf: configure.in: not using Libtool
<br>
autoreconf: running: 
<br>
/home/rdc/work/code/autoconf-2.68/install-dir/bin/autoconf 
<br>
--include=confdb --force
<br>
configure.in:2125: error: possibly undefined macro: AM_PROG_LIBTOOL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If this token and others are legitimate, please use m4_pattern_allow.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See the Autoconf documentation.
<br>
autoreconf: /home/rdc/work/code/autoconf-2.68/install-dir/bin/autoconf 
<br>
failed with exit status: 1
<br>
Error running autogen.sh -l in 
<br>
/home/rdc/work/code/ompi-v1.5/ompi/mca/io/romio/romio.  Aborting.
<br>
Error running autogen.sh -l in romio.  Aborting.
<br>
<p>Thoughts?
<br>
<p>On 3/9/12 10:08 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Is the error reproducible with Open MPI 1.5.5rc3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2012, at 10:05 AM, Robert Collyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My apologies for not including that, it was on linux, specifically Fedora Core 9.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/9/12 8:32 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am unable to replicate this problem on both OS X and Linux using the commands you provided.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What OS are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 8, 2012, at 10:27 PM, Robert Collyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The libtool that is constructed for the configuration I'm using (below) has bug when it is constructing compiler_lib_search_path in both the CXX and FC sections, as follows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compiler_lib_search_path=&quot;-L/lib -L/usr/lib -L/usr/local/lib' ...&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where the ellipses is just more directories. The error is the extra ' placed after /usr/local/lib. I am not sure where it creeps in as I am unfamiliar with m4.  Changing both instances allows compilation to continue. Additionally, the extra ' is present in both instances of compiler_lib_search_dir, also.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rob Collyer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. My configuration, to be run from the shell using sh:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export LDFLAGS=&quot;-L/opt/lib -L/opt/lib -L/usr/lib -L/usr/local/lib&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export CPPFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export FCFLAGS=&quot;-I/opt/include -I/usr/include -I/usr/local/include&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=`pwd` CC=/opt/bin/gcc CXX=/opt/bin/g++ FC=/opt/bin/gfortran F77=/opt/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18728.php">Jeffrey Squyres: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<li><strong>In reply to:</strong> <a href="18723.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Reply:</strong> <a href="18730.php">Jeffrey Squyres: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
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
