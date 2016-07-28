<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 22 11:31:58 2005" -->
<!-- isoreceived="20050722163158" -->
<!-- sent="Fri, 22 Jul 2005 12:31:56 -0400" -->
<!-- isosent="20050722163156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="MCA params: newer API" -->
<!-- id="5eaf58aec50d3504108704284cf0f3be_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-07-22 11:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Jeff Squyres: "Re:  bproc problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While wrapping my head around mind-bending shmem memory structures and 
<br>
waiting for compiles over the past few days, I revamped the MCA param 
<br>
API to both do some new things and fix things that everyone has been 
<br>
working around:
<br>
<p>- Tim has always added 2 extra &quot;register&quot; functions to every component 
<br>
so that he can register a parameter and look up its value at the same 
<br>
time.  This (register + lookup) action is now handled in one MCA param 
<br>
API function.
<br>
<p>- You can now specify a &quot;help message&quot; for each MCA parameter 
<br>
describing what it is and what valid values are.  Then, when you run 
<br>
&quot;ompi_info&quot;, each parameter is labeled with its help message -- makes 
<br>
this stuff *much* more useful to the user.
<br>
<p>- You can have &quot;read-only&quot; MCA parameters.  For example, the gm BTL can 
<br>
advertise what version of the GM library the component was linked 
<br>
against (very, very helpful for sysadmins and debugging).
<br>
<p>I'll show everyone the new API calls next week (I need to get a code 
<br>
review before I commit all this stuff).  I'm leaving in the old API 
<br>
calls for backwards compatibility so that the trunk doesn't break, but 
<br>
I will be encouraging everyone to move their components over to use the 
<br>
new API calls in the near future (this will really help reduce the 
<br>
number of questions that we get about MCA params).
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
<li><strong>Next message:</strong> <a href="0045.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0043.php">Jeff Squyres: "Re:  bproc problem"</a>
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
