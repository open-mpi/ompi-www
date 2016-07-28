<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  8 10:08:18 2007" -->
<!-- isoreceived="20070308150818" -->
<!-- sent="Thu, 8 Mar 2007 10:07:49 -0500" -->
<!-- isosent="20070308150749" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] New version soon: 2.1" -->
<!-- id="7D2B68E3-4DF6-4DB4-BA27-4C0D501ED7FA_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-08 10:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Ethan Mallove: "[MTT users] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Ethan Mallove: "Re: [MTT users] [Important] milliways downtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heads up for MTT users: we'll shortly be rolling out MTT v2.1,  
<br>
probably within the next few weeks.  Unless anyone objects, we'll  
<br>
continue with the &quot;deploy to ompi-core-testers SVN branch&quot; strategy.   
<br>
Someday we'll release actual tarballs, but since MTT has a limited  
<br>
audience at the moment, this deploy-though-SVN scheme seems to work  
<br>
well enough.
<br>
<p>You shouldn't notice much of a change -- your current INI files  
<br>
should continue to work fine.  No URL changes for submission should  
<br>
be required.  Here's a summary list of changes to the client for v2.1:
<br>
<p>- Ability to specify multiple proxy servers for HTTP/S downloads, SVN  
<br>
downloads, and MTT Database HTTP/S uploads.
<br>
<p>- Proxy MTT database server to enable at least some disconnected  
<br>
scenarios (e.g., IU/Big Red).
<br>
<p>- Simple MTT locking server to enable reliably locking  
<br>
$HOME/.subversion/servers (possibly to be used more extensively in  
<br>
the future).
<br>
<p>- Ability for OMPI developers to run MTT on their development trees  
<br>
and get a prettyprint report without submitting to the MTT database.
<br>
<p>- A bunch of new funclets that are helpful for, among other things,  
<br>
finer-grained control over tests that are built/run based on which  
<br>
MPI Get section it is referring to.
<br>
<p>- Ability to specify (in the INI file) which hosts tests ran on, as  
<br>
opposed to the hostname where the results were submitted from.
<br>
<p>- Various bug fixes and improvements.
<br>
<p>We continue to expand the MTT documentation on the wiki as time  
<br>
permits.  Please feel free to help us out!  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Ethan Mallove: "[MTT users] MTT server error (user: ibm)"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Ethan Mallove: "Re: [MTT users] [Important] milliways downtime"</a>
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
