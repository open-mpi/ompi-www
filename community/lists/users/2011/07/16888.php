<?
$subject_val = "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 10:31:02 2011" -->
<!-- isoreceived="20110711143102" -->
<!-- sent="Mon, 11 Jul 2011 10:30:57 -0400" -->
<!-- isosent="20110711143057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="AB47B672-C374-4DEF-B9B8-E793FACEEF75_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1AB18B.9050508_at_nag.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 10:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm going to move this over to the devel list...
<br>
<p>On Jul 11, 2011, at 4:17 AM, Ning Li wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am willing to help test OpenMPI with the NAG compiler from time to time but not sure how. If you could give me specific instructions I am very happy to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for this technical issue, I did some research online. It appears that a later version of Libtool (probably 2.2.10+) added support to NAG Fortran compiler. There are discussions at <a href="http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html">http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant section of code (which I found from Libtool 2.4) looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      nagfor*)
</span><br>
<span class="quotelev1">&gt; 	# NAG Fortran compiler
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,-Wl,,'
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_pic, $1)='-PIC'
</span><br>
<span class="quotelev1">&gt; 	_LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The basic idea here is that nagfor calls gcc (not ld directly) for linking so there are two stages of parameter passing, so the rather strange looking '-Wl,-Wl,,' flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see that in OpenMPI 1.5.3 source, the $OPENMPI_DIR/config/libtool.m4 file does not contain the above code. I have not nuch experience using Libtool so I don't know how to fix this. Simply adding the new code does not seem to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ning
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Thu, 7 Jul 2011 20:32:21 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay in replying.:-\
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid we don't test with the NAG compiler.:-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Would this be something that the NAG would be willing to do for the Open MPI community?  Companies like Absoft do -- we have a light test suite that can be fully automated (i.e., run via cron).  Ping me offline if you would be able to do this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I suspect that the version of Libtool we're using doesn't fully understand the NAG compiler.  We get many of the compile-time options by extracting them from Libtool.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use Libtool 2.2.6b for OMPI v1.5.  Do you know if that version of Libtool supports the NAG compiler well, or if a more recent version supports it better?  Libtool made some fairly major changes late in the 2.2.x series that we don't really want to have to adapt to in the v1.5 series if we don't have to (i.e., we planned to adapt to them for the v1.7 series).  But perhaps we could patch our Libtool for NAG...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; The Numerical Algorithms Group Ltd is a company registered in England
</span><br>
<span class="quotelev1">&gt; and Wales with company number 1249803. The registered office is:
</span><br>
<span class="quotelev1">&gt; Wilkinson House, Jordan Hill Road, Oxford OX2 8DR, United Kingdom.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail has been scanned for all viruses by Star. The service is
</span><br>
<span class="quotelev1">&gt; powered by MessageLabs. ________________________________________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16887.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<li><strong>In reply to:</strong> <a href="16884.php">Ning Li: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
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
