<?
$subject_val = "Re: [OMPI users] openmpi 1.4.1 and xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:10:43 2010" -->
<!-- isoreceived="20100503151043" -->
<!-- sent="Mon, 3 May 2010 17:10:17 +0200" -->
<!-- isosent="20100503151017" -->
<!-- name="Alan" -->
<!-- email="alanwilter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.4.1 and xgrid" -->
<!-- id="p2gcf58c8d01005030810k95d5e684yabeb18f3916016fe_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="36F316A3-01AE-449E-82DE-A63D851DAD4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.4.1 and xgrid<br>
<strong>From:</strong> Alan (<em>alanwilter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Previous message:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Jeff, you described exactly my problem (mistake indeed) and now
<br>
things are working fine.
<br>
<p>Sorry for much ado for nothing.
<br>
<p>Cheers,
<br>
<p>Alan
<br>
<p>On Mon, May 3, 2010 at 14:57, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 30, 2010, at 7:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I build it on Mac 10.6 every time we do an update to the 1.4 series,
</span><br>
<span class="quotelev1">&gt; without problem. --without-xgrid or --with-xgrid=no should both work just
</span><br>
<span class="quotelev1">&gt; fine (I use the latter myself).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ditto.  I just downloaded 1.4.1 and tried it on my 10.6 mbp and when using
</span><br>
<span class="quotelev1">&gt; --without-xgrid, I see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component plm:xgrid (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component plm:xgrid compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if MCA component plm:xgrid can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and when not using that, I see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component plm:xgrid (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component plm:xgrid compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if C and Objective C are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for XgridFoundation Framework... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component plm:xgrid can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to double check that you're not just installing over an old
</span><br>
<span class="quotelev1">&gt; installation that still contains the xgrid plugin.  OMPI's plugins are
</span><br>
<span class="quotelev1">&gt; installed as individual files.  So if you install with xgrid support, you've
</span><br>
<span class="quotelev1">&gt; installed the xgrid plugin.  If you then re-install in the same installation
</span><br>
<span class="quotelev1">&gt; tree *without* xgrid support, then you'll still have xgrid support because
</span><br>
<span class="quotelev1">&gt; the plugin will still be there from the prior install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you can remove the xgrid plugin by removing
</span><br>
<span class="quotelev1">&gt; ompi_install_tree/lib/openmpi/*xgrid*.  Then ompi_info | grep xgrid should
</span><br>
<span class="quotelev1">&gt; turn up nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
Department of Biochemistry, University of Cambridge.
80 Tennis Court Road, Cambridge CB2 1GA, UK.
&gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a>&lt;&lt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Previous message:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>In reply to:</strong> <a href="12866.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
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
