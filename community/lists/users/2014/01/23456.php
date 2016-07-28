<?
$subject_val = "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 18:48:40 2014" -->
<!-- isoreceived="20140124234840" -->
<!-- sent="Fri, 24 Jan 2014 15:48:24 -0800" -->
<!-- isosent="20140124234824" -->
<!-- name="Dan Hsu" -->
<!-- email="dkhsu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting past firewall &amp;amp; something else? in Mac OS X" -->
<!-- id="52E2FBC8.7060301_at_ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98652244-FAA0-4883-A7B9-5A01E13C1647_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-24 18:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thanks. I checked, and 'remote login' has been on.
<br>
<p>It's frustrating, like pulling-out-hair time.
<br>
<p><p>On 1/24/2014 1:11 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The procs attempt to open a socket back to mpirun for communication, 
</span><br>
<span class="quotelev1">&gt; so the firewall has to allow TCP communication. I usually turn on the 
</span><br>
<span class="quotelev1">&gt; &quot;remote login&quot; feature in the &quot;sharing&quot; area in preferences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2014, at 4:34 PM, Dan Hsu &lt;dkhsu_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dkhsu_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am trying to run a parallel molecular simulation from the directory 
</span><br>
<span class="quotelev2">&gt;&gt; containing the executable (using only available cores on the local 
</span><br>
<span class="quotelev2">&gt;&gt; cpus) on Mac Lion and keep getting an apparent firewall error that 
</span><br>
<span class="quotelev2">&gt;&gt; cannot be resolved. I am entering:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?mpirun  -np 2 -e ./mpierr1 dock6.mpi -otherinput
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and get transient (too quick to Allow) notification messages 'Do you 
</span><br>
<span class="quotelev2">&gt;&gt; want the application &quot;orterun&quot; to accept incoming network 
</span><br>
<span class="quotelev2">&gt;&gt; connections? Clicking Deny may limit....... The setting can be 
</span><br>
<span class="quotelev2">&gt;&gt; changed in the firewall pane.......&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun message says:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; ??Initializing MPI Routines...
</span><br>
<span class="quotelev2">&gt;&gt; Initializing MPI Routines...
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can specify orterun as a trusted app with &quot;?sudo 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/libexec/ApplicationFirewall/socketfilterfw -t 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/orterun&quot;. Before, and after allowing firewall access 
</span><br>
<span class="quotelev2">&gt;&gt; by orterun and dock6.mpi I get the following by viewing the 
</span><br>
<span class="quotelev2">&gt;&gt; ?/var/log/appfirewall.log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?Jan 24 00:48:45 Dans-Mac Firewall[23513]: orterun is listening from 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.0.0:50722 proto=6
</span><br>
<span class="quotelev2">&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.0.0:50723 proto=6
</span><br>
<span class="quotelev2">&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.0.0:50724 proto=6
</span><br>
<span class="quotelev2">&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.0.0:1024 proto=6
</span><br>
<span class="quotelev2">&gt;&gt; Jan 24 00:48:45 Dans-Mac Firewall[23513]: dock6.mpi is listening from 
</span><br>
<span class="quotelev2">&gt;&gt; 0.0.0.0:1025 proto=6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that something is trying to start but cannot, and I dont 
</span><br>
<span class="quotelev2">&gt;&gt; know what else to try. Can anyone suggest how this might be resolved?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks much for any input!
</span><br>
<span class="quotelev2">&gt;&gt; Dan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Reply:</strong> <a href="23457.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
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
