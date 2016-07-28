<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  1 18:44:18 2014" -->
<!-- isoreceived="20140301234418" -->
<!-- sent="Sun, 2 Mar 2014 00:44:16 +0100" -->
<!-- isosent="20140301234416" -->
<!-- name="Tru Huynh" -->
<!-- email="tru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="20140301234416.GE20075_at_sillage.bis.pasteur.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53103F99.9060409_at_cc.dtu.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Tru Huynh (<em>tru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-01 18:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23732.php">tmishima_at_[hidden]: "[OMPI users] Duplicated ticket"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23730.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23764.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23764.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 28, 2014 at 08:49:45AM +0100, Bernd Dammann wrote:
<br>
<span class="quotelev1">&gt; On 2/27/14 16:47 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Bernd Dammann &lt;bd_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I found this thread from before Christmas, and I wondered what the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;status of this problem is.  We experience the same problems since our
</span><br>
<span class="quotelev3">&gt; &gt;&gt;upgrade to Scientific Linux 6.4, kernel 2.6.32-431.1.2.el6.x86_64, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt;OpenMPI 1.6.5.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Users have reported severe slowdowns in all kinds of applications,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;like VASP, OpenFOAM, etc.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm surprised a kernel change should be related to core binding, if
</span><br>
<span class="quotelev2">&gt; &gt;that's the issue, or caused your slowdown.  We were running that kernel
</span><br>
<span class="quotelev2">&gt; &gt;OK until recently with those sort of applications and that OMPI version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I should say, that we moved from SL 6.1 and OMPI 1.4.x to SL
</span><br>
<span class="quotelev1">&gt; 6.4 with the above kernel, and OMPI 1.6.5 - which means a major
</span><br>
<span class="quotelev1">&gt; upgrade of our cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After the upgrade, users reported those slowdowns, and a search on
</span><br>
<span class="quotelev1">&gt; this list showed, that other sites had the same (or similar issues)
</span><br>
<span class="quotelev1">&gt; with this kernel and OMPI version combination.
</span><br>
<p>afaik, 2.6.32-431 series is from RHEL(and clones) version &gt;=6.5
<br>
otoh, it might be related to <a href="http://bugs.centos.org/view.php?id=6949">http://bugs.centos.org/view.php?id=6949</a>
<br>
<p>Cheers
<br>
<p>Tru
<br>
<p><pre>
-- 
Dr Tru Huynh          | <a href="http://www.pasteur.fr/recherche/unites/Binfs/">http://www.pasteur.fr/recherche/unites/Binfs/</a>
mailto:tru_at_[hidden] | tel/fax +33 1 45 68 87 37/19
Institut Pasteur, 25-28 rue du Docteur Roux, 75724 Paris CEDEX 15 France  
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23732.php">tmishima_at_[hidden]: "[OMPI users] Duplicated ticket"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23730.php">tmishima_at_[hidden]: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23764.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23764.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
