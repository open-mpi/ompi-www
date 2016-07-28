<?
$subject_val = "[OMPI users] cross-compiling openmpi-1.8.4 with static linking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 06:45:26 2015" -->
<!-- isoreceived="20150208114526" -->
<!-- sent="Sun, 8 Feb 2015 12:45:25 +0100" -->
<!-- isosent="20150208114525" -->
<!-- name="simona bellavista" -->
<!-- email="afylot_at_[hidden]" -->
<!-- subject="[OMPI users] cross-compiling openmpi-1.8.4 with static linking" -->
<!-- id="CAC-_n50+tUFR2DnDoZVPgv23P=sti8OqSVXAQXdae8Q7574EtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] cross-compiling openmpi-1.8.4 with static linking<br>
<strong>From:</strong> simona bellavista (<em>afylot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-08 06:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have two systems A (aka Host) and B (aka Target). On A a compiler suite
<br>
is installed (intel 14.0.2), on B there is no compiler. I want to compile
<br>
openmpi on A for running it on system B (in particular, I want to use
<br>
mpirun and mpif90), so I want to have static linking to the intel
<br>
libraries. First of all, I would like to know if it is possible to do this.
<br>
<p>The output of  uname -a on the two systems is:
<br>
1) Host
<br>
Linux host 2.6.32-220.el6.x86_64 #1 SMP Tue Dec 6 19:48:22 GMT 2011 x86_64
<br>
x86_64 x86_64 GNU/Linux
<br>
<p>2) Target
<br>
Linux target 2.6.35-32-server #67-Ubuntu SMP Mon Mar 5 21:13:25 UTC 2012
<br>
x86_64 GNU/Linux
<br>
<p>I am using the following configuration:
<br>
<p>export CC=icc
<br>
export FC=ifort
<br>
export CXX=icpc
<br>
export LDFLAGS=-static-intel
<br>
export LANG=C
<br>
<p>./configure --prefix=/home/user/local/openmpi-1.8.4-cc/
<br>
--host=x86_64-pc-linux-gnu --build=x86_64-pc-linux-gnu --enable-static
<br>
--disable-shared
<br>
<p>I am not sure if the configuration triplets I am using are correct. I know
<br>
that in this case I am not technically cross-compiling, but I was wondering
<br>
if in the general case I have also to set --target and to what.
<br>
<p>I get this error:
<br>
<p>Catastrophic error: could not set locale &quot;&quot; to allow processing of
<br>
multibyte characters
<br>
<p>I attach make.out and output.out (zipped)
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26305/config.out.bz2">config.out.bz2</a>
</ul>
<!-- attachment="config.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26305/make.out.bz2">make.out.bz2</a>
</ul>
<!-- attachment="make.out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Reply:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
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
