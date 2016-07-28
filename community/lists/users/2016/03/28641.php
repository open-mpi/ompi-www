<?
$subject_val = "Re: [OMPI users] General Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  5 10:57:39 2016" -->
<!-- isoreceived="20160305155739" -->
<!-- sent="Sat, 5 Mar 2016 15:57:28 +0000" -->
<!-- isosent="20160305155728" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] General Questions" -->
<!-- id="6049BA5D-0163-46FF-8145-55F1E2155669_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53103205.3152038.1457186903385.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] General Questions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-05 10:57:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28642.php">Hans-Jürgen Greif: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just realized that I replied directly to Matthew and not to the list.
<br>
<p>Let me add most of my reply to the thread here on the list, in case it's helpful to others.  See my reply to Matthew, below.
<br>
<p><p><span class="quotelev1">&gt; On Mar 5, 2016, at 10:53 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me try to explain a little better; I apparently didn't do a good job the first time around...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, March 1, 2016 9:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Dolphin's implementation of IPoPCIe 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it provides a TCP stack and an IP interface, you should be able to use Open MPI's TCP BTL interface &gt;over it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dolphin provides an optimized TCP/IP driver for IPoPCIe. Where can I learn about Open MPI's TCP BTL interface? I have looked at Open MPI website, but there is such a vast amount of knowledge, I cannot fully utilize in such a short amount of time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There isn't actually much to know about Open MPI's TCP interface.  Let me summarize:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Open MPI has 2 main forms of communication:
</span><br>
<span class="quotelev1">&gt; 1. Run-time / control traffic
</span><br>
<span class="quotelev1">&gt; 2. MPI traffic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - In many cases, Open MPI will use TCP for #1 and whatever flavor of high-performance network you have for #2 (this is a generalization, and not always true, but &quot;true enough&quot; for the purposes of this conversation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - For MPI traffic, Open MPI will basically probe all the machines that it is running on when your MPI processes start up.  It will discover all high speed / HPC-capable network interfaces, and use the &quot;best&quot; ones.  
</span><br>
<span class="quotelev1">&gt; - For example, if OMPI finds both IP interfaces and InifniBand devices, it will prefer the InfiniBand devices because these are typically higher performance than the OS IP interfaces.
</span><br>
<span class="quotelev1">&gt; - Many non-Ethernet devices present themselves as two different interfaces to the OS: one is the &quot;native&quot; device, the other is an emulation later that provides a normal IP (and usually also TCP) interface to the OS.
</span><br>
<span class="quotelev1">&gt; - The &quot;native&quot; interfaces use custom network APIs -- i.e., not the POSIX sockets API. These customer network APIs tend to be highly efficient and customized to the underlying network device.
</span><br>
<span class="quotelev1">&gt;   --&gt; Open MPI understands and can utilize many different vendor &quot;native&quot; network APIs.  They tend to give the best performance on these high speed HPC networks.
</span><br>
<span class="quotelev1">&gt; - The &quot;emulated&quot; IP/TCP interfaces, by definition, add overhead to the native interface.  They typically allow applications to use the POSIX sockets API, and therefore can be used by many different applications (not just MPI implementations that have been coded to use the custom network APIs of the native interfaces of these HPC-capable networks).  While these IP emulation interfaces are less efficient than the &quot;native&quot; interfaces, that's usually ok because their goal is to enable more applications to use them (via the POSIX sockets API), not to provide the same level of performance as the native APIs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - As a general rule of thumb, Open MPI will prefer &quot;native&quot; interfaces over any network interface that provides the POSIX sockets API.  This generally allows Open MPI to pick the highest-performing method for accessing the network as possible.  That being said, if Open MPI doesn't find any &quot;native&quot; interfaces, it will generally use any/all IP interfaces that it finds.
</span><br>
<span class="quotelev1">&gt; - Open MPI does not have direct support for Dolphin PCIoE APIs, so it will likely only be able to access your network via the POSIX sockets API.  Hence, it will likely use TCP (i.e., as you mentioned, the Dolphin IPoPCIe emulation layer).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Using the Open MPI TCP interface *should* be largely automatic.  Open MPI should just find your IP interfaces and decide to use them.
</span><br>
<span class="quotelev1">&gt; - Open MPI has some configuration knobs for its TCP support, but you probably want want or need to configure any of them.
</span><br>
<span class="quotelev1">&gt; - That being said, there's one exception: since your machines likely have more than one IP interface (e.g., the real Ethernet device and your Dolphin IPoPCIe interface), you might want to tell Open MPI to restrict itself to the Dolphin IPoPCIe interface.  Otherwise, Open MPI will use *all* your Ethernet devices (e.g., stripe large messages across all your IP interfaces).
</span><br>
<span class="quotelev1">&gt; - The easiest way to do limit Open MPI's selection of IP interfaces is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl_tcp_if_include NAME_OF_DOLPHIN_INTERFACE ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is, supply the &quot;btl_tcp_if_include&quot; (&quot;if&quot; = &quot;interface&quot;) MCA parameter on the mpirun command line. This parameter tells Open MPI to *only* use these IP interfaces for MPI traffic.  For example, this would limit Open MPI to only use eth4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl_tcp_if_include eth4 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So instead of &quot;eth4&quot;, put whatever the name of your Dolphin interface is.  Then Open MPI will use *only* that IP interface (on every machine) for MPI traffic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What does the term &quot;native verbs&quot; mean, along with what do you mean by &quot;native&quot; interface? I am assuming you mean use something that directly interfaces with the RDMA network?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Verbs&quot; is the name of the native Mellanox network APIs to access their IB cards (specifically, the Linux library name is &quot;libibverbs&quot;; most people just say &quot;verbs&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verbs has lots of different communication modes; some of them do simple sends and receives of network messages across IB, others do RDMA operations across IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am fairly new to networks other than the TCP/IP stack used in most OS, so my first instinct is to use as TCP as it is all I am familiar with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't worry: this is a common issue with many who are starting out in the HPC world.  The learning curve for non-Ethernet networks can be a little steep if you've been working with Ethernet for a long time.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a></pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28642.php">Hans-Jürgen Greif: "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>Previous message:</strong> <a href="28640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi bug on mac os 10.11.3 ?"</a>
<li><strong>In reply to:</strong> <a href="28639.php">Matthew Larkin: "Re: [OMPI users] General Questions"</a>
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
