<?
$subject_val = "Re: [OMPI users] test OpenMPI without Internet access";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 20:56:01 2008" -->
<!-- isoreceived="20081024005601" -->
<!-- sent="Fri, 24 Oct 2008 08:56:09 +0800" -->
<!-- isosent="20081024005609" -->
<!-- name="Wen Hao Wang" -->
<!-- email="wangwhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] test OpenMPI without Internet access" -->
<!-- id="OFA3E0C5FB.4969994C-ON482574EC.0004F80E-482574EC.00051D2A_at_cn.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F81DFA7E-B955-4EE9-851F-0D5753DA91E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] test OpenMPI without Internet access<br>
<strong>From:</strong> Wen Hao Wang (<em>wangwhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 20:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7077.php">Jeff Squyres: "Re: [OMPI users] test OpenMPI without Internet access"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff:
<br>
<p>Thanks! I will try that.
<br>
<p><span class="quotelev1">&gt; On Oct 19, 2008, at 7:05 PM, Wen Hao Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have one cluster without Internet connection. I want to test
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI functions on it. It seems MTT can not be used. Do I have any
</span><br>
<span class="quotelev2">&gt;&gt; other choice for the testing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can always run tests manually.  MTT is simply our harness for
</span><br>
<span class="quotelev1">&gt; automated testing, which *usually* (but not always) involves
</span><br>
<span class="quotelev1">&gt; downloading the latest nightly snapshot from the IU web site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can certainly configure MTT to use a local copy of Open MPI and
</span><br>
<span class="quotelev1">&gt; not use the IU web nightly snapshot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried lamtest. &quot;make -k check&quot; gave a lot of IB related
</span><br>
<span class="quotelev2">&gt;&gt; warnings, indicating that my dat.conf file contained invalid entry.
</span><br>
<span class="quotelev2">&gt;&gt; Each machine of my cluster has one IB connectX adapter installed.
</span><br>
<span class="quotelev2">&gt;&gt; But do not know why lamtest detected that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You must have built with udapl support.  Open MPI will use as many
</span><br>
<span class="quotelev1">&gt; interfaces as you have built for; if you have built support for udapl
</span><br>
<span class="quotelev1">&gt; (which I do not believe we build by default on Linux -- you have to
</span><br>
<span class="quotelev1">&gt; specifically ask for it to be built because [among other reasons] OMPI
</span><br>
<span class="quotelev1">&gt; would prefer to use verbs, not udapl), then we initialize udapl at run
</span><br>
<span class="quotelev1">&gt; time and if you have an illegal dat.conf file, then I'm guessing udapl
</span><br>
<span class="quotelev1">&gt; is complaining about it.  I don't know very much about udapl, so I
</span><br>
<span class="quotelev1">&gt; can't give good guidance here (other than suggesting not building
</span><br>
<span class="quotelev1">&gt; udapl support and just testing the native verbs support, which is
</span><br>
<span class="quotelev1">&gt; where we put all of our effort for Linux/OpenFabrics/Open MPI support).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's udapl support is mainly for Sun, because udapl *is* [currently]
</span><br>
<span class="quotelev1">&gt; their high-performance network stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p>Wen Hao Wang
<br>
Email: wangwhao_at_[hidden]
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7088/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7089.php">V. Ram: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="7087.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7077.php">Jeff Squyres: "Re: [OMPI users] test OpenMPI without Internet access"</a>
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
