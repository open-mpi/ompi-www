<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 07:40:03 2007" -->
<!-- isoreceived="20070606114003" -->
<!-- sent="Wed, 6 Jun 2007 14:39:56 +0300" -->
<!-- isosent="20070606113956" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm_at_[hidden]" -->
<!-- subject="[MTT users] Test build failure" -->
<!-- id="39C75744D164D948A170E9792AF8E7CA02B3B7_at_exil.voltaire.com" -->
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
<strong>From:</strong> Sharon Melamed (<em>sharonm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 07:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Jeff Squyres: "Re: [MTT users] mpi jobs triggered on remote hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run MTT version 2.1.
<br>
<p>In the test build phase, some of the builds fails. For example:
<br>
<p>The build output of the ibm test looks like this:
<br>
<p>&nbsp;
<br>
<p>Evaluating: ./configure CC=mpicc CXX=mpic++ F77=mpif77
<br>
<p>&nbsp;&nbsp;&nbsp;make
<br>
<p>Running command: /tmp/IhYOhJexxR
<br>
<p>OUT:configure: loading site script /usr/local/share/config.site
<br>
<p>OUT:configure: loading site script /usr/local/etc/config.site
<br>
<p>OUT:Configuring Open MPI/IBM test suite
<br>
<p>OUT:checking for a BSD-compatible install... OUT:(cached)
<br>
OUT:/usr/bin/install -c
<br>
<p>OUT:checking whether build environment is sane... OUT:yes
<br>
<p>OUT:checking for gawk... OUT:(cached) OUT:gawk
<br>
<p>OUT:checking whether make sets $(MAKE)... OUT:(cached) OUT:yes
<br>
<p>OUT:checking build system type... OUT:(cached)
<br>
OUT:x86_64-unknown-linux-gnu
<br>
<p>OUT:checking host system type... OUT:x86_64-unknown-linux-gnu
<br>
<p>OUT:checking for gcc... OUT:(cached) OUT:gcc
<br>
<p>OUT:checking for C compiler default output file name... OUT:a.out
<br>
<p>OUT:checking whether the C compiler works... OUT:yes
<br>
<p>OUT:checking whether we are cross compiling... OUT:no
<br>
<p>OUT:checking for suffix of executables... OUT:
<br>
<p>OUT:checking for suffix of object files... OUT:(cached) OUT:o
<br>
<p>OUT:checking whether we are using the GNU C compiler... OUT:(cached)
<br>
OUT:yes
<br>
<p>OUT:checking whether gcc accepts -g... OUT:(cached) OUT:yes
<br>
<p>OUT:checking for gcc option to accept ANSI C... OUT:(cached) OUT:none
<br>
needed
<br>
<p>OUT:checking for style of include used by make... OUT:GNU
<br>
<p>OUT:checking dependency style of gcc... OUT:(cached) OUT:gcc3
<br>
<p>OUT:checking whether we are using the GNU C++ compiler... OUT:(cached)
<br>
OUT:yes
<br>
<p>OUT:checking whether mpic++ accepts -g... OUT:(cached) OUT:yes
<br>
<p>OUT:checking dependency style of mpic++... OUT:(cached) OUT:gcc3
<br>
<p>OUT:checking for mpif77... OUT:yes
<br>
<p>OUT:checking whether we are using the GNU Fortran 77 compiler... OUT:yes
<br>
<p>OUT:checking whether mpif77 accepts -g... OUT:yes
<br>
<p>OUT:checking for ranlib... OUT:(cached) OUT:ranlib
<br>
<p>OUT:checking for mpi.h... OUT:no
<br>
<p>OUT:configure: error: cannot continue -- cannot find &lt;mpi.h&gt;
<br>
<p>OUT:make: *** OUT:No targets specified and no makefile foundOUT:.  Stop.
<br>
<p>Command complete, exit status: 2
<br>
<p>&nbsp;
<br>
<p>As you can see, the configure script cant find the mpi.h file.
<br>
<p>I have this problem in other builds as well.
<br>
<p>&nbsp;
<br>
<p>Attached my ini file.
<br>
<p>&nbsp;
<br>
<p>Can someone help?
<br>
<p>&nbsp;
<br>
<p>Thanks.
<br>
<p>Sharon.
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0314/sharon-test-2.1.ini">sharon-test-2.1.ini</a>
</ul>
<!-- attachment="sharon-test-2.1.ini" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Jeff Squyres: "Re: [MTT users] mpi jobs triggered on remote hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<li><strong>Reply:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
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
