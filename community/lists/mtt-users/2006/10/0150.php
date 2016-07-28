<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 17:28:56 2006" -->
<!-- isoreceived="20061018212856" -->
<!-- sent="Wed, 18 Oct 2006 17:28:50 -0400" -->
<!-- isosent="20061018212850" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT reporter module settings" -->
<!-- id="20061018212849.GC21959_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20061018115828.025f2008_at_cic-mail.lanl.gov" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 17:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<li><strong>In reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim,
<br>
<p>On Wed, Oct/18/2006 12:02:24PM, James W. Barker wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know the correct values for the elements of the reporter 
</span><br>
<span class="quotelev1">&gt; module of the MTT .ini file?  These are the values I currently have 
</span><br>
<span class="quotelev1">&gt; set in my .ini file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<p><p>Do you access the web through a proxy server? If so, you
<br>
need to set your http_proxy/https_proxy env var(s) to that
<br>
proxy.
<br>
<p><p><span class="quotelev1">&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev1">&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = lanl
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = XXXXXXXXXXX
</span><br>
<p><p>I take it you *do* know your password, but just didn't email
<br>
it to the list.
<br>
<p><p><span class="quotelev1">&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = odin
</span><br>
<p>This won't effect your connectivity with the mtt database,
<br>
but you probably want to do something like:
<br>
<p>mttdatabase_platform = lanl
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT reported it could not ping <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>, 
</span><br>
<span class="quotelev1">&gt; what is the correct URL?  Is the mttdatabase_realm = OMPI?  Is the 
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = odin?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev1">&gt; Advanced Computing Laboratory - Application Communications and 
</span><br>
<span class="quotelev1">&gt; Performance Research Team
</span><br>
<span class="quotelev1">&gt; 505-665-9558 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Ethan Mallove: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Previous message:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<li><strong>In reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
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
