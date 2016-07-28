<?
$subject_val = "[OMPI users] Compiling OpenMPI with PGI pgc++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 10:54:48 2014" -->
<!-- isoreceived="20140129155448" -->
<!-- sent="Wed, 29 Jan 2014 16:54:42 +0100" -->
<!-- isosent="20140129155442" -->
<!-- name="Jiri Kraus" -->
<!-- email="jkraus_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI with PGI pgc++" -->
<!-- id="754A977B8DC8A14F9C722AF73FB8C004B679E15722_at_DEMAIL01.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Compiling OpenMPI with PGI pgc++<br>
<strong>From:</strong> Jiri Kraus (<em>jkraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 10:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23496.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to compile OpenMPI 1.7.3 with pgc++ (14.1) as C++ compiler. During configure it fails with
<br>
<p>checking if C and C++ are link compatible... no
<br>
<p>The error from config.log is:
<br>
<p>configure:18205: checking if C and C++ are link compatible
<br>
configure:18230: pgcc -c -DNDEBUG -fast  conftest_c.c
<br>
configure:18237: $? = 0
<br>
configure:18268: pgc++ -o conftest -DNDEBUG -fast   conftest.cpp conftest_c.o  &gt;&amp;5
<br>
conftest.cpp:
<br>
&quot;conftest.cpp&quot;, line 21: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;redefinition ignored
<br>
&nbsp;&nbsp;#define _GNU_SOURCE 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;conftest.cpp&quot;, line 86: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;redefinition ignored
<br>
&nbsp;&nbsp;#define _GNU_SOURCE 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;conftest.cpp&quot;, line 167: warning: statement is unreachable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>2 errors detected in the compilation of &quot;conftest.cpp&quot;.
<br>
<p>When I use pgcpp instead of pgc++ OpenMPI configures and builds.
<br>
<p>I am using
<br>
<p>CXX=pgcpp|pgc++ CC=pgcc FC=pgfortran F77=pgfortran CFLAGS=-fast FCFLAGS=-fast FFLAGS=-fast CXXFLAGS=-fast ./configure --with-hwloc=/shared/apps/rhel-6.2/tools/hwloc-1.7.1 --enable-hwloc-pci --with-cuda --prefix=/home-2/jkraus/local/openmpi-1.7.3/pgi-14.1/cuda-5.5.22
<br>
<p>to configure OpenMPI. Any Idea what caused the errors with pgc++?
<br>
<p>Thanks
<br>
<p>Jiri
<br>
<p><p>NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
<br>
Managing Director: Karen Theresa Burns
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23496.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
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
