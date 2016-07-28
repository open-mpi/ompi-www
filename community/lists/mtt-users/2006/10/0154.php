<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 10:14:22 2006" -->
<!-- isoreceived="20061020141422" -->
<!-- sent="Fri, 20 Oct 2006 10:14:12 -0400" -->
<!-- isosent="20061020141412" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT reporter module settings" -->
<!-- id="20061020141412.GI21959_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20061019112104.0227a480_at_cic-mail.lanl.gov" -->
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
<strong>Date:</strong> 2006-10-20 10:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0155.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/19/2006 11:24:46AM, James W. Barker wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using http I get the same error only on port 80 instead of port 
</span><br>
<span class="quotelev1">&gt; 443.  See below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ***WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org:80/mtt/submit">http://www.open-mpi.org:80/mtt/submit</a>
</span><br>
<span class="quotelev1">&gt; ***WARNING:  &gt;&gt; Error was:  400 Bad Request
</span><br>
<span class="quotelev1">&gt;     ERROR:
</span><br>
<span class="quotelev1">&gt;     Client version not specified.
</span><br>
<p>&quot;Client version not specified&quot; is coming from the IU server,
<br>
so I believe I was getting off track with the http and
<br>
https. You are connecting, but you should be seeing:
<br>
<p>&quot;MTTDatabase testing submit URL with a ping...
<br>
MTTDatabase ping successful: 200 OK
<br>
&nbsp;&nbsp;&nbsp;Ping successful.&quot;
<br>
<p>The fact that you see &quot;Client version not specified&quot; tells
<br>
me there's no &quot;PING&quot; in the HTTP POST (the server thinks
<br>
you're sending test results, not a PING). Can you start up a
<br>
web browser from that same machine you're running mtt on,
<br>
and see if you run into an issue POSTing to any other web
<br>
site (e.g., google, yahoo, etc).
<br>
<p>Does your svn info shows this?
<br>
<p><a href="https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers">https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers</a>
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the problem may be MTT literally appending the port number to 
</span><br>
<span class="quotelev1">&gt; the URL (www.open-mpi.org:80  or  www.open-mpi.org:443).  That is 
</span><br>
<span class="quotelev1">&gt; what I see when I run MTT in debug mode.  Is that possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 10:11 AM 10/19/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Oct/19/2006 09:48:08AM, James W. Barker wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I now have the variables set in the Reporter as you indicated
</span><br>
<span class="quotelev3">&gt; &gt;&gt; below.  However, I get the following error message when the reporter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; module initializes:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ***WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      <a href="https://www.open-mpi.org:443/mtt/submit">https://www.open-mpi.org:443/mtt/submit</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ***WARNING:  &gt;&gt; Error was:  400 Bad Request
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     ERROR:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Client version not specified.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any thoughts on what is causing this error?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Did you try using http instead of https?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At 03:28 PM 10/18/2006, you wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Hi Jim,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;On Wed, Oct/18/2006 12:02:24PM, James W. Barker wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Do you know the correct values for the elements of the reporter
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; module of the MTT .ini file?  These are the values I currently have
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; set in my .ini file.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Do you access the web through a proxy server? If so, you
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;need to set your http_proxy/https_proxy env var(s) to that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;proxy.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_username = lanl
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_password = XXXXXXXXXXX
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;I take it you *do* know your password, but just didn't email
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;it to the list.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; # cluster.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_platform = odin
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;This won't effect your connectivity with the mtt database,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;but you probably want to do something like:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;mttdatabase_platform = lanl
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;-Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; MTT reported it could not ping <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; what is the correct URL?  Is the mttdatabase_realm = OMPI?  Is the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mttdatabase_platform = odin?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Performance Research Team
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 505-665-9558
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Performance Research Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 505-665-9558
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Jeff Squyres: "Re: [MTT users] Bproc support in MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0155.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
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
