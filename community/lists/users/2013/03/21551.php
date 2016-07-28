<?
$subject_val = "Re: [OMPI users] openmpi java binding errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 18 15:42:49 2013" -->
<!-- isoreceived="20130318194249" -->
<!-- sent="Mon, 18 Mar 2013 19:42:43 +0000" -->
<!-- isosent="20130318194243" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi java binding errors" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FADD33_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJY_E12A9FCxTuQeXkL0XK6i3vG9hVcTOmeGZHfLSSP2_VdrCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi java binding errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-18 15:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you build from a Subversion checkout, and therefore run autogen.pl?
<br>
<p>If so, it sounds like you need to upgrade your version of the autotools -- you might be using a libtool package (and therefore libltdl) that is too old.
<br>
<p>See the autotools page on the OMPI web site (sorry, I'm not connected right now to lookup the specific URL you should reference) to see the minimums that we need.
<br>
<p><p>On Mar 13, 2013, at 10:59 PM, Huasha Zhao &lt;creislerzhao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered an error when running openmpi Java applications (it works fine with c/c++ applications). The java code compiles successfully, but it crashed at runtime with:
</span><br>
<span class="quotelev1">&gt; NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it has to do with dynamically loading native libraries. Since I have no experiences with JNI, I would like to resort to the community to help solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is how exactly I install openmpi (on a EC2 AMI linux instance). I use a nightly snapshot openmpi-1.9r28157.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo ./configure --enable-mpi-java --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; sudo make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also set LD_LIBRARY_PATH to include &quot;/usr/local/lib&quot; which has &quot;libmpi.so&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Chris Zhao 
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
<li><strong>Next message:</strong> <a href="21552.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange IO issues in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21554.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi java binding errors"</a>
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
