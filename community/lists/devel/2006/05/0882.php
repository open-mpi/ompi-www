<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 21:56:14 2006" -->
<!-- isoreceived="20060518015614" -->
<!-- sent="Wed, 17 May 2006 21:56:13 -0400" -->
<!-- isosent="20060518015613" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New bug tracker" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF880D9B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] New bug tracker" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-17 21:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0883.php">Ralf Wildenhues: "[OMPI devel] tiny Fortran 90 nit"</a>
<li><strong>Previous message:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
<li><strong>Maybe in reply to:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian --
<br>
<p>This is most excellent.  Thanks for all the work to set it up! 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 17, 2006 9:49 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] New bug tracker
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've finally got a bug tracker running again.  Since RT had some  
</span><br>
<span class="quotelev1">&gt; problems that we couldn't figure out how to work around (namely,  
</span><br>
<span class="quotelev1">&gt; sending tons and tons of e-mail when ticket status changed) and it's  
</span><br>
<span class="quotelev1">&gt; interface made it difficult to generate custom queries, we 
</span><br>
<span class="quotelev1">&gt; decided to  
</span><br>
<span class="quotelev1">&gt; look for other options.  After some searching, it seemed that a  
</span><br>
<span class="quotelev1">&gt; project called Trac would give us what we were looking for, and has  
</span><br>
<span class="quotelev1">&gt; some nice integration with Subversion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The new URL for our bug tracker is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi">https://svn.open-mpi.org/trac/ompi</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By default, you will see the anonymous view, which basically allows  
</span><br>
<span class="quotelev1">&gt; you to do nothing more than see the open bugs in the system.  If you  
</span><br>
<span class="quotelev1">&gt; click on the &quot;login&quot; button and use your SVN username / 
</span><br>
<span class="quotelev1">&gt; password, you  
</span><br>
<span class="quotelev1">&gt; will be able to file bugs and see more information about the current  
</span><br>
<span class="quotelev1">&gt; state of the SVN repository.  As we discussed, only developers with  
</span><br>
<span class="quotelev1">&gt; SVN access can create or modify bugs.  In the future, this may  
</span><br>
<span class="quotelev1">&gt; change, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the system is pretty self explanatory.  One thing I should  
</span><br>
<span class="quotelev1">&gt; point out is that a &quot;milestone&quot; is an upcoming release for which the  
</span><br>
<span class="quotelev1">&gt; bug must be fixed / implemented / etc.  A &quot;version&quot; on the other  
</span><br>
<span class="quotelev1">&gt; hand, is where the bug was discovered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By default, the only people who are some how participating in 
</span><br>
<span class="quotelev1">&gt; the bug  
</span><br>
<span class="quotelev1">&gt; (either by creating it, being assigned the bug, or have added  
</span><br>
<span class="quotelev1">&gt; themselves to the cc list) will receive e-mail notification on  
</span><br>
<span class="quotelev1">&gt; change.  If you want to receive an e-mail whenever any bug in the  
</span><br>
<span class="quotelev1">&gt; system changes, you can re-subscribe to the bugs_at_open-mpi 
</span><br>
<span class="quotelev1">&gt; mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are some nice reports that you can view to get information on  
</span><br>
<span class="quotelev1">&gt; current bugs.  These include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    - tickets without owners
</span><br>
<span class="quotelev1">&gt;    - &quot;my&quot; open tickets
</span><br>
<span class="quotelev1">&gt;    - tickets for each milestone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's quite easy to add new reports, so if you have ideas on what you  
</span><br>
<span class="quotelev1">&gt; would like to see, please let me know.  Jeff has already suggested a  
</span><br>
<span class="quotelev1">&gt; milestone view that only shows bug reports (as opposed to bug 
</span><br>
<span class="quotelev1">&gt; reports  
</span><br>
<span class="quotelev1">&gt; + feature requests).  I'll probably add that in the next day or two.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, we're still playing around with the integration between  
</span><br>
<span class="quotelev1">&gt; Trac and Subversion.  But it should be possible to change the status  
</span><br>
<span class="quotelev1">&gt; of a ticket from a SVN commit message.  It's also possible to  
</span><br>
<span class="quotelev1">&gt; associate a commit with a particular bug number by adding something  
</span><br>
<span class="quotelev1">&gt; like &quot;ticket:1&quot; (without the quotes) to your commit message to  
</span><br>
<span class="quotelev1">&gt; associate the commit with ticket # 1.  The ticket will automatically  
</span><br>
<span class="quotelev1">&gt; be updated to reflect the connection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll add bugs as they come in on the users and devel mailing lists.   
</span><br>
<span class="quotelev1">&gt; I'll also be hounding people to pick up unassigned bugs.  For now,  
</span><br>
<span class="quotelev1">&gt; plan on receiving e-mails about unassigned bugs on Mondays and then  
</span><br>
<span class="quotelev1">&gt; hearing about them on the weekly telecon ;).  Please let me know if  
</span><br>
<span class="quotelev1">&gt; you have any questions about the bug tracker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0883.php">Ralf Wildenhues: "[OMPI devel] tiny Fortran 90 nit"</a>
<li><strong>Previous message:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
<li><strong>Maybe in reply to:</strong> <a href="0881.php">Brian Barrett: "[OMPI devel] New bug tracker"</a>
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
