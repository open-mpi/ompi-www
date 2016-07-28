<?
$subject_val = "[OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 04:22:50 2014" -->
<!-- isoreceived="20140211092250" -->
<!-- sent="Tue, 11 Feb 2014 10:22:45 +0100" -->
<!-- isosent="20140211092245" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7.4, mpiexec &amp;quot;exit 1&amp;quot; and no other warning - behaviour changed to previous versions" -->
<!-- id="eba2c5e0-a546-4364-9770-bb78a9d22488_at_HUB2.rwth-ad.de" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 04:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
<p>I.
<br>
we see peculiar behaviour in the new 1.7.4 version of Open MPI which is a change 
<br>
to previous versions:
<br>
- when calling &quot;mpiexec&quot;, it returns &quot;1&quot; and exits silently.
<br>
<p>The behaviour is reproducible; well not that easy reproducible.
<br>
<p>We have multiple InfiniBand islands in our cluster. All nodes are passwordless 
<br>
reachable from each other in somehow way; some via IPoIB, for some routing you 
<br>
also have to use ethernet cards and IB/TCP gateways.
<br>
<p>One island (b) is configured to use the IB card as the main TCP interface. In 
<br>
this island, the variable OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot; (*)
<br>
<p>Another island (h) is configured in convenient way: IB cards also are here and 
<br>
may be used for IPoIB in the island, but the &quot;main interface&quot; used for DNS and 
<br>
Hostname binds is eth0.
<br>
<p>When calling 'mpiexec' from (b) to start a process on (h), and OpenMPI version 
<br>
is 1.7.4, and OMPI_MCA_oob_tcp_if_include is set to &quot;ib0&quot;, mpiexec just exits 
<br>
with return value &quot;1&quot; and no error/warning.
<br>
<p>When OMPI_MCA_oob_tcp_if_include is unset it works pretty fine.
<br>
<p>All previously versions of Open MPI (1.6.x, 1.7.3) ) did not have this 
<br>
behaviour; so this is aligned to v1.7.4 only. See log below.
<br>
<p>You ask why to hell starting MPI processes on other IB island? Because our 
<br>
front-end nodes are in the island (b) but we sometimes need to start something 
<br>
also on island (h), which has been worced perfectly until 1.7.4.
<br>
<p><p>(*) This is another Spaghetti Western long story. In short, we set 
<br>
OMPI_MCA_oob_tcp_if_include to 'ib0' in the subcluster where the IB card is 
<br>
configured to be the main network interface, in order to stop Open MPI trying to 
<br>
connect via (possibly unconfigured) ethernet cards - which lead to endless 
<br>
waiting, sometimes.
<br>
Cf. <a href="http://www.open-mpi.org/community/lists/users/2011/11/17824.php">http://www.open-mpi.org/community/lists/users/2011/11/17824.php</a>
<br>
<p>------------------------------------------------------------------------------
<br>
pk224850_at_cluster:~[523]$ module switch $_LAST_MPI openmpi/1.7.3 
<br>
<p>Unloading openmpi 1.7.3 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ OK ]
<br>
Loading openmpi 1.7.3 for intel compiler 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ OK ]
<br>
pk224850_at_cluster:~[524]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; 
<br>
echo $?
<br>
linuxscc004.rz.RWTH-Aachen.DE
<br>
0
<br>
pk224850_at_cluster:~[525]$ module switch $_LAST_MPI openmpi/1.7.4 
<br>
<p>Unloading openmpi 1.7.3 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ OK ]
<br>
Loading openmpi 1.7.4 for intel compiler 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ OK ]
<br>
pk224850_at_cluster:~[526]$ $MPI_BINDIR/mpiexec  -H linuxscc004 -np 1 hostname ; 
<br>
echo $?
<br>
1
<br>
pk224850_at_cluster:~[527]$
<br>
------------------------------------------------------------------------------
<br>
<p><p><p><p><p><p><p><p>II.
<br>
During some experiments with envvars and v1.7.4, got the below messages.
<br>
<p>--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no-included-found
<br>
But I couldn't open the help file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/MPI/openmpi-1.7.4/linux/intel/share/openmpi/help-oob-tcp.txt: No such 
<br>
file or directory.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
[linuxc2.rz.RWTH-Aachen.DE:13942] [[63331,0],0] ORTE_ERROR_LOG: Not available in 
<br>
file ess_hnp_module.c at line 314
<br>
--------------------------------------------------------------------------
<br>
<p>Reproducing:
<br>
$MPI_BINDIR/mpiexec  -mca oob_tcp_if_include ib0   -H linuxscc004 -np 1 hostname
<br>
<p>*frome one node with no 'ib0' card*, also without infiniband. Yessir this is a 
<br>
bad idea, and the 1.7.3 has said more understanding &quot;you do wrong thing&quot;:
<br>
--------------------------------------------------------------------------
<br>
None of the networks specified to be included for out-of-band communications
<br>
could be found:
<br>
<p>&nbsp;&nbsp;&nbsp;Value given: ib0
<br>
<p>Please revise the specification and try again.
<br>
--------------------------------------------------------------------------
<br>
<p><p>No idea, why the file share/openmpi/help-oob-tcp.txt has not been installed in 
<br>
1.7.4, as we compile this version in pretty the same way as previous versions..
<br>
<p><p><p><p>Best,
<br>
Paul Kapinos
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14095/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14096.php">Christoph Niethammer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Previous message:</strong> <a href="14094.php">Andreas Sch&#228;fer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>Reply:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
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
