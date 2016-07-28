<?
$subject_val = "[OMPI users] Problem compiling openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 16:22:19 2011" -->
<!-- isoreceived="20110913202219" -->
<!-- sent="Tue, 13 Sep 2011 16:22:15 -0400" -->
<!-- isosent="20110913202215" -->
<!-- name="amosleff_at_[hidden]" -->
<!-- email="amosleff_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling openmpi-1.4.3" -->
<!-- id="CAHNB0nOfh69W_3tfCwDfCkDL9KNR2=sd-h-feqSRyOquLrs1wA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem compiling openmpi-1.4.3<br>
<strong>From:</strong> <a href="mailto:amosleff_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20compiling%20openmpi-1.4.3"><em>amosleff_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-13 16:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17260.php">Rayson Ho: "Re: [OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have run into a problem trying to compile openmpi-1.4.3.  I am
<br>
running SuSE Linux 11.4 in VMware-7.0.1.  For compilers I am using
<br>
l_fcompxe_intel64_2011.5.220 and l_ccompxe_intel64_2011.5.220 which are
<br>
newly issued. It appears to go through the compile command:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./compile
<br>
LIBDIRS=&quot;/opt/intel/composerxe-2011.5.220/compiler/lib/intel64&quot;
<br>
--prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort F90=ifort
<br>
After running &quot;make all install&quot; the end of the output gives the error:
<br>
test -z &quot;/opt/openmpi/share/openmpi/amca-param-sets&quot; || /bin/mkdir -p
<br>
&quot;/opt/openmpi/share/openmpi/amca-param-sets&quot;
<br>
&nbsp;/usr/bin/install -c -m 644 'amca-param-sets/example.conf'
<br>
'/opt/openmpi/share/openmpi/amca-param-sets/example.conf'
<br>
/usr/bin/install: cannot remove
<br>
`/opt/openmpi/share/openmpi/amca-param-sets/example.conf': Permission denied
<br>
make[2]: *** [install-dist_amca_paramDATA] Error 1
<br>
make[2]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
<br>
make[1]: *** [install-am] Error 2
<br>
make[1]: Leaving directory `/home/amos/Downloads/openmpi-1.4.3/contrib'
<br>
make: *** [install-recursive] Error 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have tried using examples trying to run one of the examples
<br>
and it gives an error
<br>
/Downloads/openmpi-1.4.3/examples&gt; mpicc -np 4 connectivity_c.c
<br>
mpicc: error while loading shared libraries: libimf.so: cannot open shared
<br>
object file: No such file or directory
<br>
This is the reason for the LIBDIRS in the compiling command.  I have run
<br>
into the same error trying to set up espresso-4.3.1.  The result occurs
<br>
whether I use root or a user login.  The file is present being the next
<br>
entry in the string in LIBDIRS.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any help would be much appreciated.
<br>
<p>Amos Leffler
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17261/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="17260.php">Rayson Ho: "Re: [OMPI users] OpenMPI Nonblocking Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<li><strong>Reply:</strong> <a href="17262.php">Rayson Ho: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
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
