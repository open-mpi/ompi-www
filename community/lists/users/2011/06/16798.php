<?
$subject_val = "[OMPI users] The hostfile  could not be found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 22:24:22 2011" -->
<!-- isoreceived="20110701022422" -->
<!-- sent="Fri, 1 Jul 2011 10:24:06 +0800" -->
<!-- isosent="20110701022406" -->
<!-- name="zhuangchao" -->
<!-- email="freeoser_at_[hidden]" -->
<!-- subject="[OMPI users] The hostfile  could not be found" -->
<!-- id="201107011024058125721_at_163.com" -->
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
<strong>Subject:</strong> [OMPI users] The hostfile  could not be found<br>
<strong>From:</strong> zhuangchao (<em>freeoser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 22:24:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Reply:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello  all ,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I  submited  the following  Torque/pbs script. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#PBS -e /tmp/blast_19297.err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#PBS -o /tmp/blast.output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec  -d -machinefile  /tmp/nodes.19297.txt   -np  3  /data1/bin/mpiblast  -p tblastx -i /data1/cluster/sequences/seq_4.txt -d nt -o /data1/cluster/blast.out/blast.out.19297      -g T -m  0 -F F
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then  I  got  the following error  from openmpi.   But  it is ok if I run the above mpiexec command 
<br>
in the bash shell.  Can you  help me ?  Thank you very much !  
<br>
<p>n-1&lt;18242&gt; ssi:boot:base: looking for boot schema in following directories:
<br>
n-1&lt;18242&gt; ssi:boot:base:   &lt;current directory&gt;
<br>
n-1&lt;18242&gt; ssi:boot:base:   $TROLLIUSHOME/etc
<br>
n-1&lt;18242&gt; ssi:boot:base:   $LAMHOME/etc
<br>
n-1&lt;18242&gt; ssi:boot:base:   /data1/lam-mpi/etc
<br>
n-1&lt;18242&gt; ssi:boot:base: looking for boot schema file:
<br>
n-1&lt;18242&gt; ssi:boot:base:   /tmp/nodes.19297.txt
<br>
n-1&lt;18242&gt; ssi:boot:base: found boot schema: Not found!
<br>
-----------------------------------------------------------------------------
<br>
The hostfile &quot;/tmp/nodes.19297.txt&quot; could not be found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unix errno: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No such file or directory
<br>
Things to check:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ensure that the file exists
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try &quot;ls -l /tmp/nodes.19297.txt&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ensure that you have read permissions on the file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try &quot;cat /tmp/nodes.19297.txt&quot;
<br>
-----------------------------------------------------------------------------
<br>
-----------------------------------------------------------------------------
<br>
It seems that there is no lamd running on the host node2.
<br>
This indicates that the LAM/MPI runtime environment is not operating.
<br>
The LAM/MPI runtime environment is necessary for the &quot;lamhalt&quot; command.
<br>
Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
<br>
environment.  See the LAM/MPI documentation for how to invoke
<br>
&quot;lamboot&quot; across multiple machines.
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Reply:</strong> <a href="16799.php">Ralph Castain: "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
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
