<?
$subject_val = "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 18:01:57 2012" -->
<!-- isoreceived="20120907220157" -->
<!-- sent="Fri, 07 Sep 2012 18:01:46 -0400" -->
<!-- isosent="20120907220146" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some mpi processes &amp;quot;disappear&amp;quot; on a cluster of servers" -->
<!-- id="504A6ECA.4040508_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPUxaiTwEOuD+=mzVazBXz98o9Tgq65AaGNN4MCnZC3f0ObWaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 18:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/03/2012 04:39 PM, Andrea Negri wrote:
<br>
<span class="quotelev1">&gt; max locked memory             (kbytes, -l) 32
</span><br>
<span class="quotelev2">&gt;&gt;  max memory size                (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;  open files                           (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt;  pipe size                            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt;  POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt;  stack size                           (kbytes, -s) 10240
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Hi Andrea
<br>
This is besides the possibilities of
<br>
running out of physical memory,
<br>
or even defective memory chips, which Jeff, Ralph,
<br>
John, George have addressed, I still think that the
<br>
system limits above may play a role.
<br>
In a 8-year old cluster, hardware failures are not unexpected.
<br>
<p><p>1) System limits
<br>
<p>For what it is worth, virtually none of the programs we run here,
<br>
mostly atmosphere/ocean/climate codes,
<br>
would run with these limits.
<br>
On our compute nodes we set
<br>
max locked memory and stack size to
<br>
unlimited, to avoid problems with symptoms very
<br>
similar to those you describe.
<br>
Typically there are lots of automatic arrays in subroutines,
<br>
etc, which require a large stack.
<br>
Your sys admin could add these lines to the bottom
<br>
of /etc/security/limits.conf [the last one sets the
<br>
max number of open files]:
<br>
<p>*   -   memlock     -1
<br>
*   -   stack       -1
<br>
*   -   nofile      4096
<br>
<p>2) Defective network interface/cable/switch port
<br>
<p>Yet another possibility, following Ralph's suggestion,
<br>
is that you may have a failing network interface, or a bad
<br>
Ethernet cable or connector, on the node that goes south,
<br>
or on the switch port that serves that node.
<br>
[I am assuming your network is Ethernet, probably GigE.]
<br>
<p>Again, in a 8-year old cluster, hardware failures are not unexpected.
<br>
<p>We had this sort of problems with old clusters, old nodes.
<br>
<p>3) Quarantine the bad node
<br>
<p>Is it always the same node that fails, or does it vary?
<br>
[Please answer, it helps us understand what's going on.]
<br>
<p>If it is always the same node, have you tried to quarantine it,
<br>
either temporarily removing it from your job submission system
<br>
or just turning it off, and run the job on the remaining
<br>
nodes?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20155.php">Gus Correa: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20153.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20105.php">Andrea Negri: "[OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
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
