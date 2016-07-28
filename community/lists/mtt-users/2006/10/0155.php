<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 20 18:11:02 2006" -->
<!-- isoreceived="20061020221102" -->
<!-- sent="Fri, 20 Oct 2006 18:10:54 -0400" -->
<!-- isosent="20061020221054" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT reporter module settings" -->
<!-- id="20061020221054.GL21959_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20061020155204.0225c9b0_at_cic-mail.lanl.gov" -->
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
<strong>Date:</strong> 2006-10-20 18:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, remove that trunk workspace, and checkout the release
<br>
branch:
<br>
<p>$ svn co <a href="https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers">https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers</a>
<br>
<p>The trunk is out of service at the moment, while we're
<br>
implementing MTT 2.0 stuff in it.
<br>
<p>-Ethan
<br>
<p><p>On Fri, Oct/20/2006 03:53:24PM, James W. Barker wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the output svn info generates:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ffe1.lanl.gov&gt; svn info
</span><br>
<span class="quotelev1">&gt; Path: .
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/svn/mtt/trunk">https://svn.open-mpi.org/svn/mtt/trunk</a>
</span><br>
<span class="quotelev1">&gt; Repository Root: <a href="https://svn.open-mpi.org/svn/mtt">https://svn.open-mpi.org/svn/mtt</a>
</span><br>
<span class="quotelev1">&gt; Repository UUID: 3a00f1f0-e206-0410-aee5-9638c71ae14b
</span><br>
<span class="quotelev1">&gt; Revision: 374
</span><br>
<span class="quotelev1">&gt; Node Kind: directory
</span><br>
<span class="quotelev1">&gt; Schedule: normal
</span><br>
<span class="quotelev1">&gt; Last Changed Author: emallove
</span><br>
<span class="quotelev1">&gt; Last Changed Rev: 374
</span><br>
<span class="quotelev1">&gt; Last Changed Date: 2006-10-03 13:13:35 -0600 (Tue, 03 Oct 2006)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 08:14 AM 10/20/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Oct/19/2006 11:24:46AM, James W. Barker wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Using http I get the same error only on port 80 instead of port
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 443.  See below:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ***WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       <a href="http://www.open-mpi.org:80/mtt/submit">http://www.open-mpi.org:80/mtt/submit</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ***WARNING:  &gt;&gt; Error was:  400 Bad Request
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     ERROR:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     Client version not specified.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&quot;Client version not specified&quot; is coming from the IU server,
</span><br>
<span class="quotelev2">&gt; &gt;so I believe I was getting off track with the http and
</span><br>
<span class="quotelev2">&gt; &gt;https. You are connecting, but you should be seeing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&quot;MTTDatabase testing submit URL with a ping...
</span><br>
<span class="quotelev2">&gt; &gt;MTTDatabase ping successful: 200 OK
</span><br>
<span class="quotelev2">&gt; &gt;   Ping successful.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The fact that you see &quot;Client version not specified&quot; tells
</span><br>
<span class="quotelev2">&gt; &gt;me there's no &quot;PING&quot; in the HTTP POST (the server thinks
</span><br>
<span class="quotelev2">&gt; &gt;you're sending test results, not a PING). Can you start up a
</span><br>
<span class="quotelev2">&gt; &gt;web browser from that same machine you're running mtt on,
</span><br>
<span class="quotelev2">&gt; &gt;and see if you run into an issue POSTing to any other web
</span><br>
<span class="quotelev2">&gt; &gt;site (e.g., google, yahoo, etc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Does your svn info shows this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;<a href="https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers">https://svn.open-mpi.org/svn/mtt/branches/ompi-core-testers</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the problem may be MTT literally appending the port number to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the URL (www.open-mpi.org:80  or  www.open-mpi.org:443).  That is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; what I see when I run MTT in debug mode.  Is that possible?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At 10:11 AM 10/19/2006, you wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;On Thu, Oct/19/2006 09:48:08AM, James W. Barker wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; I now have the variables set in the Reporter as you indicated
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; below.  However, I get the following error message when the reporter
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; module initializes:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; ***WARNING: &gt;&gt; Failed test ping to MTTDatabase URL:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;      <a href="https://www.open-mpi.org:443/mtt/submit">https://www.open-mpi.org:443/mtt/submit</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; ***WARNING:  &gt;&gt; Error was:  400 Bad Request
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;     ERROR:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;     Client version not specified.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Any thoughts on what is causing this error?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Did you try using http instead of https?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;-Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; At 03:28 PM 10/18/2006, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;Hi Jim,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;On Wed, Oct/18/2006 12:02:24PM, James W. Barker wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Ethan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Do you know the correct values for the elements of the reporter
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; module of the MTT .ini file?  These are the values I currently have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; set in my .ini file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;Do you access the web through a proxy server? If so, you
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;need to set your http_proxy/https_proxy env var(s) to that
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;proxy.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_username = lanl
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_password = XXXXXXXXXXX
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;I take it you *do* know your password, but just didn't email
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;it to the list.
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; # cluster.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_platform = odin
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;This won't effect your connectivity with the mtt database,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;but you probably want to do something like:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;mttdatabase_platform = lanl
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;-Ethan
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; MTT reported it could not ping 
</span><br>
<span class="quotelev2">&gt; &gt;<a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; what is the correct URL?  Is the mttdatabase_realm = OMPI?  Is the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mttdatabase_platform = odin?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Jim Barker
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; James W. Barker,  Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Computer, Computational and Statistical Sciences Division
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Advanced Computing Laboratory - Application Communications and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; Performance Research Team
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; 505-665-9558
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0156.php">Jeff Squyres: "[MTT users] Discussion on teleconf yesterday?"</a>
<li><strong>Previous message:</strong> <a href="0154.php">Ethan Mallove: "Re: [MTT users] MTT reporter module settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="0149.php">James W. Barker: "[MTT users] MTT reporter module settings"</a>
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
