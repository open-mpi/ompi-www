<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 12:23:51 2009" -->
<!-- isoreceived="20091204172351" -->
<!-- sent="Fri, 4 Dec 2009 10:23:27 -0700" -->
<!-- isosent="20091204172327" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes" -->
<!-- id="dcf611bd0912040923s593252a7u23db47cecea9f3c7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4B194284.1040103_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 12:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 4, 2009 at 10:10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 4, 2009 at 08:21, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You used it correctly. Remember, all that cpu number is telling you is the
</span><br>
<span class="quotelev2">&gt;&gt; percentage of use by that process. So bottom line is: we are releasing it as
</span><br>
<span class="quotelev2">&gt;&gt; much as we possibly can, but no other process wants to use the cpu, so we go
</span><br>
<span class="quotelev2">&gt;&gt; ahead and use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If any other process wanted it, then the percentage would drop and the
</span><br>
<span class="quotelev2">&gt;&gt; other proc would take some.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  When you say &quot;the other proc would take some&quot;, how much do you expect it
</span><br>
<span class="quotelev1">&gt; to take? In my case above, the master process does not appear to yield a
</span><br>
<span class="quotelev1">&gt; whole lot. Can I reduce the polling frequency? I know that my slave
</span><br>
<span class="quotelev1">&gt; processes typically run several minutes to hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my (limited) experience, the situation is a little of both.  OMPI is
</span><br>
<span class="quotelev1">&gt; yielding.  Yielding makes a difference only if someone else wants the CPU.
</span><br>
<span class="quotelev1">&gt; But even if someone else wants the CPU, OMPI in yield mode will still be
</span><br>
<span class="quotelev1">&gt; consuming cycles.  It's like the way I drive a car.  When I approach a stop
</span><br>
<span class="quotelev1">&gt; sign, I slow down -- really, officer, I do -- and if there is cross traffic
</span><br>
<span class="quotelev1">&gt; I let it go by ahead of me.  But if there is no cross traffic, I, ahem,
</span><br>
<span class="quotelev1">&gt; proceed expediently.  And, even if there is cross traffic, their progress is
</span><br>
<span class="quotelev1">&gt; still impacted by me -- heck, I'm all for obeying stop signs and all, but
</span><br>
<span class="quotelev1">&gt; I'm no doormat.  OMPI processes can yield, but they only check to yield
</span><br>
<span class="quotelev1">&gt; every now and then.  Between checks, they are not timid processes, even if
</span><br>
<span class="quotelev1">&gt; other processes are waiting to run.  I once had some numbers on this.  Yield
</span><br>
<span class="quotelev1">&gt; helped, but not as effectively as one might have imagined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, that's the impression I get as well, the master process might be
<br>
yielding, but it doesn't appear to be a lot. Maybe I should do this
<br>
differently to avoid this CPU usage in master. All I really want is to
<br>
execute another process somewhere on a free node in my MPI universe, wait
<br>
for it to be done and go on. From my limited understanding of MPI,
<br>
MPI_Comm_spawn() and MPI_Barrier() seemed just like what I needed, but as I
<br>
said, maybe there are other ways to do this.
<br>
<p>nick
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>In reply to:</strong> <a href="11415.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Reply:</strong> <a href="11417.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
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
