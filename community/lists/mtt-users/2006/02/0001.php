<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 21 19:47:21 2006" -->
<!-- isoreceived="20060222004721" -->
<!-- sent="Tue, 21 Feb 2006 19:47:13 -0500" -->
<!-- isosent="20060222004713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Broken test build/run" -->
<!-- id="7B05F31E-4EEF-43DF-8C03-2C28DBE3F5AC_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-21 19:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0002.php">Jeff Squyres: "[MTT users] Diagrams"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[Mtt-users] Using MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All --
<br>
<p>I re-factored some of the code today to [finally] split out the test  
<br>
source stuff into a new phase named &quot;test get&quot; (analogous to the &quot;mpi  
<br>
get&quot; phase).  This allowed for some nice code consolidation in some  
<br>
places, and more importantly, is another step towards supporting  
<br>
disconnected scenarios.
<br>
<p>See samples/sample.ini for some examples of the [Test get:] phase.   
<br>
The point is that you can specify where the test suite sources are  
<br>
located and they get downloaded once and cached (just like the MPI  
<br>
sources).  This phase also has its own command line switch on the  
<br>
&quot;mtt&quot; client (&quot;--get-test&quot;).
<br>
<p>Previously, we mixed both obtaining the test suites and building the  
<br>
test suites in the &quot;test build&quot; phase.  Now they're properly split  
<br>
apart into two phases.  So if you have old .ini files, you can  
<br>
generally create new [test get:] sections with the sources from your  
<br>
[test build:] sections and it'll be ok.  See sample.ini for examples.
<br>
<p>I unfortunately just realized that I did the linkage from the &quot;test  
<br>
get&quot; phase to the next phase (&quot;test build&quot;) entirely wrong.  :-(
<br>
<p>So if you're trying to build or run any tests with the SVN head, it  
<br>
just won't work.  You might want to roll back to before my big commit  
<br>
from this afternoon (r158 should be safe).  I'll fix the head either  
<br>
later tonight or tomorrow morning.  Sorry folks...
<br>
<p>And crud, as I was typing out this mail, I realized that the mtt  
<br>
command line options are the opposite wording of the INI file phase  
<br>
names (e.g., &quot;[MPI install:]&quot; vs. --install-mpi).  Tomorrow, I'm  
<br>
going to change the mtt command line options to be the other way  
<br>
around (--mpi-get, --mpi-install, --test-get, ...etc.).  Blah!
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
<li><strong>Next message:</strong> <a href="0002.php">Jeff Squyres: "[MTT users] Diagrams"</a>
<li><strong>Previous message:</strong> <a href="0000.php">Jeff Squyres: "[Mtt-users] Using MTT"</a>
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
