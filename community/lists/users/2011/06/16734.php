<?
$subject_val = "[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 04:14:04 2011" -->
<!-- isoreceived="20110622081404" -->
<!-- sent="Wed, 22 Jun 2011 10:16:33 +0200" -->
<!-- isosent="20110622081633" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl" -->
<!-- id="4E01A4E1.3090804_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl<br>
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 04:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>First of all, all my apologies because I post this message to both the 
<br>
bug and user mailing list. But for the moment, I do not know if it is a bug!
<br>
<p>I am running a CFD structured flow solver at ORNL, and I have an access 
<br>
to a small cluster (Smoky) using OpenMPI-1.4.2 with Infiniband by 
<br>
default. Recently we increased the size of our models, and since that 
<br>
time we have run into many infiniband related problems.  The most 
<br>
serious problem is a hard crash with the following error message:
<br>
<p>[/smoky45][[60998,1],32][/sw/sources/ompi/1.4.2/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] 
<br>
error creating qp errno says Cannot allocate memory/
<br>
<p>If we force the solver to use ethernet (mpirun -mca btl ^openib) the 
<br>
computations works correctly, although very slowly (a single iteration 
<br>
take ages). Do you have any idea what could be causing these problems?
<br>
<p>If it is due to a bug or a limitation into OpenMPI, do you think the 
<br>
version 1.4.3, the coming 1.4.4 or any 1.5 version could solve the 
<br>
problem? I read the release notes, but I did not read any obvious patch 
<br>
which could fix my problem. The system administrator is ready to compile 
<br>
a new package for us, but I do not want to ask to install to many of them.
<br>
<p>Thanks.
<br>
<pre>
-- 
/
Mathieu Gontier
skype: mathieu_gontier /
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16735.php">Gilbert Grosdidier: "Re: [OMPI users] Problems on large clusters"</a>
<li><strong>Previous message:</strong> <a href="16733.php">Thorsten Schuett: "Re: [OMPI users] Problems on large clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
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
