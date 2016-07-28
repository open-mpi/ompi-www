<?
$subject_val = "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 19:28:38 2014" -->
<!-- isoreceived="20140213002838" -->
<!-- sent="Wed, 12 Feb 2014 16:28:28 -0800" -->
<!-- isosent="20140213002828" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7.4, mpiexec &amp;quot;exit 1&amp;quot; and no other warning - behaviour changed to previous versions" -->
<!-- id="D565F615-2BC0-4094-832B-17A40A4A6D1E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d8d89071-f334-4643-9f97-95e090679307_at_HUB2.rwth-ad.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 19:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14132.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please give the nightly 1.7.5 tarball a try using the same cmd line options and send me the output? I see the problem, but am trying to understand how it happens. I've added a bunch of diagnostic statements that should help me track it down.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Feb 12, 2014, at 1:26 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As said, the change in behaviour is new in 1.7.4 - all previous versions has been worked. Moreover, setting &quot;-mca oob_tcp_if_include ib0&quot; is a workaround for older versions of Open MPI for some 60-seconds timeout when starting the same command (which is still sucessfull); or for infinite waiting in same cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are logs of the commands:
</span><br>
<span class="quotelev1">&gt; $ export | grep OMPI | tee export_OMPI-linuxbmc0008.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ $MPI_BINDIR/mpiexec  -mca oob_tcp_if_include ib0 -mca oob_base_verbose 100  -H linuxscc004 -np 1 hostname 2&gt;&amp;1 | tee oob_base_verbose-linuxbmc0008-173.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and -174 for appropriate versions 1.7.3 and 1.7.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ifconfig 2&gt;&amp;1 | tee ifconfig-linuxbmc0008.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and -linuxscc004 for the two nodes; linuxscc004 is in (h) fabric and 'mpiexec' was called from node linuxbmc0008 which is in the (b) fabric where the 'ib0' is configured to be the main interface)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the OMPI environment on linuxbmc0008. Maybe you can see something from this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/11/14 20:29, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've added better error messages in the trunk, scheduled to move over to 1.7.5. I don't see anything in the code that would explain why we don't pickup and use ib0 if it is present and specified in if_include - we should be doing it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For now, can you run this with &quot;-mca oob_base_verbose 100&quot; on your cmd line and send me the output? Might help debug the behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2014, at 1:22 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI developer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we see peculiar behaviour in the new 1.7.4 version of Open MPI which is a change to previous versions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - when calling &quot;mpiexec&quot;, it returns &quot;1&quot; and exits silently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The behaviour is reproducible; well not that easy reproducible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have multiple InfiniBand islands in our cluster. All nodes are passwordless reachable from each other in somehow way; some via IPoIB, for some routing you also have to use ethernet cards and IB/TCP gateways.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One island (b) is configured to use the IB card as the main TCP interface. In this island, the variable OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot; (*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another island (h) is configured in convenient way: IB cards also are here and may be used for IPoIB in the island, but the &quot;main interface&quot; used for DNS and Hostname binds is eth0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When calling 'mpiexec' from (b) to start a process on (h), and OpenMPI version is 1.7.4, and OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot;, mpiexec just exits with return value &quot;1&quot; and no error/warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When OMPI_MCA_oob_tcp_if_include is unset it works pretty fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All previously versions of Open MPI (1.6.x, 1.7.3) ) did not have this behaviour; so this is aligned to v1.7.4 only. See log below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You ask why to hell starting MPI processes on other IB island? Because our front-end nodes are in the island (b) but we sometimes need to start something also on island (h), which has been worced perfectly until 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (*) This is another Spaghetti Western long story. In short, we set OMPI_MCA_oob_tcp_if_include to 'ib0' in the subcluster where the IB card is configured to be the main network interface, in order to stop Open MPI trying to connect via (possibly unconfigured) ethernet cards - which lead to endless waiting, sometimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cf. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17824.php">http://www.open-mpi.org/community/lists/users/2011/11/17824.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[523]$ module switch $_LAST_MPI openmpi/1.7.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unloading openmpi 1.7.3                         [ OK ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loading openmpi 1.7.3 for intel compiler                         [ OK ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[524]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linuxscc004.rz.RWTH-Aachen.DE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[525]$ module switch $_LAST_MPI openmpi/1.7.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unloading openmpi 1.7.3                         [ OK ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loading openmpi 1.7.4 for intel compiler                         [ OK ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[526]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[527]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; II.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; During some experiments with envvars and v1.7.4, got the below messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    no-included-found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /opt/MPI/openmpi-1.7.4/linux/intel/share/openmpi/help-oob-tcp.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [linuxc2.rz.RWTH-Aachen.DE:13942] [[63331,0],0] ORTE_ERROR_LOG: Not available in file ess_hnp_module.c at line 314
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reproducing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $MPI_BINDIR/mpiexec  -mca oob_tcp_if_include ib0   -H linuxscc004 -np 1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *frome one node with no 'ib0' card*, also without infiniband. Yessir this is a bad idea, and the 1.7.3 has said more understanding &quot;you do wrong thing&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None of the networks specified to be included for out-of-band communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Value given: ib0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please revise the specification and try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No idea, why the file share/openmpi/help-oob-tcp.txt has not been installed in 1.7.4, as we compile this version in pretty the same way as previous versions..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; &lt;oob_base_verbose-linuxbmc0008-165.txt&gt;&lt;oob_base_verbose-linuxbmc0008-173.txt&gt;&lt;oob_base_verbose-linuxbmc0008-174.txt&gt;&lt;export_OMPI-linuxbmc0008.txt&gt;&lt;ifconfig-linuxbmc0008.txt&gt;&lt;ifconfig-linuxscc004.txt&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14134.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14132.php">Paul Hargrove: "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression vs 1.7.4)"</a>
<li><strong>In reply to:</strong> <a href="14111.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14137.php">Paul Kapinos: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
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
