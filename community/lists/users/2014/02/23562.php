<?
$subject_val = "Re: [OMPI users] writev error: Bad address";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 14:08:48 2014" -->
<!-- isoreceived="20140206190848" -->
<!-- sent="Thu, 6 Feb 2014 19:08:46 +0000" -->
<!-- isosent="20140206190846" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] writev error: Bad address" -->
<!-- id="69492C32-C507-48E0-A749-4F4EC60A212C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52F3D325.2080203_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] writev error: Bad address<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 14:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23561.php">Ralph Castain: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23560.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Ralph said (just install OMPI under your $HOME, at least for testing purposes), here's what we say about version compatibility:
<br>
<p>1. OMPI started providing ABI guarantees with v1.3.2.  The ABI guarantee we provide is that a 1.x and 1.(x+1) series will be ABI compatible, where x is odd.  For example, you can compile against 1.5.x and still mpirun with a 1.6.x installation (assuming you built with shared libraries, yadda yadda yadda).
<br>
<p>2. We have never provided any guarantees about compatibility between different versions of OMPI (even with a 1.x series).  Meaning: if you run version a.b.c on one server, you should run a.b.c on *all* servers in your job.  Wire line compatibility is NOT guaranteed, and will likely break in either very obnoxious or very subtle ways.  Both are bad.
<br>
<p>However, per the just-install-a-copy-in-your-$HOME advice, you can have N different OMPI installations if you really want to.  Just ensure that your PATH and LD_LIBRARY_PATH point to the *one* that you want to use -- both on the current server and all servers that you're using in a given job.  And that works fine (I do that all the time -- I have something like 20-30 OMPI installs under my $HOME, all in various stages of development/debugging; I just updated my PATH / LD_LIBARY_PATH and I'm good to go).
<br>
<p>Make sense?
<br>
<p><p>On Feb 6, 2014, at 1:23 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 2/6/2014 3:24 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried upgrading to a newer version of Open MPI?  The 1.4.x series is several generations old.  Open MPI 1.7.4 was just released yesterday.
</span><br>
<span class="quotelev1">&gt; It's on a cluster running Debian squeeze, with perhaps some upgrades to wheezy coming.  However, even wheezy is at 1.4.5 (the next generation is currently at 1.6.5).  I don't administer the cluster, and upgrading basic infrastructure seems somewhat hazardous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked for backports of more recent version (at backports.debian.org) but there don't seem to be any for squeeze or wheezy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can we mix later an earlier versions of MPI?  The documentation at <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> seems to indicate that 1.4, 1.6 and 1.7 would all be binary incompatible, though 1.5 and 1.6, or 1.7 and 1.8 would be compatible.   However, point 10 of the FAQ (<a href="http://www.open-mpi.org/faq/?category=sysadmin#new-openmpi-version">http://www.open-mpi.org/faq/?category=sysadmin#new-openmpi-version</a>) seems to say compatibility is broader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the documents don't seem to address on-the-wire compatibility; that is, if nodes on are different versions, can they work together reliably?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2014, at 9:58 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/31/2014 1:08 PM, Ross Boylan wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am getting the following error, amidst many successful message sends:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [n10][[50048,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:118:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error (0x7f6155970038, 578659815)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Bad address(1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I've tracked down the immediate cause: I was sending a very large object (from R--I assume serialized into a byte stream) that was over 3G.  I'm not sure why it would produce that error, but it doesn't seem that surprising that something would go wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas about what is going on or what I can do to fix it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using the openmpi-bin 1.4.2-4 Debian package on a cluster running Debian squeeze.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I couldn't find a config.log file; there is /etc/openmpi/openmpi-mca-params.conf, which is completely commented out.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Invocation is from R 3.0.1 (debian package) with Rmpi 0.6.3 built by me from source in a local directory. My sends all use mpi.isend.Robj and the receives use mpi.recv.Robj, both from the Rmpi library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The jobs were started with rmpilaunch; it and the hosts file are included in the attachments. TCP connections.  rmpilaunch leaves me in an R session on the master.  I invoked the code inside the toplevel() function toward the bottom of dbox-master.R.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The program source files and other background information is in the attached file.    n10 has the output of ompi_info --all, and n1011 has other info for both nodes that were active (n10 was master; n11 had some slaves).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Previous message:</strong> <a href="23561.php">Ralph Castain: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>In reply to:</strong> <a href="23560.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<li><strong>Reply:</strong> <a href="23563.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
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
