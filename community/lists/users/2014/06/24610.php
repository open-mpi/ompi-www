<?
$subject_val = "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 18:36:15 2014" -->
<!-- isoreceived="20140609223615" -->
<!-- sent="Mon, 9 Jun 2014 15:36:14 -0700" -->
<!-- isosent="20140609223614" -->
<!-- name="Vineet Rawat" -->
<!-- email="vineetrawat0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="CA+h+pRVHXnM8EjKmZ2_c7y7E4QGti_570R3Vb1GT9BkyKLjKdQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F6122F41-8481-4374-A0ED-101BDCF8DF46_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-06-09 18:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 9, 2014 at 3:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2014, at 2:41 PM, Vineet Rawat &lt;vineetrawat0_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've deployed OpenMPI on a small cluster but get a SEGV in orted. Debug
</span><br>
<span class="quotelev1">&gt; information is very limited as the cluster is at a remote customer site.
</span><br>
<span class="quotelev1">&gt; They have a network card with which I'm not familiar (Cisco Systems Inc VIC
</span><br>
<span class="quotelev1">&gt; P81E PCIe Ethernet NIC) and it seems capable of using the usNIC BTL. I'm
</span><br>
<span class="quotelev1">&gt; suspicious that it might be at the root of the problem. They're also
</span><br>
<span class="quotelev1">&gt; bonding the 2 ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This shouldn't matter - the VIC should work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Great, glad to hear that.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we're also doing a few unusual things which could be causing
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you remember to include all the libraries under &lt;prefix&gt;/lib/openmpi?
</span><br>
<span class="quotelev1">&gt; We need all of those or else the orted will fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, we only included what seemed necessary (from ldd output and experience
<br>
on other clusters). The only things in my &lt;prefix&gt;/lib/openmpi are
<br>
libompi_dbg_msgq*. Is that what you're referring to? In &lt;prefix&gt;/lib for
<br>
12.8.1 (ignoring the VampirTrace libs) I could add libmpi_mpifh,
<br>
libmpi_usempi, libompitrace and/or liboshmem. Anything needed there?
<br>
<p>Thanks for the help,
<br>
Vineet
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried a few different MCA settings, the most restrictive of which led to
</span><br>
<span class="quotelev1">&gt; the failure of this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orted --debug --debug-daemons -mca ess env -mca orte_ess_jobid 1925054464
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the host is set up such that the core file is generated and
</span><br>
<span class="quotelev1">&gt; immediately removed (&quot;ulimit -c&quot; is unlimited) but the abrt daemon is doing
</span><br>
<span class="quotelev1">&gt; something weird. I'll be trying to get access to the system so I can use
</span><br>
<span class="quotelev1">&gt; &quot;--mca orte orte_daemon_spin&quot; and attach a debugger (if that's how that's
</span><br>
<span class="quotelev1">&gt; done). If I'm able to debug or obtain a core file I'll provide more
</span><br>
<span class="quotelev1">&gt; information. I've attached some information regarding the hardware,
</span><br>
<span class="quotelev1">&gt; OpenMPI's configuration and ompi_info output. Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vineet
</span><br>
<span class="quotelev1">&gt; &lt;orted_segv.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>In reply to:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24611.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
