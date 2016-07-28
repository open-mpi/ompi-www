<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 18:49:18 2014" -->
<!-- isoreceived="20140609224918" -->
<!-- sent="Mon, 9 Jun 2014 15:49:17 -0700" -->
<!-- isosent="20140609224917" -->
<!-- name="Vineet Rawat" -->
<!-- email="vineetrawat0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="CA+h+pRVF+vD-i0Q8S0pe5OYS7UCtfvtrMS1LrgdkjsO1WNFcQA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1BBE1115-A9E6-4418-A665-E9C2CC071C11_at_cisco.com" -->
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
<strong>From:</strong> Vineet Rawat (<em>vineetrawat0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 18:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 9, 2014 at 3:31 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 9, 2014, at 5:41 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; We've deployed OpenMPI on a small cluster but get a SEGV in orted. Debug
</span><br>
<span class="quotelev1">&gt; information is very limited as the cluster is at a remote customer site.
</span><br>
<span class="quotelev1">&gt; They have a network card with which I'm not familiar (Cisco Systems Inc VIC
</span><br>
<span class="quotelev1">&gt; P81E PCIe Ethernet NIC) and it seems capable of using the usNIC BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this is the 1st generation Cisco VIC -- our usNIC BTL is
</span><br>
<span class="quotelev1">&gt; only enabled starting with the 2nd generation Cisco VIC (the 12xx series,
</span><br>
<span class="quotelev1">&gt; not the Pxxx series).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So runs over this Ethernet NIC should be using just plain ol' TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, that should be fine here.
<br>
<p><p><span class="quotelev2">&gt; &gt; I'm suspicious that it might be at the root of the problem. They're also
</span><br>
<span class="quotelev1">&gt; bonding the 2 ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, it's not necessary to bond the interfaces for Open MPI -- meaning
</span><br>
<span class="quotelev1">&gt; that Open MPI will automatically stripe large messages across multiple IP
</span><br>
<span class="quotelev1">&gt; interfaces, etc.  So if they're bonding for the purposes of MPI bandwidth,
</span><br>
<span class="quotelev1">&gt; you can tell them to turn off the bonding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>They said they're doing it for resilience, not bandwidth.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note that, by default, Open MPI's TCP MPI transport will aggressively
</span><br>
<span class="quotelev1">&gt; use *all* IP interfaces that it finds.  So in your case, it will likely use
</span><br>
<span class="quotelev1">&gt; bond0, eth0, *and* eth1.  Meaning: OMPI can effectively oversubscribe the
</span><br>
<span class="quotelev1">&gt; network coming out of each VIC.  You might want to set a system-wide
</span><br>
<span class="quotelev1">&gt; default MCA parameter to have OMPI not use the bond0 interface.  For
</span><br>
<span class="quotelev1">&gt; example, add this line to $prefix/etc/mca-params.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include = eth0,eth1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will have OMPI *only* use eth0 and eth1 -- it'll ignore lo and bond0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, will do.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, we're also doing a few unusual things which could be causing
</span><br>
<span class="quotelev1">&gt; problems. Firstly, we built OpenMPI (I tried 1.6.4 and 1.8.1) without the
</span><br>
<span class="quotelev1">&gt; ibverbs or usnic BTLs. Then, we only ship what (we think) we need: otrerun,
</span><br>
<span class="quotelev1">&gt; orted, libmpi, libmpi_cxx, libopen-rte and libopen-pal. Could there be a
</span><br>
<span class="quotelev1">&gt; dependency on some other binary executable or dlopen'ed library? We also
</span><br>
<span class="quotelev1">&gt; use a special plm_rsh_agent but we've used this approach for some time
</span><br>
<span class="quotelev1">&gt; without issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All that sounds fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI 1.8.1 is preferred; the 1.6.x series is pretty old at this point.
</span><br>
<span class="quotelev1">&gt;  If there's a bug in 1.8.1, it's a whole lot easier for us to fix it in the
</span><br>
<span class="quotelev1">&gt; 1.8.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, we've been deploying 1.6.4 for a while and are wary of change. We only
<br>
went to 1.8.1 to see if it changed anything related to this issue. I
<br>
completely understand that any fixes, if needed, are likely to go in the
<br>
latest version.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried a few different MCA settings, the most restrictive of which led
</span><br>
<span class="quotelev1">&gt; to the failure of this command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; orted --debug --debug-daemons -mca ess env -mca orte_ess_jobid
</span><br>
<span class="quotelev1">&gt; 1925054464 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev1">&gt; \&quot;1925054464.0;tcp://10.xxx.xxx.xxx:40547\&quot; --tree-spawn --mca
</span><br>
<span class="quotelev1">&gt; orte_base_help_aggregate 1 --mca plm_rsh_agent yyy --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 2000 --mca btl_tcp_port_range_v4 100 --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include bond0 --mca orte_create_session_dirs 0 --mca
</span><br>
<span class="quotelev1">&gt; plm_rsh_assume_same_shell 0 -mca plm rsh -mca orte_debug_daemons 1 -mca
</span><br>
<span class="quotelev1">&gt; orte_debug 1 -mca orte_tag_output 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the host is set up such that the core file is generated
</span><br>
<span class="quotelev1">&gt; and immediately removed (&quot;ulimit -c&quot; is unlimited) but the abrt daemon is
</span><br>
<span class="quotelev1">&gt; doing something weird.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Ralph mentioned, can you verify that the correct version MPI libraries
</span><br>
<span class="quotelev1">&gt; are being picked up on the remote servers?  E.g., is LD_LIBRARY_PATH being
</span><br>
<span class="quotelev1">&gt; set properly in the shell startup files on the remote servers (e.g., to
</span><br>
<span class="quotelev1">&gt; find the 1.8.1 shared libraries)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also make sure that you install each version of Open MPI into a &quot;clean&quot;
</span><br>
<span class="quotelev1">&gt; directory -- don't install OMPI 1.6.x into /foo and then install OMPI 1.8.x
</span><br>
<span class="quotelev1">&gt; info /foo, too.  The two versions are incompatible with each other, and
</span><br>
<span class="quotelev1">&gt; have conflicting/not-wholly-overlapping libraries.  Meaning: if you install
</span><br>
<span class="quotelev1">&gt; OMPI 1.6.x into /foo, you should either &quot;rm -rf /foo&quot; before you install
</span><br>
<span class="quotelev1">&gt; OMPI 1.8.x into /foo, or just install OMPI 1.8.x into /bar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The installations are entirely separate. The LD_LIBRARY_PATH is set up by
<br>
our own launch wrapper and I'm confident it's correct.
<br>
<p>Vineet
<br>
<p><p><span class="quotelev1">&gt; Make sense?
</span><br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24614.php">Vineet Rawat: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24612.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
