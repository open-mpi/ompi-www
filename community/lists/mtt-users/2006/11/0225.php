<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 13 10:58:02 2006" -->
<!-- isoreceived="20061113155802" -->
<!-- sent="Mon, 13 Nov 2006 10:56:06 -0500" -->
<!-- isosent="20061113155606" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="15E64F89-43E8-4931-B8E6-04EF1AFF3D47_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061113152715.GF1608_at_sr1-ubur-03.East.Sun.COM" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-13 10:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2006, at 10:27 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I can infer that you have an MPI Install section labeled
</span><br>
<span class="quotelev1">&gt; &quot;odin 64 bit gcc&quot;. A few questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * What is the mpi_get for that section (or how does that
</span><br>
<span class="quotelev1">&gt;   parameter get filled in by your automated scripts)?
</span><br>
<p>I attached the generated INI file for you to look at.
<br>
<p>

<br><p>
<p>It is the same value for all parallel runs of GCC+64bit (same value  
<br>
for all branches)
<br>
<p><p><span class="quotelev1">&gt; * Do you start with a fresh scratch tree every run?
</span><br>
<p>Yep. Every run, and all of the parallel runs.
<br>
<p><span class="quotelev1">&gt; * Could you email me your scratch/installs/mpi_installs.xml
</span><br>
<span class="quotelev1">&gt;   files?
</span><br>
<p><p>

<p>
The attached mpi_installs.xml is from the trunk+gcc+64bit parallel  
<br>
scratch directory.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked on how widespread this issue is, and found that
</span><br>
<span class="quotelev1">&gt; 18,700 out of 474,000 Test Run rows in the past month have a
</span><br>
<span class="quotelev1">&gt; mpi_version/command (v1.2-trunk) mismatch. Occuring in both
</span><br>
<span class="quotelev1">&gt; directions (version=1.2, command=trunk and vice versa).
</span><br>
<span class="quotelev1">&gt; They occur on these clusters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cisco MPI development cluster
</span><br>
<span class="quotelev1">&gt;  IU Odin
</span><br>
<span class="quotelev1">&gt;  IU - Thor - TESTING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Interesting...
<br>
<p><span class="quotelev1">&gt; There *is* that race condition in which one mtt submitting
</span><br>
<span class="quotelev1">&gt; could overwrite another's index. Do you have &quot;trunk&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;1.2&quot; runs submitting to the database at the same time?
</span><br>
<p>Yes we do. :(
<br>
<p>The parallel blocks as we call them are separate scratch directories  
<br>
in which MTT is running concurrently. Meaning that we have N parallel  
<br>
block scratch directories each running one instance of MTT. So it is  
<br>
possible (and highly likely) that when the reporter phase fires all  
<br>
of the N parallel blocks are firing it about the same time.
<br>
<p>Without knowing how the reporter is doing the inserts into the  
<br>
database I don't think I can help much more than that on debugging.  
<br>
When the reporter fires for the DB:
<br>
&nbsp;&nbsp;- Does it start a transaction for the connection, do the inserts,  
<br>
then commit?
<br>
&nbsp;&nbsp;- Does it ship the inserts to the server then allow it to run them,  
<br>
or does the client do all of the individual inserts?
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Nov/12/2006 06:04:17PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I feel somewhat better now.  Ethan - can you fix?
</span><br>
<span class="quotelev2">&gt;&gt;     -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;    From:   Tim Mattox [[1]mailto:timattox_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;    Sent:   Sunday, November 12, 2006 05:34 PM Eastern Standard Time
</span><br>
<span class="quotelev2">&gt;&gt;    To:     General user list for the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt;&gt;    Subject:        [MTT users] Corrupted MTT database or  
</span><br>
<span class="quotelev2">&gt;&gt; incorrucet query
</span><br>
<span class="quotelev2">&gt;&gt;    Hello,
</span><br>
<span class="quotelev2">&gt;&gt;    I just noticed that the MTT summary page is presenting
</span><br>
<span class="quotelev2">&gt;&gt;    incorrect information for our recent runs at IU.  It is
</span><br>
<span class="quotelev2">&gt;&gt;    showing failures for the 1.2b1 that actaully came from
</span><br>
<span class="quotelev2">&gt;&gt;    the trunk!  See the first entry in this table:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mtt/reporter.php">http://www.open-mpi.org/mtt/reporter.php</a>? 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;maf_start_test_timestamp=200
</span><br>
<span class="quotelev2">&gt;&gt;    6-11-12%2019:12:02%20through%202006-11-12% 
</span><br>
<span class="quotelev2">&gt;&gt; 2022:12:02&amp;ft_platform_id=co
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; ntains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_ 
</span><br>
<span class="quotelev2">&gt;&gt; t
</span><br>
<span class="quotelev2">&gt;&gt;    est_case&amp;go=Table&amp;maf_agg_timestamp=- 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;mef_mpi_name=All&amp;mef_mpi_version
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; =All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_platform_hardware=All&amp;mef 
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt;    platform_id=All&amp;agg_platform_id=off&amp;1- 
</span><br>
<span class="quotelev2">&gt;&gt; page=off&amp;no_bookmarks&amp;no_bookmar
</span><br>
<span class="quotelev2">&gt;&gt;    ks
</span><br>
<span class="quotelev2">&gt;&gt;    Click on the [i] in the upper right (the first entry)
</span><br>
<span class="quotelev2">&gt;&gt;    to get the popup window which shows the MPIRrun cmd as:
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -mca btl tcp,sm,self -np 6 --prefix
</span><br>
<span class="quotelev2">&gt;&gt;    /san/homedirs/mpiteam/mtt-runs/odin/20061112-Testing-NOCLN/ 
</span><br>
<span class="quotelev2">&gt;&gt; parallel-bl
</span><br>
<span class="quotelev2">&gt;&gt;    ock-3/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/ 
</span><br>
<span class="quotelev2">&gt;&gt; install
</span><br>
<span class="quotelev2">&gt;&gt;    dynamic/spawn Note the path has &quot;1.3a1r12559&quot; in the
</span><br>
<span class="quotelev2">&gt;&gt;    name... it's a run from the trunk, yet the table showed
</span><br>
<span class="quotelev2">&gt;&gt;    this as a 1.2b1 run.  There are several of these
</span><br>
<span class="quotelev2">&gt;&gt;    missattributed errors.  This would explain why Jeff saw
</span><br>
<span class="quotelev2">&gt;&gt;    some ddt errors on the 1.2 brach yesterday, but was
</span><br>
<span class="quotelev2">&gt;&gt;    unable to reproduce them.  They were from the trunk!
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    Tim Mattox - [2]<a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt;     tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        I'm a bright... [3]<a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    [4]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; References
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. mailto:timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    2. <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    3. <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;    4. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0225/nightly-trunk-64-gcc.ini-gen">nightly-trunk-64-gcc.ini-gen</a>
</ul>
<!-- attachment="nightly-trunk-64-gcc.ini-gen" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0225/mpi_installs.xml">mpi_installs.xml</a>
</ul>
<!-- attachment="mpi_installs.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0224.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Reply:</strong> <a href="0226.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
