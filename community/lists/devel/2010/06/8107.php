<?
$subject_val = "Re: [OMPI devel] Error (mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefinedsymbol: orte_rmaps_base_get_starting_point )";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 10:39:59 2010" -->
<!-- isoreceived="20100615143959" -->
<!-- sent="Tue, 15 Jun 2010 07:39:53 -0700" -->
<!-- isosent="20100615143953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error (mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefinedsymbol: orte_rmaps_base_get_starting_point )" -->
<!-- id="E040594E-4E6A-4205-9E94-67D6AC450D03_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="844E374F-9615-4482-B143-F85C4ADD7EB9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error (mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefinedsymbol: orte_rmaps_base_get_starting_point )<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 10:39:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="8106.php">Ralph Castain: "Re: [OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
<li><strong>In reply to:</strong> <a href="8106.php">Ralph Castain: "Re: [OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, be sure to read this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
<br>
<p><p><p>On Jun 15, 2010, at 5:40 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Looks like there is some version confusion, or perhaps a bad ld_library_path setting. That library should be in openmpi-rte, yet the error indicates it was looking in openmpi (which would be correct in some earlier version).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2010, at 11:17 PM, Leo P. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am using mpirun (Open MPI) 1.3.2 on Ubuntu 8.04
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Leo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- On Mon, 14/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Monday, 14 June, 2010, 7:46 PM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What OMPI version? On what system?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 14, 2010, at 3:35 AM, Leo P. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HI everyone, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting this error when i am running 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 10 myapp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be greatly appreciated 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8108.php">Damien Guinier: "[OMPI devel] srun + Intel OpenMP = SIGSEGV"</a>
<li><strong>Previous message:</strong> <a href="8106.php">Ralph Castain: "Re: [OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
<li><strong>In reply to:</strong> <a href="8106.php">Ralph Castain: "Re: [OMPI devel] Error (mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_rmaps_load_balance.so: undefined symbol: orte_rmaps_base_get_starting_point )"</a>
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
