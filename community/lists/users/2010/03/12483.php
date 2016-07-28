<?
$subject_val = "[OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 16:37:43 2010" -->
<!-- isoreceived="20100330203743" -->
<!-- sent="Tue, 30 Mar 2010 16:37:25 -0400" -->
<!-- isosent="20100330203725" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="[OMPI users] Best way to reduce 3D array" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF854D1BB1_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Best way to reduce 3D array<br>
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 16:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I posted before about doing a domain decomposition on a 3D array in C, and this is sort of a follow up to that.  I was able to get the calculations working correctly by performing the calculations on XZ sub-domains for all Y dimensions of the space. I think someone referred to this as a &quot;book.&quot; In the space.  Being that I now have an X starting and ending point, a Z starting and ending point, and a total number of X and Z points to visit in each direction during the computation, I am now at another hanging point.  First, some background.
<br>
<p>I am working on modifying a code that was originally written to be run serially. That being said, there is a massive amount of object oriented crap that is making this a total nightmare to work on. All of the properties that are computed for each point in the 3D mesh are stored in structures, and those structures are stored in structures, blah blah, it looks very gross. In order to speed this code up, I was able to pull out the most computationally sensitive property (potential) and get it set up in this 3D array that is allocated nicely, etc. The problem is, this code eventually outputs after all the iterations to a Tecplot format. The code to do this is very, very contrived.
<br>
<p>My idea was to, for the sake of wanting to move on, stuff back all of these XZ subdomains that I have calculated into a single array on the first processor, so it can go about its way and do the file output on the WHOLE domain. I seem to be having problems though, extracting out these SubX * SubZ * Y sized portions of the original that can be sent to the first processor. Does anyone have any examples anywhere of code that does something like that?  It appears that my 3D mesh is in X major format in memory, so I tried to create some loops to extract Y, SubZ sized columns of X to send back to the zero'th processor but I haven't had much luck yet.
<br>
<p>Any tips are appreciated...thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12482.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
