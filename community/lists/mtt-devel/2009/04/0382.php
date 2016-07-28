<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 10:04:52 2009" -->
<!-- isoreceived="20090414140452" -->
<!-- sent="Tue, 14 Apr 2009 10:04:47 -0400" -->
<!-- isosent="20090414140447" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="E79F65FC-69E0-4786-B19B-C64529074D32_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800904131108n4b83bdaeod03a0e198ab801a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 10:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2009, at 2:08 PM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ethan,
</span><br>
<p>Sorry for joining the discussion late... I was on travel last week and  
<br>
that always makes me waaay behind on my INBOX.  :-(
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 13, 2009 at 5:44 PM, Ethan Mallove  
</span><br>
<span class="quotelev1">&gt; &lt;ethan.mallove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will this translate to something like
</span><br>
<span class="quotelev1">&gt; lib/MTT/Reporter/GoogleDatabase.pm?  If we are to move away from the
</span><br>
<span class="quotelev1">&gt; current MTT Postgres database, we want to be able to submit results to
</span><br>
<span class="quotelev1">&gt; both the current MTT database and the new Google database during the
</span><br>
<span class="quotelev1">&gt; transition period. Having a GoogleDatabase.pm would make this easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we should keep both storage options: current postgress and  
</span><br>
<span class="quotelev1">&gt; datastore. The mtt changes will be minor to support datastore.
</span><br>
<span class="quotelev1">&gt; Due that fact that google appengine API (as well as datastore API)  
</span><br>
<span class="quotelev1">&gt; can be python or java only, we will create external scripts to  
</span><br>
<span class="quotelev1">&gt; manipulate datastore objects:
</span><br>
<p>Ah, good point (python/java not perl).  But I think that lib/MTT/ 
<br>
Reporter/GoogleDataStore.pm could still be a good thing -- we have  
<br>
invested a lot of time/effort into getting our particular mtt clients  
<br>
setup just the way we want them, setting up INI files, submitting to  
<br>
batch schedulers, etc.
<br>
<p>A GoogleDataStore.pm reporter could well fork/exec a python/java  
<br>
executable to do the actual communication/storing of the data,  
<br>
right...?  More below.
<br>
<p><span class="quotelev1">&gt; The mtt will dump test results in xml format. Then, we provide two  
</span><br>
<span class="quotelev1">&gt; python (or java?) scripts:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mtt-results-submit-to-datastore.py - script will be called at the  
</span><br>
<span class="quotelev1">&gt; end of mtt run and will read xml files, create objects and save to  
</span><br>
<span class="quotelev1">&gt; datastore
</span><br>
<p>Could be pretty easy to have a Reporter/GDS.pm (I keep making that  
<br>
filename shorter, don't I? :-) ) that simply invokes the mtt-result- 
<br>
submit-to-datastore.pt script on the xml that it dumped for that  
<br>
particular test.
<br>
<p>Specifically: I do like having partial results submitted while my MTT  
<br>
tests are running.  Cisco's testing cycle is about 24 hours, but  
<br>
groups of tests are finishing all the time, so it's good to see those  
<br>
results without having to wait the full 24 hours before anything shows  
<br>
up.  I guess that's my only comment on the idea of having a script  
<br>
that traverses the MTT scratch to find / submit everything -- I'd  
<br>
prefer if we kept the same Reporter idea and used an underlying .py  
<br>
script to submit results as they become ready.
<br>
<p>Is this do-able?
<br>
<p><span class="quotelev1">&gt; mtt-results-query.py - sample script to query datastore and generate  
</span><br>
<span class="quotelev1">&gt; some simple visual/tabular reports. It will serve as tutorial for  
</span><br>
<span class="quotelev1">&gt; howto access mtt data from scripts for reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Later, we add another script to replace php web frontend. It will be  
</span><br>
<span class="quotelev1">&gt; hosted on google appengine machines and will provide web viewer for  
</span><br>
<span class="quotelev1">&gt; mtt results. (same way like index.php does today)
</span><br>
<p>Sounds good.
<br>
<p><span class="quotelev2">&gt; &gt;      b. mtt_save_to_db.py - script which will go over mtt scratch  
</span><br>
<span class="quotelev1">&gt; dir, find
</span><br>
<span class="quotelev2">&gt; &gt;      all xml files generated for every mtt phase, parse it and  
</span><br>
<span class="quotelev1">&gt; save to
</span><br>
<span class="quotelev2">&gt; &gt;      datastore, preserving test results relations,i.e. all test  
</span><br>
<span class="quotelev1">&gt; results will
</span><br>
<span class="quotelev2">&gt; &gt;      be grouped by mtt general info: mpi version, name, date, ....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      c. same script can scan, parse and save from xml files  
</span><br>
<span class="quotelev1">&gt; generated by
</span><br>
<span class="quotelev2">&gt; &gt;      wrapper scripts for non mtt based executions (fluent, ..)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confused here.  Can't MTT be outfitted to report results of a
</span><br>
<span class="quotelev1">&gt; Fluent run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we can enhance mtt to be not only mpi testing platform, but  
</span><br>
<span class="quotelev1">&gt; also to serve as mpi benchmarking platform. We can use datastore to  
</span><br>
<span class="quotelev1">&gt; keep mpi-based benchmarking results in the same manner like mtt does  
</span><br>
<span class="quotelev1">&gt; for testing results. (no changes to mtt required for that, it is  
</span><br>
<span class="quotelev1">&gt; just a side effect of using datastore to keep data of any type)
</span><br>
<p>I think that Ethan was asking was: can't MTT run Fluent and then use  
<br>
the normal Reporter mechanism to report the results into whatever back- 
<br>
end data store we have?  (postgres or GDS)
<br>
<p>I can see the value of both sides -- a) using the MTT client as the  
<br>
gateway to *all* data storage, or b) making MTT but one (possibly of  
<br>
many) tools that can write into the GDS.  a) certainly is more  
<br>
attractive towards having a common data format back in GDS such that a  
<br>
single web tool is capable of reporting from the data and being able  
<br>
to make conherent sense out of the data (vs. 3rd party tools that put  
<br>
data back in GDS that may not be in exactly the same format / layout  
<br>
and therefore our web reporter may not be able to make sense out of  
<br>
the data and report on it).
<br>
<p>I think that having a Reporter/GDS.pm that system()'s the back-end  
<br>
python script gives the best of both worlds -- the MTT client can  
<br>
[continue to] submit results in the normal way, but there's also a  
<br>
standalone script that can submit results from external tool runs  
<br>
(e.g., manually running Fluent, parsing the results, and submitting to  
<br>
our GDS).  And hopefully the back-end python script will enforce a  
<br>
specific structure to the data that is submitted so that all tools --  
<br>
MTT and any 3rd party tools -- adhere to the same format and the  
<br>
reporter can therefore report on it coherently.
<br>
<p>For the attachment...
<br>
<p>I can &quot;sorta read&quot; python, but I'm not familiar with its intricacies  
<br>
and its internal APIs.
<br>
<p>- models.py: looks good.  I don't know if *all* the fields we have are  
<br>
listed here; it looks fairly short to me.  Did you attempt to include  
<br>
all of the fields we submit through the various phases in Reporter are  
<br>
there, or did you intentionally leave some out?  (I honestly haven't  
<br>
checked; it just &quot;feels short&quot; to me compared to our SQL schema).
<br>
<p>--&gt; meta question: is it in the zen of GDS to not have too many index  
<br>
fields like you would in SQL?  I.e., if you want to do an operation on  
<br>
GDS that you would typically use an SQL index field for, is the idea  
<br>
that you would do a map/reduce to select the data instead of an index  
<br>
field?
<br>
<p>- start_datastore.sh: hmm.  This script seems to imply that the  
<br>
datastore is *local*!  Don't we have to HTTP submit the results to  
<br>
Google?  More specifically: what is dev_appserver.py?  Is that,  
<br>
perchance, just a local proxy agent that will end up submitting our  
<br>
data to $datastore_path, which actually resides at Google?  Do we have  
<br>
to use a specific google username/URL to submit (and query) results?
<br>
<p>- there's no comments in vbench-dev.py -- can you explain what's going  
<br>
on in there?  Can you explain how we would use these scripts?
<br>
<p>- it *looks* like these scripts are for storing data out in the GDS.   
<br>
Have you looked at the querying side?  Do we know that storing data in  
<br>
the form you listed in models.py are easily retrievable in the ways  
<br>
that we want?  E.g., can you mock up queries that resemble the queries  
<br>
we currently have in our web-based query system today, just to show  
<br>
that storing the data in this way will actually allow us to do the  
<br>
kinds of queries that we want to do?
<br>
<p>In short: I think I'm missing much of the back-story / rationale of  
<br>
how the scripts in your tarball work / are to be used.
<br>
<p>BTW -- if it's useful to have a teleconference about this kind of  
<br>
stuff, I can host a WebEx meeting.  WebEx has local dialins around the  
<br>
world, including Israel...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0381.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0381.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="0383.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
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
