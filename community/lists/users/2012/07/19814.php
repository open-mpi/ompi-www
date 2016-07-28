<?
$subject_val = "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 11:08:43 2012" -->
<!-- isoreceived="20120724150843" -->
<!-- sent="Tue, 24 Jul 2012 08:08:18 -0700" -->
<!-- isosent="20120724150818" -->
<!-- name="Stephen J. Barr" -->
<!-- email="stephenjbarr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error" -->
<!-- id="CAAetZUReXVhXs5xx7zvdky9ZOnaaYk-jhKK5FBO0-WDcMWk6tQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPNKQoqF4r+sucP=uj513rukdmZkO9zqubay-D-7nEQAG2XV3Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error<br>
<strong>From:</strong> Stephen J. Barr (<em>stephenjbarr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 11:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, that worked perfectly, and thanks for the explanation as well.
<br>
Best,
<br>
Stephen
<br>
<p>On Tue, Jul 24, 2012 at 7:58 AM, David Warren
<br>
&lt;warren_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Instead of sudo make install do
</span><br>
<span class="quotelev1">&gt; sudo bash
</span><br>
<span class="quotelev1">&gt; source /opt/intel/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you sudo you are starting a new shell as root, not a subshell. So,
</span><br>
<span class="quotelev1">&gt; your environment does not go with it. You need to become root, then set the
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 24, 2012 at 7:47 AM, Stephen J. Barr &lt;stephenjbarr_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on building openmpi-1.6 on ubuntu 12.04 using the intel
</span><br>
<span class="quotelev2">&gt;&gt; compiler suite. My configure command was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/lib CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which completed successfully, as did 'make all'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having trouble with the 'sudo make install' step. Specifically,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/usr/local/lib/lib&quot; || /bin/mkdir -p &quot;/usr/local/lib/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  /bin/bash ../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.la '/usr/local/lib/lib'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: warning: relinking `libmpi_cxx.la'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: (cd /home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash /home/stevejb/apps/openmpi-1.6/libtool  --silent --tag CXX
</span><br>
<span class="quotelev2">&gt;&gt; --mode=relink icpc -O3 -DNDEBUG -finline-functions -pthread -version-info
</span><br>
<span class="quotelev2">&gt;&gt; 1:1:0 -export-dynamic -o libmpi_cxx.la -rpath /usr/local/lib/lib
</span><br>
<span class="quotelev2">&gt;&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la -lrt -lnsl -lutil )
</span><br>
<span class="quotelev2">&gt;&gt; /home/stevejb/apps/openmpi-1.6/libtool: line 8979: icpc: command not found
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: error: relink `libmpi_cxx.la' with the above command
</span><br>
<span class="quotelev2">&gt;&gt; before installing it
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be a similar problem to this thread:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/11/14913.php">http://www.open-mpi.org/community/lists/users/2010/11/14913.php</a> but I
</span><br>
<span class="quotelev2">&gt;&gt; cannot seem to get it resolved. From what I can tell, libtool cannot figure
</span><br>
<span class="quotelev2">&gt;&gt; out where icpc is. From what I know, that location is set in my .bashrc
</span><br>
<span class="quotelev2">&gt;&gt; script with the line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source /opt/intel/bin/compilervars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In addition, I explicitly set it as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/opt/intel/composer_xe_2011_sp1.11.339/bin/intel64/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What am I missing so that I can get libtool to see where icpc is?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Stephen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Warren
</span><br>
<span class="quotelev1">&gt; University of Washington
</span><br>
<span class="quotelev1">&gt; 206 543-0954
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19814/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- nextthread="start" -->
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
