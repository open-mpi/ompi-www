<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 13:38:40 2009" -->
<!-- isoreceived="20090202183840" -->
<!-- sent="Mon, 2 Feb 2009 13:38:35 -0500" -->
<!-- isosent="20090202183835" -->
<!-- name="Daniel De Marco" -->
<!-- email="ddm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="20090202183835.GB31018_at_yakko.bartol.udel.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8FF3EAED-988C-48AF-A1DA-F5D80986E927_at_cisco.com" -->
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
<strong>From:</strong> Daniel De Marco (<em>ddm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 13:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>thanks a lot for taking the time to look at my file and sorry for not
<br>
having noticed that part of the README, it went straight past me.
<br>
<p>Anyway with your suggestion it works perfectly.
<br>
<p>Thanks again, Daniel.
<br>
<p>* Jeff Squyres &lt;jsquyres_at_[hidden]&gt; [02/01/2009 06:49]:
<br>
<span class="quotelev1">&gt; It looks like you compiled Open MPI against the QLogic PSM libraries -- I 
</span><br>
<span class="quotelev1">&gt; see the PSM MTL plugin available.  Here's some text from the OMPI v1.3 
</span><br>
<span class="quotelev1">&gt; README that clarifies the situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - There are two MPI network models available: &quot;ob1&quot; and &quot;cm&quot;.  &quot;ob1&quot;
</span><br>
<span class="quotelev1">&gt;   uses BTL (&quot;Byte Transfer Layer&quot;) components for each supported
</span><br>
<span class="quotelev1">&gt;   network.  &quot;cm&quot; uses MTL (&quot;Matching Tranport Layer&quot;) components for
</span><br>
<span class="quotelev1">&gt;   each supported network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - &quot;ob1&quot; supports a variety of networks that can be used in
</span><br>
<span class="quotelev1">&gt;     combination with each other (per OS constraints; e.g., there are
</span><br>
<span class="quotelev1">&gt;     reports that the GM and OpenFabrics kernel drivers do not operate
</span><br>
<span class="quotelev1">&gt;     well together):
</span><br>
<span class="quotelev1">&gt;     - OpenFabrics: InfiniBand and iWARP
</span><br>
<span class="quotelev1">&gt;     - Loopback (send-to-self)
</span><br>
<span class="quotelev1">&gt;     - Myrinet: GM and MX
</span><br>
<span class="quotelev1">&gt;     - Portals
</span><br>
<span class="quotelev1">&gt;     - Quadrics Elan
</span><br>
<span class="quotelev1">&gt;     - Shared memory
</span><br>
<span class="quotelev1">&gt;     - TCP
</span><br>
<span class="quotelev1">&gt;     - SCTP
</span><br>
<span class="quotelev1">&gt;     - uDAPL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - &quot;cm&quot; supports a smaller number of networks (and they cannot be
</span><br>
<span class="quotelev1">&gt;     used together), but may provide better better overall MPI
</span><br>
<span class="quotelev1">&gt;     performance:
</span><br>
<span class="quotelev1">&gt;     - Myrinet MX (not GM)
</span><br>
<span class="quotelev1">&gt;     - InfiniPath PSM
</span><br>
<span class="quotelev1">&gt;     - Portals
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
</span><br>
<span class="quotelev1">&gt;   PSM MTL can be used.  Otherwise, OB1 will be used and the
</span><br>
<span class="quotelev1">&gt;   corresponding BTLs will be selected.  Users can force the use of ob1
</span><br>
<span class="quotelev1">&gt;   or cm if desired by setting the &quot;pml&quot; MCA parameter at run-time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     shell$ mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     shell$ mpirun --mca pml cm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to force TCP to be used, you need to force the use of the ob1 PML and 
</span><br>
<span class="quotelev1">&gt; then force the use of the TCP BTL.  Perhaps something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --mca pml ob1 --mca btl tcp,sm,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2009, at 7:20 PM, Daniel De Marco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I put most of the info at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bartol.udel.edu/~ddm/ompi_debug.tgz">http://www.bartol.udel.edu/~ddm/ompi_debug.tgz</a>
</span><br>
<span class="quotelev2">&gt;&gt; The tar file contains the config.log, the ifconfig for the two nodes and
</span><br>
<span class="quotelev2">&gt;&gt; the output of ompi_info --all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I said I was running with:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl tcp,self --prefix /share/apps/openmpi-1.3/gcc_ifort/
</span><br>
<span class="quotelev2">&gt;&gt; --machinefile machines -np 2 ./osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; and I also tried adding -mca btl_tcp_if_include eth0 to the options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you need some other info.
</span><br>
<span class="quotelev2">&gt;&gt; Daniel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Jeff Squyres &lt;jsquyres_at_[hidden]&gt; [01/29/2009 16:30]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send the full output described here (including all network setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stuff):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 29, 2009, at 3:18 PM, Daniel De Marco wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is quite likely that you have IPoIB on your system. In that case, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you have a specific interface you want to use, try -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_tcp_if_include eth0 (or whatever that interface is). This tell the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TCP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTL to only use the specified interface, so it will either fail (if 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no, I don't have IPoIB configured. I tried anyway your suggestion and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; got the same results as before. The weird thing is that even if use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	-mca btl_tcp_if_include eth2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where eth2 doesn't exist I get the same results...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Daniel.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7936.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
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
