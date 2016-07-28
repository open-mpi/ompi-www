<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb 11 10:54:01 2006" -->
<!-- isoreceived="20060211155401" -->
<!-- sent="Sat, 11 Feb 2006 10:53:48 -0500" -->
<!-- isosent="20060211155348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Mtt-users] Using MTT" -->
<!-- id="BF72DA26-3A6C-4384-B27D-E8E19F5F9F1E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-11 10:53:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0001.php">Jeff Squyres: "[MTT users] Broken test build/run"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all.
<br>
<p>Andy and I talked the other day about deploying MTT for Open MPI  
<br>
testing.  We're still doing lots of active development, but it would  
<br>
be good if we could get you guys to install and run MTT (potentially  
<br>
via cron) and start submitting results back to the database.
<br>
<p>This is going to be a give-and-take process while active development  
<br>
is still occurring, so bear with us...  Here's the general plan:
<br>
<p>- Everyone needs to send me a username/password to post results (low  
<br>
security stuff, but enough to ensure that random people aren't  
<br>
submitting results to our database).  For usernames, let's go by  
<br>
institution:
<br>
<p>* iu-osl
<br>
* lanl-acl
<br>
* hlrs-? (I have no idea what Rainer's group name is :-) )
<br>
* utk-icl
<br>
<p>For a password, use the htpasswd program to create an entry for your  
<br>
username and send me the result (htpasswd is part of apache and is  
<br>
installed on many/most Linux distros).
<br>
<p>- We'll pick a &quot;stable enough&quot; r number on the mtt trunk in the not- 
<br>
distant future so that everyone can grab this version, make an ini  
<br>
file for your setup, and stuff it in a cron job.
<br>
<p>- We'll put up a &quot;stable&quot; database at a specific URL somewhere on  
<br>
www.open-mpi.org for your cron job to send its results.
<br>
<p>- Development will continue on the trunk (and a different database)  
<br>
for all the bugs that we find / features that we'll continue to develop.
<br>
<p>- We'll probably periodically need to tell everyone to update to a  
<br>
new r number on the trunk (or perhaps we'll use tag branches, or  
<br>
something similar -- we haven't even investigated making tarballs  
<br>
yet).  We'll also probably be frequently wiping the &quot;stable&quot; database  
<br>
during this development; we won't be building up much historical data  
<br>
during this process.  Hopefully having nightly runs from everyone  
<br>
will *really* help shake out the bugs and feature requests.
<br>
<p>How does this sound for a plan?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0001.php">Jeff Squyres: "[MTT users] Broken test build/run"</a>
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
