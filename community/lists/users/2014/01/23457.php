<?
$subject_val = "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 22:49:28 2014" -->
<!-- isoreceived="20140125034928" -->
<!-- sent="Fri, 24 Jan 2014 19:48:31 -0800" -->
<!-- isosent="20140125034831" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting past firewall &amp;amp; something else? in Mac OS X" -->
<!-- id="B5C58365-8243-4BE6-88A8-D8B9DF592FE3_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="52E2FBC8.7060301_at_ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 22:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23456.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23456.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried just turning the firewall &quot;off&quot;? It would at least let you know if things work.
<br>
<p>On Jan 24, 2014, at 3:48 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, thanks. I checked, and 'remote login' has been on. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's frustrating, like pulling-out-hair time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/24/2014 1:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The procs attempt to open a socket back to mpirun for communication, so the firewall has to allow TCP communication. I usually turn on the &quot;remote login&quot; feature in the &quot;sharing&quot; area in preferences.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 23, 2014, at 4:34 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am trying to run a parallel molecular simulation from the directory containing the executable (using only available cores on the local cpus) on Mac Lion and keep getting an apparent firewall error that cannot be resolved. I am entering:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#239;&#187;&#191;mpirun  -np 2 -e ./mpierr1 dock6.mpi -otherinput
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and get transient (too quick to Allow) notification messages 'Do you want the application &quot;orterun&quot; to accept incoming network connections? Clicking Deny may limit....... The setting can be changed in the firewall pane.......&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpirun message says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#239;&#187;&#191;&#239;&#187;&#191;Initializing MPI Routines...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initializing MPI Routines...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can specify orterun as a trusted app with &quot;&#239;&#187;&#191;sudo /usr/libexec/ApplicationFirewall/socketfilterfw -t /usr/local/bin/orterun&quot;. Before, and after allowing firewall access by orterun and dock6.mpi I get the following by viewing the &#239;&#187;&#191;/var/log/appfirewall.log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#239;&#187;&#191;Jan 24 00:48:45 Dans-Mac Firewall[23513]: orterun is listening from 0.0.0.0:50722 proto=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50723 proto=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50724 proto=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1024 proto=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1025 proto=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It appears that something is trying to start but cannot, and I dont know what else to try. Can anyone suggest how this might be resolved?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks much for any input!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23456.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23456.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
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
