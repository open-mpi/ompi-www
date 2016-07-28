<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 07:39:36 2006" -->
<!-- isoreceived="20060911113936" -->
<!-- sent="Mon, 11 Sep 2006 07:39:32 -0400" -->
<!-- isosent="20060911113932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Distinct Steps" -->
<!-- id="C12AC334.261C3%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9F320D2C-7C5D-48A3-99B4-91656B66E3BD_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-11 07:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Jeff Squyres: "[MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/10/06 8:39 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; - Does MTT support Multiple clients running over the same build tree?
</span><br>
<span class="quotelev1">&gt; For example I have a script that does:
</span><br>
<span class="quotelev1">&gt;    &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;    srun -N 1 -b mtt-build-phase
</span><br>
<span class="quotelev1">&gt;    wait for it to complete
</span><br>
<span class="quotelev1">&gt;    srun -N 8 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    srun -N 16 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    srun -N 32 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt;    I assume it doesn't, but thought I would ask.
</span><br>
<p>No, it does not.  Sorry...
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; - Also does MTT support the serialization of the above script? As in:
</span><br>
<span class="quotelev1">&gt;    &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;    srun -N 1 -b mtt-build-phase
</span><br>
<span class="quotelev1">&gt;    wait for it to complete
</span><br>
<span class="quotelev1">&gt;    srun -N 8 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    wait for it to complete
</span><br>
<span class="quotelev1">&gt;    srun -N 16 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    wait for it to complete
</span><br>
<span class="quotelev1">&gt;    srun -N 32 -b mtt-testing-phase
</span><br>
<span class="quotelev1">&gt;    wait for it to complete
</span><br>
<span class="quotelev1">&gt;    &lt;/snip&gt;
</span><br>
<p>Yes, that would work fine.  If you're using the &amp;rm_max_procs() in your INI
<br>
file, it should pick up the larger SLURM job sizes.  There are really two
<br>
choices:
<br>
<p>- always request &quot;-N 32&quot; and make the INI file step through 8, 16, 32
<br>
processes for each test (but this may be wasteful if there are long-running
<br>
8 or 16 proc tests)
<br>
<p>- do what you did above, and make sure the INI file doesn't step through
<br>
number of proces (you might want to double check your settings for the IMB
<br>
tests because it internally steps through powers of two for procs).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all your help,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Jeff Squyres: "[MTT users] New stuff"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Josh Hursey: "Re: [MTT users] Distinct Steps"</a>
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
