<?
$subject_val = "[OMPI users] help";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 11:25:27 2013" -->
<!-- isoreceived="20130115162527" -->
<!-- sent="Tue, 15 Jan 2013 16:25:22 +0000" -->
<!-- isosent="20130115162522" -->
<!-- name="Karos Lotfifar" -->
<!-- email="foadfbf_at_[hidden]" -->
<!-- subject="[OMPI users] help" -->
<!-- id="CAGr61rLcvrASaDWAQW65nehJngORwPow0icUxavYiSDNBEf-9w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] help<br>
<strong>From:</strong> Karos Lotfifar (<em>foadfbf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 11:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21125.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C"</a>
<li><strong>Previous message:</strong> <a href="21123.php">Siegmar Gross: "[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am a new user to OpenMPI and I am using java version of OpenMPI. I have
<br>
downloaded the nightly snapshot
<br>
openmpi-1.9a1r27802.tar.gz&lt;<a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.9a1r27802.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.9a1r27802.tar.gz</a>&gt;form
<br>
your web page. unfortunately, there are not enough documentation on
<br>
your webpage for compiling and using java mpi programs. I have built
<br>
openmpi on /usr/local:
<br>
<p>./configure --prefix=/usr/local --enable-mpi-java
<br>
make all install
<br>
<p>and
<br>
<p>export LD_LIBRARY_PATH to /usr/local/lib/openmpi/
<br>
<p>now, I can compile a simple program easily by
<br>
<p>mpijavac -d dd Hello.java
<br>
mpirun -np 2 java dd/Hello.class
<br>
<p>but when I am trying to run it with mpirun I get the following error:
<br>
<p>mpirun: error while loading shared libraries: libopen-rte.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
<p>Could you please give me some directions.
<br>
<p>I am using Ubuntu Linux 11.10 and I am going to use openmpi later in Hadoop.
<br>
<p>Thanks,
<br>
<p><p><pre>
-- 
Regards,
Karos
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21125.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.9 in Java and C"</a>
<li><strong>Previous message:</strong> <a href="21123.php">Siegmar Gross: "[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java"</a>
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
