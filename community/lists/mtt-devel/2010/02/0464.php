<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 17:35:02 2010" -->
<!-- isoreceived="20100209223502" -->
<!-- sent="Tue, 9 Feb 2010 17:34:52 -0500" -->
<!-- isosent="20100209223452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="14085141-FE60-41A0-96A0-587CF4367792_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B6BEB43.7050908_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 17:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Igor Ivanov: "[MTT devel] [Fwd: Re:  MTToGDS]"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 5, 2010, at 4:56 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev1">&gt; Thank you to start playing with one. I hope you find it is useful.
</span><br>
<span class="quotelev1">&gt; I am trying to answer questions you raised. 
</span><br>
<p>Thanks!  Sorry for the delay in my answering -- got caught up in other stuff...  Ugh!
<br>
<p><span class="quotelev1">&gt; 1. Yes, you are correct. The implementation uses google account authorization way to access web page only. Client applications use separate approach to communicate with datastore.
</span><br>
<span class="quotelev1">&gt; It is difficult to say what way is better from my point of view. In both ways we need to manage list of valid accounts to answer &quot;is this username/password combo valid?&quot; (Google does not do this task instead of us) and send username/password information from a client to application. Visible preference could exist in case web usage that was not main goal.
</span><br>
<p>Gotcha.
<br>
<p>FWIW, I think it would be (slightly) easier if we don't have to manage users' passwords on the appspot.  If the MTT client can just submit using a regular google account username+password, that would be one less thing to have to manage.  I guess I'm a little burned out from our current MTT setup where people had to bug me to reset their passwords (in a local .htaccess file) whenever they lost/forgot them.  :-)
<br>
<p>All things being equal, you're right, of course -- a) we still have to maintain a list of google accounts who are allowed to submit/access/whatever, b) we still have to ship off a username/password combo and ask if it's valid.  But eliminating that password column from our data, IMHO, represents pushing off all account management to Google.  
<br>
<p>Is it hard to redirect the appspot lookup to use google account names + passwords?
<br>
<p><span class="quotelev1">&gt; 2. Current implementation of datastore environment is oriented on client usage way mostly and does not grant users rich web possibility. Existing web form can be considered as instrument for an administrator now.
</span><br>
<p>Gotcha.  Someday someone with lots of time can write a glitzy web 2.0 interface.  ;-)
<br>
<p><span class="quotelev1">&gt; There is special command line utility that allows to communicate with datastore as bquery.pl located at &lt;mtt root&gt;/src/client. It is able to do query data from datastore and view different information on console using extended (more close to sql) gql syntax that is implemented for users comfort. More detail information can be got from document as <a href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example: 
</span><br>
<span class="quotelev1">&gt; to get information related mpi install following command line can be used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./bquery.pl --username=&lt;username&gt; --password=&lt;password&gt; --server=<a href="http://<appid">http://<appid</a>&gt;.appspot.com
</span><br>
<span class="quotelev1">&gt; --view --gqls=&quot;select description, mpi_path from MpiInstallPhase where duration=1&quot; --format=txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; description                          mpi_path
</span><br>
<span class="quotelev1">&gt; ----------------------------------   ----------------
</span><br>
<span class="quotelev1">&gt; Voltaire already installed MPI+OMA   /opt/openmpi/1.3
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<p>Nifty -- I'll go play with this...
<br>
<p><span class="quotelev1">&gt; 3. In case we can collect all needed information about cluster using transparent way we should do it. ClusterInfo.pm is attempt to get info in one place in clear manner.
</span><br>
<p>I ask because many of the assumptions in ClusterInfo.pm are not valid for my cluster.
<br>
<p><span class="quotelev1">&gt; 4. You are right it can be done.
</span><br>
<p>If you don't care, and since I'm the one making such an annoying request, I'll be happy to do the work for this one.  :-)
<br>
<p><span class="quotelev1">&gt; 5. Results are cached to keep link information between &quot;test build&quot; -&gt;&quot;mpi install&quot;; &quot;test run&quot;-&gt;&quot;test build&quot; -&gt;&quot;mpi install&quot; phases.
</span><br>
<p>Ah -- I see.  In the SQL submitter, when we submit each phase, we get an ID back to use for the next linked phase (e.g., the mpi install submit returns an ID that is used with a corresponding test build submit, etc.).  Is that not possible here?  I.e., can a submit return an ID to be used with the next submit?
<br>
<p>I ask for two reasons:
<br>
<p>1. When running a huge number of tests in MTT (like I do), it is useful to see the results start appearing in the database gradually over time rather than having to wait (potentially) many hours for all the results to appear at once.
<br>
<p>2. I actually run OMPI testing in two phases at Cisco:
<br>
<p>&nbsp;&nbsp;&nbsp;a. (mpi get + mpi install + test get + test build) for ~25 different mpi install sections
<br>
&nbsp;&nbsp;&nbsp;b. as each one of those finish, launch test run phases for each, with either ~10 or ~25 mpi details variants (depending on the specific mpi install)
<br>
<p>&nbsp;&nbsp;&nbsp;Specifically, I execute each of my test_run phases separately from all the other phases (because I have lots of them running in parallel for a given mpi install).  Hence, the test run phase needs to be able to run long after all the other phase results were submitted.
<br>
<p>I believe IU and Sun do similar things (although our MTT setups are quite different from each other, I think we have all separated the get/install/get/build stuff from test runs).
<br>
<p><span class="quotelev1">&gt; 6. Could you send detail info about the issue (ini-file, mtt.log with verbose info and command line), we will look on that.
</span><br>
<p>Let me reproduce and simplify; I was using a fairly complex ini file...  
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0463.php">Igor Ivanov: "[MTT devel] [Fwd: Re:  MTToGDS]"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0465.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
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
