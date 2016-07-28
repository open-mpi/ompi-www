<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 14:42:20 2013" -->
<!-- isoreceived="20130619184220" -->
<!-- sent="Wed, 19 Jun 2013 11:42:19 -0700" -->
<!-- isosent="20130619184219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="34D1C32E-DB92-4EC1-8784-7A001015BB23_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJGE3zWBCXd5wigpHwfpRJDY1jRe2AYqK51xS6Yn_ZSogxe=HQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 14:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22139.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm..certainly sounds like a bug. It should pickup that the node is local. It checks the hostname (as returned by gethostname), but it also checks to see if host resolves to a local address. I'm assuming that the offending host has some other address besides just 127.0.1.1 as otherwise it couldn't connect to anything.
<br>
<p>I'm heading out the door for a couple of weeks, but can try to look at it when I return.
<br>
<p>On Jun 19, 2013, at 10:43 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 19 June 2013 16:01, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; How is OMPI picking up this hostfile? It isn't being specified on the cmd line - are you running under some resource manager?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via the environment variable `OMPI_MCA_orte_default_hostfile`.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're running under SGE, but disable the OMPI/SGE integration (rather
</span><br>
<span class="quotelev1">&gt; old version of SGE, does not coordinate well with OpenMPI); here's the
</span><br>
<span class="quotelev1">&gt; relevant snippet from our startup script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # the OMPI/SGE integration does not seem to work with
</span><br>
<span class="quotelev1">&gt;    # our SGE version; so use the `mpi` PE and direct OMPI
</span><br>
<span class="quotelev1">&gt;    # to look for a &quot;plain old&quot; machine file
</span><br>
<span class="quotelev1">&gt;    unset PE_HOSTFILE
</span><br>
<span class="quotelev1">&gt;    if [ -r &quot;${TMPDIR}/machines&quot; ]; then
</span><br>
<span class="quotelev1">&gt;        OMPI_MCA_orte_default_hostfile=&quot;${TMPDIR}/machines&quot;
</span><br>
<span class="quotelev1">&gt;        export OMPI_MCA_orte_default_hostfile
</span><br>
<span class="quotelev1">&gt;    fi
</span><br>
<span class="quotelev1">&gt;    GMSCOMMAND=&quot;$openmpi_root/bin/mpiexec -n $NCPUS --nooversubscribe
</span><br>
<span class="quotelev1">&gt; $gamess $INPUT -scr $(pwd)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The `$TMPDIR/machines` hostfile is created from SGE's $PE_HOSTFILE by
</span><br>
<span class="quotelev1">&gt; extracting the host names, and repeating each one for the given number
</span><br>
<span class="quotelev1">&gt; of slots (unmodified code that comes with SGE):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    PeHostfile2MachineFile()
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;       cat $1 | while read line; do
</span><br>
<span class="quotelev1">&gt;          # echo $line
</span><br>
<span class="quotelev1">&gt;          host=`echo $line|cut -f1 -d&quot; &quot;|cut -f1 -d&quot;.&quot;`
</span><br>
<span class="quotelev1">&gt;          nslots=`echo $line|cut -f2 -d&quot; &quot;`
</span><br>
<span class="quotelev1">&gt;          i=1
</span><br>
<span class="quotelev1">&gt;          while [ $i -le $nslots ]; do
</span><br>
<span class="quotelev1">&gt;             echo $host
</span><br>
<span class="quotelev1">&gt;             i=`expr $i + 1`
</span><br>
<span class="quotelev1">&gt;          done
</span><br>
<span class="quotelev1">&gt;       done
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22139.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22138.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22152.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
