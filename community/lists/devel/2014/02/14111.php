<?
$subject_val = "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 04:27:01 2014" -->
<!-- isoreceived="20140212092701" -->
<!-- sent="Wed, 12 Feb 2014 10:26:55 +0100" -->
<!-- isosent="20140212092655" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.4, mpiexec &amp;quot;exit 1&amp;quot; and no other warning - behaviour changed to previous versions" -->
<!-- id="d8d89071-f334-4643-9f97-95e090679307_at_HUB2.rwth-ad.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAF10C90-2A49-40F8-A3A8-6BEBFC0A5D50_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 04:26:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As said, the change in behaviour is new in 1.7.4 - all previous versions has 
<br>
been worked. Moreover, setting &quot;-mca oob_tcp_if_include ib0&quot; is a workaround for 
<br>
older versions of Open MPI for some 60-seconds timeout when starting the same 
<br>
command (which is still sucessfull); or for infinite waiting in same cases.
<br>
<p><p><p>Attached are logs of the commands:
<br>
$ export | grep OMPI | tee export_OMPI-linuxbmc0008.txt
<br>
<p>$ $MPI_BINDIR/mpiexec  -mca oob_tcp_if_include ib0 -mca oob_base_verbose 100  -H 
<br>
linuxscc004 -np 1 hostname 2&gt;&amp;1 | tee oob_base_verbose-linuxbmc0008-173.txt
<br>
<p>(and -174 for appropriate versions 1.7.3 and 1.7.4)
<br>
<p><p>$ ifconfig 2&gt;&amp;1 | tee ifconfig-linuxbmc0008.txt
<br>
<p>(and -linuxscc004 for the two nodes; linuxscc004 is in (h) fabric and 'mpiexec' 
<br>
was called from node linuxbmc0008 which is in the (b) fabric where the 'ib0' is 
<br>
configured to be the main interface)
<br>
<p>and the OMPI environment on linuxbmc0008. Maybe you can see something from this.
<br>
<p>Best
<br>
Paul
<br>
<p><p>On 02/11/14 20:29, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I've added better error messages in the trunk, scheduled to move over to 1.7.5. I don't see anything in the code that would explain why we don't pickup and use ib0 if it is present and specified in if_include - we should be doing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, can you run this with &quot;-mca oob_base_verbose 100&quot; on your cmd line and send me the output? Might help debug the behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2014, at 1:22 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.
</span><br>
<span class="quotelev2">&gt;&gt; we see peculiar behaviour in the new 1.7.4 version of Open MPI which is a change to previous versions:
</span><br>
<span class="quotelev2">&gt;&gt; - when calling &quot;mpiexec&quot;, it returns &quot;1&quot; and exits silently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The behaviour is reproducible; well not that easy reproducible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have multiple InfiniBand islands in our cluster. All nodes are passwordless reachable from each other in somehow way; some via IPoIB, for some routing you also have to use ethernet cards and IB/TCP gateways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One island (b) is configured to use the IB card as the main TCP interface. In this island, the variable OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot; (*)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another island (h) is configured in convenient way: IB cards also are here and may be used for IPoIB in the island, but the &quot;main interface&quot; used for DNS and Hostname binds is eth0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When calling 'mpiexec' from (b) to start a process on (h), and OpenMPI version is 1.7.4, and OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot;, mpiexec just exits with return value &quot;1&quot; and no error/warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When OMPI_MCA_oob_tcp_if_include is unset it works pretty fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All previously versions of Open MPI (1.6.x, 1.7.3) ) did not have this behaviour; so this is aligned to v1.7.4 only. See log below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You ask why to hell starting MPI processes on other IB island? Because our front-end nodes are in the island (b) but we sometimes need to start something also on island (h), which has been worced perfectly until 1.7.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (*) This is another Spaghetti Western long story. In short, we set OMPI_MCA_oob_tcp_if_include to 'ib0' in the subcluster where the IB card is configured to be the main network interface, in order to stop Open MPI trying to connect via (possibly unconfigured) ethernet cards - which lead to endless waiting, sometimes.
</span><br>
<span class="quotelev2">&gt;&gt; Cf. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17824.php">http://www.open-mpi.org/community/lists/users/2011/11/17824.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; pk224850_at_cluster:~[523]$ module switch $_LAST_MPI openmpi/1.7.3
</span><br>
<span class="quotelev2">&gt;&gt; Unloading openmpi 1.7.3                         [ OK ]
</span><br>
<span class="quotelev2">&gt;&gt; Loading openmpi 1.7.3 for intel compiler                         [ OK ]
</span><br>
<span class="quotelev2">&gt;&gt; pk224850_at_cluster:~[524]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; echo $?
</span><br>
<span class="quotelev2">&gt;&gt; linuxscc004.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; pk224850_at_cluster:~[525]$ module switch $_LAST_MPI openmpi/1.7.4
</span><br>
<span class="quotelev2">&gt;&gt; Unloading openmpi 1.7.3                         [ OK ]
</span><br>
<span class="quotelev2">&gt;&gt; Loading openmpi 1.7.4 for intel compiler                         [ OK ]
</span><br>
<span class="quotelev2">&gt;&gt; pk224850_at_cluster:~[526]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; pk224850_at_cluster:~[527]$
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; II.
</span><br>
<span class="quotelev2">&gt;&gt; During some experiments with envvars and v1.7.4, got the below messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;     no-included-found
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/MPI/openmpi-1.7.4/linux/intel/share/openmpi/help-oob-tcp.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [linuxc2.rz.RWTH-Aachen.DE:13942] [[63331,0],0] ORTE_ERROR_LOG: Not available in file ess_hnp_module.c at line 314
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reproducing:
</span><br>
<span class="quotelev2">&gt;&gt; $MPI_BINDIR/mpiexec  -mca oob_tcp_if_include ib0   -H linuxscc004 -np 1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *frome one node with no 'ib0' card*, also without infiniband. Yessir this is a bad idea, and the 1.7.3 has said more understanding &quot;you do wrong thing&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; None of the networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev2">&gt;&gt; could be found:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Value given: ib0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No idea, why the file share/openmpi/help-oob-tcp.txt has not been installed in 1.7.4, as we compile this version in pretty the same way as previous versions..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev2">&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev2">&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915






</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/oob_base_verbose-linuxbmc0008-165.txt">oob_base_verbose-linuxbmc0008-165.txt</a>
</ul>
<!-- attachment="oob_base_verbose-linuxbmc0008-165.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/oob_base_verbose-linuxbmc0008-173.txt">oob_base_verbose-linuxbmc0008-173.txt</a>
</ul>
<!-- attachment="oob_base_verbose-linuxbmc0008-173.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/oob_base_verbose-linuxbmc0008-174.txt">oob_base_verbose-linuxbmc0008-174.txt</a>
</ul>
<!-- attachment="oob_base_verbose-linuxbmc0008-174.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/export_OMPI-linuxbmc0008.txt">export_OMPI-linuxbmc0008.txt</a>
</ul>
<!-- attachment="export_OMPI-linuxbmc0008.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/ifconfig-linuxbmc0008.txt">ifconfig-linuxbmc0008.txt</a>
</ul>
<!-- attachment="ifconfig-linuxbmc0008.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/ifconfig-linuxscc004.txt">ifconfig-linuxscc004.txt</a>
</ul>
<!-- attachment="ifconfig-linuxscc004.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14111/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14112.php">Artem Polyakov: "[OMPI devel] SLURM affinity accounting in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="14110.php">Bert Wesarg: "Re: [OMPI devel] fail when linking against libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14133.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
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
