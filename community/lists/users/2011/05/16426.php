<?
$subject_val = "[OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 13:36:28 2011" -->
<!-- isoreceived="20110503173628" -->
<!-- sent="Tue, 03 May 2011 19:36:22 +0200" -->
<!-- isosent="20110503173622" -->
<!-- name="Steph Bredenhann" -->
<!-- email="support_at_[hidden]" -->
<!-- subject="[OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1" -->
<!-- id="1304444182.4dc03d167b20f_at_webmail.adept.co.za" -->
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
<strong>Subject:</strong> [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1<br>
<strong>From:</strong> Steph Bredenhann (<em>support_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 13:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam
<br>
<p>I want to build openmpi for use with INTEL compilers (version 11.1) on my Ubuntu
<br>
10.10 x64 system. I am using the guidelines from
<br>
<a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
<br>
and specifically the following instructions:
<br>
<p><p>./configure --prefix=/usr/local CC=icc CXX=icpc F77=ifort FC=ifort
<br>
... output of configure ...
<br>
make all install
<br>
... output of build and installation ...
<br>
<p>The result is shown below. As can be seen it was unsuccessful. I'll appreciate
<br>
some guidance here as I am nearing the deadline for a project that is part of
<br>
my research for my PhD.
<br>
<p>Thanks in advance.
<br>
<p>steph_at_sjb-linux:/src/openmpi-1.4.3$ ./configure --prefix=/opt/openmpi-1.4.3
<br>
CC=icc CXX=icpc F77=ifort FC=ifort
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
: command not foundconfig/missing: line 3:
<br>
: command not foundconfig/missing: line 5:
<br>
: command not foundconfig/missing: line 9:
<br>
: command not foundconfig/missing: line 14:
<br>
: command not foundconfig/missing: line 19:
<br>
: command not foundconfig/missing: line 24:
<br>
: command not foundconfig/missing: line 29:
<br>
/src/openmpi-1.4.3/config/missing: line 49: syntax error near unexpected token
<br>
`'n
<br>
'src/openmpi-1.4.3/config/missing: line 49: `case $1 in
<br>
configure: WARNING: `missing' script is too old or missing
<br>
checking for a thread-safe mkdir -p... /bin/mkdir -p
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking how to create a ustar tar archive... gnutar
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Checking versions
<br>
: integer expression expected 3
<br>
: integer expression expected 0
<br>
.4ecking Open MPI version... 1
<br>
checking Open MPI release date... Oct 05, 2010
<br>
checking Open MPI Subversion repository version... r23834
<br>
: integer expression expected 3
<br>
: integer expression expected 0
<br>
.4ecking Open Run-Time Environment version... 1
<br>
checking Open Run-Time Environment release date... Oct 05, 2010
<br>
checking Open Run-Time Environment Subversion repository version... r23834
<br>
: integer expression expected 3
<br>
: integer expression expected 0
<br>
.4ecking Open Portable Access Layer version... 1
<br>
checking Open Portable Access Layer release date... Oct 05, 2010
<br>
checking Open Portable Access Layer Subversion repository version... r23834
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
: command not found
<br>
<p>*** Initialization, setup
<br>
configure: builddir: /src/openmpi-1.4.3
<br>
configure: srcdir: /src/openmpi-1.4.3
<br>
configure: error: cannot run /bin/sh config/config.sub
<br>
steph_at_sjb-linux:/src/openmpi-1.4.3$ make all install
<br>
make: *** No rule to make target `all'.  Stop.
<br>
steph_at_sjb-linux:/src/openmpi-1.4.3$ make install
<br>
make: *** No rule to make target `install'.  Stop.
<br>
steph_at_sjb-linux:/src/openmpi-1.4.3$
<br>
<p><p>Regards
<br>
<p>Steph Bredenhann
<br>
<p><p><p><p><p><p><pre>
-- 
This message was sent by Adept Internet's webmail. 
<a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16425.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
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
