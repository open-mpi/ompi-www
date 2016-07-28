<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 26 08:41:35 2012" -->
<!-- isoreceived="20120426124135" -->
<!-- sent="Thu, 26 Apr 2012 08:41:25 -0400" -->
<!-- isosent="20120426124125" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="4F994275.2070206_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D6E1376-A961-4E17-BC34-704A87D263AD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-26 08:41:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19146.php">Prentice Bisbal: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19144.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/25/2012 1:00 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 12:51 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds rather bizarre. Do you have lstopo on your machine? Might be useful to see the output of that so we can understand what it thinks the topology is like as this underpins the binding code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The -nooversubscribe option is a red herring here - it has nothing to do with the problem, nor will it help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: if you aren't adding --bind-to-core, then OMPI isn't launching your process on any specific core at all - we are simply launching it on the node. It sounds to me like your code is incorrectly identifying &quot;sharing&quot; when a process isn't bound to a specific core.
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put differently: if you're not binding your processes to processor cores, then it's quite likely/possible that multiple processes *are* running on the same processor cores, at least intermittently, because the OS is allowed to migrate processes to whatever processor cores it wants to.
</span><br>
However, Kyle mentioned previously that he was doing a -bind-to-core 
<br>
option.  I would suggest adding -report-bindings to the mpirun command 
<br>
line and see what mpirun really thinks it is binding to if it is at all.
<br>
<p>There is one piece of information that seems missing and confusing me.  
<br>
Kyle how is your code determining it is the only process bound to a core 
<br>
or conversely another process is bound to the same core?
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19146.php">Prentice Bisbal: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19144.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19131.php">Jingcha Joba: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
