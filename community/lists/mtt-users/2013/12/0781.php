<?
$subject_val = "Re: [MTT users] Installation on MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 08:58:55 2013" -->
<!-- isoreceived="20131218135855" -->
<!-- sent="Wed, 18 Dec 2013 13:58:54 +0000" -->
<!-- isosent="20131218135854" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Installation on MTT" -->
<!-- id="11B48532-158F-4583-A473-B2FAC4A073FD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAO98qbrN_W0kqkes_72TM4KhoCNeKEz-wEjMu4Yr1iRJ0egT=Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Installation on MTT<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 08:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/11/0780.php">Jeff Squyres (jsquyres): "Re: [MTT users] Requesting svn access to ompi-tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(adding the mtt-users mailing list; see <a href="http://www.open-mpi.org/community/lists/mtt.php">http://www.open-mpi.org/community/lists/mtt.php</a>)
<br>
<p>To use MTT, you do not need to be a core member of Open MPI.  The wiki page you listed simply describes how core Open MPI members use MTT.
<br>
<p>If you want to use MTT, it is easiest to first setup the client to do some simple test and output to a text file (vs. submitting results to a server).  Get that working first.  Then expand the client to run more and more tests (while still outputting results to text files).  You can run any tests you want -- there's nothing special about the MPI tests that we use internally to the Open MPI project.  You just need to be able to describe them in the MTT client INI file, and specify conditions for passing/failing/skipping.  
<br>
<p>Once you have all the tests working in the way that you want, you can choose to install an MTT database server if you wish.  This will give you web pages like we have at <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>.
<br>
<p><p><p><p>On Dec 16, 2013, at 11:07 PM, jimmy cao &lt;jcao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to deploy MTT in my cluster. 
</span><br>
<span class="quotelev1">&gt; From the webpage (<a href="https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting">https://svn.open-mpi.org/trac/mtt/wiki/OMPITesting</a>), it seems only on how to install MTT client, it also needs Open MPI core membership.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some guide on how to install MTT on my cluster (both server and client)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Jimmy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    
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
<li><strong>Next message:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/11/0780.php">Jeff Squyres (jsquyres): "Re: [MTT users] Requesting svn access to ompi-tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0782.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
<li><strong>Reply:</strong> <a href="0783.php">caohaijun: "Re: [MTT users] Installation on MTT"</a>
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
