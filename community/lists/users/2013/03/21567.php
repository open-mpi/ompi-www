<?
$subject_val = "[OMPI users] mpirun error output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 12:41:25 2013" -->
<!-- isoreceived="20130320164125" -->
<!-- sent="Wed, 20 Mar 2013 13:41:20 -0300" -->
<!-- isosent="20130320164120" -->
<!-- name="Bruno Cramer" -->
<!-- email="bruno.cramer_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun error output" -->
<!-- id="CAME3KzDur_4TgUHdBoDgKE34qXbU2njUWaFDAEU5UkvEhjYAQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun error output<br>
<strong>From:</strong> Bruno Cramer (<em>bruno.cramer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 12:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>1) Openmpi in PC1
<br>
<p>I installed openmpi-1.4.3 using the OpenSuse 32b v. 12.1 repository
<br>
<p>as well as openmpi devel
<br>
<p>All mpi executables are present so are the libraries in lib directory.
<br>
<p>I set the environment as ( .bashrc)
<br>
<p><p>PATH=$PATH:/usr/lib/mpi/gcc/openmpi/bin
<br>
<p>PATH=$PATH:/usr/lib/mpi/gcc/openmpi/lib
<br>
<p>export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/lib/mpi/gcc/openmpi/lib
<br>
<p>export PATH
<br>
<p>&nbsp;When I run any of the test examples (eg. mpirun hello_c.c or any program
<br>
that has mpi interface included I get the message
<br>
<p>-----------------------------
<br>
<p>mpirun was unable to launch the specified application as it could not find
<br>
an executable:
<br>
<p>Executable: hello_c.c
<br>
<p>Node: linux-curie
<br>
<p>while attempting to start process rank 0.
<br>
<p>-----------------------
<br>
<p>typing echo $LD_LIBRARY_PATH I should get something like
<br>
/usr/lib/mpi/gcc/openmpi/lib. The only output I get is
<br>
/usr/local/atlas3.10/lib (which is the blas/lapack library). Also Intel
<br>
compilers library is not shown.
<br>
<p><p><p>1) Openmpi installation in PC2
<br>
<p>In OpenSuse v 12.1 64b I installed openmpi-1.4.3 downloading it from the
<br>
openmpi site.
<br>
<p>No error occured during ./configure, make, make install process.
<br>
<p>The environment settings change a little but are very similar to those
<br>
mentioned under PC1.
<br>
<p>The same message as above is occuring.
<br>
<p>in this case typing echo $LD_LIBRARY_PATH I get the correct output from the
<br>
mpi library as /usr/local/lib64 and the executables are in /usr/local/bin.
<br>
<p><p>Any help is wellcome
<br>
<p><p>Regards
<br>
<p>Bruno
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
<li><strong>Reply:</strong> <a href="21568.php">Ralph Castain: "Re: [OMPI users] mpirun error output"</a>
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
