<?
$subject_val = "Re: [OMPI users] uDAPL status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 12:59:27 2013" -->
<!-- isoreceived="20130225175927" -->
<!-- sent="Mon, 25 Feb 2013 09:59:18 -0800" -->
<!-- isosent="20130225175918" -->
<!-- name="Dan Beatty" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] uDAPL status" -->
<!-- id="CD50E676.C615%daniel.beatty_at_navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F54EDB_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Dan Beatty (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 12:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21458.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21452.php">Jeff Squyres (jsquyres): "Re: [OMPI users] uDAPL status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Jeff,
<br>
Sounds like another case of &quot;No Bucks - No Buck Rogers&quot; story.  As much as
<br>
we want Open Source and Open Standards to solve problems, it still comes
<br>
down to a matter of funding.  At least, with Open Standards and Open Source
<br>
combined, if one company goes belly up the product can be continued.  The
<br>
challenge with Open Standards is to make sure that standards board can be
<br>
reasonable.
<br>
<p>V/R,
<br>
<p>Daniel Beatty, Ph.D.
<br>
Computer Scientist, Detonation Sciences Branch
<br>
Code 474300D
<br>
1 Administration Circle M/S 1109
<br>
China Lake, CA 93555
<br>
daniel.beatty_at_[hidden]
<br>
(LandLine) (760)939-7097
<br>
(iPhone) (806)438-6620
<br>
<p><p><p><p>On 2/22/13 3:02 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Meh.  UDAPL never really caught on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was the low latency stack in Solaris for a while.  Then they shifted to
</span><br>
<span class="quotelev1">&gt; verbs.  Then Sun got bought by Oracle, and they didn't really care about UDAPL
</span><br>
<span class="quotelev1">&gt; anymore (at least from an HPC perspective).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel used to use UDAPL as their main communication layer for Intel MPI (I
</span><br>
<span class="quotelev1">&gt; don't know if they still do or not).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But outside of those use cases, I'm not aware of much UDAPL usage.  UDAPL Was
</span><br>
<span class="quotelev1">&gt; only in OMPI for Solaris.  And now that they're backing away from HPC, I can
</span><br>
<span class="quotelev1">&gt; foresee us removing the UDAPL BTL someday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 22, 2013, at 5:49 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You may find more updated version on ofed website:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.openfabrics.org/downloads/dapl/">http://www.openfabrics.org/downloads/dapl/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Research Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 22, 2013, at 2:18 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the uDAPL project still active?  The SourceForge page says it isn't:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://sourceforge.net/projects/dapl/">http://sourceforge.net/projects/dapl/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As of 2009-03-13, this project is no longer under active development.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi's configure emits;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking --with-udapl value... simple ok (unspecified)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking --with-udapl-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: On Linux and --with-udapl was not specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: Not building the udapl BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should it still emit this warning?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NWRA, Boulder Office                  FAX: 303-415-9702
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21458.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21452.php">Jeff Squyres (jsquyres): "Re: [OMPI users] uDAPL status"</a>
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
