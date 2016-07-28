<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 10:33:31 2007" -->
<!-- isoreceived="20070827143331" -->
<!-- sent="Mon, 27 Aug 2007 10:33:26 -0400" -->
<!-- isosent="20070827143326" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Performance Graph Notes" -->
<!-- id="CE1582C7-14B4-45E9-A9D2-F9B9847D409E_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 10:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff asked me if I would talk to Rich and folks at IU on Friday about  
<br>
the performance graphs. Below are my notes from that meeting:
<br>
<p>- It would be really useful to 'zoom' into sections of the graph.  
<br>
Primarily restricting the x-axis (Message Size), but also having the  
<br>
ability to restrict the y-axis (time)
<br>
<p>- Calling the y-axis 'latency' is a bit misleading, maybe 'time'  
<br>
would be better. Minor issue.
<br>
<p>- Torsten mentioned that he was interested in seeing the other skampi  
<br>
data that we are throwing away. Namely the time-per-rank. And if  
<br>
available communicator size.
<br>
<p>- Torsten mentioned that he wants to add some non-blocking collective  
<br>
test that he is work on. I told him to contact Jeff on how to do this.
<br>
<p>- We need a well defined way to see what collective implementation  
<br>
was used. Meaning that there are N AlltoAll collective  
<br>
implementations in the 'tuned' component we need to know when looking  
<br>
at the graph which one of the N we are looking at for Open MPI. For  
<br>
other implementations we don't have so much control.
<br>
<p>- It is difficult to search in the reporter for queries like:
<br>
----------
<br>
&nbsp;&nbsp;&nbsp;Open MPI run with only tcp,sm,self ; Intel MPI (which is only tcp  
<br>
I believe) ; MPICH2 with tcp
<br>
&nbsp;&nbsp;&nbsp;results from running the skampi Bcast benchmark.
<br>
----------
<br>
The reporter is designed to track a single MPI well for regression  
<br>
tracking. However when we need to compare multiple MPIs and each may  
<br>
need to be selected with a different type of query it is impossible/ 
<br>
hard to do.
<br>
One solution I proposed was using the 'tagging' idea, but there might  
<br>
be some alternative UI features that we can develop to better support  
<br>
these types of queries. Tim P seemed interested/had some ideas on how  
<br>
to do this.
<br>
<p>- They really liked the ability to look at the HTML version of the  
<br>
raw data. They seemed frustrated that the popup window is reused when  
<br>
looking at multiple HTML versions of the raw data. They wanted this  
<br>
to be a static window that they could keep open so they could look at  
<br>
multiple variants of this data in small screens.
<br>
<p>That was about it. They thought it was good over all, but the above  
<br>
were suggestions on ways to make the representation more useful.
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0016.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0022.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
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
