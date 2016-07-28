<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  7 15:12:30 2007" -->
<!-- isoreceived="20070507191230" -->
<!-- sent="Mon, 07 May 2007 15:12:25 -0400" -->
<!-- isosent="20070507191225" -->
<!-- name="Paul Van Allsburg" -->
<!-- email="vanallsburg_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.2.1 mpicc error" -->
<!-- id="463F7A19.7080402_at_hope.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Van Allsburg (<em>vanallsburg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-07 15:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Reply:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just completed the install of release 1.2.1 and I get an error 
<br>
attempting to compile with mpicc.
<br>
<p>The install was done with:
<br>
<p>source /opt/intel/fce/9.1.045/bin/ifortvars.sh
<br>
source /opt/intel/cce/9.1.049/bin/iccvars.sh
<br>
./configure --prefix=/usr/local/openmpi-1.2.1_intel \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/usr/local   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=/opt/intel/cce/9.1.049/bin/icc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=/opt/intel/cce/9.1.049/bin/icpc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=/opt/intel/fce/9.1.045/bin/ifort
<br>
make all install
<br>
<p><p>I tried to compile my hello program with
<br>
<p>$ source /opt/intel/fce/9.1.045/bin/ifortvars.sh
<br>
$ source /opt/intel/cce/9.1.049/bin/iccvars.sh
<br>
$ PATH=&quot;/usr/local/openmpi-1.2.1_intel/bin:$PATH&quot;;export PATH
<br>
$ mpicc hello.c  -o hello  -g
<br>
ld: dummy: No such file: No such file or directory
<br>
<p><p>I installed 1.2 exactly the same and it works fine. 
<br>
<p>Any suggestions? Thanks!
<br>
Paul
<br>
<p><pre>
-- 
Paul Van Allsburg       
Computational Science &amp; Modeling Facilitator
Natural Sciences Division,  Hope College
35 East 12th Street
Holland, Michigan 49423
616-395-7292
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
<li><strong>Reply:</strong> <a href="3204.php">Brian Barrett: "Re: [OMPI users] openmpi-1.2.1 mpicc error"</a>
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
