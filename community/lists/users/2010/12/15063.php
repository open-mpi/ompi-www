<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 09:20:02 2010" -->
<!-- isoreceived="20101210142002" -->
<!-- sent="Fri, 10 Dec 2010 09:19:55 -0500" -->
<!-- isosent="20101210141955" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="OFA1F8548A.6D7883EF-ON852577F5.004DDA51-852577F5.004EBB0B_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="09F12D63-50AF-4A22-BE9B-9B2DA0037B90_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 09:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Maybe reply:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems to me the MPI_Get_processor_name description is too ambiguous to 
<br>
make this 100% portable.  I assume most MPI implementations simply use the 
<br>
hostname so all processes on the same host will return the same string. 
<br>
The suggestion would work then.
<br>
<p>However, it would also be reasonable for an MPI  that did processor 
<br>
binding to return &quot; hostname.socket#.core#&quot; so every rank would have a 
<br>
unique processor name.
<br>
<p>The extension idea is a bit at odds with the idea that MPI is an 
<br>
architecture independent API.  That does not rule out the option if there 
<br>
is a good use case but it does raise the bar just a bit.
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
12/10/2010 08:00 AM
<br>
Subject:
<br>
Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single 
<br>
machine?
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>Ick - I agree that's portable, but truly ugly.
<br>
<p>Would it make sense to implement this as an MPI extension, and then 
<br>
perhaps propose something to the Forum for this purpose?
<br>
<p>Just hate to see such a complex, time-consuming method when the info is 
<br>
already available on every process.
<br>
<p>On Dec 10, 2010, at 3:36 AM, Terry Dontje wrote:
<br>
<p>A more portable way of doing what you want below is to gather each 
<br>
processes processor_name given by MPI_Get_processor_name, have the root 
<br>
who gets this data assign unique numbers to each name and then scatter 
<br>
that info to the processes and have them use that as the color to a 
<br>
MPI_Comm_split call.  Once you've done that you can do a MPI_Comm_size to 
<br>
find how many are on the node and be able to send to all the other 
<br>
processes on that node using the new communicator. 
<br>
<p>Good luck,
<br>
<p>--td
<br>
On 12/09/2010 08:18 PM, Ralph Castain wrote: 
<br>
The answer is yes - sort of...
<br>
<p>In OpenMPI, every process has information about not only its own local 
<br>
rank, but the local rank of all its peers regardless of what node they are 
<br>
on. We use that info internally for a variety of things.
<br>
<p>Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this time. If 
<br>
that doesn't matter, then I can tell you how to get it - it's pretty 
<br>
trivial to do.
<br>
<p><p>On Dec 9, 2010, at 6:14 PM, David Mathog wrote:
<br>
<p><p>Is it possible through MPI for a worker to determine:
<br>
<p>&nbsp;1. how many MPI processes are running on the local machine
<br>
&nbsp;2. within that set its own &quot;local rank&quot;
<br>
<p>? 
<br>
<p>For instance, a quad core with 4 processes might be hosting ranks 10,
<br>
14, 15, 20, in which case the &quot;local ranks&quot; would be 1,2,3,4.  The idea
<br>
being to use this information so that a program could selectively access
<br>
different local resources.  Simple example: on this 4 worker machine
<br>
reside telephone directories for Los Angeles, San Diego, San Jose, and
<br>
Sacramento.  Each worker is to open one database and search it when the
<br>
master sends a request.  With the &quot;local rank&quot; number this would be as
<br>
easy as naming the databases file1, file2, file3, and file4.  Without it
<br>
the 4 processes would have to communicate with each other somehow to
<br>
sort out which is to use which database.  And that could get ugly fast,
<br>
especially if they don't all start at the same time.
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
-- 
&lt;Mail Attachment.gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>Previous message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15065.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Maybe reply:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
