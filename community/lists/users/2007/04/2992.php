<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 13:23:32 2007" -->
<!-- isoreceived="20070403172332" -->
<!-- sent="Tue, 03 Apr 2007 13:22:58 -0400" -->
<!-- isosent="20070403172258" -->
<!-- name="Heywood, Todd" -->
<!-- email="heywood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_endpoint errors" -->
<!-- id="C23805B2.148D%heywood_at_cshl.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070403094451.GL922_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Heywood, Todd (<em>heywood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 13:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian,
<br>
<p>Thanks for that info. The OS is Linux. I was able to get rid of the
<br>
&quot;connection reset&quot; (104) errors by increasing btl_tcp_endpoint_cache. That
<br>
leaves the &quot;no route to host&quot; (113) problem.
<br>
<p>Interestingly, I sometimes (sometimes not) get the same error on daemon
<br>
startup with ssh when experimenting with very large jobs:
<br>
<p>ssh: connect to host blade45 port 22: No route to host
<br>
[blade1:05832] ERROR: A daemon on node blade45 failed to start as expected.
<br>
[blade1:05832] ERROR: There may be more information available from
<br>
[blade1:05832] ERROR: the remote shell (see above).
<br>
[blade1:05832] ERROR: The daemon exited unexpectedly with status 1.
<br>
[blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
../../../../orte/mca/pls/base/pls_base_orted_cmds.c at line 188
<br>
[blade1:05832] [0,0,0] ORTE_ERROR_LOG: Timeout in file
<br>
../../../../../orte/mca/pls/rsh/pls_rsh_module.c at line 1187
<br>
<p>I can understand this arising from an ssh bottleneck, with a timeout. So, a
<br>
question to the OMPI folks: could the &quot;no route to host&quot; (113) error in
<br>
btl_tcp_endpoint.c:572 also result from a timeout?
<br>
<p>Thanks,
<br>
<p>Todd
<br>
<p><p><p><p>On 4/3/07 5:44 AM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 02, 2007 at 07:15:41PM -0400, Heywood, Todd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [blade90][0,1,223][../../../../../ompi/mca/btl/tcp/btl_tcp_endpoint.c:572:mc
</span><br>
<span class="quotelev2">&gt;&gt; a_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; errno is OS specific, so it's important to know which OS you're using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can always convert these error numbers to normal strings with perl:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; adi_at_drcomp:~$ perl -e 'die$!=113'
</span><br>
<span class="quotelev1">&gt; No route to host at -e line 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (read: 113 is &quot;No route to host&quot; under Linux. If you're not using Linux,
</span><br>
<span class="quotelev1">&gt;  your 113 probably means something else)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's really &quot;No route to host&quot;, check your routing setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; adi_at_drcomp:~$ perl -e 'die$!=104'
</span><br>
<span class="quotelev1">&gt; Connection reset by peer at -e line 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually happens when a remote process dies, perhaps due to
</span><br>
<span class="quotelev1">&gt; segfaults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2993.php">Xie, Hugh: "[OMPI users] Mpirun failed for machines not in the same subnet."</a>
<li><strong>Previous message:</strong> <a href="2991.php">Jeff Squyres: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2986.php">Adrian Knoth: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Reply:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
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
