<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 16:41:43 2007" -->
<!-- isoreceived="20070720204143" -->
<!-- sent="Fri, 20 Jul 2007 16:37:49 -0400" -->
<!-- isosent="20070720203749" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Removal of cellid" -->
<!-- id="46A11D1D.80804_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2C52D25.A155%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 16:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Terry D. Dontje: "[OMPI devel] Locking issue with OB1 PML"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; This change has finally been merged into the trunk as r15517. It will
</span><br>
<span class="quotelev1">&gt; unfortunately require an autogen (sorry).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you encounter any problems. As noted in the commit, I
</span><br>
<span class="quotelev1">&gt; tried to catch all the places that required change, but cannot guarantee
</span><br>
<span class="quotelev1">&gt; that I got all of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I have recompiled everything (and autogened). I get this warning message 
<br>
that looks direct consequence of your patch. Compiled on em64t core2duo 
<br>
(Fedora core), gcc4.1.2 with debug disabled, --with-profile=optimized.
<br>
<p>./bin/mpirun  -host node01,node02,node03,node04 -np 8 NPB3.2-MPI/bin/cg.C.8
<br>
[dancer:11996] mca: base: component_find: unable to open rds resfile: 
<br>
/home/bouteill/lib/openmpi/mca_rds_resfile.so: undefined symbol: 
<br>
orte_rds_cell_desc_t_class (ignored)
<br>
<p>Maybe it is just a leftover from previous installation (especially if 
<br>
this rds component have been removed). Let me know if you need more 
<br>
information about this warning.
<br>
<p>Aurelien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1967.php">Terry D. Dontje: "[OMPI devel] Locking issue with OB1 PML"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Ralph H Castain: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1969.php">Jeff Squyres: "Re: [OMPI devel] Removal of cellid"</a>
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
