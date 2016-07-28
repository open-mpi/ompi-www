<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 18:31:26 2014" -->
<!-- isoreceived="20140609223126" -->
<!-- sent="Mon, 9 Jun 2014 22:31:24 +0000" -->
<!-- isosent="20140609223124" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="1BBE1115-A9E6-4418-A665-E9C2CC071C11_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+h+pRX0wu-MTZ2CNe9Zt_4NkUMb22-1ieECiXS9=gf20kbBHA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 18:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24607.php">Vineet Rawat: "[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2014, at 5:41 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We've deployed OpenMPI on a small cluster but get a SEGV in orted. Debug information is very limited as the cluster is at a remote customer site. They have a network card with which I'm not familiar (Cisco Systems Inc VIC P81E PCIe Ethernet NIC) and it seems capable of using the usNIC BTL.
</span><br>
<p>Unfortunately, this is the 1st generation Cisco VIC -- our usNIC BTL is only enabled starting with the 2nd generation Cisco VIC (the 12xx series, not the Pxxx series).
<br>
<p>So runs over this Ethernet NIC should be using just plain ol' TCP.
<br>
<p><span class="quotelev1">&gt; I'm suspicious that it might be at the root of the problem. They're also bonding the 2 ports.
</span><br>
<p>FWIW, it's not necessary to bond the interfaces for Open MPI -- meaning that Open MPI will automatically stripe large messages across multiple IP interfaces, etc.  So if they're bonding for the purposes of MPI bandwidth, you can tell them to turn off the bonding.
<br>
<p>Also note that, by default, Open MPI's TCP MPI transport will aggressively use *all* IP interfaces that it finds.  So in your case, it will likely use bond0, eth0, *and* eth1.  Meaning: OMPI can effectively oversubscribe the network coming out of each VIC.  You might want to set a system-wide default MCA parameter to have OMPI not use the bond0 interface.  For example, add this line to $prefix/etc/mca-params.conf:
<br>
<p>btl_tcp_if_include = eth0,eth1
<br>
<p>This will have OMPI *only* use eth0 and eth1 -- it'll ignore lo and bond0.
<br>
<p><span class="quotelev1">&gt; However, we're also doing a few unusual things which could be causing problems. Firstly, we built OpenMPI (I tried 1.6.4 and 1.8.1) without the ibverbs or usnic BTLs. Then, we only ship what (we think) we need: otrerun, orted, libmpi, libmpi_cxx, libopen-rte and libopen-pal. Could there be a dependency on some other binary executable or dlopen'ed library? We also use a special plm_rsh_agent but we've used this approach for some time without issue.
</span><br>
<p>All that sounds fine.
<br>
<p>Open MPI 1.8.1 is preferred; the 1.6.x series is pretty old at this point.  If there's a bug in 1.8.1, it's a whole lot easier for us to fix it in the 1.8.x series.
<br>
<p><span class="quotelev1">&gt; I tried a few different MCA settings, the most restrictive of which led to the failure of this command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted --debug --debug-daemons -mca ess env -mca orte_ess_jobid 1925054464 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri \&quot;1925054464.0;tcp://10.xxx.xxx.xxx:40547\&quot; --tree-spawn --mca orte_base_help_aggregate 1 --mca plm_rsh_agent yyy --mca btl_tcp_port_min_v4 2000 --mca btl_tcp_port_range_v4 100 --mca btl tcp,self --mca btl_tcp_if_include bond0 --mca orte_create_session_dirs 0 --mca plm_rsh_assume_same_shell 0 -mca plm rsh -mca orte_debug_daemons 1 -mca orte_debug 1 -mca orte_tag_output 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the host is set up such that the core file is generated and immediately removed (&quot;ulimit -c&quot; is unlimited) but the abrt daemon is doing something weird.
</span><br>
<p>As Ralph mentioned, can you verify that the correct version MPI libraries are being picked up on the remote servers?  E.g., is LD_LIBRARY_PATH being set properly in the shell startup files on the remote servers (e.g., to find the 1.8.1 shared libraries)?
<br>
<p>Also make sure that you install each version of Open MPI into a &quot;clean&quot; directory -- don't install OMPI 1.6.x into /foo and then install OMPI 1.8.x info /foo, too.  The two versions are incompatible with each other, and have conflicting/not-wholly-overlapping libraries.  Meaning: if you install OMPI 1.6.x into /foo, you should either &quot;rm -rf /foo&quot; before you install OMPI 1.8.x into /foo, or just install OMPI 1.8.x into /bar.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="24610.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24607.php">Vineet Rawat: "[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24613.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
