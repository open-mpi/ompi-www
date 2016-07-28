<?
$subject_val = "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 11:27:47 2009" -->
<!-- isoreceived="20090129162747" -->
<!-- sent="Thu, 29 Jan 2009 08:24:39 -0800" -->
<!-- isosent="20090129162439" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Joe Griffin: &amp;quot;Re: Cannot compile on Linux Itanium system&amp;quot;" -->
<!-- id="1D367926756E9848BABD800E249AA5E04263C8_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED10C43789120F4F9E75FFE0BB9FB3E90F7AD03A47_at_NDJSSCC02.ndc.nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 11:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7875.php">Amos Leffler: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<li><strong>In reply to:</strong> <a href="7868.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony,
<br>
<p>&nbsp;
<br>
<p>Well, I was hoping to get you a good data point, but instead I 
<br>
<p>reconfirmed the error you got:
<br>
<p>&nbsp;
<br>
<p>tar -xzf openmpi-1.3.tar.gz
<br>
<p>setenv CC icc
<br>
<p>setenv CXX icc
<br>
<p>setenv F77 ifort
<br>
<p>setenv FC ifort
<br>
<p>cd openmpi-1.3
<br>
<p>setenv LD_LIBRARY_PATH /opt/intel/cc/10.1.012/lib
<br>
<p>./configure --prefix=/scratch/local/openmpi-1.3
<br>
<p>make
<br>
<p>&nbsp;
<br>
<p>Then I got your error.  Outside of make:
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;103&gt; pwd
<br>
<p>/scratch/open13/openmpi-1.3/opal/asm
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;104&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include
<br>
-I../../orte/include -I../../ompi/include
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD
<br>
-MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o
<br>
.libs/atomic-asm.o
<br>
<p>/scratch/icczv4akh.s(1) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icczv4akh.s(2) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icczv4akh.s(3) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icczv4akh.s(4) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;105&gt; which icc
<br>
<p>/opt/intel/cc/10.1.012/bin/icc
<br>
<p>ia64b &lt;106&gt; uname -a
<br>
<p>Linux ia64b 2.6.9-55.EL #1 SMP Fri Apr 20 16:30:19 EDT 2007 ia64 ia64
<br>
ia64 GNU/Linux
<br>
<p>ia64b &lt;107&gt; cat /etc/*release
<br>
<p>Red Hat Enterprise Linux AS release 4 (Nahant Update 5)
<br>
<p>&nbsp;
<br>
<p>Sorry I wasn't much help.
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Iannetti, Anthony C. (GRC-RTB0)
<br>
Sent: Wednesday, January 28, 2009 11:42 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium
<br>
system&quot;
<br>
<p>&nbsp;
<br>
<p>Joe,
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;Here is how I am ./configuring to build OpenMPI
<br>
<p>&nbsp;
<br>
<p>setenv CC icc
<br>
<p>setenv CXX icc
<br>
<p>setenv F77 ifort
<br>
<p>setenv FC ifort
<br>
<p>./configure --prefix=/opt/openmpi-1.3
<br>
<p>&nbsp;
<br>
<p>I am trying some different options, like setting CCAS, but I will not
<br>
report results in this post.
<br>
<p>&nbsp;
<br>
<p>Sorry for the delay.  Weather isn't exactly great in Cleveland.
<br>
<p>Tony
<br>
<p>&nbsp;
<br>
<p>Anthony C. Iannetti, P.E.
<br>
<p>NASA Glenn Research Center
<br>
<p>Aeropropulsion Division, Combustion Branch
<br>
<p>21000 Brookpark Road, MS 5-10
<br>
<p>Cleveland, OH 44135
<br>
<p>phone: (216)433-5586
<br>
<p>email: Anthony.C.Iannetti_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>Please note:  All opinions expressed in this message are my own and NOT
<br>
of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7875.php">Amos Leffler: "Re: [OMPI users] Compilers"</a>
<li><strong>Previous message:</strong> <a href="7873.php">Kiril Dichev: "[OMPI users] Issue with PBS Pro"</a>
<li><strong>In reply to:</strong> <a href="7868.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium system&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>Reply:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
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
