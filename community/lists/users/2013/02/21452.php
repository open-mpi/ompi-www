<?
$subject_val = "Re: [OMPI users] uDAPL status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 22 18:03:00 2013" -->
<!-- isoreceived="20130222230300" -->
<!-- sent="Fri, 22 Feb 2013 23:02:55 +0000" -->
<!-- isosent="20130222230255" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] uDAPL status" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F54EDB_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="63BB43FE-2E72-4643-A239-1158B46FC594_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] uDAPL status<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-22 18:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21453.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21451.php">Shamis, Pavel: "Re: [OMPI users] uDAPL status"</a>
<li><strong>In reply to:</strong> <a href="21451.php">Shamis, Pavel: "Re: [OMPI users] uDAPL status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<li><strong>Reply:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Meh.  UDAPL never really caught on.
<br>
<p>It was the low latency stack in Solaris for a while.  Then they shifted to verbs.  Then Sun got bought by Oracle, and they didn't really care about UDAPL anymore (at least from an HPC perspective).  
<br>
<p>Intel used to use UDAPL as their main communication layer for Intel MPI (I don't know if they still do or not).
<br>
<p>But outside of those use cases, I'm not aware of much UDAPL usage.  UDAPL Was only in OMPI for Solaris.  And now that they're backing away from HPC, I can foresee us removing the UDAPL BTL someday.
<br>
<p><p>On Feb 22, 2013, at 5:49 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; You may find more updated version on ofed website:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/dapl/">http://www.openfabrics.org/downloads/dapl/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2013, at 2:18 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the uDAPL project still active?  The SourceForge page says it isn't:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sourceforge.net/projects/dapl/">http://sourceforge.net/projects/dapl/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As of 2009-03-13, this project is no longer under active development.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi's configure emits;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-udapl value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-udapl-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: On Linux and --with-udapl was not specified
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Not building the udapl BTL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should it still emit this warning?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev2">&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev2">&gt;&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev2">&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21453.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21451.php">Shamis, Pavel: "Re: [OMPI users] uDAPL status"</a>
<li><strong>In reply to:</strong> <a href="21451.php">Shamis, Pavel: "Re: [OMPI users] uDAPL status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<li><strong>Reply:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
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
