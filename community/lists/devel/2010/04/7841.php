<?
$subject_val = "[OMPI devel] bug with /bin/sh and /bin/ksh";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 11:24:34 2010" -->
<!-- isoreceived="20100429152434" -->
<!-- sent="Thu, 29 Apr 2010 17:24:29 +0200" -->
<!-- isosent="20100429152429" -->
<!-- name="Jonathan Vincent" -->
<!-- email="jonathan.k.vincent_at_[hidden]" -->
<!-- subject="[OMPI devel] bug with /bin/sh and /bin/ksh" -->
<!-- id="t2x522fad9c1004290824ld7f8f56brdea70b21d18b5821_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] bug with /bin/sh and /bin/ksh<br>
<strong>From:</strong> Jonathan Vincent (<em>jonathan.k.vincent_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 11:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7842.php">Jeff Squyres: "[OMPI devel] 1.4.2rc3"</a>
<li><strong>Previous message:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Maybe reply:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We had some trouble with a user using /bin/sh together with
<br>
openmpi/1.4.1 (Centos 5 on amd64 processors, intel compiler 11.1)
<br>
<p>When spawning MPI processes on a different machine it gave errors such as
<br>
<p>/bin/sh: -c: line 0: syntax error near unexpected token `('
<br>
/bin/sh: -c: line 0: `/usr/bin/env
<br>
LD_LIBRARY_PATH=/pdc/vol/openmpi/1.4.1/intel/lib:/pdc/vol/i-compilers/11.1/icc/lib/intel64:/pdc/vol/i-compilers/11.1/ifort/lib/intel64
<br>
( test ! -r ./.profile || . ./.profile;
<br>
/pdc/vol/openmpi/1.4.1/intel/bin/orted -mca ess env -mca
<br>
orte_ess_jobid 284360704 -mca orte_ess_vpid 3 -mca orte_ess_num_procs
<br>
5 --hnp-uri &quot;284360704.0;tcp://193.11.170.208:49530&quot; )'
<br>
<p>openMPI is making a malformed statement
<br>
<p>i.e. a simpler version such as
<br>
<p>sh -c '/usr/bin/env FOO=bar (echo hello)'
<br>
ksh -c '/usr/bin/env FOO=bar (echo hello)'
<br>
<p>is not valid
<br>
sh -c '/usr/bin/env FOO=bar echo hello'
<br>
works.
<br>
<p>This problem seems to be confined to the sh and ksh logic in
<br>
<p>openmpi-1.4.1/orte/mca/plm/rsh/plm_rsh_module.c
<br>
<p>Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7842.php">Jeff Squyres: "[OMPI devel] 1.4.2rc3"</a>
<li><strong>Previous message:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Maybe reply:</strong> <a href="7859.php">Jonathan Vincent: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7869.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
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
