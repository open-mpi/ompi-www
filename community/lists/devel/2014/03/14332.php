<?
$subject_val = "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 19:35:16 2014" -->
<!-- isoreceived="20140311233516" -->
<!-- sent="Tue, 11 Mar 2014 23:35:15 +0000" -->
<!-- isosent="20140311233515" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide" -->
<!-- id="FD2923B3-C438-4A6E-AD7A-C028640E1DA3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6C388702-A7F0-4830-9786-B1D6AE2810CE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-03-11 19:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2014, at 7:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Clarification: MPI_Address was deprecated for MPI_Get_address (which properly has the const in it).
</span><br>
<p>Further clarification: MPI_Address was *removed* in MPI-3 (it was deprecated somewhere in the MPI-2.x series; I don't remember the exact version offhand).  So it's definitely incorrect to const-ify its arguments.
<br>
<p><span class="quotelev1">&gt; The MPI_Info_set problem is a bug and I'll commit a fix for that one now.
</span><br>
<p>+1 -- thanks for the heads-up and catching this one before we release 1.7.5.
<br>
<p>Did you find any others, perchance?
<br>
<p><span class="quotelev1">&gt; What you might want to do is update your Score-P code to the current standard, since you are striving for MPI-3 compliance anyway.
</span><br>
<p>If MPICH has this minor buglet, you'll probably need to have a configure test to figure out whether you need to const-ify MPI_Address or not.  Be sure to report this buglet upstream to MPICH so that they can fix it.
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
<li><strong>Next message:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>In reply to:</strong> <a href="14331.php">Ralph Castain: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Reply:</strong> <a href="14333.php">Orion Poplawski: "Re: [OMPI devel] [Score-P support] Compile errors of Fedora rawhide"</a>
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
