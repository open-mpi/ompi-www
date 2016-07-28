<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 12:49:45 2007" -->
<!-- isoreceived="20071008164945" -->
<!-- sent="Mon, 8 Oct 2007 18:49:37 +0200" -->
<!-- isosent="20071008164937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Adding libnbc performance Performance Analyze module for MTT" -->
<!-- id="AF3A4A3F-0EC4-4F16-88FC-411CEAC7C144_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-08 12:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Reply:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan/Josh --
<br>
<p>Torsten's libnbc benchmark program outputs a whole bunch of numbers  
<br>
that we are not currently recording.  Essentially, it outputs a fixed  
<br>
number of double precision numbers for each message size (each of  
<br>
which has a different meaning).  We obviously currently cannot record  
<br>
all of these numbers in the database.
<br>
<p>Torsten will come find Josh when he returns to IU to discuss if it  
<br>
would be easy/hard to store this stuff in the database -- that would  
<br>
be the first step.  Next we will need to update submit.php and the  
<br>
client to submit the data properly and then store it in the DB.   
<br>
Finally, we will need to update the reporter to visualize this  
<br>
information in a new way (it's more than just standard latency/ 
<br>
bandwidth information).
<br>
<p>There is no immediate need to get this all done, but it should be  
<br>
added to the &quot;to do&quot; list to eventually get done.  I'll file a ticket  
<br>
about it.
<br>
<p>I think that this is different than the SKaMPI storage problem  
<br>
because the number of values that are output for each message size is  
<br>
fixed (the extended SKaMPI output has a number for each MPI  
<br>
process).  So I *think* it should be fairly easy to add a new table  
<br>
for libnbc data in the database...?
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
<li><strong>Next message:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>Reply:</strong> <a href="0157.php">Josh Hursey: "Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
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
