<?
$subject_val = "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:28:41 2014" -->
<!-- isoreceived="20140312102841" -->
<!-- sent="Wed, 12 Mar 2014 10:28:40 +0000" -->
<!-- isosent="20140312102840" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="01E35733-8E69-443A-B247-5F45806B1517_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="531FD3B7.2040605_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 06:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2014, at 11:25 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Did you find any others, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also:
</span><br>
<span class="quotelev1">&gt; MPI_Type_hindexed
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But these were also deprecated in MPI-2.0, so probably gone in MPI-3.
</span><br>
<p>Correct -- i.e., I confirm you're right: MPI_Type_indexed and MPI_Type_struct were deprecated in MPI-2.0 (1994), and finally removed in MPI-3 (2012).
<br>
<p><span class="quotelev1">&gt; That's it as far as score-p is concerned.  Note that dropping functions
</span><br>
<span class="quotelev1">&gt; has serious ABI/soname implications.  
</span><br>
<p>Keep in mind that MPI-3 deleted these interfaces, but they had already been deprecated for over 2012-1994 = 17 years.
<br>
<p>MPI-3 also made it clear that MPI implementations can keep providing these interfaces, but they must adhere to the prototypes that were published in prior versions of the MPI specification (i.e., no const).
<br>
<p>At this point, I believe both Open MPI and MPICH will issue deprecated warnings if your compiler supports them if you use these functions.  Open MPI doesn't yet have any plans for actually removing the functions.  If/when we do remove them, we'll do it at the beginning of a new feature series.
<br>
<p><span class="quotelev1">&gt; I'll probably have to hack up
</span><br>
<span class="quotelev1">&gt; something for scorep to handle these, probably just be removing them.
</span><br>
<p>It would be best to migrate to the new interfaces; it should be quite trivial (change the parameter type from &quot;int&quot; to &quot;MPI_Aint&quot;).  17 years is enough.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14335.php">Bibrak Qamar: "[OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
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
