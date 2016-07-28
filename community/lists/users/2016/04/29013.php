<?
$subject_val = "[OMPI users] track progress of a mpi gather";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 07:05:07 2016" -->
<!-- isoreceived="20160424110507" -->
<!-- sent="Sun, 24 Apr 2016 12:05:05 +0100" -->
<!-- isosent="20160424110505" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] track progress of a mpi gather" -->
<!-- id="CADsB1iD=hupoZ5LdVRyUVsWpByx8rzUSFDnr0DOhpp0nnZbY4g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] track progress of a mpi gather<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 07:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>With a miniature case of 3 linux quadcore boxes, linked via 1Gbit Ethernet,
<br>
I have a UI that runs on 1 of the 3 boxes, and that is the root of the
<br>
communicator.
<br>
I have a 1-second-running function on up to 10 parameters, my parameter
<br>
space fits in the memory of the root, the space of it is N ~~ 1 million.
<br>
<p>I use broadcast/scatter/gather to collect the value of my function on each
<br>
of the 1million points, dividing 1million by the number of nodes (11:
<br>
rootnode has 1 core/thread assigned to the UI, 1 core/thread for its
<br>
evaluation of the function on its own part of the parameter space and 2
<br>
other cores run non-root nodes, and the 2 other boxes all run non-root
<br>
nodes)
<br>
<p>the rootnode does:
<br>
1. broadcast needed data
<br>
2. scatter param space
<br>
3. evaluate function locally
<br>
4. gather results from this and all other nodes
<br>
<p>How would I go about having the non-root nodes send a sort of progress
<br>
status to the root node? that's used for plotting results on the root box
<br>
as soon as they are available?
<br>
<p>Rds,
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Previous message:</strong> <a href="29012.php">Gilles Gouaillardet: "Re: [OMPI users] MPIRUN SEGMENTATION FAULT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
<li><strong>Reply:</strong> <a href="29014.php">dpchoudh .: "Re: [OMPI users] track progress of a mpi gather"</a>
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
