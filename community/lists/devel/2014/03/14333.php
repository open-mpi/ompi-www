<?
$subject_val = "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 23:25:47 2014" -->
<!-- isoreceived="20140312032547" -->
<!-- sent="Tue, 11 Mar 2014 21:25:43 -0600" -->
<!-- isosent="20140312032543" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="531FD3B7.2040605_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD2923B3-C438-4A6E-AD7A-C028640E1DA3_at_cisco.com" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 23:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/11/2014 05:35 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 11, 2014, at 7:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Clarification: MPI_Address was deprecated for MPI_Get_address (which properly has the const in it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further clarification: MPI_Address was *removed* in MPI-3 (it was deprecated somewhere in the MPI-2.x series; I don't remember the exact version offhand).  So it's definitely incorrect to const-ify its arguments.
</span><br>
<p>Okay.  Score-P seems to handle its absence fine.
<br>
<p><span class="quotelev2">&gt;&gt; The MPI_Info_set problem is a bug and I'll commit a fix for that one now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1 -- thanks for the heads-up and catching this one before we release 1.7.5.
</span><br>
<p>Great, NP.
<br>
<p><span class="quotelev1">&gt; Did you find any others, perchance?
</span><br>
<p>Also:
<br>
MPI_Type_hindexed
<br>
MPI_Type_struct
<br>
<p>But these were also deprecated in MPI-2.0, so probably gone in MPI-3.
<br>
That's it as far as score-p is concerned.  Note that dropping functions
<br>
has serious ABI/soname implications.  I'll probably have to hack up
<br>
something for scorep to handle these, probably just be removing them.
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;Orion
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14332.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14334.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
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
