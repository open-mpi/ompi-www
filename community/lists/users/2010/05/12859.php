<?
$subject_val = "Re: [OMPI users] openmpi 1.4.1 and xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 08:57:37 2010" -->
<!-- isoreceived="20100503125737" -->
<!-- sent="Mon, 3 May 2010 08:57:33 -0400" -->
<!-- isosent="20100503125733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4.1 and xgrid" -->
<!-- id="36F316A3-01AE-449E-82DE-A63D851DAD4C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="28790BBB-1793-445E-B0F2-F8FF566FDB51_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 08:57:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12858.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="../../2010/04/12855.php">Ralph Castain: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2010, at 7:12 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I build it on Mac 10.6 every time we do an update to the 1.4 series, without problem. --without-xgrid or --with-xgrid=no should both work just fine (I use the latter myself).
</span><br>
<p>Ditto.  I just downloaded 1.4.1 and tried it on my 10.6 mbp and when using --without-xgrid, I see:
<br>
<p>--- MCA component plm:xgrid (m4 configuration macro)
<br>
checking for MCA component plm:xgrid compile mode... dso
<br>
checking if MCA component plm:xgrid can compile... no
<br>
<p>and when not using that, I see:
<br>
<p>--- MCA component plm:xgrid (m4 configuration macro)
<br>
checking for MCA component plm:xgrid compile mode... dso
<br>
checking if C and Objective C are link compatible... yes
<br>
checking for XgridFoundation Framework... yes
<br>
checking if MCA component plm:xgrid can compile... yes
<br>
<p>You might want to double check that you're not just installing over an old installation that still contains the xgrid plugin.  OMPI's plugins are installed as individual files.  So if you install with xgrid support, you've installed the xgrid plugin.  If you then re-install in the same installation tree *without* xgrid support, then you'll still have xgrid support because the plugin will still be there from the prior install.
<br>
<p>FWIW, you can remove the xgrid plugin by removing ompi_install_tree/lib/openmpi/*xgrid*.  Then ompi_info | grep xgrid should turn up nothing.
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
<li><strong>Next message:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12858.php">Reuti: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="../../2010/04/12855.php">Ralph Castain: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12860.php">Alan: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
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
