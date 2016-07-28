<?
$subject_val = "Re: [OMPI users] specifying launch-agent";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 00:44:44 2012" -->
<!-- isoreceived="20121116054444" -->
<!-- sent="Fri, 16 Nov 2012 00:44:40 -0500" -->
<!-- isosent="20121116054440" -->
<!-- name="John Marshall" -->
<!-- email="John.Marshall_at_[hidden]" -->
<!-- subject="Re: [OMPI users] specifying launch-agent" -->
<!-- id="50A5D2C8.5000603_at_ec.gc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50A5C7CD.4020600_at_ec.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] specifying launch-agent<br>
<strong>From:</strong> John Marshall (<em>John.Marshall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 00:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20726.php">marco atzeri: "[OMPI users] New package: openmpi-1.6.3-3"</a>
<li><strong>Previous message:</strong> <a href="20724.php">John Marshall: "[OMPI users] specifying launch-agent"</a>
<li><strong>In reply to:</strong> <a href="20724.php">John Marshall: "[OMPI users] specifying launch-agent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/15/2012 11:57 PM, John Marshall wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to figure out how I can specify my own launch agent.
</span><br>
<span class="quotelev1">&gt; This is what I'd like to be able to do:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * have rsh/ssh calling semantics
</span><br>
<span class="quotelev1">&gt;   * specify a full path for the launch agent
</span><br>
<span class="quotelev1">&gt;   * use an environment variable to specify the launch agent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ahhh. I just figured out the OMPI_MCA_orte_rsh_agent setting and it works for me.
<br>
<p>John
<br>
<p><span class="quotelev1">&gt; Currently, I've only been able to set up my own launcher called
</span><br>
<span class="quotelev1">&gt; ssh and findable in the PATH before the system ssh. The
</span><br>
<span class="quotelev1">&gt; --launch-agent option doesn't seem to accept a full path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.6.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; John
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20726.php">marco atzeri: "[OMPI users] New package: openmpi-1.6.3-3"</a>
<li><strong>Previous message:</strong> <a href="20724.php">John Marshall: "[OMPI users] specifying launch-agent"</a>
<li><strong>In reply to:</strong> <a href="20724.php">John Marshall: "[OMPI users] specifying launch-agent"</a>
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
