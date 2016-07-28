<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 08:46:52 2007" -->
<!-- isoreceived="20070816124652" -->
<!-- sent="Thu, 16 Aug 2007 08:46:51 -0400" -->
<!-- isosent="20070816124651" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with group code" -->
<!-- id="46C4473B.60202_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 08:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Tim Prins: "[OMPI devel] RML tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I am running into a problem with the ibm test 'group'. I will try to 
<br>
explain what I think is going on, but I do not really understand the 
<br>
group code so please forgive me if it is wrong...
<br>
<p>The test creates a group based on MPI_COMM_WORLD (group1), and a group 
<br>
that has half the procs in group1 (newgroup). Next, all the processes do:
<br>
<p>MPI_Group_intersection(newgroup,group1,&amp;group2)
<br>
<p>ompi_group_intersection figures out what procs are needed for group2, 
<br>
then calls
<br>
<p>ompi_group_incl, passing 'newgroup' and '&amp;group2'
<br>
<p>This then calls (since I am not using sparse groups) ompi_group_incl_plist
<br>
<p>However, ompi_group_plist assumes that the current process is a member 
<br>
of the passed group ('newgroup'). Thus when it calls 
<br>
ompi_group_peer_lookup on 'newgroup', half of the processes get garbage 
<br>
back since they are not in 'newgroup'. In most cases, memory is 
<br>
initialized to \0 and things fall through, but we get intermittent 
<br>
segfaults in optimized builds.
<br>
<p>In r I have put in a correction to a error check which should help show 
<br>
this problem.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Tim Prins: "[OMPI devel] RML tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
<li><strong>Reply:</strong> <a href="2156.php">Tim Prins: "Re: [OMPI devel] Problem with group code"</a>
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
