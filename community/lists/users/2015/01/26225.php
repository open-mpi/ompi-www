<?
$subject_val = "Re: [OMPI users] independent startup of orted and orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 14:21:59 2015" -->
<!-- isoreceived="20150121192159" -->
<!-- sent="Wed, 21 Jan 2015 20:21:55 +0100" -->
<!-- isosent="20150121192155" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] independent startup of orted and orterun" -->
<!-- id="76488969-DDCA-4877-A8A5-5F3C1B55607C_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2EF777B4-4BF9-4359-9686-24D6382DA28A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] independent startup of orted and orterun<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-21 14:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26224.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26221.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, all,
<br>
<p>To give some background, I'm part of the RADICAL-Pilot [1] development team.
<br>
RADICAL-Pilot is a Pilot System, an implementation of the Pilot (job) concept, which is in its most minimal form takes care of the decoupling of resource acquisition and workload management.
<br>
So instead of launching your real_science.exe through PBS, you submit a Pilot, which will allow you to perform application level scheduling.
<br>
Most obvious use-case if you want to run many (relatively) small tasks, then you really don;t want to go through the batch system every time. That is besides the fact that these machines are very bad in managing many tasks anyway.
<br>
<p>The recent discussion we had on Spawn() on Cray's also originates here.
<br>
I want to free myself from having to use aprun for every task, and therefore I am interested to see if ompi and/or orte can be the vehicle for that.
<br>
<p><span class="quotelev1">&gt; On 21 Jan 2015, at 17:16 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Theoretically, yes - see the ORCM project, which basically does what you ask.
</span><br>
<span class="quotelev1">&gt; The launch system in there isn&#226;&#128;&#153;t fully implemented yet, but the fundamental idea is valid and supports some range of capability.
</span><br>
<p>I looked a bit better at ORCM and it clearly overlaps with what I want to achieve.
<br>
One thing I noticed is that parts of it runs as root, why is that?
<br>
<p><span class="quotelev1">&gt; We used to have a cmd line option in ORTE for what you propose - it wouldn&#226;&#128;&#153;t be too hard to restore. Is there some reason to do so?
</span><br>
<p>Can you point me to something that I could look for in the repo history, then I can see if it serves my purpose.
<br>
<p>If you think there is enough to warrant looking in more detail at ORCM I'm happy to do that too.
<br>
<p>Cheers,
<br>
<p>Mark
<br>
<p>1. <a href="https://github.com/radical-cybertools/radical.pilot">https://github.com/radical-cybertools/radical.pilot</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Previous message:</strong> <a href="26224.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26221.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>Reply:</strong> <a href="26226.php">Ralph Castain: "Re: [OMPI users] independent startup of orted and orterun"</a>
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
