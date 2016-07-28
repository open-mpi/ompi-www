<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 11:45:35 2006" -->
<!-- isoreceived="20061020154535" -->
<!-- sent="Fri, 20 Oct 2006 09:45:25 -0600" -->
<!-- isosent="20061020154525" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks" -->
<!-- id="4538EF15.6040608_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AA36CD86-1F00-4A87-9ACC-D721845499FD_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-20 11:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Lisandro Dalcin: "[OMPI devel] MPI_BUFFER_ATTACH/DETACH behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>Reply:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 20.10.2006 um 01:08 schrieb Orion Poplawski:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm starting to test out OpenMPI 1.2 tight integration with SGE and 
</span><br>
<span class="quotelev2">&gt;&gt; have run into the following issue.  Currently, my startmpi script 
</span><br>
<span class="quotelev2">&gt;&gt; massages the hostnames in the machines file created from the SGE 
</span><br>
<span class="quotelev2">&gt;&gt; pe_hostfile add an &quot;x&quot; suffix on machines that are connected with a 
</span><br>
<span class="quotelev2">&gt;&gt; separate GigE network dedicated for MPI traffic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With tight integration, openmpi uses the SGE pe_hostfile directly, e.g.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coop00.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coop01.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, how/can I modify this so that MPI traffic speaks to coop00x and 
</span><br>
<span class="quotelev2">&gt;&gt; coop01x?  One immediate problem that I'm running into is that the 
</span><br>
<span class="quotelev2">&gt;&gt; startmpi script from the SGE PE runs as the user of the job so it 
</span><br>
<span class="quotelev2">&gt;&gt; can't modify pe_hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is the name of the pe_hostfile hardcoded, to point to the one in the 
</span><br>
<span class="quotelev1">&gt; nodes spool directory, or is OpenMPI using the $PE_HOSTFILE, which you 
</span><br>
<span class="quotelev1">&gt; could reset to a new name to point to a modified one? Another issue 
</span><br>
<span class="quotelev1">&gt; might be the back-channel of the communication, where sometimes simply 
</span><br>
<span class="quotelev1">&gt; the `hostname` of the sender is taken to answer.
</span><br>
<p>(Sending this to the openmpi-devel list as well I see what insight they 
<br>
may have.  This seems like a common use case.)
<br>
<p>It uses $PE_HOSTFILE, so I made a startup script that created a new 
<br>
pe_hostfile.  This requires something like the following in my job script:
<br>
<p>setenv PE_HOSTFILE $TMPDIR/pe_hostfile
<br>
orterun -np $NSLOTS $*
<br>
<p>which is unfortunate that it can't be handled automatically somehow.
<br>
<p>First tried:
<br>
<p>coop01x.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
<br>
coop00x.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
<br>
<p>Which yielded:
<br>
<p>error: commlib error: access denied (client IP resolved to host name 
<br>
&quot;coop01x.cora.nwra.com&quot;. This is not identical to clients host name 
<br>
&quot;coop01.cora.nwra.com&quot;)
<br>
error: executing task of job 41354 failed: failed sending task to 
<br>
execd_at_[hidden]: can't find connection
<br>
[coop01:27468] ERROR: A daemon on node coop00x.cora.nwra.com failed to 
<br>
start as expected.
<br>
[coop01:27468] ERROR: There may be more information available from
<br>
[coop01:27468] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[coop01:27468] ERROR: If the problem persists, please restart the
<br>
[coop01:27468] ERROR: Grid Engine PE job
<br>
[coop01:27468] ERROR: The daemon exited unexpectedly with status 1.
<br>
error: commlib error: access denied (client IP resolved to host name 
<br>
&quot;coop01x.cora.nwra.com&quot;. This is not identical to clients host name 
<br>
&quot;coop01.cora.nwra.com&quot;)
<br>
error: executing task of job 41354 failed: failed sending task to 
<br>
execd_at_[hidden]: can't find connection
<br>
<p>Then:
<br>
<p>coop01x.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
<br>
coop00x.cora.nwra.com 2 coop.q_at_[hidden] &lt;NULL&gt;
<br>
<p>which yields:
<br>
<p>error: commlib error: access denied (client IP resolved to host name 
<br>
&quot;coop01x.cora.nwra.com&quot;. This is not identical to clients host name 
<br>
&quot;coop01.cora.nwra.com&quot;)
<br>
error: executing task of job 41356 failed: failed sending task to 
<br>
execd_at_[hidden]: can't find connection
<br>
error: commlib error: access denied (client IP resolved to host name 
<br>
&quot;coop01x.cora.nwra.com&quot;. This is not identical to clients host name 
<br>
&quot;coop01.cora.nwra.com&quot;)
<br>
[coop01:27945] ERROR: A daemon on node coop01x.cora.nwra.com failed to 
<br>
start as expected.
<br>
[coop01:27945] ERROR: There may be more information available from
<br>
[coop01:27945] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[coop01:27945] ERROR: If the problem persists, please restart the
<br>
[coop01:27945] ERROR: Grid Engine PE job
<br>
[coop01:27945] ERROR: The daemon exited unexpectedly with status 1.
<br>
error: executing task of job 41356 failed: failed sending task to 
<br>
execd_at_[hidden]: can't find connection
<br>
<p><p>Now, looking at the OpenMPI gridengine code, it looks like it gets the 
<br>
node name from the first entry in the pe_hostfile, and never really uses 
<br>
the queue name for anything.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr = strtok_r(buf, &quot; \n&quot;, &amp;tok);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num = strtok_r(NULL, &quot; \n&quot;, &amp;tok);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;queue = strtok_r(NULL, &quot; \n&quot;, &amp;tok);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arch = strtok_r(NULL, &quot; \n&quot;, &amp;tok);
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;node_name = strdup(ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;node_arch = strdup(arch);
<br>
<p>Perhaps it can be modified it uses the queue name hostname when doing 
<br>
SGE/qrsh calls, but the first hostname when doing MPI communication. 
<br>
Not really sure what the intent of the two fields in SGE's pe_hostfile 
<br>
is, or if OpenMPI can handle the idea of two hostnames for different 
<br>
purposes.
<br>
<p><pre>
-- 
Orion Poplawski
System Administrator                  303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Lisandro Dalcin: "[OMPI devel] MPI_BUFFER_ATTACH/DETACH behaviour"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
<li><strong>Reply:</strong> <a href="1128.php">Pak Lui: "Re: [OMPI devel] [GE users] OpenMPI 1.2 integration and dedicated MPI networks"</a>
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
