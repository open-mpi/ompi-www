<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI with PGI pgc++";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 16:50:46 2014" -->
<!-- isoreceived="20140131215046" -->
<!-- sent="Fri, 31 Jan 2014 22:50:40 +0100" -->
<!-- isosent="20140131215040" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI with PGI pgc++" -->
<!-- id="ABE8D68F-F09C-4846-B696-9B514DAC8F08_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="754A977B8DC8A14F9C722AF73FB8C004B679E15AC0_at_DEMAIL01.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI with PGI pgc++<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 16:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 31.01.2014 um 18:59 schrieb Jiri Kraus:
<br>
<p><span class="quotelev1">&gt; Thanks for taking a look. I just learned from PGI that this is a known bug that will be fixed in the 14.2 release (Februrary 2014).
</span><br>
<p>Will `pgc++` then link to `gcc` or `pgcc`? When I get it right, it should be a feature of `pgc++` to be link compatible with `gcc`, while `pgcpp` links with `pgcc` objects.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jiri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 29 Jan 2014 18:12:46 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Compiling OpenMPI with PGI pgc++
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;556094DF-CD27-4908-AEC1-A6AD9EFB67AC_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2014, at 12:35 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know the difference between pgc++ and pgcpp, unfortunately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's a matter of the ABI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.pgroup.com/lit/articles/insider/v4n1a2.htm">http://www.pgroup.com/lit/articles/insider/v4n1a2.htm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgc++ uses the new ABI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Must be more than that -- this is a compile issue, not a link issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
</span><br>
<span class="quotelev1">&gt; Managing Director: Karen Theresa Burns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23521.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23519.php">Reuti: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23515.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23525.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
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
