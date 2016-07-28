<?
$subject_val = "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 11 04:18:47 2011" -->
<!-- isoreceived="20110711081847" -->
<!-- sent="Mon, 11 Jul 2011 09:17:15 +0100" -->
<!-- isosent="20110711081715" -->
<!-- name="Ning Li" -->
<!-- email="ning.li_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
<!-- id="4E1AB18B.9050508_at_nag.co.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI with NAG compiler and gcc 4.6" -->
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
<strong>From:</strong> Ning Li (<em>ning.li_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-11 04:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16883.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I am willing to help test OpenMPI with the NAG compiler from time to time but not sure how. If you could give me specific instructions I am very happy to help.
<br>
<p>As for this technical issue, I did some research online. It appears that a later version of Libtool (probably 2.2.10+) added support to NAG Fortran compiler. There are discussions at <a href="http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html">http://lists.gnu.org/archive/html/bug-libtool/2010-09/msg00002.html</a>
<br>
<p>The relevant section of code (which I found from Libtool 2.4) looks like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nagfor*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# NAG Fortran compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,-Wl,,'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_pic, $1)='-PIC'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p>The basic idea here is that nagfor calls gcc (not ld directly) for linking so there are two stages of parameter passing, so the rather strange looking '-Wl,-Wl,,' flag.
<br>
<p>I can see that in OpenMPI 1.5.3 source, the $OPENMPI_DIR/config/libtool.m4 file does not contain the above code. I have not nuch experience using Libtool so I don't know how to fix this. Simply adding the new code does not seem to work.
<br>
<p>Best regards,
<br>
<p>Ning
<br>
<p><p>Date: Thu, 7 Jul 2011 20:32:21 -0400
<br>
From: Jeff Squyres&lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying.:-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid we don't test with the NAG compiler.:-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would this be something that the NAG would be willing to do for the Open MPI community?  Companies like Absoft do -- we have a light test suite that can be fully automated (i.e., run via cron).  Ping me offline if you would be able to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that the version of Libtool we're using doesn't fully understand the NAG compiler.  We get many of the compile-time options by extracting them from Libtool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use Libtool 2.2.6b for OMPI v1.5.  Do you know if that version of Libtool supports the NAG compiler well, or if a more recent version supports it better?  Libtool made some fairly major changes late in the 2.2.x series that we don't really want to have to adapt to in the v1.5 series if we don't have to (i.e., we planned to adapt to them for the v1.7 series).  But perhaps we could patch our Libtool for NAG...?
</span><br>
<p><p>________________________________________________________________________
<br>
The Numerical Algorithms Group Ltd is a company registered in England
<br>
and Wales with company number 1249803. The registered office is:
<br>
Wilkinson House, Jordan Hill Road, Oxford OX2 8DR, United Kingdom.
<br>
<p>This e-mail has been scanned for all viruses by Star. The service is
<br>
powered by MessageLabs. 
<br>
________________________________________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16885.php">Randolph Pullen: "[OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Previous message:</strong> <a href="16883.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>Reply:</strong> <a href="16888.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
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
