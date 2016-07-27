<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 04:13:40 2010" -->
<!-- isoreceived="20100210091340" -->
<!-- sent="Wed, 10 Feb 2010 12:12:24 +0300" -->
<!-- isosent="20100210091224" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B727878.7050905_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14085141-FE60-41A0-96A0-587CF4367792_at_cisco.com" -->
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
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 04:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hi Jeff,<br>
<br>
Some of points were touched by Mike in other mail.<br>
You can find my answers below marked as [II].<br>
<br>
Regards,<br>
Igor<br>
<br>
Jeff Squyres wrote:
<blockquote cite="mid:14085141-FE60-41A0-96A0-587CF4367792@cisco.com"
 type="cite">
  <pre wrap="">On Feb 5, 2010, at 4:56 AM, Igor Ivanov wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Thank you to start playing with one. I hope you find it is useful.
I am trying to answer questions you raised. 
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Thanks!  Sorry for the delay in my answering -- got caught up in other stuff...  Ugh!

  </pre>
  <blockquote type="cite">
    <pre wrap="">1. Yes, you are correct. The implementation uses google account authorization way to access web page only. Client applications use separate approach to communicate with datastore.
It is difficult to say what way is better from my point of view. In both ways we need to manage list of valid accounts to answer "is this username/password combo valid?" (Google does not do this task instead of us) and send username/password information from a client to application. Visible preference could exist in case web usage that was not main goal.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Gotcha.

FWIW, I think it would be (slightly) easier if we don't have to manage users' passwords on the appspot.  If the MTT client can just submit using a regular google account username+password, that would be one less thing to have to manage.  I guess I'm a little burned out from our current MTT setup where people had to bug me to reset their passwords (in a local .htaccess file) whenever they lost/forgot them.  :-)

All things being equal, you're right, of course -- a) we still have to maintain a list of google accounts who are allowed to submit/access/whatever, b) we still have to ship off a username/password combo and ask if it's valid.  But eliminating that password column from our data, IMHO, represents pushing off all account management to Google.  

Is it hard to redirect the appspot lookup to use google account names + passwords?
  </pre>
</blockquote>
[II] I believe that it is possible task. It could be done in two ways:<br>
set google account e-mail in mttdatabase_username key of ini-file<br>
1) provide for filling User.username with google account e-mail and
change code of User.check_password in file&nbsp; gds/auth/models.py to with
google account verification code<br>
code example (I have not checked one):<br>
<pre>        request_body = urllib.urlencode({'Email': username,
                                         'Passwd': raw_password,
                                         'accountType': 'HOSTED_OR_GOOGLE',
                                         'service': 'ah',
                                         'source': 'test'})
        auth_response = urlfetch.fetch('<a class="moz-txt-link-freetext" href="https://www.google.com/accounts/ClientLogin">https://www.google.com/accounts/ClientLogin</a>',
                                       method=urlfetch.POST,
                                       headers={'Content-type':'application/x-www-form-urlencoded',
                                                'Content-Length':
                                                 str(len(request_body))},
                                       payload=request_body)
        auth_response.status_code
</pre>
2) provide for filling User.emailwith google account e-mail and modify
authenticate code in auth/__init__.py with query by User.email and
implement google account verification code.<br>
Keep in mind performance difference between google account verification
code and local verification!<br>
<blockquote cite="mid:14085141-FE60-41A0-96A0-587CF4367792@cisco.com"
 type="cite">
  <pre wrap="">
  </pre>
  <blockquote type="cite">
    <pre wrap="">2. Current implementation of datastore environment is oriented on client usage way mostly and does not grant users rich web possibility. Existing web form can be considered as instrument for an administrator now.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Gotcha.  Someday someone with lots of time can write a glitzy web 2.0 interface.  ;-)

  </pre>
  <blockquote type="cite">
    <pre wrap="">There is special command line utility that allows to communicate with datastore as bquery.pl located at &lt;mtt root&gt;/src/client. It is able to do query data from datastore and view different information on console using extended (more close to sql) gql syntax that is implemented for users comfort. More detail information can be got from document as <a class="moz-txt-link-freetext" href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_bquery.doc</a>

For example: 
to get information related mpi install following command line can be used

$ ./bquery.pl --username=&lt;username&gt; --password=&lt;password&gt; --server=<a class="moz-txt-link-freetext" href="http://">http://</a>&lt;appid&gt;.appspot.com
--view --gqls="select description, mpi_path from MpiInstallPhase where duration=1" --format=txt

description                          mpi_path
----------------------------------   ----------------
Voltaire already installed MPI+OMA   /opt/openmpi/1.3
...
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Nifty -- I'll go play with this...

  </pre>
  <blockquote type="cite">
    <pre wrap="">3. In case we can collect all needed information about cluster using transparent way we should do it. ClusterInfo.pm is attempt to get info in one place in clear manner.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I ask because many of the assumptions in ClusterInfo.pm are not valid for my cluster.

  </pre>
  <blockquote type="cite">
    <pre wrap="">4. You are right it can be done.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
If you don't care, and since I'm the one making such an annoying request, I'll be happy to do the work for this one.  :-)

  </pre>
  <blockquote type="cite">
    <pre wrap="">5. Results are cached to keep link information between "test build" -&gt;"mpi install"; "test run"-&gt;"test build" -&gt;"mpi install" phases.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Ah -- I see.  In the SQL submitter, when we submit each phase, we get an ID back to use for the next linked phase (e.g., the mpi install submit returns an ID that is used with a corresponding test build submit, etc.).  Is that not possible here?  I.e., can a submit return an ID to be used with the next submit?

I ask for two reasons:

1. When running a huge number of tests in MTT (like I do), it is useful to see the results start appearing in the database gradually over time rather than having to wait (potentially) many hours for all the results to appear at once.

2. I actually run OMPI testing in two phases at Cisco:

   a. (mpi get + mpi install + test get + test build) for ~25 different mpi install sections
   b. as each one of those finish, launch test run phases for each, with either ~10 or ~25 mpi details variants (depending on the specific mpi install)

   Specifically, I execute each of my test_run phases separately from all the other phases (because I have lots of them running in parallel for a given mpi install).  Hence, the test run phase needs to be able to run long after all the other phase results were submitted.

I believe IU and Sun do similar things (although our MTT setups are quite different from each other, I think we have all separated the get/install/get/build stuff from test runs).

  </pre>
  <blockquote type="cite">
    <pre wrap="">6. Could you send detail info about the issue (ini-file, mtt.log with verbose info and command line), we will look on that.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Let me reproduce and simplify; I was using a fairly complex ini file...  

Thanks!

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4852 (20100209) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0464.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
