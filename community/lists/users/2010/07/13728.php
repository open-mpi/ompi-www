<?
$subject_val = "Re: [OMPI users] Partitioning problem set data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 12:09:14 2010" -->
<!-- isoreceived="20100721160914" -->
<!-- sent="Wed, 21 Jul 2010 12:08:57 -0400" -->
<!-- isosent="20100721160857" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Partitioning problem set data" -->
<!-- id="OF8559B1E7.21A6F76C-ON85257767.00581E41-85257767.0058B623_at_us.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimXw6J6OiiZFIPJ76d7bz5MiwFuDCi86eXDsSsr_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Partitioning problem set data<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 12:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13727.php">Jeff Squyres: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>In reply to:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI Standard (in my opinion) should have avoided the word &quot;buffer&quot;. To 
<br>
me, a &quot;buffer&quot; is something you set aside as scratch space between the 
<br>
application data structures and the communication calls. 
<br>

<br>
In MPI, the communication is done directly from/to the application's data 
<br>
structures and there are no &quot;buffers&quot; needed.  The point of MPI_Datatypes 
<br>
is their ability to describe the layout of the data in the application 
<br>
data structure so an MPI_Scatter(), for example, can operate directly.
<br>

<br>
This saves any need to allocate contiguous scratch buffers and do packing 
<br>
to send and unpacking after receive.
<br>

<br>

<br>
Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>

<br>

<br>

<br>

<br>
From:
<br>
Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt;
<br>
To:
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:
<br>
07/21/2010 11:19 AM
<br>
Subject:
<br>
Re: [OMPI users] Partitioning problem set data
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>

<br>

<br>

<br>
Hey Bill,
<br>

<br>
I took a look at the documentation for MPI_Scatter(), but I noticed that 
<br>
you need buffers to use it. My supervisor wasn't really happy with using 
<br>
buffers, and for that reason the code that I am writing is only using 
<br>
blocking routines, which will make my life a tad bit harder due to the 
<br>
fact that i have to avoid a deadlock, i believe it's called. I know it 
<br>
might not make sense due to the way MPI works, but is there any 
<br>
Scatter-like function that does not use buffers? 
<br>

<br>
NB: I haven't looked through that book yet, so i am not sure whether they 
<br>
provide any non-buffer examples.
<br>

<br>
Alex
<br>

<br>
On Wed, Jul 21, 2010 at 10:48 AM, Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; wrote:
<br>
Depending on the datatype and its order in memory, the &#226;&#128;&#156;Block,*&#226;&#128;&#157; and 
<br>
&#226;&#128;&#156;*,Block&#226;&#128;&#157; (which we used to call &#226;&#128;&#156;slabs&#226;&#128;&#157; in 3D) may be implemented by a 
<br>
simple scatter/gather call in MPI.   The &#226;&#128;&#156;Block,Block&#226;&#128;&#157; distribution is a 
<br>
little more complex, but if you take advantage of MPI&#226;&#128;&#153;s derived datatypes, 
<br>
you may be able to reference an arbitrary 3D sub-space as a single data 
<br>
entity and then use gather/scatter with that.
<br>
&nbsp;
<br>
I recommend that look through some of the examples in &#226;&#128;&#156;MPI &#226;&#128;&#147; The Complete 
<br>
Reference (Vol. 1)&#226;&#128;&#157; by Snir, et.al. for use of  MPI_Gather(), 
<br>
MPI_Scatter(), as well as the section on user-defined datatypes.  Section 
<br>
5.2 of &#226;&#128;&#156;Using MPI&#226;&#128;&#157; by Gropp, Lusk and Skjellum has an example code for an 
<br>
N-Body Problem which you may find useful.
<br>
&nbsp;
<br>
Hope this helps. 
<br>
&nbsp;
<br>
-bill
<br>
&nbsp;
<br>
&nbsp;
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On 
<br>
Behalf Of Alexandru Blidaru
<br>
Sent: Tuesday, July 20, 2010 10:54 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Partitioning problem set data
<br>
&nbsp;
<br>
If there is an already existing implementation of the *Block or Block* 
<br>
methods that splits the array and sends the individual pieces to 
<br>
the proper nodes, can you point me to it please? 
<br>
On Tue, Jul 20, 2010 at 9:52 AM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt; 
<br>
wrote:
<br>
Hi,
<br>
&nbsp;
<br>
I have a 3D array, which I need to split into equal n parts, so that each 
<br>
part would run on a different node. I found the picture in the attachment 
<br>
from this website (
<br>
<a href="https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning">https://computing.llnl.gov/tutorials/parallel_comp/#DesignPartitioning</a>) on 
<br>
the different ways to partition data. I am interested in the block 
<br>
methods, as the cyclic methods wouldn't really work for me at all. 
<br>
Obviously the *, BLOCK and the BLOCK, * methods would be really easy to 
<br>
implement for 3D arrays, assuming that the 2D picture would be looking at 
<br>
the array from the top. My question is if there are other better ways to 
<br>
do it from a performance standpoint?
<br>
&nbsp;
<br>
Thanks for your replies,
<br>
Alex
<br>
&nbsp;
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13727.php">Jeff Squyres: "Re: [OMPI users] openmpi v1.5?"</a>
<li><strong>In reply to:</strong> <a href="13724.php">Alexandru Blidaru: "Re: [OMPI users] Partitioning problem set data"</a>
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
