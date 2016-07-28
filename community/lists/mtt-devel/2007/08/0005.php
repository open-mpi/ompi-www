<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 14:38:52 2007" -->
<!-- isoreceived="20070824183852" -->
<!-- sent="Fri, 24 Aug 2007 14:38:28 -0400" -->
<!-- isosent="20070824183828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Testing of perf bakeoff template INI" -->
<!-- id="89395842-73F8-450C-A2F4-71DD14EDF2C8_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-24 14:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Jeff Squyres: "[MTT devel] Thoughts on tagging..."</a>
<li><strong>Previous message:</strong> <a href="0004.php">Josh Hursey: "[MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh asked me to send some details on the &quot;collectives performance  
<br>
bakeoff&quot; INI template file that its in the jms branch samples/ompi- 
<br>
core-perf-testing.ini.  Here's the scoop:
<br>
<p>&nbsp;&nbsp;* As usual, this is a template.  There are values that you will  
<br>
need to fill in (e.g., the MTT database username/password, the MPICH- 
<br>
MX username/password, etc.), and values that you will need to tweak  
<br>
for your site.
<br>
<p>&nbsp;&nbsp;* The easy part: the test get, build, and run sections are for the  
<br>
following tests: netpipe, OSU, IMB, and SKaMPI.  It's actually a far  
<br>
smaller test set than we run for regression / correctness testing.   
<br>
The SKaMPI tests that are there right now are preliminary; Jelena  
<br>
will be making up a new set next week sometime.  But testing with  
<br>
what is there now is still most useful (to verify MTT's functionality).
<br>
<p>&nbsp;&nbsp;* I added support for many more MPI's to MTT; this is what has  
<br>
consumed the majority of my time this week.  Here's the MPI's that we  
<br>
currently support:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Open MPI (of course)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MPICH1, MPICH2 (still waiting on word on a legal issue about a  
<br>
patch for MPICH1 to run properly under SLURM)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MVAPICH1, MVAPICH2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Intel MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- HP MPI (should be done this afternoon)
<br>
<p>&nbsp;&nbsp;* Other MPIs that will likely not be difficult to add (I do not  
<br>
have access to do the work myself):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Scali MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Cray MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- MPICH-MX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- CT6 / CT7
<br>
<p>&nbsp;&nbsp;* The MPI get's should be trivial; they're all public (except for  
<br>
MPICH-MX).
<br>
<p>&nbsp;&nbsp;* The MPI installs should all build the most optimal version of the  
<br>
MPI possible (e.g., see OMPI and MPICH2's MPI Install sections).
<br>
<p>&nbsp;&nbsp;* Note that there's some &quot;weird&quot; stuff for MPICH2 and Intel MPI.   
<br>
See the comments in the ini file for explanations.
<br>
<p>&nbsp;&nbsp;* If you're not using SLURM, you'll need before_any_exec /  
<br>
after_all_exec sections like Intel MPI's MPI Details for MPICH2 and  
<br>
MVAPICH2.  Also note the setenv in Intel MPI's MPI Install section --  
<br>
I don't know offhand if that'll work for vanilla MPICH2 or whether  
<br>
that was something the Intel MPI team added to mpd.
<br>
<p>Basically, we want to see if the organizations can take this template  
<br>
and run with it to get performance results back to the MTT database  
<br>
(even with just 2 MPI processes).
<br>
<p>Let me know if you have any questions / problems.
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
<li><strong>Next message:</strong> <a href="0006.php">Jeff Squyres: "[MTT devel] Thoughts on tagging..."</a>
<li><strong>Previous message:</strong> <a href="0004.php">Josh Hursey: "[MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
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
