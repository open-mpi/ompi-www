<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 13:43:46 2013" -->
<!-- isoreceived="20130619174346" -->
<!-- sent="Wed, 19 Jun 2013 19:43:20 +0200" -->
<!-- isosent="20130619174320" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zWBCXd5wigpHwfpRJDY1jRe2AYqK51xS6Yn_ZSogxe=HQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="658D5A0C-12E9-4BB3-B510-C4FF5DA3AF35_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 13:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22139.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22137.php">Ralph Castain: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22140.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22140.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19 June 2013 16:01, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; How is OMPI picking up this hostfile? It isn't being specified on the cmd line - are you running under some resource manager?
</span><br>
<p>Via the environment variable `OMPI_MCA_orte_default_hostfile`.
<br>
<p>We're running under SGE, but disable the OMPI/SGE integration (rather
<br>
old version of SGE, does not coordinate well with OpenMPI); here's the
<br>
relevant snippet from our startup script:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# the OMPI/SGE integration does not seem to work with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# our SGE version; so use the `mpi` PE and direct OMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# to look for a &quot;plain old&quot; machine file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unset PE_HOSTFILE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if [ -r &quot;${TMPDIR}/machines&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_MCA_orte_default_hostfile=&quot;${TMPDIR}/machines&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;export OMPI_MCA_orte_default_hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;GMSCOMMAND=&quot;$openmpi_root/bin/mpiexec -n $NCPUS --nooversubscribe
<br>
$gamess $INPUT -scr $(pwd)&quot;
<br>
<p>The `$TMPDIR/machines` hostfile is created from SGE's $PE_HOSTFILE by
<br>
extracting the host names, and repeating each one for the given number
<br>
of slots (unmodified code that comes with SGE):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;PeHostfile2MachineFile()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat $1 | while read line; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# echo $line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;host=`echo $line|cut -f1 -d&quot; &quot;|cut -f1 -d&quot;.&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nslots=`echo $line|cut -f2 -d&quot; &quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while [ $i -le $nslots ]; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i=`expr $i + 1`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Thanks,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22139.php">Lorenzo Donà: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>Previous message:</strong> <a href="22137.php">Ralph Castain: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22135.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22140.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22140.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
