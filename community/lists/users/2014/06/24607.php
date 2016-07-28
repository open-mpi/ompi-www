<?
$subject_val = "[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 17:41:44 2014" -->
<!-- isoreceived="20140609214144" -->
<!-- sent="Mon, 9 Jun 2014 14:41:44 -0700" -->
<!-- isosent="20140609214144" -->
<!-- name="Vineet Rawat" -->
<!-- email="vineetrawat0_at_[hidden]" -->
<!-- subject="[OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E" -->
<!-- id="CA+h+pRX0wu-MTZ2CNe9Zt_4NkUMb22-1ieECiXS9=gf20kbBHA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E<br>
<strong>From:</strong> Vineet Rawat (<em>vineetrawat0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 17:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We've deployed OpenMPI on a small cluster but get a SEGV in orted. Debug
<br>
information is very limited as the cluster is at a remote customer site.
<br>
They have a network card with which I'm not familiar (Cisco Systems Inc VIC
<br>
P81E PCIe Ethernet NIC) and it seems capable of using the usNIC BTL. I'm
<br>
suspicious that it might be at the root of the problem. They're also
<br>
bonding the 2 ports.
<br>
<p>However, we're also doing a few unusual things which could be causing
<br>
problems. Firstly, we built OpenMPI (I tried 1.6.4 and 1.8.1) without the
<br>
ibverbs or usnic BTLs. Then, we only ship what (we think) we need: otrerun,
<br>
orted, libmpi, libmpi_cxx, libopen-rte and libopen-pal. Could there be a
<br>
dependency on some other binary executable or dlopen'ed library? We also
<br>
use a special plm_rsh_agent but we've used this approach for some time
<br>
without issue.
<br>
<p>I tried a few different MCA settings, the most restrictive of which led to
<br>
the failure of this command:
<br>
<p>orted --debug --debug-daemons -mca ess env -mca orte_ess_jobid 1925054464
<br>
-mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri
<br>
\&quot;1925054464.0;tcp://10.xxx.xxx.xxx:40547\&quot; --tree-spawn --mca
<br>
orte_base_help_aggregate 1 --mca plm_rsh_agent yyy --mca
<br>
btl_tcp_port_min_v4 2000 --mca btl_tcp_port_range_v4 100 --mca btl tcp,self
<br>
--mca btl_tcp_if_include bond0 --mca orte_create_session_dirs 0 --mca
<br>
plm_rsh_assume_same_shell 0 -mca plm rsh -mca orte_debug_daemons 1 -mca
<br>
orte_debug 1 -mca orte_tag_output 1
<br>
<p>It seems that the host is set up such that the core file is generated and
<br>
immediately removed (&quot;ulimit -c&quot; is unlimited) but the abrt daemon is doing
<br>
something weird. I'll be trying to get access to the system so I can use
<br>
&quot;--mca orte orte_daemon_spin&quot; and attach a debugger (if that's how that's
<br>
done). If I'm able to debug or obtain a core file I'll provide more
<br>
information. I've attached some information regarding the hardware,
<br>
OpenMPI's configuration and ompi_info output. Any thoughts?
<br>
<p>Thanks,
<br>
Vineet
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24607/orted_segv.tar.gz">orted_segv.tar.gz</a>
</ul>
<!-- attachment="orted_segv.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Previous message:</strong> <a href="24606.php">Marco Atzeri: "Re: [OMPI users] openmpi linking problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24608.php">Ralph Castain: "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
<li><strong>Reply:</strong> <a href="24609.php">Jeff Squyres (jsquyres): "Re: [OMPI users] orted 1.6.4 and 1.8.1 segv with bonded Cisco P81E"</a>
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
