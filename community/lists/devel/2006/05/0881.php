<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 21:49:01 2006" -->
<!-- isoreceived="20060518014901" -->
<!-- sent="Wed, 17 May 2006 21:48:54 -0400" -->
<!-- isosent="20060518014854" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] New bug tracker" -->
<!-- id="65D45C24-97D3-4542-ADE8-D55CF9782351_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-05-17 21:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
<li><strong>Previous message:</strong> <a href="0880.php">George Bosilca: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
<li><strong>Maybe reply:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>We've finally got a bug tracker running again.  Since RT had some  
<br>
problems that we couldn't figure out how to work around (namely,  
<br>
sending tons and tons of e-mail when ticket status changed) and it's  
<br>
interface made it difficult to generate custom queries, we decided to  
<br>
look for other options.  After some searching, it seemed that a  
<br>
project called Trac would give us what we were looking for, and has  
<br>
some nice integration with Subversion.
<br>
<p>The new URL for our bug tracker is:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi">https://svn.open-mpi.org/trac/ompi</a>
<br>
<p>By default, you will see the anonymous view, which basically allows  
<br>
you to do nothing more than see the open bugs in the system.  If you  
<br>
click on the &quot;login&quot; button and use your SVN username / password, you  
<br>
will be able to file bugs and see more information about the current  
<br>
state of the SVN repository.  As we discussed, only developers with  
<br>
SVN access can create or modify bugs.  In the future, this may  
<br>
change, of course.
<br>
<p>Using the system is pretty self explanatory.  One thing I should  
<br>
point out is that a &quot;milestone&quot; is an upcoming release for which the  
<br>
bug must be fixed / implemented / etc.  A &quot;version&quot; on the other  
<br>
hand, is where the bug was discovered.
<br>
<p>By default, the only people who are some how participating in the bug  
<br>
(either by creating it, being assigned the bug, or have added  
<br>
themselves to the cc list) will receive e-mail notification on  
<br>
change.  If you want to receive an e-mail whenever any bug in the  
<br>
system changes, you can re-subscribe to the bugs_at_open-mpi mailing list.
<br>
<p>There are some nice reports that you can view to get information on  
<br>
current bugs.  These include:
<br>
<p>&nbsp;&nbsp;&nbsp;- tickets without owners
<br>
&nbsp;&nbsp;&nbsp;- &quot;my&quot; open tickets
<br>
&nbsp;&nbsp;&nbsp;- tickets for each milestone
<br>
<p>It's quite easy to add new reports, so if you have ideas on what you  
<br>
would like to see, please let me know.  Jeff has already suggested a  
<br>
milestone view that only shows bug reports (as opposed to bug reports  
<br>
+ feature requests).  I'll probably add that in the next day or two.
<br>
<p>Right now, we're still playing around with the integration between  
<br>
Trac and Subversion.  But it should be possible to change the status  
<br>
of a ticket from a SVN commit message.  It's also possible to  
<br>
associate a commit with a particular bug number by adding something  
<br>
like &quot;ticket:1&quot; (without the quotes) to your commit message to  
<br>
associate the commit with ticket # 1.  The ticket will automatically  
<br>
be updated to reflect the connection.
<br>
<p>I'll add bugs as they come in on the users and devel mailing lists.   
<br>
I'll also be hounding people to pick up unassigned bugs.  For now,  
<br>
plan on receiving e-mails about unassigned bugs on Mondays and then  
<br>
hearing about them on the weekly telecon ;).  Please let me know if  
<br>
you have any questions about the bug tracker.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
<li><strong>Previous message:</strong> <a href="0880.php">George Bosilca: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
<li><strong>Maybe reply:</strong> <a href="0882.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] New bug tracker"</a>
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
