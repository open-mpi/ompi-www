<?
$subject_val = "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 25 14:46:47 2014" -->
<!-- isoreceived="20140125194647" -->
<!-- sent="Sat, 25 Jan 2014 11:46:37 -0800" -->
<!-- isosent="20140125194637" -->
<!-- name="Dan Hsu" -->
<!-- email="dkhsu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting past firewall &amp;amp; something else? in Mac OS X" -->
<!-- id="52E4149D.2090003_at_ucdavis.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="45C8B29B-2027-494E-8707-C57FE662FCB9_at_cisco.com" -->
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
<strong>From:</strong> Dan Hsu (<em>dkhsu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-25 14:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23464.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014) at CCGrid 2014"</a>
<li><strong>Previous message:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blocking all firewall connections is unchecked, but the Apple gui could 
<br>
provide adequate control. On reading a bit more on firewalls, second 
<br>
party guis like IceFloor may provide finer control, as suggested in:
<br>
<a href="http://www.question-defense.com/2012/03/22/osx-lion-firewall-process-name">http://www.question-defense.com/2012/03/22/osx-lion-firewall-process-name</a>
<br>
<p>Will try this next.
<br>
<p>On 1/25/2014 3:56 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I run with my OS X firewall enabled and don't have this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check to ensure sys prefs -&gt; Security -&gt; Firewall -&gt; Block all incoming connections is unchecked....?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2014, at 11:08 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it seems to begin to run with firewall off (gui), initiates the number of called mpirun processes, then terminates with no errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/24/2014 7:48 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tried just turning the firewall &quot;off&quot;? It would at least let you know if things work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2014, at 3:48 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph, thanks. I checked, and 'remote login' has been on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's frustrating, like pulling-out-hair time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/24/2014 1:11 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The procs attempt to open a socket back to mpirun for communication, so the firewall has to allow TCP communication. I usually turn on the &quot;remote login&quot; feature in the &quot;sharing&quot; area in preferences.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 23, 2014, at 4:34 PM, Dan Hsu &lt;dkhsu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi All
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am trying to run a parallel molecular simulation from the directory containing the executable (using only available cores on the local cpus) on Mac Lion and keep getting an apparent firewall error that cannot be resolved. I am entering:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;mpirun  -np 2 -e ./mpierr1 dock6.mpi -otherinput
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and get transient (too quick to Allow) notification messages 'Do you want the application &quot;orterun&quot; to accept incoming network connections? Clicking Deny may limit....... The setting can be changed in the firewall pane.......&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The mpirun message says:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;&#239;&#187;&#191;Initializing MPI Routines...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Initializing MPI Routines...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can specify orterun as a trusted app with &quot;&#239;&#187;&#191;sudo /usr/libexec/ApplicationFirewall/socketfilterfw -t /usr/local/bin/orterun&quot;. Before, and after allowing firewall access by orterun and dock6.mpi I get the following by viewing the &#239;&#187;&#191;/var/log/appfirewall.log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;Jan 24 00:48:45 Dans-Mac Firewall[23513]: orterun is listening from 0.0.0.0:50722 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50723 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:50724 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1024 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 0.0.0.0:1025 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It appears that something is trying to start but cannot, and I dont know what else to try. Can anyone suggest how this might be resolved?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks much for any input!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Dan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23464.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014) at CCGrid 2014"</a>
<li><strong>Previous message:</strong> <a href="23462.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of	round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>In reply to:</strong> <a href="23459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
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
