<?
$subject_val = "Re: [OMPI devel] orte does not compile on XT5 (pgcc)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 15:53:43 2010" -->
<!-- isoreceived="20100929195343" -->
<!-- sent="Wed, 29 Sep 2010 13:53:33 -0600" -->
<!-- isosent="20100929195333" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte does not compile on XT5 (pgcc)" -->
<!-- id="75D9E38A-9F9A-466B-B7D0-020AEE4CD5DF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="17DA1144-7A3B-420A-B384-B473115E8CDC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte does not compile on XT5 (pgcc)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 15:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8571.php">Ralph Castain: "[OMPI devel] 1.4.3rc4"</a>
<li><strong>Previous message:</strong> <a href="8569.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>In reply to:</strong> <a href="8569.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no way of testing this as I don't have access to a PGI compiler - so if you do, by all means feel free to change the ordering to make them happy.
<br>
<p><p>On Sep 29, 2010, at 1:45 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Here is the problem. The PGI compiler is especially paranoid regarding post declared structures typedefs. It looks like the include ordering makes the nidmap.h file being included before orte_jmap_t typedefs and siblings have been done. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/cray/xt-asyncpe/4.0/bin/cc: INFO: linux target is being used
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, orte_jmap_t (../../../../../trunk/orte/util/nidmap.h: 47)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 47)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, orte_pmap_t (../../../../../trunk/orte/util/nidmap.h: 48)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 48)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, orte_nid_t (../../../../../trunk/orte/util/nidmap.h: 49)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 49)
</span><br>
<span class="quotelev1">&gt; PGC-S-0040-Illegal use of symbol, orte_jmap_t (../../../../../trunk/orte/util/nidmap.h: 63)
</span><br>
<span class="quotelev1">&gt; PGC-W-0156-Type not specified, 'int' assumed (../../../../../trunk/orte/util/nidmap.h: 63)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 95)
</span><br>
<span class="quotelev1">&gt; PGC-S-0074-Non-constant expression in initializer (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 103)
</span><br>
<span class="quotelev1">&gt; PGC-W-0093-Type cast required for this conversion of constant (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 109)
</span><br>
<span class="quotelev1">&gt; PGC-W-0093-Type cast required for this conversion of constant (../../../../../trunk/orte/mca/ess/slave/ess_slave_module.c: 109)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 10.5-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8571.php">Ralph Castain: "[OMPI devel] 1.4.3rc4"</a>
<li><strong>Previous message:</strong> <a href="8569.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<li><strong>In reply to:</strong> <a href="8569.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte does not compile on XT5 (pgcc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8623.php">Ralph Castain: "Re: [OMPI devel] orte does not compile on XT5 (pgcc)"</a>
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
