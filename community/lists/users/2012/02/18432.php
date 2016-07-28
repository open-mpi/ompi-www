<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 11:38:59 2012" -->
<!-- isoreceived="20120210163859" -->
<!-- sent="Fri, 10 Feb 2012 11:38:54 -0500" -->
<!-- isosent="20120210163854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="56911E7F-7DBC-423C-A306-5FA726CB42C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0BA4B1E5-3D6C-4C21-834B-FA8E9C56A07A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 11:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18431.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom and I talked more about this off list, and I eventually logged in to his cluster to see what I could see.
<br>
<p>The issue turned out to be not related to SGE or THREAD_MULTIPLE at all.  The issue was that RHEL6, by default, activated a virtualization IP interface on all of Tom's nodes.  All nodes had a local IP interface in the 192.168.1.x/24 subnet, but that address was only used to communicate to the local Xen interface.
<br>
<p>But OMPI saw the interface, saw that every MPI process had an address in that IP subnet, and assumed that it could be used for MPI communication.  
<br>
<p>Nope!
<br>
<p>The simple solution here was to add the RHEL6 Xen virtualization device (virb0) to OMPI's exclude list, like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_if_exclude lo,virbr0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mca oob_tcp_if_exclude lo,virbr0 ...
<br>
<p>Then everything worked fine.
<br>
<p><p>On Feb 9, 2012, at 4:19 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 08.02.2012 um 22:52 schrieb Tom Bryan:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this should work across multiple machines. And it's using `qrsh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -inherit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...` so it's failing somewhere in Open MPI - is it working with 1.4.4?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure.  We no longer have our 1.4 test environment, so I'm in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process of building that now.  I'll let you know once I have a chance to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that experiment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You said that both of these cases worked for you in 1.4.  Were you running a
</span><br>
<span class="quotelev2">&gt;&gt; modified version that did not use THREAD_MULTIPLE?  I ask because I'm
</span><br>
<span class="quotelev2">&gt;&gt; getting worse errors in 1.4.  I'm using the same code that was working (in
</span><br>
<span class="quotelev2">&gt;&gt; some cases) with 1.5.4.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I built 1.4.4 with (among other option)
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/local/openmpi-1.4.4-default-thread --with-sge --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problems even with THREAD_MULTIPLE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only as stated in singleton mode one or more additional line (looks like one per slave host, but not always - race condition?):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pc15370:31390] [[24201,0],1] routed:binomial: Connection to lifeline [[24201,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Init_thread() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting error message, as it's not true to be disallowed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18433.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18431.php">Jeff Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
