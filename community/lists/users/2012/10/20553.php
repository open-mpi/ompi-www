<?
$subject_val = "[OMPI users] open mpi 1.6 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 11:46:59 2012" -->
<!-- isoreceived="20121027154659" -->
<!-- sent="Sat, 27 Oct 2012 17:46:55 +0200" -->
<!-- isosent="20121027154655" -->
<!-- name="Giuseppe P." -->
<!-- email="istruzione_at_[hidden]" -->
<!-- subject="[OMPI users] open mpi 1.6 with intel compilers" -->
<!-- id="CABS1KLSyaunxGqZi=_VsT-k0fbB5FaGFmmv0b-h0eCK_FCxJyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] open mpi 1.6 with intel compilers<br>
<strong>From:</strong> Giuseppe P. (<em>istruzione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 11:46:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20552.php">Mahmood Naderan: "[OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I have built open mpi 1.6 with Intel compilers (2013 versions). Compilation
<br>
was smooth, however even when I try to execute
<br>
the simple program hello.c:
<br>
<p>mpirun -np 4 ./hello_c.x
<br>
[mpiexec_at_claudio.ukzn] HYDU_create_process (./utils/launch/launch.c:102):
<br>
execvp error on file
<br>
/opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/pmi_proxy (No such file
<br>
or directory)
<br>
[mpiexec_at_claudio.ukzn] HYD_pmcd_pmiserv_proxy_init_cb
<br>
(./pm/pmiserv/pmiserv_cb.c:1177): assert (!closed) failed
<br>
[mpiexec_at_claudio.ukzn] HYDT_dmxu_poll_wait_for_event
<br>
(./tools/demux/demux_poll.c:77): callback returned error status
<br>
[mpiexec_at_claudio.ukzn] HYD_pmci_wait_for_completion
<br>
(./pm/pmiserv/pmiserv_pmci.c:358): error waiting for event
<br>
[mpiexec_at_claudio.ukzn] main (./ui/mpich/mpiexec.c:689): process manager
<br>
error waiting for completion
<br>
<p>Before that, there was an additional error, since also the file mpivars.sh
<br>
was not present in /opt/intel/composer_xe_2013.0.079/mpirt/bin/intel64/.
<br>
Even though I managed to create one and it worked:
<br>
<p>#!/bin/bash
<br>
<p>if [ -z &quot;`echo $PATH | grep /usr/local/bin`&quot; ]; then
<br>
export PATH=/usr/local/bin:$PATH
<br>
fi
<br>
<p>if [ -z &quot;`echo $LD_LIBRARY_PATH | grep /usr/local/lib`&quot; ]; then
<br>
if [ -n &quot;$LD_LIBRARY_PATH&quot; ]; then
<br>
export LD_LIBRARY_PATH=/usr/local/lib:$LD_LIBRARY_PATH
<br>
else
<br>
export LD_LIBRARY_PATH=/usr/local/lib
<br>
fi
<br>
fi
<br>
<p>I do not have any clue about how to generate the file pmi_proxy.
<br>
<p>Thank you in advance for your help!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="20552.php">Mahmood Naderan: "[OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20554.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="20556.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
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
