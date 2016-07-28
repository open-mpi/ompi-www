<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 11:52:58 2013" -->
<!-- isoreceived="20130708155258" -->
<!-- sent="Mon, 8 Jul 2013 15:52:53 +0000" -->
<!-- isosent="20130708155253" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F2E91_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AVSB0M_n3es5-GMdT3NRk3dg7xpk3vWRCV2FvYeMznoKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on handling of memory for communications<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 11:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 8, 2013, at 11:35 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The issue is that when you read or write PCIe_gen 3 dat to a non-local NUMA memory, SandyBridge will use the inter-socket QPIs to get this data across to the other socket. I think there is considerable limitation in PCIe I/O traffic data going over the inter-socket QPI. One way to get around this is for reads to buffer all data into memory space local to the same socket and then transfer them by code across to the other socket's physical memory. For writes the same approach can be used with intermediary process copying data.
</span><br>
<p>Sure, you'll cause congestion across the QPI network when you do non-local PCI reads/writes.  That's a given.
<br>
<p>But I'm not aware of a hardware limitation on PCI-requested traffic across QPI (I could be wrong, of course -- I'm a software guy, not a hardware guy).  A simple test would be to bind an MPI process to a far NUMA node and run a simple MPI bandwidth test and see if to get better/same/worse bandwidth compared to binding an MPI process on a near NUMA socket.
<br>
<p>But in terms of doing intermediate (pipelined) reads/writes to local NUMA memory before reading/writing to PCI, no, Open MPI does not do this.  Unless there is a PCI-QPI bandwidth constraint that we're unaware of, I'm not sure why you would do this -- it would likely add considerable complexity to the code and it would definitely lead to higher overall MPI latency.
<br>
<p>Don't forget that the MPI paradigm is for the application to provide the send/receive buffer.  Meaning: MPI doesn't (always) control where the buffer is located (particularly for large messages).
<br>
<p><span class="quotelev1">&gt; I was wondering if OpenMPI does anything special memory mapping to work around this.
</span><br>
<p>Just what I mentioned in the prior email.
<br>
<p><span class="quotelev1">&gt; And if with Ivy Bridge (or Haswell) he situation has improved.
</span><br>
<p>Open MPI doesn't treat these chips any different.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22277.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22279.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
