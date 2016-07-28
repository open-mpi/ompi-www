<?
$subject_val = "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 08:21:57 2011" -->
<!-- isoreceived="20110321122157" -->
<!-- sent="Mon, 21 Mar 2011 08:21:54 -0400" -->
<!-- isosent="20110321122154" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="4D870AA2.23623.7B2A2DCA_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20intel%20compiler%20linking%20issue%20and%20issue%20of%20environment%20variable%20on%20remote%20node,%20with%20open%20mpi%201.4.3"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-03-21 08:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="15967.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to compile our codes with open mpi 1.4.3, by intel 
<br>
compilers 8.1. 
<br>
<p>(1) For open mpi 1.4.3 installation on linux beowulf cluster, I use:
<br>
<p>./configure --prefix=/home/yiguang/dmp-setup/openmpi-1.4.3 
<br>
CC=icc 
<br>
CXX=icpc F77=ifort FC=ifort --enable-static LDFLAGS=&quot;-i-static -
<br>
static-libcxa&quot; --with-wrapper-ldflags=&quot;-i-static -static-libcxa&quot; 2&gt;&amp;1 |
<br>
tee config.log
<br>
<p>and 
<br>
<p>make all install 2&gt;&amp;1 | tee install.log
<br>
<p>The issue is that I am trying to build open mpi 1.4.3 with intel 
<br>
compiler libraries statically linked to it, so that when we run 
<br>
mpirun/orterun, it does not need to dynamically load any intel 
<br>
libraries. But what I got is mpirun always asks for some intel 
<br>
library(e.g. libsvml.so) if I do not put intel library path on library 
<br>
search path($LD_LIBRARY_PATH). I checked the open mpi user 
<br>
archive, it seems only some kind user mentioned to use
<br>
&quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what I did,
<br>
but it seems not working, and I did not get any confirmation whether 
<br>
or not this works for anyone else from the user archive. could 
<br>
anyone help me on this? thanks!
<br>
<p>(2) After compiling and linking our in-house codes  with open mpi 
<br>
1.4.3, we want to make a minimal list of executables for our codes 
<br>
with some from open mpi 1.4.3 installation, without any dependent 
<br>
on external setting such as environment variables, etc.
<br>
<p>I orgnize my directory as follows:
<br>
<p>parent---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;package
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bin  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tools
<br>
<p>In package/ directory are executables from our codes. bin/ has 
<br>
mpirun and orted, copied from openmpi installation. lib/ includes 
<br>
open mpi libraries, and intel libraries. tools/ includes some c-shell 
<br>
scripts to launch mpi jobs, which uses mpirun in bin/.
<br>
<p>The parent/ directory is on a NFS shared by all nodes of the 
<br>
cluster. In ~/.bashrc(shared by all nodes too), I clear PATH and 
<br>
LD_LIBRARY_PATH without direct to any directory of open mpi 
<br>
1.4.3 installation. 
<br>
<p>First, if I set above bin/ directory  to PATH and lib/ 
<br>
LD_LIBRARY_PATH in ~/.bashrc, our parallel codes(starting by the 
<br>
C shell script in tools/) run AS EXPECTED without any problem, so 
<br>
that I set other things right.
<br>
<p>Then again, to avoid modifying ~/.bashrc or ~/.profile, I set bin/ to 
<br>
PATH and lib/ to LD_LIBRARY_PATH in the C shell script under 
<br>
tools/ directory, as:
<br>
<p>setenv PATH /path/to/bin:$PATH
<br>
setenv LD_LIBRARY_PATH /path/to/lib:$LD_LIBRARY_PATH
<br>
<p>Then I start our codes from the C shell script in tools/, I got 
<br>
message: &quot;orted command not found&quot;, which is from slave nodes, 
<br>
and orted should be in directory /path/to/bin. So I guess the $PATH 
<br>
variable or more general, the environment variables set in the script 
<br>
are not passed to the slave nodes by mpirun(I use absolute path for 
<br>
mpirun in the script). After I checked open mpi FAQ, I tried to set 
<br>
the &quot;--prefix /path/to/parent&quot; to mpirun command in the C shell 
<br>
script. it still does not work. Does any one have any hints? thanks!
<br>
<p>I have tried my best to describe the issues, if anything not clear, 
<br>
please let me know as well. Thanks a lot for helps!
<br>
<p>Sincerely,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15923.php">Dave Love: "[OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Previous message:</strong> <a href="15921.php">Dave Love: "[OMPI users] bizarre failure with IMB/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Reply:</strong> <a href="15967.php">Jeff Squyres: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
