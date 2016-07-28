<?
$subject_val = "Re: [OMPI users] odd network behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 20:15:04 2008" -->
<!-- isoreceived="20080126011504" -->
<!-- sent="Fri, 25 Jan 2008 20:14:59 -0500" -->
<!-- isosent="20080126011459" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] odd network behavior" -->
<!-- id="ea86ce220801251714r6d99575fg2dc2f24e776ad352_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0801171908v2120ecc1g24d4217ddda7ec6f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] odd network behavior<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 20:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Previous message:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>In reply to:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark,
<br>
I think the problem is likely due to the networking differences
<br>
between the nodes.  Check out these two FAQ entries:
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Specifically, I think you should try using a pair of these four MCA
<br>
parameters:
<br>
&nbsp;&nbsp;btl_tcp_if_include  and  oob_tcp_include
<br>
or
<br>
&nbsp;&nbsp;btl_tcp_if_exclude  and  oob_tcp_exclude
<br>
<p>Basically, you need to make sure the Open MPI doesn't try to use
<br>
the public network, since one of the nodes isn't on the public network.
<br>
<p>On Jan 17, 2008 10:08 PM, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 15, 2008 7:54 PM, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Open-MPI Community:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a 3 node cluster, each a dual opteron workstation running
</span><br>
<span class="quotelev2">&gt; &gt; OpenSUSE 10.1 64-bit.  The node names are LT, SGT and PFC.  When I
</span><br>
<span class="quotelev2">&gt; &gt; start an mpirun job from either SGT or PFC, things work as they are
</span><br>
<span class="quotelev2">&gt; &gt; supposed to.  However, if I start the same job from LT, the jobs hangs
</span><br>
<span class="quotelev2">&gt; &gt; at SGT - this was confirmed by mpirun --np 6 --hostfile &lt;correct
</span><br>
<span class="quotelev2">&gt; &gt; hostfile for the three nodes&gt; hostname, which gives only LT; LT; PFC;
</span><br>
<span class="quotelev2">&gt; &gt; PFC (and then hangs) when started from LT (this same command started
</span><br>
<span class="quotelev2">&gt; &gt; from either of the other nodes give two of each of the three hostnames
</span><br>
<span class="quotelev2">&gt; &gt; and terminates normally).  The nfs share drive is physically located
</span><br>
<span class="quotelev2">&gt; &gt; on LT.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been using ssh to get to either SGT or PFC from a terminal
</span><br>
<span class="quotelev2">&gt; &gt; opened originally on LT to run jobs.  I can ssh from any node to any
</span><br>
<span class="quotelev2">&gt; &gt; other node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have attached a gzipped tar archive of the three ifconfig results
</span><br>
<span class="quotelev2">&gt; &gt; (for each node) and the results of ompi_info --all command as
</span><br>
<span class="quotelev2">&gt; &gt; requested in the &quot;Getting Help&quot; section.  I was unable to locate a
</span><br>
<span class="quotelev2">&gt; &gt; config.log file in the shared ompi directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any assistance on this matter would be appreciated,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark E. Kosmowski
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'd posted a message earlier about intermittent hangs -- perhaps it's
</span><br>
<span class="quotelev2">&gt; &gt;the same issue. If you run a hundred instances or so of &quot;mpirun --np 6
</span><br>
<span class="quotelev2">&gt; &gt;--hostfile hostfile uptime&quot;, from SGT or PFC, do you notice any hangs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Barry Rountree
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read your thread and I do not think that the issues are the same.
</span><br>
<span class="quotelev1">&gt; You seem to get the correct output before the hang, I do not.  My
</span><br>
<span class="quotelev1">&gt; system either fails to give the expected output with a hang when
</span><br>
<span class="quotelev1">&gt; started from the LT node, or works correctly giving the proper output
</span><br>
<span class="quotelev1">&gt; and a graceful exit (i.e. no hang whatsoever) when started on one of
</span><br>
<span class="quotelev1">&gt; the other two nodes (SGT or PFC).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that my issue is that both LT and SGT are connected to both
</span><br>
<span class="quotelev1">&gt; the internet and the dedicated cluster traffic gigabit switch, while
</span><br>
<span class="quotelev1">&gt; PFC is only connected to the dedicated cluster traffic gigabit switch.
</span><br>
<span class="quotelev1">&gt;  However, this is the limit of my network diagnostic abilities,
</span><br>
<span class="quotelev1">&gt; especially since SGT can properly launch open MPI jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>Previous message:</strong> <a href="4891.php">Mostyn Lewis: "Re: [OMPI users] openmpi-1.2.4-1/OFED 1.2.5.4 ConnectX MPI_Reduce hang"</a>
<li><strong>In reply to:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4853.php">Jeff Squyres: "Re: [OMPI users] odd network behavior"</a>
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
