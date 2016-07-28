<?
$subject_val = "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 25 06:56:43 2014" -->
<!-- isoreceived="20140125115643" -->
<!-- sent="Sat, 25 Jan 2014 11:56:26 +0000" -->
<!-- isosent="20140125115626" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting past firewall &amp;amp; something else? in Mac OS X" -->
<!-- id="45C8B29B-2027-494E-8707-C57FE662FCB9_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="52E338CA.7010407_at_ucdavis.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-25 06:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23463.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23463.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I run with my OS X firewall enabled and don't have this problem.
<br>

<br>
Check to ensure sys prefs -&gt; Security -&gt; Firewall -&gt; Block all incoming connections is unchecked....?
<br>

<br>

<br>
On Jan 24, 2014, at 11:08 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Yes, it seems to begin to run with firewall off (gui), initiates the number of called mpirun processes, then terminates with no errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/24/2014 7:48 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried just turning the firewall &quot;off&quot;? It would at least let you know if things work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 24, 2014, at 3:48 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph, thanks. I checked, and 'remote login' has been on. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's frustrating, like pulling-out-hair time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/24/2014 1:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The procs attempt to open a socket back to mpirun for communication, so the firewall has to allow TCP communication. I usually turn on the &quot;remote login&quot; feature in the &quot;sharing&quot; area in preferences.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 23, 2014, at 4:34 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi All
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am trying to run a parallel molecular simulation from the directory containing the executable (using only available cores on the local cpus) on Mac Lion and keep getting an apparent firewall error that cannot be resolved. I am entering:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;mpirun  -np 2 -e ./mpierr1 dock6.mpi -otherinput
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and get transient (too quick to Allow) notification messages 'Do you want the application &quot;orterun&quot; to accept incoming network connections? Clicking Deny may limit....... The setting can be changed in the firewall pane.......&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The mpirun message says:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;&#239;&#187;&#191;Initializing MPI Routines...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Initializing MPI Routines...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can specify orterun as a trusted app with &quot;&#239;&#187;&#191;sudo /usr/libexec/ApplicationFirewall/socketfilterfw -t /usr/local/bin/orterun&quot;. Before, and after allowing firewall access by orterun and dock6.mpi I get the following by viewing the &#239;&#187;&#191;/var/log/appfirewall.log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;Jan 24 00:48:45 Dans-Mac Firewall[23513]: orterun is listening from 0.0.0.0:50722 proto=6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50723 proto=6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50724 proto=6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1024 proto=6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1025 proto=6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It appears that something is trying to start but cannot, and I dont know what else to try. Can anyone suggest how this might be resolved?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks much for any input!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23460.php">Ralph Castain: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23458.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23463.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23463.php">Dan Hsu: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
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
