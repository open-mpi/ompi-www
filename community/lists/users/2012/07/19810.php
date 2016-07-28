<?
$subject_val = "[OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 10:47:57 2012" -->
<!-- isoreceived="20120724144757" -->
<!-- sent="Tue, 24 Jul 2012 07:47:32 -0700" -->
<!-- isosent="20120724144732" -->
<!-- name="Stephen J. Barr" -->
<!-- email="stephenjbarr_at_[hidden]" -->
<!-- subject="[OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error" -->
<!-- id="CAAetZUR75ackPR1-vx+ZAV7y2_HxhEjWswOALSoJU75Qcqeqww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error<br>
<strong>From:</strong> Stephen J. Barr (<em>stephenjbarr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 10:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Reply:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Reply:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I am working on building openmpi-1.6 on ubuntu 12.04 using the intel
<br>
compiler suite. My configure command was:
<br>
<p>./configure --prefix=/usr/local/lib CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>which completed successfully, as did 'make all'
<br>
<p>I am having trouble with the 'sudo make install' step. Specifically,
<br>
<p>make[2]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
<br>
make[3]: Entering directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
<br>
test -z &quot;/usr/local/lib/lib&quot; || /bin/mkdir -p &quot;/usr/local/lib/lib&quot;
<br>
&nbsp;/bin/bash ../../../libtool   --mode=install /usr/bin/install -c
<br>
libmpi_cxx.la '/usr/local/lib/lib'
<br>
libtool: install: warning: relinking `libmpi_cxx.la'
<br>
libtool: install: (cd /home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx;
<br>
/bin/bash /home/stevejb/apps/openmpi-1.6/libtool  --silent --tag CXX
<br>
--mode=relink icpc -O3 -DNDEBUG -finline-functions -pthread -version-info
<br>
1:1:0 -export-dynamic -o libmpi_cxx.la -rpath /usr/local/lib/lib mpicxx.lo
<br>
intercepts.lo comm.lo datatype.lo win.lo file.lo
<br>
../../../ompi/libmpi.la-lrt -lnsl -lutil )
<br>
/home/stevejb/apps/openmpi-1.6/libtool: line 8979: icpc: command not found
<br>
libtool: install: error: relink `libmpi_cxx.la' with the above command
<br>
before installing it
<br>
make[3]: *** [install-libLTLIBRARIES] Error 1
<br>
make[3]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi/mpi/cxx'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/stevejb/apps/openmpi-1.6/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
<p><p>It seems to be a similar problem to this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14913.php">http://www.open-mpi.org/community/lists/users/2010/11/14913.php</a> but I
<br>
cannot seem to get it resolved. From what I can tell, libtool cannot figure
<br>
out where icpc is. From what I know, that location is set in my .bashrc
<br>
script with the line:
<br>
<p>source /opt/intel/bin/compilervars.sh intel64
<br>
<p>In addition, I explicitly set it as:
<br>
<p>export PATH=$PATH:/opt/intel/composer_xe_2011_sp1.11.339/bin/intel64/
<br>
<p>What am I missing so that I can get libtool to see where icpc is?
<br>
<p>Thanks and best regards,
<br>
Stephen
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19810/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Previous message:</strong> <a href="19809.php">Priyesh Srivastava: "Re: [OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Reply:</strong> <a href="19811.php">Ralph Castain: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>Reply:</strong> <a href="19813.php">David Warren: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
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
