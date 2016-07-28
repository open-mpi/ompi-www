<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 18:12:08 2011" -->
<!-- isoreceived="20110214231208" -->
<!-- sent="Mon, 14 Feb 2011 15:12:00 -0800" -->
<!-- isosent="20110214231200" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97EF57D.E59A%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7F8341F3-F5BA-4C0E-84C3-D05144AAE50A_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 18:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15606.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15608.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashley,
<br>
<p>You nailed it precisely.  I turned dasher's firewall off per
<br>
your instruction and the problem went away.
<br>
<p>&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$  cat app.ac3
<br>
&nbsp;&nbsp;-H dasher.egcrc.org  -np 1 hostname
<br>
&nbsp;&nbsp;-H dasher.egcrc.org  -np 1 hostname
<br>
&nbsp;&nbsp;-H vixen.egcrc.org   -np 1 hostname
<br>
&nbsp;&nbsp;-H vixen.egcrc.org   -np 1 hostname
<br>
&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$
<br>
&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$ mpirun -app app.ac3
<br>
&nbsp;&nbsp;dasher.egcrc.org
<br>
&nbsp;&nbsp;dasher.egcrc.org
<br>
&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;vixen.egcrc.org
<br>
&nbsp;&nbsp;[tsakai_at_dasher Rmpi]$
<br>
<p>Incidentally, all machines we have are inside the firewall
<br>
and none is publicly reachable without the use of vpn.
<br>
<p>Many thanks to you.
<br>
Also, thanks to Reuti who raised this possibility in the
<br>
first place.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p>On 2/14/11 1:37 PM, &quot;Ashley Pittman&quot; &lt;ashley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14 Feb 2011, at 21:10, Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Regarding firewall, they are different:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand what they mean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vixen has a normal, or empty config and as such has no firewall, dasher has a
</span><br>
<span class="quotelev1">&gt; number of firewall rules configured which could easily be the cause of the
</span><br>
<span class="quotelev1">&gt; problem on these two machines.  To be able to run OpenMPI across these two
</span><br>
<span class="quotelev1">&gt; machines you'll need to disable the firewall on dasher.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To disable the firewall the command (as root) is &quot;service iptables off&quot; to
</span><br>
<span class="quotelev1">&gt; turn it off until next boot or &quot;chkconfig iptables off&quot; to do it permanently
</span><br>
<span class="quotelev1">&gt; from the next boot, obviously you should check with your network administrator
</span><br>
<span class="quotelev1">&gt; before doing this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15609.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15606.php">Ashley Pittman: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15608.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
