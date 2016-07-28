<?
$subject_val = "[OMPI users] configure problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 21:21:35 2013" -->
<!-- isoreceived="20130405012135" -->
<!-- sent="Thu, 4 Apr 2013 21:21:30 -0400" -->
<!-- isosent="20130405012130" -->
<!-- name="Alan Sayre" -->
<!-- email="ansayre62_at_[hidden]" -->
<!-- subject="[OMPI users] configure problem" -->
<!-- id="CAGzRjXa+sLD=3VDXgd58vHExdOQ_pNu=ZrTevM4JyNxpcJ4F+A_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] configure problem<br>
<strong>From:</strong> Alan Sayre (<em>ansayre62_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 21:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
<li><strong>Previous message:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>Reply:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build v 1.6.4 with a local install of gcc 4.7.2.
<br>
<p>I am trying to use the following script
<br>
<p>&lt;begin&gt;
<br>
OWD=$PWD
<br>
GMPD=$OWD/gmp-4.3.2
<br>
MPFRD=$OWD/mpfr-2.4.2
<br>
MPCD=$OWD/mpc-0.8.1
<br>
PPLD=$OWD/ppl-0.11
<br>
CLOOG=$OWD/cloog-ppl-0.15.9
<br>
GCC=$OWD/gcc-4.7.2-rhel5
<br>
<p>export
<br>
LD_LIBRARY_PATH=$GCC/lib64:$GMPD/lib:$MPFRD/lib:$MPCD/lib:$PPLD/lib:$CLOOG/lib:$LD_LIBRARY_PATH
<br>
export PATH=$GCC/bin:/usr/bin:/bin
<br>
export CFLAGS='-I/nm/programs/third-party/gcc-4.7.2-rhel5/include
<br>
-I/nm/programs/third-party/gcc-4.7.2-rhel5/include/c++
<br>
-I/nm/programs/third-party/gcc-4.7.2-rhel5/include/c++/4.7.2'
<br>
<p>#mkdir tmp-install &gt;&amp; /dev/null
<br>
cd    tmp-install
<br>
<p>rm -rf openmpi-1.6.4-$1
<br>
cp ../downloads/openmpi-1.6.4.tar.gz .
<br>
tar -xvf openmpi-1.6.4.tar.gz
<br>
<p>mv openmpi-1.6.4 openmpi-1.6.4-$1
<br>
cd openmpi-1.6.4-$1
<br>
<p>./configure \
<br>
--prefix=$OWD/openmpi-1.6.4-$1 \
<br>
--enable-static
<br>
<p>#make
<br>
#make install
<br>
cd $OWD
<br>
<p>&lt;end&gt;
<br>
<p>The gcc executable is tested in test.sh:
<br>
<p>OWD=$PWD
<br>
GMPD=$OWD/gmp-4.3.2
<br>
MPFRD=$OWD/mpfr-2.4.2
<br>
MPCD=$OWD/mpc-0.8.1
<br>
PPLD=$OWD/ppl-0.11
<br>
CLOOG=$OWD/cloog-ppl-0.15.9
<br>
<p>export
<br>
LD_LIBRARY_PATH=$GMPD/lib:$MPFRD/lib:$MPCD/lib:$PPLD/lib:$CLOOG/lib:$OWD/gcc-4.7.2-rhel5/lib64
<br>
export PATH=$OWD/gcc-4.7.2-rhel5/bin:/bin:/usr/bin
<br>
<p>which gcc
<br>
which g++
<br>
<p>rm -r test &gt;&amp; /dev/null
<br>
c++ -o test test.c
<br>
./test
<br>
<p>the test code test.c
<br>
<p>include &lt;stdio.h&gt;
<br>
<p>int
<br>
main(const int argc, const char* argv[])
<br>
&nbsp;{
<br>
&nbsp;&nbsp;bool bar;
<br>
&nbsp;&nbsp;bool foo = true;
<br>
&nbsp;&nbsp;bar = foo;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Hello World!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;sizeof bool %i\n&quot;, sizeof(bool));
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;}
<br>
<p>The output &lt;test.sh &gt; test.out&gt;
<br>
/nm/programs/third_party/gcc-4.7.2-rhel5/bin/gcc
<br>
/nm/programs/third_party/gcc-4.7.2-rhel5/bin/g++
<br>
Hello World!
<br>
sizeof bool 1
<br>
<p>The configure steps with message that bool size is zero (at least I think
<br>
that's why it stops). The config.log.gz is attached.
<br>
<p>The compiling system is RHEL5.
<br>
<p>Thanks,
<br>
<p>Alan
<br>
<p>




<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/configure_openmpi-1.6.4-xxx.sh">configure_openmpi-1.6.4-xxx.sh</a>
</ul>
<!-- attachment="configure_openmpi-1.6.4-xxx.sh" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/test.out">test.out</a>
</ul>
<!-- attachment="test.out" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21680/test.sh">test.sh</a>
</ul>
<!-- attachment="test.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
<li><strong>Previous message:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>Reply:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
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
