<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  4 16:50:11 2006" -->
<!-- isoreceived="20060104215011" -->
<!-- sent="Wed, 4 Jan 2006 16:50:04 -0500" -->
<!-- isosent="20060104215004" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Debugging changes tonight" -->
<!-- id="CE647BB4-A2F0-4AF2-9235-F47CFCF92A9C_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-04 16:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Greg Watson: "configure issue"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Craig Rasmussen: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all -
<br>
<p>Just a quick heads up about 3 changes I'm planning on committing  
<br>
tonight (unless someone speaks up to the contrary).
<br>
<p>First, I noticed that while we support using Solaris threads to  
<br>
launch / cancel / etc. threads, we don't use Solaris mutexes for the  
<br>
back end to our opal_mutex_t.  I added the code to do this, and  
<br>
cleaned up the pthreads / spinlock code just a bit to make it  
<br>
slightly easier to maintain.
<br>
<p>Second, if the pthreads implementation in use supports error checking  
<br>
mutexes and debugging is enabled, we will use error checking mutexes  
<br>
instead of normal mutexes.  Error checking mutexes are generally  
<br>
slower than normal mutexes, but provide the ability to detect a  
<br>
couple of situations we've run into in the past couple months:  
<br>
calling lock from a thread that already has the lock and calling  
<br>
unlock from a thread other than the one that locked the mutex.  If  
<br>
either situation is detected, the opal_mutex code will print a  
<br>
warning and call abort().  With change #3, on Linux a stack trace  
<br>
will also be displayed.
<br>
<p>Third is moving the stacktrace init code from ompi to opal so that  
<br>
opal and orte processes will also print a stack trace when a process  
<br>
receives one of the registered signals.  I also added SIGABRT to the  
<br>
list, as it seemed useful to have a stack trace when we called abort().
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0651.php">Greg Watson: "configure issue"</a>
<li><strong>Previous message:</strong> <a href="0649.php">Craig Rasmussen: "Re:  debugging methods"</a>
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
