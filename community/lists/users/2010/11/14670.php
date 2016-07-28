<?
$subject_val = "Re: [OMPI users] link problem on 64bit platform";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 08:52:19 2010" -->
<!-- isoreceived="20101101125219" -->
<!-- sent="Mon, 01 Nov 2010 05:52:10 -0700" -->
<!-- isosent="20101101125210" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] link problem on 64bit platform" -->
<!-- id="4CCEB7FA.90300_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2AB586F-01C4-498D-8F91-E010D3A01F7C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] link problem on 64bit platform<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 08:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14671.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14669.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14669.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/1/2010 5:24 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 1, 2010, at 5:20 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; jody_at_aim-squid_0 ~/progs $ mpiCC -g -o HelloMPI HelloMPI.cpp
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/x86_64-pc-linux-gnu/4.4.4/../../../../x86_64-pc-linux-gnu/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; skipping incompatible /opt/openmpi-1.4.2/lib/libmpi_cxx.so when
</span><br>
<span class="quotelev2">&gt;&gt; searching for -lmpi_cxx
</span><br>
<span class="quotelev1">&gt; This is the key message -- it found libmpi_cxx.so, but the linker deemed it incompatible, so it skipped it.
</span><br>
Typically, it means that the cited library is a 32-bit one, to which the 
<br>
64-bit ld will react in this way.  You could have verified this by
<br>
file /opt/openmpi-1.4.2/lib/*
<br>
By normal linux conventions a directory named /lib/ as opposed to 
<br>
/lib64/ would contain only 32-bit libraries.  If gentoo doesn't conform 
<br>
with those conventions, maybe you should do your learning on a distro 
<br>
which does.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14671.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Previous message:</strong> <a href="14669.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14669.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
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
