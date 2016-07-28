<?
$subject_val = "Re: [OMPI users] MPI 2 support in sm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 09:08:25 2011" -->
<!-- isoreceived="20111216140825" -->
<!-- sent="Fri, 16 Dec 2011 09:08:17 -0500" -->
<!-- isosent="20111216140817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI 2 support in sm btl" -->
<!-- id="0D1C8B0F-6DE9-4AF5-B288-28A5FD1C89E8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B489467-078D-4B4E-B906-B466BE496200_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI 2 support in sm btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 09:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17993.php">Richard Walsh: "[OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17980.php">Ralph Castain: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Reply:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2011, at 4:01 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; As far as I know, there is no support for some MPI-2 features in the shared memory BTL as dynamic process creation or port connection. Are you planning to include this support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on what exactly you mean. Dynamically spawned processes do use the shared memory BTL between themselves, but not with the processes in their parent job. We plan to support that as well at some future time.
</span><br>
<p>...when enough people ask for it.  :-)
<br>
<p>We've talked about supporting this for a long time, but to be blunt, there hasn't been enough demand for it to justify spending the time to figure out all the issues and implement it properly.  :-(
<br>
<p>Patches would be welcome, though!  :-)
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="17993.php">Richard Walsh: "[OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17980.php">Ralph Castain: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>Reply:</strong> <a href="18065.php">Sabela Ramos Garea: "Re: [OMPI users] MPI 2 support in sm btl"</a>
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
