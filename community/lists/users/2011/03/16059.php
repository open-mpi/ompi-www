<?
$subject_val = "[OMPI users] mpi problems,";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 16:24:35 2011" -->
<!-- isoreceived="20110330202435" -->
<!-- sent="Wed, 30 Mar 2011 15:24:29 -0500" -->
<!-- isosent="20110330202429" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="[OMPI users] mpi problems," -->
<!-- id="AANLkTinxVti+JT3nR6dn1iZEsyKX3p4rZdYh9j78wvPE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi problems,<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 16:24:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16063.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to figure out why my jobs aren't getting distributed and need
<br>
some help. I have an install of sun cluster tools on Rockscluster 5.2
<br>
(essentially centos4u2). this user's account has its home dir shared via
<br>
nfs. I am getting some strange errors. here's an example run
<br>
<p><p>[jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/mpirun -np 3 -hostfile list
<br>
./job2.sh
<br>
bash: /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 20362) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>[jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/
<br>
bin/        examples/   instrument/ man/
<br>
etc/        include/    lib/        share/
<br>
[jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orte
<br>
orte-clean  orted       orte-iof    orte-ps     orterun
<br>
[jian_at_therock ~]$ /opt/SUNWhpc/HPC8.2.1c/sun/bin/orted
<br>
[therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file runtime/orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[therock.slu.loc:20365] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
<br>
file orted/orted_main.c at line 325
<br>
[jian_at_therock ~]$
<br>
<p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16058.php">Tim Prince: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Reply:</strong> <a href="16063.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
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
