<?
$subject_val = "Re: [OMPI devel] Build warnings in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 17:34:34 2013" -->
<!-- isoreceived="20130514213434" -->
<!-- sent="Tue, 14 May 2013 15:34:30 -0600" -->
<!-- isosent="20130514213430" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build warnings in trunk" -->
<!-- id="20130514213430.GA87592_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E981D4160_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build warnings in trunk<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 17:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 14, 2013 at 02:30:17PM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; I have noticed several warnings while building the trunk.   Feel free to fix anything that you are familiar with.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC     mca_base_param.lo
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/base/mca_base_param.c: In function 'register_param':
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/base/mca_base_param.c:113:25: warning: 'var_type' may be used uninitialized in this function
</span><br>
<p>I will take this one. I will put out the RFC for removing this code now.
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
<li><strong>Previous message:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<li><strong>In reply to:</strong> <a href="12383.php">Rolf vandeVaart: "[OMPI devel] Build warnings in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12385.php">Ralph Castain: "Re: [OMPI devel] Build warnings in trunk"</a>
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
