<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 20 16:44:36 2007" -->
<!-- isoreceived="20070720204436" -->
<!-- sent="Fri, 20 Jul 2007 16:44:03 -0400" -->
<!-- isosent="20070720204403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Removal of cellid" -->
<!-- id="66B878CE-D93C-4CEA-A24C-B5D06C04A6A4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A11D1D.80804_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-20 16:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>In reply to:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is probably easiest / best to completely remove your prior  
<br>
installation and then install again.
<br>
<p>FWIW: I typically install my development copies of OMPI into a tree  
<br>
that has nothing else so that I can easily &quot;rm -rf $ompi&quot; and &quot;make  
<br>
install&quot; to guarantee that I get a clean install.
<br>
<p><p>On Jul 20, 2007, at 4:37 PM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This change has finally been merged into the trunk as r15517. It will
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately require an autogen (sorry).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you encounter any problems. As noted in the  
</span><br>
<span class="quotelev2">&gt;&gt; commit, I
</span><br>
<span class="quotelev2">&gt;&gt; tried to catch all the places that required change, but cannot  
</span><br>
<span class="quotelev2">&gt;&gt; guarantee
</span><br>
<span class="quotelev2">&gt;&gt; that I got all of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I have recompiled everything (and autogened). I get this warning  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; that looks direct consequence of your patch. Compiled on em64t  
</span><br>
<span class="quotelev1">&gt; core2duo
</span><br>
<span class="quotelev1">&gt; (Fedora core), gcc4.1.2 with debug disabled, --with-profile=optimized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./bin/mpirun  -host node01,node02,node03,node04 -np 8 NPB3.2-MPI/ 
</span><br>
<span class="quotelev1">&gt; bin/cg.C.8
</span><br>
<span class="quotelev1">&gt; [dancer:11996] mca: base: component_find: unable to open rds resfile:
</span><br>
<span class="quotelev1">&gt; /home/bouteill/lib/openmpi/mca_rds_resfile.so: undefined symbol:
</span><br>
<span class="quotelev1">&gt; orte_rds_cell_desc_t_class (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe it is just a leftover from previous installation (especially if
</span><br>
<span class="quotelev1">&gt; this rds component have been removed). Let me know if you need more
</span><br>
<span class="quotelev1">&gt; information about this warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1970.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15540"</a>
<li><strong>Previous message:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>In reply to:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
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
