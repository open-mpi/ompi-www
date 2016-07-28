<?
$subject_val = "Re: [OMPI users] mpiexec hangs - new install";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 25 16:07:50 2010" -->
<!-- isoreceived="20100725200750" -->
<!-- sent="Sun, 25 Jul 2010 13:08:05 -0700" -->
<!-- isosent="20100725200805" -->
<!-- name="James" -->
<!-- email="jamesqf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec hangs - new install" -->
<!-- id="op.vge0vr0c75arni_at_t61.site" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3F821FB2-9CFB-4571-9B73-7542B8714FC4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec hangs - new install<br>
<strong>From:</strong> James (<em>jamesqf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-25 16:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13771.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 24 Jul 2010 16:31:12 -0700, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 24, 2010, at 4:40 PM, James wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK, that's the problem.  I turned the firewall off on both machines, and
</span><br>
<span class="quotelev2">&gt;&gt; it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now the question: how do I fix it?  I searched through the archives, and
</span><br>
<span class="quotelev2">&gt;&gt; found that it seems to be a pretty common problem.  Unfortunately, I  
</span><br>
<span class="quotelev2">&gt;&gt; didn't
</span><br>
<span class="quotelev2">&gt;&gt; see a solution that I could understand.  (I'm not a sysadmin, just a  
</span><br>
<span class="quotelev2">&gt;&gt; person
</span><br>
<span class="quotelev2">&gt;&gt; trying to do some programming.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a couple of machines on a local net, with IP addresses in the
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.10.1xx range.  There's a router at 192.168.10.1, which is  
</span><br>
<span class="quotelev2">&gt;&gt; connected
</span><br>
<span class="quotelev2">&gt;&gt; to the internet via a cable mode.  So how do I set up my system so my
</span><br>
<span class="quotelev2">&gt;&gt; local machines can do whatever talking between themselves that's needed  
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, while still having a firewall between my system and the outside
</span><br>
<span class="quotelev2">&gt;&gt; world?
</span><br>
<p>Here's what seems to be a solution that works for SuSE.  May be something
<br>
similar for other systems:
<br>
<p>&nbsp;&nbsp;&nbsp;1) Edit the file /etc/sysconfig/SuseFirewall2
<br>
&nbsp;&nbsp;&nbsp;2) Look for the keyword FW_TRUSTED_NETS
<br>
&nbsp;&nbsp;&nbsp;3) Add the IP addresses of your internal machines there.  The format
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for multiple machines is wierd: &quot;192.168.10.0/8&quot; means all machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in 192.168.10.x.  There doesn't seem to be any way to specify a  
<br>
numeric
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range, like .100 to .110.
<br>
&nbsp;&nbsp;&nbsp;4) Add the lines FW_SERVICES_TRUSTED_TCP=&quot;1:65535&quot; and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FW_SERVICES_TRUSTED_UDP=&quot;1:65535&quot;
<br>
&nbsp;&nbsp;&nbsp;5) Save the file.  Bring up Yast2, and use it to stop and restart the  
<br>
firewall.
<br>
<p>Hope this is useful, as it took about 10-15 hours of my time, spread over a
<br>
week or so, to figure it out.
<br>
<p><span class="quotelev1">&gt; Most routers provide their own internal-to-external firewall - you might  
</span><br>
<span class="quotelev1">&gt; check its setup and see. If it does, then you don't need to also have  
</span><br>
<span class="quotelev1">&gt; one on your individual machines.
</span><br>
<p>Seems to be the same problem as with the firewalls on the machines.  That
<br>
is, there appears to be a firewall, but the little information in the
<br>
manual or online help assumes that you already have an expert sysadmin
<br>
level of knowledge.
<br>
<p>James
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13774.php">Jack Bryan: "[OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="13772.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>In reply to:</strong> <a href="13771.php">Ralph Castain: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Reply:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
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
