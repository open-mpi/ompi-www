<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 06:49:25 2009" -->
<!-- isoreceived="20090201114925" -->
<!-- sent="Sun, 1 Feb 2009 06:49:19 -0500" -->
<!-- isosent="20090201114919" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="8FF3EAED-988C-48AF-A1DA-F5D80986E927_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090130002055.GA835_at_yakko.bartol.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 06:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you compiled Open MPI against the QLogic PSM libraries  
<br>
-- I see the PSM MTL plugin available.  Here's some text from the OMPI  
<br>
v1.3 README that clarifies the situation:
<br>
<p>- There are two MPI network models available: &quot;ob1&quot; and &quot;cm&quot;.  &quot;ob1&quot;
<br>
&nbsp;&nbsp;&nbsp;uses BTL (&quot;Byte Transfer Layer&quot;) components for each supported
<br>
&nbsp;&nbsp;&nbsp;network.  &quot;cm&quot; uses MTL (&quot;Matching Tranport Layer&quot;) components for
<br>
&nbsp;&nbsp;&nbsp;each supported network.
<br>
<p>&nbsp;&nbsp;&nbsp;- &quot;ob1&quot; supports a variety of networks that can be used in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination with each other (per OS constraints; e.g., there are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reports that the GM and OpenFabrics kernel drivers do not operate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;well together):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- OpenFabrics: InfiniBand and iWARP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Loopback (send-to-self)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet: GM and MX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Quadrics Elan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Shared memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- TCP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- SCTP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- uDAPL
<br>
<p>&nbsp;&nbsp;&nbsp;- &quot;cm&quot; supports a smaller number of networks (and they cannot be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;used together), but may provide better better overall MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;performance:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet MX (not GM)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- InfiniPath PSM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
<p>&nbsp;&nbsp;&nbsp;Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
<br>
&nbsp;&nbsp;&nbsp;PSM MTL can be used.  Otherwise, OB1 will be used and the
<br>
&nbsp;&nbsp;&nbsp;corresponding BTLs will be selected.  Users can force the use of ob1
<br>
&nbsp;&nbsp;&nbsp;or cm if desired by setting the &quot;pml&quot; MCA parameter at run-time:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml ob1 ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --mca pml cm ...
<br>
<p>So to force TCP to be used, you need to force the use of the ob1 PML  
<br>
and then force the use of the TCP BTL.  Perhaps something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca pml ob1 --mca btl tcp,sm,self ...
<br>
<p><p><p>On Jan 29, 2009, at 7:20 PM, Daniel De Marco wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I put most of the info at:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bartol.udel.edu/~ddm/ompi_debug.tgz">http://www.bartol.udel.edu/~ddm/ompi_debug.tgz</a>
</span><br>
<span class="quotelev1">&gt; The tar file contains the config.log, the ifconfig for the two nodes  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; the output of ompi_info --all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said I was running with:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp,self --prefix /share/apps/openmpi-1.3/gcc_ifort/
</span><br>
<span class="quotelev1">&gt; --machinefile machines -np 2 ./osu_latency
</span><br>
<span class="quotelev1">&gt; and I also tried adding -mca btl_tcp_if_include eth0 to the options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; Please let me know if you need some other info.
</span><br>
<span class="quotelev1">&gt; Daniel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres &lt;jsquyres_at_[hidden]&gt; [01/29/2009 16:30]:
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the full output described here (including all network  
</span><br>
<span class="quotelev2">&gt;&gt; setup
</span><br>
<span class="quotelev2">&gt;&gt; stuff):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2009, at 3:18 PM, Daniel De Marco wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is quite likely that you have IPoIB on your system. In that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you have a specific interface you want to use, try -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_tcp_if_include eth0 (or whatever that interface is). This  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tell the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TCP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTL to only use the specified interface, so it will either fail  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (if that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no, I don't have IPoIB configured. I tried anyway your suggestion  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got the same results as before. The weird thing is that even if use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	-mca btl_tcp_if_include eth2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where eth2 doesn't exist I get the same results...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Daniel.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7917.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7937.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
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
