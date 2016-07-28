<?
$subject_val = "[OMPI users] problem with installing openmpi with intel compiler on ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 22:06:05 2009" -->
<!-- isoreceived="20090527020605" -->
<!-- sent="Tue, 26 May 2009 19:05:59 -0700 (PDT)" -->
<!-- isosent="20090527020559" -->
<!-- name="Michael Kuklik" -->
<!-- email="mkkuklik_at_[hidden]" -->
<!-- subject="[OMPI users] problem with installing openmpi with intel compiler on ubuntu" -->
<!-- id="768745.54022.qm_at_web31406.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with installing openmpi with intel compiler on ubuntu<br>
<strong>From:</strong> Michael Kuklik (<em>mkkuklik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 22:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Reply:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>I try to compile openmpi with intel compiler on ubuntu 9.04.
<br>
I compiled openmpi on Redhat and os x many times and I could always find a problem. But the error that I'm getting now, gives me no clues where to even search for the problem.
<br>
<p>my config line is a follows:
<br>
./configure CC=icc CXX=icpc --prefix=/usr/local/intel/openmpi
<br>
<p>Everything configures and compiles OK. But then when I try to install I get this error
<br>
<p>Making install in etc
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
/bin/mkdir -p /usr/local/intel/openmpi/etc
<br>
******************************* WARNING ************************************
<br>
*** Not installing new openmpi-default-hostfile over existing file in:
<br>
***   /usr/local/intel/openmpi/etc/openmpi-default-hostfile
<br>
******************************* WARNING ************************************
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte/etc'
<br>
Making install in .
<br>
make[2]: Entering directory `/tmp/openmpi-1.3.2/orte'
<br>
make[3]: Entering directory `/tmp/openmpi-1.3.2/orte'
<br>
test -z &quot;/usr/local/intel/openmpi/lib&quot; || /bin/mkdir -p &quot;/usr/local/intel/openmpi/lib&quot;
<br>
&nbsp;/bin/bash ../libtool   --mode=install /usr/bin/install -c  'libopen-rte.la' '/usr/local/intel/openmpi/lib/libopen-rte.la'
<br>
libtool: install: warning: relinking `libopen-rte.la'
<br>
libtool: install: (cd /tmp/openmpi-1.3.2/orte; /bin/bash /tmp/openmpi-1.3.2/libtool  --tag CC --mode=relink icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing ................ )
<br>
libtool: relink: icc -shared  runtime/.libs/orte_finalize.o runtime/.libs/orte_init.o runtime/.libs/orte_locks.o runtime/.libs/orte_globals.o runtime/data_type_support/.libs/orte_dt_compare_fns.o runtime/data_type_support/.libs/orte_dt_copy_fns.o runtime/data_type_support/.libs/orte_dt_print_fns.o runtime/data_type_support/.libs/orte_dt_release_fns.o runtime/data_type_support/.libs/orte_dt_size_fns.o runtime/data_type_support/.libs/orte_dt_packing_fns.o runtime/data_type_support/.libs/orte_dt_unpacking_fns.o runtime/.libs/orte_mca_params.o runtime/.libs/orte_wait.o runtime/.libs/orte_cr.o runtime/.libs/..................................... -Wl,libopen-rte.so.0 -o .libs/libopen-rte.so.0.0.0
<br>
/tmp/openmpi-1.3.2/libtool: line 7847: icc: command not found
<br>
libtool: install: error: relink `libopen-rte.la' with the above command before installing it
<br>
make[3]: *** [install-libLTLIBRARIES] Error 1
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.3.2/orte'
<br>
make: *** [install-recursive] Error 1
<br>
<p>libtool is the one from ubuntu repository i.e. 2.2.6a-1
<br>
icc and icpc are the newest ones i.e. 11.083 
<br>
<p>Ouputs of configure make and install are attached.
<br>
<p>Any clues what's wrong?
<br>
<p>Thanks for help
<br>
<p>mk
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9437/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9436.php">mtcreekmore_at_[hidden]: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Reply:</strong> <a href="9438.php">Joe Griffin: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
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
