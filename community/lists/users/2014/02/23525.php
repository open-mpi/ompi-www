<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI with PGI pgc++";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 09:11:08 2014" -->
<!-- isoreceived="20140201141108" -->
<!-- sent="Sat, 1 Feb 2014 15:10:52 +0100" -->
<!-- isosent="20140201141052" -->
<!-- name="Jiri Kraus" -->
<!-- email="jkraus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI with PGI pgc++" -->
<!-- id="754A977B8DC8A14F9C722AF73FB8C004B67973B2AB_at_DEMAIL01.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Compiling OpenMPI with PGI pgc++" -->
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
<strong>From:</strong> Jiri Kraus (<em>jkraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 09:10:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>

<br>
sorry but I don't know the details of the issue. But although the error is reported as pgc++ not being link compatible to pgcc by OpenMPI configure the error in the config.log is a complier error. So I don't think that this is a linking issue.
<br>

<br>
<span class="quotelev1">&gt; When I get it right, it should be a feature of `pgc++` to be link compatible with `gcc`, while `pgcpp` links with `pgcc` objects.
</span><br>

<br>
To my understanding C compliers like gcc and pgcc do not have the linking issues that C++ compliers have they simply follow the ABI of the OS and do not have name mangling issues. So most C compliers are link compatible. And you can link C code from C++. The C++ compiler just needs to know that something C and not C++ is used (extern &quot;C&quot; is used for this).
<br>
Because of function overloading, Templates and maybe other things, I am not aware of, C++ needs name mangling to encode these information. And here pgcpp and pgc++ implement different ABI's and name mangling schemes. pgc++ implements the same ABI as g++ and thus is link compatible with g++. On the other hand pgcpp implements its own ABI and is compatible with itself.
<br>

<br>
Jiri
<br>

<br>
Sent from my Nexus 7, I apologize for spelling errors and auto correction typos.
<br>

<br>
-----Original Message-----
<br>
Date: Fri, 31 Jan 2014 22:50:40 +0100
<br>
From: Reuti &lt;reuti_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Compiling OpenMPI with PGI pgc++
<br>
Message-ID: &lt;ABE8D68F-F09C-4846-B696-9B514DAC8F08_at_[hidden]&gt;
<br>

<br>
Content-Type: text/plain; charset=us-ascii
<br>

<br>

<br>

<br>
Hi,
<br>

<br>

<br>

<br>
Am 31.01.2014 um 18:59 schrieb Jiri Kraus:
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; Thanks for taking a look. I just learned from PGI that this is a known bug that will be fixed in the 14.2 release (Februrary 2014).
</span><br>

<br>

<br>

<br>
Will `pgc++` then link to `gcc` or `pgcc`? When I get it right, it should be a feature of `pgc++` to be link compatible with `gcc`, while `pgcpp` links with `pgcc` objects.
<br>

<br>

<br>

<br>
-- Reuti
<br>

<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; Thanks
</span><br>

<br>
<span class="quotelev1">&gt;
</span><br>

<br>
<span class="quotelev1">&gt; Jiri
</span><br>

<br>
<span class="quotelev1">&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Date: Wed, 29 Jan 2014 18:12:46 +0000
</span><br>

<br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Compiling OpenMPI with PGI pgc++
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;556094DF-CD27-4908-AEC1-A6AD9EFB67AC_at_[hidden]&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>

<br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2014, at 12:35 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>

<br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't know the difference between pgc++ and pgcpp, unfortunately.
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt; It's a matter of the ABI:
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.pgroup.com/lit/articles/insider/v4n1a2.htm">http://www.pgroup.com/lit/articles/insider/v4n1a2.htm</a>
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>

<br>
<span class="quotelev3">&gt;&gt;&gt; pgc++ uses the new ABI.
</span><br>

<br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Must be more than that -- this is a compile issue, not a link issue.
</span><br>

<br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<span class="quotelev2">&gt;&gt; --
</span><br>

<br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>

<br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>

<br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>

<br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>

<br>
<span class="quotelev1">&gt; NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
</span><br>

<br>
<span class="quotelev1">&gt; Managing Director: Karen Theresa Burns
</span><br>

<br>
<span class="quotelev1">&gt;
</span><br>

<br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>

<br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>

<br>
<span class="quotelev1">&gt; confidential information. Any unauthorized review, use, disclosure or distribution
</span><br>

<br>
<span class="quotelev1">&gt; is prohibited. If you are not the intended recipient, please contact the sender by
</span><br>

<br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>

<br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>

<br>

<br>
Sent from my Nexus 7, I apologize for spelling errors and auto correction typos.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23525/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Previous message:</strong> <a href="23524.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
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
