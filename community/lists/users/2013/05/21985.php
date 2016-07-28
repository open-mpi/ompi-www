<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 18:04:07 2013" -->
<!-- isoreceived="20130529220407" -->
<!-- sent="Wed, 29 May 2013 22:02:44 +0000" -->
<!-- isosent="20130529220244" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA065F4_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130529215904.GA23619_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 18:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21984.php">Nathan Hjelm: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21984.php">Nathan Hjelm: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21987.php">Blosch, Edwin L: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The PGI user forum has a recent post regarding PGI 13.2 and OpenMPI 1.6.4.
<br>
<p>The user had effectively a bad install of the compiler.  Some file &quot;stddef.h&quot; provided within the PGI installation was missing, and when it was individually supplied, compilation still failed.  Basically he thought other files might also be missing.  I did not see a final resolution.  It does not appear to be an OpenMPI issue, though.  Seems to be a PGI issue with the install.
<br>
<p>Thanks
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Wednesday, May 29, 2013 4:59 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4
<br>
<p>It works with PGI 12.x and it better work with newer versions since offsetof is ISOC89/ANSIC.
<br>
<p>-Nathan
<br>
<p>On Wed, May 29, 2013 at 09:31:58PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Edwin --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you ask PGI support about this?  I swear that the PGI compiler suite has supported offsetof before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2013, at 5:26 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I?m having trouble building OpenMPI 1.6.4 with PGI 13.4. Suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of double... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of long double... 8 checking alignment of float 
</span><br>
<span class="quotelev2">&gt; &gt; _Complex... 4 checking alignment of double _Complex... 8 checking 
</span><br>
<span class="quotelev2">&gt; &gt; alignment of long double _Complex... 8 checking alignment of void 
</span><br>
<span class="quotelev2">&gt; &gt; *... 8 checking for C bool type... no checking size of _Bool... 1 
</span><br>
<span class="quotelev2">&gt; &gt; checking for inline... inline checking for C/C++ restrict keyword... 
</span><br>
<span class="quotelev2">&gt; &gt; __restrict checking for weak symbol support... yes checking for 
</span><br>
<span class="quotelev2">&gt; &gt; functional offsetof macro... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt; + '[' 1 = 0 ']'
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21984.php">Nathan Hjelm: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21984.php">Nathan Hjelm: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21987.php">Blosch, Edwin L: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
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
