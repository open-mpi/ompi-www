<?
$subject_val = "[OMPI devel] orte does not compile on XT5 (pgcc)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 15:46:04 2010" -->
<!-- isoreceived="20100929194604" -->
<!-- sent="Wed, 29 Sep 2010 15:45:59 -0400" -->
<!-- isosent="20100929194559" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] orte does not compile on XT5 (pgcc)" -->
<!-- id="17DA1144-7A3B-420A-B384-B473115E8CDC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] orte does not compile on XT5 (pgcc)<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 15:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Previous message:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Reply:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the problem. The PGI compiler is especially paranoid regarding post declared structures typedefs. It looks like the include ordering makes the nidmap.h file being included before orte_jmap_t typedefs and siblings have been done. 
<br>
<p>/opt/cray/xt-asyncpe/4.0/bin/cc: INFO: linux target is being used
<br>
PGC-S-0040-Illegal use of symbol, orte_jmap_t (../../../../../trunk/orte/util/nidmap.h: 47)
<br>
PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 47)
<br>
PGC-S-0040-Illegal use of symbol, orte_pmap_t (../../../../../trunk/orte/util/nidmap.h: 48)
<br>
PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 48)
<br>
PGC-S-0040-Illegal use of symbol, orte_nid_t (../../../../../trunk/orte/util/nidmap.h: 49)
<br>
PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 49)
<br>
PGC-S-0040-Illegal use of symbol, orte_jmap_t (../../../../../trunk/orte/util/nidmap.h: 63)
<br>
PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 63)
<br>
PGC-S-0074-Non-constant expression in initializer (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 95)
<br>
PGC-S-0074-Non-constant expression in initializer (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 103)
<br>
PGC-W-0093-Type cast required for this conversion of constant (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 109)
<br>
PGC-W-0093-Type cast required for this conversion of constant (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 109)
<br>
PGC/x86-64 Linux 10.5-0: compilation completed with severe errors
<br>
<p>Aurelien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Previous message:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Reply:</strong> <a href="8570.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
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
