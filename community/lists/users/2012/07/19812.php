<?
$subject_val = "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 10:56:59 2012" -->
<!-- isoreceived="20120724145659" -->
<!-- sent="Tue, 24 Jul 2012 07:56:34 -0700" -->
<!-- isosent="20120724145634" -->
<!-- name="Stephen J. Barr" -->
<!-- email="stephenjbarr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error" -->
<!-- id="CAAetZUSnkfnkrbtFbTctT9S-y8Lb7crgAersKhwBDKAOseVOrw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="29688C82-386D-4C66-891F-2B700DBFD0C0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-07-24 10:56:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
'sudo which icpc' comes up blank, so that must be the problem.
<br>
<p>Thanks!
<br>
<p>On Tue, Jul 24, 2012 at 7:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When you use sudo, the shell replaces your existing environ and executes
</span><br>
<span class="quotelev1">&gt; the root's login script - is that setting the path to icpc? You can check
</span><br>
<span class="quotelev1">&gt; with &quot;sudo which icpc&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2012, at 7:47 AM, Stephen J. Barr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on building openmpi-1.6 on ubuntu 12.04 using the intel
</span><br>
<span class="quotelev1">&gt; compiler suite. My configure command was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/lib CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which completed successfully, as did 'make all'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having trouble with the 'sudo make install' step. Specifically,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/usr/local/lib/lib&quot; || /bin/mkdir -p &quot;/usr/local/lib/lib&quot;
</span><br>
<span class="quotelev1">&gt;  /bin/bash ../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.la '/usr/local/lib/lib'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libmpi_cxx.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: (cd /home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx;
</span><br>
<span class="quotelev1">&gt; /bin/bash /home/stevejb/apps/openmpi-1.6/libtool  --silent --tag CXX
</span><br>
<span class="quotelev1">&gt; --mode=relink icpc -O3 -DNDEBUG -finline-functions -pthread -version-info
</span><br>
<span class="quotelev1">&gt; 1:1:0 -export-dynamic -o libmpi_cxx.la -rpath /usr/local/lib/lib
</span><br>
<span class="quotelev1">&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/
</span><br>
<span class="quotelev1">&gt; libmpi.la -lrt -lnsl -lutil )
</span><br>
<span class="quotelev1">&gt; /home/stevejb/apps/openmpi-1.6/libtool: line 8979: icpc: command not found
</span><br>
<span class="quotelev1">&gt; libtool: install: error: relink `libmpi_cxx.la' with the above command
</span><br>
<span class="quotelev1">&gt; before installing it
</span><br>
<span class="quotelev1">&gt; make[3]: *** [install-libLTLIBRARIES] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to be a similar problem to this thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/11/14913.php">http://www.open-mpi.org/community/lists/users/2010/11/14913.php</a> but I
</span><br>
<span class="quotelev1">&gt; cannot seem to get it resolved. From what I can tell, libtool cannot figure
</span><br>
<span class="quotelev1">&gt; out where icpc is. From what I know, that location is set in my .bashrc
</span><br>
<span class="quotelev1">&gt; script with the line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, I explicitly set it as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/opt/intel/composer_xe_2011_sp1.11.339/bin/intel64/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I missing so that I can get libtool to see where icpc is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and best regards,
</span><br>
<span class="quotelev1">&gt; Stephen
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
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
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
